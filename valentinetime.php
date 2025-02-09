<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Love Journey</title>
    <style>
        body {
            font-family: "Pangolin", Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: rgb(251, 210, 255);
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            text-align: center;
            overflow: hidden; /* ป้องกันการเลื่อนหน้าจอ */
        }

        .back-btn {
            position: fixed;
            bottom: 50px; /* เพิ่มขึ้น 250px จากเดิม */
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(255, 102, 153, 0.9);
            border: none;
            color: #fff;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: bold;
            border-radius: 10px;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .back-btn:hover {
            /* transform: scale(1.1); */
            background-color: #ff3366;
        }

        .container {
            max-width: 400px;
            width: 90%;
            padding: 30px 20px;
            border-radius: 15px;
            text-align: center;
        }

        .container img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 1.5rem;
            color: #ff3366;
            font-weight: bold;
            margin-bottom: 10px;
        }

        p {
            font-size: 1.1rem;
            color: #fff;
        }

        .timer-table {
            width: 80%;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.3);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .timer-table td {
            font-size: 1.2rem;
            color: #ff3366;
            font-weight: bold;
        }

        .timer-table .label1 {
            font-size: 1rem;
            color: #666;
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 1.2rem;
            }

            .timer-table td {
                font-size: 1rem;
            }
        }

        canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1; /* ทำให้ canvas อยู่ด้านหลัง */
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Back Button -->
    <button class="back-btn" onclick="location.href='index.php'">
        <i class="fa-solid fa-arrow-left"></i> &nbsp; Back
    </button>

    <!-- Background Animation -->
    <canvas id="heartCanvas"></canvas>

    <!-- Content -->
    <div class="container">
        <h1>Our Love Journey</h1>
        <img src="images/10.jpg" alt="Love Story">
        <p>เราคบกันมานานแค่ไหนแล้วน้าาา ?</p>
        <table class="timer-table" id="timer-table" border="0">
            <tr>
                <td><div id="years">00</div><div class="label1">Year</div></td>
                <td><div id="months">00</div><div class="label1">Month</div></td>
            </tr>
            <tr>
                <td><div id="days">00</div><div class="label1">Days</div></td>
                <td><div id="hours">00</div><div class="label1">Hours</div></td>
            </tr>
            <tr>
                <td><div id="minutes">00</div><div class="label1">Minutes</div></td>
                <td><div id="seconds">00</div><div class="label1">Seconds</div></td>
            </tr>
        </table>
    </div>

    <script>
        // Start date of the relationship
        const startDate = new Date("2023-08-18T00:00:00");

        function updateTimer() {
            const now = new Date();
            let diff = now - startDate;

            let years = now.getFullYear() - startDate.getFullYear();
            let months = now.getMonth() - startDate.getMonth();

            if (months < 0) {
                years -= 1;
                months += 12;
            }

            let days = now.getDate() - startDate.getDate();

            if (days < 0) {
                months -= 1;
                const previousMonth = new Date(now.getFullYear(), now.getMonth(), 0);
                days += previousMonth.getDate();
            }

            const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
            const minutes = Math.floor((diff / (1000 * 60)) % 60);
            const seconds = Math.floor((diff / 1000) % 60);

            document.getElementById("years").textContent = years.toString().padStart(2, "0");
            document.getElementById("months").textContent = months.toString().padStart(2, "0");
            document.getElementById("days").textContent = days.toString().padStart(2, "0");
            document.getElementById("hours").textContent = hours.toString().padStart(2, "0");
            document.getElementById("minutes").textContent = minutes.toString().padStart(2, "0");
            document.getElementById("seconds").textContent = seconds.toString().padStart(2, "0");
        }

        setInterval(updateTimer, 1000);
        updateTimer();

        // Heart Animation
        const canvas = document.getElementById("heartCanvas");
        const ctx = canvas.getContext("2d");
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        const hearts = [];
        const heartCount = 50;

        function createHeartPath(x, y, size) {
            ctx.moveTo(x, y);
            ctx.bezierCurveTo(x - size / 2, y - size, x - size, y + size / 3, x, y + size);
            ctx.bezierCurveTo(x + size, y + size / 3, x + size / 2, y - size, x, y);
        }

        class Heart {
            constructor() {
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;
                this.size = Math.random() * 2 + 1;
                this.speedY = Math.random() * 1 - 0.5;
                this.speedX = Math.random() * 1 - 0.5;
                this.alpha = Math.random() * 0.7 + 0.3;
            }

            draw() {
                ctx.beginPath();
                createHeartPath(this.x, this.y, this.size * 10);
                ctx.fillStyle = `rgba(255, 102, 153, ${this.alpha})`;
                ctx.fill();
                ctx.closePath();
            }

            update() {
                this.y += this.speedY;
                this.x += this.speedX;

                if (this.y > canvas.height || this.y < 0 || this.x > canvas.width || this.x < 0) {
                    this.x = Math.random() * canvas.width;
                    this.y = Math.random() * canvas.height;
                }
            }
        }

        for (let i = 0; i < heartCount; i++) {
            hearts.push(new Heart());
        }

        function animate() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            hearts.forEach((heart) => {
                heart.draw();
                heart.update();
            });

            requestAnimationFrame(animate);
        }

        animate();
    </script>
</body>
</html>

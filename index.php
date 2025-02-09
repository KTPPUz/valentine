<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Valentine's Day</title>
    <link rel="stylesheet" href="style1.css">
    <style>
        /* Valentine card styling */
        .valentine-card {
            background-color: rgba(243, 203, 255, 0.52); /* Transparent background */
            border-radius: 15px;
            padding: 20px;
            max-width: 600px;
            margin: 20px auto;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .valentine-card:hover {
            transform: scale(1.05);
        }

        .valentine-card h3 {
            color: #e60000;
            font-family: 'Arial', sans-serif;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .valentine-card p {
            color:rgb(255, 255, 255);
            font-family: 'Verdana', sans-serif;
            font-size: 18px;
            line-height: 1.5;
        }

        .valentine-card img {
            width: 100px;
            margin-top: 10px;
        }

         .valentinemodal {
            background-color:rgb(255, 255, 255);
            border-radius: 15px;
            padding: 20px;
            max-width: 1000px;
            margin: 20px auto;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .valentinemodal:hover {
            transform: scale(1.05);
        }

        .valentinemodal h3 {
            color: #e60000;
            font-family: 'Arial', sans-serif;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .valentinemodal p {
            color: #ff3366;
            font-family: 'Verdana', sans-serif;
            font-size: 18px;
            line-height: 1.5;
        }

        .valentinemodal img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            /* border-radius: 10px; */
        }
        body {
            margin: 0;
            overflow: hidden;
            background-color: rgb(251, 210, 255);
        }

        canvas {
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
            pointer-events: none;
        }

        .container {
            position: relative;
            z-index: 2;
        }
    </style>

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body >
    <canvas id="heartCanvas"></canvas>
    <div class="container">
         
        <!-- <div class="heart"></div> -->
        <!-- <h1>Happy Valentine's Day!</h1> -->
        <!-- Valentine card -->
        <div class="valentine-card">
            <h1>Happy Valentine's Day!</h1>
            <!-- <p>Dear Thidarat Kikkhonthot,</p> -->
            <p>This is our love story!</p>

        </div>
        <table style="width: 50%;" border="0" align="center">
            <tr>
                <td>      <img src="images/camera.png" alt="" style="width: 100px;"></td>
                <td>        <img src="images/love.png" alt="" style="width: 100px;"></td>
            </tr>
            <tr>
                <td> <a href="valentine1.php" class="btn" style="text-decoration: none;">Moments</a></td>
                <td>  <a href="valentine2.php" class="btn1" style="text-decoration: none;"> Message</a></td>
            </tr>
        </table>
        <table style="width: 50%;" border="0" align="center">
            <tr>
                <td>      <img src="images/time.png" alt="" style="width: 100px;"></td>
                <td>        <img src="images/about.png" alt="" style="width: 45px;"></td>
            </tr>
            <tr>
                <td> <a href="valentinetime.php" class="btn" style="text-decoration: none;">Time</a></td>
                <td>  <a href="about.php" class="btn1" style="text-decoration: none;"> About</a></td>
            </tr>
        </table>
    </div>
</body>


</html>
   <script>
        const canvas = document.getElementById('heartCanvas');
        const ctx = canvas.getContext('2d');

        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        const hearts = [];
        const heartCount = 20;

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
                this.speedY = Math.random() * 2 - 1;
                this.speedX = Math.random() * 2 - 1;
                this.alpha = Math.random() * 0.8 + 0.2;
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

            hearts.forEach(heart => {
                heart.draw();
                heart.update();
            });

            requestAnimationFrame(animate);
        }

        animate();
    </script>
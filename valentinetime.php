<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Love Timer</title>
    <style>
        body {
            font-family: "Pangolin", Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        h1 {
            font-size: 3rem;
            font-family: "Solitreo", cursive;
            color: #ff3366;
            text-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
            animation: fadeIn 2s ease-in-out;
        }

        .timer {
            font-size: 2rem;
            font-weight: bold;
            background: rgba(0, 0, 0, 0.2);
            padding: 20px 40px;
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }
        .timer1 {
            font-size: 2rem;
            font-weight: bold;
            background: rgba(0, 0, 0, 0.2);
            padding: 20px 40px;
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }

        .back-btn {
                margin-top: 30px;
                background-color: rgba(255, 0, 102, 0.3);
                border: none;
                color: rgb(255, 255, 255);
                padding: 12px 25px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                border-radius: 10px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease;
        }

        .back-btn:hover {
            transform: scale(1.1);
            background:rgb(187, 152, 207);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        #shine {
            font-size: 3rem;
            font-weight: bold;
            color: rgba(255, 255, 255, 0.9);
            z-index: 10;
            text-shadow: 0 0 20px rgba(255, 85, 189, 0.8);
            animation: shine 3s infinite alternate;
        }

        @keyframes shine {
            0%, 100% {
                text-shadow: 0 0 20px rgba(255, 85, 189, 0.6),
                                         0 0 30px rgba(255, 85, 189, 0.4),
                                         0 0 40px rgba(255, 85, 189, 0.2);
            }
            50% {
                text-shadow: 0 0 25px rgba(255, 255, 255, 0.9),
                                         0 0 35px rgba(255, 85, 189, 0.8),
                                         0 0 45px rgba(255, 85, 189, 0.6);
            }
        }

        @media only screen and (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }

            .timer {
                font-size: 1.5rem;
                padding: 15px 30px;
            }

            .back-btn {
                font-size: 1rem;
                padding: 10px 20px;
            }
        }

        @media only screen and (max-width: 480px) {
            h1 {
                font-size: 1.5rem;
            }

            .timer {
                font-size: 1.2rem;
                padding: 10px 20px;
            }

            .back-btn {
                font-size: 0.8rem;
                padding: 8px 15px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body style="background: Url('images/sky1.jpg') no-repeat center center/cover;">
    <h1 id="shine">เราอยู่ด้วยกันมานานแค่ไหน 💞</h1>
    <div class="timer1" id="timer1">
        กำลังโหลด...
    </div>
    <div class="timer" id="timer">
        กำลังโหลด...
    </div>
    <button class="back-btn" onclick="location.href='index.php'"><i class="fa-solid fa-arrow-left"></i> &nbsp; Back</button>

    <script>
    // วันเริ่มคบ
    const startDate = new Date("2023-08-18T00:00:00");

    function updateTimer() {
        const now = new Date(); // เวลาปัจจุบัน
        let diff = now - startDate; // คำนวณความแตกต่าง (ms)

        // แปลง ms เป็น วัน, ชั่วโมง, นาที, วินาที
        let years = now.getFullYear() - startDate.getFullYear();
        let months = now.getMonth() - startDate.getMonth();

        if (months < 0) {
            years -= 1;
            months += 12;
        }

        let days = now.getDate() - startDate.getDate();

        if (days < 0) {
            months -= 1;
            let previousMonth = new Date(now.getFullYear(), now.getMonth(), 0);
            days += previousMonth.getDate();
        }

        const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
        const minutes = Math.floor((diff / (1000 * 60)) % 60);
        const seconds = Math.floor((diff / 1000) % 60);

        // อัปเดตข้อความในหน้าเว็บ
        document.getElementById("timer").innerHTML = 
            `<p>${days} วัน ${hours} ชั่วโมง ${minutes} นาที ${seconds} วินาที</p>`;

            document.getElementById("timer1").innerHTML = 
            `<p>${years} ปี ${months} เดือน</p>`;
    }

    // เรียกฟังก์ชัน updateTimer ทุกๆ 1 วินาที
    setInterval(updateTimer, 1000);

    // เรียกฟังก์ชันทันทีเมื่อโหลดหน้า
    updateTimer();
</script>

</body>
</html>

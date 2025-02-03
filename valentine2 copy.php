<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Valentine's Day</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
        <div class="envelope-wrapper">
            <div class="envelope">
                <div class="letter">
                    <div class="text">
                        <h3>Happy Valentine's Day! ❤️</h3>
                        <p>ขอบคุณที่อยู่เคียงข้างกันเสมอ</p>
                        <p>สำหรับทุกช่วงเวลาที่มีค่าและเป็นความทรงจำของเรา ฉันรักเธอ❤️</p>
                    </div>
                </div>
                
            </div>
            <div class="heart"></div>
        </div>
    </div>
        

    <script>
        const envelope = document.querySelector('.envelope-wrapper');
        envelope.addEventListener('click', () => {
            envelope.classList.toggle('flap');
        });
         function goBack() {
            window.history.back();
        }
    </script>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Love Letter</title>
    <style>
        body {
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('images/sky.jpg') no-repeat center center/cover;
            font-family: Arial, sans-serif;
        }
        .container {
            position: relative;
            text-align: center;
        }
        .envelope-wrapper {
            position: relative;
            width: 320px;
            height: 200px;
            cursor: pointer;
        }
        .envelope {
            width: 320px;
            height: 200px;
            background: #d4af37;
            position: relative;
            border-radius: 10px;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }
        .envelope::before {
            content: "";
            position: absolute;
            top: 0;
            left: 50%;
            width: 0;
            height: 0;
            border-left: 160px solid transparent;
            border-right: 160px solid transparent;
            border-bottom: 100px solid #b8860b;
            transform: translateX(-50%);
            transform-origin: top;
            z-index: 3;
            transition: transform 0.5s ease-in-out;
        }
        .envelope::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 0;
            border-top: 100px solid #c8a415;
            border-left: 160px solid transparent;
            border-right: 160px solid transparent;
            transform: translateX(-50%);
            z-index: 0;
        }
        .letter {
            width: 280px;
            background: white;
            padding: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) translateY(50px);
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.5s ease-in-out;
            z-index: 2;
        }
        /* ทำให้ฝาซองเปิดและจดหมายออกมาเมื่อโฮเวอร์ */
        .envelope-wrapper:hover .envelope::before {
            transform: translateX(-50%) rotateX(180deg);
        }
        .envelope-wrapper:hover .letter {
            transform: translate(-50%, -50%) translateY(-40px);
        }
        .back-btn {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background: #f4a261;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-align: center;
        }
        .back-btn:hover {
            background: #e76f51;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="envelope-wrapper">
            <div class="envelope"></div>
            <div class="letter">
                <p><strong>Dear Babeby,</strong></p>
                <p>Happy 1st love day ❤️</p>
                <p>ขอบคุณที่อยู่เคียงข้างกันเสมอ</p>
                <p>สำหรับทุกช่วงเวลาที่มีค่าและเป็นความทรงจำของเรา</p>
                <p>- YOU <3</p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <button class="back-btn" onclick="goBack()">← Back</button>
    </div>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>

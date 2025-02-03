<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Valentine Day Card</title>
  <!-- <link href="style.css" rel="stylesheet" type="text/css"> -->

  <style>
    * {
      margin: 0;
      padding: 0;
    }

    h1 {
      font-family: Solitreo;
    }

    body {
      height: 100vh;
      width: 100vw;
      background: #fee2e9;
      /* font-family: "Pangolin", cursive; */
      font-size: 1vmin;
      display: flex;
      align-items: center;
      justify-content: center;
      background: Url('images/sky1.jpg') no-repeat center center/cover;
    }

    .container {
      position: relative;
      top: 0vmin;
      touch-action: manipulation; /* Add this line */
    }

    .envelope {
      position: relative;
      background: #f980a1;
      height: 30vmin;
      width: 47.9vmin;
    }

    .card {
      position: absolute;
      background: white;
      height: 25vmin;
      width: 43vmin;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      left: 2.5vmin;
      top: 0vmin;
      animation: slide-rev 1s ease-out;
    }

    .message {
      position: absolute;
      top: 5vmin;
    }

    .cover {
      position: absolute;
      height: 0;
      width: 0;
      border-bottom: 15vmin solid #fba7bd;
      border-left: 24vmin solid transparent;
      border-right: 24vmin solid transparent;
      top: 15vmin;
      z-index: 3;
    }

    .cover::after {
      /*left triangle*/
      position: absolute;
      content: "";
      border-left: 24.5vmin solid #fcbbcc;
      border-bottom: 15vmin solid transparent;
      border-top: 15vmin solid transparent;
      top: -15vmin;
      left: -24vmin;
    }

    .cover::before {
      position: absolute;
      content: "";
      border-right: 24.5vmin solid #fcbbcc;
      border-bottom: 15vmin solid transparent;
      border-top: 15vmin solid transparent;
      top: -15vmin;
      left: -0.5vmin;
    }

    .lid {
      position: absolute;
      height: 0;
      width: 0;
      border-top: 15vmin solid #f980a1;
      border-left: 24vmin solid transparent;
      border-right: 24vmin solid transparent;
      top: 0;
      transform-origin: top;
      animation: open-rev 4s;
    }

    .container.open .lid {
      animation: open 0.7s;
      animation-fill-mode: forwards;
    }

    .container.open .card {
      animation: slide 0.4s ease-in-out;
      animation-delay: 0.5s;
      animation-fill-mode: forwards;
    }

    .shadow {
      position: relative;
      top: 3vmin;
      border-radius: 50%;
      opacity: 0.7;
      height: 2vmin;
      width: 48vmin;
      background: #e8c5d0;
    }

    .heart {
      position: relative;
      width: 5vmin;
      height: 4vmin;
      top: 7vmin;
      left: -1vmin;
    }

    .heart:before,
    .heart:after {
      position: absolute;
      content: "";
      left: 2.5vmin;
      top: 7vim;
      width: 2.5vmin;
      height: 4vmin;
      background: #f40b4a;
      border-radius: 2.5vmin 2.5vmin 0 0;
      transform: rotate(-45deg);
      transform-origin: 0 100%;
    }

    .heart:after {
      left: 0;
      transform: rotate(45deg);
      transform-origin: 100% 100%;
    }

    @keyframes open {
      0% {
        transform: rotateX(0);
      }
      100% {
        transform: rotateX(180deg);
      }
    }

    @keyframes slide {
      0% {
        transform: translateY(0);
      }
      100% {
        transform: translateY(-15vmin);
        z-index: 2;
      }
    }

    @keyframes open-rev {
      0% {
        transform: rotateX(180deg);
      }
      100% {
        transform: rotateX(0);
      }
    }

    @keyframes slide-rev {
      0% {
        transform: translateY(-15vmin);
      }
      100% {
        transform: translateY(0);
      }
    }

    .btn {
      position: absolute;
      bottom: 260px;
      right: 730px;
      background-color: rgba(255, 0, 102, 0.3);
      border: none;
      color: rgb(255, 255, 255);
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      font-size: 16px;
      cursor: pointer;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    /* Hover effect for the button */
    .btn:hover {
      transform: scale(1.05);
    }

    /* Media Queries for Responsiveness */
    @media (max-width: 768px) {
      .envelope {
        height: 40vmin;
        width: 60vmin;
      }

      .card {
        height: 35vmin;
        width: 55vmin;
        left: 2.5vmin;
      }

      .cover {
        border-bottom: 20vmin solid #fba7bd;
        border-left: 30vmin solid transparent;
        border-right: 30vmin solid transparent;
        top: 20vmin;
      }

      .cover::after {
        border-left: 30.5vmin solid #fcbbcc;
        border-bottom: 20vmin solid transparent;
        border-top: 20vmin solid transparent;
        top: -20vmin;
        left: -30vmin;
      }

      .cover::before {
        border-right: 30.5vmin solid #fcbbcc;
        border-bottom: 20vmin solid transparent;
        border-top: 20vmin solid transparent;
        top: -20vmin;
        left: -0.5vmin;
      }

      .lid {
        border-top: 20vmin solid #f980a1;
        border-left: 30vmin solid transparent;
        border-right: 30vmin solid transparent;
      }

      .btn {
        bottom: 20px;
        right: 20px;
        font-size: 14px;
        padding: 8px 16px;
      }
    }

    @media (max-width: 480px) {
      .envelope {
        height: 50vmin;
        width: 75vmin;
      }

      .card {
        height: 45vmin;
        width: 70vmin;
        left: 2.5vmin;
      }

      .cover {
        border-bottom: 25vmin solid #fba7bd;
        border-left: 37.5vmin solid transparent;
        border-right: 37.5vmin solid transparent;
        top: 25vmin;
      }

      .cover::after {
        border-left: 38vmin solid #fcbbcc;
        border-bottom: 25vmin solid transparent;
        border-top: 25vmin solid transparent;
        top: -25vmin;
        left: -37.5vmin;
      }

      .cover::before {
        border-right: 38vmin solid #fcbbcc;
        border-bottom: 25vmin solid transparent;
        border-top: 25vmin solid transparent;
        top: -25vmin;
        left: -0.5vmin;
      }

      .lid {
        border-top: 25vmin solid #f980a1;
        border-left: 37.5vmin solid transparent;
        border-right: 37.5vmin solid transparent;
      }

      .btn {
        bottom: 10px;
        right: 10px;
        font-size: 12px;
        padding: 6px 12px;
      }
    }
  </style>

  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
<link href='https://fonts.googleapis.com/css?family=Solitreo' rel='stylesheet'>
  <div class="container">
    <div class="envelope"></div>
    <div class="card">
      <!-- <h1 class="message">Do you know!<br>what’s on Valentine’s Day menu?<br>Me n U :)</h1> -->
      <p style="font-size: 15px;"><strong>ถึง ที่รักของฉัน</strong></p>
      <p style="font-size: 15px;">ขอบคุณที่อยู่เคียงข้างกันเสมอ</p>
      <p style="font-size: 15px;">สำหรับทุกช่วงเวลาที่มีค่า</p>
      <p style="font-size: 15px;">ฉันจะรักเธอวันนี้ และในทุกๆวันต่อจากนี้</p>
      <p style="font-size: 15px;">- YOU <3</p>
      <!-- <div class="heart"></div> -->
    </div>

    <div class="cover"></div>
    <div class="lid"></div>
    <br>
    <br>
    <br>
    <!-- <div class="shadow"></div> -->
  </div>
    <button class="btn" onclick="openCard()" style="margin-right: 165px;">Open Card</button>

   <a href="index.php" class="btn">
  
    <i class="fa-solid fa-arrow-left"></i> &nbsp; Back
  </a>

  <script>
    function openCard() {
      document.querySelector('.container').classList.toggle('open');
    }
  </script>
</body>
</html>
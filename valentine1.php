<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Valentine's Day Flip Book</title>

<style>
    .gallery {
        --d: 12s; /* duration */
        display: grid;
        place-items: center;
        width: 250px;
        margin-left: 200px;
    }

    .gallery > img {
        grid-area: 1/1;
        width: 100%;
        aspect-ratio: 1;
        object-fit: cover;
        border: 10px solid #f2f2f2;
        box-shadow: 0 0 4px #0007;
        z-index: 2;
        animation: slide var(--d) infinite, z-order var(--d) infinite steps(1);
    }

    .gallery img:last-child {
        animation-name: slide, z-order-last;
    }

    .gallery > img:nth-child(1) { animation-delay: calc(0*var(--d)); --r: 15deg; }
    .gallery > img:nth-child(2) { animation-delay: calc(-0.1*var(--d)); --r: -5deg; }
    .gallery > img:nth-child(3) { animation-delay: calc(-0.2*var(--d)); --r: 10deg; }
    .gallery > img:nth-child(4) { animation-delay: calc(-0.3*var(--d)); --r: -8deg; }
    .gallery > img:nth-child(5) { animation-delay: calc(-0.4*var(--d)); --r: 12deg; }
    .gallery > img:nth-child(6) { animation-delay: calc(-0.5*var(--d)); --r: -6deg; }
    .gallery > img:nth-child(7) { animation-delay: calc(-0.6*var(--d)); --r: 7deg; }
    .gallery > img:nth-child(8) { animation-delay: calc(-0.7*var(--d)); --r: -10deg; }
    .gallery > img:nth-child(9) { animation-delay: calc(-0.8*var(--d)); --r: 5deg; }
    .gallery > img:nth-child(10) { animation-delay: calc(-0.9*var(--d)); --r: -3deg; }

    @keyframes slide {
        10% { transform: translateX(120%) rotate(var(--r)); }
        0%, 100%, 20% { transform: translateX(0%) rotate(var(--r)); }
    }

    @keyframes z-order {
        10%, 20% { z-index: 1; }
        80% { z-index: 2; }
    }

    @keyframes z-order-last {
        10%, 20% { z-index: 1; }
        90% { z-index: 2; }
    }

    body {
      margin: 0;
      min-height: 100vh;
      display: grid;
      place-content: center;
      background: #f8f6f1;
      overflow: hidden;
      background: url('images/sky1.jpg') no-repeat center center/cover;
      /* backdrop-filter: blur(2px); */
    }

    #hedlinecontainer {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
        margin-bottom: 60px;
    }

    #shine {
        font-size: 60px;
        font-weight: bold;
        color: rgba(255, 0, 102, 0.5);
        z-index: 10;
        background: -webkit-gradient(linear, left top, right top, from(#222), to(#222), color-stop(0.5, #fff)) 0 0 no-repeat;
        -webkit-background-size: 150px;
        -webkit-background-clip: text;
        -webkit-animation: shine 3s infinite;
        text-shadow: 0 0px 5px rgba(233, 85, 189, 0.6);
    }

    #shine1 {
        font-size: 20px;
        font-weight: bold;
        color: rgba(255, 0, 102, 0.5);
        z-index: 10;
        background: -webkit-gradient(linear, left top, right top, from(#222), to(#222), color-stop(0.5, #fff)) 0 0 no-repeat;
        -webkit-background-size: 150px;
        -webkit-background-clip: text;
        -webkit-animation: shine 3s infinite;
        text-shadow: 0 0px 5px rgba(233, 85, 189, 0.6);
        margin-top: 20px;
    }

    @-webkit-keyframes shine {
        0%, 10% { background-position: -1000px; }
        20% { background-position: top left; }
        90% { background-position: top right; }
        100% { background-position: 1000px; }
    }

    @media only screen and (max-width: 600px) {
        #shine { font-size: 22px; }
        .gallery {
            width: 150px;
            margin-left: 60px;
        }
    }

    .btn {
        background-color: rgba(255, 0, 102, 0.3);
        border: none;
        color: rgb(255, 255, 255);
        padding: 10px 20px;
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
</style>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

  <div id="hedlinecontainer">
    <div id="shine">Happy Valentine's Day 💞</div>
  </div>

  <div class="gallery">
    <img src="images/1.jpg" alt="couple holding hands">
    <img src="images/2.jpg" alt="sunset love">
    <img src="images/3.jpg" alt="romantic moment">
    <img src="images/20.jpg" alt="gift for lover">
    <img src="images/5.jpg" alt="couple under the stars">
    <img src="images/6.jpg" alt="happy valentine">
    <img src="images/7.jpg" alt="heart shape hands">
    <img src="images/8.jpg" alt="love notes">
    <img src="images/16.jpg" alt="together forever">
    <img src="images/10.jpg" alt="a romantic surprise">
  </div>
  <div id="hedlinecontainer">
    <div id="shine1">ทุกที่ ที่ฉันไปจะมีเธออยู่ข้างๆเสมอ</div>
  </div>
  <div align="right">
    <a href="index.php" style="text-decoration: none;" class="btn">
      <i class="fa-solid fa-arrow-left"></i> &nbsp; Back
    </a>
  </div>

</body>
</html>

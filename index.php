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
    </style>

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body style="background: Url('images/sky1.jpg') no-repeat center center/cover;">
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
                <td>        <img src="images/love.png" alt="" style="width: 100px;"></td>
            </tr>
            <tr>
                <td> <a href="valentinetime.php" class="btn" style="text-decoration: none;">Time</a></td>
                <td>  <a href="valentine2.php" class="btn1" style="text-decoration: none;"> Question</a></td>
            </tr>
        </table>
    </div>
</body>


</html>
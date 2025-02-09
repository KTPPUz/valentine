<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Answer the Questions</title>
  <link rel="stylesheet" href="stylej1.css">
  <!-- Include SweetAlert2 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>
<body>
  
  <canvas id="heartCanvas"></canvas>
  <div class="quiz-container">
    <h1>Answer the Questions</h1>
    <!-- Question 2 -->
    <div class="question">
      <p class="font1"><strong>คำถามที่ 2:</strong> จังหวัดที่เราไปเที่ยวด้วยกัน (โดยที่ไปกันแค่2คน)</p>
      <div class="options">
        <button class="option font1" onclick="selectAnswer(2, '1')">ชลบุรี</button>
        <button class="option font1" onclick="selectAnswer(2, '2')">บุรีรัมย์</button>
        <button class="option font1" onclick="selectAnswer(2, '3')">พิษณุโลก</button>
      </div>
    </div>
  </div>

  <!-- Include SweetAlert2 JS -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
  <script>
    // Store the correct answer for question 2
    const correctAnswers = {
      2: '1', // Question 2: ชลบุรี
    };

    // Store user's answers
    let userAnswers = {};

    // Function to select an answer
    function selectAnswer(questionNumber, answer) {
      userAnswers[questionNumber] = answer;
      checkAnswers(); // Check the answer immediately after selection
    }

    // Function to check answers and display result
    function checkAnswers() {
      const questionNumber = 2;
      const userAnswer = userAnswers[questionNumber];
      const correctAnswer = correctAnswers[questionNumber];

      if (userAnswer === correctAnswer) {
        // If the answer is correct
        Swal.fire({
          position: 'center',
          title: 'ยินดีด้วย อ้วนตอบถูกหมดทุกคำถามม เอาใจไปเลย ❤️',
          imageUrl: 'images/heart2.jpg', // Replace with the path to your heart image
          imageWidth: 150,
          imageHeight: 150,
          imageAlt: 'Heart',
          confirmButtonText: 'เสร็จสิ้น',
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = 'index.php'; // Redirect to the next page
          }
        });
      } else {
        // If the answer is incorrect
        Swal.fire({
          position: 'center',
          title: 'ไม่ถูกต้อง น้องจะโกรธแย้วนะ!',
          imageUrl: 'images/cat.png', // Replace with the path to your angry cat image
          imageWidth: 150,
          imageHeight: 150,
          imageAlt: 'Angry Cat',
          confirmButtonText: 'แมวอ้วน !!',
        });
      }
    }

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
</body>
</html>

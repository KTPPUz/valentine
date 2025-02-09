<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Answer the Questions</title>
    <link rel="stylesheet" href="stylej.css">
    <!-- Include SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <canvas id="heartCanvas"></canvas>
    <div class="quiz-container">
        <h1>Answer the Questions</h1>
        <div class="question" id="question-container">
            <p class="font1"><strong>คำถามที่ 1:</strong> เราคุยกันวันแรก วันที่เท่าไหร่?</p>
            <div class="options">
                <button class="option font1" onclick="selectAnswer(1, '15/06/2566')">15/06/2566</button>
                <button class="option font1" onclick="selectAnswer(2, '13/06/2566')">13/06/2566</button>
                <button class="option font1" onclick="selectAnswer(3, '18/06/2566')">18/06/2566</button>
            </div>
        </div>
    </div>
    

    <!-- Include SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script>
      // Store the correct answer for question 1
      const correctAnswer = '13/06/2566'; // Correct answer is 13/06/2566

      // Function to select an answer and check if it's correct
      function selectAnswer(questionNumber, answer) {
          if (questionNumber == 2) {
              if (answer === correctAnswer) {
                Swal.fire({
                    position: 'center',
                    title: 'ถูกต้อง! ยินดีด้วย ❤️',
                    imageUrl: 'images/heart2.jpg', // Path to your heart image
                    
                    imageWidth: 150,
                    imageHeight: 150,
                    imageAlt: 'Heart',
                    confirmButtonText: 'ต่อไป',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'about1.php'; // Replace 'about1.php' with your second page
                    }
                });
              } 
          }
          else {
                  // If the answer is incorrect, show a SweetAlert2 alert with an angry cat image
                  Swal.fire({
                      position: 'center',
                      title: 'ไม่ถูกต้อง น้องจะโกรธแย้วนะ!',
                    //   imageUrl: 'images/cat.png', // Path to your cat image
                      imageUrl: 'images/catt.jpg', // Path to your cat image
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

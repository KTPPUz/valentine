<!-- <!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valentine Quiz</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        /* body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #ffe6ea;
            padding: 50px;
        } */
          body {
            font-family: "Pangolin", Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            /* background: linear-gradient(135deg, #ff9a9e, #fad0c4); */
            background: url('images/sky1.jpg') no-repeat center center/cover;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;

        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }
        button {
            display: block;
            margin: 10px auto;
            padding: 10px 20px;
            border: none;
            background: #ff6699;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #ff3366;
        }
        .heart {
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font-size: 100px;
            color: red;
            display: none;
        }
        .fireworks {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>เราคุยกันครั้งแรกวันที่เท่าไหร่?</h2>
        <button onclick="checkAnswer(false)">15/06/2566</button>
        <button onclick="checkAnswer(true)">13/06/2566</button>
        <button onclick="checkAnswer(false)">18/07/2566</button>
    </div>
    
    <div class="heart">❤️</div>
    <canvas class="fireworks"></canvas>

    <script>
        function checkAnswer(isCorrect) {
            if (isCorrect) {
                document.querySelector('.heart').style.display = 'block';
                document.querySelector('.fireworks').style.display = 'block';
                startFireworks();
                setTimeout(() => {
                    document.querySelector('.heart').style.display = 'none';
                    document.querySelector('.fireworks').style.display = 'none';
                }, 3000);
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'ผิด!',
                    text: 'คำตอบไม่ถูกต้อง ลองอีกครั้ง!',
                    confirmButtonColor: '#ff6699'
                });
            }
        }
        
        function startFireworks() {
            const canvas = document.querySelector(".fireworks");
            const ctx = canvas.getContext("2d");
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;

            let particles = [];

            function createParticles(x, y) {
                for (let i = 0; i < 50; i++) {
                    particles.push({
                        x: x,
                        y: y,
                        vx: (Math.random() - 0.5) * 4,
                        vy: (Math.random() - 0.5) * 4,
                        size: Math.random() * 4 + 2,
                        color: `hsl(${Math.random() * 360}, 100%, 50%)`,
                        life: 50
                    });
                }
            }
            
            createParticles(canvas.width / 2, canvas.height / 2);
            
            function animateParticles() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                particles.forEach((p, i) => {
                    p.x += p.vx;
                    p.y += p.vy;
                    p.life--;
                    ctx.fillStyle = p.color;
                    ctx.beginPath();
                    ctx.arc(p.x, p.y, p.size, 0, Math.PI * 2);
                    ctx.fill();
                    if (p.life <= 0) particles.splice(i, 1);
                });
                if (particles.length > 0) requestAnimationFrame(animateParticles);
            }
            animateParticles();
        }
    </script>
</body>
</html> -->

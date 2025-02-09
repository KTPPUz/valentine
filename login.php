<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
  <div class="login-container">
    <h2>Enter our password</h2>
    <div class="login-content">
      <div class="image-container">
        <img src="images/14.jpg" alt="Couple Picture">
      </div>
      <div class="keypad">
        <input type="password" id="password" readonly>
        <div class="keys">
          <button onclick="pressKey('1')">1</button>
          <button onclick="pressKey('2')">2</button>
          <button onclick="pressKey('3')">3</button>
          <button onclick="pressKey('4')">4</button>
          <button onclick="pressKey('5')">5</button>
          <button onclick="pressKey('6')">6</button>
          <button onclick="pressKey('7')">7</button>
          <button onclick="pressKey('8')">8</button>
          <button onclick="pressKey('9')">9</button>
          <button onclick="clearPassword()">C</button>
          <button onclick="pressKey('0')">0</button>
          <button onclick="checkPassword()">✔</button>
        </div>
      </div>
    </div>
    <footer>
      <p>( Made with ❤️ )</p>
    </footer>
  </div>
  <!-- <script src="script.js"></script> -->
</body>
</html>
<script>
    let passwordInput = '';
const correctPassword = '180866';

function pressKey(key) {
  if (passwordInput.length < 6) {
    passwordInput += key;
    document.getElementById('password').value = passwordInput;
  }
}

function clearPassword() {
  passwordInput = '';
  document.getElementById('password').value = '';
}

function checkPassword() {
  if (passwordInput === correctPassword) {
    alert('Welcome To Valentine ❤️');
    window.location.href = 'index.php';
  } else {
    alert('Incorrect password. Please try again.');
    clearPassword();
  }
}

</script>

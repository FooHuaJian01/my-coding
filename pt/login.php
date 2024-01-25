<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Login and Registration Form</title>
    <link rel="stylesheet" href="css_login/style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="img/hv.jpg" alt="Holiday Villa">
        <div class="text">
          <span class="text-1">Let get the job Part Time <br> at Holiday Villa JBCC</span>
          <span class="text-2">Let's get connected</span>
        </div>
      </div>
      <div class="back">
        <!--<img class="backImg" src="images/backImg.jpg" alt="">-->
        <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>

          <form action="process_login.php" method= "POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name= "email" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="passwordField" placeholder="Enter your password" required>
                <button type="button" class="button-show" id="showPasswordButton">Show</button>
              </div>
              <div class="text"><a href="#">Forgot password?</a></div>

              <div class="button input-box">
                <input type="submit" name="submit" value="Sumbit">
              </div>
              <div class="text sign-up-text">Don't have an account? <a href="register.php">Sigup now </div>
            </div>
        </form>
      </div>
    </div>
    </div>
  </div>
</body>
        <script>
          // JavaScript code to toggle password visibility
          document.getElementById('showPasswordButton').addEventListener('click', function() {
            var passwordField = document.getElementById('passwordField');
            if (passwordField.type === 'password') {
              passwordField.type = 'text';
            } else {
              passwordField.type = 'password';
            }
          });
        </script>

</html>
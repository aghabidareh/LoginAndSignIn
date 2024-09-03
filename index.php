<?php

require_once('config/loader.php');


?>?

<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="./assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container" id="container">
    <div class="form-container sign-up">
      <!-- sign up -->
      <form method="post" action="action/sign-up.php">
        <h1>Create Account</h1>
        <div class="social-icons">
          <a href="#" class="icons"><i class="fa-brands fa-google-plus-g"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-github"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
        <span>or use your email to registration</span>
        <input type="text" name="username" placeholder="userName">
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="mobile" placeholder="MObileNumber">
        <input type="password" name="password" placeholder="Password">
        <button type="submit" name="signup">Sign Up</button>
      </form>
    </div>
    <!-- sign in  -->
    <div class="form-container sign-in">
      <form method="post" action="action/sign-in.php">
        <h1>Sign In</h1>
 <br>
            <span>or use your email/password</span>
            <input type="text" name="key" placeholder="Mobile / Username / Email">
            <input type="password" name="password" placeholder="Password">
            <a href="#">Forget your Password?</a>
            <div style="display: inline;">
                <button type="submit" name="signin">Sign In</button>
                <a style="margin-left: 15px" href="otp.php">Send OTP</a>        
            </div>
            <?php if(isset($_GET['notUser'])){?>
              <p style="width: 100%;" class="alert alert-danger">User Not Found!</p>
            <?php }else if(isset($_GET['log'])){ ?>
              <p style="width: 100%;" class="alert alert-success">Now You Logged In!</p>
              <?php } ?>
      </form>
    </div>
    <div class="toggle-container">
      <div class="toggle">
        <div class="toggle-panel toggle-left">
          <h1>Welcome Back!</h1>
          <p>Enter your Personal details to use all of site features</p>
          <button class="hidden" id="login">Sign In</button>
        </div>
        <div class="toggle-panel toggle-right">
          <h1>Hello, Friend!</h1>
          <p>Register with your Personal details to use all of site features</p>
          <button class="hidden" id="register">Sign Up</button>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="./assets/script/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
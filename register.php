<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sign Up</title>
  <link rel="icon" href="img/core-img/logo.ico">
  <link rel="stylesheet" href="signup.css">
  <link rel="stylesheet" href="style.css">
</head>
<body class="signup">
  <header class="header-area">
          <nav class="classy-navbar justify-content-between" id="musicaNav">
            <a href="index.html" class="nav-brand"><img src="img/core-img/banger2.png" alt=""></a>
          </nav>
  </header>
  <div id="login-box">
    <div class="left">
      <h1 class="heading">Sign up</h1>
      <form action="register.php" method="post">
        <?php include('error.php'); ?>
        <input type="text" name="username" placeholder="Enter your username">
        <input type="text" name="email" placeholder="Enter your email">
        <input type="password" name="password" placeholder="Enter your password">
        <input type="password" name="password2" placeholder="Re-enter the passwoerd">
        <a class="linkLogin" href="login.php">Already a user?</a>
        <button class="newUser" name="regi">Sign me up</button>
      </form>
    </div>
  
    <div class="right">
      <span class="loginwith">Sign in with<br />social network</span>
    
      <button class="social-signin" onclick="window.location.href = 'https://www.facebook.com';">Log in with facebook</button>
      <button class="social-signin" onclick="window.location.href = 'https://twitter.com/login?lang=en';">Log in with Twitter</button>
      <button class="social-signin" onclick="window.location.href = 'https://www.linkedin.com/login';">Log in with LinkedIn</button>
    </div>
    <div class="or">OR</div>
  </div>
</body>
</html>
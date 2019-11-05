<?php?>
<html>
  <head>
    <link rel="icon" type="image/png" href="favicon.png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <?php include_once( "navbar.html" ); ?>

  <body>
    <form action="login_handler.php" id = "forms" method = "post">
      <label>username:</label><input type="text" name="username">
      <label>password:</label><input type="text" name="password">
      <p><input type="submit" name="login" value="login"></p>
      <p><a href="register.php" class="button--style-red">Create Account</a></p>
    </form>
    <div class="footer">
      <p>Parker Crawford. Fall 2019. Drink more water</p>
    </div>
  </body>
</html>


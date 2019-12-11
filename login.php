<?php
  session_start();
?>
<html>
  <head>
    <link rel="icon" type="image/png" href="favicon.png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <div id=topbar>
      <span id=logo><img src="pixel-art.png"/></span>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php">**login**</a></li>
        <li><a href="new_post.php">New Post</a></li>
        <!--<li><a href="album_preview.php">Album Preview</a></li>-->
      </ul>
      <hr>
    </div>
    <?php //include_once( "navbar.html" ); ?>

  <body>
    <form action="login_handler.php" id = "forms" method = "post">
      <label>username:</label><input type="text" name="username">
      <label>password:</label><input type="text" name="password">
      <p><input type="submit" name="login" value="login"></p>
      <?php echo "<p>current user: " . $_SESSION["bad_login"] . "</p>"?>
      <p><a href="register.php" class="button--style-red">Create Account</a></p>
      <p><a id=logout href="logout_handler.php" class="button--style-red">Logout</a></p>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
        $("#logout").click(function(){
          //$(this).hide();
          alert('Logged out of user');
        });
        });
      </script>
    </form>
    <div class="footer">
      <?php
        $current_login = htmlspecialchars($_SESSION["curr_user"]); 
        echo "<p>current user: " . $current_login . "</p>";
      ?>
      <p>Parker Crawford. Fall 2019. Drink more water</p>
      <p><a id=help class="button--style-red">Help</a></p>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
        $("#help").click(function(){
          //$(this).hide();
          alert('From this page, you can log into your account in order to make new posts');
        });
        });
      </script>
    </div>
  </body>
</html>

  
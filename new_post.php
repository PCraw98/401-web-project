<?php
  session_start();
?>
<html>
  <head>
    <link rel="icon" type="image/png" href="favicon.png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <?php include_once( "navbar.html" ); ?>
  </head>
  <body>
    <form action="post_handler.php" id = "forms" method = "post">
      <p>ENSURE YOU ARE LOGGED IN BEFORE POSTING</p>
      <p>band name:</p>
      <input type="text" name="bandname">
      
      <p>genre:</p>
      <input type="text" name="genre">
      
      <p>album name:</p>
      <input type="text" name="album">
      
      <input type="submit" name="create" value="create">
    </form>
    <div class="footer">
      <p>Parker Crawford. Fall 2019. Drink more water</p>
      <?php
        $current_login = $_SESSION["curr_user"]; 
        echo "<p>current user: " . $current_login . "</p>";
      ?>
    </div>
  </body>
</html>

<?php
  session_start();
  if(!isset($_SESSION['curr_user'])){
    header ("Location: login.php");
    exit; // stop further executing, very important
  }
?>
<html>
  <head>
    <link rel="icon" type="image/png" href="favicon.png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <div id=topbar>
      <span id=logo><img src="pixel-art.png"/></span>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php">login</a></li>
        <li><a href="new_post.php">**New Post**</a></li>
        <!--<li><a href="album_preview.php">Album Preview</a></li>-->
      </ul>
      <hr>
    </div>
    <?php //include_once( "navbar.html" ); ?>
  </head>
  <body>
    <form action="post_handler.php" id = "forms" method = "post">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript">
         //$(document).ready(function(){
          //$("#logout").click(function(){
          //$(this).hide();
          //  alert('ALERT: MAKE SURE YOU ARE LOGGED IN BEFORE POSTING');
          //});
        //});
      </script>
      <p><label for="bandname">Enter your bandname:&ensp;&ensp;</label></p>
      <input type="text" id ="bandname" name="bandname">
      
      <p><label for="genre">Enter the genre for the band:&ensp;</label></p>
      <input type="text" id ="genre" name="genre">
      
      <p><label for="album">Enter the album name for your band:</label></p>
      <input type="text" id ="album" name="album">
      
      <input type="submit" id ="submit" name="create" value="create">
    </form>
    <div class="footer">
      <?php
        $current_login = htmlspecialchars($_SESSION["curr_user"]); 
        echo "<p>current user: " . $current_login . "</p>";
      ?>
      <p>Parker Crawford. Fall 2019. Drink more water</p>
      <p><a id=help class="button--style-red">Help</a></p>
      <script type="text/javascript">
        $(document).ready(function(){
        $("#help").click(function(){
          //$(this).hide();
          alert('From this page, you can create a new post, which you can then view on the home page');
        });
        });
      </script>
    </div>
  </body>
</html>

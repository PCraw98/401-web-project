<?php 
session_start();
include_once 'Dao.php';
$dao = new Dao();
?>
<html>
  <head>
    <link rel="icon" type="image/png" href="favicon.png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <?php
      include_once( "navbar.html" );
    ?>
  </head>
  <body>
    <div id="post_list">
      <div id="message">
        <p>Recent Posts:</p>
      </div>
      
      <?php
        $posts = $dao->getPosts();
        echo "<table id='posts'>";
        foreach($posts as $post) {
          echo "
            <div id='post'>
              <div>author: " . htmlspecialchars($post['post_author']) . "</div>
              <div>name:    " . htmlspecialchars($post['post_bandname']) . "</div>
              <div>genre:   " . htmlspecialchars($post['post_genre']) . "</div>
              <div>album:   " . htmlspecialchars($post['post_album']) . "</div>
            </div>";
        }
          echo "</table>";
      ?>
    </div>
    <div class="footer">
      <p>Parker Crawford. Fall 2019. Drink more water</p>
      <?php
        $current_login = $_SESSION["curr_user"]; 
        echo ("<p>current user: " . $_SESSION["curr_user"] . "</p>");
      ?>
    </div>
  </body>
</html>
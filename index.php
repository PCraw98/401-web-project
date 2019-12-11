<?php 
session_start();
include_once 'Dao.php';
$dao = new Dao();
?>
<html>
  <head>
    <link rel="icon" type="image/png" href="favicon.png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <div id=topbar>
      <span id=logo><img src="pixel-art.png"/></span>
      <ul>
        <li><a href="index.php">**Home**</a></li>
        <li><a href="login.php">login</a></li>
        <li><a href="new_post.php">New Post</a></li>
        <!--<li><a href="album_preview.php">Album Preview</a></li>-->
      </ul>
      <hr>
    </div>
    <?php
      //include_once( "navbar.html" );
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
              <div>bandname:    " . htmlspecialchars($post['post_bandname']) . "</div>
              <div>genre:   " . htmlspecialchars($post['post_genre']) . "</div>
              <div>album:   " . htmlspecialchars($post['post_album']) . "</div>
            </div>";
        }
          echo "</table>";
      ?>
    </div>
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
          alert('From this page, you can view existing posts from clever users. To make your own post, first login and then go to the new posts page.');
        });
        });
      </script>
    </div>
  </body>
</html>
<html>
  <head>
    <link rel="icon" type="image/png" href="favicon.png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <?php
      include_once( "navbar.html" );
      echo ($_SESSION['login_message']);
    ?>
  </head>
  <body>
    <div id="post_list">
      <div id="message">
        <p>Recent Posts:</p>
      </div>
      <div id="post">
        <div id="author">author: &emsp;&ensp;&ensp;Parker Crawford</div>
        <div id="bandname">bandname:&emsp;Sad Compiler</div>
        <div id="genre">genre:&emsp;&ensp;&ensp;bluegrass/techno</div>
        <div id="album">album:&emsp;&ensp;*praying in c++*</div>
        <div id="rating">rating:&emsp;&ensp;&ensp;4.3</div>
      </div>
      <div id="post">
	    <div id="author">author: &emsp;&ensp;&ensp;Nate St. George</div>
        <div id="bandname">bandname:&emsp;Basketball Necromancers</div>
        <div id="genre">genre:&emsp;&ensp;&ensp;hair metal/rap</div>
        <div id="album">album:&emsp;&ensp;orlando dark magic</div>
        <div id="rating">rating:&emsp;&ensp;&ensp;3.8</div>
      </div>
      <?php include_once( "post.php" ); ?>
    </div>
    <div class="footer">
      <p>Parker Crawford. Fall 2019. Drink more water</p>
    </div>
  </body>
</html>


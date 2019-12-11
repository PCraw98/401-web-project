<?php
  session_start();
  session_destroy();
  echo "<script>alert('Hello World');</script>";
  header("Location: login.php");
  exit;
?>
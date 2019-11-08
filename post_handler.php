<?php
session_start();
include_once 'Dao.php';
if(isset($_POST["create"])){
    $username = $_SESSION["curr_user"];
    $bandname = filter_var($_POST["bandname"], FILTER_SANITIZE_STRING);
    $genre = filter_var($_POST["genre"], FILTER_SANITIZE_STRING);
    $album = filter_var($_POST["album"], FILTER_SANITIZE_STRING);
    $_SESSION["bandname"]=$bandname;
    $dao = new Dao();
    $dao->newPost($username, $bandname, $genre, $album);
    $_SESSION['post_created'] = "user has been registered";
    header("Location: index.php");
    exit();
}
?>
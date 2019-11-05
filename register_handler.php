<?php
session_start();
include_once 'Dao.php';
if(isset($_POST['register'])){
    $username = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
    $dao = new Dao();
    $dao->registerUser($username,$password);
    $_SESSION['is_registered'] = "user has been registered";
    header("Location: index.php");
    exit();
}
?>
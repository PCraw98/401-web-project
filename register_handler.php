<?php
session_start();
include_once 'Dao.php';
if(isset($_POST['register'])){
    $username = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
    $dao = new Dao();
    //if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%?_^&*]{6,25}$/', $password)) {
    //    $_SESSION['register_error']='<p>the password does not meet the requirements! expected=(minimum of 6 characters, upper or lower case allowed, at least one digit, and one special character)</p>';
    //    header("Location: register.php");
    //} else {
        $dao->registerUser($username,$password);
        $_SESSION['is_registered'] = "user has been registered";
        header("Location: index.php");
       exit();
    //}
}
?>
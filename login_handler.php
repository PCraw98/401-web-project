<?php
    session_start();
    include_once 'Dao.php';
    if(isset($_POST['login'])){
        $username = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
        $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
        $dao = new Dao();
        $valid = $dao->loginUser($username,$password);
        if ($valid) {
            $login = true;
        } else {
            $login = false;
        }

        if ($login) {
            $_SESSION['login_message'] = "Welcome" .$username;
            $_SESSION['logged_in'] = true;
            $_SESSION['curr_user'] = $username;
            header("Location: index.php");
        } else {
            $_SESSION['bad_login'] = "invalid username or password";
            $_SESSION['logged_in'] = false;
            header("Location: login.php");
        }
        exit();
    }
?>
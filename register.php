
<?php
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
    </head>
    <body>
        <h1>Register</h1>
        <form action="register_handler.php" method="post">
            <label for="username">Username</label>
            <p><input type="text" id="username" name="username"></p>
            <label for="password">Password</label>
            <p><input type="text" id="password" name="password"></p>
            <input type="submit" name="register" value="register"></button>
            <?php echo $_SESSION['register_error'];?>
        </form>
    </body>
</html>
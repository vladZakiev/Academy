<?php
include('../db_conectio.php') ;
    if (isset($_POST['registration'])){
        $login = $_POST['login'];
        $password = $_POST['password'];

        if (!$login || !$password){
            $error = "Enter login and password";
            echo $error;
        }
        if($login && $password){
            $query = "INSERT INTO `users` (`id`,`login`, `password`) VALUES (NULL, '$login', md5('$password'));";
            mysqli_query($db_connect , $query);
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="login" placeholder="Login">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="registration" value="Registration">
    </form>
</body>
</html>
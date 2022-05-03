<?php
include('../db_conectio.php');
if (isset($_POST['registration'])){
    $login = $_POST['login'];
    $password = $_POST['password'];

    if (!$login || !$password){
        $error = "Enter login and password";
        echo $error;
    }
    if($login && $password){
        $query = "INSERT INTO `users` (`id`,`login`, `password`) VALUES (NULL, '$login', '$password');";
        mysqli_query($db_connect , $query);
        $_SESSION['login'] = $login;
        header("Location: ../dashboard");
    }
}
if(isset($_SESSION["login"])){
    unset($_SESSION["login"]);
}
session_start();

    if (isset($_POST['signin'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $login = stripslashes($_REQUEST['login']);
        $login = mysqli_real_escape_string($db_connect, $login);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($db_connect, $password);
        $query    = "SELECT * FROM `users` WHERE login='$login' AND password='" . $password . "'";
        $result = mysqli_query($db_connect, $query);
        $rows = mysqli_num_rows($result);
        if (!empty($rows)) {
            echo ' true';
            $_SESSION['login'] = $login;
            header("Location: ../dashboard");
        } else {
            $notice = 'Wrong password or login, try again!';
        }
}
?>
<?php require_once ('../header.php') ?>
<body>
    <div class="auth">
    <div class="forms_wrapper">
        <h3>Login If You have an account!</h3>
        <br>
        <form class="form_auth" method="POST">
                <input class="form_auth_input" type="text" name="login" placeholder="Login">
                <input class="form_auth_input" type="password" name="password" placeholder="Password">
                <input class="form_auth_btn" type="submit" name="signin" value="Login">
        </form>
        <h4 class="error"><?php if(isset($notice)) {
            echo $notice;
            } ;?></h4>
        <h3>Register if you have not account!</h3>
        <br>
        <form class="form_auth_reg" method="POST" name="registration">
            <input class="form_auth_input" type="text" name="login" placeholder="Login">
            <input class="form_auth_input" type="password" name="password" placeholder="Password">
            <input class="form_auth_btn" type="submit" name="registration" value="Registration">
        </form>
    </div>
    </div>
</body>
<?php require_once ('../footer.php') ?>


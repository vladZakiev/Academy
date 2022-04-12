<?php
    include('../db_conectio.php');
    session_start();
    if (isset($_POST['signin'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $login = stripslashes($_REQUEST['login']);
        $login = mysqli_real_escape_string($db_connect, $login);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($db_connect, $password);
        $query    = "SELECT * FROM `users` WHERE login='$login' AND password='" . $password . "'";
        echo $query;
        $result = mysqli_query($db_connect, $query);
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['login'] = $login;
            header("Location: ../dashboard");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p>Try Again</p>";
        }
    }
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
        }
    }
    ?>
<?php require_once ('../header.php') ?>
<body>
    <form class="form_auth" method="POST">
            <input class="form_auth_input" type="text" name="login" placeholder="Login">
            <input class="form_auth_inpput" type="password" name="password" placeholder="Password">
            <input class="form_auth_btn" type="submit" name="signin" value="Login">
    </form>
    <form method="POST" name="registration">
        <input class="form_auth" type="text" name="login" placeholder="Login">
        <input class="form_auth" type="password" name="password" placeholder="Password">
        <input class="form_auth" type="submit" name="registration" value="Registration">
    </form>
</body>
<?php require_once ('../footer.php') ?>
<?php
    include('db_conectio.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['login'])) {
        $username = stripslashes($_REQUEST['login']);    // removes backslashes
        $username = mysqli_real_escape_string($db_connect, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($db_connect, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE login='$username'
                     AND password='" . $password . "'";
        $result = mysqli_query($db_connect, $query);
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
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
    <form method="POST" name="login">
            <input type="text" name="login" placeholder="Login">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="login" value="Login">
    </form>
</body>
</html>
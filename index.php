<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $_SESSION['username'] =$username;
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='$password'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        echo $rows;
        if ($rows == 1 ) {
            header("Location: home.php");}
        else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='index.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
<h1 style="font-size:30px;text-align:center;color:#000000">Blood Management System</h1>
    <form class="form" action="" method="post">
        <h1 class="form-title">Login</h1>
        <input type="text" class="form-input" name="username" placeholder="Username" required />
        <input type="password" class="form-input" name="password" placeholder="Password" required />
        <input type="submit" name="submit" value="Login" class="form-button">
        <p class="link"><a href="registration.php">Register</a></p>
    </form>
    </div>

</body>
<?php
    }
?>
</html>
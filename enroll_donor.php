<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
<header>
<div class="container">
  <nav>
        <ul>
            <li><a href="home.php">Home</a>&nbsp;&nbsp;</li>
            <li><a href="donors.php">Donors</a>&nbsp;&nbsp;</li>
            <li><a href="posts.php">Post</a>&nbsp;&nbsp;</li>
            <li><a href="blood_banks.php">Blood Banks</a>&nbsp;&nbsp;</li>
            <li><a href="profile.php">Profile</a>&nbsp;&nbsp;</li>
            <li><a href="logout.php">Logout</a>&nbsp;&nbsp;</li>
        </ul>
    </nav>       
</div>
</header>
</head>
<body>
<?php
    require('db.php');
    include('auth_session.php');
    // When form submitted, insert values into the database.
    if (isset($_POST['submit'])) {
        // removes backslashes
        $username = $_SESSION['username'];
        $ageCheck = stripslashes($_REQUEST['ageCheck']);
        //escapes special characters in a string
        $ageCheck = mysqli_real_escape_string($con, $ageCheck);
        $diseaseCheck = stripslashes($_REQUEST['diseaseCheck']);
        //escapes special characters in a string
        $diseaseCheck = mysqli_real_escape_string($con, $diseaseCheck);
        $alcoholCheck    = stripslashes($_REQUEST['alcoholCheck']);
        $alcoholCheck   = mysqli_real_escape_string($con, $alcoholCheck);
        $smokeCheck = stripslashes($_REQUEST['smokeCheck']);
        //escapes special characters in a string
        $smokeCheck = mysqli_real_escape_string($con, $smokeCheck);
        $available = stripslashes($_REQUEST['available']);
        $available = mysqli_real_escape_string($con, $available);
        if ($smokeCheck == 'no' and $alcoholCheck=='no' and $ageCheck=='yes' and $diseaseCheck=='no'){
            $query    = "INSERT into `donors` (username, available)
            VALUES ('$username', '$available')";
            $result   = mysqli_query($con, $query);

        }
      
        if ($result) {
            echo "<div class='form'>
                  <h3>Enrolled successfully.</h3><br/>
                  <p class='link'>Click Here for <a href='home.php'>Home</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>You are not Eligible</h3><br/>
                  <p class='link'>Click here for <a href='home.php'>Home</a> again.</p>
                  </div>";
        }
    }
    else{
?>
<h1 style="font-size:30px;text-align:center;color:#000000">Blood Management System</h1>
    <form class="form" action="" method="post">
    <form>
        Are you atleast 17 years old?
        <br>
        <input type="radio"  name="ageCheck" value="yes">Yes
        <input type="radio" name="ageCheck"  value="no">No
        <br>
        <br>
        Are you effected with any kind of diseases?
        <br>
        <input type="radio"  name="diseaseCheck" value="yes">Yes
        <input type="radio" name="diseaseCheck"  value="no">No
        <br>
        <br>
        Do you drink alcohol?
        <br>
        <input type="radio"  name="alcoholCheck" value="yes">Yes
        <input type="radio" name="alcoholCheck"  value="no">No
        <br>
        <br>
        Do you smoke?
        <br>
        <input type="radio"  name="smokeCheck" value="yes">Yes
        <input type="radio" name="smokeCheck"  value="no">No
        <br>
        <br>
        Can you donate the blood immediately?
        <br>
        <input type="radio"  name="available" value="yes">Yes
        <input type="radio" name="available"  value="no">No
        <br>
        <input type="Submit" name="submit" value="Enroll" class="form-button">

    </form>
<?php
    }
?>

</body>

</html>
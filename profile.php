<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Blood Management System</title>
    <link rel="stylesheet" href="style.css"/>
    <header>
  <div class="container">
    <nav>
        <ul>
            <li><a href="home.php">Home</a>&nbsp;&nbsp;</li>
            <li><a href="enroll_donor.php">Enroll As a Donor</a>&nbsp;&nbsp;</li>
            <li><a href="donors.php">Donors</a>&nbsp;&nbsp;</li>
            <li><a href="posts.php">Posts</a>&nbsp;&nbsp;</li>
            <li><a href="blood_banks.php">Blood Banks</a>&nbsp;&nbsp;</li>
            <li><a href="logout.php">Logout</a>&nbsp;&nbsp;</li>
        </ul>
    </nav>
        
</div>
</header>
</head>
<body>
<div class="form">
<?php
require('db.php');
include('auth_session.php');
$username = $_SESSION['username'];
$query = "SELECT * from `donors` where username='$username'";
$result = mysqli_query($con, $query);
$rows = mysqli_num_rows($result);
if ($rows ==1){
 echo "<div class='form'>
 <h3> You are enrolled as donor</h3></br>
 <p class='link'>Click here to <a href='delete_donor.php'>to remove you as a donor</a></p></div>";
}
else{
    echo "<div class='form'>
    <h3> You are not enrolled as donor</h3></br>
    <p class='link'>Click here to <a href='enroll_donor.php'>to enroll as a donor</a></p></div>";
}
?>
</div>
</body>
</html>
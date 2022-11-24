<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="style1.css"/>
    <header>
  <div class="container">
  <nav>
        <ul>
            <li><a href="enroll_donor.php">Enroll As a Donor</a>&nbsp;&nbsp;</li>
            <li><a href="posts.php">Post</a>&nbsp;&nbsp;</li>
            <li><a>Blood Banks</a>&nbsp;&nbsp;</li>
            <l1><a href="profile.php">Profile</a>&nbsp;&nbsp;</li>
            <li><a>Logout</a>&nbsp;&nbsp;</li>
        </ul>
    </nav>       
</div>
</header>
</head>
<body>
<h1 style="font-size:30px;text-align:center;color:#000000">Blood Management System </h1>
<div class="form">
<h1 class="login-title">Donors</h1> 
<?php
    include("auth_session.php");
    require('db.php');
    $query = mysqli_query($con,"SELECT users.name, users.phnum, users.city, users.bg FROM users JOIN donors on users.username=donors.username");
    echo "<table border='1'> 
    <tr>
    <th>Name</th>
    <th>Phone Number</th>
    <th>City</th>
    <th>Blood Group</th>
    </tr>";
    while($row = mysqli_fetch_array($query))
    {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['phnum'] . "</td>";
    echo "<td>" . $row['city'] . "</td>";
    echo "<td>" . $row['bg'] . "</td>";
    
    echo "</tr>";
    }
    echo "</table>";


?>
</div>
</body>
</html>
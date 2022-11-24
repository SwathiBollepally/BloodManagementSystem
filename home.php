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
            <li><a href="enroll_donor.php">Enroll As a Donor</a>&nbsp;&nbsp;</li>
            <li><a href="donors.php">Donors</a>&nbsp;&nbsp;</li>
            <li><a href="posts.php">Posts</a>&nbsp;&nbsp;</li>
            <li><a href="blood_banks.php">Blood Banks</a>&nbsp;&nbsp;</li>
            <li><a href="profiles.php">Profiles</a>&nbsp;&nbsp;</li>
            <li><a href="logout.php">Logout</a>&nbsp;&nbsp;</li>
        </ul>
    </nav>
        
</div>
</header>
</head>
<body>
<div class="form">
<?php
    include("auth_session.php");
    require('db.php');
    $query = mysqli_query($con,"SELECT users.name, posts.post, posts.phnum from posts join users on users.username=posts.username");
    echo "<table border='1'> 
    <tr>
    <th>Name</th>
    <th>Phone Number</th>
    <th>Post</th>
    </tr>";
    while($row = mysqli_fetch_array($query))
    {
    echo "<tr>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['phnum']."</td>";
    echo "<td>".$row['post']."</td>";
    echo "</tr>";
    }
    echo "</table>";


?>
</div>
</body>
</html>
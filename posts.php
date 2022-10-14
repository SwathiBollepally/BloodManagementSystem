<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Post</title>
    <link rel="stylesheet" href="style.css"/>

<?php
    require('db.php');
    include('auth_session.php');
    // When form submitted, insert values into the database.

?>
<header>
<div class="container">
  <nav>
        <ul>
            <li><a href="donors.php">Donors</a>&nbsp;&nbsp;</li>
            <li><a>Recent Posts</a>&nbsp;&nbsp;</li>
            <li><a>Blood Banks</a>&nbsp;&nbsp;</li>
            <li><a href="logout.php">Logout</a>&nbsp;&nbsp;</li>
        </ul>
    </nav>       
</div>
</header>
</head>
<body>

<h1 style="font-size:30px;text-align:center;color:#000000">Blood Management System</h1>
    <form class="form" action="" method="post">
    <form>
    <h1 class="form-title">Post</h1>
    <textarea name="city" placeholder="Write your post" rows="4" columns = "60" required /></textarea>
    <input type="text" class="form-input" name="phnum" placeholder="Mobile No" required />
    <input type="submit" name="submit" value="Post" class="form-button">
    </form>

</body>

</html>
<?php
require('db.php');
include('auth_session.php');
$username = $_SESSION['username'];
$query="DELETE FROM `donors` where username = '$username'";
if (mysqli_query($con, $query))
{
    echo "<div class='form'>
    <h3>You are successfully removed as a donor</h3><br/>
    <p class='link'>Click Here for <a href='home.php'>Home</a></p>
    </div>";

}
else{
    echo "Unable to remove the record". mysqli_error($con);
}
?>
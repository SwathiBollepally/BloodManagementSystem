<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $name = stripslashes($_REQUEST['name']);
        //escapes special characters in a string
        $name = mysqli_real_escape_string($con, $name);
        $phnum = stripslashes($_REQUEST['phnum']);
        //escapes special characters in a string
        $phnum = mysqli_real_escape_string($con, $phnum);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $dob = stripslashes($_REQUEST['dob']);
        $dob = mysqli_real_escape_string($con, $dob);
        $gender = stripslashes($_REQUEST['gender']);
        $gender = mysqli_real_escape_string($con, $gender);
        $address = stripslashes($_REQUEST['address']);
        $address = mysqli_real_escape_string($con, $address);
        $city = stripslashes($_REQUEST['city']);
        $city = mysqli_real_escape_string($con, $city);
        $state = stripslashes($_REQUEST['state']);
        $state = mysqli_real_escape_string($con, $state);
        $zip = stripslashes($_REQUEST['zip']);
        $zip = mysqli_real_escape_string($con, $zip);
        $bg = stripslashes($_REQUEST['bg']);
        $bg = mysqli_real_escape_string($con, $bg);
        $query    = "INSERT into `users` (name, phnum, email, username, password, dob, gender,  address, city, state, zip, bg)
                     VALUES ('$name', '$phnum', '$email', '$username','$password','$dob','$gender','$address','$city','$state','$zip','$bg')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='index.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
<h1 style="font-size:30px;text-align:center;color:#000000">Blood Management System</h1>
    <form class="form" action="" method="post">
        <h1 class="form-title">Registration</h1>
        <input type="text" class="form-input" name="name" placeholder="Name" required />
        <input type="text" class="form-input" name="phnum" placeholder="Mobile No" required />
        <input type="text" class="form-input" name="email" placeholder="Email Adress">
        <input type="text" class="form-input" name="username" placeholder="Username" required />
        <input type="password" class="form-input" name="password" placeholder="Password" required />
        <input type="date" class="form-input" name="dob" placeholder="Date of Birth" required/>
        <select name="gender" id="gender">
        <option value=""  selected="selected">Select Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>
        <input type="text" class="form-input" name="address" placeholder="address" required />
        <input type="text" class="form-input" name="city" placeholder="city" required />  
        <select name="state" id="state">
  <option value=""  selected="selected">Select a State</option>
  <option value="AL">Alabama</option>
  <option value="AK">Alaska</option>
  <option value="AZ">Arizona</option>
  <option value="AR">Arkansas</option>
  <option value="CA">California</option>
  <option value="CO">Colorado</option>
  <option value="CT">Connecticut</option>
  <option value="DE">Delaware</option>
  <option value="DC">District Of Columbia</option>
  <option value="FL">Florida</option>
  <option value="GA">Georgia</option>
  <option value="HI">Hawaii</option>
  <option value="ID">Idaho</option>
  <option value="IL">Illinois</option>
  <option value="IN">Indiana</option>
  <option value="IA">Iowa</option>
  <option value="KS">Kansas</option>
  <option value="KY">Kentucky</option>
  <option value="LA">Louisiana</option>
  <option value="ME">Maine</option>
  <option value="MD">Maryland</option>
  <option value="MA">Massachusetts</option>
  <option value="MI">Michigan</option>
  <option value="MN">Minnesota</option>
  <option value="MS">Mississippi</option>
  <option value="MO">Missouri</option>
  <option value="MT">Montana</option>
  <option value="NE">Nebraska</option>
  <option value="NV">Nevada</option>
  <option value="NH">New Hampshire</option>
  <option value="NJ">New Jersey</option>
  <option value="NM">New Mexico</option>
  <option value="NY">New York</option>
  <option value="NC">North Carolina</option>
  <option value="ND">North Dakota</option>
  <option value="OH">Ohio</option>
  <option value="OK">Oklahoma</option>
  <option value="OR">Oregon</option>
  <option value="PA">Pennsylvania</option>
  <option value="RI">Rhode Island</option>
  <option value="SC">South Carolina</option>
  <option value="SD">South Dakota</option>
  <option value="TN">Tennessee</option>
  <option value="TX">Texas</option>
  <option value="UT">Utah</option>
  <option value="VT">Vermont</option>
  <option value="VA">Virginia</option>
  <option value="WA">Washington</option>
  <option value="WV">West Virginia</option>
  <option value="WI">Wisconsin</option>
  <option value="WY">Wyoming</option>
</select>
<input type="text" class="form-input" name="zip" placeholder="zip" required />
<select name="bg" id="bg">
<option value="" selected="selected">Select Blood Group</option>
<option value="A+">A+</option>
<option value="A-">B-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>

</select>
        <input type="submit" name="submit" value="Register" class="form-button">
        <p class="link"><a href="index.php">Login</a></p>
    </form>


</body>
<?php
    }
?>
</html>
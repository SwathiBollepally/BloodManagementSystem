<!doctype html>
<html>
<head>
<title>Blood Banks</title>
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
            <li><a href="profiles.php">Profile</a>&nbsp;&nbsp;</li>
            <li><a href="logout.php">Logout</a>&nbsp;&nbsp;</li>
        </ul>
    </nav>
        
</div>
</header>
</head>
<body>
<div class="form">
<?php
if(isset($_POST['city'])){
require_once('vendor/autoload.php');
$apiKey = "fsq3mPNFmiLd+01xNIAy4XJJ5D1HTGjvE4cJ90k6JkprScY=";
$city = stripslashes($_REQUEST['city']);
$client = new \GuzzleHttp\Client();
$ApiUrl = "https://api.foursquare.com/v3/places/search?&categories=15005&near=".$city."&limit=10&v=20190425";
$response = $client->request('GET', $ApiUrl, [
  'headers' => [
    'Accept' => 'application/json',
    'Authorization' => 'fsq3mPNFmiLd+01xNIAy4XJJ5D1HTGjvE4cJ90k6JkprScY=',
  ],
]);

$res=$response->getBody();
$data = json_decode($res);

echo "<table border='1'> 
<tr>
<th>Blood Bank</th>
<th>Address</th>
</tr>";
for($i=0;$i<10;$i++){
echo "<tr>";
echo "<td>".$data->results[$i]->name."</td>";
echo "<td>".$data->results[$i]->location->formatted_address."</td>";?>
<?php
echo "</tr>";
}
} 

?>

<title style="font-size:50px;text-align:center;color:#000000">City Guide</title>
    <form method="post" name="search">
        <h1 class="login-title">Blood Banks</h1>
        <input type="text" class="login-input" name="city" placeholder="City" autofocus="true"/>
        <input type="submit" value="Search" name="search" class="login-button"/>
  </form>
</div>
</body>
</html>
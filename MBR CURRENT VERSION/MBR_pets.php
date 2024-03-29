<!DOCTYPE html>
<html>
<head>
	<title> Test Page </title>
</head>
<style>
 /* Add a black background color to the top navigation */
.topnav {
  background-color: #333;
  overflow: hidden;
   width: 100

}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #ffd633;
  color: white;
}

 /* The side navigation menu */
.sidenav {
  height: 80%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  bottom: 0; /* Stay at the top */
  left: 0;
  background-color: #111; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

/* The navigation menu links */
.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
  transition: margin-left .5s;
  padding: 20px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
} 

/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<body>
 <div class="topnav">
  <span onclick="openNav()"> <a class="active" href="#home"><span onclick="openNav()"> Home  </a></span>
  <div class="dropdown">
    <button class="dropbtn">Account
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="MBR_signup.html">Sign up</a>
      <a href="index.php">Login</a>
    </div>
  </div>
  <a href="#contact">About</a>
  <a href="#faq">FAQ</a>
  <a href="MBR_admin.php">Admin</a>
  <a href="#help">Help</a>
</div> 

 <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Profile</a>
  <a href="#">Pets</a>
  <a href="#">Appointments</a>
  <a href="#">Calendar</a>
</div>


<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
<div id="main">
test page
<form action="action_page.php">
	<label for="pName"><b>Pet Name:</b></</label><br>
	<input type="text" id="pName" name="pName" placeholder="Fluffy" required><br>
	
	<label for="animType"><b>Animal Type:</b></</label><br>
	<input type="text" id="email" name="email" placeholder="Cat, Dog, Bird, etc" required><br>
	
	<label for="breed"><b>Breed</b></</label><br>
	<input type="text" id="breed" name="breed" placeholder="Corgi, Domestic Shorhair, etc"><br>
	
	<label for ="gender"><b>Gender</b></label><br>
	<input type="radio" id="M" name="gender" value="malegen">
	<label for="malegen">M</label><br>
	<input type="radio" id="css" name="gender" value="femalegen">
	<label for="femalegen">f</label><br>
	
	<label for="age"><b>Age</b></</label><br>
	<input type="text" id="age" name=""age" placeholder="Weeks,Months, or years"><br>
	
	<label for="vaccines"><b>Vaccines</b></</label><br>
	<textarea id="vaccines" name="vaccines" rows="4" cols="50"></textarea><br>
	<input type="submit" value="Add Pet">
</form> 
<br><br>
</div> 

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</div> 

<?php
$servername = "localhost";
$username = "Bother";
$password = "1234";
$dbname = "mbr_test_database";

$pname = $_POST['pName'];
$animaltype = $_POST['animType'];
$breed = $_POST['breed'];
$age = $_POST['age'];
$vaccines$_POST['vaccines'];
$sex =$_POST['gender'];



$petID = rand(1000000, 9999999);
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$dup_IDcheck = "select count(*) as pet from pet where petID ='".$petID."'";
$result = mysqli_query($conn,$dup_IDcheck);
        $row = mysqli_fetch_array($result);

        $countID = $row['pet'];
if($countID > 0){
	$IDdup = true;
	while($IDdup){
		$petID += 1;
		$dup_IDcheck = "select count(*) as pet from pet where petID ='".$petID."'";
		$resultid = mysqli_query($conn,$dup_IDcheck);
        $row = mysqli_fetch_array($resultid);

        $countID = $row['pet'];
	if($countID == 0){
		$IDdup = false;
	}
	}
}
$sql = "INSERT INTO pet(petID, pName, breed, age, vaccines, sex)
VALUES('$petID', '$pName', '$breed', '$age','$vaccines', '$sex')";
   if($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
include 'connect.php';
?>



?>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
</html>

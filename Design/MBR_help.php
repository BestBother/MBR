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
 


<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
<div id="main">

<?php
$servername = "localhost";
$username = "Bother";
$password = "1234";
$dbname = "mbr_test_database";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
session_start();
	//session_start();
    if(isset($_SESSION['email'])){ 
	echo $_SESSION['email']." Logged in";
	?>
	<div class="topnav">
  <span onclick="openNav()"><a href="#home">My Home</a></span>
  <a href="about.php">About</a>
  <a href = "MBR_faq.php" >FAQ</a>
  <a href="MBR_admin.php">Admin</a>
  <a class = "active" >Help</a>
</div> 

 <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Profile</a>
  <a href="MBR_pets.php">Pets</a>
  <a href="#">Appointments</a>
  <a href="#">Calendar</a>
  <a href="#">Log Out</a>
</div>
	<?php
		
		}
    else{
	?>
	<div class="topnav">
  <div class="dropdown">
    <button id = "AC" class="dropbtn">Account
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="MBR_signup.html">Sign up</a>
      <a href="index.php">Login</a>
    </div>
  </div>
  
  <- Has no side nav because user is not signed in->
  <a href="about.php">About</a>
  <a href ="MBR_faq.php" >FAQ</a>
  <a href="MBR_admin.php">Admin</a>
  <a class = "active" >Help</a>
</div> 
	<?php
        
		}
include 'connect.php';
?>
<div class = "info">
<h2>MBR HELP Page</h2>


</div>
<script type = "text/javascript">
	function myFunction() {
	  var x = document.getElementById("psw");
	  if (x.type === "password") {
		x.type = "text";
	  } else {
		x.type = "password";
	  }
	} 
</script>
</div> 
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

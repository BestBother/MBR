<?php
$servername = "localhost";
$username = "Bother";
$password = "1234";
$dbname = "mbr_test_database";

$fname = $_POST['fname'];
$email = $_POST['email'];
$phonenum = $_POST['phonenum'];
$psw = $_POST['psw'];
$oPet = $_POST['oPet'];

$ownID = rand(10000000, 99999999);
$petID = rand(10000000, 99999999);
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO owner (ownID, oName, email, psw, oPet,petID,phonenum)
VALUES ('$ownID', '$fname', '$email', '$psw','$oPet','$petID','$phonenum')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
include 'connect.php';
?>



<?php
$servername = "localhost";
$username = "Bother";
$password = "1234";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "<h3>Connected successfully<h3>";
?>

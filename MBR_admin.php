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

$sql = "SELECT ownID, oName FROM owner";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<input type=\"radio\" id=\"".$row["ownID"]. "\" name=\"oName\" value=\"". $row["ownID"]. "\">
        echo "<br> id: ". $row["ownID"]. " - Name: ".$row["oName"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
include 'connect.php';
?>

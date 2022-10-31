<!DOCTYPE html>
<html>
<body>

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

//include 'connect.php';

 $sql = "SELECT ownID, oName FROM owner";
 $result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<form action = \"delete_or_update.php\" method = \"post\">";
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
        echo "<input type=\"radio\" id=\"".$row["ownID"]. "\" name=\"oName\" value=\"". $row["ownID"]. "\">";
        echo "<br> id: ". $row["ownID"]. " - Name: ".$row["oName"]. "<br>";
        
    }

    echo "<br>";
    echo "<input type=\"submit\" value=\"Delete record\" name=\"delete\">";
    echo "<input type=\"submit\" value=\"Update record\" name=\"update\">";

    echo "</form>";

} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>

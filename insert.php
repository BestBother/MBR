<?php
$servername = "localhost";
$username = "Bother";
$password = "1234";
$dbname = "myDBPDO";

echo "<h1> Insert vaules below <h1>";

$fname = $_POST['fname'];
$email = $_POST['email'];

try {
  $conn = new mysqli($servername, $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(mysqli::ATTR_ERRMODE, mysqli::ERRMODE_EXCEPTION);
  
  $sqli = "INSERT INTO owner (ownID, oName, email, psw, petID, oPet,phonenum)
  VALUES ('12345678', 'Doe', 'john@example.com','1223','12345678','dog','5404467089')";
  
  // use exec() because no results are returned
 $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;


include 'connet.php';
?>

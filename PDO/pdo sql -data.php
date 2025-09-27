<?php
$servername = "localhost";
$username = "test";
$password = "test";

try {
  $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
$ats = $conn->query("SELECT * FROM data");
 echo "<br>";
while ($row = $ats->fetch()) {
    echo $row['id']." vardas:";
	echo $row['vardas']."<br>";
}

?>
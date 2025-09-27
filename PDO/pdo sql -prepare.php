<?php
$servername = "localhost";
$username = "test";
$password = "test";

try {
  $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$stmt = $conn->prepare("SELECT * FROM data WHERE id=?");
$id=2;
$stmt->execute([$id]); 

  
while ($row = $stmt->fetch()) {
    echo $row['vardas']."<br>";
}

?>
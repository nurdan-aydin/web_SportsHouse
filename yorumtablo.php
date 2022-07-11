<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uye_data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE yorumtablo(
yorumID INT(12)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ADSOYAD VARCHAR(30) NOT NULL,
EMAIL VARCHAR(30)NOT NULL,
KONU VARCHAR(80) NOT NULL,
MESAJ VARCHAR (500) NOT NULL
)";


if ($conn->query($sql) === TRUE) {
  echo "Tablo Başarıyla kuruldu";
} else {
  echo "Error  " . $conn->error;
}

$conn->close();
?>
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

$sql = "CREATE TABLE uyetablo1(
uyeID INT(6)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
AD VARCHAR(30) NOT NULL,
SOYAD VARCHAR(30) NOT NULL,
YAS INT(5) NOT NULL,
BOY FLOAT(5) NOT NULL,
KILO FLOAT(5) NOT NULL,
CINSIYET VARCHAR(20) NOT NULL,
EMAIL VARCHAR(30)NOT NULL,
ADRES VARCHAR(11) NOT NULL,
ULKE VARCHAR (20) NOT NULL,
SEHIR VARCHAR (20) NOT NULL,
PROGRAM VARCHAR (50) NOT NULL
)";


if ($conn->query($sql) === TRUE) {
  echo "Tablo Başarıyla kuruldu";
} else {
  echo "Error  " . $conn->error;
}

$conn->close();
?>
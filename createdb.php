<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uye_data";

$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Bağlantı başarısız: " . $conn->connect_error);
}
$sql = "CREATE DATABASE uye_data";
if ($conn->query($sql) === TRUE) {
  echo "Veri Tabanı başarıyla kuruldu";
} else {
  echo "Veri tabanı kurulumunda sorun var: " . $conn->error;
}

$conn->close();

?>

</body>
</html>
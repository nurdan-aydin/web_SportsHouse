<html>
<head>
<title></title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uye_data";

// Create connection
$baglanti= new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($baglanti->connect_error) {
  die("Bağlantı kurulamadı: " . $baglanti->connect_error);
}
else { echo "Bağlanı kuruldu";}

$baglanti->close();
?>
</body>
</html>





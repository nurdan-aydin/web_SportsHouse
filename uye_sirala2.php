<html>
<head>
	<title>Admin Paneli</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Sports House N.</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/sport.jpg" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
</head>
 
<body>
<center><h2>Kayıt Sıralama</h2></center>
<table border="1" align="center" width="500">
<tr>
<td>ID</td>
<td>Adı</td>
<td>Soyadı</td>
<td>Yaş</td>
<td>Boy</td>
<td>Kilo</td>
<td>Cinsiyet</td>
<td>E-mail</td>
<td>Adres</td>
<td>Ülke</td>
<td>Şehir</td>
<td>Program</td>
</tr>
<center>
<form name="myform7" action="uye_sirala.php" method="GET">
<input type="submit"  class="button" name="buton" value="Sıralama geri dön"></p><br>
</form>
</center>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uye_data";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM uyetablo1 order by AD desc";
$sonuc = $conn -> query($sql);

while($satir=mysqli_fetch_array($sonuc))
{
echo '<tr>';
echo '<td>'.$satir['uyeID'].'</td>';
echo '<td>'.$satir['AD'].'</td>';
echo '<td>'.$satir['SOYAD'].'</td>';
echo '<td>'.$satir['YAS'].'</td>';
echo '<td>'.$satir['BOY'].'</td>';
echo '<td>'.$satir['KILO'].'</td>';
echo '<td>'.$satir['CINSIYET'].'</td>';
echo '<td>'.$satir['EMAIL'].'</td>';
echo '<td>'.$satir['ADRES'].'</td>';
echo '<td>'.$satir['ULKE'].'</td>';
echo '<td>'.$satir['SEHIR'].'</td>';
echo '<td>'.$satir['PROGRAM'].'</td>';
echo '</tr>';
}
?>

</body>
</html>
 
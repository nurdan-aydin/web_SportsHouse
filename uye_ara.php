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

<form class="needs-validation" method="POST" action="<?=$_SERVER['PHP_SELF']?>">
    <center><div class="col-md-6 mb-3">
    <label for="firstName">Aramak istediğiniz adı giriniz *</label>
    <input type="text" class="form-control" name="firstName1" value="" required="">
    <div class="invalid-feedback"> Geçerli bir ad girin </div>
    </div>
    <div>  
    <input type="submit" class="ml-auto btn hvr-hover" class="button" name="buton" value="Ara"></p> </div>
    </div>
    </center>
</form>

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

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uye_data";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

if(isset($_POST["firstName1"])){

 $ad = $_POST['firstName1'];}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM uyetablo1 WHERE AD LIKE '%$ad%'";
$sorgu = $conn -> query($sql);


while($satir=mysqli_fetch_array($sorgu))
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

$conn->close();
}


?>

</body>
</html>
 
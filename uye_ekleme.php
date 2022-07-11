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
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uye_data";

if(isset($_POST["firstName"])){
 $isim = $_POST['firstName'];
}
if(isset($_POST["lastName"])){
 $soyisim = $_POST['lastName'];
}
if(isset($_POST["yas"])){
 $yas = $_POST['yas'];
}
if(isset($_POST["boy"])){
 $boy = $_POST['boy'];
}
if(isset($_POST["kilo"])){
 $kilo= $_POST['kilo'];
}
if(isset($_POST["cinsiyet"])){
 $cins= $_POST['cinsiyet'];
}
if(isset($_POST["email"])){
 $mail= $_POST['email'];
}
if(isset($_POST["adres"])){
 $adres= $_POST['adres'];
}
if(isset($_POST["country"])){
 $ulke= $_POST['country'];
}
if(isset($_POST["state"])){
 $sehir= $_POST['state'];
}
if(isset($_POST["shipping-option"])){
 $program = $_POST['shipping-option'];
}
$id ="";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Bağlantı sorunu:". $conn->connect_error);}
 
$sql = "INSERT INTO uyetablo1 (uyeID, AD, SOYAD, YAS, BOY, KILO, CINSIYET, EMAIL, ADRES, ULKE, SEHIR, PROGRAM) 
VALUES ('$id', '$isim', '$soyisim', '$yas', '$boy', '$kilo', '$cins', '$mail', '$adres', '$ulke', '$sehir', '$program')";

if ($conn->query($sql) === TRUE) {
  echo "Yeni kayıt başarılı. Kaydınız Alınmıştır. Ders bilgileri mail atılacaktır. Ödeme ilk ders gününde alınmaktadır.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

?>

<form name="myform10" action="index.php" method="GET">
<input type="submit"  class="button" name="buton" value="Anasayfa"></p>
</form>

</body>
</html>
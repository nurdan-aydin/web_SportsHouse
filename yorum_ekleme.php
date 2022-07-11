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

if(isset($_POST["name"])){
 $isim = $_POST['name'];
}
if(isset($_POST["email"])){
 $email = $_POST['email'];
}
if(isset($_POST["konu"])){
 $konu = $_POST['konu'];
}
if(isset($_POST["mesaj"])){
 $mesaj = $_POST['mesaj'];
}

$id ="";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Bağlantı sorunu:". $conn->connect_error);}
 
$sql = "INSERT INTO yorumtablo (yorumID, ADSOYAD, EMAIL, KONU, MESAJ) 
VALUES ('$id', '$isim', '$email', '$konu', '$mesaj')";

if ($conn->query($sql) === TRUE) {
  echo "Mesajınız alınmıştır. Değerlendirilecektir.";
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
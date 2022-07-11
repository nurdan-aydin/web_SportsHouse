<html>
 
<head>
<title>Notlar</title>
</head>
 
<body>
<?php
 
$silinecekID= $_GET['id'];
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uye_data";

// Create connection
$baglanti= new mysqli($servername, $username, $password, $dbname);
// Check connection
 
$sonuc=mysqli_query($baglanti,"DELETE from uyetablo1
where uyeID=".$silinecekID);
 
if($sonuc>0){
echo " Başarıyla silindi, listeye yeniden yönlendiriliyorsunuz.";
header( "refresh:2;url=uye_sil.php" ); 
 }
else
echo "Bir sorun oluştu silinemedi";
 
?>
</body>
</html>
 
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
<center><h2>Kayıt Güncelleme</h2></center>
<!-- Start Cart  -->
<div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="checkout-address">
                        <div class="title-left">
                            <h3>Yeni Kayıt Bilgileri - Aşağıda bulunan listeden ID numaranızı giriniz:</h3>
                        </div>
                        <form class="needs-validation" method="POST" action="<?=$_SERVER['PHP_SELF']?>">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">ID *</label>
                                    <input type="text" class="form-control" name="id" value="" required="">
                                    <div class="invalid-feedback"> Geçerli bir ID girin </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">Ad *</label>
                                    <input type="text" class="form-control" name="firstName" value="" required="">
                                    <div class="invalid-feedback"> Geçerli bir ad girin </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Soyad *</label>
                                    <input type="text" class="form-control" name="lastName" value="" required="">
                                    <div class="invalid-feedback"> Geçerli bir ad girin </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="yas">Yaş *</label>
                                    <input type="text" class="form-control" name="yas" value="" required="">
                                    <div class="invalid-feedback"> Geçerli bir yaş girin </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="boy">Boy *</label>
                                    <input type="text" class="form-control" name="boy" value="" required="">
                                    <div class="invalid-feedback"> Geçerli bir boy girin </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="kilo">Kilo *</label>
                                    <input type="text" class="form-control" name="kilo" value="" required="">
                                    <div class="invalid-feedback"> Geçerli bir kilo girin </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cinsiyet">Cinsiyet *</label>
                                    <select class="wide w-100" name="cinsiyet" id="cinsiyet" required="">
                                    <option data-display="Select" value="">Seçin...</option>
                                    <option value="kadin">Kadın</option>
                                    <option value="erkek">Erkek</option>
                                    </select>
                                    <div class="invalid-feedback"> Geçerli bir kilo girin </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email">E-mail *</label>
                                <input type="email" class="form-control" name="email" required="">
                                <div class="invalid-feedback"> Geçerli bir mail girin </div>
                            </div>
                            <div class="mb-3">
                                <label for="adres">Adres*</label>
                                <input type="text" class="form-control" name="adres" placeholder="">
                                <div class="invalid-feedback"> Geçerli bir adres girin </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <label for="country">Ülke *</label>
                                    <select class="wide w-100" name="country" required="">
                                    <option value="Choose..." data-display="Select">Seçin...</option>
                                    <option value="Turkiye">Türkiye</option>
                                </select>
                                    <div class="invalid-feedback"> Lütfen geçerli bir ülke seçin</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="state">Şehir *</label>
                                    <select class="wide w-100" name="state" required="">
                                    <option data-display="Select">Seçin...</option>
                                    <option>Ankara</option>
                                    <option>İstanbul</option>
                                </select>
                                    <div class="invalid-feedback"> Lütfen geçerli bir şehir seçin</div>
                                </div>
                                    <div class="col-12 d-flex shopping-box">  
                                    <input type="submit"  name="buton" onclick="bas();" value="Bilgileri Güncelle"></p> </div>
                                    </div>
                            </div>
                    </div>
                </div>
                       

                </div>
            </div>
</form>
        </div>
    </div>
    <!-- End Cart -->
<script>
function bas(){
    window.alert("Kayıt bilgileriniz güncellendi.");
}
</script>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uye_data";

if(isset($_POST["id"])){
 $id= $_POST['id'];
}
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


if (isset($isim) && isset($soyisim)) {

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    $sql = "UPDATE uyetablo1 SET AD='$isim', SOYAD='$soyisim', YAS='$yas', BOY='$boy', KILO='$kilo', CINSIYET='$cins', EMAIL='$mail', ADRES='$adres', ULKE='$ulke', SEHIR='$sehir' WHERE uyeID='$id'";
$sorgu = $conn -> query($sql);

$conn->close();
}

?>

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

$baglanti= new mysqli($servername, $username, $password, $dbname);

$sonuc=mysqli_query($baglanti,"select * from uyetablo1"); 
 
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
 
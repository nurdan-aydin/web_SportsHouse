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

<center>
<label>Neye göre sıralayacağınızı seçiniz:</label>
<form name="myform7" action= "uye_sirala1.php" method="GET">
<input type="submit"  class="button" name="buton" value="İsme göre sırala"></p><br>
</form>

<form name="myform7" action= "uye_sirala2.php" method="GET">
<input type="submit"  class="button" name="buton" value="İsme göre sırala 'desc'"></p><br>
</form>

<form name="myform7" action= "uye_sirala3.php" method="GET">
<input type="submit"  class="button" name="buton" onclick="bas3();" value="ID göre sırala 'desc'"></p><br>
</form>

</center>
</body>
</html>
 
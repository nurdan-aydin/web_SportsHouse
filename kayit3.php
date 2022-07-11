<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Kayıt</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/sport.jpg" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.jpg" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Anasayfa</a></li>
                        <li class="nav-item"><a class="nav-link" href="sporlar.php">Kayıt Ol</a></li>
                        <li class="nav-item"><a class="nav-link" href="gallery.php">Galeri</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">Hakkımızda</a></li>
                        <li class="nav-item"><a class="nav-link" href="iletisim.php">İletişim</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

               
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="sporlar.php">Kayıt Ol</a></li>
                        <li class="breadcrumb-item active">Tenis</li>
                    </ul>
                </div>
            </div>
        </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="checkout-address">
                        <div class="title-left">
                            <h3>Kayıt Bilgileri</h3>
                        </div>
                        <form class="needs-validation" method="POST" action="uye_ekleme.php">
                            <div class="row">
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
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="shipping-method-box">
                                <div class="title-left">
                                    <h3>Haftalık Saat</h3>
                                </div>
                                <div class="mb-4">
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption1" name="shipping-option" class="custom-control-input" checked="checked" type="radio" value="Tenis_1">
                                        <label class="custom-control-label" for="shippingOption1">Tenis</label> <span class="float-right font-weight-bold">Saatlik 250 tl</span> </div>
                                    <div class="ml-4 mb-2 small">(Haftada 5 saat)</div>
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption2" name="shipping-option" class="custom-control-input" type="radio" value="Tenis_2">
                                        <label class="custom-control-label" for="shippingOption2">Tenis</label> <span class="float-right font-weight-bold" >Saatlik 225 tl</span> </div>
                                    <div class="ml-4 mb-2 small">(Haftada 8 saat)</div>
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption3" name="shipping-option" class="custom-control-input" type="radio" value="Tenis_3">
                                        <label class="custom-control-label" for="shippingOption3">Tenis</label> <span class="float-right font-weight-bold">Saatlik 200 tl</span> </div>
                                        <div class="ml-4 mb-2 small">(Haftada 10 saat)</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="odr-box">
                                <div class="title-left">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="order-box">
                                <div class="title-left">
                                    <h3>Seçiminiz</h3>
                                </div>
                                <div class="d-flex">
                                    <div class="font-weight-bold">Basketbol</div>
                                    <div class="ml-auto font-weight-bold">Toplam</div>
                                </div>
                                <hr class="my-1">
                                <div class="d-flex">
                                    <h4>Aylık kurs toplam</h4>
                                    <div class="ml-auto font-weight-bold"> - </div>
                                </div>
                                <div class="d-flex">
                                    <h4>Ekstra Ekipman</h4>
                                    <div class="ml-auto font-weight-bold"> 150 </div>
                                </div>
                                <div class="d-flex gr-total">
                                    <h5>Toplam</h5>
                                    <div class="ml-auto h5"> - </div>
                                </div>
                             </div>
                        </div>
                        <div class="col-12 d-flex shopping-box">  
                        <input type="submit" class="ml-auto btn hvr-hover" class="button" name="buton" onclick="bas();" value="Kayıt Ol"></p> </div>
                    </div>
                </div>
            </div>
</form>
        </div>
    </div>
    <!-- End Cart -->

<script>
function bas(){
    window.alert("Kayıt alınıyor..");
}
</script>

 <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>Çalışma Saatleri</h3>
                            <ul class="list-time">
                                <li>Pazartesi - Cumartesi: 08.00 - 23.00</li> <li>Pazar: 10.00 - 22.00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>Sosyal Medya</h3>
                            <p>Hesaplarımız :)</p>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>Sports House Hakkında</h4>
<p>2007 yılından beri; ileri teknoloji, bilimsellik ve eğlenceyi birleştirerek, insanların yaşam kalitelerini artıran kişiye özel tasarlanmış hizmetleri, profesyonel bir yönetimle sunuyoruz. Misafirlerimiz için, içten ve samimi hizmet, ait hissedilen ortamlar ve yenilikler sunarak pozitif deneyimler yaratmak, önceliğimiz olmaya devam edecektir.</p> 

<p>Son teknoloji ekipmanları, sports house academy eğitmenlerinin profesyonel eğitim ve birikimi, yüksek kalitesinde programlarının, yanı sıra; rahat, keyifli atmosferi ve sadeleşmiş hizmetleriyle sporu pratikleştiren, uygun fiyatlarla herkes için ulaşılabilir spor deneyimi sunuyor.</p>                           
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Bilgi</h4>
                            <ul>
                                <li><a href="#">Hakkımızda</a></li>
                                <li><a href="#">Müşteri Hizmetleri</a></li>
                                <li><a href="#">Site Haritası</a></li>
                                <li><a href="#">Gizlilik Politikası</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>İletişime Geçin</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Adres: Ankara</p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Telefon: <a href="tel:+1-888705770">+90 3120001122</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">sportshouse.info@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2022 <a href="#"></a> Design By :Nurdan Aydın</p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
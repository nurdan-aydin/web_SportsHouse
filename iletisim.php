<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>İletişime geçin:)</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/sports.jpg" type="image/x-icon">

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

            </div>
        </nav>
        <!-- End Navigation -->
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
                        <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                        <li class="breadcrumb-item active"> İletişim</li>
                    </ul>
                </div>
            </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Contact Us  -->
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="contact-form-right">
                        <h2>Yorumlarınız</h2>
                        <p>Daha iyi olmasını istediklerinizi bizimle paylaşın.</p>
                        <form  method="POST"  action="yorum_ekleme.php">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Ad" required data-error="Lütfen adınızı ve soyadınızı giriniz">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="E-mail" class="form-control" name="email" required data-error="Lütfen mail giriniz">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="konu" placeholder="Konu" required data-error="Lütfen konuyu giriniz">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="mesaj" laceholder="Mesajınız" rows="4" data-error="Mesajınızı giriniz" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button text-center">
                                        <button class="btn hvr-hover" name="gonder" type="submit">Gönder</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
				<div class="col-lg-4 col-sm-12">
                 
                        <h2>İletişim Bilgileri</h2>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Adres: Ankara </p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Telefon: <a href="tel:+1-888705770">+90 3120001122</a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>E-mail: <a href="mailto:contactinfo@gmail.com">sportshouse.info@gmail.com</a></p>
                            </li>
                        </ul>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart -->

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
        <p class="footer-company">All Rights Reserved. &copy; 2022 <a href="#"></a> Design By :
            Nurdan Aydın</p>
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
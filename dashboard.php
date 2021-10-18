
<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?> 


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Dashboard</title>
    
    
    <!-- Favicons -->
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
    
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" />
    
    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    
    <!-- CSS Files For Plugin -->
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/font-awesome/font-awesome.min.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet" />
    <link href="css/YTPlayer.css" rel="stylesheet" />
    <link href="inc/owlcarousel/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="inc/owlcarousel/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="inc/revolution/css/settings.css" rel="stylesheet" />
    <link href="inc/revolution/css/layers.css" rel="stylesheet" />
    <link href="inc/revolution/css/navigation.css" rel="stylesheet" />
    
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="homepage_slider" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="100">
    
    
    <!-- Preloader -->
    <div id="preloader">
        <div id="spinner"></div>
    </div>
    <!-- End Preloader-->

    
    <!-- Start Navigation -->
    <header class="nav-solid" id="home">

        <nav class="navbar navbar-fixed-top">
            <div class="navigation">
                <div class="container-fluid">
                    <div class="row">

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <!-- Logo -->
                            <div class="logo-container">
                                <div class="logo-wrap local-scroll">
                                    <br>
                                    <h4>SMA PALING KECE</h4>
                                </div>
                            </div>
                        </div> <!-- end navbar-header -->

                        <div class="col-md-8 col-xs-12 nav-wrap">
                            <div class="collapse navbar-collapse" id="navbar-collapse">

                                <ul class="nav navbar-nav navbar-right">
                                    <li><a data-scroll href="#home">Home</a></li>
                                    <li><a data-scroll href="#profil">Profile</a></li>
                                    <li><a data-scroll href="#ED">Enkripsi - Dekripsi</a></li>                     
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>

                            </div>
                        </div> <!-- /.col -->

                    </div> <!-- /.row -->
                </div> <!--/.container -->
            </div> <!-- /.navigation-overlay -->
        </nav> <!-- /.navbar -->

    </header>
    <!-- End Navigation -->

    
    <!-- Start Intro -->
    <section id="slider">
        <div class="rev_slider_wrapper fullscreen-container" data-alias="agency-website" id="rev_slider_280_1_wrapper" style="background-color:#fff;padding:0px;height:1080px;">
          <!-- START REVOLUTION SLIDER 5.1.4 fullscreen mode -->
          <div class="rev_slider fullscreenbanner" id="rev_slider_nagency" style="display:none;">
              <ul style="display:none;">

                <!-- slider Item 1 -->
                <li data-index="rs-1" data-transition="fadetotopfadefrombottom" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500" data-rotate="0"  data-saveperformance="off"  data-title="N.Agency" data-description="">
                  <img src="img/wibu.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                  <!-- LAYER NR. 1 -->
                  <div class="tp-caption NotGeneric-Title tp-resizeme white-color rs-parallaxlevel-3" 
                    id="slide-1-layer-1" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['-160','-170','-170','-120']" 
                    data-fontsize="['70','60','60','36']"
                    data-lineheight="['70','60','60','50']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"              
                    data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="1000" 
                    data-splitin="chars" 
                    data-splitout="none" 
                    data-responsive_offset="on" 
                    data-elementdelay="0.05"                    
                    style="z-index: 5; white-space: nowrap;">Welcome to
                  </div>

                  <!-- LAYER NR. 2 -->
                  <div class="tp-caption NotGeneric-SubTitle tp-resizeme white-color rs-parallaxlevel-4" 
                    id="slide-1-layer-2" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['-80','-90','-90','-60']"
                    data-fontsize="['28','24','24','20']"
                    data-lineheight="['28','24','36','30']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"               
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="1500" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"                     
                    style="z-index: 6; white-space: nowrap;">SMA PALING KECE
                  </div>

                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption rs-parallaxlevel-5" 
                    id="slide-1-layer-3" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['15','5','5','10']" 
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                    data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                    data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" 
                    data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_out="x:inherit;y:inherit;" 
                    data-start="2000" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
                    data-responsive_offset="on" 
                    data-responsive="off"                   
                    style=""><a data-scroll href='#profil' class='btn btn-main btn-white'>View Profile</a>
                  </div>           
                
                </li>

                <!-- slider Item 2 -->
                <li data-index="rs-3" data-transition="slideremoveright" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500" data-rotate="0"  data-saveperformance="off">
                  <img src="img/wibu2.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                  <!-- LAYER NR. 1 -->
                  <div class="tp-caption NotGeneric-Title tp-resizeme black-color rs-parallaxlevel-3" 
                    id="slide-2-layer-1" 
                    data-x="['left','left','left','left']" data-hoffset="['0','50','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-100','-85']" 
                    data-fontsize="['70','60','60','36']"
                    data-lineheight="['70','60','60','50']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"              
                    data-transform_in="y:[100%];z:0;rx:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="1000" 
                    data-splitin="chars" 
                    data-splitout="none" 
                    data-responsive_offset="on" 
                    data-elementdelay="0.05"                    
                    style="z-index: 5; white-space: nowrap;">Creative & Digital Improvement
                  </div>

                  <!-- LAYER NR. 2 -->
                  <div class="tp-caption tp-resizeme NotGeneric-Text black-color rs-parallaxlevel-4" 
                    id="slide-2-layer-2" 
                    data-x="['left','left','left','left']" data-hoffset="['0','50','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','-10']"
                    data-fontsize="['18','18','20','14']"
                    data-lineheight="['28','28','32','24']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"               
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="1500" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"                   
                    style="z-index: 6;">Inovasi tanpa henti guna menggapai mimpi<br> Membuka wawasan selebar - lebarnya <br> Ssemangat menggapai mimpi.
                  </div>

                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption rs-parallaxlevel-5" 
                    id="slide-2-layer-3" 
                    data-x="['left','left','left','left']" data-hoffset="['0','50','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['105','105','115','85']" 
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                    data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                    data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" 
                    data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_out="x:inherit;y:inherit;" 
                    data-start="2000" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
                    data-responsive_offset="on" 
                    data-responsive="off"                   
                    style=""><a data-scroll href='#profil' class='btn btn-main btn-black'>View Profile</a>
                  </div>          
                
                </li>

                <!-- slider Item 3 -->
                <li data-index="rs-2" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500" data-rotate="0"  data-saveperformance="off">
                  <img src="img/wibu3.jpg" class="rev-slidebg" data-bgparallax="3" data-bgposition="center center" data-duration="5000" data-ease="Linear.easeNone" data-kenburns="on" data-no-retina="" data-offsetend="0 0" data-offsetstart="0 0" data-rotateend="0" data-rotatestart="0" data-scaleend="100" data-scalestart="110" src="img/slider/s2.jpg">

                  <!-- LAYER NR. 1 -->
                  <div class="tp-caption NotGeneric-Title tp-resizeme white-color rs-parallaxlevel-3" 
                    id="slide-3-layer-1" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['-75','-70','-70','-45']" 
                    data-fontsize="['70','60','60','36']"
                    data-lineheight="['70','60','60','50']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"              
                    data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="1000" 
                    data-splitin="chars" 
                    data-splitout="none" 
                    data-responsive_offset="on" 
                    data-elementdelay="0.05"                    
                    style="z-index: 5; white-space: nowrap;">Responsibility.
                  </div>

                  <!-- LAYER NR. 2 -->
                  <div class="tp-caption NotGeneric-SubTitle white-color tp-resizeme rs-parallaxlevel-2" 
                    id="slide-3-layer-2" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                    data-fontsize="['28','24','24','20']"
                    data-lineheight="['28','24','36','30']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="1500" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"                    
                    style="z-index: 6; white-space: nowrap;">Beautiful High school.
                  </div>

                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption rs-parallaxlevel-5" 
                    id="slide-3-layer-3" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['90','90','100','75']" 
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                    data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                    data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" 
                    data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_out="x:inherit;y:inherit;" 
                    data-start="2000" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
                    data-responsive_offset="on" 
                    data-responsive="off"                   
                    style="">
                  </div>

                </li>

              </ul>
              <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
          </div>
      </div>
    </section>
    <!-- End Intro -->


    <!-- Start Service -->
    <section id="profil" class="p-top-80 p-bottom-80">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <!-- Section Title -->
                    <div class="section-title text-center m-bottom-40">
                        <h2 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s"><strong>Profil SMA</strong></h2>
                        <div class="divider-center-small wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s"></div>
                        <p class="section-subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"><em>SMA paling bergengsi di Indonesia uyang memiliki berbagai fasilitas yang mewadahi para siswa siswi untuk berprestasi di kancah dunia. SMA yang memiliki akreditasi sangat bagus yang menjamin setiap pelajar yang belajar disini menjadi orang yang sukses.</em></p>
                    </div>
                </div> <!-- /.col -->
            </div>  <!-- /.row -->

  

    <!-- Start Regular Section -->
    <section class="p-top-80 p-bottom-80" id="ED">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <!-- Section Title -->
                    <div class="m-bottom-30">
                        <h2 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.6s">ENKRIPSI - DEKRIPSI</h2>
                        <div class="divider-small wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.7s"></div>
                    </div>

                    <div class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.8s">
                        <p>Enkripsi adalah proses dimana informasi/data yang hendak dikirim diubah menjadi bentuk yang hampir tidak dikenali sebagai informasi awalnya dengan menggunakan algoritma tertentu.</p>
                        <p>Dekripsi adalah kebalikan dari enkripsi yaitu mengubah kembali bentuk tersamar tersebut menjadi informasi awal.</p>
                        <br>
                        <p>Pada menu kali ini kita menggunakan CipherText dan Vigenere</p>
                    </div>

                    <a href="enkrip_deskrip/Virgenere/index.php" class="m-top-30 m-bottom-30 btn btn-main wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">Vigenere</a>
                    <a href="enkrip_deskrip/Caesar/index.php" class="m-top-30 m-bottom-30 btn btn-main wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">Caesar</a>

                    
                </div> <!-- /.col -->

                <div class="col-md-6">

                    <div class="feature-image">
                        <img src="img/kunci.jpg" alt="Feature Image" class="img-responsive wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.6s" />
                    </div>                  
                    
                </div> <!-- /.col -->

            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section>
    <!-- End Regular Section -->


    <!-- Back to top -->
    <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-up"></i></a>
    <!-- /Back to top -->

    
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    
    <!-- Bootstrap -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <!-- Components Plugin -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/smooth-scroll.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.mb.YTPlayer.js"></script>
    <script src="js/retina.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="inc/owlcarousel/js/owl.carousel.min.js"></script>
    <script src="inc/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="inc/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- Contact Form -->
    <script src="js/contact.js"></script>
    
    <!-- Custom Plugin -->
    <script src="js/custom.js"></script>

    <!-- RS Plugin Extensions -->
    <script src="inc/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.parallax.min.js"></script>


    <script>
      var tpj = jQuery;

      var revapi280;
      tpj(document).ready(function() {
          if (tpj("#rev_slider_nagency").revolution == undefined) {
              revslider_showDoubleJqueryError("#rev_slider_nagency");
          } else {
              revapi280 = tpj("#rev_slider_nagency").show().revolution({
                  sliderType: "standard",
                  sliderLayout: "fullscreen",
                  dottedOverlay: "none",
                  delay: 90000,
                  navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation:"off",
                    onHoverStop:"off",
                    touch:{
                      touchenabled:"on",
                      swipe_threshold: 75,
                      swipe_min_touches: 1,
                      swipe_direction: "horizontal",
                      drag_block_vertical: false
                    }
                    ,
                    arrows: {
                          style: "uranus",
                          enable: true,
                          hide_onmobile: true,
                          hide_under: 496,
                          hide_onleave: true,
                          hide_delay: 200,
                          hide_delay_mobile: 1200,
                          tmp: '',
                          left: {
                              h_align: "left",
                              v_align: "center",
                              h_offset: 20,
                              v_offset: 0
                          },
                          right: {
                              h_align: "right",
                              v_align: "center",
                              h_offset: 20,
                              v_offset: 0
                          }
                      }
                  },
                  responsiveLevels: [1200, 991, 767, 480],
                  visibilityLevels: [1200, 991, 767, 480],
                  gridwidth: [1200, 991, 767, 480],
                  gridheight: [868, 768, 960, 720],
                  lazyType: "none",
                  parallax: {
                    type:"mouse+scroll",
                    origo:"slidercenter",
                    speed:2000,
                    levels:[2,3,4,5,6,7,12,16,10,50],
                    disable_onmobile:"on"
                  },
                  shadow: 0,
                  spinner: "spinner2",
                  autoHeight: "off",
                  fullScreenAutoWidth: "off",
                  fullScreenAlignForce: "off",
                  fullScreenOffsetContainer: "",
                  fullScreenOffset: "0",
                  disableProgressBar: "on",
                  hideThumbsOnMobile: "off",
                  hideSliderAtLimit: 0,
                  hideCaptionAtLimit: 0,
                  hideAllCaptionAtLilmit: 0,
                  debugMode: false,
                  fallbacks: {
                      simplifyAll: "off",
                      disableFocusListener: false,
                  }
              });
          }
      }); /*ready*/
  </script>
    
  </body>
</html>
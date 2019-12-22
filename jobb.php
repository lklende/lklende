<?php
/*
 * PHP-Webseitenschutz - geheim.php
 * - https://werner-zenk.de
 */
// This SESSION belongs on each website which should be secured
session_start();
if (!isset($_SESSION["benutzername"])) {
 header("Location: ./jobbanmeldung.php"); // set location of login page
 exit;
}
?>
<!DOCTYPE html>
<html  >
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/egetportrett-1-222x198.png" type="image/x-icon">
  <meta name="description" content="Web Builder Description">
  
  <title>Jobb</title>
  <link rel="stylesheet" href="assets/linecons/style.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/soundcloud-plugin/style.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/web/assets/gdpr-plugin/gdpr-styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
   <meta charset="UTF-8">
  <title>Innlogging</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>
  <section class="menu cid-qHJH9jqNLc" once="menu" id="menu2-7">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="./">
                        <img src="assets/images/egetportrett-1-222x198.png" alt="" title="" style="height: 8rem;">
                    </a>
                </span>
                
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-black display-4" href="./turer.php">Turer</a>
                </li><li class="nav-item"><a class="nav-link link text-black display-4" href="./hytta.php">Hytta</a></li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="./">
                        Modelljernbane</a>
                </li><li class="nav-item"><a class="nav-link link text-black display-4" href="jobb.php">
                        Jobb</a></li></ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="./">
                    
                    Hjem</a></div>
        </div>
    </nav>
</section>

<section class="header1 cid-rvfbCbFIox" id="header16-9">

    

    

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-10 align-center">
                
                
                
                
            </div>
        </div>
    </div>

</section>

<section class="header12 cid-rvfbx5Vg9q mbr-fullscreen" id="header12-8">

    

    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(35, 35, 35);">
    </div>

    <div class="container  ">
            <div class="media-container">
                <div class="col-md-12 align-center">
                    
                    
                    

                    <div class="icons-media-container mbr-white">
                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="icon-block">
                            <a href="MinForskning.html">
                                <span class="mbr-iconfont mbri-search"></span>
                            </a>
                            </div>
                            
                        </div>

                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="icon-block">
                                <a href="https://kurs.metode.tips/" target="_blank">
                                    <span class="mbr-iconfont li_study"></span>
                                </a>
                            </div>
                            
                        </div>

                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="icon-block">
                                <a href="#">
                                    <span class="mbri-cash mbr-iconfont"></span>
                                </a>
                            </div>
                            
                        </div>

                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="icon-block">
                                <a href="#">
                                    <span class="mbri-mobirise mbr-iconfont"></span>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
    </div>

    
</section>

<section once="footers" class="cid-rAKVvqKxOV" id="footer6-8">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    © Copyright 2019 Leif Kåre Lende - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/web/assets/cookies-alert-plugin/cookies-alert-core.js"></script>
  <script src="assets/web/assets/cookies-alert-plugin/cookies-alert-script.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  <!--  <h2>Geheim!</h2> -->

<p> Velkommen <?=$_SESSION["benutzername"];?>  &raquo; <a href="jobbanmeldung.php?abmeldung">Logg ut</a> </p>

<input name="cookieData" type="hidden" data-cookie-customDialogSelector='null' data-cookie-colorText='#424a4d' data-cookie-colorBg='rgba(234, 239, 241, 0.5700000000000001)' data-cookie-textButton='Agree' data-cookie-colorButton='#60e850' data-cookie-colorLink='#424a4d' data-cookie-underlineLink='true' data-cookie-text="We use cookies to give you the best experience. ">
  </body>
</html>
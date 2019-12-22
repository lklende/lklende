<?php
/*
 * PHP-Webseitenschutz - geheim.php
 * - https://werner-zenk.de
 */
// This SESSION belongs on each website which should be secured
session_start();
if (!isset($_SESSION["benutzername"])) {
 header("Location: ./anmeldung.php"); // set location of login page
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
  <meta name="description" content="Web Page Generator Description">
  
  <title>Hytta</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/soundcloud-plugin/style.css">
  <link rel="stylesheet" href="assets/web/assets/gdpr-plugin/gdpr-styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
    <meta charset="UTF-8">
  <title>Innlogging</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>
  <section class="menu cid-qHJH9jqNLc" once="menu" id="menu2-2">

    

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

<section class="header7 cid-qMpbcS1L5S" id="header7-6">

    

    

    <div class="container">
        <div class="media-container-row">

            <div class="media-content align-right">
                <h1 class="mbr-section-title mbr-white pb-3 mbr-fonts-style display-1">
                    Opptenning av vedovn i ny hyttedel</h1>
                <div class="mbr-section-text mbr-white pb-3">
                    
                </div>
                
            </div>

            <div class="mbr-figure" style="width: 100%;"><iframe class="mbr-embedded-video" src="https://www.youtube.com/embed/NUIPH4RHxvM?rel=0&amp;amp;showinfo=0&amp;autoplay=0&amp;loop=0" width="1280" height="720" frameborder="0" allowfullscreen></iframe></div>

        </div>
    </div>
</section>

<section class="header7 cid-qMpbaIE7xF" id="header7-3">

    

    

    <div class="container">
        <div class="media-container-row">

            <div class="media-content align-right">
                <h1 class="mbr-section-title mbr-white pb-3 mbr-fonts-style display-1">
                    Vann og frostsikring av vannet</h1>
                <div class="mbr-section-text mbr-white pb-3">
                    
                </div>
                
            </div>

            <div class="mbr-figure" style="width: 100%;"><iframe class="mbr-embedded-video" src="https://www.youtube.com/embed/NFD20NSfNnc?rel=0&amp;amp;showinfo=0&amp;autoplay=0&amp;loop=0" width="1280" height="720" frameborder="0" allowfullscreen></iframe></div>

        </div>
    </div>
</section>

<section class="header7 cid-qMpbcaDN32" id="header7-4">

    

    

    <div class="container">
        <div class="media-container-row">

            <div class="media-content align-right">
                <h1 class="mbr-section-title mbr-white pb-3 mbr-fonts-style display-1">
                    Kjøleskap og diverse</h1>
                <div class="mbr-section-text mbr-white pb-3">
                    
                </div>
                
            </div>

            <div class="mbr-figure" style="width: 100%;"><iframe class="mbr-embedded-video" src="https://www.youtube.com/embed/v5FlBm3AIUg?rel=0&amp;amp;showinfo=0&amp;autoplay=0&amp;loop=0" width="1280" height="720" frameborder="0" allowfullscreen></iframe></div>

        </div>
    </div>
</section>

<section class="header7 cid-qMpbcud0Sz" id="header7-5">

    

    

    <div class="container">
        <div class="media-container-row">

            <div class="media-content align-right">
                <h1 class="mbr-section-title mbr-white pb-3 mbr-fonts-style display-1">
                    Gasskran gammel hyttedel</h1>
                <div class="mbr-section-text mbr-white pb-3">
                    
                </div>
                
            </div>

            <div class="mbr-figure" style="width: 100%;"><iframe class="mbr-embedded-video" src="https://www.youtube.com/embed/5aySj0LXMqE?rel=0&amp;amp;showinfo=0&amp;autoplay=0&amp;loop=0" width="1280" height="720" frameborder="0" allowfullscreen></iframe></div>

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
  <script src="assets/web/assets/cookies-alert-plugin/cookies-alert-core.js"></script>
  <script src="assets/web/assets/cookies-alert-plugin/cookies-alert-script.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  <!--  <h2>Geheim!</h2> -->

<p> Velkommen <?=$_SESSION["benutzername"];?>  &raquo; <a href="anmeldung.php?abmeldung">Logg ut</a> </p>

<input name="cookieData" type="hidden" data-cookie-customDialogSelector='null' data-cookie-colorText='#424a4d' data-cookie-colorBg='rgba(234, 239, 241, 0.5700000000000001)' data-cookie-textButton='Agree' data-cookie-colorButton='#60e850' data-cookie-colorLink='#424a4d' data-cookie-underlineLink='true' data-cookie-text="We use cookies to give you the best experience. ">
  </body>
</html>
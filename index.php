<?php
session_start();
unset($_SESSION["language"]);
session_destroy();
print_r($_SESSION);
//echo "<script>alert(\"la variable est nulle\")</script>";

?>
<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Muzik- Admin Dashboard</title>
   <!-- Google Tag Manager -->

   <script>
      (function(w, d, s, l, i) {
         w[l] = w[l] || [];
         w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
         });
         var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
         j.async = true;
         j.src =
            '../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
         f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-WNGH9RL');
      window.tag_manager_event = 'dashboard-preview';
      window.tag_manager_product = 'Muzik';
   </script>
   <!-- End Google Tag Manager -->
   <!-- Favicon -->
   <link rel="shortcut icon" href="assetintro/images/favicon.ico">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="assetintro/css/bootstrap.min.css">
   <!-- Typography CSS -->
   <link rel="stylesheet" href="assetintro/css/typography.css">
   <!-- Style CSS -->
   <link rel="stylesheet" href="assetintro/css/style.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="assetintro/css/responsive.css">
</head>

<body>
   <div id="loading">
      <div id="loading-center">
         <div class="loader">
         </div>
      </div>
   </div>
   <!-- loader END -->
   <!-- Header -->
   <header id="header" class="main-header">
      <div class="container-fluid">
         <div class="row align-items-center">
            <div class="col-lg-8">
               <nav class="navbar navbar-expand-lg navbar-light">
                  <a class="navbar-brand d-flex" href="index.php">
                     <img class="logo" src="images/logo.png" alt="image">
                     <img class="logo-two" src="images/logo.png" alt="image">
                     <h4 style="color: white; margin-top:6px; margin-left:2px;">LANG</h4>
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                     <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                           <a class="nav-link" href="sign-up.php">Register</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="sign-in.php">Login</a>
                        </li>
                        <li class="nav-item">
                           <!-- <a class="nav-link" href="profile.php">Features</a> -->
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="http://localhost/server/project/contact/contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="/server/project/pages-faq.html">FAQ</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
      </div>
   </header>
   <div id="home">
      <div class="main-slider">
         <div id="container-inside">
            <canvas id="canvas"></canvas>
         </div>
         <div class="slider-content">
            <div class="slider-logo wow fadeInUp d-flex" data-wow-duration="0.6s">
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <img class="logo img-fluid w-25" src="images/logo.png" alt="image">
               <h1 style="color:white ;margin-left:10px;">LANG</h1>
            </div>
            <div class="text-center slider-text m-3 wow fadeInUp" data-wow-duration="0.8s">
               <p class="mb-0"> Learn Langue from<br> Streaming </p>
            </div>
         </div>
      </div>
      <!-- END REVOLUTION SLIDER -->


      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="assetintro/js/jquery-3.4.1.min.js"></script>
      <!-- popper  -->
      <script src="assetintro/js/popper.min.js"></script>
      <!--  bootstrap -->
      <script src="assetintro/js/bootstrap.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="assetintro/js/owl.carousel.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="assetintro/js/wow.min.js"></script>
      <!-- Retina JavaScript -->
      <script src="assetintro/js/retina.min.js"></script>
      <!-- REVOLUTION JS FILES -->
      <script src="assetintro/js/grouploop-1.0.0.min.js"></script>
      <!-- Custom JavaScript -->
      <script src="assetintro/js/custom.js"></script>
      <script src="js/slider-annimation.js"></script>
      <script async src="../../../templates.iqonic.designbanner/app.js" data-hs-background="#ff4545"></script>
      <script async src="../../../prod.iqonic.design/theme-banner/app.html"></script>
      <script async src="https://socialproof.zaperp.com/pixel/4PUCCDUMZU814VI4L1L4P2V5XP9K4MPU"></script>

</body>

</html>
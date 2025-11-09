<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">



  <title>Assurer WorldWide Apparel</title>



  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="wp-content/themes/assurer_dev/assets/images/favicon.png" rel="icon">
  <link href="wp-content/themes/assurer_dev/assets/images/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


  <!-- =======================================================
  * Template Name: Express Auto Wash
  ======================================================== -->
</head>
<?php wp_head(); ?>
<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
         <img src="wp-content/themes/assurer_dev/assets/images/logo.png" alt="">
        <!--<h1 class="sitename">Business Logo</h1>-->
      </a>

      <nav id="navmenu" class="navmenu">
        <?php wp_nav_menu(array(
	          'theme_location'   => 'main_menu',
             'menu_class'      => 'primary-nav',
             'container'       => '' 
            )   
            )
        ?>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="#contact">Book Your Car</a>

    </div>
  </header>
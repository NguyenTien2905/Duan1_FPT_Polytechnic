<?php
require_once('DAO/CategoryDAO.php');
require_once('DAO/ProductDAO.php');
require_once('DAO/CartDAO.php');
?>

<!doctype html>
<html class="no-js" lang="zxx" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Foodano - Fruit Sales Website - Shop Details</title>
    <meta name="author" content="">
    <meta name="description" content="Foodano - Fruit Sales Website">
    <meta name="keywords" content="Foodano - Fruit Sales Website" />
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--==============================
	   Google Web Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@200;300;400;500;600;700&family=Amatic+SC:wght@400;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="./src/assets/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./src/assets/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./src/assets/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./src/assets/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./src/assets/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./src/assets/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./src/assets/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./src/assets/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./src/assets/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="./src/assets/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./src/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./src/assets/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./src/assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="./src/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="./src/assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="./src/assets/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="./src/assets/css/bootstrap.rtl.min.css"> -->
    <!-- <link rel="stylesheet" href="./src/assets/css/app.min.css"> -->
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="./src/assets/css/fontawesome.min.css">
    <!-- Flaticon -->
    <link rel="stylesheet" href="./src/assets/css/flaticon.min.css">
    <!-- Layerslider -->
    <link rel="stylesheet" href="./src/assets/css/layerslider.min.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="./src/assets/css/jquery.datetimepicker.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="./src/assets/css/magnific-popup.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="./src/assets/css/slick.min.css">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="./src/assets/css/animate.min.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="./src/assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


</head>

<body class=" ">


    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->



    <!--********************************
   		Code Start From Here 
	******************************** -->

    <!--==============================
     Preloader
  ==============================-->
    <div class="preloader  ">
        <button class="vs-btn preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <div class="loader-logo">
                <img src="./src/assets/img/logo.svg" alt="FeeTech">
            </div>
            <div class="loader-wrap pt-4">
                <span class="loader"></span>
            </div>
        </div>
    </div>
    <!--==============================
        Header Top
    ==============================-->
    <div class="header-top-wrapper bg-black pb-2 pt-10 z-index-step1 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6 col-md-4 col-lg-4 d-none d-sm-block">
                    
                </div>
                <div class="col col-md-5 col-lg-4 text-center">
                    <p class="text-body2 mb-0 fs-xs fw-semibold font-theme d-none d-md-inline-block"><span class="text-theme">Free exress</span> international delevery + Easy returens</p>
                </div>
                <div class="col-sm-5 col-md-3 col-lg-4 text-center text-sm-end">
                    <div class="social-header fs-xs">
                        <span class="text-body2 fs-xs fw-semibold font-theme me-2">Social Network</span>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fal fa-basketball-ball"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--========================
    Sticky Header
========================-->
    <div class="sticky-header-wrap sticky-header py-2 py-lg-1">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-5 col-md-3">
                    <div class="logo">
                        <a href="index.php?controller=home"><img src="./src/assets/img/logo.svg" alt="FeeTech"></a>
                    </div>
                </div>
                <div class="col-7 col-md-9 text-end position-static">
                    <nav class="main-menu menu-sticky1 d-none d-lg-block link-inherit">
                        <ul style="font-size: 25px;">
                            <li class="menu-item">
                                <a href="index.php?controller=home">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="index.php?controller=product_show">Shop</a>
                                <ul class="sub-menu"style="font-size: 20px;">
                                    <li><a href="index.php?controller=product_show">Shop</a></li>
                                    <li><a href="index.php?controller=listCart">Shopping Cart</a></li>
                                    <!-- <li><a href="index.php?controller=checkOut">Check Out</a></li>
                                    <li><a href="index.php?controller=wishlistCart">Wishlist</a></li> -->
                                    <li><a href="index.php?controller=login">Login & Register</a></li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="#">Blog</a>
                              
                            </li>


                            <li>
                                <a href="index.php?controller=contact">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                    <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="far fa-bars"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Mobile Menu
  ============================== -->
    <div class="vs-menu-wrapper">
        <div class="vs-menu-area">
            <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="index.php?controller=home"><img src="./src/assets/img/logo.svg" alt="FeeTech"></a>
            </div>
            <div class="vs-mobile-menu link-inherit"></div><!-- Menu Will Append With Javascript -->
        </div>
    </div>
    <!--==============================
    Sidemenu
============================== -->
    
    <!--==============================
        Header Area
    ==============================-->
    <header class="header-wrapper header-layout3 header3-margin ">
        <div class="container py-30">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="header-logo">
                        <a href="index.php?controller=home"><img src="./src/assets/img/logo.svg" alt="FeeTech"></a>
                    </div>
                </div>
                <div class="col-6 text-end">
                    <button type="button" class="vs-menu-toggle d-inline-block d-lg-none"><i class="far fa-bars"></i></button>
                    <div class="head-top-links text-body2 d-none d-lg-block">
                        <a href="index.php?controller=wishlistCart" class="icon-btn has-badge bg3 me-3"><i class="fal fa-heart"></i><span class="badge">0</span></a>
                        <a href="index.php?controller=listCart" class="icon-btn has-badge bg2 me-4 "><i class="fal fa-shopping-cart"></i><span class="badge">0</span></a>
                        <a href="index.php?controller=home_user" class="icon-btn bg4">
                            <i class="fal fa-user"></i>
                        </a>


                    </div>
                </div>
            </div>
        </div>
        <div class="container d-none d-lg-block">
            <div class="header3-inner position-relative">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-xl-7">
                        <nav class="main-menu menu-style1 mobile-menu-active menu-style2">
                            <ul style="font-size: 25px;"  >
                                <li class="menu-item">
                                    <a href="index.php?controller=home">Home</a>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="index.php?controller=product_show">Shop</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.php?controller=product_show">Shop</a></li>       
                                        <li><a href="index.php?controller=listCart">Shopping Cart</a></li>
                                        <li><a href="index.php?controller=login">Login & Register</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="#">Blog</a>
                                    <!-- <ul class="sub-menu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-list.html">Blog List</a></li>
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="blog-grid-sidebar.html">Blog Grid Sidebar</a></li>
                                        <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul> -->
                                </li>
                               
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-xl-5">
                        <form action="index.php?controller=product_search" method="post" class="header-search">

                            <input type="text" placeholder="Search your product" class="form-control" name="search">

                            <button type="submit" class="vs-btn">Search</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Add this script block to your HTML or PHP file -->
    <script>
        // Assuming you have a variable mesess from your PHP code
        var mesess = "<?php echo $mesess ?? ''; ?>";

        // Check if mesess is not an empty string, then display the message
        if (mesess !== '') {
            // Create a new element to display the message
            var messageElement = document.createElement('div');
            messageElement.textContent = mesess;

            // Append the new element to the message container
            document.getElementById('message-container').appendChild(messageElement);
        }
    </script>
<!DOCTYPE html>

<html class="no-js" lang="zxx" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Foodano - Fruit Sales Website - Home One</title>
    <meta name="author" content="" />
    <meta name="description" content="Foodano - Fruit Sales Website" />
    <meta name="keywords" content="Foodano - Fruit Sales Website" />
    <meta name="robots" content="INDEX,FOLLOW" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--==============================
	   Google Web Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@200;300;400;500;600;700&family=Amatic+SC:wght@400;700&family=Lato:wght@400;700&display=swap" rel="stylesheet" />

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="./src/assets/img/favicons/apple-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="./src/assets/img/favicons/apple-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="./src/assets/img/favicons/apple-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="./src/assets/img/favicons/apple-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="./src/assets/img/favicons/apple-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="./src/assets/img/favicons/apple-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="./src/assets/img/favicons/apple-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="./src/assets/img/favicons/apple-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="./src/assets/img/favicons/apple-icon-180x180.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="./src/assets/img/favicons/android-icon-192x192.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./src/assets/img/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="./src/assets/img/favicons/favicon-96x96.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./src/assets/img/favicons/favicon-16x16.png" />
    <link rel="manifest" href="./src/assets/img/favicons/manifest.json" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="./src/assets/img/favicons/ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffffff" />

    <!--==============================
	    All CSS File
	============================== -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="./src/assets/css/bootstrap.min.css" />
    <!-- <link rel="stylesheet" href="./src/./src/assets/css/bootstrap.rtl.min.css"> -->
    <!-- <link rel="stylesheet" href="./src/assets/css/app.min.css"> -->
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="./src/assets/css/fontawesome.min.css" />
    <!-- Flaticon -->
    <link rel="stylesheet" href="./src/assets/css/flaticon.min.css" />
    <!-- Layerslider -->
    <link rel="stylesheet" href="./src/assets/css/layerslider.min.css" />
    <!-- Date Picker -->
    <link rel="stylesheet" href="./src/assets/css/jquery.datetimepicker.min.css" />
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="./src/assets/css/magnific-popup.min.css" />
    <!-- Slick Slider -->
    <link rel="stylesheet" href="./src/assets/css/slick.min.css" />
    <!-- Animation CSS -->
    <link rel="stylesheet" href="./src/assets/css/animate.min.css" />
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="./src/assets/css/style.css" />
</head>

<body class="home-6">
    <!-- ********************************
   		Code Start From Here 
	******************************** -->

    <!--==============================
     Preloader
  ============================== -->
    <div class="preloader">
        <button class="vs-btn preloaderCls">Cancel Preloader</button>
        <div class="preloader-inner">
            <div class="loader-logo">
                <img src="./src/assets/img/logo.svg" alt="FeeTech" />
            </div>
            <div class="loader-wrap pt-4">
                <span class="loader"></span>
            </div>
        </div>
    </div>
    <!-- ========================
    Sticky Header
======================== -->
    <div class="sticky-header-wrap sticky-header py-2 py-lg-1">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-5 col-md-3">
                    <div class="logo">
                        <a href="index.php?controller=home"><img src="./src/assets/img/logo.svg" alt="FeeTech" /></a>
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
                       
                                <ul class="sub-menu" style="font-size: 20px;">
                                    <li><a href="index.php?controller=product_show">Shop</a></li>
                                    <li><a href="index.php?controller=listCart">Shopping Cart</a></li>             
                                    <li><a href="index.php?controller=login">Login & Register</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Blog</a>
                                <!-- <ul class="sub-menu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-list.html">Blog List</a></li>
                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                    <li>
                                        <a href="blog-grid-sidebar.html">Blog Grid Sidebar</a>
                                    </li>
                                    <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul> -->
                            </li>
                            <li class="mega-menu-wrap menu-item">
                                <a href="index.php?controller=contact">Contact Us</a>
                            </li>
                        </ul>

                        </ul>
                    </nav>
                    <button class="vs-menu-toggle d-inline-block d-lg-none">
                        <i class="far fa-bars"></i>
                    </button>
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
                <a href="index.php?controller=home"><img src="./src/assets/img/logo.svg" alt="FeeTech" /></a>
            </div>
            <div class="vs-mobile-menu link-inherit"></div>
            <!-- Menu Will Append With Javascript -->
        </div>
    </div>
    <!--==============================
    Sidemenu
============================== -->
    <div class="sidemenu-wrapper d-none d-lg-block">
        <div class="sidemenu-content">
            <button class="closeButton border-theme text-theme bg-theme-hover sideMenuCls">
                <i class="far fa-times"></i>
            </button>
            <div class="widget widget_shopping_cart">
                <h3 class="widget_title">Shopping cart</h3>
                <div class="widget_shopping_cart_content">
                    <ul class="cart_list">
                        <li class="mini_cart_item">
                            <a href="index.php?controller=product_show" class="remove"><i class="fal fa-trash-alt"></i></a>
                            <a href="index.php?controller=product_show"><img src="./src/assets/img/cart/cart-img-1-1.jpg" alt="Cart Image" />Hot Burger</a>
                            <span class="quantity">1 ×
                                <span class="amount"> <span>$</span>40.00 </span>
                            </span>
                        </li>
                        <li class="mini_cart_item">
                            <a href="index.php?controller=product_show" class="remove"><i class="fal fa-trash-alt"></i></a>
                            <a href="index.php?controller=product_show"><img src="./src/assets/img/cart/cart-img-1-2.jpg" alt="Cart Image" />Vegetable</a>
                            <span class="quantity">1 ×
                                <span class="amount"> <span>$</span>99.00 </span>
                            </span>
                        </li>

                        <li class="mini_cart_item">
                            <a href="index.php?controller=product_show" class="remove"><i class="fal fa-trash-alt"></i></a>
                            <a href="index.php?controller=product_show"><img src="./src/assets/img/cart/cart-img-1-3.jpg" alt="Cart Image" />Pop Pizza</a>
                            <span class="quantity">1 ×
                                <span class="amount"> <span>$</span>56.00 </span>
                            </span>
                        </li>
                        <li class="mini_cart_item">
                            <a href="index.php?controller=product_show" class="remove"><i class="fal fa-trash-alt"></i></a>
                            <a href="index.php?controller=product_show"><img src="./src/assets/img/cart/cart-img-1-4.jpg" alt="Cart Image" />Onion & Tomato</a>
                            <span class="quantity">1 ×
                                <span class="amount"> <span>$</span>23.00 </span>
                            </span>
                        </li>
                        <li class="mini_cart_item">
                            <a href="index.php?controller=product_show" class="remove"><i class="fal fa-trash-alt"></i></a>
                            <a href="index.php?controller=product_show"><img src="./src/assets/img/cart/cart-img-1-5.jpg" alt="Cart Image" />Cool Drinks</a>
                            <span class="quantity">1 ×
                                <span class="amount"> <span>$</span>100.00 </span>
                            </span>
                        </li>
                    </ul>
                    <p class="total">
                        <strong>Subtotal:</strong>
                        <span class="amount"> <span>$</span>318.00 </span>
                    </p>
                    <p class="buttons">
                        <a href="index.php?controller=listCart" class="vs-btn">View cart</a>
                        <a href="checkout.html" class="vs-btn">Checkout</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Popup Search Box
    ============================== -->
    <div class="popup-search-box d-none d-lg-block">
        <button class="searchClose border-theme text-theme">
            <i class="fal fa-times"></i>
        </button>
        <form action="index.php?controller=product_search" method="post">
            <input type="text" class="border-theme" name="search" placeholder="What are you looking for" />
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>



    <!--==============================
        Header Area
    ==============================-->
    <?php
    if (isset($_SESSION['user'])) {
        $user = ($_SESSION['user']);
    } ?>

    <header class="header-wrapper header-layout5">
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-infos">
                            <p class="info">
                                <img src="./src/assets/img/icons/info-icon-1.png" alt="icon" />Free
                                exress international delevery + Easy returens
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-auto text-center text-lg-end">
                        <div class="header-infos">
                            <p class="info">
                                <i class="fas fa-phone-alt"></i>Phone:<a href="tel:0964255760">0964255760</a>
                            </p>
                            <p class="info d-none d-md-inline-block">
                                <i class="fas fa-envelope"></i>Email:<a href="mailto:dttfoodshop@gmail.com">dttfoodshop@gmail.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col col-lg-auto">
                        <div class="header-logo">
                            <a href="index.php?controller=home"><img src="./src/assets/img/logo.svg" alt="FeeTech" /></a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu mobile-menu-active menu-style2">
                            <ul style="font-size: 25px">
                                <li class="menu-item">
                                    <a href="index.php?controller=home">Home</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="index.php?controller=product_show">Shop</a>
                                    <ul class="sub-menu" style="font-size: 20px">
                                        <li><a href="index.php?controller=product_show">Shop</a></li>
                                        <li><a href="index.php?controller=listCart">Shopping Cart</a></li>
                                        <!-- <li><a href="index.php?controller=checkOut">Check Out</a></li> -->
                                        <!-- <li><a href="index.php?controller=wishlistCart">Wishlist</a></li> -->
                                        <li>
                                            <a href="index.php?controller=login">Login & Register</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="#">Blog</a>
                                   
                                </li>
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-auto d-none d-sm-block">
                        <div class="header-buttons">
                            <button type="button" class="searchBoxTggler">
                                <i class="far fa-search"></i>
                            </button>
                            <a href="index.php?controller=home_user"><?php if (!empty($user['image'])) : ?>
                                    <img src="./assets/imgs/logo/<?php echo $user['image']; ?>" alt="" width="30px" height="35px">
                                <?php else : ?>
                                    <img src="assets/imgs/logo/login.png" alt="" width="25px" height="35px">
                                <?php endif; ?>
                            </a>
                            <button class="sideMenuToggler" type="button" onclick="redirectToCart()">
                                <i class="fal fa-shopping-cart" data-href="index.php?controller=listCart"></i>
                                <span class="badge">0</span>
                            </button>

                            <script>
                                function redirectToCart() {
                                    var cartIcon = document.querySelector('.sideMenuToggler i');
                                    var href = cartIcon.getAttribute('data-href');
                                    if (href) {
                                        window.location.href = href;
                                    }
                                }
                            </script>
                        </div>
                    </div>
                    <div class="col-auto d-block d-lg-none">
                        <button type="button" class="vs-menu-toggle">
                            <i class="far fa-bars"></i>
                        </button>
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
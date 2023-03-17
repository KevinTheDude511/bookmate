<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BookMate</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/icon/favicon.png">

    <!-- All CSS Files -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Nivo-slider css -->
    <link rel="stylesheet" href="lib/css/nivo-slider.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Template color css -->
    <link href="css/color/color-core.css" data-style="styles" rel="stylesheet">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<?php
include("connect.php");
?>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper">

        <!-- START HEADER AREA -->
        <header class="header-area header-wrapper">
            <!-- header-top-bar -->
            <div class="header-top-bar plr-185">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 hidden-xs">
                            <div class="call-us">
                                <!--<p class="mb-0 roboto">(+88) 01234-567890</p>-->
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="top-link clearfix">
                                <ul class="link f-right">
                                    <li>
                                        <a href="#">
                                            <i class="zmdi zmdi-account"></i>
                                            My Account
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html">
                                            <i class="zmdi zmdi-favorite"></i>
                                            Wish List (0)
                                        </a>
                                    </li>
                                    <!--<li>
                                        <a href="login.php">
                                            <i class="zmdi zmdi-lock"></i>
                                            Login
                                        </a>
                                    </li>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-middle-area -->
            <div id="sticky-header" class="header-middle-area plr-185">
                <div class="container-fluid">
                    <div class="full-width-mega-dropdown">
                        <div class="row">
                            <!-- logo -->
                            <div class="col-md-2 col-sm-6 col-xs-12">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="img/logo/logo.png" alt="main logo"> <!-- BOOKMATE IMAGE -->
                                    </a>
                                </div>
                            </div>
                            <!-- primary-menu -->
                            <div class="col-md-8 hidden-sm hidden-xs">
                                <nav id="primary-menu">
                                    <ul class="main-menu text-center">
                                        <li><a href="index.php">Home</a>
                                            <!--<ul class="dropdwn">
                                                <li>
                                                    <a href="index.html">Home Version 1</a>
                                                </li>
                                                <li>
                                                    <a href="index-2.html">Home Version 2</a>
                                                </li>
                                                <li>
                                                    <a href="index-3.html">Home Version 3</a>
                                                </li>
                                                <li>
                                                    <a href="index-4.html">Home 4 Animated Text</a>
                                                </li>
                                                <li>
                                                    <a href="index-5.html">Home 5 Animated Text Ovlerlay</a>
                                                </li>
                                                <li>
                                                    <a href="index-6.html">Home 6 Background Video</a>
                                                </li>
                                                <li>
                                                    <a href="index-7.html">Home 7 BG-Video Ovlerlay</a>
                                                </li>
                                                <li>
                                                    <a href="index-8.html">Home 8 Boxed</a>
                                                </li>
                                                <li>
                                                    <a href="index-9.html">Home 9 Gradient</a>
                                                </li>
                                                <li>
                                                    <a href="index-10.html">Home 10 Boxed-2</a>
                                                </li>
                                            </ul>-->
                                        </li>
                                        <!--<li class="mega-parent"><a href="#">elements</a>
                                            <div class="mega-menu-area clearfix">
                                                <div class="mega-menu-link mega-menu-link-4  f-left">
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">Elements 1</li>
                                                        <li>
                                                            <a href="elements-header-1-sticky.html">header-1-sticky</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-header-1-no-sticky.html">header-1-no-sticky</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-header-2-sticky.html">header-2-sticky</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-header-2-no-sticky.html">header-2-no-sticky</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-footer-1.html">footer-1</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-footer-2.html">footer-2</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-footer-3.html">footer-3</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-contact-form.html">Dynamic Contact Form</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-map.html">Google Map</a>
                                                        </li>
                                                    </ul>
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">Elements 2</li>
                                                        <li>
                                                            <a href="elements-featured-product-1.html">featured-product-1</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-featured-product-2.html">featured-product-2</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-product-tab-1.html">product-tab-1</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-product-tab-2.html">product-tab-2</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-up-comming-product-1.html">up-comming-product-1</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-up-comming-product-2.html">up-comming-product-2</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-single-product.html">single-product</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-sidebar-left.html">sidebar-left</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-sidebar-right.html">sidebar-right</a>
                                                        </li>
                                                    </ul>
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">Elements 3</li>
                                                        <li>
                                                            <a href="elements-section-title.html">section-title</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-pagination.html">pagination</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-banner.html">Banner</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-brands.html">Brands</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-breadcrumbs.html">Breadcrumbs</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-newsletter.html">Newsletter</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-team.html">team</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-audio.html">Audio</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-video.html">Video</a>
                                                        </li>
                                                    </ul>
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">Elements 4</li>
                                                        <li>
                                                            <a href="elements-typography.html">typography</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-buttons.html">Buttons</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-call-to-action.html">Call to Action</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-accordion.html">Accordion</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-alerts.html">Alerts</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-progress-bars.html">progress-bars</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-tab.html">tab</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-toggles.html">toggles</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-toggles.html">toggles</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>-->
                                        <!--<li class="mega-parent"><a href="shop.html">Products</a>
                                            <div class="mega-menu-area clearfix">
                                                <div class="mega-menu-link f-left">
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">Smart Phone</li>
                                                        <li>
                                                            <a href="#">All Mobile Phones</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Smart phones</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Android Mobiles</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Windows Mobiles</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Refurbished Mobiles</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">All Mobile Accessories</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Cases & Covers</a>
                                                        </li>
                                                    </ul>
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">Note Book</li>
                                                        <li>
                                                            <a href="">All Note Books</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Smart notebooks</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Android Note Book</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Windows Note Books</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Refurbished Note Books</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Note Books Accessories</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Cases & Covers</a>
                                                        </li>
                                                    </ul>
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">Tablets</li>
                                                        <li>
                                                            <a href="">All Tablets</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Smart tablets</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Android Tablets</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Windows Tablets</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Refurbished Tablets</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Tablets Accessories</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Cases & Covers</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="mega-menu-photo f-left">
                                                    <a href="#">
                                                        <img src="img/mega-menu/1.jpg" alt="mega menu image">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mega-parent"><a href="#">Pages</a>
                                            <div class="mega-menu-area mega-menu-area-2 clearfix">
                                                <div class="mega-menu-link mega-menu-link-2  f-left">
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">page list</li>
                                                        <li>
                                                            <a href="shop.html">Shop</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-left-sidebar.html">Shop Left Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-right-sidebar.html">Shop Right Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-list.html">Shop List</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="single-product.html">Single Product</a>
                                                        </li>
                                                        <li>
                                                            <a href="single-product-left-sidebar.html">Single Product Left Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="single-product-no-sidebar.html">Single Product No Sidebar</a>
                                                        </li>
                                                    </ul>
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">page list</li>
                                                        <li>
                                                            <a href="cart.html">Shopping Cart</a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">Wishlist</a>
                                                        </li>
                                                        <li>
                                                            <a href="checkout.html">Checkout</a>
                                                        </li>
                                                        <li>
                                                            <a href="order.html">Order</a>
                                                        </li>
                                                        <li>
                                                            <a href="login.html">Login</a>
                                                        </li>
                                                        <li>
                                                            <a href="My-account.html">My Account</a>
                                                        </li>
                                                        <li>
                                                            <a href="about.html">About us</a>
                                                        </li>
                                                        <li>
                                                            <a href="404.html">404</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a href="blog.html">Blog</a>
                                            <ul class="dropdwn">
                                                <li><a href="blog-left-sidebar.html">Dropdown Repeat</a>
                                                    <ul class="dropdwn-repeat">
                                                        <li>
                                                            <a href="blog.html">Blog</a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-2.html">Blog style 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-2-left-sidebar.html">Blog 2 Left Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-2-right-sidebar.html">Blog 2 Right Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="single-blog.html">Blog Details</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="blog.html">Blog</a>
                                                </li>
                                                <li>
                                                    <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="blog-2.html">Blog style 2</a>
                                                </li>
                                                <li>
                                                    <a href="blog-2-left-sidebar.html">Blog 2 Left Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="blog-2-right-sidebar.html">Blog 2 Right Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="single-blog.html">Blog Details</a>
                                                </li>
                                            </ul>
                                        </li>-->
                                        <li>
                                            <a href="about.php">About us</a>
                                        </li>
                                        <!--<li>
                                            <a href="contact.html">Contact</a>
                                        </li>-->
                                    </ul>
                                </nav>
                            </div>
                            <!-- header-search & total-cart -->
                            <!--<div class="col-md-2 col-sm-6 col-xs-12">
                                <div class="search-top-cart  f-right">-->
                                    <!-- header-search -->
                                    <!--<div class="header-search f-left">
                                        <div class="header-search-inner">
                                           <button class="search-toggle">
                                            <i class="zmdi zmdi-search"></i>
                                           </button>
                                            <form action="#">
                                                <div class="top-search-box">
                                                    <input type="text" placeholder="Search here your product...">
                                                    <button type="submit">
                                                        <i class="zmdi zmdi-search"></i>
                                                    </button>
                                                </div>
                                            </form> 
                                        </div>
                                    </div>-->
                                    <!-- total-cart -->
                                    <!--<div class="total-cart f-left">
                                        <div class="total-cart-in">
                                            <div class="cart-toggler">
                                                <a href="#">
                                                    <span class="cart-quantity">02</span><br>
                                                    <span class="cart-icon">
                                                        <i class="zmdi zmdi-shopping-cart-plus"></i>
                                                    </span>
                                                </a>                            
                                            </div>
                                            <ul>
                                                <li>
                                                    <div class="top-cart-inner your-cart">
                                                        <h5 class="text-capitalize">Your Cart</h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="total-cart-pro">-->
                                                        <!-- single-cart -->
                                                        <!--<div class="single-cart clearfix">
                                                            <div class="cart-img f-left">
                                                                <a href="#">
                                                                    <img src="img/cart/1.jpg" alt="Cart Product" />
                                                                </a>
                                                                <div class="del-icon">
                                                                    <a href="#">
                                                                        <i class="zmdi zmdi-close"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="cart-info f-left">
                                                                <h6 class="text-capitalize">
                                                                    <a href="#">Dummy Product Name</a>
                                                                </h6>
                                                                <p>
                                                                    <span>Brand <strong>:</strong></span>Brand Name
                                                                </p>
                                                                <p>
                                                                    <span>Model <strong>:</strong></span>Grand s2
                                                                </p>
                                                                <p>
                                                                    <span>Color <strong>:</strong></span>Black, White
                                                                </p>
                                                            </div>
                                                        </div>-->
                                                        <!-- single-cart -->
                                                        <!--<div class="single-cart clearfix">
                                                            <div class="cart-img f-left">
                                                                <a href="#">
                                                                    <img src="img/cart/1.jpg" alt="Cart Product" />
                                                                </a>
                                                                <div class="del-icon">
                                                                    <a href="#">
                                                                        <i class="zmdi zmdi-close"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="cart-info f-left">
                                                                <h6 class="text-capitalize">
                                                                    <a href="#">Dummy Product Name</a>
                                                                </h6>
                                                                <p>
                                                                    <span>Brand <strong>:</strong></span>Brand Name
                                                                </p>
                                                                <p>
                                                                    <span>Model <strong>:</strong></span>Grand s2
                                                                </p>
                                                                <p>
                                                                    <span>Color <strong>:</strong></span>Black, White
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="top-cart-inner subtotal">
                                                        <h4 class="text-uppercase g-font-2">
                                                            Total  =  
                                                            <span>$ 500.00</span>
                                                        </h4>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="top-cart-inner view-cart">
                                                        <h4 class="text-uppercase">
                                                            <a href="#">View cart</a>
                                                        </h4>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="top-cart-inner check-out">
                                                        <h4 class="text-uppercase">
                                                            <a href="#">Check out</a>
                                                        </h4>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER AREA -->

        <!-- START MOBILE MENU AREA --> <!-- WIP -->
        <!--<div class="mobile-menu-area hidden-lg hidden-md">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="index.html">Home</a>
                                        <ul>
                                            <li>
                                                <a href="index.html">Home Version 1</a>
                                            </li>
                                            <li>
                                                <a href="index-2.html">Home Version 2</a>
                                            </li>
                                            <li>
                                                <a href="index-3.html">Home Version 3</a>
                                            </li>
                                            <li>
                                                <a href="index-4.html">Home 4 Animated Text</a>
                                            </li>
                                            <li>
                                                <a href="index-5.html">Home 5 Animated Text Ovlerlay</a>
                                            </li>
                                            <li>
                                                <a href="index-6.html">Home 6 Background Video</a>
                                            </li>
                                            <li>
                                                <a href="index-7.html">Home 7 BG-Video Ovlerlay</a>
                                            </li>
                                            <li>
                                                <a href="index-8.html">Home 8 Boxed-1</a>
                                            </li>
                                            <li>
                                                <a href="index-9.html">Home 9 Gradient</a>
                                            </li>
                                            <li>
                                                <a href="index-10.html">Home 10 Boxed-2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="shop.html">Products</a>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul>
                                            <li>
                                                <a href="shop.html">Shop</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar.html">Shop Left Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="shop-right-sidebar.html">Shop Right Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="shop-list.html">Shop List</a>
                                            </li>
                                            <li>
                                                <a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="single-product.html">Single Product</a>
                                            </li>
                                            <li>
                                                <a href="single-product-left-sidebar.html">Single Product Left Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="single-product-no-sidebar.html">Single Product No Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="cart.html">Shopping Cart</a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html">Wishlist</a>
                                            </li>
                                            <li>
                                                <a href="checkout.html">Checkout</a>
                                            </li>
                                            <li>
                                                <a href="order.html">Order</a>
                                            </li>
                                            <li>
                                                <a href="login.html">Login</a>
                                            </li>
                                            <li>
                                                <a href="My-account.html">My Account</a>
                                            </li>
                                            <li>
                                                <a href="about.html">About us</a>
                                            </li>
                                            <li>
                                                <a href="404.html">404</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">Blog</a>
                                        <ul>
                                            <li>
                                                <a href="blog.html">Blog</a>
                                            </li>
                                            <li>
                                                <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog-2.html">Blog style 2</a>
                                            </li>
                                            <li>
                                                <a href="blog-2-left-sidebar.html">Blog 2 Left Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog-2-right-sidebar.html">Blog 2 Right Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="single-blog.html">Blog Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="about.html">About Us</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- END MOBILE MENU AREA -->

        <!-- START SLIDER AREA -->
        <div class="slider-area  plr-185  mb-80">
            <div class="container-fluid">
                <div class="slider-content">
                    <div class="row">
                        <div class="active-slider-1 slick-arrow-1 slick-dots-1">
                            <!-- layer-1 Start -->
                            <?php
                                $book_query = mysqli_query($link, "SELECT bookID, name, overview, imgURL FROM book ORDER BY ratingScore DESC LIMIT 4");
                                while($book = mysqli_fetch_array($book_query))
                                {
                            ?>
                            <div class="col-md-12">
                                <div class="layer-1">
                                    <div class="slider-img">
                                        <img src="<?php echo $book["imgURL"]; ?>" alt="" width=800 height=600>
                                    </div>
                                    <div class="slider-info gray-bg">
                                        <div class="slider-info-inner">
                                            <h1 class="slider-title-1 text-uppercase text-black-1"><?php 
                                                    $book_name = $book["name"];
                                                    if(strlen($book_name) >= 40) $book_name = substr($book_name, 0, 40)."...";
                                                    echo $book_name;
                                                ?>
                                            </h1>
                                            <div class="slider-brief text-black-2">
                                                <p><?php echo $book["overview"]; ?></p>
                                            </div>
                                            <a href="book-detail.php?id=<?php echo $book["bookID"]; ?>" class="button extra-small button-black">
                                                <span class="text-uppercase">Xem chi tiết</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                            <!-- layer-1 end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SLIDER AREA -->

        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">
            <!-- PRODUCT TAB SECTION START -->
            <div class="product-tab-section mb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="section-title text-left mb-40">
                                <h2 class="uppercase">Books</h2>
                                <h6>Here are our collection of best books to choose from, please enjoy.</h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="pro-tab-menu text-right">
                                <!-- Nav tabs -->
                                <ul class="" >
                                    <li class="active"><a href="#popular-product" data-toggle="tab">Highest Rating </a></li>
                                    <li><a href="#new-arrival" data-toggle="tab">New Arrival</a></li>
                                    <li><a href="#best-seller"  data-toggle="tab">Most Reviewed</a></li>
                                    <!--<li><a href="#special-offer"  data-toggle="tab">Special Offer</a></li>-->
                                </ul>
                            </div>                       
                        </div>
                    </div>
                    <div class="product-tab">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- popular-product start -->
                            <div class="tab-pane active" id="popular-product">
                                <div class="row">
                                    <!-- product-item start -->
                                    <?php
                                        $book_amount = 8;
                                        $high_rating_query = mysqli_query($link, "SELECT bookID, name, ratingScore, ratingNum, reviewNum, imgURL FROM book ORDER BY ratingScore DESC LIMIT $book_amount");
                                        while($high_rating = mysqli_fetch_array($high_rating_query))
                                        {
                                    ?>
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="book-detail.php?id=<?php echo $high_rating["bookID"]; ?>">
                                                    <img src="<?php echo $high_rating["imgURL"]; ?>" alt="" width=270 height=300/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="book-detail.php?id=<?php echo $high_rating["bookID"]; ?>" title="<?php echo $high_rating["name"]; ?>"><?php echo $high_rating["name"]; ?></a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <?php
                                                        $score = round($high_rating["ratingScore"]);
                                                        $star_count = 0;
                                                        while($score > 0)
                                                        {
                                                            if($score >= 2)
                                                            {
                                                    ?>
                                                    <a href="#" title="Rating Score: <?php echo $high_rating["ratingScore"]; ?>"><i class="zmdi zmdi-star"></i></a>
                                                    <?php
                                                                $score -= 2;
                                                                $star_count++;
                                                                continue;
                                                            }
                                                            else if($score == 1)
                                                            {   
                                                    ?>
                                                    <a href="#" title="Rating Score: <?php echo $high_rating["ratingScore"]; ?>"><i class="zmdi zmdi-star-half"></i></a>
                                                    <?php
                                                                $score -= 1;
                                                                $star_count++;
                                                                break;
                                                            }
                                                        }
                                                        while($star_count < 5)
                                                        {
                                                    ?>
                                                    <a href="#" title="Rating Score: <?php echo $high_rating["ratingScore"]; ?>"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <?php
                                                            $star_count++;
                                                        }
                                                    ?>
                                                </div>
                                                <h3 class="pro-price"><?php echo $high_rating["ratingNum"]; ?> Ratings | <?php echo $high_rating["reviewNum"]; ?> Reviews</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="#" title="Get Book"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                    <!--<li>
                                                        <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                    </li>-->
                                                    <!--<li>
                                                        <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                    </li>-->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <!-- product-item end -->
                                </div>
                            </div>
                            <!-- popular-product end -->
                            <!-- new-arrival start -->
                            <div class="tab-pane" id="new-arrival">
                                <div class="row">
                                    <!-- product-item start -->
                                    <?php
                                        $new_book_query = mysqli_query($link, "SELECT bookID, name, ratingScore, ratingNum, reviewNum, imgURL FROM book ORDER BY uploadDate DESC LIMIT $book_amount");
                                        while($new_book = mysqli_fetch_array($new_book_query))
                                        {
                                    ?>
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="book-detail.php?id=<?php echo $new_book["bookID"]; ?>">
                                                    <img src="<?php echo $new_book["imgURL"]; ?>" alt="" width=270 height=300/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="book-detail.php?id=<?php echo $new_book["bookID"]; ?>" title="<?php echo $new_book["name"]; ?>"><?php echo $new_book["name"]; ?></a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <?php
                                                        $score = round($new_book["ratingScore"]);
                                                        $star_count = 0;
                                                        while($score > 0)
                                                        {
                                                            if($score >= 2)
                                                            {
                                                    ?>
                                                    <a href="#" title="Rating Score: <?php echo $new_book["ratingScore"]; ?>"><i class="zmdi zmdi-star"></i></a>
                                                    <?php
                                                                $score -= 2;
                                                                $star_count++;
                                                                continue;
                                                            }
                                                            else if($score == 1)
                                                            {   
                                                    ?>
                                                    <a href="#" title="Rating Score: <?php echo $new_book["ratingScore"]; ?>"><i class="zmdi zmdi-star-half"></i></a>
                                                    <?php
                                                                $score -= 1;
                                                                $star_count++;
                                                                break;
                                                            }
                                                        }
                                                        while($star_count < 5)
                                                        {
                                                    ?>
                                                    <a href="#" title="Rating Score: <?php echo $new_book["ratingScore"]; ?>"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <?php
                                                            $star_count++;
                                                        }
                                                    ?>
                                                </div>
                                                <h3 class="pro-price"><?php echo $new_book["ratingNum"]; ?> Ratings | <?php echo $new_book["reviewNum"]; ?> Reviews</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="#" title="Get Book"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>
                                    <!-- product-item end -->
                                </div>                                        
                            </div>
                            <!-- new-arrival end -->
                            <!-- most-reviewed start -->
                            <div class="tab-pane" id="best-seller">
                                <div class="row">
                                    <!-- product-item start -->
                                    <?php
                                        $most_reviewed_query = mysqli_query($link, "SELECT bookID, name, ratingScore, ratingNum, reviewNum, imgURL FROM book ORDER BY reviewNum DESC LIMIT $book_amount");
                                        while($most_reviewed = mysqli_fetch_array($most_reviewed_query))
                                        {
                                    ?>
                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="book-detail.php?id=<?php echo $most_reviewed["bookID"]; ?>">
                                                    <img src="<?php echo $most_reviewed["imgURL"]; ?>" alt="" width=270 height=300/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="book-detail.php?id=<?php echo $most_reviewed["bookID"]; ?>" title="<?php echo $most_reviewed["name"]; ?>"><?php echo $most_reviewed["name"]; ?></a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <?php
                                                        $score = round($most_reviewed["ratingScore"]);
                                                        $star_count = 0;
                                                        while($score > 0)
                                                        {
                                                            if($score >= 2)
                                                            {
                                                    ?>
                                                    <a href="#" title="Rating Score: <?php echo $most_reviewed["ratingScore"]; ?>"><i class="zmdi zmdi-star"></i></a>
                                                    <?php
                                                                $score -= 2;
                                                                $star_count++;
                                                                continue;
                                                            }
                                                            else if($score == 1)
                                                            {   
                                                    ?>
                                                    <a href="#" title="Rating Score: <?php echo $most_reviewed["ratingScore"]; ?>"><i class="zmdi zmdi-star-half"></i></a>
                                                    <?php
                                                                $score -= 1;
                                                                $star_count++;
                                                                break;
                                                            }
                                                        }
                                                        while($star_count < 5)
                                                        {
                                                    ?>
                                                    <a href="#" title="Rating Score: <?php echo $most_reviewed["ratingScore"]; ?>"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <?php
                                                            $star_count++;
                                                        }
                                                    ?>
                                                </div>
                                                <h3 class="pro-price"><?php echo $most_reviewed["ratingNum"]; ?> Ratings | <?php echo $most_reviewed["reviewNum"]; ?> Reviews</h3>
                                                <ul class="action-button">
                                                    <li>
                                                        <a href="#" title="Get Book"><i class="zmdi zmdi-favorite"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>
                                    <!-- product-item end -->
                                </div>                                        
                            </div>
                            <!-- most-reviewed end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- PRODUCT TAB SECTION END -->

            <!-- BLOG SECTION START -->
            <div class="blog-section mb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title text-left mb-40">
                                <h2 class="uppercase">Contributors</h2>
                                <h6>Here are our top three book contributors,</h6>
                            </div>
                        </div>
                    </div>
                    <div class="blog">
                        <div class="row active-blog">
                            <!-- blog-item start -->
                            <div class="col-xs-12">
                                <div class="blog-item">
                                    <img src="img/contributors/1.jpg" alt="" width="370" height="300" >
                                    <div class="blog-desc">
                                        <h5 class="blog-title"><a href="#">Sky</a></h5>
                                        <p>Mystery books are the best!</p>
                                        <!--<div class="read-more">
                                            <a href="single-blog.html">Read more</a>
                                        </div>-->
                                        <ul class="blog-meta">
                                            <li>
                                                <a href="#"><i class="zmdi zmdi-favorite"></i>7 Books Contributed</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="zmdi zmdi-comments"></i>20 Reviews</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- blog-item end -->
                            <!-- blog-item start -->
                            <div class="col-xs-12">
                                <div class="blog-item">
                                    <img src="img/contributors/2.jpg" alt="" width="370" height="300" >
                                    <div class="blog-desc">
                                        <h5 class="blog-title"><a href="#">Kana</a></h5>
                                        <p>It would be nice if I'm the main character in romantic stories. It's nice to be young, isn't it?</p>
                                        <!--<div class="read-more">
                                            <a href="single-blog.html">Read more</a>
                                        </div>-->
                                        <ul class="blog-meta">
                                            <li>
                                                <a href="#"><i class="zmdi zmdi-favorite"></i>9 Books Contributed</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="zmdi zmdi-comments"></i>45 Reviews</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- blog-item end -->
                            <!-- blog-item start -->
                            <div class="col-xs-12">
                                <div class="blog-item">
                                    <img src="img/contributors/3.jpg" alt="" width="370" height="300" >
                                    <div class="blog-desc">
                                        <h5 class="blog-title"><a href="#">Joe</a></h5>
                                        <p>Hi, I'm Joe. Feel free to contact me if you are interested in my books. I also love to discuss about scifi books, so if you are also a big fan, just send a message to me!</p>
                                        <!--<div class="read-more">
                                            <a href="single-blog.html">Read more</a>
                                        </div>-->
                                        <ul class="blog-meta">
                                            <li>
                                                <a href="#"><i class="zmdi zmdi-favorite"></i>8 Books Contributed</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="zmdi zmdi-comments"></i>25 Reviews</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- blog-item end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- BLOG SECTION END -->                
        </section>
        <!-- End page content -->

        <!-- START FOOTER AREA -->
        <footer id="footer" class="footer-area">
            <div class="footer-top">
                <div class="container-fluid">
                    <div class="plr-185">
                        <div class="footer-top-inner gray-bg">
                            <div class="row">
                                <div class="col-lg-7 col-md-5 col-sm-4">
                                    <div class="single-footer footer-about">
                                        <div class="footer-logo">
                                            <img src="img/logo/logo.png" alt="" width="200" height="80">
                                        </div>
                                        <div class="footer-brief">
                                            <p>Sign up now to become a member. We would love to meet you.</p>
                                            <p>Being a member of BookMate means that:</p>
                                            <p>- You can freely express your love for books.</p>
                                            <p>- You have a chance to gain access to your desired books.</p>
                                            <p>- You can find a like-minded friend to talk to.</p>
                                            <p>- You can exchange books with another member who is near you.</p>
                                        </div>
                                        <!--<ul class="footer-social">
                                            <li>
                                                <a class="facebook" href="" title="Facebook"><i class="zmdi zmdi-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a class="google-plus" href="" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a>
                                            </li>
                                            <li>
                                                <a class="twitter" href="" title="Twitter"><i class="zmdi zmdi-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a class="rss" href="" title="RSS"><i class="zmdi zmdi-rss"></i></a>
                                            </li>
                                        </ul>-->
                                    </div>
                                </div>
                                <div class="col-lg-3 hidden-md hidden-sm">
                                    <div class="single-footer">
                                        <!--<h4 class="footer-title border-left">Shipping</h4>
                                        <ul class="footer-menu">
                                            <li>
                                                <a href="#"><i class="zmdi zmdi-circle"></i><span>New Products</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="zmdi zmdi-circle"></i><span>Discount Products</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="zmdi zmdi-circle"></i><span>Best Sell Products</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="zmdi zmdi-circle"></i><span>Popular Products</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="zmdi zmdi-circle"></i><span>Manufactirers</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="zmdi zmdi-circle"></i><span>Suppliers</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="zmdi zmdi-circle"></i><span>Special Products</span></a>
                                            </li>
                                        </ul>-->
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4">
                                    <div class="single-footer">
                                        <!--<h4 class="footer-title border-left">my account</h4>
                                        <ul class="footer-menu">
                                            <li>
                                                <a href="my-account.html"><i class="zmdi zmdi-circle"></i><span>My Account</span></a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html"><i class="zmdi zmdi-circle"></i><span>My Wishlist</span></a>
                                            </li>
                                            <li>
                                                <a href="cart.html"><i class="zmdi zmdi-circle"></i><span>My Cart</span></a>
                                            </li>
                                            <li>
                                                <a href="login.html"><i class="zmdi zmdi-circle"></i><span>Sign In</span></a>
                                            </li>
                                            <li>
                                                <a href="login.html"><i class="zmdi zmdi-circle"></i><span>Registration</span></a>
                                            </li>
                                            <li>
                                                <a href="checkout.html"><i class="zmdi zmdi-circle"></i><span>Check out</span></a>
                                            </li>
                                            <li>
                                                <a href="order.html"><i class="zmdi zmdi-circle"></i><span>Oder Complete</span></a>
                                            </li>
                                        </ul>-->
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="single-footer">
                                        <h4 class="footer-title border-left">Get in touch</h4>
                                        <div class="footer-message">
                                            <form action="#">
                                                <input type="text" name="name" placeholder="Your name here...">
                                                <input type="text" name="email" placeholder="Your email here...">
                                                <textarea class="height-80" name="message" placeholder="Your messege here..."></textarea>
                                                <button class="submit-btn-1 mt-20 btn-hover-1" type="submit">submit message</button> 
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom black-bg">
                <div class="container-fluid">
                    <div class="plr-185">
                        <div class="copyright">
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="copyright-text">
                                        <!--<p>&copy; <a href="https://themeforest.net/user/codecarnival/portfolio" target="_blank">CodeCarnival</a> 2016. All Rights Reserved.</p>-->
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <!--<ul class="footer-payment text-right">
                                        <li>
                                            <a href="#"><img src="img/payment/1.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="img/payment/2.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="img/payment/3.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="img/payment/4.jpg" alt=""></a>
                                        </li>
                                    </ul>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END FOOTER AREA -->
    </div>
    <!-- Body main wrapper end -->


    <!-- Placed JS at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- jquery.nivo.slider js -->
    <script src="lib/js/jquery.nivo.slider.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>

</body>

</html>
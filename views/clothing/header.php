<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home || Clothing</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="/views/clothing/images/icons/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="/views/clothing/css/bootstrap.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="/views/clothing/css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="/views/clothing/css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="/views/clothing/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="/views/clothing/css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="/views/clothing/css/custom.css">  <link rel="stylesheet" href="/views/clothing/css/color/skin-default.css">


    <!-- Modernizr JS -->
    <script src="/views/clothing/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Body main wrapper start -->
    <div class="wrapper home-one">

        <!-- Start of header area -->
        <header class="header-area header-wrapper">
            <div class="header-top-bar black-bg clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="login-register-area">
                                <ul>
                                    <?php if(UserModel::isGuest()): ?>
                                        <li><a href="/my-account">My account</a></li>
                                        <li><a href="/logout">Logout</a></li>
                                    <?php else: ?>
                                        <li><a href="/login">Login</a></li>
                                        <li><a href="/register">Register</a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 hidden-xs">
                            <div class="social-search-area text-center">
                                <div class="social-icon socile-icon-style-2">
                                    <ul>
                                        <li><a href="/" title="facebook"><i class="fa fa-facebook"></i></a> </li>
                                        <li><a href="/" title="twitter"><i class="fa fa-twitter"></i></a> </li>
                                        <li> <a href="/" title="dribble"><i class="fa fa-dribbble"></i></a></li>
                                        <li> <a href="/" title="behance"><i class="fa fa-behance"></i></a> </li>
                                        <li> <a href="/" title="rss"><i class="fa fa-rss"></i></a> </li>
                                    </ul>
                                 </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="cart-currency-area login-register-area text-right">
                                <ul>
                                    <li>
                                        <div class="header-currency">
                                            <select>
                                                <option value="1">USD</option>
                                                <option value="2">Pound</option>
                                                <option value="3">Euro</option>
                                                <option value="4">Dinar</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="header-cart">
                                            <div class="cart-icon"> <a href="/">Cart<i class="zmdi zmdi-shopping-cart"></i></a> <span id="cart-count"><?= CartModel::countItems();?></span> </div>
                                            <div class="cart-content-wraper">
                                                <div class="cart-single-wraper">
                                                    <div class="cart-img">
                                                        <a href="/"><img src="/views/clothing/images/product/01.jpg" alt=""></a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <div class="cart-name"> <a href="/">Aenean Eu Tristique</a> </div>
                                                        <div class="cart-price"> $70.00 </div>
                                                        <div class="cart-qty"> Qty: <span>1</span> </div>
                                                    </div>
                                                    <div class="remove"> <a href="/"><i class="zmdi zmdi-close"></i></a> </div>
                                                </div>
                                                <div class="cart-single-wraper">
                                                    <div class="cart-img">
                                                        <a href="/"><img src="/views/clothing/images/product/02.jpg" alt=""></a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <div class="cart-name"> <a href="/">Aenean Eu Tristique</a> </div>
                                                        <div class="cart-price"> $70.00 </div>
                                                        <div class="cart-qty"> Qty: <span>1</span> </div>
                                                    </div>
                                                    <div class="remove"> <a href="/"><i class="zmdi zmdi-close"></i></a> </div>
                                                </div>
                                                <div class="cart-subtotal"> Subtotal: <span>$200.00</span> </div>
                                                <div class="cart-check-btn">
                                                    <div class="view-cart"> <a class="btn-def" href="/cart">View Cart</a> </div>
                                                    <div class="check-btn"> <a class="btn-def" href="/checkout">Checkout</a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header"  class="header-middle-area">
                <div class="container">
                    <div class="full-width-mega-dropdown">
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <div class="logo ptb-20"><a href="/">
									<img src="/views/clothing/images/logo/logo.png" alt="main logo"></a>
								</div>
                            </div>
                            <div class="col-md-7 col-sm-10 hidden-xs">
                                <nav id="primary-menu">
                                    <ul class="main-menu">
                                        <li class="current"><a class="active" href="/">Home</a>
                                            <ul class="dropdown">
                                                <li><a class="active" href="/">Home One</a></li>
                                                <li><a href="/Spare_files/index-2">Home Two</a></li>
                                                <li><a href="/Spare_files/index-boxed-01">Home Three (Boxed)</a></li>
                                                <li><a href="/Spare_files/index-boxed-02">Home Four (Boxed)</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-parent pos-rltv"><a href="/shop">Man</a>
                                            <div class="mega-menu-area mma-800">
                                                <ul class="single-mega-item">
                                                   <li class="menu-title uppercase">Shirts</li>
                                                    <li><a href="/shop">Shirt 01</a></li>
                                                    <li><a href="/shop">Shirt 02</a></li>
                                                    <li><a href="/shop">Shirt 03</a></li>
                                                    <li><a href="/shop">Shirt 04</a></li>
                                                </ul>
                                                <ul class="single-mega-item">
                                                   <li class="menu-title uppercase">Pants</li>
                                                    <li><a href="/shop">Pant 01</a></li>
                                                    <li><a href="/shop">Pant 02</a></li>
                                                    <li><a href="/shop">Pant 03</a></li>
                                                    <li><a href="/shop">Pant 04</a></li>
                                                </ul>
                                                <ul class="single-mega-item">
                                                   <li class="menu-title uppercase">T-Shirts</li>
                                                    <li><a href="/shop">T-Shirt 01</a></li>
                                                    <li><a href="/shop">T-Shirt 02</a></li>
                                                    <li><a href="/shop">T-Shirt 03</a></li>
                                                    <li><a href="/shop">T-Shirt 04</a></li>
                                                </ul>
                                                <div class="mega-banner-img">
                                                    <a href="/single-product"><img src="/views/clothing/images/banner/banner-fashion-02.jpg" alt=""></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mega-parent pos-rltv"><a href="/shop">Women</a>
                                            <div class="mega-menu-area mma-700">
                                                <ul class="single-mega-item">
                                                   <li class="menu-title uppercase">Sharees</li>
                                                    <li><a href="/shop">Sharee 01</a></li>
                                                    <li><a href="/shop">Sharee 02</a></li>
                                                    <li><a href="/shop">Sharee 03</a></li>
                                                    <li><a href="/shop">Sharee 04</a></li>
                                                    <li><a href="/shop">Sharee 05</a></li>
                                                </ul>
                                                <ul class="single-mega-item">
                                                   <li class="menu-title uppercase">Lahenga</li>
                                                    <li><a href="/shop">Lahenga 01</a></li>
                                                    <li><a href="/shop">Lahenga 02</a></li>
                                                    <li><a href="/shop">Lahenga 03</a></li>
                                                    <li><a href="/shop">Lahenga 04</a></li>
                                                    <li><a href="/shop">Lahenga 05</a></li>
                                                </ul>
                                                <ul class="single-mega-item">
                                                   <li class="menu-title uppercase">Sandels</li>
                                                    <li><a href="/shop">Sandel 01</a></li>
                                                    <li><a href="/shop">Sandel 02</a></li>
                                                    <li><a href="/shop">Sandel 03</a></li>
                                                    <li><a href="/shop">Sandel 04</a></li>
                                                    <li><a href="/shop">Sandel 05</a></li>
                                                </ul>
                                                <div class="mega-banner-img">
                                                    <a href="/single-product"><img src="/views/clothing/images/banner/banner-fashion.jpg" alt=""></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mega-parent"><a href="/shop">Shortcut</a>
                                            <div class="mega-menu-area mma-970">
                                                <ul class="single-mega-item">
                                                   <li class="menu-title uppercase">Shortcode-01</li>
                                                    <li><a href="/shortcode-banner" target="_blank">shortcode-banner</a></li>
                                                    <li><a href="/shortcode-best-top-on-sale-slider" target="_blank">too-on-sale</a></li>
                                                    <li><a href="/shortcode-blog-item" target="_blank">Short Blog Item</a></li>
                                                    <li><a href="/shortcode-brand-prodcut" target="_blank">Brand Product</a></li>
                                                    <li><a href="/shortcode-brand-slider" target="_blank">Brand Slider</a></li>
                                                </ul>
                                                <ul class="single-mega-item">
                                                   <li class="menu-title uppercase">Shortcode-02</li>
                                                    <li><a href="/shortcode-breadcrumb" target="_blank">Breadcrumb</a></li>
                                                    <li><a href="/shortcode-related-product" target="_blank">Related Product</a></li>
                                                    <li><a href="/shortcode-service" target="_blank">Service</a></li>
                                                    <li><a href="/shortcode-skill" target="_blank">Skill</a></li>
                                                    <li><a href="/shortcode-slider" target="_blank">Slider</a></li>
                                                </ul>
                                                <ul class="single-mega-item">
                                                    <li class="menu-title uppercase">Shortcode-03</li>
                                                    <li><a href="/shortcode-team" target="_blank">Team</a></li>
                                                    <li><a href="/shortcode-testimonial" target="_blank">Testimonial</a></li>
                                                    <li><a href="/shortcode-why-choose-us" target="_blank">Why Choose Us</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="mega-parent"><a href="/">Pages</a>
                                            <div class="mega-menu-area mma-970">
                                                <ul class="single-mega-item coloum-4">
                                                   <li class="menu-title uppercase">Pages-01</li>
                                                    <li><a href="/about-us" target="_blank">About-us</a></li>
                                                    <li><a href="/blog" target="_blank">Blog</a></li>
                                                    <li><a href="/blog-right" target="_blank">Blog-Right</a></li>
                                                    <li><a href="/single-blog" target="_blank">Single Blog</a></li>
                                                    <li><a href="/single-blog-right" target="_blank">Single Blog Right</a></li>
                                                    <li><a href="/blog-full" target="_blank">Blog-Fullwidth</a></li>
                                                </ul>
                                                <ul class="single-mega-item coloum-4">
                                                   <li class="menu-title uppercase">pages-02</li>
                                                    <li><a href="/blog-full-right" target="_blank">Blog Ful Rightl</a></li>
                                                    <li><a href="/cart" target="_blank">Cart</a></li>
                                                    <li><a href="/checkout" target="_blank">Checkout</a></li>
                                                    <li><a href="/compare" target="_blank">Compare</a></li>
                                                    <li><a href="/complete-order" target="_blank">Complete Order</a></li>
                                                    <li><a href="/contact-us" target="_blank">Contact US</a></li>
                                                </ul>
                                                <ul class="single-mega-item coloum-4">
                                                   <li class="menu-title uppercase">pages-03</li>
                                                    <li><a href="/login" target="_blank">Login</a></li>
                                                    <li><a href="/my-account" target="_blank">My Account</a></li>
                                                    <li><a href="/shop-full-grid" target="_blank">Shop Full Grid</a></li>
                                                    <li><a href="/shop-full-list" target="_blank">Shop Full List</a></li>
                                                    <li><a href="/shop-list-right-sidebar" target="_blank">Shop List Right</a></li>
                                                    <li><a href="/shop-list" target="_blank">Shop List</a></li>
                                                </ul>
                                                <ul class="single-mega-item coloum-4">
                                                   <li class="menu-title uppercase">pages-03</li>
                                                    <li><a href="/shop-right-sidebar" target="_blank">Shop Right</a></li>
                                                    <li><a href="/shop" target="_blank">Shop</a></li>
                                                    <li><a href="/single-product" target="_blank">Single Prodcut</a></li>
                                                    <li><a href="/wishlist" target="_blank">Wishlist</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="/blog">BLOG</a></li>
                                        <li><a href="/about-us">ABOUT</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-md-3 hidden-sm hidden-xs">
                                <div class="search-box global-table">
                                    <div class="global-row">
                                        <div class="global-cell">
                                            <form action="#">
                                                <div class="input-box">
                                                    <input class="single-input" placeholder="Search anything" type="text">
                                                    <button class="src-btn"><i class="fa fa-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- mobile-menu-area start -->
                            <div class="mobile-menu-area">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <nav id="dropdown">
                                                <ul>
                                                    <li><a href="/">Home</a>
                                                        <ul>
                                                            <li><a class="active" href="/">Home One</a></li>
                                                            <li><a href="/Spare_files/index-2">Home Two</a></li>
                                                            <li><a href="/Spare_files/index-boxed-01">Home Three (Boxed)</a></li>
                                                            <li><a href="/Spare_files/index-boxed-02">Home Four (Boxed)</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="/shop">Man</a>
                                                        <ul class="single-mega-item">
                                                            <li><a href="/shop">Shirt 01</a></li>
                                                            <li><a href="/shop">Shirt 02</a></li>
                                                            <li><a href="/shop">Shirt 03</a></li>
                                                            <li><a href="/shop">Shirt 04</a></li>
                                                            <li><a href="/shop">Pant 01</a></li>
                                                            <li><a href="/shop">Pant 02</a></li>
                                                            <li><a href="/shop">Pant 03</a></li>
                                                            <li><a href="/shop">Pant 04</a></li>
                                                            <li><a href="/shop">T-Shirt 01</a></li>
                                                            <li><a href="/shop">T-Shirt 02</a></li>
                                                            <li><a href="/shop">T-Shirt 03</a></li>
                                                            <li><a href="/shop">T-Shirt 04</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="/shop">Shop</a>
                                                        <ul class="single-mega-item">
                                                            <li><a href="/shop">Sharee 01</a></li>
                                                            <li><a href="/shop">Sharee 02</a></li>
                                                            <li><a href="/shop">Sharee 03</a></li>
                                                            <li><a href="/shop">Sharee 04</a></li>
                                                            <li><a href="/shop">Sharee 05</a></li>
                                                            <li><a href="/shop">Lahenga 01</a></li>
                                                            <li><a href="/shop">Lahenga 02</a></li>
                                                            <li><a href="/shop">Lahenga 03</a></li>
                                                            <li><a href="/shop">Lahenga 04</a></li>
                                                            <li><a href="/shop">Lahenga 05</a></li>
                                                            <li><a href="/shop">Sandel 01</a></li>
                                                            <li><a href="/shop">Sandel 02</a></li>
                                                            <li><a href="/shop">Sandel 03</a></li>
                                                            <li><a href="/shop">Sandel 04</a></li>
                                                            <li><a href="/shop">Sandel 05</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="/">Shortcode</a>
                                                        <ul class="single-mega-item">
                                                            <li><a href="/shortcode-banner" target="_blank">shortcode-banner</a></li>
                                                            <li><a href="/shortcode-best-top-on-sale-slider" target="_blank">too-on-sale</a></li>
                                                            <li><a href="/shortcode-blog-item" target="_blank">Short Blog Item</a></li>
                                                            <li><a href="/shortcode-brand-prodcut" target="_blank">Brand Product</a></li>
                                                            <li><a href="/shortcode-brand-slider" target="_blank">Brand Slider</a></li>

                                                            <li><a href="/shortcode-breadcrumb" target="_blank">Breadcrumb</a></li>
                                                            <li><a href="/shortcode-related-product" target="_blank">Related Product</a></li>
                                                            <li><a href="/shortcode-service" target="_blank">Service</a></li>
                                                            <li><a href="/shortcode-skill" target="_blank">Skill</a></li>
                                                            <li><a href="/shortcode-slider" target="_blank">Slider</a></li>

                                                            <li><a href="/shortcode-team" target="_blank">Team</a></li>
                                                            <li><a href="/shortcode-testimonial" target="_blank">Testimonial</a></li>
                                                            <li><a href="/shortcode-why-choose-us" target="_blank">Why Choose Us</a></li>
                                                        </ul>
                                                    </li>
                                                    <li> <a href="/">Pages</a>
                                                        <ul class="single-mega-item coloum-4">
                                                            <li><a href="/about-us" target="_blank">About-us</a></li>
                                                            <li><a href="/blog" target="_blank">Blog</a></li>
                                                            <li><a href="/blog-right" target="_blank">Blog-Right</a></li>
                                                            <li><a href="/single-blog" target="_blank">Single Blog</a></li>
                                                            <li><a href="/single-blog-right" target="_blank">Single Blog Right</a></li>
                                                            <li><a href="/blog-full" target="_blank">Blog-Fullwidth</a></li>
                                                           <li class="menu-title uppercase">pages-02</li>
                                                            <li><a href="/blog-full-right" target="_blank">Blog Ful Rightl</a></li>
                                                            <li><a href="/cart" target="_blank">Cart</a></li>
                                                            <li><a href="/checkout" target="_blank">Checkout</a></li>
                                                            <li><a href="/compare" target="_blank">Compare</a></li>
                                                            <li><a href="/complete-order" target="_blank">Complete Order</a></li>
                                                            <li><a href="/contact-us" target="_blank">Contact US</a></li>
                                                           <li class="menu-title uppercase">pages-03</li>
                                                            <li><a href="/login" target="_blank">Login</a></li>
                                                            <li><a href="/my-account" target="_blank">My Account</a></li>
                                                            <li><a href="/shop-full-grid" target="_blank">Shop Full Grid</a></li>
                                                            <li><a href="/shop-full-list" target="_blank">Shop Full List</a></li>
                                                            <li><a href="/shop-list-right-sidebar" target="_blank">Shop List Right</a></li>
                                                            <li><a href="/shop-list" target="_blank">Shop List</a></li>
                                                           <li class="menu-title uppercase">pages-03</li>
                                                            <li><a href="/shop-right-sidebar" target="_blank">Shop Right</a></li>
                                                            <li><a href="/shop" target="_blank">Shop</a></li>
                                                            <li><a href="/single-product" target="_blank">Single Prodcut</a></li>
                                                            <li><a href="/wishlist" target="_blank">Wishlist</a></li>
                                                        </ul>
                                                   </li>
                                                    <li><a href="/about-us">about</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--mobile menu area end-->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End of header area -->
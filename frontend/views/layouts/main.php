<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\helpers\Url;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
        <html class="wide wow-animation" lang="en">
            <head>
                <title>Unmanned Marine Equipments</title>
                <meta charset="utf-8">
                <meta name="author" content="Ahmed Soliman">
                <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <link rel="icon" href="<?= Url::to(['../frontend/web/images/favicon.ico'])?>" type="image/x-icon">
                <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CLato%7CKalam:300,400,700">
                <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
                <?php $this->registerCsrfMetaTags() ?>

                <?php $this->head() ?>
            </head>
            <?php $this->beginBody() ?>
            <body>
                <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="<?= Url::to(['../frontend/web/images/ie8-panel/warning_bar_0000_us.jpg'])?>" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
                <div class="preloader">
                    <div class="preloader-body">
                        <div class="cssload-bell">
                            <div class="cssload-circle">
                                <div class="cssload-inner0"></div>
                            </div>
                            <div class="cssload-circle">
                                <div class="cssload-inner0"></div>
                            </div>
                            <div class="cssload-circle">
                                <div class="cssload-inner0"></div>
                            </div>
                            <div class="cssload-circle">
                                <div class="cssload-inner0"></div>
                            </div>
                            <div class="cssload-circle">
                                <div class="cssload-inner0"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page">
                    <!-- Page Header-->
                    <header class="section page-header page-header-corporate">
                        <!-- RD Navbar-->
                        <div class="rd-navbar-wrap">
                            <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="154px" data-xl-stick-up-offset="182px" data-xxl-stick-up-offset="214px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                                <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div><a class="rd-navbar-basket rd-navbar-basket-mobile fl-bigmug-line-shopping202 rd-navbar-fixed-element-2" href="cart-page.html"><span>2</span></a>
                                <div class="rd-navbar-aside-outer">
                                    <div class="rd-navbar-aside">
                                        <p>Opening hours: Monday - Friday: 08AM-06PM</p>
                                        <div>
                                            <div class="group-xs group-middle">
                                                <!--p.rd-navbar-basket-text Your Cart is Empty-->
                                                <!-- RD Navbar Basket-->
                                                <div class="rd-navbar-basket-wrap">
                                                    <button class="rd-navbar-basket fl-bigmug-line-shopping202" data-rd-navbar-toggle=".cart-inline"><span>2</span></button>
                                                    <div class="cart-inline">
                                                        <div class="cart-inline-header">
                                                            <h5 class="cart-inline-title">In cart:<span> 2</span> Products</h5>
                                                            <h6 class="cart-inline-title">Total price:<span> $43</span></h6>
                                                        </div>
                                                        <div class="cart-inline-body">
                                                            <div class="cart-inline-item">
                                                                <div class="unit unit-spacing-sm align-items-center">
                                                                    <div class="unit-left"><a class="cart-inline-figure" href="single-product.html"><img src="<?= Url::to(['../frontend/web/images/product-mini-6-100x90.png'])?>" alt="" width="100" height="90"/></a></div>
                                                                    <div class="unit-body">
                                                                        <h6 class="cart-inline-name"><a href="single-product.html">CrispSound Headphones</a></h6>
                                                                        <div>
                                                                            <div class="group-xs group-middle">
                                                                                <div class="table-cart-stepper">
                                                                                    <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="1000"/>
                                                                                </div>
                                                                                <h6 class="cart-inline-title">$20.00</h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="cart-inline-item">
                                                                <div class="unit unit-spacing-sm align-items-center">
                                                                    <div class="unit-left"><a class="cart-inline-figure" href="single-product.html"><img src="<?= Url::to(['../frontend/web/images/product-mini-7-100x90.png'])?>" alt="" width="100" height="90"/></a></div>
                                                                    <div class="unit-body">
                                                                        <h6 class="cart-inline-name"><a href="single-product.html">SmartPlusSound Headphones</a></h6>
                                                                        <div>
                                                                            <div class="group-xs group-middle">
                                                                                <div class="table-cart-stepper">
                                                                                    <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="1000"/>
                                                                                </div>
                                                                                <h6 class="cart-inline-title">$23.00</h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cart-inline-footer">
                                                            <div class="group-sm"><a class="button button-default-outline-2 button-zakaria" href="cart-page.html">Go to cart</a><a class="button button-primary button-zakaria" href="checkout.html">Checkout</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rd-navbar-main-outer">
                                    <div class="rd-navbar-main">
                                        <div class="rd-navbar-main-element">
                                            <!-- RD Navbar Panel-->
                                            <div class="rd-navbar-panel">
                                                <!-- RD Navbar Toggle-->
                                                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                                <!-- RD Navbar Brand-->
                                                <div class="rd-navbar-brand">
                                                    <!--Brand--><a class="brand" href="index.html"><img class="brand-logo-dark" src="<?= Url::to(['../frontend/web/images/logo-default-1-242x53.png'])?>" alt="" width="242" height="53"/><img class="brand-logo-light" src="<?= Url::to(['../frontend/web/images/logo-inverse-1-242x53.png'])?>" alt="" width="242" height="53"/></a>
                                                </div>
                                            </div>
                                            <div class="rd-navbar-collapse">
                                                <ul class="contacts-amber">
                                                    <li><a href="#">523 Sylvan Ave, 5th Floor<br/>Mountain View, CA 94041 USA</a></li>
                                                    <li><a href="tel:#">+1 (844) 123 456 78</a><br/><a href="mailto:#">info@demolink.org</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rd-navbar-nav-outer">
                                    <div class="rd-navbar-nav-wrap">
                                        <!-- RD Navbar Search-->
                                        <div class="rd-navbar-search">
                                            <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                                            <form class="rd-search" action="search-results.html" data-search-live="rd-search-results-live" method="GET">
                                                <div class="form-wrap">
                                                    <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off"/>
                                                    <label class="form-label" for="rd-navbar-search-form-input">Search...</label>
                                                    <div class="rd-search-results-live" id="rd-search-results-live"></div>
                                                    <button class="rd-search-form-submit fl-bigmug-line-search74" type="submit"></button>
                                                </div>
                                            </form>
                                        </div>
                                        <ul class="rd-navbar-nav">
                                            <li class="rd-nav-item active"><a class="rd-nav-link" href="index.html">Home</a>
                                            </li>
                                            <li class="rd-nav-item"><a class="rd-nav-link" href="#">About Us</a>
                                                <ul class="rd-menu rd-navbar-dropdown">
                                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="about-us.html">Vision</a>
                                                    </li>
                                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="our-team.html">Mission</a>
                                                    </li>
                                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="testimonials.html">Business Values</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="rd-nav-item"><a class="rd-nav-link" href="#">Our Focus</a>
                                                <ul class="rd-menu rd-navbar-dropdown">
                                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="about-us.html">Safety & Surveillance</a>
                                                    </li>
                                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="our-team.html">Coastal Surveys</a>
                                                    </li>
                                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="testimonials.html">Offshore Construction</a>
                                                    </li>
                                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="testimonials.html">Environmental Applications</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="rd-nav-item"><a class="rd-nav-link" href="#">Products</a>
                                                <ul class="rd-menu rd-navbar-megamenu">
                                                    <li class="rd-megamenu-item rd-megamenu-item-2">
                                                        <h6 class="rd-megamenu-title"><span class="rd-megamenu-icon mdi mdi-apps"></span><span class="rd-megamenu-text">Security & Surveillance</span></h6>
                                                        <ul class="rd-megamenu-list">
                                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="typography.html">Prodcut1</a></li>
                                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="icon-lists.html">Product2</a></li>
                                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="progress-bars.html">Product3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="rd-megamenu-item rd-megamenu-item-2">
                                                        <h6 class="rd-megamenu-title"><span class="rd-megamenu-icon mdi mdi-apps"></span><span class="rd-megamenu-text">Inland & Coastal Surveys</span></h6>
                                                        <ul class="rd-megamenu-list">
                                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="typography.html">Prodcut1</a></li>
                                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="icon-lists.html">Product2</a></li>
                                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="progress-bars.html">Product3</a></li>
                                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="typography.html">Prodcut4</a></li>
                                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="icon-lists.html">Product5</a></li>
                                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="progress-bars.html">Product6</a></li>
                                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="typography.html">Prodcut7</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="rd-megamenu-item rd-megamenu-item-2">
                                                        <h6 class="rd-megamenu-title"><span class="rd-megamenu-icon mdi mdi-apps"></span><span class="rd-megamenu-text">Offshore Construction</span></h6>
                                                        <ul class="rd-megamenu-list">
                                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="typography.html">Prodcut1</a></li>
                                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="icon-lists.html">Product2</a></li>
                                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="progress-bars.html">Product3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="rd-megamenu-item rd-megamenu-item-2">
                                                        <h6 class="rd-megamenu-title"><span class="rd-megamenu-icon mdi mdi-apps"></span><span class="rd-megamenu-text">Environmental Applications</span></h6>
                                                        <ul class="rd-megamenu-list">
                                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="typography.html">Prodcut1</a></li>
                                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="icon-lists.html">Product2</a></li>
                                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="progress-bars.html">Product3</a></li>
                                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="typography.html">Prodcut4</a></li>
                                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="icon-lists.html">Product5</a></li>
                                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="progress-bars.html">Product6</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="rd-megamenu-item rd-megamenu-item-2">
                                                        <h6 class="rd-megamenu-title"><span class="rd-megamenu-icon mdi mdi-apps"></span><span class="rd-megamenu-text">Advertisement</span></h6>
                                                        <ul class="rd-megamenu-list">
                                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="typography.html">Prodcut1</a></li>
                                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="icon-lists.html">Product2</a></li>
                                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="progress-bars.html">Product3</a></li>
                                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="typography.html">Prodcut4</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="rd-nav-item"><a class="rd-nav-link" href="index.html">Careers</a>
                                            </li>
                                            <li class="rd-nav-item"><a class="rd-nav-link" href="index.html">News/Posts</a>
                                            </li>
                                            <li class="rd-nav-item"><a class="rd-nav-link" href="contact-us.html">Contacts</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </header>
                    <!-- Swiper-->
                    <?= $content ?>

                <?php $this->endBody() ?>
                </body>


                <!-- Page Footer-->
                <footer class="section footer-corporate footer-corporate-2">
                    <div class="footer-corporate-body section-xxl">
                        <div class="container">
                            <div class="row row-40 row-md-50 justify-content-xl-between">
                                <div class="col-sm-6 col-lg-4 wow fadeInRight">
                                    <h5 class="footer-corporate-title">Visit our store</h5>
                                    <div class="footer-corporate-decor"></div>
                                    <ul class="footer-corporate-info">
                                        <li>
                                            <div class="unit flex-column flex-sm-row align-items-center">
                                                <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                                                <div class="unit-body"><a href="#">523 Sylvan Ave, 5th Floor<br/>Mountain View, CA 94041 USA</a></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="unit flex-column flex-sm-row align-items-center">
                                                <div class="unit-left"><span class="icon mdi mdi-clock"></span></div>
                                                <div class="unit-body">
                                                    <ul class="list-schedule">
                                                        <li><span>Weekdays:</span><span>08:00am - 08:00pm</span></li>
                                                        <li><span>Weekends:</span><span>10:00am - 06:00pm</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay=".1s">
                                    <h5 class="footer-corporate-title">Quick links</h5>
                                    <div class="footer-corporate-decor"></div>
                                    <ul class="footer-corporate-list d-sm-inline-block d-md-block">
                                        <li><a href="#">Smart Watches</a></li>
                                        <li><a href="#">Smartphones</a></li>
                                        <li><a href="#">Laptops</a></li>
                                        <li><a href="#">Smart Toys</a></li>
                                        <li><a href="#">Smart Home</a></li>
                                        <li><a href="#">Accessories</a></li>
                                        <li><a href="#">Portable Speakers</a></li>
                                        <li><a href="#">Headphones</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 wow fadeInRight" data-wow-delay=".2s">
                                    <h5 class="footer-corporate-title">Get in touch</h5>
                                    <div class="footer-corporate-decor"></div>
                                    <p class="footer-corporate-text">We are always ready to answer any questions you may have about any of our products.</p>
                                    <div class="group-sm group-middle"><a class="button button-white button-shadow-2 button-zakaria" href="tel:#">Call us</a><a class="button button-primary-2 button-zakaria" href="contact-us.html">Contact us</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-corporate-panel context-dark">
                        <div class="container">
                            <div class="row row-10 row-sm-30 align-items-center justify-content-sm-between">
                                <div class="col-sm-auto col-xl-4 text-lg-left">
                                    <div class="group-xs group-middle"><img src="<?= Url::to(['../frontend/web/images/payment-1-45x15.png'])?>" alt="" width="45" height="15"/><img src="<?= Url::to(['../frontend/web/images/payment-2-46x28.png'])?>" alt="" width="46" height="28"/><img src="<?= Url::to(['../frontend/web/images/payment-3-62x17.png'])?>" alt="" width="62" height="17"/>
                                    </div>
                                </div>
                                <div class="col-sm-auto col-xl-3">
                                    <ul class="list-inline list-social-4 list-inline-xs">
                                        <li><a class="icon mdi mdi-facebook icon-xxs" href="#"></a></li>
                                        <li><a class="icon mdi mdi-twitter icon-xxs" href="#"></a></li>
                                        <li><a class="icon mdi mdi-instagram icon-xxs" href="#"></a></li>
                                        <li><a class="icon mdi mdi-google-plus icon-xxs" href="#"></a></li>
                                        <li><a class="icon mdi mdi-skype icon-xxs" href="#"></a></li>
                                    </ul>
                                </div>
                                <div class="col-xl-5 text-xl-right">
                                    <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>Techzoid</span><span>.&nbsp; All rights reserved.</span><span>&nbsp;</span><a href="terms-of-use.html">Privacy Policy</a><span>.</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                </div>
                <div class="snackbars" id="form-output-global"></div>
            <?php $this->endBody() ?>
            </body>
        </html>
<?php $this->endPage();

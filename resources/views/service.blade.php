@extends('master')
@section('title', "Diyor's Portfolio")
@section('content')
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="vertical-centered-box">
                <div class="content">
                    <div class="loader-circle"></div>
                    <div class="loader-line-mask">
                        <div class="loader-line"></div>
                    </div>
                    <img src="assets/images/preloader.png" alt="">
                </div>
            </div>
        </div>
        <!-- end preloader -->
        <!-- Start header -->
        <header id="header" class="wpo-header-style-2">
            <div class="wpo-site-header">
                <nav class="navigation navbar navbar-expand-lg navbar-light">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-3 col-3 d-lg-none dl-block">
                                <div class="mobail-menu">
                                    <button type="button" class="navbar-toggler open-btn">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar first-angle"></span>
                                        <span class="icon-bar middle-angle"></span>
                                        <span class="icon-bar last-angle"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-6">
                                <div class="navbar-header">
                                    <a class="navbar-brand site-logo" href="index.html"><img
                                            src="assets/images/logo.png" alt="">Elito.</a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-1 col-1">
                                <div id="navbar" class="collapse navbar-collapse navigation-holder">
                                    <button class="menu-close"><i class="ti-close"></i></button>
                                    <ul class="nav navbar-nav mb-2 mb-lg-0">
                                        <li class="menu-item-has-children">
                                            <a href="#">Home</a>
                                            <ul class="sub-menu">
                                                <li><a href="index.html">Main Home</a></li>
                                                <li><a href="index-2.html">Home Style 2</a></li>
                                                <li><a href="index-3.html">Home Style 3</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="about.html">About</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a class="active" href="#">Service</a>
                                            <ul class="sub-menu">
                                                <li><a class="active" href="service.html">Service</a></li>
                                                <li><a href="service-single.html">Service Single</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Portfolio</a>
                                            <ul class="sub-menu">
                                                <li><a href="portfolio-grid.html">Portfolio Grid</a></li>
                                                <li><a href="portfolio-masonary.html">Portfolio Masonary</a></li>
                                                <li><a href="portfolio.html">Portfolio Slide</a></li>
                                                <li><a href="portfolio-single.html">Portfolio Single</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.html">Blog right sidebar</a></li>
                                                <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                                <li><a href="blog-fullwidth.html">Blog fullwidth</a></li>
                                                <li class="menu-item-has-children">
                                                    <a href="#">Blog details</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="blog-single.html">Blog details right
                                                                sidebar</a>
                                                        </li>
                                                        <li><a href="blog-single-left-sidebar.html">Blog details
                                                                left
                                                                sidebar</a></li>
                                                        <li><a href="blog-single-fullwidth.html">Blog details
                                                                fullwidth</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact</a>
                                        </li>
                                    </ul>

                                </div><!-- end of nav-collapse -->
                            </div>
                            <div class="col-lg-2 col-md-2 col-2">
                                <div class="header-right">
                                    <div class="header-btn">
                                        <a class="theme-btn" download="My Cv" href="assets/images/cv.jpg"
                                           title="ImageName">
                                            <img class="hide-img" alt="ImageName" src="assets/images/cv.jpg">
                                            Resume
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end of container -->
                </nav>
            </div>
        </header>
        <!-- end of header -->
        <!-- start wpo-page-title -->
        <section class="wpo-page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2>Service</h2>
                            <ol class="wpo-breadcumb-wrap">
                                <li><a href="index.html">Home</a></li>
                                <li>Service</li>
                            </ol>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->
        <!-- start of wpo-service-area -->
        <div class="wpo-service-area section-padding">
            <div class="container">
                <div class="wpo-service-wrap">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="Development-tab" data-bs-toggle="tab" href="#Development" role="tab"
                               aria-controls="Development" aria-selected="true">Development</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="Design-tab" data-bs-toggle="tab" href="#Design" role="tab"
                               aria-controls="Design" aria-selected="false">Design</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="Marketing-tab" data-bs-toggle="tab" href="#Marketing" role="tab"
                               aria-controls="Marketing" aria-selected="false">Marketing</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane" id="Development">
                            <div class="row align-items-center">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="wpo-service-item">
                                        <div class="icon">
                                            <i class="fi flaticon-coding"></i>
                                        </div>
                                        <h2>Web Development</h2>
                                        <p>Explain to you how all this mistaken idea of denouncing pleasure born and
                                            give you complete account the system.</p>
                                        <a href="service-single.html">Learn More</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="wpo-service-item">
                                        <div class="icon">
                                            <i class="fi flaticon-app-development"></i>
                                        </div>
                                        <h2>App Development</h2>
                                        <p>Explain to you how all this mistaken idea of denouncing pleasure born and
                                            give you complete account the system.</p>
                                        <a href="service-single.html">Learn More</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="wpo-service-item">
                                        <div class="icon">
                                            <i class="fi flaticon-smartphone"></i>
                                        </div>
                                        <h2>Softwere Development</h2>
                                        <p>Explain to you how all this mistaken idea of denouncing pleasure born and
                                            give you complete account the system.</p>
                                        <a href="service-single.html">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane active" id="Design">
                            <div class="row align-items-center">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="wpo-service-item">
                                        <div class="icon">
                                            <i class="fi flaticon-vector"></i>
                                        </div>
                                        <h2>Graphic Design</h2>
                                        <p>Explain to you how all this mistaken idea of denouncing pleasure born and
                                            give you complete account the system.</p>
                                        <a href="service-single.html">Learn More</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="wpo-service-item">
                                        <div class="icon">
                                            <i class="fi flaticon-palette"></i>
                                        </div>
                                        <h2>Brand Identity</h2>
                                        <p>Explain to you how all this mistaken idea of denouncing pleasure born and
                                            give you complete account the system.</p>
                                        <a href="service-single.html">Learn More</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="wpo-service-item">
                                        <div class="icon">
                                            <i class="fi flaticon-add"></i>
                                        </div>
                                        <h2>UI/UX Design</h2>
                                        <p>Explain to you how all this mistaken idea of denouncing pleasure born and
                                            give you complete account the system.</p>
                                        <a href="service-single.html">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="Marketing">
                            <div class="row align-items-center">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="wpo-service-item">
                                        <div class="icon">
                                            <i class="fi flaticon-social-media"></i>
                                        </div>
                                        <h2>Social Media Marketing</h2>
                                        <p>Explain to you how all this mistaken idea of denouncing pleasure born and
                                            give you complete account the system.</p>
                                        <a href="service-single.html">Learn More</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="wpo-service-item">
                                        <div class="icon">
                                            <i class="fi flaticon-promotion"></i>
                                        </div>
                                        <h2>Digital Marketing</h2>
                                        <p>Explain to you how all this mistaken idea of denouncing pleasure born and
                                            give you complete account the system.</p>
                                        <a href="service-single.html">Learn More</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="wpo-service-item">
                                        <div class="icon">
                                            <i class="fi flaticon-email-marketing"></i>
                                        </div>
                                        <h2>Email Marketing</h2>
                                        <p>Explain to you how all this mistaken idea of denouncing pleasure born and
                                            give you complete account the system.</p>
                                        <a href="service-single.html">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ab-shape">
                <svg width="995" height="1495" viewBox="0 0 995 1495" fill="none">
                    <g opacity="0.3" filter="url(#filter0_f_39_4267)">
                        <circle cx="247.5" cy="747.5" r="247.5" fill="#FFE500" />
                    </g>
                    <defs>
                        <filter id="filter0_f_39_4267" x="-500" y="0" width="1495" height="1495"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                            <feGaussianBlur stdDeviation="250" result="effect1_foregroundBlur_39_4267" />
                        </filter>
                    </defs>
                </svg>
            </div>
        </div>
        <!-- end of wpo-service-area -->
        <!-- wpo-partners-area-start -->
        <section class="partners-section">
            <h2 class="hidden">partner</h2>
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="partner-grids partners-slider owl-carousel clearfix">
                            <div class="grid">
                                <img src="assets/images/partners/1.png" alt="">
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/2.png" alt="">
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/3.png" alt="">
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/4.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end contianer -->
        </section>
        <!-- partners-area-end -->
        <!-- start wpo-site-footer -->
        <footer class="wpo-site-footer-s2">
            <div class="upper-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="widget about-widget">
                                <div class="logo widget-title">
                                    <a class="site-logo" href="index.html"><img src="assets/images/logo.png"
                                                                                alt="">Elito.</a>
                                </div>
                                <p>Welcome and open yourself to your truest love this year with us! With the Release
                                    Process</p>
                                <div class="social-icons">
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                        <li><a href="#"><i class="ti-vimeo-alt"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-2 col-md-6 col-12">
                            <div class="widget link-widget">
                                <div class="widget-title">
                                    <h3>Navigation</h3>
                                </div>
                                <ul>
                                    <li><a href="#about">About us</a></li>
                                    <li><a href="contact.html">Contact us</a></li>
                                    <li><a href="#video">Video Guide</a></li>
                                    <li><a href="blog.html">Recent Post</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-12">
                            <div class="widget link-widget service-link-widget">
                                <div class="widget-title">
                                    <h3>All Services</h3>
                                </div>
                                <ul>
                                    <li><a href="service-single.html">Web Design</a></li>
                                    <li><a href="service-single.html">Web Development</a></li>
                                    <li><a href="service-single.html">Brand Identity</a></li>
                                    <li><a href="service-single.html">Digital Marketing</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-12">
                            <div class="widget newsletter-widget">
                                <div class="widget-title">
                                    <h3>Newsletter</h3>
                                </div>
                                <p>Must explain to you how all this mistaken idea pleasure born and give you a complete
                                    account.</p>
                                <form>
                                    <div class="input-1">
                                        <input type="email" class="form-control" placeholder="Email Address *" required>
                                    </div>
                                    <div class="submit clearfix">
                                        <button type="submit"><i class="ti-email"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
                <div class="shadow-shape">
                    <svg width="1319" height="1567" viewBox="0 0 1319 1567" fill="none">
                        <g filter="url(#filter0_f_39_3832)">
                            <circle cx="803" cy="803" r="303" fill="#59C378" fill-opacity="0.5" />
                        </g>
                        <defs>
                            <filter id="filter0_f_39_3832" x="0" y="0" width="1606" height="1606"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                <feGaussianBlur stdDeviation="250" result="effect1_foregroundBlur_39_3832" />
                            </filter>
                        </defs>
                    </svg>
                </div>
            </div>
            <div class="lower-footer">
                <div class="container">
                    <div class="row">
                        <div class="separator"></div>
                        <p class="copyright">Copyright &copy; 2022 Elito. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end wpo-site-footer -->

    </div>
   @include('scripts')
@stop





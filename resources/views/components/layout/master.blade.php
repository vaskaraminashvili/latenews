<!DOCTYPE html>
<html lang="ka" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News5</title>
    <meta name="description"
          content="news">
    <meta name="keywords"
          content="news">
    <link rel="canonical" href="https://unistudio.co/html/News5">
    <meta name="theme-color" content="#2757fd">

    <!-- Open Graph Tags -->
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="News5">
    <meta property="og:description"
          content="Full-featured, professional-looking news, editorial and magazine website template.">
    <meta property="og:url" content="https://unistudio.co/html/news5/">
    <meta property="og:site_name" content="News5">
    <meta property="og:image" content="../../../unistudio.co/html/news5/assets/images/common/seo-image.html">
    <meta property="og:image:width" content="1180">
    <meta property="og:image:height" content="600">
    <meta property="og:image:type" content="image/png">

    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="News5">
    <meta name="twitter:description"
          content="Full-featured, professional-looking news, editorial and magazine website template.">
    <meta name="twitter:image" content="../../../unistudio.co/html/news5/assets/images/common/seo-image.html">

    <link rel="canonical" href="https://unistudio.co/html/news5/">

    <!-- preload head styles -->
    <link rel="preload" href="{{asset('../website/assets/css/unicons.min.css')}}" as="style">
    <link rel="preload" href="{{asset('../website/assets/css/swiper-bundle.min.css')}}" as="style">

    <!-- preload footer scripts -->
    <link rel="preload" href="{{asset('../website/assets/js/libs/jquery.min.js')}}" as="script">
    <link rel="preload" href="{{asset('../website/assets/js/libs/scrollmagic.min.js')}}" as="script">
    <link rel="preload" href="{{asset('../website/assets/js/libs/swiper-bundle.min.js')}}" as="script">
    <link rel="preload" href="{{asset('../website/assets/js/libs/anime.min.js')}}" as="script">
    <link rel="preload" href="{{asset('../website/assets/js/helpers/data-attr-helper.js')}}" as="script">
    <link rel="preload" href="{{asset('../website/assets/js/helpers/swiper-helper.js')}}" as="script">
    <link rel="preload" href="{{asset('../website/assets/js/helpers/anime-helper.js')}}" as="script">
    <link rel="preload" href="{{asset('../website/assets/js/helpers/anime-helper-defined-timelines.js')}}" as="script">
    <link rel="preload" href="{{asset('../website/assets/js/uikit-components-bs.js')}}" as="script">
    <link rel="preload" href="{{asset('../website/assets/js/app.js')}}" as="script">

    <!-- app head for bootstrap core -->
    <script src="{{asset('../website/assets/js/app-head-bs.js')}}"></script>

    <!-- include uni-core components -->
    <link rel="stylesheet" href="{{asset('../website/assets/js/uni-core/css/uni-core.min.css')}}">

    <!-- include styles -->
    <link rel="stylesheet" href="{{asset('../website/assets/css/unicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('../website/assets/css/prettify.min.css')}}">
    <link rel="stylesheet" href="{{asset('../website/assets/css/swiper-bundle.min.css')}}">

    <!-- include main style -->
    <link rel="stylesheet" href="{{asset('../website/assets/css/theme/demo-seven.min.css')}}">

    <!-- include scripts -->
    <script src="{{asset('../website/assets/js/uni-core/js/uni-core-bundle.min.js')}}"></script>
</head>
<body class="uni-body panel bg-white text-gray-900 dark:bg-black dark:text-white text-opacity-50 overflow-x-hidden">

<!--  Search modal -->
<div id="uc-search-modal" class="uc-modal-full uc-modal" data-uc-modal="overlay: true">
    <div class="uc-modal-dialog d-flex justify-center bg-white text-dark dark:bg-gray-900 dark:text-white"
         data-uc-height-viewport="">
        <button class="uc-modal-close-default p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all"
                type="button">
            <i class="unicon-close"></i>
        </button>
        <div class="panel w-100 sm:w-500px px-2 py-10">
            <h3 class="h1 text-center">Search</h3>
            <form class="hstack gap-1 mt-4 border-bottom p-narrow dark:border-gray-700"
                  action="https://html.themewant.com/news5/main/index.html?">
                <span class="d-inline-flex justify-center items-center w-24px sm:w-40 h-24px sm:h-40px opacity-50"><i
                            class="unicon-search icon-3"></i></span>
                <input type="search" name="q" class="form-control-plaintext ms-1 fs-6 sm:fs-5 w-full dark:text-white"
                       placeholder="Type your keyword.." aria-label="Search" autofocus>
            </form>
        </div>
    </div>
</div>

<!--  Menu panel -->
<div id="uc-menu-panel" data-uc-offcanvas="overlay: true;">
    <div class="uc-offcanvas-bar bg-white text-dark dark:bg-gray-900 dark:text-white">
        <header class="uc-offcanvas-header hstack justify-between items-center pb-4 bg-white dark:bg-gray-900">
            <div class="uc-logo">
                <a href="index.html" class="h5 text-none text-gray-900 dark:text-white">
                    <img class="w-32px" src="../website/assets/images/common/logo-icon.svg" alt="News5" data-uc-svg>
                </a>
            </div>
            <button class="uc-offcanvas-close p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all"
                    type="button">
                <i class="unicon-close"></i>
            </button>
        </header>

        <div class="panel">
            <form id="search-panel" class="form-icon-group vstack gap-1 mb-3" data-uc-sticky="">
                <input type="email" class="form-control form-control-md fs-6" placeholder="Search..">
                <span class="form-icon text-gray">
                            <i class="unicon-search icon-1"></i>
                        </span>
            </form>
            <ul class="nav-y gap-narrow fw-bold fs-5" data-uc-nav>
                <li class="uc-parent">
                    <a href="#">Homepages</a>
                    <ul class="uc-nav-sub" data-uc-nav="">
                        <li><a href="index.html">Main</a></li>
                        <li><a href="../demo-two/index.html">Classic News</a></li>
                        <li><a href="../demo-three/index.html">Tech</a></li>
                        <li><a href="../demo-four/index.html">Classic Blog</a></li>
                        <li><a href="../demo-five/index.html">Gaming</a></li>
                        <li><a href="../demo-six/index.html">Sports</a></li>
                        <li><a href="../demo-seven/index.html">Newspaper</a></li>
                        <li><a href="../demo-eight/index.html">Magazine</a></li>
                        <li><a href="../demo-nine/index.html">Travel</a></li>
                        <li><a href="../demo-ten/index.html">Food</a></li>
                    </ul>
                </li>
                <li><a href="#">Latest</a></li>
                <li><a href="#">Trending</a></li>
                <li class="uc-parent">
                    <a href="#">Inner Pages</a>
                    <ul class="uc-nav-sub" data-uc-nav="">
                        <li class="uc-parent">
                            <a href="blog.html">Blog</a>
                            <ul class="uc-nav-sub">
                                <li><a href="blog.html">Full Width</a></li>
                                <li><a href="blog-2cols.html">Grid 2 Cols</a></li>
                                <li><a href="blog-3cols.html">Grid 3 Cols</a></li>
                                <li><a href="blog-4cols.html">Grid 4 Cols</a></li>
                            </ul>
                        </li>
                        <li class="uc-parent">
                            <a href="blog-details.html">Blog - detail</a>
                            <ul class="uc-nav-sub">
                                <li><a href="blog-details.html">Blog detail</a></li>
                                <li><a href="blog-details-2.html">Blog detail - v2</a></li>
                            </ul>
                        </li>
                        <li class="uc-parent">
                            <a href="#">Useful pages</a>
                            <ul class="uc-nav-sub">
                                <li><a href="sign-up.html">Sign up</a></li>
                                <li><a href="sign-in.html">Sign in</a></li>
                                <li><a href="reset-password.html">Reset password</a></li>
                                <li><a href="404.html">404 page</a></li>
                                <li><a href="coming-soon.html">Coming soon</a></li>
                            </ul>
                        </li>
                        <li class="uc-parent">
                            <a href="#">Other pages</a>
                            <ul class="uc-nav-sub">
                                <li><a href="page-faq.html">FAQ</a></li>
                                <li><a href="page-terms.html">Terms of use</a></li>
                                <li><a href="page-privacy.html">Privacy policy</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="uc-parent">
                    <a href="shop.html">Shop</a>
                    <ul class="uc-nav-sub" data-uc-nav="">
                        <li class="uc-parent">
                            <a href="shop.html">Shop layouts</a>
                            <ul class="uc-nav-sub">
                                <li><a href="shop.html">Shop 4 cols</a></li>
                                <li><a href="shop-3.html">Shop 3 cols</a></li>
                                <li><a href="shop-2.html">Shop 2 cols</a></li>
                                <li><a href="shop-sidebar.html">Shop with sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="shop-category.html">Archive category</a></li>
                        <li><a href="shop-product-detail.html">Product detail</a></li>
                        <li><a href="shop-product-detail-2.html">Product detail - v2</a></li>
                        <li><a href="shop-cart.html">Cart</a></li>
                        <li><a href="shop-cart-2.html">Cart - v2</a></li>
                        <li><a href="shop-checkout.html">Checkout</a></li>
                        <li><a href="shop-checkout-2.html">Checkout - v2</a></li>
                        <li><a href="shop-order.html">Order confirmation</a></li>
                    </ul>
                </li>
                <li class="hr opacity-10 my-1"></li>
                <li><a href="sign-in.html">Sign in</a></li>
                <li><a href="sign-up.html">Create an account</a></li>
            </ul>
            <ul class="social-icons nav-x mt-4">
                <li>
                    <a href="#"><i class="unicon-logo-medium icon-2"></i></a>
                    <a href="#"><i class="unicon-logo-x-filled icon-2"></i></a>
                    <a href="#"><i class="unicon-logo-instagram icon-2"></i></a>
                    <a href="#"><i class="unicon-logo-pinterest icon-2"></i></a>
                </li>
            </ul>
            <div class="py-2 hstack gap-2 mt-4 bg-white dark:bg-gray-900" data-uc-sticky="position: bottom">
                <div class="vstack gap-1">
                    <span class="fs-7 opacity-60">Select theme:</span>
                    <div class="darkmode-trigger" data-darkmode-switch="">
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider fs-5"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--  Favorites modal -->
<div id="uc-favorites-modal" data-uc-modal="overlay: true">
    <div class="uc-modal-dialog lg:max-w-500px bg-white text-dark dark:bg-gray-800 dark:text-white rounded">
        <button class="uc-modal-close-default p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all"
                type="button">
            <i class="unicon-close"></i>
        </button>
        <div class="panel vstack justify-center items-center gap-2 text-center px-3 py-8">
            <i class="icon icon-4 unicon-bookmark mb-2 text-primary dark:text-white"></i>
            <h2 class="h4 md:h3 m-0">Saved articles</h2>
            <p class="fs-5 opacity-60">You have not yet added any article to your bookmarks!</p>
            <a href="index.html" class="btn btn-sm btn-primary mt-2 uc-modal-close">Browse articles</a>
        </div>
    </div>
</div>


<!--  GDPR modal -->
<div id="uc-gdpr-notification" class="uc-gdpr-notification uc-notification uc-notification-bottom-left lg:m-2">
    <div class="uc-notification-message">
        <a id="uc-close-gdpr-notification" class="uc-notification-close" data-uc-close></a>
        <h2 class="h5 ft-primary fw-bold -ls-1 m-0">GDPR Compliance</h2>
        <p class="fs-7 mt-1 mb-2">We use cookies to ensure you get the best experience on our website. By continuing to
            use our site, you accept our use of cookies, <a href="page-privacy.html" class="uc-link text-underline">Privacy
                Policy</a>, and <a href="page-terms.html" class="uc-link text-underline">Terms of Service</a>.</p>
        <button class="btn btn-sm btn-primary" id="uc-accept-gdpr">Accept</button>
    </div>
</div>

<!--  Bottom Actions Sticky -->
<div class="backtotop-wrap position-fixed bottom-0 end-0 z-99 m-2 vstack">
    <div class="darkmode-trigger cstack w-40px h-40px rounded-circle text-none bg-gray-100 dark:bg-gray-700 dark:text-white"
         data-darkmode-toggle="">
        <label class="switch">
            <span class="sr-only">Dark mode toggle</span>
            <input type="checkbox">
            <span class="slider fs-5"></span>
        </label>
    </div>
    <a class="btn btn-sm bg-primary text-white w-40px h-40px rounded-circle" href="to_top.html" data-uc-backtotop>
        <i class="icon-2 unicon-chevron-up"></i>
    </a>
</div>

<!-- Header start -->
<header class="uc-header header-seven uc-navbar-sticky-wrap z-999"
        data-uc-sticky="sel-target: .uc-navbar-container; cls-active: uc-navbar-sticky; cls-inactive: uc-navbar-transparent; end: !*;">
    <nav class="uc-navbar-container text-gray-900 dark:text-white fs-6 z-1">
        <div class="uc-top-navbar panel z-3 overflow-hidden bg-primary-600 swiper-parent" style="--uc-nav-height: 32px"
             data-uc-navbar=" animation: uc-animation-slide-top-small; duration: 150;">
            <div class="container container-full">
                <div class="uc-navbar-item">
                    <div class="swiper swiper-ticker swiper-ticker-sep px-2" style="--uc-ticker-gap: 32px"
                         data-uc-swiper="items: auto; gap: 32; center: true; center-bounds: true; autoplay: 10000; speed: 10000; autoplay-delay: 0.1; loop: true; allowTouchMove: false; freeMode: true; autoplay-disableOnInteraction: true;">
                        <div class="swiper-wrapper">
                            @for ($i = 0; $i < 6; $i++)
                                <div class="swiper-slide text-white">
                                    <div class="type-post post panel">
                                        <a href="blog-details.html" class="fs-7 fw-normal text-none text-inherit">
                                            შენიშვნა: ეს ტექსტი ავტომატურად არის ნათარგმნი და შესაძლოა შეიცავდეს მცირე
                                            უზუსტობებს. გთხოვთ, გაგებით მოეკიდოთ.
                                        </a>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uc-center-navbar panel hstack z-2 min-h-48px d-none lg:d-flex"
             data-uc-navbar=" animation: uc-animation-slide-top-small; duration: 150;">
            <div class="container max-w-xl">
                <x-header-navbar/>
            </div>
        </div>
        <div class="uc-bottom-navbar panel z-1">
            <div class="container max-w-xl">
                <div class="uc-navbar min-h-72px lg:min-h-100px"
                     data-uc-navbar=" animation: uc-animation-slide-top-small; duration: 150;">
                    <div class="uc-navbar-left">
                        <div class="md:d-none">
                            <a class="uc-menu-trigger icon-2" href="#uc-menu-panel" data-uc-toggle></a>
                        </div>
                        <div class="uc-navbar-item d-none lg:d-inline-flex">
                            <a class="btn btn-xs gap-narrow ps-1 border rounded-pill fw-bold dark:text-white hover:bg-gray-25 dark:hover:bg-gray-900"
                               href="#live_now" data-uc-scroll="offset: 128">
                                <i class="icon icon-narrow unicon-dot-mark text-red" data-uc-animate="flash"></i>
                                <span>Live</span>
                            </a>
                        </div>
                        <div class="uc-logo d-block md:d-none">
                            <a href="index.html">
                                <img class="w-100px text-dark dark:text-white"
                                     src="../website/assets/images/demo-seven/common/logo.svg" alt="News5" data-uc-svg>
                            </a>
                        </div>
                    </div>
                    <div class="uc-navbar-center">
                        <div class="uc-logo d-none md:d-block">
                            <a href="index.html">
                                <img class="w-150px text-dark dark:text-white"
                                     src="{{asset('../website/assets/images/late_text.png')}}" alt="News5" data-uc-svg>
                            </a>
                        </div>
                    </div>
                    <div class="uc-navbar-right gap-2 lg:gap-3">
                        <div class="uc-navbar-item d-inline-flex lg:d-none">
                            <a class="btn btn-xs gap-narrow ps-1 border rounded-pill fw-bold dark:text-white hover:bg-gray-25 dark:hover:bg-gray-900"
                               href="#live_now" data-uc-scroll="offset: 128">
                                <i class="icon icon-narrow unicon-dot-mark text-red" data-uc-animate="flash"></i>
                                <span>Live</span>
                            </a>
                        </div>
                        <div class="uc-navbar-item d-none lg:d-inline-flex">
                            <a class="uc-search-trigger cstack text-none text-dark dark:text-white"
                               href="#uc-search-modal" data-uc-toggle>
                                <i class="icon icon-2 fw-medium unicon-search"></i>
                            </a>
                        </div>
                        <div class="uc-navbar-item d-none lg:d-inline-flex">
                            <div class="uc-modes-trigger btn btn-xs w-32px h-32px p-0 border fw-normal rounded-circle dark:text-white hover:bg-gray-25 dark:hover:bg-gray-900"
                                 data-darkmode-toggle="">
                                <label class="switch">
                                    <span class="sr-only">Dark toggle</span>
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<!-- Header end -->

<!-- Wrapper start -->
<div id="wrapper" class="wrap overflow-hidden-x">


    {{$slot}}


</div>

<!-- Wrapper end -->

<!-- Footer start -->
<footer id="uc-footer" class="uc-footer panel uc-dark">
    <div class="footer-outer py-4 lg:py-6 bg-white dark:bg-gray-900 text-gray-900 dark:text-white text-opacity-50">
        <div class="container max-w-xl">
            <div class="footer-inner vstack gap-6 xl:gap-8">
                <div class="uc-footer-bottom panel vstack gap-4 justify-center lg:fs-5">
                    <nav class="footer-nav">
                        <ul class="nav-x gap-2 lg:gap-4 justify-center text-center text-uppercase fw-medium">
                            <li><a class="hover:text-gray-900 dark:hover:text-white duration-150"
                                   href="blog-category.html">Politics</a></li>
                            <li><a class="hover:text-gray-900 dark:hover:text-white duration-150"
                                   href="blog-category.html">Opinions</a></li>
                            <li><a class="hover:text-gray-900 dark:hover:text-white duration-150"
                                   href="blog-category.html">World</a></li>
                            <li><a class="hover:text-gray-900 dark:hover:text-white duration-150"
                                   href="blog-category.html">Media</a></li>
                        </ul>
                    </nav>
                    <div class="footer-social hstack justify-center gap-2 lg:gap-3">
                        <ul class="nav-x gap-2">
                            <li>
                                <a class="hover:text-gray-900 dark:hover:text-white duration-150" href="#ln"><i
                                            class="icon icon-2 unicon-logo-linkedin"></i></a>
                            </li>
                            <li>
                                <a class="hover:text-gray-900 dark:hover:text-white duration-150" href="#fb"><i
                                            class="icon icon-2 unicon-logo-facebook"></i></a>
                            </li>
                            <li>
                                <a class="hover:text-gray-900 dark:hover:text-white duration-150" href="#x"><i
                                            class="icon icon-2 unicon-logo-x-filled"></i></a>
                            </li>
                            <li>
                                <a class="hover:text-gray-900 dark:hover:text-white duration-150" href="#in"><i
                                            class="icon icon-2 unicon-logo-instagram"></i></a>
                            </li>
                            <li>
                                <a class="hover:text-gray-900 dark:hover:text-white duration-150" href="#yt"><i
                                            class="icon icon-2 unicon-logo-youtube"></i></a>
                            </li>
                        </ul>
                        <div class="vr"></div>
                        <div class="d-inline-block">
                            <a href="#" class="hstack gap-1 text-none fw-medium">
                                <i class="icon icon-1 unicon-earth-filled"></i>
                                <span>English</span>
                                <span data-uc-drop-parent-icon=""></span>
                            </a>
                            <div class="p-2 bg-white dark:bg-gray-800 shadow-xs w-150px"
                                 data-uc-drop="mode: click; boundary: !.uc-footer-bottom; animation: uc-animation-slide-top-small; duration: 150;">
                                <ul class="nav-y gap-1 fw-medium items-end">
                                    <li><a href="#en">English</a></li>
                                    <li><a href="#ar">العربية</a></li>
                                    <li><a href="#ch">中文</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer-copyright vstack sm:hstack justify-center items-center gap-1 lg:gap-2">
                        <p>News5 © 2024, All rights reserved.</p>
                        <ul class="nav-x gap-2 fw-medium">
                            <li><a class="uc-link text-underline hover:text-gray-900 dark:hover:text-white duration-150"
                                   href="page-privacy.html">Privacy notice</a></li>
                            <li><a class="uc-link text-underline hover:text-gray-900 dark:hover:text-white duration-150"
                                   href="page-terms.html">Terms of condition</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- include jquery & bootstrap js -->
<script defer src="{{asset('../website/assets/js/libs/jquery.min.js')}}"></script>
<script defer src="{{asset('../website/assets/js/libs/bootstrap.min.js')}}"></script>

<!-- include scripts -->
<script defer src="{{asset('../website/assets/js/libs/anime.min.js')}}"></script>
<script defer src="{{asset('../website/assets/js/libs/swiper-bundle.min.js')}}"></script>
<script defer src="{{asset('../website/assets/js/libs/scrollmagic.min.js')}}"></script>
<script defer src="{{asset('../website/assets/js/helpers/data-attr-helper.js')}}"></script>
<script defer src="{{asset('../website/assets/js/helpers/swiper-helper.js')}}"></script>
<script defer src="{{asset('../website/assets/js/helpers/anime-helper.js')}}"></script>
<script defer src="{{asset('../website/assets/js/helpers/anime-helper-defined-timelines.js')}}"></script>
<script defer src="{{asset('../website/assets/js/uikit-components-bs.js')}}"></script>

<!-- include app script -->
<script defer src="{{asset('../website/assets/js/app.js')}}"></script>

<script>
    // Schema toggle via URL
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const getSchema = urlParams.get("schema");
    if (getSchema === "dark") {
        setDarkMode(1);
    } else if (getSchema === "light") {
        setDarkMode(0);
    }
</script>
</body>

</html>
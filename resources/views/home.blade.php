<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/abcbook/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Mar 2023 12:38:04 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Book Shop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon/favicon.png">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/price_rangs.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script
        nonce="bc819ff2-e5e8-4cac-a9ee-d263a8a932ad">(function (w, d) { !function (bv, bw, bx, by) { bv[bx] = bv[bx] || {}; bv[bx].executed = []; bv.zaraz = { deferred: [], listeners: [] }; bv.zaraz.q = []; bv.zaraz._f = function (bz) { return function () { var bA = Array.prototype.slice.call(arguments); bv.zaraz.q.push({ m: bz, a: bA }) } }; for (const bB of ["track", "set", "debug"]) bv.zaraz[bB] = bv.zaraz._f(bB); bv.zaraz.init = () => { var bC = bw.getElementsByTagName(by)[0], bD = bw.createElement(by), bE = bw.getElementsByTagName("title")[0]; bE && (bv[bx].t = bw.getElementsByTagName("title")[0].text); bv[bx].x = Math.random(); bv[bx].w = bv.screen.width; bv[bx].h = bv.screen.height; bv[bx].j = bv.innerHeight; bv[bx].e = bv.innerWidth; bv[bx].l = bv.location.href; bv[bx].r = bw.referrer; bv[bx].k = bv.screen.colorDepth; bv[bx].n = bw.characterSet; bv[bx].o = (new Date).getTimezoneOffset(); if (bv.dataLayer) for (const bI of Object.entries(Object.entries(dataLayer).reduce(((bJ, bK) => ({ ...bJ[1], ...bK[1] }))))) zaraz.set(bI[0], bI[1], { scope: "page" }); bv[bx].q = []; for (; bv.zaraz.q.length;) { const bL = bv.zaraz.q.shift(); bv[bx].q.push(bL) } bD.defer = !0; for (const bM of [localStorage, sessionStorage]) Object.keys(bM || {}).filter((bO => bO.startsWith("_zaraz_"))).forEach((bN => { try { bv[bx]["z_" + bN.slice(7)] = JSON.parse(bM.getItem(bN)) } catch { bv[bx]["z_" + bN.slice(7)] = bM.getItem(bN) } })); bD.referrerPolicy = "origin"; bD.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(bv[bx]))); bC.parentNode.insertBefore(bD, bC) };["complete", "interactive"].includes(bw.readyState) ? zaraz.init() : bv.addEventListener("DOMContentLoaded", zaraz.init) }(w, d, "zarazData", "script"); })(window, document);</script>
</head>

<body>
    <header>
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top ">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="d-flex justify-content-between align-items-center flex-sm">
                                    <div class="header-info-left d-flex align-items-center">

                                        <div class="logo">
                                            <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                        </div>

                                        <form action="#" class="form-box">
                                            <input type="text" name="Search"
                                                placeholder="Search book by author or publisher">
                                            <div class="search-icon">
                                                <i class="ti-search"></i>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="header-info-right d-flex align-items-center">
                                        <ul>
                                            
                                            {{-- <li><a href="#">Track Order</a></li> --}}
                                            {{-- <li class="shopping-card">
                                                <a href="cart.html"><img src="assets/img/icon/cart.svg" alt=""></a>
                                            </li> --}}

                                            @guest
                                                @if (Route::has('login'))
                                                    <li>
                                                        <a class="btn header-btn" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                    </li>
                                                @endif
                    
                                                @if (Route::has('register'))
                                                    <li>
                                                        <a class="btn header-btn" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                    </li>
                                                @endif
                                            @else
                                                <li><a href="#">{{ Auth::user()->name }}</a></li>
                                                <li><a href="{{ route('logout') }}" class="btn header-btn" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            @endguest



                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom  header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-12">

                                <div class="logo2">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>

                                <div class="main-menu text-center d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="categories.html">Categories</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="#">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="login.html">login</a></li>
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="book-details.html">book Details</a></li>
                                                    <li><a href="blog_details.html">Blog Details</a></li>
                                                    <li><a href="elements.html">Element</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="contact.html">Contect</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <div class="col-xl-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>

        <div class="slider-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider-active dot-style">

                            <div class="single-slider slider-height slider-bg1 d-flex align-items-center">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-sm-7">
                                            <div class="hero-caption text-center">
                                                <span data-animation="fadeInUp" data-delay=".2s">Science Fiction</span>
                                                <h1 data-animation="fadeInUp" data-delay=".4s">The History<br> of
                                                    Phipino</h1>
                                                <a href="#" class="btn hero-btn" data-animation="bounceIn"
                                                    data-delay=".8s">Browse Store</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-slider slider-height slider-bg2 d-flex align-items-center">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-sm-7">
                                            <div class="hero-caption text-center">
                                                <span data-animation="fadeInUp" data-delay=".2s">Science Fiction</span>
                                                <h1 data-animation="fadeInUp" data-delay=".4s">The History<br> of
                                                    Phipino</h1>
                                                <a href="#" class="btn hero-btn" data-animation="bounceIn"
                                                    data-delay=".8s">Browse Store</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-slider slider-height slider-bg3 d-flex align-items-center">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-sm-7">
                                            <div class="hero-caption text-center">
                                                <span data-animation="fadeInUp" data-delay=".2s">Science Fiction</span>
                                                <h1 data-animation="fadeInUp" data-delay=".4s">The History<br> of
                                                    Phipino</h1>
                                                <a href="#" class="btn hero-btn" data-animation="bounceIn"
                                                    data-delay=".8s">Browse Store</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="best-selling section-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Best Selling Books Ever</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="selling-active">

                            <div class="properties pb-20">
                                <div class="properties-card">
                                    <div class="properties-img">
                                        <a href="book-details.html"><img src="assets/img/gallery/best_selling1.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="properties-caption">
                                        <h3><a href="book-details.html">Moon Dance</a></h3>
                                        <p>J. R Rain</p>
                                        <div
                                            class="properties-footer d-flex justify-content-between align-items-center">
                                            <div class="review">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <p>(<span>120</span> Review)</p>
                                            </div>
                                            <div class="price">
                                                <span>$50</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="properties pb-20">
                                <div class="properties-card">
                                    <div class="properties-img">
                                        <a href="book-details.html"><img src="assets/img/gallery/best_selling2.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="properties-caption">
                                        <h3><a href="book-details.html">Moon Dance</a></h3>
                                        <p>J. R Rain</p>
                                        <div
                                            class="properties-footer d-flex justify-content-between align-items-center">
                                            <div class="review">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <p>(<span>120</span> Review)</p>
                                            </div>
                                            <div class="price">
                                                <span>$50</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="properties pb-20">
                                <div class="properties-card">
                                    <div class="properties-img">
                                        <a href="book-details.html"><img src="assets/img/gallery/best_selling3.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="properties-caption">
                                        <h3><a href="book-details.html">Moon Dance</a></h3>
                                        <p>J. R Rain</p>
                                        <div
                                            class="properties-footer d-flex justify-content-between align-items-center">
                                            <div class="review">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <p>(<span>120</span> Review)</p>
                                            </div>
                                            <div class="price">
                                                <span>$50</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="properties pb-20">
                                <div class="properties-card">
                                    <div class="properties-img">
                                        <a href="book-details.html"><img src="assets/img/gallery/best_selling4.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="properties-caption">
                                        <h3><a href="book-details.html">Moon Dance</a></h3>
                                        <p>J. R Rain</p>
                                        <div
                                            class="properties-footer d-flex justify-content-between align-items-center">
                                            <div class="review">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <p>(<span>120</span> Review)</p>
                                            </div>
                                            <div class="price">
                                                <span>$50</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="properties pb-20">
                                <div class="properties-card">
                                    <div class="properties-img">
                                        <a href="book-details.html"><img src="assets/img/gallery/best_selling5.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="properties-caption">
                                        <h3><a href="book-details.html">Moon Dance</a></h3>
                                        <p>J. R Rain</p>
                                        <div
                                            class="properties-footer d-flex justify-content-between align-items-center">
                                            <div class="review">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <p>(<span>120</span> Review)</p>
                                            </div>
                                            <div class="price">
                                                <span>$50</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="properties pb-20">
                                <div class="properties-card">
                                    <div class="properties-img">
                                        <a href="book-details.html"><img src="assets/img/gallery/best_selling6.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="properties-caption">
                                        <h3><a href="book-details.html">Moon Dance</a></h3>
                                        <p>J. R Rain</p>
                                        <div
                                            class="properties-footer d-flex justify-content-between align-items-center">
                                            <div class="review">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <p>(<span>120</span> Review)</p>
                                            </div>
                                            <div class="price">
                                                <span>$50</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="properties pb-20">
                                <div class="properties-card">
                                    <div class="properties-img">
                                        <a href="book-details.html"><img src="assets/img/gallery/best_selling4.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="properties-caption">
                                        <h3><a href="book-details.html">Moon Dance</a></h3>
                                        <p>J. R Rain</p>
                                        <div
                                            class="properties-footer d-flex justify-content-between align-items-center">
                                            <div class="review">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <p>(<span>120</span> Review)</p>
                                            </div>
                                            <div class="price">
                                                <span>$50</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="services-area2 top-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-9 col-md-8">
                        <div class="row">

                            <div class="col-xl-12">
                                <div class="section-tittle d-flex justify-content-between align-items-center mb-40">
                                    <h2 class="mb-0">Featured This Week</h2>
                                    <a href="#" class="browse-btn">View All</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="services-active">

                                    <div class="single-services d-flex align-items-center">
                                        <div class="features-img">
                                            <img src="assets/img/gallery/best-books1.jpg" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <img src="assets/img/icon/logo.html" alt="">
                                            <h3>The Rage of Dragons</h3>
                                            <p>By Evan Winter</p>
                                            <div class="price">
                                                <span>$50.00</span>
                                            </div>
                                            <div class="review">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <p>(120 Review)</p>
                                            </div>
                                            <a href="book-details.html" class="border-btn">View Details</a>
                                        </div>
                                    </div>

                                    <div class="single-services d-flex align-items-center">
                                        <div class="features-img">
                                            <img src="assets/img/gallery/best-books1.jpg" alt="">
                                        </div>
                                        <div class="features-caption">
                                            <img src="assets/img/icon/logo.html" alt="">
                                            <h3>The Rage of Dragons</h3>
                                            <p>By Evan Winter</p>
                                            <div class="price">
                                                <span>$50.00</span>
                                            </div>
                                            <div class="review">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <p>(120 Review)</p>
                                            </div>
                                            <a href="book-details.html" class="border-btn">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-9">

                        <div class="google-add">
                            <img src="assets/img/gallery/ad.jpg" alt="" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="our-client section-padding best-selling">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-12">

                        <div class="section-tittle  mb-40">
                            <h2>Latest Published items</h2>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-12">
                        <div class="nav-button mb-40">

                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-link active" id="nav-one-tab" data-bs-toggle="tab" href="#nav-one"
                                        role="tab" aria-controls="nav-one" aria-selected="true">All</a>
                                    <a class="nav-link" id="nav-two-tab" data-bs-toggle="tab" href="#nav-two" role="tab"
                                        aria-controls="nav-two" aria-selected="false">Horror</a>
                                    <a class="nav-link" id="nav-three-tab" data-bs-toggle="tab" href="#nav-three"
                                        role="tab" aria-controls="nav-three" aria-selected="false">Thriller</a>
                                    <a class="nav-link" id="nav-four-tab" data-bs-toggle="tab" href="#nav-four"
                                        role="tab" aria-controls="nav-four" aria-selected="false">Science Fiction</a>
                                    <a class="nav-link" id="nav-five-tab" data-bs-toggle="tab" href="#nav-five"
                                        role="tab" aria-controls="nav-five" aria-selected="false">History</a>
                                </div>
                            </nav>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container">

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">

                        <div class="row">
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling7.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling8.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling6.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling4.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling9.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling2.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">

                        <div class="row">
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling4.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling9.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling2.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling7.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling8.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling6.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab">

                        <div class="row">
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling7.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling8.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling6.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling4.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling9.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling2.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-four" role="tabpanel" aria-labelledby="nav-four-tab">

                        <div class="row">
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling9.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling2.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling7.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling8.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling6.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling4.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-five" role="tabpanel" aria-labelledby="nav-five-tab">

                        <div class="row">
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling7.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling8.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling6.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling4.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling9.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling2.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="more-btn text-center mt-15">
                            <a href="#" class="border-btn border-btn2 more-btn2">Browse More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-6 col-lg-6">
                    <div class="wantToWork-area w-padding2 mb-30" data-background="assets/img/gallery/wants-bg1.jpg">
                        <h2>The History<br> of Phipino</h2>
                        <div class="linking">
                            <a href="#" class="btn wantToWork-btn">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="wantToWork-area w-padding2 mb-30" data-background="assets/img/gallery/wants-bg2.jpg">
                        <h2>Wilma Mumduya</h2>
                        <div class="linking">
                            <a href="#" class="btn wantToWork-btn">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="subscribe-area">
            <div class="container">
                <div class="subscribe-caption text-center  subscribe-padding section-img2-bg"
                    data-background="assets/img/gallery/section-bg1.jpg">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8 col-md-9">
                            <h3>Join Newsletter</h3>
                            <p>Lorem started its journey with cast iron (CI) products in 1980. The initial main
                                objective was to ensure pure water and affordable irrigation.</p>
                            <form action="#">
                                <input type="text" placeholder="Enter your email">
                                <button class="subscribe-btn">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <footer>
        <div class="footer-wrappper section-bg">
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-5 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">

                                    <div class="footer-logo mb-25">
                                        <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p>Get the breathing space now, and we’ll extend your term at the other end
                                                year for go.</p>
                                        </div>
                                    </div>

                                    <div class="footer-social">
                                        <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Book Category</h4>
                                    <ul>
                                        <li><a href="#">History</a></li>
                                        <li><a href="#">Horror - Thriller</a></li>
                                        <li><a href="#">Love Stories</a></li>
                                        <li><a href="#">Science Fiction</a></li>
                                        <li><a href="#">Business</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>&nbsp;</h4>
                                    <ul>
                                        <li><a href="#">Biography</a></li>
                                        <li><a href="#">Astrology</a></li>
                                        <li><a href="#">Digital Marketing</a></li>
                                        <li><a href="#">Software Development</a></li>
                                        <li><a href="#">Ecommerce</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Site Map</h4>
                                    <ul class="mb-20">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">FAQs</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    Copyright &copy;
                                    <script>document.write(new Date().getFullYear());</script> All rights reserved |
                                    This template is made with <i class="fa fa-heart color-danger"
                                        aria-hidden="true"></i> by <a href="https://colorlib.com/" style="color: black"
                                        target="_blank" rel="nofollow noopener">Colorlib</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <script src="{{asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{asset('js/popper.min.js') }}"></script>
    <script src="{{asset('js/bootstrap.min.js') }}"></script>

    <script src="{{asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{asset('js/slick.min.js') }}"></script>
    <script src="{{asset('js/jquery.slicknav.min.js') }}"></script>

    <script src="{{asset('js/wow.min.js') }}"></script>
    <script src="{{asset('js/jquery.magnific-popup.js') }}"></script>
    <script src="{{asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{asset('js/jquery.counterup.min.js') }}"></script>

    <script src="{{asset('js/waypoints.min.js') }}"></script>
    <script src="{{asset('js/price_rangs.js') }}"></script>

    <script src="{{asset('js/contact.js') }}"></script>
    <script src="{{asset('js/jquery.form.js') }}"></script>
    <script src="{{asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{asset('js/mail-script.js') }}"></script>
    <script src="{{asset('js/jquery.ajaxchimp.min.js') }}"></script>

    <script src="{{asset('js/plugins.js') }}"></script>
    <script src="{{asset('js/main.js') }}"></script>
   
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
        integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
        data-cf-beacon='{"rayId":"7a3aa72b693bd7a9","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.2.0","si":100}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/abcbook/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Mar 2023 12:38:57 GMT -->

</html>
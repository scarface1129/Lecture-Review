<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/abcbook/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Mar 2023 12:40:48 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Book Shop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/icon/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/review.css') }}">
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
        nonce="c3a3ad33-ea89-4c7e-8b36-35f3426127c1">(function (w, d) { !function (bv, bw, bx, by) { bv[bx] = bv[bx] || {}; bv[bx].executed = []; bv.zaraz = { deferred: [], listeners: [] }; bv.zaraz.q = []; bv.zaraz._f = function (bz) { return function () { var bA = Array.prototype.slice.call(arguments); bv.zaraz.q.push({ m: bz, a: bA }) } }; for (const bB of ["track", "set", "debug"]) bv.zaraz[bB] = bv.zaraz._f(bB); bv.zaraz.init = () => { var bC = bw.getElementsByTagName(by)[0], bD = bw.createElement(by), bE = bw.getElementsByTagName("title")[0]; bE && (bv[bx].t = bw.getElementsByTagName("title")[0].text); bv[bx].x = Math.random(); bv[bx].w = bv.screen.width; bv[bx].h = bv.screen.height; bv[bx].j = bv.innerHeight; bv[bx].e = bv.innerWidth; bv[bx].l = bv.location.href; bv[bx].r = bw.referrer; bv[bx].k = bv.screen.colorDepth; bv[bx].n = bw.characterSet; bv[bx].o = (new Date).getTimezoneOffset(); if (bv.dataLayer) for (const bI of Object.entries(Object.entries(dataLayer).reduce(((bJ, bK) => ({ ...bJ[1], ...bK[1] }))))) zaraz.set(bI[0], bI[1], { scope: "page" }); bv[bx].q = []; for (; bv.zaraz.q.length;) { const bL = bv.zaraz.q.shift(); bv[bx].q.push(bL) } bD.defer = !0; for (const bM of [localStorage, sessionStorage]) Object.keys(bM || {}).filter((bO => bO.startsWith("_zaraz_"))).forEach((bN => { try { bv[bx]["z_" + bN.slice(7)] = JSON.parse(bM.getItem(bN)) } catch { bv[bx]["z_" + bN.slice(7)] = bM.getItem(bN) } })); bD.referrerPolicy = "origin"; bD.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(bv[bx]))); bC.parentNode.insertBefore(bD, bC) };["complete", "interactive"].includes(bw.readyState) ? zaraz.init() : bv.addEventListener("DOMContentLoaded", zaraz.init) }(w, d, "zarazData", "script"); })(window, document);</script>
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
                                            <li><a href="#">{{ Auth::user()->name }}</a></li>
                                            <li><a href="{{ route('logout') }}" class="btn header-btn" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
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
                                            <li><a href="{{ route('home') }}">Home</a></li>
                                            <li><a href="{{ route('department') }}">Departments</a></li>
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

        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="slider-area">
                        <div class="slider-height2 slider-bg5 d-flex align-items-center justify-content-center">
                            <div class="hero-caption hero-caption2">
                                <h2>Review Lecturer Performance</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <section class="contact-section">
            <div class="container">
                
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Comment and Rate Your Lecturers Performance on This Course</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="{{ route('review_store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="comment" id="message" cols="30"
                                            rows="9" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'COMMENT ON THE LECTURER'"
                                            placeholder=" COMMENT ON THE LECTURER  "></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" value="{{Auth::user()->id}}" hidden name="student_id" id="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" value="{{$lecturer_id}}" name="lecturer_id" hidden id="">
                                    </div>
                                </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" value="{{$course_id}}" name="course_id" hidden id="">
                                    </div>
                                </div>
                                <div id="half-stars-example">
                                    <div class="rating-group">
                                        <input class="rating__input rating__input--none" checked name="rate" id="rating2-0" value="0" type="radio">
                                        <label style="font-size: 55px; margin-right: -5px;" aria-label="0 stars" class="rating__label" for="rating2-0">&nbsp;</label>
                                        <label style="font-size: 55px; margin-right: -5px;" aria-label="1 star" class="rating__label" for="rating2-10"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <input class="rating__input" name="rate" id="rating2-10" value="1" type="radio">
                                        <label style="font-size: 55px; margin-right: -5px;" aria-label="2 stars" class="rating__label" for="rating2-20"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <input class="rating__input" name="rate" id="rating2-20" value="2" type="radio">
                                        <label style="font-size: 55px; margin-right: -5px;" aria-label="3 stars" class="rating__label" for="rating2-30"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <input class="rating__input" name="rate" id="rating2-30" value="3" type="radio">
                                        <label style="font-size: 55px; margin-right: -5px;" aria-label="4 stars" class="rating__label" for="rating2-40"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <input class="rating__input" name="rate" id="rating2-40" value="4" type="radio">
                                        <label style="font-size: 55px; margin-right: -5px;" aria-label="5 stars" class="rating__label" for="rating2-50"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                        <input class="rating__input" name="rate" id="rating2-50" value="5" type="radio">
                                    </div>
                                    <p>Space on left side to select 0 stars</p>
                                </div>

                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Buttonwood, California.</h3>
                                <p>Rosemead, CA 91770</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+1 253 565 2365</h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="ccbfb9bcbca3beb88cafa3a0a3bea0a5aee2afa3a1">[email&#160;protected]</a>
                                </h3>
                                <p>Send us your query anytime!</p>
                            </div>
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
                                    <script data-cfasync="false"
                                        src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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
        data-cf-beacon='{"rayId":"7a3aa79eaac2d7a9","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.2.0","si":100}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/abcbook/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Mar 2023 12:40:49 GMT -->

</html>
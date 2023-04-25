<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/abcbook/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Mar 2023 12:38:04 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>NAU Lecture-Review</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset ('/img/logo/logo.png') }}">

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
                                            <a href="{{route('home')}}"><img src="{{asset ('/img/logo/logo.png') }}" style="width: 70px; height:60px;" alt=""></a>
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
                                            <li><a href="{{ route('home') }}">Home</a></li>
                                            <li><a href="{{ route('department') }}">Departments</a></li>
                                            
                                            <li><a href="#">Admin</a>
                                                <ul class="submenu">
                                                    <li><a href="{{ route('lecturer_create') }}">Create-Lecturer</a></li>
                                                    <li><a href="{{ route('lecture_create') }}">Create-Courses</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog.html">About Us</a></li>
                                            <li><a href="contact.html">Contact</a></li>
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
    @yield('content')
    <footer>
        <div class="footer-wrappper section-bg">
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-5 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">

                                    <div class="footer-logo mb-25">
                                        <a href="{{route('home')}}"><img src="{{asset ('/img/logo/logo.png') }}" style="width: 70px; height:60px;" alt=""></a>
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
                                    This site was developed by <i class="fa fa-heart color-danger"
                                        aria-hidden="true"></i> by <a href="https://colorlib.com/" style="color: black"
                                        target="_blank" rel="nofollow noopener">Scarface</a>
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
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Al-Mubarak Int Group</title>
    <link href="{{asset('images/favicon.png')}}" rel="icon">
    <link href="{{asset('images/favicon.png')}}" rel="apple-touch-icon">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="{{asset("assets/vendor/icofont/icofont.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets/vendor/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets/vendor/ionicons/css/ionicons.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets/vendor/boxicons/css/boxicons.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets/vendor/owl.carousel/assets/owl.carousel.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets/vendor/venobox/venobox.css")}}" rel="stylesheet">
    <link href="{{asset("assets/vendor/animate.css/animate.min.css")}}" rel="stylesheet">
    {{--    <link href="{{asset("assets/vendor/remixicon/remixicon.css")}}" rel="stylesheet">--}}
    <link href="{{asset("assets/vendor/aos/aos.css")}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <!-- Vendor CSS Files -->

    <style>
        body {
            background-color: #fff;
        }
        .owl-carousel.owl-drag .owl-item{
            padding-right: 50px;
        }
    </style>
    @yield('style')
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top {{ request()->segment(1) == null ? 'header-transparent' : null }}">
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-xl-11 d-flex align-items-center">
                <h1 class="logo mr-auto"><a href="{{route('home')}}"><img src="{{asset('images/logo.png')}}" alt=""
                                                                          class="img-fluid"> Al-Mubarak Int Group</a></h1>

                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="{{ request()->segment(1) === null ? 'active' : null }}"><a
                                href="{{url('/')}}">Home</a></li>
                        <li class="{{ request()->segment(1) === 'projects' ? 'active' : null }}"><a
                                href="{{url('/projects')}}">Projects</a></li>
                        <li class="drop-down {{ request()->segment(1) === 'about-us' ? 'active' : null }}">
                            <a href="{{url('/about-us')}}">About us</a>
                            <ul>
                                <li><a href="{{url('/about-us#team')}}">1 - Our Team</a></li>
                                <li><a href="{{url('/about-us#history')}}">2 - History</a></li>
                                <li><a href="{{url('/about-us#partners')}}">3 - Our partners</a></li>
                            </ul>
                        </li>
{{--                        <li class="{{ request()->segment(1) === 'future' ? 'active' : null }}"><a--}}
{{--                                href="{{url('/future')}}">Future</a></li>--}}
                        <li class="drop-down {{ request()->segment(1) === 'our-services' ? 'active' : null }}">
                            <a href="{{url('/our-services')}}">Our services</a>
                            <ul>
                                <li><a href="{{url('/our-services#infrastructure')}}">1 - Infrastructure</a></li>
                                <li><a href="{{url('/our-services#mechanical')}}">2 - Mechanical</a></li>
                                <li><a href="{{url('/our-services#electrical')}}">3 - Electrical</a></li>
                                <li><a href="{{url('/our-services#monitoring')}}">4 - Monitoring</a></li>
                                <li><a href="{{url('/our-services#supply')}}">5 - Supply</a></li>
                                <li><a href="{{url('/our-services#water-resources')}}">6 - Water Resources</a></li>
                            </ul>
                        </li>
                        <li class="{{ request()->segment(1) === 'certificates' ? 'active' : null }}"><a
                                href="{{url('/certificates')}}">Certificates</a></li>
                        <li class="{{ request()->segment(1) === 'contact' ? 'active' : null }}"><a
                                href="{{url('/contact')}}">Contact us</a></li>
                    </ul>
                </nav><!-- .nav-menu -->
            </div>
        </div>

    </div>
</header><!-- End Header -->
@yield('hero')

<main id="main">
    <!-- header area end -->
    <div id="app">
        @yield('content')


    </div>
</main><!-- End #main -->


<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-info footer-contact">
                    <h3>Al-Mubarak Int Group</h3>
                    <p>
                        Al AASAM Building,<br>
                        Baghdad, Iraq<br>
                        <strong>Phone:</strong> +964 780 195 6006<br>
                        <strong>Email:</strong> contact@mubarakint.com<br>
                    </p>
                    <br>
{{--                    <div class="social-links">--}}
{{--                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>--}}
{{--                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>--}}
{{--                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>--}}
{{--                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>--}}
{{--                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>--}}
{{--                    </div>--}}
                </div>

                <div class="col-lg-1 col-md-6"></div>

                <div class="col-lg-4 col-md-6 px-5 footer-links">
                    <h4>Navigate to</h4>
                    <ul>
                        <li class="{{ request()->segment(1) === null ? 'active' : null }}"><i
                                class="ion-ios-arrow-right"></i><a
                                href="{{url('/')}}">Home</a></li>
                        <li class="{{ request()->segment(1) === 'projects' ? 'active' : null }}"><i
                                class="ion-ios-arrow-right"></i><a
                                href="{{url('/projects')}}">Projects</a></li>
                        <li class="{{ request()->segment(1) === 'about-us' ? 'active' : null }}">
                            <i class="ion-ios-arrow-right"></i><a href="{{url('/about-us')}}">About us</a>
                        </li>
                        <li class="{{ request()->segment(1) === 'future' ? 'active' : null }}"><i
                                class="ion-ios-arrow-right"></i><a
                                href="{{url('/future')}}">Future</a></li>
                        <li class="{{ request()->segment(1) === 'certificates' ? 'active' : null }}"><i
                                class="ion-ios-arrow-right"></i><a
                                href="{{url('/certificates')}}">Certificates</a></li>
                        <li class="{{ request()->segment(1) === 'contact' ? 'active' : null }}"><i
                                class="ion-ios-arrow-right"></i><a
                                href="{{url('/contact')}}">Contact us</a></li>
                    </ul>
                </div>

                <div class="col-lg-1 col-md-6"></div>

                <div class="col-lg-3 col-md-6 px-5 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="ion-ios-arrow-right"></i><a href="{{url('/our-services#infrastructure')}}">1 - Infrastructure</a></li>
                        <li><i class="ion-ios-arrow-right"></i><a href="{{url('/our-services#mechanical')}}">2 - Mechanical</a></li>
                        <li><i class="ion-ios-arrow-right"></i><a href="{{url('/our-services#electrical')}}">3 - Electricity</a></li>
                        <li><i class="ion-ios-arrow-right"></i><a href="{{url('/our-services#monitoring')}}">4 - Monitoring</a></li>
                        <li><i class="ion-ios-arrow-right"></i><a href="{{url('/our-services#supply')}}">5 - Supply</a></li>
                        <li><i class="ion-ios-arrow-right"></i><a href="{{url('/our-services#water-resources')}}">6 - Water Resources</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>Al-Mubarak Int Group</strong>. All Rights Reserved
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div>

<!-- JavaScripts -->
<script src="{{ asset('js/app.js') }}"></script>
{{--<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>--}}

<!-- Vendor JS Files -->
<script src="{{asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("assets/vendor/jquery.easing/jquery.easing.min.js")}}"></script>
<script src="{{asset("assets/vendor/waypoints/jquery.waypoints.min.js")}}"></script>
<script src="{{asset("assets/vendor/php-email-form/validate.js")}}"></script>
<script src="{{asset("assets/vendor/owl.carousel/owl.carousel.min.js")}}"></script>
<script src="{{asset("assets/vendor/isotope-layout/isotope.pkgd.min.js")}}"></script>
<script src="{{asset("assets/vendor/venobox/venobox.min.js")}}"></script>
<script src="{{asset("assets/vendor/counterup/counterup.min.js")}}"></script>
<script src="{{asset("assets/vendor/aos/aos.js")}}"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/animations/2.1/js/animations.min.js"></script>--}}

<!-- Template Main JS File -->
<script src="{{asset("assets/js/main.js")}}"></script>

@yield('script')

</body>

</html>

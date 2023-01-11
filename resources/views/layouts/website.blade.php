<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') || {{ config('app.name', 'Laravel') }} </title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('theme/images/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('theme/css/plugins/material-design-iconic-font.min.css') }}">

    <style>
        .best__service .icon {
            background: rgba(0, 0, 0, 0) url("theme/images/icons/bg.png") no-repeat scroll left top;
        }

        .bg-image--1 {
            background-image: url("theme/images/bg/1.jpg") !important;
        }
    </style>
    @vite(['resources/sass/app.scss'])
</head>

<body>
    <!-- Main wrapper -->
    <div class="wrapper" id="wrapper">
        <!-- Header Area Start -->
        <header id="header-area" class="header-area">
            <div class="container">
                <div class="row align-items-center d-none d-lg-flex">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('theme/images/logo/logo.png') }}" alt="voopo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <nav class="mainmenu__nav">
                            <ul class="mainmenu">
                                <li>
                                    <a class="@if (request()->routeIs('homepage')) active @endif"
                                        href="{{ route('homepage') }}">Home</a>
                                </li>
                                <li>
                                    <a class="@if (request()->routeIs('about_page')) active @endif"
                                        href="{{ route('about_page') }}">About</a>
                                </li>
                                <li>
                                    <a class="@if (request()->routeIs('services_page')) active @endif"
                                        href="{{ route('services_page') }}">Services</a>
                                </li>
                                <li>
                                    <a class="@if (request()->routeIs('work_page')) active @endif"
                                        href="{{ route('work_page') }}">Working</a>
                                </li>
                                <li>
                                    <a class="@if (request()->routeIs('faq_page')) active @endif"
                                        href="{{ route('faq_page') }}">FAQS</a>
                                </li>
                                <li>
                                    <a class="@if (request()->routeIs('contact_page')) active @endif"
                                        href="{{ route('contact_page') }}">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3">
                        <div class="header__btn">
                            @auth
                                <a class="voopo__btn white__btn" href="{{ route('user.dashboard') }}">Dashboard</a>
                            @else
                                <a class="voopo__btn white__btn" href="{{ route('login') }}">Login</a>
                            @endauth
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div class="mobile-menu d-block d-lg-none">
                    <div class="logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('theme/images/logo/voopo.png') }}"
                                alt="voopo voip"></a>
                    </div>
                </div>
                <!-- Mobile Menu -->
            </div>
        </header>
        <!-- Header Area End -->

        @yield('content')

        <!-- Footer Area Start -->
        <footer id="footer" class="footer-area">
            <div class="footer__top bg--cart-2">
                <div class="container">
                    <div class="row">
                        <!-- Start Single Wedget -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="single__wedget">
                                <div class="logo">
                                    <a href="{{ url('/') }}"><img src="{{ asset('theme/images/logo/logo.png') }}"
                                            alt="voip"></a>
                                </div>
                                <div class="content">
                                    <p>PhoneLocally makes business communication easier by providing highly customizable
                                        cloud-based contact center solutions. Our innovative tools can be tailored to
                                        meet your unique business needs.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Wedget -->
                        <!-- Start Single Wedget -->
                        <div class="col-lg-2 offset-lg-1 col-md-6 col-sm-6 col-12 xs__mt--40">
                            <div class="single__wedget">
                                <h2 class="ft__title">Help Line</h2>
                                <ul class="ft__contact__link">
                                    <li><a href="#">Cloud Phone Service</a></li>
                                    <li><a href="#">Media Relation</a></li>
                                    <li><a href="#">Business Program</a></li>
                                    <li><a href="#">Home Service</a></li>
                                    <li><a href="#">Service Guide</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Wedget -->
                        <!-- Start Single Wedget -->
                        <div class="col-lg-2 offset-lg-1 col-md-6 col-sm-6 col-12 sm__mt--40 md__mt--40">
                            <div class="single__wedget">
                                <h2 class="ft__title">Voopo Info</h2>
                                <ul class="ft__contact__link">
                                    <li><a href="#">Why Voopo</a></li>
                                    <li><a href="#">Voopo Pricing</a></li>
                                    <li><a href="#">VoIP Features</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">About us</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Wedget -->
                        <!-- Start Single Wedget -->
                        <div class="col-lg-2 offset-lg-1 col-md-6 col-sm-6 col-12 sm__mt--40 md__mt--40">
                            <div class="single__wedget">
                                <h2 class="ft__title">Resources</h2>
                                <ul class="ft__contact__link">
                                    <li><a href="#">Voopo Support</a></li>
                                    <li><a href="#">Customer Center</a></li>
                                    <li><a href="#">Blogs</a></li>
                                    <li><a href="#">Home Service</a></li>
                                    <li><a href="#">Live Chat</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Wedget -->
                    </div>
                </div>
            </div>
            <div class="copyright bg--cart-3">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="copyright__inner">
                                <p>Copyright © All right reseved</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="ft__social__link">
                                <ul class="social-icon">
                                    <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                                    <li><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->
    </div>
    <!-- Main wrapper End -->

    <!-- JS Files -->
    <script src="{{ asset('theme/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('theme/js/vendor/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('theme/js/popper.min.js') }}"></script>
    <script src="{{ asset('theme/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('theme/js/plugins.js') }}"></script>
    <script src="{{ asset('theme/js/active.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script type="module">
        import * as Turbo from 'https://cdn.skypack.dev/@hotwired/turbo';
    </script>
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
        data-turbolinks-eval="false" data-turbo-eval="false"></script> --}}
    {{-- @vite(['resources/js/app.js']) --}}
    @stack('scripts')
</body>

</html>

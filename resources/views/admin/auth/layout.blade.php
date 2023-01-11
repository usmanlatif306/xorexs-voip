<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') || {{ config('app.name', 'Laravel') }}</title>
    <!-- Favicon icon -->

    <link rel="icon" href="{{ asset('theme/images/favicon.png') }}" type="image/x-icon" />
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet" />
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('administration/css/bootstrap/css/bootstrap.min.css') }}" />

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('administration/icon/font-awesome/css/font-awesome.min.css') }}" />
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('administration/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('administration/css/custom.css') }}" />
    @vite(['resources/js/app.js'])
</head>

<body themebg-pattern="theme1">
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <img src="{{ asset('administration/images/logo.png') }}" alt="logo.png" />
                    </div>
                    <!-- Authentication card start -->
                    @yield('content')
                </div>
                <!-- end of form -->
            </div>
            <!-- end of col-sm-12 -->
        </div>
        <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    <!-- Required Jquery -->
    <script type="text/javascript" src="{{ asset('administration/js/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('administration/js/bootstrap/js/bootstrap.min.js ') }}"></script>
    <!-- custom js -->
    <script type="text/javascript" src="{{ asset('administration/js/script.js') }}"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    @php
        if (setting('show_app_name_in_title') === 'yes') {
            $sub_title = ' ' . setting('title_separator') . ' ' . setting('app_name');
        } else {
            $sub_title = '';
        }
    @endphp
    <title>@yield('title'){{ $sub_title }}</title>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('theme/images/favicon.png') }}" type="image/x-icon" />
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet" />
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('administration/css/bootstrap/css/bootstrap.min.css') }}" />
    <!-- waves.css -->
    <link rel="stylesheet" href="{{ asset('administration/pages/waves/css/waves.min.css') }}" type="text/css"
        media="all" />
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('administration/icon/themify-icons/themify-icons.css') }}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('administration/icon/font-awesome/css/font-awesome.min.css') }}" />
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('administration/css/jquery.mCustomScrollbar.css') }}" />
    <!-- am chart export.css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
        media="all" />
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('administration/css/style.css') }}" />
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('administration/css/custom.css') }}" />
    @vite(['resources/js/app.js'])
    @livewireStyles
</head>

<body>
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
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            @include('layouts.admin_header')

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    @include('layouts.admin_sidebar')
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        @yield('breadcrumbs')
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        @yield('content')
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Required Jquery -->
    <script type="text/javascript" src="{{ asset('administration/js/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('administration/js/jquery-ui/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('administration/js/popper.js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('administration/js/bootstrap/js/bootstrap.min.js ') }}"></script>
    <script type="text/javascript" src="{{ asset('administration/pages/widget/excanvas.js ') }}"></script>
    <!-- waves js -->
    <script src="{{ asset('administration/pages/waves/js/waves.min.js') }}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('administration/js/jquery-slimscroll/jquery.slimscroll.js ') }}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{ asset('administration/js/modernizr/modernizr.js ') }}"></script>
    <!-- slimscroll js -->
    <script type="text/javascript" src="{{ asset('administration/js/SmoothScroll.js') }}"></script>
    <script src="{{ asset('administration/js/jquery.mCustomScrollbar.concat.min.js ') }}"></script>
    <!-- Chart js -->
    <script type="text/javascript" src="{{ asset('administration/js/chart.js/Chart.js') }}"></script>
    <!-- amchart js -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="{{ asset('administration/pages/widget/amchart/gauge.js') }}"></script>
    <script src="{{ asset('administration/pages/widget/amchart/serial.js') }}"></script>
    <script src="{{ asset('administration/pages/widget/amchart/light.js') }}"></script>
    <script src="{{ asset('administration/pages/widget/amchart/pie.min.js') }}"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <!-- menu js -->
    <script src="{{ asset('administration/js/pcoded.min.js') }}"></script>
    <script src="{{ asset('administration/js/vertical-layout.min.js ') }}"></script>
    <!-- custom js -->
    <script type="text/javascript" src="{{ asset('administration/pages/dashboard/custom-dashboard.js') }}"></script>
    <script type="text/javascript" src="{{ asset('administration/js/script.js') }}"></script>
    @stack('scripts')
    <script>
        function confirmDelete(type, id) {
            if (confirm('Are you sure?')) {
                document.getElementById(`${type}-${id}`).submit();
            }
        }

        // close model
        function closeModel(model) {
            $(`#${model}`).modal('hide');
        }
    </script>
    @livewireScripts
</body>

</html>

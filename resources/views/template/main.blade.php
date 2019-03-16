<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title','Mitsubishi Motor : Education Academy สถาบันการศึกษาและฝึกอบรม')</title> 
    <!-- Perfect Scrollbar -->
    <link type="text/css" href="{{asset('assets/vendor/perfect-scrollbar.css')}}" rel="stylesheet">
    <!-- Material Design Icons -->
    <link type="text/css" href="{{asset('assets/css/material-icons.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets/css/material-icons.rtl.css')}}" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link type="text/css" href="{{asset('assets/css/fontawesome.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets/css/fontawesome.rtl.css')}}" rel="stylesheet">
    <!-- App CSS -->
    <link type="text/css" href="{{asset('assets/css/app.css')}}" rel="stylesheet"> 
    <link rel="stylesheet" href="{{asset('webfontkit/stylesheet.css')}}" type="text/css" />
    <style type="text/css">
        *{font-family: mmcregular;}
    </style>

    @yield('css')
</head>

<body class=" fixed-layout"> 
    <div class="preloader">
        <div class="sk-double-bounce">
            <div class="sk-child sk-double-bounce1"></div>
            <div class="sk-child sk-double-bounce2"></div>
        </div>
    </div> 
    
    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">
        <!-- Header -->
        <div id="header" class="mdk-header bg-dark js-mdk-header m-0" data-fixed data-effects="waterfall">
            <div class="mdk-header__content">
                @include('template.navbar')
            </div>
        </div>
        <!-- // END Header --> 
        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content d-flex flex-column"> 
            <div class="page ">
                <div class="container page__container">
                    @yield('breadcrumb') 
                    @yield('content')  
                </div> 
                <div class="container page__container">
                    <div class="footer">
                        Copyright &copy; 2019 Things Analytic Co.,Ltd.
                    </div>
                </div>
            </div>
        </div>
        <!-- // END Header Layout Content -->
    </div>
    <!-- // END Header Layout -->
    @include('template.navleft')
    <!-- jQuery -->
    <script src="{{asset('assets/vendor/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('assets/vendor/popper.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap.min.js')}}"></script>
    <!-- Perfect Scrollbar -->
    <script src="{{asset('assets/vendor/perfect-scrollbar.min.js')}}"></script>
    <!-- MDK -->
    <script src="{{asset('assets/vendor/dom-factory.js')}}"></script>
    <script src="{{asset('assets/vendor/material-design-kit.js')}}"></script>
    <!-- App JS -->
    <script src="{{asset('assets/js/app.js')}}"></script>
    <!-- Highlight.js -->
    <script src="{{asset('assets/js/hljs.js')}}"></script>
    <!-- Global Settings -->
    <script src="{{asset('assets/js/settings.js')}}"></script>
    <!-- Moment.js -->
    <script src="{{asset('assets/vendor/moment.min.js')}}"></script>
    <script src="{{asset('assets/vendor/moment-range.min.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{asset('assets/vendor/Chart.min.js')}}"></script>
    <!-- UI Charts Page JS -->
    <script src="{{asset('assets/js/chartjs-rounded-bar.js')}}"></script>
    <script src="{{asset('assets/js/chartjs.js')}}"></script>
    <!-- List.js -->
    <script src="{{asset('assets/vendor/list.min.js')}}"></script>
    <script src="{{asset('assets/js/list.js')}}"></script>
    @yield('js')
</body>
</html>
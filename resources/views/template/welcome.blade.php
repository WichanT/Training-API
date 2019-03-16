<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>13B: Nursing Care</title>
    <!-- Material Design Icons -->
    <link type="text/css" href="{{asset('assets/css/material-icons.css')}}" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link type="text/css" href="{{asset('assets/css/fontawesome.css')}}" rel="stylesheet">
    <!-- App CSS -->
    <link type="text/css" href="{{asset('assets/css/app.css')}}" rel="stylesheet">
</head>

<body class="layout-sticky-subnav learnplus fixed-layout">
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
                <nav class="navbar navbar-expand-md navbar-light bg-light m-0 p-md-0">
                    <div class="container-fluid">
                        <!-- Brand -->
                        <a href="{{url('/')}}" class="navbar-brand">
                            <img src="{{asset('assets/images/logo/primary.svg')}}" class="mr-2" alt="Nursing Care" />
                            13B Nursing Care
                        </a>
                        <button class="navbar-toggler navbar-toggler-right mr-0" data-toggle="collapse" data-target="#navbarsExample03" type="button">
                            <span class="navbar-toggler-icon"></span>
                        </button> 
                        <div class="navbar-collapse collapse" id="navbarsExample03">
                            <ul class="nav navbar-nav ml-sm-2 flex-nowrap mr-auto" style="white-space: nowrap;"> 
                            </ul>
                            <ul class="nav navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{url('/')}}">หน้าหลัก</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('/')}}" class="nav-link">คุณสมบัติของระบบ</a>
                                </li> 
                            </ul>
                            <ul class="nav navbar-nav flex-nowrap" style="white-space: nowrap;"> 
                                <li class="nav-item pt-3 pt-sm-0">
                                @auth
                                    <a href="{{url('/home')}}" class="btn btn-primary btn-block btn-rounded">
                                        จัดการข้อมูล <i class="material-icons ml-2">person</i>
                                    </a>
                                @else 
                                    <a href="{{url('/login')}}" class="btn btn-success btn-block btn-rounded">
                                        เข้าสู่ระบบ <i class="material-icons ml-2">person</i>
                                    </a>
                                @endauth
                                </li>
                            </ul>
                        </div>
                        <!-- // END Collapse -->
                    </div>
                </nav>
            </div>
        </div>
        <!-- // END Header -->

        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content">
            <div class="page">
                @yield('content')
                <div class="container page__container">
                    <div class="footer">
                        Copyright &copy; 2019 <a href="http://www.csit.rbru.ac.th" target="_blank">Computer Science and Information Technology</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- // END Header Layout Content -->

    </div>
    <!-- // END Header Layout -->

    <!-- jQuery -->
    <script src="assets/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap.min.js"></script>

    <!-- MDK -->
    <script src="assets/vendor/dom-factory.js"></script>
    <script src="assets/vendor/material-design-kit.js"></script>

    <!-- App JS -->
    <script src="assets/js/app.js"></script>
    <script src="assets/js/hljs.js"></script>

</body>
</html>
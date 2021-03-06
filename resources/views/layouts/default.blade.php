<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Crandell Design Resource Library</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <!--<link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">-->

    <!-- Waves Effect Css -->
    <!--<link href="../../plugins/node-waves/waves.css" rel="stylesheet" />-->

    <!-- Animation Css -->
    <!--<link href="../../plugins/animate-css/animate.css" rel="stylesheet" />-->

    <!-- Custom Css -->
    <!--<link href="../../css/style.css" rel="stylesheet">-->

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <!--<link href="../../css/themes/all-themes.css" rel="stylesheet" />-->
    <link rel="stylesheet" href="{{ mix('css/stylesheet.css') }}">
    @yield('head')
</head>

<body class="theme-green">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <!--<a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>-->
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="../../index.html">Crandell Design Resource Library</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            @if (Auth::check())
            <!-- User Info -->
            <div class="user-info">
                <!--<div class="image">

                    <img src="../../images/user.png" width="48" height="48" alt="User" />
                </div>-->
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            @endif
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="{{(isset($active_page)) && $active_page=='home'?'active':''}}">
                        <a href="{{(App::environment('local'))?url('/nuviewnutrition'):url('/')}}">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="{{(isset($active_page)) && $active_page=='writing-a-post'?'active':''}}">
                        <a href="{{(App::environment('local'))?url('/nuviewnutrition/'):url('/')}}/writing-a-post">
                            <i class="material-icons">content_copy</i>
                            <span>Writing a Post</span>
                        </a>
                    </li>
                    <li class="{{(isset($active_page)) && $active_page=='social-media'?'active':''}}">
                        <a href="{{(App::environment('local'))?url('/nuviewnutrition/'):url('/')}}/social-media">
                            <i class="material-icons">content_copy</i>
                            <span>Sharing on Social Media</span>
                        </a>
                    </li>
                    <li class="{{(isset($active_page)) && $active_page=='dos-and-donts'?'active':''}}">
                        <a href="{{(App::environment('local'))?url('/nuviewnutrition/'):url('/')}}/dos-and-donts">
                            <i class="material-icons">content_copy</i>
                            <span>Do's and Don'ts</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; {{date('Y')}} <a href="http://www.crandelldesign.com" target="_blank">Crandell Design</a>.
                </div>
                {{--<div class="version">
                    <b>Version: </b> 1.0.4
                </div>--}}
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        @yield('content')
    </section>

    <!-- Jquery Core Js -->
    <!--<script src="../../plugins/jquery/jquery.min.js"></script>-->

    <!-- Bootstrap Core Js -->
    <!--<script src="../../plugins/bootstrap/js/bootstrap.js"></script>-->

    <!-- Select Plugin Js -->
    <!--<script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>-->

    <!-- Slimscroll Plugin Js -->
    <!--<script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>-->

    <!-- Waves Effect Plugin Js -->
    <!--<script src="../../plugins/node-waves/waves.js"></script>-->

    <!-- Custom Js -->
    <!--<script src="../../js/admin.js"></script>-->

    <!-- Demo Js -->
    <!--<script src="../../js/demo.js"></script>-->
    <script src="{{ mix('js/default.js') }}"></script>
    @yield('scripts')
</body>

</html>

<!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
    // Left Side Of Navbar
    <ul class="navbar-nav mr-auto">

    </ul>

    // Right Side Of Navbar 
    <ul class="navbar-nav ml-auto">
        // Authentication Links 
        @guest
        @if (Route::has('login'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @endif

        @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
        @endguest
    </ul>
</div> -->


<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logo/logo1.png') }}">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" /> -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"> -->
    <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> -->
    <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/metisMenu.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/slicknav.min.css') }}" rel="stylesheet">
    <!-- others css -->
    <link href="{{ asset('assets/css/typography.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/default-css.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/adminlte_css/adminlte.css') }}" rel="stylesheet" />
    <!-- modernizr css -->
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>

    <!-- <link href="~/lib/DataTables/datatables.css" rel="stylesheet" /> -->
</head>

<body>
    <div id="app">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please upgrade your browser to improve your experience.</p>
        <![endif]-->
        <!-- spinner start -->
        <div class="loadingDiv-parent">
            <div class="loadingDiv">
                <img style="height:50px; width:50px" src="{{ asset('assets/images/spinner/default.gif') }}" />
                <h6 style="font-size: x-small;">Please Wait..</h6>
            </div>
        </div>
        <!-- spinner end -->
        <!-- Start Scroll to Top Button-->
        <a id="button"></a>
        <!-- End Scroll to Top Button-->
        <!-- main wrapper start -->
        <div class="horizontal-main-wrapper">
            <!-- main header area start -->
            <div class="mainheader-area" data-background-color="dark">
                <div class="row align-items-center">
                    @guest
                    @if (Route::has('login'))
                    <ul>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    </ul>
                    @endif

                    @if (Route::has('register'))
                    <ul>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    </ul>
                    @endif
                    @endguest
                </div>
            </div>
            <!-- main header area end -->
        </div>
        <!-- main wrapper end -->
        <!-- page container area start -->
            <!-- main content area start -->
            <div class="main-content">
                <div class="row mt-md-1 mb-2">
                    @yield('content')
                </div>
            </div>
            <!-- main content area end -->
            <!-- footer area start-->
            <footer>
                <div class="footer-area">
                    <p> © 2021 <a href="#" target="_blank">Obasphere</a> Technologies Limited. All rights reserved | Designed by <a href="#" target="_blank">Obasphere</a>.</p>
                </div>
            </footer>
            <!-- footer area end-->
        <!-- page container area end -->
        <!-- offset area start -->
        <div class="offset-area">
            <div class="offset-close"><i class="ti-close"></i></div>
            <ul class="nav offset-menu-tab">
                <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
                <li><a data-toggle="tab" href="#settings">Settings</a></li>
            </ul>
            <div class="offset-content tab-content">
                <div id="activity" class="tab-pane fade in show active">
                    <div class="recent-activity">
                        <div class="timeline-task">
                            <div class="icon bg2">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Added</h4>
                                <span class="time"><i class="ti-time"></i>7 Minutes Ago</span>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur.
                            </p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg3">
                                <i class="fa fa-bomb"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Member waiting for you Attention</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                            </p>
                        </div>
                    </div>
                </div>
                <div id="settings" class="tab-pane fade">
                    <div class="offset-settings">
                        <h4>Customization</h4>
                        <div class="settings-list">
                            <!-- Start Change colour -->
                            <div class="s-sw-title">
                                <div class="custom-template">
                                    <h5>Theme</h5>
                                    <div class="custom-content">
                                        <div class="switcher">
                                            <div class="switch-block">
                                                <p>Choose preferred topbar colour</p>
                                                <div class="btnSwitch">
                                                    <button type="button" class="selected changeMainHeaderColor" data-color="dark"></button>
                                                    <button type="button" class="changeMainHeaderColor" data-color="black"></button>
                                                    <button type="button" class="changeMainHeaderColor" data-color="light-blue"></button>
                                                    <button type="button" class="changeMainHeaderColor" data-color="blue"></button>
                                                    <button type="button" class="changeMainHeaderColor" data-color="green"></button>
                                                    <button type="button" class="changeMainHeaderColor" data-color="red"></button>
                                                </div>
                                            </div>
                                            <div class="switch-block">
                                                <p>Choose preferred background colour</p>
                                                <div class="btnSwitch">
                                                    <button type="button" class="changeBackgroundColor" data-color="bg2"></button>
                                                    <button type="button" class="changeBackgroundColor" data-color="bg1"></button>
                                                    <button type="button" class="changeBackgroundColor" data-color="bg3"></button>
                                                    <button type="button" class="changeBackgroundColor selected" data-color="bg4"></button>
                                                    <button type="button" class="changeBackgroundColor" data-color="bg5"></button>
                                                </div>
                                            </div>
                                            <div class="switch-block">
                                                <p>Choose preferred sidebar colour</p>
                                                <div class="btnSwitch">
                                                    <button type="button" class="changeSidebarColor" data-color="bgs1"></button>
                                                    <button type="button" class="changeSidebarColor" data-color="bgs3"></button>
                                                    <button type="button" class="changeSidebarColor selected" data-color="bgs2"></button>
                                                    <button type="button" class="changeSidebarColor" data-color="bgs4"></button>
                                                    <button type="button" class="changeSidebarColor" data-color="bgs5"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Change colour -->
                            <div class="s-settings">
                                <div class="s-sw-title">
                                    <h5>Notifications</h5>
                                    <div class="s-swtich">
                                        <input type="checkbox" id="switch1" />
                                        <label for="switch1">Toggle</label>
                                    </div>
                                </div>
                                <p>Use checkboxes when looking for yes or no answers.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- offset area end -->

        <!-- jquery latest version -->
        <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
        <!-- bootstrap 4 js -->
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>
        <!-- others plugins -->
        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/js/scripts.js') }}"></script>
        <script src="{{ asset('assets/js/site.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </div>
</body>

</html>
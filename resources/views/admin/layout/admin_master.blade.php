<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Bootstrap Based Admin Template - Material Design</title>

    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('admin-frontend/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset('admin-frontend/plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('admin-frontend/plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{asset('admin-frontend/plugins/morrisjs/morris.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('admin-frontend/css/style.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('admin-frontend/css/themes/all-themes.css')}}" rel="stylesheet" />
    <link href="{{asset('admin-frontend/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />

    @stack('css')

    <style>
        /* CSS createPost */
        .dashboard-stat-list1 {
            list-style: none;
            padding-left: 0;
            float: left }
            .dashboard-stat-list1 li {
                padding: 16px 0 0 0;
                display: inline-block;}
                .dashboard-stat-list1 a {
                text-decoration: none;
                }
                .dashboard-stat-list1 span {
                padding: 0 10px 0 10px;
                }
                .dashboard-stat-list1 li small {
                font-size: 8px; }

        .nopadding-left {
            padding-left: 0!important;
        }

        .bootstrap-select.btn-group .dropdown-toggle .caret {
            right: -6px;
        }
        .bootstrap-select.btn-group:not(.input-group-btn), .bootstrap-select.btn-group[class*="col-"] {
            border-radius: 3px;
        }
        .btn:not(.btn-link):not(.btn-circle) {
            border-radius: 7px;
            border: 1px solid #9E9E9E;
        }
        .form-control {
            background-color: unset;
        }

        /* CSS postCategories */
        .bootstrap-select.btn-group .dropdown-toggle .caret {
            right: -6px;
        }
        .bootstrap-select.btn-group:not(.input-group-btn), .bootstrap-select.btn-group[class*="col-"] {
            border-radius: 3px;
        }
        .btn:not(.btn-link):not(.btn-circle) {
            border-radius: 7px;
            border: 1px solid #9E9E9E;
        }
        .form-control {
            background-color: unset;
        }
    </style>
</head>

<body class="theme-red">
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
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="#" class="bars"></a>
                <a class="navbar-brand" href="#">Máy bơm Bảo Long - Quản lý trang Web</a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="#" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>12 new members joined</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="icon-circle bg-cyan">
                                                <i class="material-icons">add_shopping_cart</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>4 sales made</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="icon-circle bg-red">
                                                <i class="material-icons">delete_forever</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy Doe</b> deleted account</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="icon-circle bg-orange">
                                                <i class="material-icons">mode_edit</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy</b> changed name</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> commented your post</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">cached</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> updated status</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="icon-circle bg-purple">
                                                <i class="material-icons">settings</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Settings updated</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">flag</i>
                            <span class="label-count"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">TASKS</li>
                            <li class="body">
                                <ul class="menu tasks">
                                    <li>
                                        <a href="#">
                                            <h4>
                                                Footer display issue
                                                <small>32%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <h4>
                                                Make new buttons
                                                <small>45%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <h4>
                                                Create new dashboard
                                                <small>54%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <h4>
                                                Solve transition issue
                                                <small>65%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <h4>
                                                Answer GitHub questions
                                                <small>92%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right"><a href="#" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            @if(Auth::check())
            <div class="user-info">
                <div class="image">
                    <img src="/admin-frontend/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->username}}</div>
                    <div class="email">{{Auth::user()->email}}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right " style="width:200px">
                            <li><a href="#"><i class="material-icons">person</i>Thông tin tài khoản</a></li>
                            <li><a href="#"><i class="material-icons">group</i>Danh sách khách hàng</a></li>
                            <li><a href="#"><i class="material-icons">shopping_cart</i>Quản lý đơn hàng</a></li>
                            <li><a href="#"><i class="material-icons">star</i>Sản phẩm bán chạy</a></li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="#">
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                            <button type="submit" class="dropdown-item">Đăng xuất</button>
                                        </form>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endif
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">Danh mục quản lý</li>

                    <li>
                        <a href="home_admin">
                            <i class="material-icons">assessment</i>
                            <span>Bảng tin</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="menu-toggle">
                            <i class="material-icons">image</i>
                            <span>Media</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{route('add_gallery')}}" alt="">
                                    <span>Thư viện</span>
                                </a>

                            </li>
                                                   </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-toggle">
                            <i class="material-icons">fiber_new</i>
                            <span>Bài viết tin tức</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{route('news.index')}}" alt="">
                                    <span>Tất cả bài viết</span>
                                </a>

                            </li>
                            <li>
                                <a href="{{route('news.create')}}" alt="">
                                    <span>Viết bài mới </span>
                                </a>

                            </li>
                            <li>
                                <a href="{{route('news.create_catgr')}}" alt="">
                                    <span>Chuyên mục tin tức </span>
                                </a>

                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="#" class="menu-toggle">
                            <i class="material-icons">pages</i>
                            <span>Trang</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="all_pages">Danh sách các trang</a>
                            </li>
                            <li>
                                <a href="create_page">Thêm Trang Mới</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-toggle">
                        <span class="material-icons">inventory</span>
                        <span>Sản phẩm</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{route('products.index')}}">Tất cả sản phẩm</a>
                            </li>
                            <li>
                                <a href="{{route('products.create')}}">Thêm mới sản phẩm</a>
                            </li>
                            <li>
                                <a href="{{route('products.create_catgr')}}">Danh mục sản phẩm</a>
                            </li>

                            <li>
                                <a href="">Từ khóa</a>
                            </li>
                            <li>
                                <a href="">Thuộc tính</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="all_orders">
                            <i class="material-icons">description</i>
                            <span>Quản lý đơn hàng</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="menu-toggle">
                            <i class="material-icons">people</i>
                            <span>Thành viên</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="all_users">Danh sách người dùng</a>
                                <a href="create_user">Thêm thành viên</a>
                                <a href="profile_user">Hồ sơ</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="all_comments">
                            <i class="material-icons">chat_bubble</i>
                            <span>Phản hồi - Bình luận</span>
                        </a>
                    </li>
                {{-- End Menu --}}
                    {{-- <li>
                        <a href="#" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Forms</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/admin-frontend/pages/forms/basic-form-elements.html">Basic Form Elements</a>
                            </li>
                            <li>
                                <a href="/admin-frontend/pages/forms/advanced-form-elements.html">Advanced Form Elements</a>
                            </li>
                            <li>
                                <a href="/admin-frontend/pages/forms/form-examples.html">Form Examples</a>
                            </li>
                            <li>
                                <a href="/admin-frontend/pages/forms/form-validation.html">Form Validation</a>
                            </li>
                            <li>
                                <a href="/admin-frontend/pages/forms/form-wizard.html">Form Wizard</a>
                            </li>
                            <li>
                                <a href="/admin-frontend/pages/forms/editors.html">Editors</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="menu-toggle">
                            <i class="material-icons">pie_chart</i>
                            <span>Charts</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/admin-frontend/pages/charts/morris.html">Morris</a>
                            </li>
                            <li>
                                <a href="/admin-frontend/pages/charts/flot.html">Flot</a>
                            </li>
                            <li>
                                <a href="/admin-frontend/pages/charts/chartjs.html">ChartJS</a>
                            </li>
                            <li>
                                <a href="/admin-frontend/pages/charts/sparkline.html">Sparkline</a>
                            </li>
                            <li>
                                <a href="/admin-frontend/pages/charts/jquery-knob.html">Jquery Knob</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-toggle">
                            <i class="material-icons">content_copy</i>
                            <span>Example Pages</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/admin-frontend/pages/examples/profile.html">Profile</a>
                            </li>
                            <li>
                                <a href="/admin-frontend/pages/examples/sign-in.html">Sign In</a>
                            </li>
                            <li>
                                <a href="/admin-frontend/pages/examples/sign-up.html">Sign Up</a>
                            </li>
                            <li>
                                <a href="/admin-frontend/pages/examples/forgot-password.html">Forgot Password</a>
                            </li>
                            <li>
                                <a href="/admin-frontend/pages/examples/blank.html">Blank Page</a>
                            </li>
                            <li>
                                <a href="/admin-frontend/pages/examples/404.html">404 - Not Found</a>
                            </li>
                            <li>
                                <a href="/admin-frontend/pages/examples/500.html">500 - Server Error</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="menu-toggle">
                            <i class="material-icons">trending_down</i>
                            <span>Multi Level Menu</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#">
                                    <span>Menu Item</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Menu Item - 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="menu-toggle">
                                    <span>Level - 2</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="#">
                                            <span>Menu Item</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="menu-toggle">
                                            <span>Level - 3</span>
                                        </a>
                                        <ul class="ml-menu">
                                            <li>
                                                <a href="#">
                                                    <span>Level - 4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li> --}}
                    {{-- <li>
                        <a href="/admin-frontend/pages/changelogs.html">
                            <i class="material-icons">update</i>
                            <span>Changelogs</span>
                        </a>
                    </li> --}}
                    <li class="header">LABELS</li>
                    <li>
                        <a href="#">
                            <i class="material-icons col-red">donut_large</i>
                            <span>Important</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons col-amber">donut_large</i>
                            <span>Warning</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons col-light-blue">donut_large</i>
                            <span>Information</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2020 - 2021 <a href="#">XuePC Computer</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 0.0.1
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
        <!-- End Header -->

@yield('content')


<!-- Jquery Core Js -->
<script src="{{asset('admin-frontend/plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap Core Js -->
<script src="{{asset('admin-frontend/plugins/bootstrap/js/bootstrap.js')}}"></script>

<!-- Select Plugin Js -->
<script src="{{asset('admin-frontend/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

<!-- Slimscroll Plugin Js -->
<script src="{{asset('admin-frontend/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{asset('admin-frontend/plugins/node-waves/waves.js')}}"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="{{asset('admin-frontend/plugins/jquery-countto/jquery.countTo.js')}}"></script>

<!-- Morris Plugin Js -->
<script src="{{asset('admin-frontend/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('admin-frontend/plugins/morrisjs/morris.js')}}"></script>

<!-- ChartJs -->
<script src="{{asset('admin-frontend/plugins/chartjs/Chart.bundle.js')}}"></script>

<!-- Flot Charts Plugin Js -->
<script src="{{asset('admin-frontend/plugins/flot-charts/jquery.flot.js')}}"></script>
<script src="{{asset('admin-frontend/plugins/flot-charts/jquery.flot.resize.js')}}"></script>
<script src="{{asset('admin-frontend/plugins/flot-charts/jquery.flot.pie.js')}}"></script>
<script src="{{asset('admin-frontend/plugins/flot-charts/jquery.flot.categories.js')}}"></script>
<script src="{{asset('admin-frontend/plugins/flot-charts/jquery.flot.time.js')}}"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="{{asset('admin-frontend/plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>

<!-- Custom Js -->
<script src="{{asset('admin-frontend/js/admin.js')}}"></script>
<script src="{{asset('admin-frontend/js/pages/index.js')}}"></script>

<!-- Demo Js -->
<script src="{{asset('admin-frontend/js/demo.js')}}"></script>

{{-- CKEditor --}}
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script>
    var content_post = document.getElementById('content')
    CKEDITOR.replace('content',{
	filebrowserBrowseUrl : 'responsive_filemanager/filemanager/dialog.php?type=2&editor=ckeditor&akey=webBLTuanAnh&fldr=',
	filebrowserUploadUrl : 'responsive_filemanager/filemanager/dialog.php?type=2&editor=ckeditor&akey=webBLTuanAnh&fldr=',
	filebrowserImageBrowseUrl : 'responsive_filemanager/filemanager/dialog.php?type=1&editor=ckeditor&akey=webBLTuanAnh&fldr='
});
var description_post = document.getElementById('description')

    CKEDITOR.replace('description',{
	filebrowserBrowseUrl : 'responsive_filemanager/filemanager/dialog.php?type=2&editor=ckeditor&akey=webBLTuanAnh&fldr=',
	filebrowserUploadUrl : 'responsive_filemanager/filemanager/dialog.php?type=2&editor=ckeditor&akey=webBLTuanAnh&fldr=',
	filebrowserImageBrowseUrl : 'responsive_filemanager/filemanager/dialog.php?type=1&editor=ckeditor&akey=webBLTuanAnh&fldr='
});
</script>
        <script src="{{asset('admin-frontend/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>


@yield('js')
</body>
</html>

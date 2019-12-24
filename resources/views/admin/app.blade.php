<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title Page-->
    <title>Admin</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('themes/admin/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('themes/admin/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('themes/admin/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('themes/admin/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('themes/admin/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('themes/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('themes/admin/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('themes/admin/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('themes/admin/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('themes/admin/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('themes/admin/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('themes/admin/css/theme.css') }}" rel="stylesheet" media="all">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">

    <link href="{{ asset('themes/admin/css/custom.scss') }}" rel="stylesheet" media="all">

</head>

<body class="">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="{{ route('admin-home') }}">
                            <img src="{{ asset('/admin/images/icon/logo.png') }}" alt="Bi Shop" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="active">
                            <a class="js-arrow" href="">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tasks"></i>Quản lý</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="{{ route('mn-category.index') }}">Danh mục</a>
                                </li>
                                <li>
                                    <a href="{{ route('mn-categoryChild-index') }}">Danh mục con</a>
                                </li>
                                <li>
                                    <a href="{{ route('mn-categoryDetail-index') }}">Loại</a>
                                </li>
                                <li>
                                    <a href="{{ route('mn-product.index') }}">Quản lý sản phẩm</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="">
                                <i class="fas fa-calendar-alt"></i>Quản lý đơn hàng</a>
                        </li>
                        <li>
                            <a href=".." target="_blank">
                                <i class="fab fa-chrome"></i>Trang web</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="{{ route('admin-home') }}">
                    <img src="{{ asset('themes/admin/images/icon/logo.png') }}" alt="Bi Shop" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active">
                            <a class="js-arrow" href="">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tasks"></i>Quản lý</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="{{ route('mn-category.index') }}">Danh mục</a>
                                </li>
                                <li>
                                    <a href="{{ route('mn-categoryChild-index') }}">Danh mục con</a>
                                </li>
                                <li>
                                    <a href="{{ route('mn-categoryDetail-index') }}">Loại</a>
                                </li>
                                <li>
                                    <a href="{{ route('mn-product.index') }}">Quản lý sản phẩm</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="">
                                <i class="fas fa-calendar-alt"></i>Quản lý đơn hàng</a>
                        </li>
                        <li>
                            <a href=".." target="_blank">
                                <i class="fab fa-chrome"></i>Trang web</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
{{--                                 <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button> --}}
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="{{ asset('themes/admin/images/icon/avatar-01.jpg') }}" alt="Admin Bi" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="{{ route('admin-home') }}">{{ Auth::user()->name }}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="{{ asset('themes/admin/images/icon/avatar-01.jpg') }}" alt="Admin Bi" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="{{ route('admin-home') }}">{{ Auth::user()->name }}</a>
                                                    </h5>
                                                    <span class="email">{{ Auth::user()->email }}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                <i class="zmdi zmdi-power"></i>Đăng xuất</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
            <!-- MAIN CONTENT-->
            <div class="main-content">
                @yield('content')
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('themes/admin/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('themes/admin/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('themes/admin/vendor/slick/slick.min.js') }}"></script>
    <script src="{{ asset('themes/admin/vendor/wow/wow.min.js') }}"></script>
    {{-- <script src="{{ asset('themes/admin/vendor/animsition/animsition.min.js') }}"></script> --}}
    <script src="{{ asset('themes/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('themes/admin/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('themes/admin/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('themes/admin/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('themes/admin/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>/
    <script src="{{ asset('themes/admin/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('themes/admin/vendor/select2/select2.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>

    <!-- Main JS-->
    <script src="{{ asset('themes/admin/js/main.js') }}"></script>

    @stack('scripts')

</body>

</html>
<!-- end document-->

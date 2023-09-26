<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>DR. Sepatuku - Page Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="{{ url('../backend/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('../backend/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet"
        media="all">
    <link href="{{ url('../backend/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet"
        media="all">
    <link href="{{ url('../backend/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet"
        media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ url('../backend/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="{{ url('../backend/bootstrap-5.1.3-dist\css\bootstrap.min.css') }}">
    <link rel="shortcut icon" href="{{ url('../backend/images/logo/logo_dr_sepatuku.jpeg') }}" type="image/x-icon">

    <!-- Vendor CSS-->
    <link href="{{ url('../backend/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="../backendvendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet"
        media="all">
    <link href="../backendvendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../backendvendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="{{ url('../backend/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('../backend/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('../backend/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet"
        media="all">

    <!-- Main CSS-->
    <link href="{{ url('../backend/css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body class="animsition">


    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <img src="{{ url('../backend/images/logo/logo_dr_sepatuku.jpeg') }}"
                            style="width: 60px; position:relative; left: 90px;">
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"><i class="fas fa-bars"></i></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                            </a>
                        </li>
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-building"></i>Cabang <i class="fas fa-caret-down"></i></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html"><i class="fas fa-plus"></i>Tambah Data</a>
                                </li>
                                <li>
                                    <a href="login.html"><i class="fas fa-user"></i>Karyawan</a>
                                </li>
                                <li>
                                    <a href="{{ url('/jadwal-absen') }}"><i class="fas fa-clock"></i>Jadwal Absen</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-calendar-alt"></i>Booking <i class="fas fa-caret-down"></i></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html"><i class="fas fa-plus"></i>Tambah Data</a>
                                </li>
                                <li>
                                    <a href="login.html"><i class="fas fa-user"></i>Customer</a>
                                </li>
                                <li>
                                    <a href="register.html"><i class="fas fa-file"></i>Invoice</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-box"></i>Layanan <i class="fas fa-caret-down"></i></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html"><i class="fas fa-plus"></i>Tambah Data</a>
                                </li>
                                <li>
                                    <a href="register.html"><i class="fas fa-cube"></i>Detail Layanan</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Laporan <i class="fas fa-caret-down"></i></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html"><i class="fas fa-users"></i>Kehadiran</a>
                                </li>
                                <li>
                                    <a href="register.html"><i class="fas fa-dollar"></i>Penghasilan</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{ url('../backend/images/logo/logo_dr_sepatuku.jpeg') }}"
                        style="width: 60px; position:relative; left: 90px;">
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class=" has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard

                            </a>
                        </li>
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-building"></i>Cabang <i class="fas fa-caret-down"></i></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html"><i class="fas fa-plus"></i>Tambah Data</a>
                                </li>
                                <li>
                                    <a href="login.html"><i class="fas fa-user"></i>Karyawan</a>
                                </li>
                                <li>
                                    <a href="{{ url('/jadwal-absen') }}"><i class="fas fa-clock"></i>Jadwal Absen</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-calendar-alt"></i>Booking <i class="fas fa-caret-down"></i></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html"><i class="fas fa-plus"></i>Tambah Data</a>
                                </li>
                                <li>
                                    <a href="login.html"><i class="fas fa-user"></i>Customer</a>
                                </li>
                                <li>
                                    <a href="register.html"><i class="fas fa-file"></i>Invoice</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-box"></i>Layanan <i class="fas fa-caret-down"></i></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html"><i class="fas fa-plus"></i>Tambah Data</a>
                                </li>
                                <li>
                                    <a href="register.html"><i class="fas fa-cube"></i>Detail Layanan</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Laporan <i class="fas fa-caret-down"></i></a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html"><i class="fas fa-users"></i>Karyawan</a>
                                </li>
                                <li>
                                    <a href="register.html"><i class="fas fa-dollar"></i>Penghasilan</a>
                                </li>
                            </ul>
                        </li>
                    </ul>

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
                                <input class="au-input au-input--xl" type="text" name="search"
                                    placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
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
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image"></div>
                                        <div class="content">
                                            <a class="js-acc-btn">{{ $user_name }}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image"></div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <span>{{ $user_name }}</span>
                                                    </h5>
                                                    <span class="email">{{ $user_mail }}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="{{ url('/logout/user') }}">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
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
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Jadwal Absen</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue" data-toggle="modal"
                                        data-target="#tambahJadwalAbsen">
                                        <i class="zmdi zmdi-plus"></i>Tambah Jadwal Absen</button>
                                </div>
                            </div>
                        </div>


                        {{-- conten --}}

                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>

                                                <th>Tanggal</th>
                                                <th>Jam Masuk</th>
                                                <th>Jam Keluar</th>
                                                <th>Department</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($jadwal_absen as $ja)
                                                

                                                {{-- akhir modal --}}
                                                <tr class="tr-shadow">

                                                    <td>{{ $ja->tanggal }}</td>
                                                    <td>
                                                        <span class="block-email">{{ substr($ja->jam_masuk, 0, 5) }}
                                                            WIB</span>
                                                    </td>
                                                    <td class="desc"> {{ substr($ja->jam_keluar, 0, 5) }} WIB</td>
                                                    <td>{{ $ja->id_department }}</td>


                                                    <td>
                                                        <div class="table-data-feature">

                                                            <button class="item" data-toggle="modal"
                                                                data-target="#editJadwalAbsen_{{ $ja->id }}">
                                                                <i class="zmdi zmdi-edit"></i>
                                                            </button>
                                                            <form action="{{ url('/jadwal-absen/' . $ja->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="item" data-toggle="tooltip"
                                                                    data-placement="top" title=""
                                                                    data-original-title="Delete">
                                                                    <i class="zmdi zmdi-delete"></i>
                                                                </button>
                                                            </form>
                                                            {{-- <button class="item" data-toggle="tooltip"
                                                            data-placement="top" title=""
                                                            data-original-title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button> --}}

                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        {{-- conten --}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a
                                            href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>


    {{-- modal tambah absen --}}
    <div class="modal fade" id="tambahJadwalAbsen" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form action="{{ url('/jadwal-absen') }}" method="post">
                @csrf

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahJadwalAbsen">Tambah Jadwal Absen</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="Tanggal" class="control-label mb-1">Tanggal</label>
                            <input id="tanggal" name="tanggal" type="date" class="form-control"
                                aria-required="true" aria-invalid="false" required>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="jamMasuk" class="control-label mb-1">Jam Masuk</label>
                                    <input id="jamMasuk" name="jam_masuk" type="time"
                                        class="form-control cc-exp" required>
                                    <span class="help-block" data-valmsg-for="cc-exp"
                                        data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="jamKeluar" class="control-label mb-1">Jam Keluar</label>
                                <div class="input-group">
                                    <input id="jamKeluar" name="jam_keluar" type="time"
                                        class="form-control cc-cvc" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group has-success">
                            <label for="department" class="control-label mb-1">Department</label>
                            <select name="department" id="select" class="form-control" required>
                                <option value="1">Pilih Department</option>
                                <option value="2">Option #1</option>
                                <option value="3">Option #2</option>
                                <option value="4">Option #3</option>
                            </select>

                        </div>





                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>

            </form>

        </div>
    </div>

    {{-- akhir modal --}}

    <!-- Jquery JS-->
    <script src="{{ url('../backend/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ url('../backend/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ url('../backend/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ url('../backend/vendor/slick/slick.min.js') }}"></script>
    <script src="{{ url('../backend/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ url('../backend/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ url('../backend/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <script src="{{ url('../backend/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ url('../backend/vendor/counter-up/jquery.counterup.min.js') }}"></script>
    <script src="{{ url('../backend/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ url('../backend/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ url('../backend/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ url('../backend/vendor/select2/select2.min.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ url('../backend/js/main.js') }}"></script>

</body>

</html>
<!-- end document-->

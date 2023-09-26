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
    <title>DR. Sepatuku - Page Login</title>

    <!-- Fontfaces CSS-->
    <link href="{{ url('../backend/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('../backend/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('../backend/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('../backend/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ url('../backend/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="{{ url('../backend/bootstrap-5.1.3-dist\css\bootstrap.min.css') }}">
    <link rel="shortcut icon" href="{{ url('../backend/images/logo/logo_dr_sepatuku.jpeg') }}" type="image/x-icon">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="{{ url('../backend/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('../backend/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('../backend/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ url('../backend/css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body class="animsition" style="background-color: #E5E5E5;">
    @if(session()->has('invalid'))
    <div class="alert alert-danger" id="flashMessage" role="alert">
        {{ session()->get('invalid') }}
    </div>
    <script>
        setTimeout(function() {
            document.getElementById('flashMessage').remove();
        }, 5000);
    </script>
    @endif
    @if(session()->has('session_stop'))
    <div class="alert alert-danger" id="flashMessage" role="alert">
        {{ session()->get('invalid') }}
    </div>
    <script>
        setTimeout(function() {
            document.getElementById('flashMessage').remove();
        }, 5000);
    </script>
    @endif
    @if(session()->has('success-new_akun'))
    <div class="alert alert-success" id="flashMessage" role="alert">
        {{ session()->get('success-new_akun') }}
    </div>
    <script>
        setTimeout(function() {
            document.getElementById('flashMessage').remove();
        }, 5000);
    </script>
    @endif
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content shadow rounded">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{ url('../backend/images/logo/logo_dr_sepatuku.jpeg') }}" width="120">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="{{ url('/proses/login/user') }}" method="post">
                                @csrf()
                                <div class="form-group">
                                    <label>Username <span class="text-danger">*</sp></label>
                                    <input class="au-input au-input--full rounded" type="text" name="username">
                                </div>
                                <div class="form-group">
                                    <label>Password <span class="text-danger">*</span></label>
                                    <input class="au-input au-input--full rounded" type="password" name="password">
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Masuk</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Belum Memiliki AKun?
                                    <a href="{{ url('/new/account') }}">Daftar</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
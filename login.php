<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login Admin | Sistem Informasi Arsip Digital</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/img/logo/title-icon.png"
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/morrisjs/morris.css">
    <link rel="stylesheet" href="assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="assets/css/metisMenu/metisMenu-vertical.css">
    <link rel="stylesheet" href="assets/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="assets/css/calendar/fullcalendar.print.min.css">
    <link rel="stylesheet" href="assets/css/form/all-type-forms.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <style> 
        body {
            color: #0a574c;
            font-family: manrope, sans-serif;
            background-image: url(gambar/user/full-bloom.webp);
        }
        
        .user-login-form {
            padding: 2rem 0 1rem 0;
            background: #fff;
            border-radius: 0.8rem;
            box-shadow: -2px 8px 31px -24px rgba(0,0,0,0.59);
            -webkit-box-shadow: -2px 8px 31px -24px rgba(0,0,0,0.59);
            -moz-box-shadow: -2px 8px 31px -24px rgba(0,0,0,0.59);
        }

        .user-login-form img {
            width: 10rem;
        }

        .user-login-form h3, p.command {
            color: #0a574c !important;
        }

        .loginbtn, a{
            font-weight: 600;
            padding: 0.7rem 0;
            background-color:  #27debf !important;
            border-color: #27debf !important;
            color:  #0a574c !important;
        }
        </style>
    <div class="error-pagewrap">
        <div class="error-page-int user-login-form">
            <div class="text-center m-b-md custom-login">
                <h3>SISTEM INFORMASI</h3>
                <h4>ARSIP DIGITAL DESA CINTARAJA</h4>

                <br>
                <img src="assets/img/logo/logo-big.png" alt="Logo-arsip-cintaraja">
                <br>
                <br>
                <p class="command">Silahkan login untuk mengakses arsip.</p>

            </div>
            <div class="content-error">
                <?php 
                // pesan notifikasi

                if(isset($_GET['alert'])){
                    if($_GET['alert'] == "gagal"){
                        echo "<div class='alert alert-danger'>LOGIN GAGAL! USERNAME DAN PASSWORD SALAH!</div>";
                    }else if($_GET['alert'] == "logout"){
                        echo "<div class='alert alert-success'>ANDA TELAH BERHASIL LOGOUT</div>";
                    }else if($_GET['alert'] == "belum_login"){
                        echo "<div class='alert alert-warning'>ANDA HARUS LOGIN UNTUK MENGAKSES DASHBOARD</div>";
                    }
                }
                ?>
                <div class="hpanel">
                    <div class="panel-body">
                        <center>
                            <h4>LOGIN ADMIN / PETUGAS</h4>    
                        </center>
                        <br>
                        <br>

                        <form action="periksa_login.php" method="POST" id="loginForm">
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="username" title="Please enter you username" required="required" autocomplete="off" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="required" autocomplete="off" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Hak Akses</label>
                                <select class="form-control" name="akses">
                                    <option value="admin">Admin</option>
                                    <option value="petugas">Petugas</option>
                                </select>
                                
                            </div>
                            
                            <input type="submit" class="btn btn-success btn-block loginbtn" value="Login">
                        </form>

                        <br>

                    </div>
                </div>

                <a href="index.php">Kembali</a>
            </div>
            <div class="text-center login-footer">
                <p class="text-muted">Copyright © <?php echo date('Y') ?>. Code Crafter</p>
            </div>
        </div>   
    </div>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery-price-slider.js"></script>
    <script src="assets/js/jquery.meanmenu.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/scrollbar/mCustomScrollbar-active.js"></script>
    <script src="assets/js/metisMenu/metisMenu.min.js"></script>
    <script src="assets/js/metisMenu/metisMenu-active.js"></script>
    <script src="assets/js/tab.js"></script>
    <script src="assets/js/icheck/icheck.min.js"></script>
    <script src="assets/js/icheck/icheck-active.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
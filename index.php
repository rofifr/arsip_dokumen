    <!doctype html>
    <html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Cintaraja Arsip</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="assets/img/logo/title-icon.png"
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    </head>
<!-- rofi kasep -->
    <body>

        <style>
            * {
                font-family: manrope, sans-serif;
            }

            body {
                background-image: url(gambar/depan/bg-landing.webp);
                overflow: hidden;
            }
            .navbar-siad{
                background: #fff;
                border-radius: 0px;
                border: 1px solid #fff;
                margin: 0px;
                padding: 20px 0px;
            }

            .navbar-inverse .navbar-brand {
                color: #0a574c;
            }

            .navbar-inverse .navbar-brand:hover {
                color: #0a574c;
            }

            .navbar-inverse .navbar-nav > li > a {

                color: #fff;

            }
            .navbar-siad > li > a {

                color: #9d9d9d !important;

            }

            .banner{
                /* background: #fff; */
                height: 90vh;
                border-radius: 0px;
                padding: 60px 0px;
                color: #0a574c;
            }

            .banner h1 {
                font-size: 5rem;
                font-weight: 800;
            }

            .banner h1 span {
                font-size: 4.3rem;
                font-weight: 300;
            }
            .banner a{
                padding: 15px 25px;
                font-weight: 600;
                color: #0a574c;
                background-color: #27debf;
                border-radius: 0.5rem;
                -webkit-transition: all 0.5s; 
                transition: all 0.5s;
                margin-right: 10px;
            }

            .banner a:hover{
                text-decoration: none;
                box-shadow: -2px 13px 31px -14px rgba(0,0,0,0.59);
                -webkit-box-shadow: -2px 13px 31px -14px rgba(0,0,0,0.59);
                -moz-box-shadow: -2px 13px 31px -14px rgba(0,0,0,0.59);
            }

            .banner p{
                font-size: 13pt;
            }

            @media only screen and (max-width: 1200px) {
            .banner .row {
                text-align: center;
                margin-top: 0px;
            }

            .banner h1 {
                font-size: 3.8rem;
            }

            .illustration {
                display: none;
            }
            }
        </style>



        <nav class="navbar navbar-inverse navbar-siad">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button> -->
                    <a class="navbar-brand" href="#">Cintaraja Arsip</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> -->
                    <!-- <ul class="nav navbar-nav">
                        <li><a href="#">Link <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul> -->

                
                <!-- </div> -->
            </div>
        </nav>

        
        <div class="banner">
            <div class="container">

                <div class="row" style="margin-top: 5rem;">
                    <div class="col-lg-6">
                        <div style="margin-top: 140px;">
                            <h1>Sistem Informasi<br><span>Arsip Digital Desa Cintaraja</span></h1>
                            
                            <p>Manajemen file arsip dengan mudah dan cepat.</p>

                            <br>
                            <br>

                            <a href="user_login.php">LOGIN USER</a>
                            <a href="login.php">LOGIN ADMIN / PETUGAS</a>
                        </div>
                    </div>
                    <div class="col-lg-6 illustration">
                        
                        <img src="gambar/depan/2.svg" class="img-responsive" style="margin-top: 5rem;">
                        
                    </div>
                </div>

            </div>
        </div>
        </div>





        <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>

    </html>
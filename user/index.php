<?php include 'header.php'; ?>
<style>
    body {
        background-image: url(../gambar/user/full-bloom.webp);
    }
    .btn{
        background-color:  #27debf !important;
        color:  #0a574c !important;
        border-color: #27debf !important;
    }

    .breadcome-area .breadcome-list, .analytics-info-cs, .product-sales-chart, .profile-display {
        border-radius: 0.5rem !important;
        -webkit-box-shadow: 0px 7px 23px -21px rgba(0,0,0,0.56);
-moz-box-shadow: 0px 7px 23px -21px rgba(0,0,0,0.56);
box-shadow: 0px 7px 23px -21px rgba(0,0,0,0.56);
    }


</style>
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Dashboard</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="product-sales-area mg-tb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info-cs res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                            <h3 class="box-title">Total Arsip</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash3"></div>
                                </li>
                                <li class="text-right graph-three-ctn">
                                    <i class="fa fa-level-up" aria-hidden="true"></i> 
                                    <span class="counter text-info">
                                        <?php 
                                        $jumlah_arsip = mysqli_query($koneksi, "SELECT * FROM arsip INNER JOIN kategori ON arsip.arsip_kategori = kategori.kategori_id WHERE kategori.kategori_nama = 'public'");
                                        ?>
                                        <span class="counter"><?php echo mysqli_num_rows($jumlah_arsip); ?></span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <br>

                <div class="product-sales-chart">

                    <br>
                    <br>
                    <center>
                        
                        <h3>Selamat Datang</h3>
                        <h4>Sistem Informasi Arsip Digital</h4>
                        <h5>Kantor Desa Cintaraja</h5>

                    </center>
                    <br>
                    <br>
                    <br>

                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 profile-display">

                <?php 
                $id = $_SESSION['id'];
                $saya = mysqli_query($koneksi,"select * from user where user_id='$id'");
                $s = mysqli_fetch_assoc($saya);
                ?>
                <div class="single-cards-item">
                    <div class="single-product-image">
                        <a href="#">
                            <img src="../assets/img/product/profil-bg.png" alt="">
                        </a>
                    </div>

                    <div class="single-product-text">
                        <?php 
                        if($s['user_foto'] == ""){
                            ?>
                            <img class="img-user" src="../gambar/sistem/user.png">
                            <?php
                        }else{
                            ?>
                            <img class="img-user" src="../gambar/user/<?php echo $s['user_foto']; ?>">
                            <?php
                        }
                        ?>

                        <h4><a class="cards-hd-dn" href="#"><?php echo $s['user_nama']; ?></a></h4>
                        <h5>user</h5>
                        <p class="ctn-cards">Pengelolaan arsip jadi lebih mudah dengan sistem informasi arsip digital.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>
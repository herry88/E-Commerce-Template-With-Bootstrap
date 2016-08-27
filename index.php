<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bengkel Komputer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/ico.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bar-theme.css" media="screen">
    <link rel="stylesheet" href="bootstrap/css/nivo-slider.css" media="screen">
    <script src="bootstrap/js/jquery-2.2.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/jquery.nivo.slider.js"></script>
    <style type="text/css">
        body {
            position: relative; 
        }
        .affix {
            top:0;
            width: 100%;
            z-index: 9999 !important;
        }
        .affix ~ .container-fluid {
            position: relative;
            top: 50px;
        }
    </style>
</head>
<body>
    
    <!-- Header -->    
    <div class="page-header" style="margin-top:2px; margin-left:2px; background-color:#fcf8e3">
        <div class="row">
            <div class="col-sm-12">
                <img class="" src="img/logo.png" height="100px" style="border-right:1px solid #f70;" />
                <label style="color:#f70; font-size:30px; position:absolute; top:8px">Nama Web</label>
                <label style="color:#f70;">Deskripsi Web</label>
            </div>
        </div>
    </div>
    
    <!-- Navbar -->
    <nav class="navbar navbar-default" data-spy="affix" data-offset-top="130">
        <div class="container-fluid">
            <div class="navbar-header">
                <a type="a" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="navbar-brand" href="index.php">Bengkel Komputer</a>
            </div>
            <div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <li><a href="profil.php"><span class="glyphicon glyphicon-user"></span> Profil</a></li>
                        <li><a href="tentang_kami.php"><span class="glyphicon glyphicon-briefcase"></span> Tentang Kami</a></li>
                        <li><a href="produk.php"><span class="glyphicon glyphicon-th-large"></span> Produk</a></li>
                        <li><a href="hubungi_kami.php"><span class="glyphicon glyphicon-envelope"></span> Hubungi Kami</a></li>
                        <li><a href="cara_belanja.php"><span class="glyphicon glyphicon-credit-card"></span> Cara Belanja</a></li>
                        <li><a href="blog.php"><span class="glyphicon glyphicon-list-alt"></span> Blog</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <div class="input-group" style="width:300px; margin-top:7px">
                            <input type="text" name="Search" class="form-control" placeholder="Cari"/>
                            <div class="input-group-btn">
                                <a class="btn btn-default">
                                    <i class="glyphicon glyphicon-search"></i>
                                </a>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    
    <div class="container-fluid">
        <div class="panel panel-primary" style="border:0px">
            <div class="panel-body">
                
                <!-- Produk Terlaris -->
                <div class="row" style="margin-bottom:10px">
                    <div class="item col-sm-3">
                        <div class="panel-group">
                            <div class="panel panel-warning">
                                <div class="panel-heading">Produk Terlaris</div>
                                <div class="panel-body">
                                    <div class="row list-group">
                                        <div class="item col-sm-12">
                                            <div class="thumbnail-best-selling">
                                                <div class="row" style="padding:10px">
                                                    <div class="col-sm-3">
                                                        <img src="img/ubuntu.png" alt="" style="height:70px;"/>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <span>Nama Produk</span><br>
                                                        <span>Rp 0</span><br>
                                                        <a class="btn btn-primary pull-right" href="produk_detail.php">
                                                            <span class="glyphicon glyphicon-info-sign"></span> Detail
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-sm-12">
                                            <div class="thumbnail-best-selling">
                                                <div class="row" style="padding:10px">
                                                    <div class="col-sm-3">
                                                        <img src="img/ubuntu.png" alt="" style="height:70px;"/>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <span>Nama Produk</span><br>
                                                        <span>Rp 0</span><br>
                                                        <a class="btn btn-primary pull-right" href="produk_detail.php">
                                                            <span class="glyphicon glyphicon-info-sign"></span> Detail
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-sm-12">
                                            <div class="thumbnail-best-selling">
                                                <div class="row" style="padding:10px">
                                                    <div class="col-sm-3">
                                                        <img src="img/ubuntu.png" alt="" style="height:70px;"/>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <span>Nama Produk</span><br>
                                                        <span>Rp 0</span><br>
                                                        <a class="btn btn-primary pull-right" href="produk_detail.php">
                                                            <span class="glyphicon glyphicon-info-sign"></span> Detail
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-sm-12">
                                            <div class="thumbnail-best-selling">
                                                <div class="row" style="padding:10px">
                                                    <div class="col-sm-3">
                                                        <img src="img/ubuntu.png" alt="" style="height:70px;"/>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <span>Nama Produk</span><br>
                                                        <span>Rp 0</span><br>
                                                        <a class="btn btn-primary pull-right" href="produk_detail.php">
                                                            <span class="glyphicon glyphicon-info-sign"></span> Detail
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item col-sm-12">
                                            <div class="thumbnail-best-selling" style="margin-bottom:7px">
                                                <div class="row" style="padding:10px">
                                                    <div class="col-sm-3">
                                                        <img src="img/ubuntu.png" alt="" style="height:70px;"/>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <span>Nama Produk</span><br>
                                                        <span>Rp 0</span><br>
                                                        <a class="btn btn-primary pull-right" href="produk_detail.php">
                                                            <span class="glyphicon glyphicon-info-sign"></span> Detail
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Photo Slides -->
                    <div class="col-sm-9">
                        <div class="panel-group">
                            <div class="panel panel-warning">
                                <div class="panel-heading">Produk Terbaru</div>
                                <div class="panel-body" style="padding:0px">
                                    <div class="slider-wrapper theme-bar">
                                        <div id="slider" class="nivoSlider">
                                            <img src="img/tea4.png" data-thumb="img/tea4" title="TeaLinux - Nikmatnya Sebuah Racikan" />
                                            <img src="img/tea2.png" data-thumb="img/tea2" title="TeaLinux - Nikmatnya Sebuah Racikan" />
                                            <img src="img/tea3.png" data-thumb="img/tea3" title="TeaLinux - Nikmatnya Sebuah Racikan" />
                                            <img src="img/tea4.png" data-thumb="img/tea4" title="TeaLinux - Nikmatnya Sebuah Racikan" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Produk Terbatas -->
                <div class="panel-group">
                    <div class="panel panel-warning">
                        <div class="panel-heading">Produk Terbatas</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="thumbnail-limited-edition">
                                        <div class="row" style="padding:10px">
                                            <div class="col-sm-5">
                                                <img src="img/ubuntu.png" alt="" style="height:70px;"/>
                                            </div>
                                            <div class="col-sm-7">
                                                <span>Nama Produk</span><br>
                                                <span>Rp 0</span><br>
                                                <a class="btn btn-primary pull-right" href="produk_detail.php">
                                                    <span class="glyphicon glyphicon-info-sign"></span> Detail
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumbnail-limited-edition">
                                        <div class="row" style="padding:10px">
                                            <div class="col-sm-5">
                                                <img src="img/ubuntu.png" alt="" style="height:70px;"/>
                                            </div>
                                            <div class="col-sm-7">
                                                <span>Nama Produk</span><br>
                                                <span>Rp 0</span><br>
                                                <a class="btn btn-primary pull-right" href="produk_detail.php">
                                                    <span class="glyphicon glyphicon-info-sign"></span> Detail
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item col-sm-3">
                                    <div class="thumbnail-limited-edition">
                                        <div class="row" style="padding:10px">
                                            <div class="col-sm-5">
                                                <img src="img/ubuntu.png" alt="" style="height:70px;"/>
                                            </div>
                                            <div class="col-sm-7">
                                                <span>Nama Produk</span><br>
                                                <span>Rp 0</span><br>
                                                <a class="btn btn-primary pull-right" href="produk_detail.php">
                                                    <span class="glyphicon glyphicon-info-sign"></span> Detail
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item col-sm-3">
                                    <div class="thumbnail-limited-edition">
                                        <div class="row" style="padding:10px">
                                            <div class="col-sm-5">
                                                <img src="img/ubuntu.png" alt="" style="height:70px;"/>
                                            </div>
                                            <div class="col-sm-7">
                                                <span>Nama Produk</span><br>
                                                <span>Rp 0</span><br>
                                                <a class="btn btn-primary pull-right" href="produk_detail.php">
                                                    <span class="glyphicon glyphicon-info-sign"></span> Detail
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produk -->
                <div class="panel-group">
                    <div class="panel panel-warning">
                        <div class="panel-heading">Produk</div>
                        <div class="panel-body">
                            <div class="row list-group">
                                <div class="item col-sm-3">
                                    <div class="thumbnail">
                                        <img style="padding:10px" src="img/ubuntu.png" alt=""/>
                                        <div class="caption">
                                            <h4 class="group inner list-group-item-heading">Nama Produk</h4>
                                            <div class="row">
                                                <div class="col-xs-12 col-md-6">
                                                    <p class="lead">Rp 0</p>
                                                </div>
                                                <div class="col-xs-12 col-md-6">
                                                    <a class="btn btn-primary pull-right" href="produk_detail.php">
                                                        <span class="glyphicon glyphicon-info-sign"></span> Detail
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item col-sm-3">
                                    <div class="thumbnail">
                                        <img style="padding:10px" src="img/ubuntu.png" alt=""/>
                                        <div class="caption">
                                            <h4 class="group inner list-group-item-heading">Nama Produk</h4>
                                            <div class="row">
                                                <div class="col-xs-12 col-md-6">
                                                    <p class="lead">Rp 0</p>
                                                </div>
                                                <div class="col-xs-12 col-md-6">
                                                    <a class="btn btn-primary pull-right" href="produk_detail.php">
                                                        <span class="glyphicon glyphicon-info-sign"></span> Detail
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item col-sm-3">
                                    <div class="thumbnail">
                                        <img style="padding:10px" src="img/ubuntu.png" alt=""/>
                                        <div class="caption">
                                            <h4 class="group inner list-group-item-heading">Nama Produk</h4>         
                                            <div class="row">
                                                <div class="col-xs-12 col-md-6">
                                                    <p class="lead">Rp 0</p>
                                                </div>
                                                <div class="col-xs-12 col-md-6">
                                                    <a class="btn btn-primary pull-right" href="produk_detail.php">
                                                        <span class="glyphicon glyphicon-info-sign"></span> Detail
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item col-sm-3">
                                    <div class="thumbnail">
                                        <img style="padding:10px" src="img/ubuntu.png" alt=""/>
                                        <div class="caption">
                                            <h4 class="group inner list-group-item-heading">Nama Produk</h4>
                                            <div class="row">
                                                <div class="col-xs-12 col-md-6">
                                                    <p class="lead">Rp 0</p>
                                                </div>
                                                <div class="col-xs-12 col-md-6">
                                                    <a class="btn btn-primary pull-right" href="produk_detail.php">
                                                        <span class="glyphicon glyphicon-info-sign"></span> Detail
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item col-sm-3">
                                    <div class="thumbnail">
                                        <img style="padding:10px" src="img/ubuntu.png" alt=""/>
                                        <div class="caption">
                                            <h4 class="group inner list-group-item-heading">Nama Produk</h4>
                                            <div class="row">
                                                <div class="col-xs-12 col-md-6">
                                                    <p class="lead">Rp 0</p>
                                                </div>
                                                <div class="col-xs-12 col-md-6">
                                                    <a class="btn btn-primary pull-right" href="produk_detail.php">
                                                        <span class="glyphicon glyphicon-info-sign"></span> Detail
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item col-sm-3">
                                    <div class="thumbnail">
                                        <img style="padding:10px" src="img/ubuntu.png" alt=""/>
                                        <div class="caption">
                                            <h4 class="group inner list-group-item-heading">Nama Produk</h4>
                                            <div class="row">
                                                <div class="col-xs-12 col-md-6">
                                                    <p class="lead">Rp 0</p>
                                                </div>
                                                <div class="col-xs-12 col-md-6">
                                                    <a class="btn btn-primary pull-right" href="produk_detail.php">
                                                        <span class="glyphicon glyphicon-info-sign"></span> Detail
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item col-sm-3">
                                    <div class="thumbnail">
                                        <img style="padding:10px" src="img/ubuntu.png" alt=""/>
                                        <div class="caption">
                                            <h4 class="group inner list-group-item-heading">Nama Produk</h4>
                                            <div class="row">
                                                <div class="col-xs-12 col-md-6">
                                                    <p class="lead">Rp 0</p>
                                                </div>
                                                <div class="col-xs-12 col-md-6">
                                                    <a class="btn btn-primary pull-right" href="produk_detail.php">
                                                        <span class="glyphicon glyphicon-info-sign"></span> Detail
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item col-sm-3">
                                    <div class="thumbnail">
                                        <img style="padding:10px" src="img/ubuntu.png" alt=""/>
                                        <div class="caption">
                                            <h4 class="group inner list-group-item-heading">Nama Produk</h4>
                                            <div class="row">
                                                <div class="col-xs-12 col-md-6">
                                                    <p class="lead">Rp 0</p>
                                                </div>
                                                <div class="col-xs-12 col-md-6">
                                                    <a class="btn btn-primary pull-right" href="produk_detail.php">
                                                        <span class="glyphicon glyphicon-info-sign"></span> Detail
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Navbar -->
    <nav class="navbar navbar-default" style="padding:10px">
        <div class="container-fluid">
            <div class="col-sm-6">
                <label style="margin-top:10px;color:#fff">Copyright &copy; 2016 by Bengkel Komputer. All Rights Reserved</label>
            </div>
            <div class="col-sm-3">
                <label style="margin-top:10px;color:#fff">Daftar untuk mendapatkan pemberitauan :</label>
            </div>
            <div class="input-group col-sm-3">
                <input type="text" name="Newsletter" class="form-control" placeholder="Email"/>
                <div class="input-group-btn">
                    <a class="btn btn-default">
                        <i class="glyphicon glyphicon-envelope"></i>
                    </a>
                </div>
            </div>
            <div class="col-sm-12">
                <label style="color:#fff">Informasi</label>
            </div>
            <div class="col-sm-12">
                <label style="color:#fff">Informasi</label>
            </div>
        </div>
    </nav>
    
    <!-- Back to top -->
    <a class="scrollToTop" href="#">
        <div class="row">
            <div class="col-sm-12 text-center" style="margin-top:15px">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </div>
        </div>
    </a>
    
</body>
</html>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    $(document).ready(function(){
        $(window).scroll(function(){
            if ($(this).scrollTop() > 150) {
                $('.scrollToTop').fadeIn();
            } else {
                $('.scrollToTop').fadeOut();
            }
        });
        $('.scrollToTop').click(function(){
            $('html, body').animate({scrollTop : 0},800);
            return false;
        });
    });
</script>
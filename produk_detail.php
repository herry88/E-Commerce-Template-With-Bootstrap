<!DOCTYPE html>
<html lang="en">
<head>
    <title>Produk Detail</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/ico.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bar-theme.css" media="screen">
    <link rel="stylesheet" href="bootstrap/css/nivo-slider.css" media="screen">
    <script src="bootstrap/js/jquery-2.2.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/jquery.nivo.slider.js"></script>
    <script src="bootstrap/js/jquery.zoom.min.js"></script>
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
		.zoom {
			display:inline-block;
			position: relative;
		}
		.zoom:after {
			content:'';
			display:block; 
			width:33px; 
			height:33px; 
			position:absolute; 
			top:0;
			right:0;
			background:url(img/icon.png);
		}
		.zoom img {
			display: block;
		}
		.zoom img::selection { background-color: transparent; }
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
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Bengkel Komputer</a>
            </div>
            <div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <li><a href="profil.php"><span class="glyphicon glyphicon-user"></span> Profil</a></li>
                        <li><a href="tentang_kami.php"><span class="glyphicon glyphicon-briefcase"></span> Tentang Kami</a></li>
                        <li class="active"><a href="produk.php"><span class="glyphicon glyphicon-th-large"></span> Produk</a></li>
                        <li><a href="hubungi_kami.php"><span class="glyphicon glyphicon-envelope"></span> Hubungi Kami</a></li>
                        <li><a href="cara_belanja.php"><span class="glyphicon glyphicon-credit-card"></span> Cara Belanja</a></li>
                        <li><a href="blog.php"><span class="glyphicon glyphicon-list-alt"></span> Blog</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <div class="input-group" style="width:300px; margin-top:7px">
                            <input type="text" name="Search" class="form-control" placeholder="Cari"/>
                            <div class="input-group-btn">
                                <button class="btn btn-default">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    
    <div class="container-fluid">
        <div class="panel panel-primary">
            <div class="panel-body">
                <div class="panel panel-warning">
                    <div class="panel-heading">Produk Detail</div>
                    <div class="panel-body">
                        
                        <!-- Produk -->
                        <div class="row" style="margin-top:10px; margin-bottom:10px">
                            <div class="col-sm-4">
                                <span class="zoom" id="ex1">
                                    <img class="img-responsive" src="img/tea2.png" style="height:550px; width:450px" />
                                </span>
                            </div>
                            <div class="col-sm-8">
                                <div class="col-sm-12">
                                    <h3>Nama Produk</h3>
                                    <h3>Rp 0</h3>
                                    <span>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                        animid est laborum.
                                    </span>
                                    <a class="btn btn-success pull-right">
                                        <span class="glyphicon glyphicon-shopping-cart"></span> Beli
                                    </a>
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
                    <button class="btn btn-default">
                        <i class="glyphicon glyphicon-envelope"></i>
                    </button>
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
        $('#ex1').zoom();
    });
</script>
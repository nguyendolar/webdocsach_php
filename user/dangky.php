<?php
include('../admin/inc/connect.php');
?>
<!DOCTYPE html>
<html lang="vi" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article# title: http://ogp.me/ns#title image: http://ogp.me/ns#image">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5XP2X4C');</script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8"/>    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>
        Đăng ký    </title>
    <link href="favicon.ico" type="image/x-icon" rel="icon"/><link href="favicon.ico" type="image/x-icon" rel="shortcut icon"/>    <link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
    <link rel="manifest" href="favicons/manifest.json">
    <meta name="google-site-verification" content="G3TfR5HCFTK1yj7LUinb_S33dDlweN8xV7brWPPj4uM" />
    <meta name="p:domain_verify" content="c4214d5df328316c1de3508b4d79e212"/>
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:500,300,700,400"/>    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:500,300,700,400"/>    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Condensed:500,300,700,400"/>    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap.min.css"/>    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>    <link rel="stylesheet" href="printshop/css/theme-yellow.min.css"/>    <link rel="stylesheet" href="printshop/css/responsive.min.css"/>    </head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5XP2X4C"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
	<!--Header: Begin-->
<header>
    <?php
    if (isset($_GET['fail'])) {
    ?>
<div class="toast" data-delay="2000" style="position:fixed;top: 100PX; right: 10PX;z-index: 2000;width: 300px">
    <script>
        swal({
            title: 'Tài khoản hoặc email đã tồn tại!',
            icon: 'error',
            timer: 3000,
            buttons: true,
            type: 'error'
        })
    </script>
</div>
    <?php } ?>
    <?php include('header.php'); ?>
    <!--Main Header: End-->
</header>    <main class="main category">
       	   
<section class="category-w parten-bg">
	<div class="container">
		<div class="row">
            
			<section class="category grid col-sm-12 col-xs-12">
					<div class="row">
		
	</div>
				
<div class="row products-grid category-product">
    <div class="card-body" style="width : 370px; margin : 0px auto !important">
        <form action="xuly.php" method="POST">
            <div class="form-floating mb-6">
            <label for="inputEmail">Tên hiển thị</label>
                <input  class="form-control" id="inputEmail" type="text" required name="tenhienthi" />
            </div>
            <div class="form-floating mb-6" style="margin-top : 15px">
            <label for="inputEmail">Tài khoản</label>
                <input class="form-control" id="inputEmail" type="text" pattern="[A-Za-z0-9]+" required name="taikhoan" />
            </div>
            <div class="form-floating mb-6" style="margin-top : 15px">
            <label for="inputPassword">Mật khẩu</label>
                <input class="form-control" id="inputPassword" pattern="[A-Za-z0-9]+" type="password" required name="matkhau" />
            </div>
            <div class="d-flex align-items-center justify-content-between mt-4 mb-0" style="margin: 15px 150px !important">
                <button class="btn btn-primary" type="submit" style="background-color : #FFCC2A; color : black" name="dangky" >Đăng ký</button>
            </div>
        </form>
    </div>
</div>
<img src="https://nxbhcm.com.vn/slider/data1/images/newebookt12_1.jpg">
</section>    </main>
    

<footer>
<?php include('footer.php'); ?>
</footer>
    
<script src="sp.zalo.me/plugins/sdk.js"></script>    <script src="cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    <script src="cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js"></script> 	<script src="cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script><script src="cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script><script src="cdnjs.cloudflare.com/ajax/libs/jquery-scrollpanel/0.7.0/jquery-scrollpanel.min.js"></script><script src="printshop/js/theme.js"></script><script src="images.dmca.com/Badges/DMCABadgeHelper.min.js"></script>    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64408958-1', 'auto');
  ga('send', 'pageview');

</script>    </body>

<!-- Mirrored from i-map.vn/thiet-ke-in/thiet-ke by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2022 14:41:59 GMT -->
</html>

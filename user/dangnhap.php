<?php
include('../admin/inc/connect.php');
?>
<!DOCTYPE html>
<html lang="vi" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article# title: http://ogp.me/ns#title image: http://ogp.me/ns#image">

<!-- Mirrored from i-map.vn/thiet-ke-in/thiet-ke by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2022 14:41:56 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
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
        Đăng nhập    </title>
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
    if (isset($_GET['msg'])) {
    ?>
<div class="toast" data-delay="2000" style="position:fixed;top: 100PX; right: 10PX;z-index: 2000;width: 300px">
    <script>
        swal({
            title: 'Đăng ký thành công!',
            icon: 'success',
            timer: 3000,
            buttons: true,
            type: 'success'
        })
    </script>
</div>
    <?php } ?>
    <?php
    if (isset($_GET['fail'])) {
    ?>
<div class="toast" data-delay="2000" style="position:fixed;top: 100PX; right: 10PX;z-index: 2000;width: 300px">
    <script>
        swal({
            title: 'Đăng nhập thất bại!',
            icon: 'error',
            timer: 3000,
            buttons: true,
            type: 'error'
        })
    </script>
</div>
    <?php } ?>
    <!--Top Header: Begin-->
    <section id="top-header" class="clearfix">
        <div class="container">
            <div class="row">
                <div class="top-links col-lg-7 col-md-6 col-sm-5 col-xs-6">
                    <ul>
                                                <li>
                            <a href="/i-map/admin"><i class="fa fa-lock"></i></a>                        </li>
                                                <li>
                            <a href="https://www.facebook.com/imap.vn/">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                         <li>
                            <a href="https://plus.google.com/115620533818286842928">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li> 
                    </ul>
                </div>
                <div class="top-header-right f-right col-lg-5 col-md-6 col-sm-7 col-xs-6">
                    <div class="w-header-right">
                        <div class="th-hotline">
                            <i class="fa fa-phone"></i>
                            <span>0225 3 757 929 | 0833 757 929</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Top Header: End-->
    <!--Main Header: Begin-->
    <section class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-1 col-md-2 col-sm-4 col-xs-5 w-logo">
                    <div class="logo hd-pd ">
                        <a href="index.php" title="Thiết kế in ấn M.A.P Hải Phòng"><img src="source/system/logo/logo_map_black.png" alt="Thiết kế in ấn M.A.P Hải Phòng" title="Thiết kế in ấn M.A.P Hải Phòng" style="max-height: 46px"/></a>                    </div>
                </div>
                <div class="col-lg-9 col-md-9 visible-md visible-lg">
                    <nav id="main-menu" class="main-menu clearfix">
					<ul>
                                <li class="level0 hd-pd"><a href="index.php"><span>Trang chủ</span></a></li>
                                <li class="level0 hd-pd"><a href="chitiet.php?id=1"><span>Giới thiệu
                                            M.A.P</span></a></li>
                                            <li class="level0 parent col1 all-product hd-pd"><a
                                        ><span>Dịch vụ</span><i
                                            class="fa fa-chevron-down"></i></a>
                                    <ul class="level0">
                                    <?php
                                        $dvU = mysqli_query($connect, "SELECT * FROM loaibaidang
                                        WHERE demuc = 'Dịch Vụ'");
                                        while ($arDvU = mysqli_fetch_array($dvU, MYSQLI_ASSOC)) {
                                    ?>
                                        <li><a href="loaibaidang.php?id=<?php echo $arDvU['id'] ?>"><?php echo $arDvU['tenloaibaidang'] ?></a></li>
                                    <?php } ?>
                                    </ul>
                                </li>
                                <li class="level0 parent col1 all-product hd-pd"><a
                                        ><span>Nhật ký sáng tạo</span><i
                                            class="fa fa-chevron-down"></i></a>
                                    <ul class="level0">
                                    <?php
                                    $nkstU = mysqli_query($connect, "SELECT * FROM loaibaidang
                                    WHERE demuc = 'Nhật Ký Sáng Tạo'");
                                        while ($arNkstU = mysqli_fetch_array($nkstU, MYSQLI_ASSOC)) {
                                    ?>
                                    <li><a href="loaibaidang.php?id=<?php echo $arNkstU['id'] ?>"><?php echo $arNkstU['tenloaibaidang'] ?></a></li>
                                    <?php } ?>
                                    </ul>
                                </li>
                                <li class="level0 parent col1 all-product hd-pd"><a
                                        ><span>Tin tức</span><i
                                            class="fa fa-chevron-down"></i></a>
                                    <ul class="level0">
                                    <?php
                                    $ttU = mysqli_query($connect, "SELECT * FROM loaibaidang
                                    WHERE demuc = 'Tin Tức'");
                                        while ($arTtU = mysqli_fetch_array($ttU, MYSQLI_ASSOC)) {
                                    ?>
                                    <li><a href="loaibaidang.php?id=<?php echo $arTtU['id'] ?>"><?php echo $arTtU['tenloaibaidang'] ?></a></li>
                                    <?php } ?>
                                    </ul>
                                </li>
                                <?php
                                if (empty($_SESSION['taikhoan'])) { ?>
                                <li class="level0 parent col1 all-product hd-pd"><a
                                        ><span>Người dùng</span><i
                                            class="fa fa-chevron-down"></i></a>
                                    <ul class="level0">
                                    <li><a href="dangky.php">Đăng ký</a></li>
                                    <li><a href="dangnhap.php">Đăng nhập</a></li>
                                    </ul>
                                </li>
                                <?php }else{?>
                                    <li class="level0 parent col1 all-product hd-pd"><a
                                        ><span><?php echo $_SESSION['hoten']; ?></span><i
                                            class="fa fa-chevron-down"></i></a>
                                    <ul class="level0">
                                    <li><a href="doimatkhau.php">Đổi mật khẩu</a></li>
                                    <li><a href="dangxuat.php">Đăng xuất</a></li>
                                    </ul>
                                </li>
                                <?php } ?>
                                <li class="level0 hd-pd"><a href="chitiet.php?id=2"><span>Liên hệ</span></a>
                                </li>
                            </ul>
                    </nav>
                </div>
                <div class="col-sm-1 col-sm-offset-5 col-xs-offset-2 col-xs-2 visible-sm visible-xs mbmenu-icon-w">
                    <span class="mbmenu-icon hd-pd">
                        <i class="fa fa-bars"></i>
                    </span>
                </div>
                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-3 headerCS">
                    <div class="search-w SC-w hd-pd ">
                        <span class="search-icon dropdowSCIcon">
                            <i class="fa fa-search"></i>
                        </span>
                        <div class="search-safari">
                            <div class="search-form dropdowSCContent">
                            <form method="post" accept-charset="utf-8" action="timkiem.php">
                                        <div style="display:none;"><input type="hidden" name="_method" value="POST" />
                                        </div> <input type="text" name="keyword" placeholder="Search" />
                                        <input type="submit">
                                        <i class="fa fa-search"></i>
                                    </form>                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Main Header: End-->
</header>    <main class="main category">
       	   <section class="header-page">
	<div class="container">
		<div class="row">
			<div class="col-sm-7 visible-lg visible-md visible-sm">
				<h2 class="mh-title">Thiết kế</h2>
			</div>
			<div class="breadcrumb-w col-sm-5">
				<span>Bạn ở đây:</span>
				<ul class="breadcrumb"><li><a href="index.php">Trang chủ</a></li><li><span>Đăng nhập</span></li></ul>			</div>
		</div>
	</div>
</section>
<section class="category-w parten-bg">
	<div class="container">
		<div class="row">
            <aside id="sidebar_cate" class="col-sm-3 visible-lg visible-md visible-sm">
				<h3 class="sidebar-title">Chủ đề</h3>
                <ul id="cate_list" class="cate_list">
    <li class="level0 parent"><a href="#"><span>Dịch vụ</span><i class="fa fa-minus"></i><i class="fa fa-plus"></i></a>
    <ul class="level0">
    <?php
        $dvL = mysqli_query($connect, "SELECT * FROM loaibaidang
        WHERE demuc = 'Dịch Vụ'");
        while ($arDvL = mysqli_fetch_array($dvL, MYSQLI_ASSOC)) {
            $id = $arDvL['id'];
    ?>
        <li class="level1">
        <a href="loaibaidang.php?id=<?php echo $arDvL['id'] ?>"><?php echo $arDvL['tenloaibaidang'] ?>
        <span class="count-item">
        <?php
        $tinhDv = mysqli_query($connect, "SELECT COUNT(id) as 'tongso' 
        FROM baidang 
        WHERE loaibaidang_id = $id");
        $artinhDv = mysqli_fetch_array($tinhDv);
    ?>
        (<?php echo $artinhDv['tongso'] ?>)
        </span></a>
    </li>
    <?php } ?>
    </ul>
</li><li class="level0 parent"><a href="#"><span>Nhật ký sáng tạo</span><i class="fa fa-minus"></i><i class="fa fa-plus"></i></a>
<ul class="level0">
<?php
        $nkL = mysqli_query($connect, "SELECT * FROM loaibaidang
        WHERE demuc = 'Nhật Ký Sáng Tạo'");
        while ($arnkL = mysqli_fetch_array($nkL, MYSQLI_ASSOC)) {
            $idnk = $arnkL['id'];
    ?>
        <li class="level1">
        <a href="loaibaidang.php?id=<?php echo $arnkL['id'] ?>"><?php echo $arnkL['tenloaibaidang'] ?>
        <span class="count-item">
        <?php
        $tinhnk = mysqli_query($connect, "SELECT COUNT(id) as 'tongso' 
        FROM baidang 
        WHERE loaibaidang_id = $idnk");
        $artinhnk = mysqli_fetch_array($tinhnk);
    ?>
        (<?php echo $artinhnk['tongso'] ?>)
        </span></a>
    </li>
    <?php } ?>
</ul>
</li>
</li><li class="level0 parent"><a href="#"><span>Tin tức</span><i class="fa fa-minus"></i><i class="fa fa-plus"></i></a>
<ul class="level0">
<?php
        $ttL = mysqli_query($connect, "SELECT * FROM loaibaidang
        WHERE demuc = 'Tin Tức'");
        while ($arttL = mysqli_fetch_array($ttL, MYSQLI_ASSOC)) {
            $idtt = $arttL['id'];
    ?>
        <li class="level1">
        <a href="loaibaidang.php?id=<?php echo $arttL['id'] ?>"><?php echo $arttL['tenloaibaidang'] ?>
        <span class="count-item">
        <?php
        $tinhtt = mysqli_query($connect, "SELECT COUNT(id) as 'tongso' 
        FROM baidang 
        WHERE loaibaidang_id = $idtt");
        $artinhtt = mysqli_fetch_array($tinhtt);
    ?>
        (<?php echo $artinhtt['tongso'] ?>)
        </span></a>
    </li>
    <?php } ?>
</ul>
</li>
</ul>
					<div class="category-left-banner">
					<a id="side_01" href="#"><img src="source/banner/side/banner_ngang_1.jpg" alt="side banner" title="side banner"/></a>
							<a id="side_02" href="#"><img src="source/banner/side/banner_ngang_2.jpg" alt="side banner" title="side banner"/></a>
			</div>
			</aside>
			<section class="category grid col-sm-9 col-xs-12">
					<div class="row">
		
	</div>
				
<div class="row products-grid category-product">
    <div class="card-body" style="width : 370px; margin : 0px auto !important">
    <img src="https://imap.princeton.edu/sites/g/files/toruqf1601/files/imap-mark-hor-multicolor-dark.png"/>
        <form action="xuly.php" method="POST">
            <div class="form-floating mb-6">
            <label for="inputEmail">Tài khoản</label>
                <input class="form-control" pattern="[A-Za-z0-9]+" id="inputEmail" type="text" required name="taikhoan" />
            </div>
            <div class="form-floating mb-6" style="margin-top : 15px">
            <label for="inputPassword">Mật khẩu</label>
                <input class="form-control" pattern="[A-Za-z0-9]+" id="inputPassword" type="password" required name="matkhau" />
            </div>
            <div class="d-flex align-items-center justify-content-between mt-4 mb-0" style="margin: 15px 150px !important">
                <button class="btn btn-primary" type="submit" style="background-color : #FFCC2A; color : black" name="login" >Đăng nhập</button>
            </div>
        </form>
    </div>
</div>
<div class="bottom-toolbar row">
	<div class="col-md-12 pager">
        <ul>
	        <li class="previous page-change hidden"><a href="#!"><i class="fa fa-angle-left"></i></a></li>	        	        <li class="next page-change hidden"><a href="#!"><i class="fa fa-angle-right"></i></a></li>	    </ul>
    </div>
</div>
					<div class="row">
		<div class="col-md-12 visible-md visible-lg cate-bottom-banner">
			<a href="in-chuyen-nghiep.html"><img src="source/banner/bottom/bottom_banner_large_1.jpg" alt="bottom banner" title="bottom banner"/></a>
		</div>
		<div class="col-sm-12 visible-sm cate-bottom-banner">
			<a href="in-chuyen-nghiep.html"><img src="source/banner/bottom/bottom_banner_medium.jpg" alt="bottom banner" title="bottom banner"/></a>
		</div>
		<div class="col-xs-12 visible-xs cate-bottom-banner">
			<a href="in-chuyen-nghiep.html"><img src="source/banner/bottom/bottom_banner_small.jpg" alt="bottom banner" title="bottom banner"/></a>
		</div>
	</div>
			</section>
		</div>
	</div>
</section>    </main>
    

<footer>
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div itemid="#m.a.p" class="col-md-3 col-sm-4 col-xs-12 about-us footer-col">
                    <h2>Thông tin</h2>
                    <div id="IMAP_INFO" class="footer-content">
                        <a href="index.php" class="logo-footer" title="Thiết kế in ấn M.A.P Hải Phòng"><img src="source/system/logo/logo_map_white.png" alt="Thiết kế in ấn M.A.P Hải Phòng" title="Thiết kế in ấn M.A.P Hải Phòng"/></a>                        <ul class="info">
                            <li>
                                <i class="fa fa-home"></i> <span>54D Lê Lợi, Hải Phòng</span>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i> <span>0225 3 757 929 | 0833 757 929</span>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <span>
                                    <a href="mailto:thietkemap@gmail.com">thietkemap@gmail.com</a>
                                </span>
                            </li>
                            <li>
                                <i class="fa fa-skype"></i> <span>thietkemap</span>
                            </li>
                            <li>
                                <i class="fa fa-clock-o"></i> <span>Thứ 2 - thứ 7: 8h00 - 12h00 / 14h00 - 18h00</span>
                            </li>
                            <li>
                            <a href="http://www.dmca.com/Protection/Status.aspx?ID=c41daddb-5c49-4260-a709-7e64677aa513" title="DMCA.com Protection Status" class="dmca-badge"> <img src="images.dmca.com/Badges/dmca_protected_sml_120acee63.png?ID=c41daddb-5c49-4260-a709-7e64677aa513" alt="DMCA.com Protection Status"></a>
                            </li>
                        </ul>
                        <ul class="footer-social">
                            <li>
                                <a href="https://www.facebook.com/imap.vn/" title="Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/115620533818286842928" title="Google Plus">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-4 col-xs-12 corporate footer-col">
                    <h2>Bản đồ</h2>
                    <div class="footer-content">
                        <div id="map">
				<img src="source/system/map.png" />
			</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12 support footer-col">
                    <h2>Menu</h2>
                    <div class="footer-content">
                        <ul>
                        <li><a href="index.php">Trang chủ</a></li>
                                <li><a href="chitiet.php?id=1">Giới thiệu M.A.P</a></li>
                                <li><a href="loaibaidang.php?demuc=1">Dịch vụ</a></li>
                                <li><a href="loaibaidang.php?demuc=2">Nhật ký sáng tạo</a></li>
                                <li><a href="loaibaidang.php?demuc=3">Tin tức</a></li>
                                <li><a href="chitiet.php?id=2">Liên hệ</a></li>
                                                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="copy-right">M.A.P Co.,LTD</p>
                    <a href="#" id="back-to-top">
                        <i class="fa fa-chevron-up"></i> Top
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
    <div id="sitebodyoverlay"></div>
	<nav id="mb-main-menu" class="main-menu">
    <div class="mb-menu-title">
        <h3>Navigation</h3>
        <span id="close-mb-menu">
            <i class="fa fa-times-circle"></i>
        </span>
    </div>
    <ul class="cate_list">
        <li class="level0"><a href="index.php">Trang chủ</a></li><li class="level0"><a href="gioi-thieu-m-a-p.html">Giới thiệu M.A.P</a></li><li class="level0 parent col1"><a href="#"><span>Dịch vụ</span><i class="fa fa-chevron-down"></i><i class="fa fa-chevron-right"></i></a><ul class="level0"><li><a href="thiet-ke.html">Thiết kế</a></li><li><a href="in-chuyen-nghiep.html">In chuyên nghiệp</a></li><li><a href="thiet-ke-va-in.html">Thiết kế và in</a></li></ul></li><li class="level0 parent col1"><a href="#"><span>Nhật ký sáng tạo</span><i class="fa fa-chevron-down"></i><i class="fa fa-chevron-right"></i></a><ul class="level0"><li><a href="kien-thuc-thuong-hieu.html">Kiến thức thương hiệu</a></li><li><a href="chia-se-tai-lieu-thiet-ke.html">Chia sẻ tài liệu thiết kế</a></li><li><a href="nhat-ky-sang-tao-m-a-p.html">Nhật ký sáng tạo M.A.P</a></li></ul></li><li class="level0"><a href="lien-he.html">Liên hệ</a></li>    </ul>
</nav>    <!-- Phone -->
    <div class="quick-alo-phone quick-alo-green quick-alo-show" id="quick-alo-phoneIcon" style="
        position: fixed;
        visibility: visible;
        background-color: transparent;
        width: 200px;
        height: 200px;
        cursor: pointer;
        z-index: 99999 !important;
        -webkit-backface-visibility: hidden;
        -webkit-transform: translateZ(0);
        -webkit-transition: visibility .5s;
        -moz-transition: visibility .5s;
        -o-transition: visibility .5s;
        transition: visibility .5s;
        left: -70px;
        bottom: -30px;
        ">
        <div class="tel_phone" style="
            border-radius: 30px;
            line-height: 45px;
            position: absolute;
            height: 45px;
            font-size: 17px;
            text-align: center;
            background-color: #fbc443;
            top: 73px;
            right: -46px;
            padding: 0;
            font-weight: 600;
            width: 165px;
            padding-left: 29px;
        ">
            <i class="fa fa-phone" style="font-size: 24px;color: #444;position: absolute;left: 16px;top: 10px;"></i>
            <a href="tel:0833757929" style="margin: 0;color: #444;font-size: 16px;">0833 757 929</a>
        </div> 
    </div>
    <!-- //Phone_END -->
    <!-- <div class="zalo-chat-widget" data-oaid="2516318981320648182" data-welcome-message="Rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="350" data-height="420"></div> -->
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

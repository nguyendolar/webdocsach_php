<?php
include('../admin/inc/connect.php');
		
$id = $_GET["id"];
$sql = "
        SELECT * 
        FROM baidang
        WHERE id = '".$id."'
    ";
$query = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="vi" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article# title: http://ogp.me/ns#title image: http://ogp.me/ns#image">

<!-- Mirrored from i-map.vn/gioi-thieu-m-a-p.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2022 14:41:44 GMT -->
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
        I-M.A.P    </title>
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

    <meta name="robots" content="index,follow"/><meta name="title" content="Giới thiệu M.A.P"/><meta property="article:tag" content="hải phòng"/><meta property="article:tag" content="công ty M.A.P"/><meta property="article:tag" content="M.A.P"/><meta name="description" content="Giới thiệu công ty thiết kế, in ấn M.A.P. Profile - hồ sơ năng lực công ty M.A.P"/><meta name="twitter:card" content="summary"/><meta name="twitter:site" content="Giới thiệu M.A.P"/><meta name="twitter:title" content="Giới thiệu M.A.P"/><meta name="twitter:description" content="Giới thiệu công ty thiết kế, in ấn M.A.P. Profile - hồ sơ năng lực công ty M.A.P"/><meta name="twitter:image" content="https://i-map.vn/source/bai_viet/gioi_thieu_map/dsc_0001-1024x576.jpg"/><meta name="twitter:image:src" content="https://i-map.vn/source/bai_viet/gioi_thieu_map/dsc_0001-1024x576.jpg"/><meta property="og:site_name" content="Thiết kế in ấn M.A.P Hải Phòng"/><meta property="og:title" content="Giới thiệu M.A.P"/><meta property="article:author" content="https://i-map.vn/author/Nguyễn+Anh+Tuấn"/><meta property="og:locale" content="vi_VN"/><meta property="og:type" content="article"/><meta property="og:url" content="https://i-map.vn/gioi-thieu-m-a-p.html"/><meta property="og:image" content="https://i-map.vn/source/bai_viet/gioi_thieu_map/dsc_0001-1024x576.jpg"/><meta property="og:image:width" content="800"/><meta property="og:image:height" content="600"/><meta property="og:description" content="Giới thiệu công ty thiết kế, in ấn M.A.P. Profile - hồ sơ năng lực công ty M.A.P"/>    <link rel="canonical" href="gioi-thieu-m-a-p.html">    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:500,300,700,400"/>    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:500,300,700,400"/>    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Condensed:500,300,700,400"/>    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap.min.css"/>    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>    <link rel="stylesheet" href="printshop/css/theme-yellow.min.css"/>    <link rel="stylesheet" href="printshop/css/responsive.min.css"/>    <link rel="stylesheet" href="cdn.jsdelivr.net/jquery.jssocials/1.3.1/jssocials.css"/><link rel="stylesheet" href="cdn.jsdelivr.net/jquery.jssocials/1.3.1/jssocials-theme-minima.css"/><link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe.min.css"/><link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/default-skin/default-skin.min.css"/></head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
            title: 'Thành công!',
            icon: 'success',
            timer: 3000,
            buttons: true,
            type: 'success'
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
                                    </form>                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Main Header: End-->
</header>    <main class="main ">
       	   <section class="header-page">
	<div class="container">
		<div class="row">
			<div class="col-sm-7 visible-lg visible-md visible-sm">
				<h2 class="mh-title"></h2>
			</div>
			<div class="breadcrumb-w col-sm-5">
				<span>Bạn ở đây:</span>
				<ul class="breadcrumb"><li><a href="index.php">Trang chủ</a></li><li><span><?php echo $row['tieude'] ?></span></li></ul>			</div>
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
		<div class="col-xs-12 category-image visible-md visible-lg">
            <?php 
            $sqla = "
            SELECT * 
            FROM anh
            WHERE id = 1
        ";
    $querya = mysqli_query($connect, $sqla);
    $rowa = mysqli_fetch_array($querya);
            ?>
			<a href="index.php"><img src="../admin/image/<?php echo $rowa['tenanh'] ?>" style="width : 1000px;height : 230px" alt="top banner" title="top banner"/></a>
		</div>
		<div class="col-xs-12 category-image visible-sm">
			<a href="index.php"><img src="source/banner/top/top_banner_medium.jpg" alt="top banner" title="top banner"/></a>
		</div>
		<div class="col-xs-12 category-image visible-xs">
			<a href="index.php"><img src="source/banner/top/top_banner_small.jpg" alt="top banner" title="top banner"/></a>
		</div>
	</div>
	<!-- Post -->
	<div class="article">
		<div class="article-header">
			<h1 itemprop="name headline" class="title"><?php echo $row['tieude'] ?></h1>
			<div class="subtitle">
                <span class="created">
                    <a href="#" itemprop="datePublished"><time datetime='' itemprop='datePublished'>Đăng lúc <?php echo $row['thoigiandang'] ?></time></a>                </span>
                 || Tác giả :                 <span itemscope itemprop='author' itemtype='http://schema.org/Person'>
                    <span itemprop='name'>
                        <a href="#" itemprop="url"><?php echo $row['tacgia'] ?></a>                    </span>
                </span>
				<span class="share-social"></span>
			</div>
		</div>
		<div itemprop='articleBody' class="article-body">
            <!--Nội dung-->
            <?php echo $row['noidung'] ?>
			 <!---->
<p><span style="border-radius: 2px; text-indent: 20px; width: auto; padding: 0px 4px 0px 0px; text-align: center; font: bold 11px/20px 'Helvetica Neue',Helvetica,sans-serif; color: #ffffff; background: #bd081c  no-repeat scroll 3px 50% / 14px 14px; position: absolute; opacity: 0.85; z-index: 8675309; display: none; cursor: pointer; top: 604px; left: 18px;">Save</span></p>			<span class="share-social-bottom"></span>
			
		</div>
        <!-- Related posts -->
        <div class="related_article">
	<h5>Bình luận đánh giá</h5>
	<ul>
    <?php 
    $id = $_GET["id"];
        $binhluan = "SELECT a.* , b.hoten as 'hoten'
        FROM binhluandanhgia as a, nguoidung as b
        WHERE a.nguoidung_id = b.id AND a.baidang_id = '".$id."' AND traloi = 0
        ORDER BY a.id DESC";
        $rsbl = mysqli_query($connect, $binhluan);
        while ($bluan = mysqli_fetch_array($rsbl, MYSQLI_ASSOC)) {
            $blid = $bluan['id'];
            $idModelEdit = "exampleModalEdit".$bluan["id"];
        ?>
        <li>
            <p style="word-wrap : break-word"><strong><?php echo $bluan['hoten'] ?> : </strong>(<?php
            switch ($bluan['danhgia']) {
                case 1:
                    echo '⭐';
                   break;
                case 2:
                    echo '⭐⭐';
                    break;
                case 3:
                    echo '⭐⭐⭐';
                    break;
                case 4:
                    echo '⭐⭐⭐⭐';
                    break;
                default:
                    echo '⭐⭐⭐⭐⭐';
                    break;
            }
            ?>)&ensp;<?php echo $bluan['binhluan'] ?>&ensp;(<?php echo date("d-m-y", strtotime($bluan["ngay"])); ?>)
            <?php
                if (isset($_SESSION['taikhoan'])) { ?>
            <a style="margin-left : 15px; color : #FBC443" data-toggle="modal" data-target="#<?php echo $idModelEdit ?>">
            Trả lời
        </a>
        <?php } ?>
          <div class="modal fade" id="<?php echo $idModelEdit ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="" id="exampleModalLabel">Trả lời bình luận của <?php echo $bluan['hoten'] ?> : <?php echo $bluan['binhluan'] ?></h4>
                </div>
                <div class="modal-body">
                <form action="xuly.php" method="POST">
                <input type="hidden" value="<?php echo $_SESSION['id'];?>" name="idnguoidung">
                <input type="hidden" value="<?php echo $_GET["id"];?>" name="idbaidang">
                <input type="hidden" value="<?php echo $bluan['id'];?>" name="traloi">
                <input type="hidden" value="0" name="sosao">
                <input class="form-control" id="inputPassword" type="text" placeholder="Nhập bình luận ...." required name="binhluan" />
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color : #b2b2b2;">Đóng</button>
                <button type="submit" class="btn btn-primary" style="background-color : #FFCC2A; color : black" name="tl">Trả lời</button>
                </form>
            </div>
            </div>
            </div>
            </div>
        </p>
                
            <?php
            $tl = "SELECT a.* , b.hoten as 'hoten'
            FROM binhluandanhgia as a, nguoidung as b
            WHERE a.nguoidung_id = b.id AND a.baidang_id = '".$id."' AND traloi = '".$blid."'
            ORDER BY a.id DESC";
            $rstl = mysqli_query($connect, $tl);
            while ($bluantl = mysqli_fetch_array($rstl, MYSQLI_ASSOC)) { ?>
            <p>&ensp;&ensp;&ensp;<?php echo $bluantl['hoten'] ?> : &ensp;<?php echo $bluantl['binhluan'] ?>&ensp;(<?php echo date("d-m-y", strtotime($bluantl["ngay"])); ?>)</p>
            <?php } ?>
        </li>
        <?php } ?>
    </ul>
</div>
<?php
     if (isset($_SESSION['taikhoan'])) { ?>
<form action="xuly.php" method="POST">
<input type="hidden" value="<?php echo $_SESSION['id'];?>" name="idnguoidung">
<input type="hidden" value="<?php echo $_GET["id"];?>" name="idbaidang">
<div class="col">
    <div class="row" style="display: flex">
        <div style="width : 619px; margin-right : 10px;margin-left : 16px">
            <label for="inputPassword">Nhập bình luận của bạn</label>
            <input class="form-control" id="inputPassword" type="text" required name="binhluan" />
        </div>
        <div style="width : 150px;margin-right : 10px">
            <label for="inputPassword">Đánh giá</label>
            <select class="form-control" name="sosao" required>
                            <option value="" selected>Chọn số sao</option>
                            <option value="1" >⭐</option>
                            <option value="2" >⭐⭐</option>
                            <option value="3" >⭐⭐⭐</option>
                            <option value="4" >⭐⭐⭐⭐</option>
                            <option value="5" >⭐⭐⭐⭐⭐</option>
            </select>                                         
        </div>
        <div style="margin-top : 24px">
            <button class="btn btn-primary" type="submit" style="background-color : #FFCC2A; color : black" name="bl" >Đăng</button>
        </div>
    </div>
</div>
            
    
        </form>
        <?php } ?>
	</div>

                <!-- Recent posts -->
        <div class="related_article" style="margin-top : 15px">
	<h5>Bài viết gần đây</h5>
	<ul style="list-style: none;">
    <?php 
        $baidang = "SELECT * 
        FROM baidang 
        WHERE id != 1 AND id != 2
        ORDER BY id DESC
        LIMIT 10";
        $resultbd = mysqli_query($connect, $baidang);
        while ($bd = mysqli_fetch_array($resultbd, MYSQLI_ASSOC)) {
        ?>
        <li>
            <a href="chitiet.php?id=<?php echo $bd['id'] ?>" title="<?php echo $bd['tieude'] ?>">
            <?php echo $bd['tieude'] ?> (<?php echo date("d-m", strtotime($bd["thoigiandang"])); ?>)</a>
        </li>
        <?php } ?>
    </ul>
</div>
	</div>
    <!-- Services -->
    <div class="row">
</div>
<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <!-- Background of PhotoSwipe. 
         It's a separate element, as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>
    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">
        <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
        <!-- don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <!--  Controls are self-explanatory. Order can be changed. -->
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div> 
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>
            <div class="pswp__caption">
                <div class="pswp__caption__center" style="font-size: 20px"></div>
            </div>
          </div>
        </div>
</div>					<div class="row">
		<div class="col-md-12 visible-md visible-lg cate-bottom-banner">
			<a href="#"><img src="source/banner/bottom/bottom_banner_large_1.jpg" alt="bottom banner" title="bottom banner"/></a>
		</div>
		<div class="col-sm-12 visible-sm cate-bottom-banner">
			<a href="#"><img src="source/banner/bottom/bottom_banner_medium.jpg" alt="bottom banner" title="bottom banner"/></a>
		</div>
		<div class="col-xs-12 visible-xs cate-bottom-banner">
			<a href="#"><img src="source/banner/bottom/bottom_banner_small.jpg" alt="bottom banner" title="bottom banner"/></a>
		</div>
	</div>
			</section>
		</div>
	</div>
</section>    </main>
    <script type="application/ld+json">
    {
        "@context": "http://schema.org", 
        "@type": "WebSite", 
        "url": "https://i-map.vn", 
        "name": "Thiết kế in ấn M.A.P Hải Phòng",
        "author": {
            "@type": "Person",
            "name": "Thiết kế in ấn M.A.P Hải Phòng"
        },
        "description": "M.A.P chuyên thiết kế và in ấn ở tại Hải Phòng. Chúng tôi in ấn trên công nghệ in offset hiện đại nhất. Hotline: 0833 757 929",
        "publisher": "Thiết kế in ấn M.A.P Hải Phòng",
        "potentialAction": {
            "@type": "SearchAction", 
            "target": "https://i-map.vn/search?keyword={search_term}", 
            "query-input": "required name=search_term"
        }
    }
</script>
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "LocalBusiness",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Hải Phòng",
            "addressRegion": "HP",
            "postalCode":"180000",
            "streetAddress": "54D Lê Lợi, Hải Phòng"
        },
        "description": "M.A.P chuyên thiết kế và in ấn ở tại Hải Phòng. Chúng tôi in ấn trên công nghệ in offset hiện đại nhất. Hotline: 0833 757 929",
        "name": "Thiết kế in ấn M.A.P Hải Phòng",
        "telephone": "0225 3 757 929 | 0833 757 929",
        "openingHours": "Mo,Tu,We,Th,Fr 08:00-18:00",
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "20.859023",
            "longitude": "106.692823"
        },
        "sameAs" : [
            "https://www.facebook.com/imap.vn/"
        ]
    }
</script>
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
        <li class="level0"><a href="index.php">Trang chủ</a></li><li class="level0"><a href="gioi-thieu-m-a-p.html">Giới thiệu M.A.P</a></li><li class="level0 parent col1"><a href="#"><span>Dịch vụ</span><i class="fa fa-chevron-down"></i><i class="fa fa-chevron-right"></i></a><ul class="level0"><li><a href="thiet-ke-in/thiet-ke.html">Thiết kế</a></li><li><a href="#">In chuyên nghiệp</a></li><li><a href="thiet-ke-in/thiet-ke-va-in.html">Thiết kế và in</a></li></ul></li><li class="level0 parent col1"><a href="#"><span>Nhật ký sáng tạo</span><i class="fa fa-chevron-down"></i><i class="fa fa-chevron-right"></i></a><ul class="level0"><li><a href="thiet-ke-in/kien-thuc-thuong-hieu.html">Kiến thức thương hiệu</a></li><li><a href="thiet-ke-in/chia-se-tai-lieu-thiet-ke.html">Chia sẻ tài liệu thiết kế</a></li><li><a href="thiet-ke-in/nhat-ky-sang-tao-m-a-p.html">Nhật ký sáng tạo M.A.P</a></li></ul></li><li class="level0"><a href="thiet-ke-in/lien-he.html">Liên hệ</a></li>    </ul>
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
<script src="sp.zalo.me/plugins/sdk.js"></script>    <script src="cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    <script src="cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js"></script> 	<script src="printshop/js/jssocials.min.js"></script><script src="cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe.min.js"></script><script src="cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe-ui-default.min.js"></script><script>
//<![CDATA[

$(".share-social").jsSocials({
    shares: ["email", "twitter", "facebook", "googleplus", "linkedin"],
    url: "https://i-map.vn/s/16",
    text: "Giới thiệu M.A.P",
    showLabel: false,
	showCount: false,
	shareIn: "popup",
	hashtags: "hảiphòng,côngtyM.A.P,M.A.P",
});
$(".share-social-bottom").jsSocials({
    shares: ["email", "twitter", "facebook", "googleplus", "linkedin"],
    url: "https://i-map.vn/s/16",
    text: "Giới thiệu M.A.P",
    showLabel: true,
	showCount: true,
	shareIn: "popup",
	hashtags: "hảiphòng,côngtyM.A.P,M.A.P",
});
var initPhotoSwipeFromDOM = function(gallerySelector) {

    // parse slide data (url, title, size ...) from DOM elements 
    // (children of gallerySelector)
    var parseThumbnailElements = function(el) {

        var thumbElements = $("#recent-works-gallery").find("figure"),
            numNodes = thumbElements.length,
            items = [],
            figureEl,
            linkEl,
            size,
            item;

        for(var i = 0; i < numNodes; i++) {

            figureEl = thumbElements[i]; // <figure> element

            // include only element nodes 
            if(figureEl.nodeType !== 1) {
                continue;
            }

            linkEl = figureEl.children[0]; // <a> element
            size = linkEl.getAttribute("data-size").split("x");
            // create slide object
            item = {
                src: linkEl.getAttribute("href"),
                w: parseInt(size[0], 10),
                h: parseInt(size[1], 10)
            };

            if(figureEl.children.length > 1) {
                // <figcaption> content
                item.title = figureEl.children[1].innerHTML; 
            }

            if(linkEl.children.length > 0) {
                // <img> thumbnail element, retrieving thumbnail url
                item.msrc = linkEl.children[0].getAttribute("src");
            } 

            item.el = figureEl; // save link to element for getThumbBoundsFn
            items.push(item);
        }

        return items;
    };

    // find nearest parent element
    var closest = function closest(el, fn) {
        return el && ( fn(el) ? el : closest(el.parentNode, fn) );
    };

    // triggers when user clicks on thumbnail
    var onThumbnailsClick = function(e) {
        e = e || window.event;
        e.preventDefault ? e.preventDefault() : e.returnValue = false;

        var eTarget = e.target || e.srcElement;

        // find root element of slide
        var clickedListItem = closest(eTarget, function(el) {
            return (el.tagName && el.tagName.toUpperCase() === "FIGURE");
        });
        console.log("clickedListItem", clickedListItem);

        if(!clickedListItem) {
            return;
        }

        // find index of clicked item by looping through all child nodes
        // alternatively, you may define index via data- attribute
        var clickedGallery = $("#recent-works-gallery").find("figure"),
            numChildNodes = clickedGallery.length,
            nodeIndex = 0,
            index;

        for (var i = 0; i < numChildNodes; i++) {
            if(clickedGallery[i] === clickedListItem) {
                index = nodeIndex;
                break;
            }
            nodeIndex++;
        }

        if(index >= 0) {
            // open PhotoSwipe if valid index found
            openPhotoSwipe( index, clickedListItem.parentNode.parentNode.parentNode.parentNode.parentNode );
        }
        return false;
    };

    // parse picture index and gallery index from URL (#&pid=1&gid=2)
    var photoswipeParseHash = function() {
        var hash = window.location.hash.substring(1),
        params = {};
        if(hash.length < 5) {
            return params;
        }
        var vars = hash.split("&");
        for (var i = 0; i < vars.length; i++) {
            if(!vars[i]) {
                continue;
            }
            var pair = vars[i].split("=");  
            if(pair.length < 2) {
                continue;
            }           
            params[pair[0]] = pair[1];
        }
        if(params.gid) {
            params.gid = parseInt(params.gid, 10);
        }
        return params;
    };

    var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
        var pswpElement = document.querySelectorAll(".pswp")[0],
            gallery,
            options,
            items;

        items = parseThumbnailElements(galleryElement);

        // define options (if needed)
        options = {

            // define gallery index (for URL)
            galleryUID: galleryElement.getAttribute("data-pswp-uid"),

            getThumbBoundsFn: function(index) {
                // See Options -> getThumbBoundsFn section of documentation for more info
                var thumbnail = items[index].el.getElementsByTagName("img")[0], // find thumbnail
                    pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                    rect = thumbnail.getBoundingClientRect(); 

                return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
            }
        };
        // PhotoSwipe opened from URL
        if(fromURL) {
            if(options.galleryPIDs) {
                // parse real index when custom PIDs are used 
                // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
                for(var j = 0; j < items.length; j++) {
                    if(items[j].pid == index) {
                        options.index = j;
                        break;
                    }
                }
            } else {
                // in URL indexes start from 1
                options.index = parseInt(index, 10) - 1;
            }
        } else {
            options.index = parseInt(index, 10);
        }

        // exit if index not found
        if( isNaN(options.index) ) {
            return;
        }

        if(disableAnimation) {
            options.showAnimationDuration = 0;
        }

        // Pass data to PhotoSwipe and initialize it
        gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
        gallery.init();
    };

    // loop through all gallery elements and bind events
    var galleryElements = document.querySelectorAll( gallerySelector );

    for(var i = 0, l = galleryElements.length; i < l; i++) {
        galleryElements[i].setAttribute("data-pswp-uid", i+1);
        galleryElements[i].onclick = onThumbnailsClick;
    }

    // Parse URL and open gallery if it contains #&pid=3&gid=1
    var hashData = photoswipeParseHash();
    if(hashData.pid && hashData.gid) {
        openPhotoSwipe( hashData.pid ,  galleryElements[ hashData.gid - 1 ], true, true );
    }
};
initPhotoSwipeFromDOM("#recent-works-gallery");

//]]>
</script><script src="cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script><script src="cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script><script src="cdnjs.cloudflare.com/ajax/libs/jquery-scrollpanel/0.7.0/jquery-scrollpanel.min.js"></script><script src="printshop/js/theme.js"></script><script src="images.dmca.com/Badges/DMCABadgeHelper.min.js"></script>    <!--[if lt IE 9]>
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

<!-- Mirrored from i-map.vn/gioi-thieu-m-a-p.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2022 14:41:53 GMT -->
</html>

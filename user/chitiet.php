<?php
include('../admin/inc/connect.php');
		
$id = $_GET["id"];
$sql = "
        SELECT * 
        FROM sach
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
        Website Đọc Sách    </title>
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
    <?php include('header.php'); ?>
    <!--Top Header: End-->
    <!--Main Header: Begin-->
    <!--Main Header: End-->
</header>    <main class="main ">
<section class="category-w parten-bg">
	<div class="container">
		<div class="row">
<section class="category-w parten-bg">
	<div class="container">
		<div class="row">
            
			<section class="category grid col-sm-12 col-xs-12">
					<div class="row">
	<!-- Post -->
	<div class="article">
		<div class="article-header">
			<h1 itemprop="name headline" class="title"><?php echo $row['tensach'] ?></h1>
			<div class="subtitle">
                 Tác giả : <span itemscope itemprop='author' itemtype='http://schema.org/Person'>
                    <span itemprop='name'>
                        <a href="#" itemprop="url"><?php echo $row['tacgia'] ?></a>                    </span>
                </span>
				<span class="share-social"></span>
			</div>
		</div>
		<div itemprop='articleBody' class="article-body">
        <?php
            $idnd = $_SESSION['id'];
            $sqlnd = "
        SELECT * 
        FROM nguoidung
        WHERE id = '".$idnd."'
    ";
$querynd = mysqli_query($connect, $sqlnd);
$rownd = mysqli_fetch_array($querynd);
if($rownd['capbac'] == 2 || $rownd['capbac'] == 3){
            ?>
            <!--Nội dung-->
            <?php echo substr($row['noidung'], 0, 9000) ?> ................................
            
            <div class="d-flex align-items-center justify-content-between mt-4 mb-0" style="text-align : right !important">
                <a class="btn btn-primary" href="vip.php" style="background-color : #FFCC2A; color : black">Nâng cấp VIP để đọc tiếp</a>
            </div>
            <?php }else{ ?>
                <?php echo $row['noidung'] ?>
            <?php } ?>
			 <!---->
<p><span style="border-radius: 2px; text-indent: 20px; width: auto; padding: 0px 4px 0px 0px; text-align: center; font: bold 11px/20px 'Helvetica Neue',Helvetica,sans-serif; color: #ffffff; background: #bd081c  no-repeat scroll 3px 50% / 14px 14px; position: absolute; opacity: 0.85; z-index: 8675309; display: none; cursor: pointer; top: 604px; left: 18px;">Save</span></p>			<span class="share-social-bottom"></span>
			
		</div>
	</div>

                <!-- Recent posts -->
        
	</div>
    <!-- Services -->
    <div class="row">
</div>
<!-- Root element of PhotoSwipe. Must have class pswp. -->

</div>					
			</section>
		</div>
	</div>
</section>    </main>
    

<footer>
    <?php ?>
</footer>
    
    <!-- //Phone_END -->
    <!-- <div class="zalo-chat-widget" data-oaid="2516318981320648182" data-welcome-message="Rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="350" data-height="420"></div> -->
<script src="sp.zalo.me/plugins/sdk.js"></script>    <script src="cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    <script src="cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js"></script> 	<script src="printshop/js/jssocials.min.js"></script><script src="cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe.min.js"></script><script src="cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe-ui-default.min.js"></script>
//<![CDATA[

    </body>

<!-- Mirrored from i-map.vn/gioi-thieu-m-a-p.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2022 14:41:53 GMT -->
</html>

<?php 
include('../admin/inc/connect.php');
?>
<!DOCTYPE html>
<html lang="vi"
    prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article# title: http://ogp.me/ns#title image: http://ogp.me/ns#image">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>
        Website Đọc Sách</title>
    <link href="favicon.ico" type="image/x-icon" rel="icon" />
    <link href="favicon.ico" type="image/x-icon" rel="shortcut icon" />
    <link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
    <link rel="manifest" href="favicons/manifest.json">
    <meta name="google-site-verification" content="G3TfR5HCFTK1yj7LUinb_S33dDlweN8xV7brWPPj4uM" />
    <meta name="p:domain_verify" content="c4214d5df328316c1de3508b4d79e212" />
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta name="robots" content="index,follow" />
    
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:500,300,700,400" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:500,300,700,400" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Condensed:500,300,700,400" />
    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="printshop/css/theme-yellow.min.css" />
    <link rel="stylesheet" href="printshop/css/responsive.min.css" />
    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" />
    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.min.css" />
    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe.min.css" />
    <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/default-skin/default-skin.min.css" />
    <link rel="stylesheet" href="printshop/css/settings.min.css" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <header>
    <?php
    if (isset($_GET['msg'])) {
    ?>
<div class="toast" data-delay="2000" style="position:fixed;top: 100PX; right: 10PX;z-index: 2000;width: 300px">
    <script>
        swal({
            title: 'Đăng nhập thành công!',
            icon: 'success',
            timer: 3000,
            buttons: true,
            type: 'success'
        })
    </script>
</div>
    <?php } ?>
        <!--Main Header: Begin-->
        <section class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1 col-md-2 col-sm-4 col-xs-5 w-logo">
                        <div class="logo hd-pd ">
                            <a href="index.php" ><img
                                    src="http://bizweb.dktcdn.net/100/122/937/files/logo-lets-read-eng-n-vie-2.jpg?v=1475655360137" alt="Thiết kế in ấn M.A.P Hải Phòng"
                                     style="max-height: 60px;" /></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 visible-md visible-lg">
                        <nav id="main-menu" class="main-menu clearfix">
                            <ul>
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
                                </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!--Main Header: End-->
    </header>
    <main class="main ">
        <!--Home slider : Begin-->
        <section class="home-slidershow">
            <div class="slide-show">
                <div class="vt-slideshow">
                    <ul>
                        <li class="slide15" data-transition="random">
                            <img src="source/slides/thiet-ke-online-5.jpg" alt="Liên hệ Zalo" />
                            <div class="tp-caption lfr" data-x="left" data-hoffset="" data-y="170" data-start="800"
                                data-speed="200" data-endspeed="100">
                                <span class="style1"></span>
                            </div>
                            <div class="tp-caption lfb" data-x="left" data-hoffset="" data-y="225" data-start="800"
                                data-speed="200" data-endspeed="100">
                                <span class="style2">
                                </span>
                            </div>
                            <div class="tp-caption lfr" data-x="left" data-y="367" data-start="800" data-speed="200"
                                data-easing="easeInOutQuint" data-endspeed="100">
                                <a href="gioi-thieu-m-a-p.html" class="btn-sn">Đọc thêm</a>
                            </div>
                        </li>
                        <li class="slide14" data-transition="random">
                            <img src="source/slides/bg_slider_3-recovered.jpg"
                                alt="&amp;lt;span class=&amp;quot;textcolor&amp;quot;&amp;gt;IN&amp;lt;/span&amp;gt;Name Card" />
                            <div class="tp-caption lfr" data-x="left" data-hoffset="" data-y="170" data-start="800"
                                data-speed="200" data-endspeed="100">
                                <span class="style1"><span class="textcolor">IN</span>Name Card</span>
                            </div>
                            <div class="tp-caption lfb" data-x="left" data-hoffset="" data-y="225" data-start="800"
                                data-speed="200" data-endspeed="100">
                                <span class="style2">
                                    - Thiết kế mẫu trong vòng 24h<br />- Sản phẩm chuyên nghiệp <br />- In trên máy in
                                    kỹ thuật số <br /><big>Hãy liên hệ ngay với chúng tôi</big><br /><strong> Hotline:
                                        0123.3 757 929</strong><br /> </span>
                            </div>
                            <div class="tp-caption lfr" data-x="left" data-y="367" data-start="800" data-speed="200"
                                data-easing="easeInOutQuint" data-endspeed="100">
                                
                            </div>
                        </li>
                        <li class="slide12" data-transition="random">
                            <img src="source/slides/bg_slider_ho_so_nang_luc.jpg"
                                alt="&amp;lt;span class=&amp;quot;textcolor&amp;quot;&amp;gt;Hồ sơ năng lực &amp;lt;/span&amp;gt;" />
                            <div class="tp-caption lfr" data-x="left" data-hoffset="" data-y="170" data-start="800"
                                data-speed="200" data-endspeed="100">
                                <span class="style1"><span class="textcolor">Hồ sơ năng lực </span></span>
                            </div>
                            <div class="tp-caption lfb" data-x="left" data-hoffset="" data-y="225" data-start="800"
                                data-speed="200" data-endspeed="100">
                                <span class="style2">
                                    <strong>Hãy để Hồ sơ năng lực là điểm khởi đầu với các đối tác tiềm
                                        năng</strong><br />- Tư vấn thiết kế Hồ sơ năng lực<br />- Xây dựng nội dung,
                                    hình ảnh chuyên nghiệp<br />- Sản phẩm in trên công nghệ hiện đại<br />- Đáp ứng với
                                    mọi số lượng bản in<br /><big>Hãy liên hệ ngay với chúng tôi để được tư vấn! </big>
                                </span>
                            </div>
                            <div class="tp-caption lfr" data-x="left" data-y="367" data-start="800" data-speed="200"
                                data-easing="easeInOutQuint" data-endspeed="100">
                                
                            </div>
                        </li>
                        <li class="slide13" data-transition="random">
                            <img src="source/slides/bg_slider_he_thong_nhan_dien_thuong_hieu.jpg"
                                alt="&amp;lt;span class=&amp;quot;textcolor&amp;quot;&amp;gt;Nhận diện thương hiệu&amp;lt;/span&amp;gt;" />
                            <div class="tp-caption lfr" data-x="left" data-hoffset="" data-y="170" data-start="800"
                                data-speed="200" data-endspeed="100">
                                <span class="style1"><span class="textcolor">Nhận diện thương hiệu</span></span>
                            </div>
                            <div class="tp-caption lfb" data-x="left" data-hoffset="" data-y="225" data-start="800"
                                data-speed="200" data-endspeed="100">
                                <span class="style2">
                                    <strong> Hãy liên hệ với Chúng tôi để được tư vấn!<br />Hotline: 0225.3 757
                                        929</strong> </span>
                            </div>
                            <div class="tp-caption lfr" data-x="left" data-y="367" data-start="800" data-speed="200"
                                data-easing="easeInOutQuint" data-endspeed="100">
                                
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="trust-w">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 block-trust trust-col-quantity">
                        <div class="tr-icon"><i class="fa fa-paper-plane-o fa-lg"></i></div>
                        <div class="tr-text">
                            <h3>Tốc độ</h3>
                            <span class="tr-line"></span>
                            <p>Tư vấn thiết kế chuyên nghiệp đem lại cho khách hàng những mẫu thiết kế sáng tạo. Sản
                                phẩm in chuyên nghiệp.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 block-trust trust-col-quantity">
                        <div class="tr-icon"><i class="fa fa-thumbs-o-up fa-lg"></i></div>
                        <div class="tr-text">
                            <h3>Chất lượng</h3>
                            <span class="tr-line"></span>
                            <p>Tại M.A.P chất lượng là tôn chỉ trong mọi hoạt động. Sản phẩm bàn giao sẽ làm hài lòng
                                quý khách hàng</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 block-trust trust-col-quantity">
                        <div class="tr-icon"><i class="fa fa-lightbulb-o fa-lg"></i></div>
                        <div class="tr-text">
                            <h3>Sáng tạo</h3>
                            <span class="tr-line"></span>
                            <p>M.A.P luôn sáng tạo không ngừng.
                                Nỗ lực mang tới khách hàng những sản phẩm
                                với chất lượng tốt nhất.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 block-trust trust-col-quantity">
                        <div class="tr-icon"><i class="fa fa-money fa-lg"></i></div>
                        <div class="tr-text">
                            <h3>Giá trị</h3>
                            <span class="tr-line"></span>
                            <p>M.A.P cam kết cung cấp các sản phẩm tối ưu với chi phí thấp nhất.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-out-recent">
            <div class="container">
                <div class="row">
                    <div class="block-title-w">
                        <h2 class="block-title">
                            Sản phẩm </h2>
                        <span class="icon-title">
                            <span></span>
                            <i class="fa fa-star"></i>
                        </span>
                        <ul>
                            <li class="active">
                                <a data-toggle="tab" href="#tabproductall">
                                    Tất cả </a>
                            </li>
                            <?php 
                            $query = "SELECT * 
                            FROM loaisanpham";
                            $result = mysqli_query($connect, $query);
                            while ($arUser = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            ?>
                            <li class="last"><a data-toggle="tab" href="#tabproduct<?php echo $arUser['id'] ?>"><?php echo $arUser['tenloaisanpham'] ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="tab-content" id="recent-works-gallery" itemscope
                        itemtype="http://schema.org/ImageGallery">
                        <div class="tab-pane active" id="tabproductall">
                            <!-- DS sản phẩm -->
                            <?php 
                            $query = "SELECT * 
                            FROM sanpham 
                            ORDER BY id DESC
                            LIMIT 9";
                            $result = mysqli_query($connect, $query);
                            while ($arUser = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            ?>
                            <div class="col-md-4 col-sm-6 col-xs-6 block-recent">
                                <div class="w-block-recent-work">
                                    <div class="image-recent-work">
                                        <figure itemprop="associatedMedia" itemscope
                                            itemtype="http://schema.org/ImageObject">
                                            <a href="../admin/image/<?php echo $arUser['anhsanpham'] ?>"
                                                itemprop="contentUrl" data-size="1600x1068"
                                                data-author="<?php echo $arUser['tensanpham'] ?>"><img style="width : 360px; height : 240px"
                                                    src="../admin/image/<?php echo $arUser['anhsanpham'] ?>"
                                                    alt="<?php echo $arUser['tensanpham'] ?>"
                                                    title="<?php echo $arUser['tensanpham'] ?>" itemprop="thumbnail" /></a>
                                            <figcaption itemprop="caption description" style="display: none"><?php echo $arUser['tensanpham'] ?></figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <!-- -->
                        </div>
                        <?php 
                            $queryl = "SELECT * 
                            FROM loaisanpham";
                            $resultl = mysqli_query($connect, $queryl);
                            while ($arUserl = mysqli_fetch_array($resultl, MYSQLI_ASSOC)) {
                                $idlsp = $arUserl['id'];
                            ?>
                        <div class="tab-pane" id="tabproduct<?php echo $idlsp ?>">
                            <!-- DS sản phẩm -->
                            <?php 
                            $query = "SELECT * 
                            FROM sanpham 
                            WHERE loaisanpham_id = '".$idlsp."'";
                            $result = mysqli_query($connect, $query);
                            while ($arUser = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            ?>
                            <div class="col-md-4 col-sm-6 col-xs-6 block-recent">
                                <div class="w-block-recent-work">
                                    <div class="image-recent-work">
                                        <figure itemprop="associatedMedia" itemscope
                                            itemtype="http://schema.org/ImageObject">
                                            <a href="../admin/image/<?php echo $arUser['anhsanpham'] ?>"
                                                itemprop="contentUrl" data-size="1600x1068"
                                                data-author="<?php echo $arUser['tensanpham'] ?>"><img style="width : 360px; height : 240px"
                                                    src="../admin/image/<?php echo $arUser['anhsanpham'] ?>"
                                                    alt="<?php echo $arUser['tensanpham'] ?>"
                                                    title="<?php echo $arUser['tensanpham'] ?>" itemprop="thumbnail" /></a>
                                            <figcaption itemprop="caption description" style="display: none"><?php echo $arUser['tensanpham'] ?></figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <!-- -->
                        </div>
                        <?php } ?> 
                            <!-- -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
        </div>
        <section class="home-blog" >
            <div class="container">
                <div class="row">
                    <div class="block-title-w">
                        <h2 class="block-title">Bài viết gần đây</h2>
                        <span class="icon-title">
                            <span></span>
                            <i class="fa fa-star"></i>
                        </span>
                    </div>
                    <div class="blog-content-w" id="blog-content-w">
                        <div class="slider">
                            <div class="slider-inner">
                                <div class="wrap-item">
                                <?php 
                            $baidang = "SELECT * 
                            FROM baidang 
                            WHERE id != 1 AND id != 2
                            ORDER BY id DESC
                            LIMIT 8";
                            $resultbd = mysqli_query($connect, $baidang);
                            while ($bd = mysqli_fetch_array($resultbd, MYSQLI_ASSOC)) {
                            ?>
                                    <!--gần đây-->
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item" style="margin-bottom : 10px">
                                        <div class="inner">
                                            <a href="chitiet.php?id=<?php echo $bd['id'] ?>"
                                                class="image"
                                                title="<?php echo $bd['tieude'] ?>"><img style="width : 300px; height : 190px"
                                                    src="../admin/image/<?php echo $bd['anh'] ?>"
                                                    alt="<?php echo $bd['tieude'] ?>"
                                                    title="<?php echo $bd['tieude'] ?>"
                                                    itemprop="thumbnailUrl" /></a>
                                            <div class="info">
                                                <div class="title" style="height : 45px">
                                                    <a href="chitiet.php?id=<?php echo $bd['id'] ?>"
                                                        title="<?php echo $bd['tieude'] ?>"><span
                                                            itemprop="headline"><?php echo $bd['tieude'] ?></span></a>
                                                </div>
                                                <div class="sub-title">
                                                    <p>Đăng lúc : <?php echo $bd['thoigiandang'] ?> </p><p> Tác giả : <?php echo $bd['tacgia'] ?> </p>
                                                </div>
                                                <a href="chitiet.php?id=<?php echo $bd['id'] ?>"
                                                    class="read-more"
                                                    title="<?php echo $bd['tieude'] ?>"
                                                    itemprop="url">Đọc thêm</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--gần đây-->
                                    <?php } ?>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section class="home-make-print">
            <div class="container">
                <div class="row">
                    <div class="block-title-w">
                        <h2 class="block-title">
                            Với Vai Trò Là Chuyên Gia Thương Hiệu M.A.P Có Thể Giúp Bạn
                        </h2>
                        <span class="icon-title">
                            <span></span>
                            <i class="fa fa-star"></i>
                        </span>
                    </div>
                    <!--make print Title : End -->
                    <div class="print-content">
                        <div class="col-md-4 col-sm-4 print-block print-block-left">
                            <div class="w-print-block frist">
                                <div class="print-icon">
                                    <i class="fa fa-hand-o-up"></i>
                                    <i class="fa fa-magic"></i>
                                </div>
                                <div class="print-title">
                                    <a href="thiet-ke.html">Thiết kế thương hiệu</a>
                                </div>
                                <!--<div class="print-number">
                            <span>01</span>
                        </div>-->
                                <div class="print-txt">
                                    <p>
                                        Thiết kế Logo | Thiết kế nhận diện thương hiệu<br />
                                        Thiết kế Profile công ty | Làm mới thương hiệu<br />
                                        Thiết kế tài liệu bán hàng Sales Kit
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 print-block print-block-center">
                            <div class="w-print-block">
                                <div class="print-icon">
                                    <i class="fa fa-line-chart"></i>
                                    <i class="fa fa-arrow-circle-o-up"></i>
                                </div>
                                <div class="print-title">
                                    <a href="thiet-ke.html">Thiết kế marketing</a>
                                </div>
                                <!--<div class="print-number">
                            <span>02</span>
                        </div>-->
                                <div class="print-txt">
                                    <p>
                                        Thiết kế brochure | Thiết kế Catalogue<br />
                                        Thiết kế báo cáo thường niên<br />
                                        Thiết kế bao bì sản phẩm | In ấn chuyên nghiệp
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 print-block print-block-right">
                            <div class="w-print-block">
                                <div class="print-icon">
                                    <i class="fa fa-play"></i>
                                </div>
                                <div class="print-title">
                                    <a href="dich-vu.html">Truyền thông thương hiệu</a>
                                </div>
                                <!--<div class="print-number">
                            <span>03</span>
                        </div>-->
                                <div class="print-txt">
                                    <p>
                                        Sáng tạo chiến lược | Truyền thông trực tuyến<br />
                                        Tổ chức sự kiện | Thiết kế pano biển hiệu<br />
                                        Trang trí Showroom nội ngoại thất
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="bg_make_print"></div>-->
        </section>
        <section class="home-out-recent">
            <div class="container">
                <div class="row">
                    <div class="block-title-w">
                        <h2 class="block-title">
                            Dịch vụ </h2>
                        <span class="icon-title">
                            <span></span>
                            <i class="fa fa-star"></i>
                        </span>
                        <!-- <ul>
                            <li class="active">
                                <a data-toggle="tab" href="#tabserviceAll">
                                    Tất cả </a>
                            </li>
                            <?php
                            $dv = mysqli_query($connect, "SELECT * FROM loaibaidang
                            WHERE demuc = 'Dịch Vụ'");
                            while ($arDv = mysqli_fetch_array($dv, MYSQLI_ASSOC)) {
                            ?>
                            <li class="last"><a data-toggle="tab" href="#tabservice<?php echo $arDv['id'] ?>"><?php echo $arDv['tenloaibaidang'] ?></a></li>
                            <?php } ?>
                        </ul> -->
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabserviceAll">
                             <!-- DS dịch vụ -->
                             <?php 
                            $querybd = "SELECT * 
                            FROM baidang 
                            WHERE loaibaidang_id IN
                            (SELECT id FROM loaibaidang WHERE
                            demuc = 'Dịch Vụ')
                            ORDER BY id DESC
                            LIMIT 9";
                            $resultbd = mysqli_query($connect, $querybd);
                            while ($arUserbd = mysqli_fetch_array($resultbd, MYSQLI_ASSOC)) {
                            ?>
                            <div class="col-md-4 col-sm-6 col-xs-6 block-recent">
                                <div class="w-block-recent">
                                    <div class="image-recent">
                                        <a
                                            href="chitiet.php?id=<?php echo $arUserbd['id'] ?>"><img
                                            style="width : 360px; height : 240px" src="../admin/image/<?php echo $arUserbd['anh'] ?>"
                                                alt="<?php echo $arUserbd['tieude'] ?>"
                                                title="<?php echo $arUserbd['tieude'] ?>" itemprop="thumbnailUrl" /></a>
                                    </div>
                                    <div class="info-recent">
                                        <h2 itemprop="headline" class="title" style="height : 20px !important">
                                            <?php echo $arUserbd['tieude'] ?> </h2>
                                        <div class="text-recent">
                                        <p>Đăng lúc : <?php echo $arUserbd['thoigiandang'] ?> </p><p> Tác giả : <?php echo $arUserbd['tacgia'] ?> </p>
                                        </div>
                                        <br>
                                        <a href="chitiet.php?id=<?php echo $arUserbd['id'] ?>" class="read-more"
                                            itemprop="url">Đọc thêm</a>
                                        <p style="
                                    position: absolute;
                                    right: 13px;
                                    bottom: 0px;
                                    color: #444;
                                ">
                                             </p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <!-- DS dịch vụ -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-testimonial">
            <div class="container">
                <div class="row">
                    <div class="tes-block" id="testimonial">
                        <div class="slider-inner">
                            <div class="wrap-item">
                                <div class="item">
                                    <div class="inner">
                                        <div class="tes-decs">
                                            <p>&quot; Chúng tôi tự hào khi khách hàng lựa chọn làm đối tác tin cậy
                                                &quot;</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="inner">
                                        <div class="tes-decs">
                                            <p>&quot;...với hơn 3000 khách hàng hiện đang sử dụng các dịch vụ của chúng
                                                tôi&quot;</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="inner">
                                        <div class="tes-decs">
                                            <p>&quot;bằng tâm huyết chúng tôi cam kết đem lại cho Quý khách hàng những
                                                sản phẩm tốt nhất&quot;</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="bran-block">
                        <div class="item col-md-2 col-sm-4 col-xs-6">
                            <a href="#" image="image" title="logo nam duong"><img
                                    src="source/doi_tac/logo_nam_duong.png" alt="logo nam duong"
                                    title="logo nam duong" /></a>
                        </div>
                        <div class="item col-md-2 col-sm-4 col-xs-6">
                            <a href="#" image="image" title="logo HPN"><img src="source/doi_tac/logo_hpn.png"
                                    alt="logo HPN" title="logo HPN" /></a>
                        </div>
                        <div class="item col-md-2 col-sm-4 col-xs-6">
                            <a href="#" image="image" title="logo dhmart"><img src="source/doi_tac/logo_dhmart.png"
                                    alt="logo dhmart" title="logo dhmart" /></a>
                        </div>
                        <div class="item col-md-2 col-sm-4 col-xs-6">
                            <a href="#" image="image" title="logo cgv"><img src="source/doi_tac/logo_cgv.png"
                                    alt="logo cgv" title="logo cgv" /></a>
                        </div>
                        <div class="item col-md-2 col-sm-4 col-xs-6">
                            <a href="#" image="image" title="logo namtraco"><img src="source/doi_tac/logo_namtraco.png"
                                    alt="logo namtraco" title="logo namtraco" /></a>
                        </div>
                        <div class="item col-md-2 col-sm-4 col-xs-6">
                            <a href="#" image="image" title="logo green"><img src="source/doi_tac/logo_green.png"
                                    alt="logo green" title="logo green" /></a>
                        </div>
                        <div class="item col-md-2 col-sm-4 col-xs-6">
                            <a href="#" image="image" title="logo sse"><img src="source/doi_tac/logo_sse.png"
                                    alt="logo sse" title="logo sse" /></a>
                        </div>
                        <div class="item col-md-2 col-sm-4 col-xs-6">
                            <a href="#" image="image" title="logo tessa"><img src="source/doi_tac/logo_tessa.png"
                                    alt="logo tessa" title="logo tessa" /></a>
                        </div>
                        <div class="item col-md-2 col-sm-4 col-xs-6">
                            <a href="#" image="image" title="logo vina steel"><img src="source/doi_tac/logo_viet_uc.png"
                                    alt="logo vina steel" title="logo vina steel" /></a>
                        </div>
                        <div class="item col-md-2 col-sm-4 col-xs-6">
                            <a href="#" image="image" title="logo vietlot"><img src="source/doi_tac/logo_vietlot.png"
                                    alt="logo vietlot" title="logo vietlot" /></a>
                        </div>
                        <div class="item col-md-2 col-sm-4 col-xs-6">
                            <a href="#" image="image" title="logo ana"><img src="source/doi_tac/logo_ana.png"
                                    alt="logo ana" title="logo ana" /></a>
                        </div>
                        <div class="item col-md-2 col-sm-4 col-xs-6">
                            <a href="#" image="image" title="Logo vikos"><img src="source/doi_tac/logo_vikos.png"
                                    alt="Logo vikos" title="Logo vikos" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </main>
    
    
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div itemid="#m.a.p" class="col-md-3 col-sm-4 col-xs-12 about-us footer-col">
                        <h2>Thông tin</h2>
                        <div id="IMAP_INFO" class="footer-content">
                            <a href="index.php" class="logo-footer" title="Thiết kế in ấn M.A.P Hải Phòng"><img
                                    src="source/system/logo/logo_map_white.png" alt="Thiết kế in ấn M.A.P Hải Phòng"
                                    title="Thiết kế in ấn M.A.P Hải Phòng" /></a>
                            <ul class="info">
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
                                    <i class="fa fa-clock-o"></i> <span>Thứ 2 - thứ 7: 8h00 - 12h00 / 14h00 -
                                        18h00</span>
                                </li>
                                <li>
                                    <a href="http://www.dmca.com/Protection/Status.aspx?ID=c41daddb-5c49-4260-a709-7e64677aa513"
                                        title="DMCA.com Protection Status" class="dmca-badge"> <img
                                            src="images.dmca.com/Badges/dmca_protected_sml_120acee63.png?ID=c41daddb-5c49-4260-a709-7e64677aa513"
                                            alt="DMCA.com Protection Status"></a>
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
            <li class="level0"><a href="index.php">Trang chủ</a></li>
            <li class="level0"><a href="chitiet.php?id=1">Giới thiệu M.A.P</a></li>
            <li class="level0 parent col1"><a href="#"><span>Dịch vụ</span><i class="fa fa-chevron-down"></i><i
                        class="fa fa-chevron-right"></i></a>
                <ul class="level0">
                    <li><a href="thiet-ke-in/thiet-ke.html">Thiết kế</a></li>
                    <li><a href="thiet-ke-in/in-chuyen-nghiep.html">In chuyên nghiệp</a></li>
                    <li><a href="thiet-ke-in/thiet-ke-va-in.html">Thiết kế và in</a></li>
                </ul>
            </li>
            <li class="level0 parent col1"><a href="#"><span>Nhật ký sáng tạo</span><i class="fa fa-chevron-down"></i><i
                        class="fa fa-chevron-right"></i></a>
                <ul class="level0">
                    <li><a href="thiet-ke-in/kien-thuc-thuong-hieu.html">Kiến thức thương hiệu</a></li>
                    <li><a href="thiet-ke-in/chia-se-tai-lieu-thiet-ke.html">Chia sẻ tài liệu thiết kế</a></li>
                    <li><a href="thiet-ke-in/nhat-ky-sang-tao-m-a-p.html">Nhật ký sáng tạo M.A.P</a></li>
                </ul>
            </li>
            <li class="level0"><a href="thiet-ke-in/lien-he.html">Liên hệ</a></li>
        </ul>
    </nav> <!-- Phone -->
    
    <!-- //Phone_END -->
    <!-- <div class="zalo-chat-widget" data-oaid="2516318981320648182" data-welcome-message="Rất vui khi được hỗ trợ bạn!"
        data-autopopup="0" data-width="350" data-height="420"></div> -->
    <script src="sp.zalo.me/plugins/sdk.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script src="printshop/js/slideshow/jquery.themepunch.revolution.min.js"></script>
    <script src="printshop/js/slideshow/jquery.themepunch.plugins.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe-ui-default.min.js"></script>
    <script src="printshop/js/theme-home.js"></script>
    <script>
        //<![CDATA[

        var initPhotoSwipeFromDOM = function (gallerySelector) {

            // parse slide data (url, title, size ...) from DOM elements 
            // (children of gallerySelector)
            var parseThumbnailElements = function (el) {

                var thumbElements = $("#recent-works-gallery").find("figure"),
                    numNodes = thumbElements.length,
                    items = [],
                    figureEl,
                    linkEl,
                    size,
                    item;

                for (var i = 0; i < numNodes; i++) {

                    figureEl = thumbElements[i]; // <figure> element

                    // include only element nodes 
                    if (figureEl.nodeType !== 1) {
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

                    if (figureEl.children.length > 1) {
                        // <figcaption> content
                        item.title = figureEl.children[1].innerHTML;
                    }

                    if (linkEl.children.length > 0) {
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
                return el && (fn(el) ? el : closest(el.parentNode, fn));
            };

            // triggers when user clicks on thumbnail
            var onThumbnailsClick = function (e) {
                e = e || window.event;
                e.preventDefault ? e.preventDefault() : e.returnValue = false;

                var eTarget = e.target || e.srcElement;

                // find root element of slide
                var clickedListItem = closest(eTarget, function (el) {
                    return (el.tagName && el.tagName.toUpperCase() === "FIGURE");
                });
                console.log("clickedListItem", clickedListItem);

                if (!clickedListItem) {
                    return;
                }

                // find index of clicked item by looping through all child nodes
                // alternatively, you may define index via data- attribute
                var clickedGallery = $("#recent-works-gallery").find("figure"),
                    numChildNodes = clickedGallery.length,
                    nodeIndex = 0,
                    index;

                for (var i = 0; i < numChildNodes; i++) {
                    if (clickedGallery[i] === clickedListItem) {
                        index = nodeIndex;
                        break;
                    }
                    nodeIndex++;
                }

                if (index >= 0) {
                    // open PhotoSwipe if valid index found
                    openPhotoSwipe(index, clickedListItem.parentNode.parentNode.parentNode.parentNode.parentNode);
                }
                return false;
            };

            // parse picture index and gallery index from URL (#&pid=1&gid=2)
            var photoswipeParseHash = function () {
                var hash = window.location.hash.substring(1),
                    params = {};
                if (hash.length < 5) {
                    return params;
                }
                var vars = hash.split("&");
                for (var i = 0; i < vars.length; i++) {
                    if (!vars[i]) {
                        continue;
                    }
                    var pair = vars[i].split("=");
                    if (pair.length < 2) {
                        continue;
                    }
                    params[pair[0]] = pair[1];
                }
                if (params.gid) {
                    params.gid = parseInt(params.gid, 10);
                }
                return params;
            };

            var openPhotoSwipe = function (index, galleryElement, disableAnimation, fromURL) {
                var pswpElement = document.querySelectorAll(".pswp")[0],
                    gallery,
                    options,
                    items;

                items = parseThumbnailElements(galleryElement);

                // define options (if needed)
                options = {

                    // define gallery index (for URL)
                    galleryUID: galleryElement.getAttribute("data-pswp-uid"),

                    getThumbBoundsFn: function (index) {
                        // See Options -> getThumbBoundsFn section of documentation for more info
                        var thumbnail = items[index].el.getElementsByTagName("img")[0], // find thumbnail
                            pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                            rect = thumbnail.getBoundingClientRect();

                        return { x: rect.left, y: rect.top + pageYScroll, w: rect.width };
                    }
                };
                // PhotoSwipe opened from URL
                if (fromURL) {
                    if (options.galleryPIDs) {
                        // parse real index when custom PIDs are used 
                        // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
                        for (var j = 0; j < items.length; j++) {
                            if (items[j].pid == index) {
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
                if (isNaN(options.index)) {
                    return;
                }

                if (disableAnimation) {
                    options.showAnimationDuration = 0;
                }

                // Pass data to PhotoSwipe and initialize it
                gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
                gallery.init();
            };

            // loop through all gallery elements and bind events
            var galleryElements = document.querySelectorAll(gallerySelector);

            for (var i = 0, l = galleryElements.length; i < l; i++) {
                galleryElements[i].setAttribute("data-pswp-uid", i + 1);
                galleryElements[i].onclick = onThumbnailsClick;
            }

            // Parse URL and open gallery if it contains #&pid=3&gid=1
            var hashData = photoswipeParseHash();
            if (hashData.pid && hashData.gid) {
                openPhotoSwipe(hashData.pid, galleryElements[hashData.gid - 1], true, true);
            }
        };
        initPhotoSwipeFromDOM("#recent-works-gallery");

//]]>
    </script>
    <script src="images.dmca.com/Badges/DMCABadgeHelper.min.js"></script>
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
                m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-64408958-1', 'auto');
        ga('send', 'pageview');

    </script>
</body>

<!-- Mirrored from i-map.vn/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2022 14:41:33 GMT -->

</html>
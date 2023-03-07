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
    <?php
    if (isset($_GET['xnct'])) {
    ?>
<div class="toast" data-delay="2000" style="position:fixed;top: 100PX; right: 10PX;z-index: 2000;width: 300px">
    <script>
        swal({
            title: 'Xác nhận thành công. Vui lòng đợi Admin xác nhận!',
            icon: 'success',
            timer: 3000,
            buttons: true,
            type: 'success'
        })
    </script>
</div>
    <?php } ?>
    <?php
    if (isset($_GET['log'])) {
    ?>
<div class="toast" data-delay="2000" style="position:fixed;top: 100PX; right: 10PX;z-index: 2000;width: 300px">
    <script>
        swal({
            title: 'Bạn chưa đăng nhập!',
            icon: 'error',
            timer: 3000,
            buttons: true,
            type: 'error'
        })
    </script>
</div>
    <?php } ?>
        <!--Main Header: Begin-->
        <?php include('header.php'); ?>
        <!--Main Header: End-->
    </header>
    <main class="main ">
        <section class="trust-w">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 block-trust trust-col-quantity">
                        <div class="tr-icon"><i class="fa fa-paper-plane-o fa-lg"></i></div>
                        <div class="tr-text">
                            <h3>Tốc độ</h3>
                            <span class="tr-line"></span>
                            <p>Đội ngũ luôn cập nhật thông tin và cung cấp cho độc giả những nội dung sách mới nhất.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 block-trust trust-col-quantity">
                        <div class="tr-icon"><i class="fa fa-thumbs-o-up fa-lg"></i></div>
                        <div class="tr-text">
                            <h3>Chất lượng</h3>
                            <span class="tr-line"></span>
                            <p>Tại Website đọc sách, chất lượng là điều ưu tiên hàng đầu trong mọi hoạt động. Những nội dung sách sẽ làm hài lòng
                                quý độc giả</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 block-trust trust-col-quantity">
                        <div class="tr-icon"><i class="fa fa-lightbulb-o fa-lg"></i></div>
                        <div class="tr-text">
                            <h3>Sáng tạo</h3>
                            <span class="tr-line"></span>
                            <p>Đội ngũ luôn sáng tạo không ngừng.
                                Nỗ lực mang tới quý độc giả những nội dung sách
                                với chất lượng tốt nhất.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 block-trust trust-col-quantity">
                        <div class="tr-icon"><i class="fa fa-money fa-lg"></i></div>
                        <div class="tr-text">
                            <h3>Giá trị</h3>
                            <span class="tr-line"></span>
                            <p>Đội ngũ cam kết cung cấp các nội dung sách hay và hấp dẫn nhất.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-blog" >
            <div class="container">
                <div class="row">
                    <div class="block-title-w">
                        <h2 class="block-title">Sách mới nhất</h2>
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
                            FROM sach 
                            ORDER BY id DESC";
                            $resultbd = mysqli_query($connect, $baidang);
                            while ($bd = mysqli_fetch_array($resultbd, MYSQLI_ASSOC)) {
                            ?>
                                    <!--gần đây-->
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item" style="margin-bottom : 10px">
                                        <div class="inner">
                                            <a href="#"
                                                class="image"
                                                title="<?php echo $bd['tensach'] ?>"><img style="width : 300px; height : 390px"
                                                    src="../admin/image/<?php echo $bd['anh'] ?>"
                                                    alt="<?php echo $bd['tensach'] ?>"
                                                    title="<?php echo $bd['tensach'] ?>"
                                                    itemprop="thumbnailUrl" /></a>
                                            <div class="info">
                                                <div class="title" style="height : 45px">
                                                    <a href="#"
                                                        title="<?php echo $bd['tensach'] ?>"><span
                                                            itemprop="headline"><?php echo $bd['tensach'] ?></span></a>
                                                </div>
                                                <div class="sub-title">
                                                    <p> Tác giả : <?php echo $bd['tacgia'] ?> </p>
                                                </div>
                                                <?php
                                                if (empty($_SESSION['taikhoan'])){
                                                ?>
                                                 <a href="index.php?log=1"
                                                    class="read-more"
                                                    title="<?php echo $bd['tensach'] ?>"
                                                    itemprop="url">Đọc chi tiết</a>
                                                    <?php }else{ ?>
                                                    <a href="chitiet.php?id=<?php echo $bd['id'] ?>"
                                                    class="read-more"
                                                    title="<?php echo $bd['tensach'] ?>"
                                                    itemprop="url">Đọc chi tiết</a>
                                                        <?php } ?>
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
    </main>
    <footer>
        <?php include('footer.php'); ?>
    </footer>
    <div id="sitebodyoverlay"></div>
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
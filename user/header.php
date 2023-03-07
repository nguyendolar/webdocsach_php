<section class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1 col-md-2 col-sm-4 col-xs-5 w-logo" style="width : 700px !important">
                        <div class="logo hd-pd " style="width : 700px;margin-left : 200px !important">
                            <a href="index.php" ><img
                                    src="http://bizweb.dktcdn.net/100/122/937/files/logo-lets-read-eng-n-vie-2.jpg?v=1475655360137" alt=""
                                     style="max-height: 110px;width : 700px" /></a>
                        </div>
                    </div>
                    <div class="visible-md visible-lg">
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
                                    <li><a href="vip.php">Nâng cấp VIP</a></li>
                                    <?php }  ?>
                                    
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
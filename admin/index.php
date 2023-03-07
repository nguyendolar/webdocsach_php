
<!DOCTYPE html>
<html lang="en">

<head>
<?php include('inc/head.php')?>
</head>
<?php 
    if (isset($_GET['msg'])) {
        echo "
                    <script>
                        function Redirect() {
                        window.location = 'index.php';
                        }
                        alert('Đăng nhập thành công !') 
                        Redirect()
                    </script>
                    ";
    }
    ?>
<body class="sb-nav-fixed">
<?php include('inc/header.php')?>
    <div id="layoutSidenav">
    <?php include('inc/menu.php')?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <img src="https://storage.googleapis.com/enterknow.com/data-contents/2021/09/Read-More-Books-scaled.jpg" width="700px"/>
                </div>
            </main>
            <?php include('inc/footer.php')?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>
<?php
include('../admin/inc/connect.php');

if(isset($_POST['login'])){
    $email = $_POST['taikhoan'];
    $upass  = $_POST['matkhau'];
    $query = "SELECT * FROM nguoidung WHERE taikhoan='$email'";
    $result = mysqli_query($connect, $query);
    $num_rows = mysqli_num_rows($result);
    if ($num_rows == 0) {
      header("Location: dangnhap.php?fail=1");
    } 
    else {
    
      $row = mysqli_fetch_array($result);
      if ($upass != $row['matkhau']) {
        header("Location: dangnhap.php?fail=1");
      }
      else{
        if ($row['trangthai'] == 2) {
          header("Location: dangnhap.php?fail=1");
        }else{
        header("Location: index.php?msg=1");
      $_SESSION['taikhoan'] = $email;
      $_SESSION['hoten'] = $row['tenhienthi'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['id'] = $row['id'];
        }
      }
    }
    }
if(isset($_POST['dangky'])){
      $hoten = $_POST['tenhienthi'];
      $taikhoan = $_POST['taikhoan'];
      $matkhau  = $_POST['matkhau'];
      $check = "SELECT * FROM nguoidung WHERE taikhoan='$taikhoan'";
      $excute = mysqli_query($connect, $check);
      $row = mysqli_num_rows($excute);
      if($row > 0)
      {
          header("Location: dangky.php?fail=2");
      }else{
      $query = "INSERT INTO nguoidung ( `tenhienthi`, `taikhoan`, `matkhau`, `capbac`, `trangthai`) 
    VALUES ( '{$hoten}', '{$taikhoan}', '{$matkhau}', 2, 1) ";
    $result = mysqli_query($connect, $query);
    if ($result) {
      header("Location: dangnhap.php?msg=1");
    } 
    else {
        header("Location: dangky.php?fail=2");
    }
  }
}
if(isset($_POST['xnct'])){
  $idnd = $_POST['nguoidungid'];
  $query = "INSERT INTO lichsugiaodich ( `nguoidung_id`) 
VALUES ( '{$idnd}') ";
$result = mysqli_query($connect, $query);
$queryc = "UPDATE `nguoidung` 
    SET `capbac`= 3
    WHERE `id`='{$idnd}'";
    $resultc = mysqli_query($connect, $queryc);
if ($result) {
  header("Location: index.php?xnct=1");
} 
else {
    header("Location: index.php?fail=2");
}
}

 ?> 
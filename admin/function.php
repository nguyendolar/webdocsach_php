<?php
include('inc/connect.php');
$adminid = $_SESSION['id'];
//Thêm mới sách
if(isset($_POST['addbd'])){
    $tensach = $_POST['tensach'];
    $noidung  = $_POST['noidung'];
    $tacgia = $_POST['tacgia'];
    //Upload ảnh
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_parts =explode('.',$_FILES['image']['name']);
    $file_ext=strtolower(end($file_parts));
    $expensions= array("jpeg","jpg","png");
    $image = $_FILES['image']['name'];
    $target = "./image/".basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    $query = "INSERT INTO sach ( tensach, tacgia, anh, noidung) 
    VALUES ( '{$tensach}', '{$tacgia}', '{$image}', '{$noidung}') ";
    $result = mysqli_query($connect, $query);
    if ($result) {
      header("Location: sach.php?msg=1");
    } 
    else {
        header("Location: sach.php?msg=2");
    }
}
//Sửa sách
if(isset($_POST['editbd'])){
    $tensach = $_POST['tensach'];
    $noidung  = $_POST['noidung'];
    $tacgia = $_POST['tacgia'];
    $id  = $_POST['id'];
    $file_name = $_FILES['image']['name'];
    if(empty($file_name)){
        $query = "UPDATE `sach` 
        SET `tensach`='{$tensach}',`tacgia`='{$tacgia}',`noidung`='{$noidung}'
        WHERE `id`='{$id}'";
        $result = mysqli_query($connect, $query);
        if ($result) {
          header("Location: sach.php?msg=1");
        } 
        else {
            header("Location: sach.php?msg=2");
        }
    }
    else{
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_parts =explode('.',$_FILES['image']['name']);
        $file_ext=strtolower(end($file_parts));
        $expensions= array("jpeg","jpg","png");
        $image = $_FILES['image']['name'];
        $target = "./image/".basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
        $query = "UPDATE `sach` 
        SET `tensach`='{$tensach}',`anh`='{$image}',`tacgia`='{$tacgia}',`noidung`='{$noidung}'
        WHERE `id`='{$id}'";
        $result = mysqli_query($connect, $query);
        if ($result) {
          header("Location: sach.php?msg=1");
        } 
        else {
            header("Location: sach.php?msg=2");
        }
    }
    
}
//Xóa sách
if(isset($_POST['deletebd'])){
    $id  = $_POST['id'];
    $query = "DELETE FROM sach WHERE `id`='{$id}'";
    $result = mysqli_query($connect, $query);
    header("Location: sach.php?msg=1");

}
//Người dùng
//Nâng cấp người dùng
if(isset($_POST['ncnd'])){
    $id  = $_POST['id'];
    $query = "UPDATE `nguoidung` 
    SET `capbac`= 1
    WHERE `id`='{$id}'";
    $result = mysqli_query($connect, $query);
    header("Location: nguoidung.php?msg=1");

}
//Khóa người dùng
if(isset($_POST['khoand'])){
    $id  = $_POST['id'];
    $query = "UPDATE `nguoidung` 
    SET `trangthai`= 2
    WHERE `id`='{$id}'";
    $result = mysqli_query($connect, $query);
    header("Location: nguoidung.php?msg=1");

}
//Mở Khóa người dùng
if(isset($_POST['mknd'])){
    $id  = $_POST['id'];
    $query = "UPDATE `nguoidung` 
    SET `trangthai`= 1
    WHERE `id`='{$id}'";
    $result = mysqli_query($connect, $query);
    header("Location: nguoidung.php?msg=1");

}
//Xử lý chuyển tiền
if(isset($_POST['xlct'])){
    $id  = $_POST['id'];
    $lsid  = $_POST['lsid'];
    $capbac  = $_POST['status'];
    if($capbac == 2 ){
    $queryl = "DELETE FROM lichsugiaodich WHERE `id`='{$lsid}'";
    $results = mysqli_query($connect, $queryl);
    }
    $query = "UPDATE `nguoidung` 
    SET `capbac`= '{$capbac}'
    WHERE `id`='{$id}'";
    $result = mysqli_query($connect, $query);
    header("Location: lichsu.php?msg=1");

}
?>
 
<?php
session_start();
include ("../../../config.php");
 header('Content-Type: text/html; charset=UTF-8');
//$id = $_GET['id'];
$id = isset($_GET['id']) ? $_GET['id'] : '';
$tenlop = $_POST['tenlop'];
$khoa = $_POST['khoa'];
$khoa_lv = $_POST['khoalv'];
$giangvien = $_POST['giangvien'];

if(isset($_POST['them'])){
    //$err = ""; // rỗng
if(!$tenlop||!$khoa || !$khoa_lv || !$giangvien) {
    // $('txtError').html($err);
    echo "Chưa nhập đủ thông tin.<a href='../../index.php?quanly=quanlylop&ac=them'>Thêm lại lớp</a>";
    //header('location:../../index.php?capnhat=capnhatloaisanpham&ac=them');
    //onclick="return window.confirm('Bạn muốn xóa không');"

    }else{
    //thêm
        $sql ="INSERT INTO lop(lop.ten_lop, lop.ma_khoa,lop.ma_khoa_lv,lop.ma_giang_vien)
VALUES ('$tenlop','$khoa','$khoa_lv','$giangvien')";

        mysqli_query($conn,$sql);
        header('location:../../index.php?quanly=quanlylop&ac=them');
    } 
    
}elseif (isset($_POST['sua'])) {
    //sửa

$sql="UPDATE lop
SET 
lop.ten_lop='$tenlop',
lop.ma_khoa ='$khoa',
lop.ma_khoa_lv ='$khoa_lv',
lop.ma_giang_vien = '$giangvien'
WHERE lop.ma_lop ='$id'"; 

mysqli_query($conn,$sql);
header('location:../../index.php?quanly=quanlylop&ac=sua&id='.$id);


}else{
    //xóa
$sql= "DELETE FROM lop WHERE lop.ma_lop='$id'";
mysqli_query($conn,$sql);
header('location:../../index.php?quanly=quanlylop&ac=them');
}
?>
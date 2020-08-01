<?php
session_start();
include ("../../../config.php");
 header('Content-Type: text/html; charset=UTF-8');
//$id = $_GET['id'];
$id = isset($_GET['id']) ? $_GET['id'] : '';
$tenkhoa = $_POST['tenkhoa'];
$tenkhoa = strip_tags($tenkhoa);
$tenkhoa = addslashes($tenkhoa);
if(isset($_POST['them'])){
    //$err = ""; // rỗng
if(!$tenkhoa ) {
   // window.confirm('Bạn muốn xóa không');
    // $('txtError').html($err);
    echo "Chưa nhập đủ thông tin.<a href='../../index.php?quanly=quanlykhoalv&ac=them'>Thêm lại khoa</a>";
    //echo "Chưa nhập đủ thông tin";
    //header('location:../../index.php?capnhat=capnhatkhoalv&ac=them');
    }else{
    //thêm
        $sql ="INSERT INTO khoa_lv(ten_khoa)VALUES ('$tenkhoa')";
        mysqli_query($conn,$sql);
        header('location:../../index.php?quanly=quanlykhoalv&ac=them');
    } 
    
}elseif (isset($_POST['sua'])) {
    //sửa
$sql="UPDATE khoa_lv
SET
khoa_lv.ten_khoa='$tenkhoa'
WHERE khoa_lv.ma_khoa='$id'"; 
mysqli_query($conn,$sql);
header('location:../../index.php?quanly=quanlykhoalv&ac=sua&id='.$id);


}else{
    //xóa
$sql= "DELETE FROM khoa_lv WHERE khoa_lv.ma_khoa ='$id'";
mysqli_query($conn,$sql);
header('location:../../index.php?quanly=quanlykhoalv&ac=them');
}
?>
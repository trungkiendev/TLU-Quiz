<?php
session_start();
include ("../../../config.php");
 header('Content-Type: text/html; charset=UTF-8');
//$id = $_GET['id'];
$id = isset($_GET['id']) ? $_GET['id'] : '';
$tenkhoa = $_POST['tenkhoa'];
$tenkhoa = strip_tags($tenkhoa);
$tenkhoa = addslashes($tenkhoa);
$ngaybatdau = $_POST['ngaybatdau'];
$ngayketthuc = $_POST['ngayketthuc'];
if(isset($_POST['them'])){
    //$err = ""; // rỗng
if(!$tenkhoa || !$ngaybatdau || !$ngayketthuc ) {
   // window.confirm('Bạn muốn xóa không');
    // $('txtError').html($err);
    echo "Chưa nhập đủ thông tin.<a href='../../index.php?quanly=quanlykhoa&ac=them'>Thêm lại khoa</a>";
    //echo "Chưa nhập đủ thông tin";
    //header('location:../../index.php?capnhat=capnhatkhoalv&ac=them');
    }else{
    //thêm
        $sql ="INSERT INTO khoa(khoa.ten_Khoa,khoa.ngay_bat_dau,khoa.ngay_ket_thuc)
        VALUES('$tenkhoa','$ngaybatdau','$ngaybatdau')";
        mysqli_query($conn,$sql);
        header('location:../../index.php?quanly=quanlykhoa&ac=them');
    } 
    
}elseif (isset($_POST['sua'])) {
    //sửa
$sql="UPDATE khoa
SET
khoa.ten_khoa='$tenkhoa',
khoa.ngay_bat_dau='$ngaybatdau',
khoa.ngay_ket_thuc='$ngayketthuc'
WHERE khoa.ma_Khoa='$id'"; 
mysqli_query($conn,$sql);
header('location:../../index.php?quanly=quanlykhoa&ac=sua&id='.$id);


}else{
    //xóa
$sql= "DELETE FROM khoa WHERE khoa.ma_khoa ='$id'";
mysqli_query($conn,$sql);
header('location:../../index.php?quanly=quanlykhoa&ac=them');
}
?>
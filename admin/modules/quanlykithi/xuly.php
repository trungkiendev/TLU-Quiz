<?php
session_start();
include ("../../../config.php");
 header('Content-Type: text/html; charset=UTF-8');
//$id = $_GET['id'];
$id = isset($_GET['id']) ? $_GET['id'] : '';
$tenkythi = $_POST['tenkythi'];
$ngaybatdau = $_POST['ngaybatdau'];
$ngayketthuc = $_POST['ngayketthuc'];
if(isset($_POST['them'])){
    //$err = ""; // rỗng
if(!$tenkythi || !$ngaybatdau || !$ngayketthuc ) {
   // window.confirm('Bạn muốn xóa không');
    // $('txtError').html($err);
    echo "Chưa nhập đủ thông tin.<a href='../../index.php?quanly=quanlykithi&ac=them'>Thêm lại ky_thi</a>";
    //echo "Chưa nhập đủ thông tin";
    //header('location:../../index.php?capnhat=capnhatky_thilv&ac=them');
    }else{
    //thêm
        $sql ="INSERT INTO ky_thi(ky_thi.ten_ky_thi,ky_thi.ngay_bat_dau,ky_thi.ngay_ket_thuc)
        VALUES('$tenkythi','$ngaybatdau','$ngaybatdau')";
        mysqli_query($conn,$sql);
        header('location:../../index.php?quanly=quanlykithi&ac=them');
    } 
    
}elseif (isset($_POST['sua'])) {
    //sửa
$sql="UPDATE ky_thi
SET
ky_thi.ten_ky_thi='$tenkythi',
ky_thi.ngay_bat_dau='$ngaybatdau',
ky_thi.ngay_ket_thuc='$ngayketthuc'
WHERE ky_thi.ma_ky_thi='$id'"; 
mysqli_query($conn,$sql);
header('location:../../index.php?quanly=quanlykithi&ac=sua&id='.$id);


}else{
    //xóa
$sql= "DELETE FROM ky_thi WHERE ky_thi.ma_ky_thi ='$id'";
mysqli_query($conn,$sql);
header('location:../../index.php?quanly=quanlykithi&ac=them');
}
?>
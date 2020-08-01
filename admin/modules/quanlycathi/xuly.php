<?php
session_start();
include ("../../../config.php");
 header('Content-Type: text/html; charset=UTF-8');
//$id = $_GET['id'];
$id = isset($_GET['id']) ? $_GET['id'] : '';
$tencathi = $_POST['tencathi'];
$dotthi = $_POST['dotthi'];
$kythi = $_POST['kythi'];

if(isset($_POST['them'])){
    //$err = ""; // rỗng
if(!$tencathi||!$dotthi || !$kythi ) {
    // $('txtError').html($err);
    echo "Chưa nhập đủ thông tin.<a href='../../index.php?quanly=quanlycathi&ac=them'>Thêm lại ca thi</a>";
    //header('location:../../index.php?capnhat=capnhatloaisanpham&ac=them');
    //onclick="return window.confirm('Bạn muốn xóa không');"

    }else{
    //thêm
        $sql ="INSERT INTO ca_thi(ca_thi.ten_ca_thi, ca_thi.dot_thi,ca_thi.ma_ky_thi)
VALUES ('$tencathi','$dotthi','$kythi')";

        mysqli_query($conn,$sql);
        header('location:../../index.php?quanly=quanlycathi&ac=them');
    } 
    
}elseif (isset($_POST['sua'])) {
    //sửa

$sql="UPDATE ca_thi
SET 
ca_thi.ten_ca_thi='$tencathi',
ca_thi.dot_thi ='$dotthi',
ca_thi.ma_ky_thi ='$kythi'
WHERE ca_thi.ma_ca_thi ='$id'"; 

mysqli_query($conn,$sql);
header('location:../../index.php?quanly=quanlycathi&ac=sua&id='.$id);


}else{
    //xóa
$sql= "DELETE FROM ca_thi WHERE ca_thi.ma_ca_thi='$id'";
mysqli_query($conn,$sql);
header('location:../../index.php?quanly=quanlycathi&ac=them');
}
?>
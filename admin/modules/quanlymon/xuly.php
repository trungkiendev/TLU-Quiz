<?php
session_start();
include ("../../../config.php");
 header('Content-Type: text/html; charset=UTF-8');
//$id = $_GET['id'];
$id = isset($_GET['id']) ? $_GET['id'] : '';
$tenmon = $_POST['tenmon'];
$tenmon = strip_tags($tenmon);
$tenmon = addslashes($tenmon);
$sotinchi = $_POST['sotinchi'];

if(isset($_POST['them'])){
    //$err = ""; // rỗng
if(!$tenmon || !$sotinchi ) {
   // window.confirm('Bạn muốn xóa không');
    // $('txtError').html($err);
    echo "Chưa nhập đủ thông tin.<a href='../../index.php?quanly=quanlymon&ac=them'>Thêm lại môn</a>";
    //echo "Chưa nhập đủ thông tin";
    //header('location:../../index.php?capnhat=capnhatmonlv&ac=them');
    }else{
    //thêm
        $sql ="INSERT INTO mon(mon.ten_mon,mon.so_tin_chi)
        VALUES('$tenmon','$sotinchi')";
        mysqli_query($conn,$sql);
        header('location:../../index.php?quanly=quanlymon&ac=them');
    } 
    
}elseif (isset($_POST['sua'])) {
    //sửa
$sql="UPDATE mon
SET
mon.ten_mon='$tenmon',
mon.so_tin_chi='$sotinchi'
WHERE mon.ma_mon='$id'"; 
mysqli_query($conn,$sql);
header('location:../../index.php?quanly=quanlymon&ac=sua&id='.$id);


}else{
    //xóa
$sql= "DELETE FROM mon WHERE mon.ma_mon ='$id'";
mysqli_query($conn,$sql);
header('location:../../index.php?quanly=quanlymon&ac=them');
}
?>
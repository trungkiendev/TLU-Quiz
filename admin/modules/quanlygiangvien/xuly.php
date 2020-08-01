<?php
session_start();
include ("../../../config.php");
 header('Content-Type: text/html; charset=UTF-8');
//$id = $_GET['id'];
$id = isset($_GET['id']) ? $_GET['id'] : '';
$email = $_POST['email'];
$tengiangvien = $_POST['hoten'];
$ngaysinh = $_POST['ngaysinh'];
$gioitinh = $_POST['gioitinh'];
$diachi = $_POST['diachi'];
$chucvu = $_POST['chucvu'];
$sdt = $_POST['sdt'];
$matkhau = $_POST['matkhau'];
$tenquyen = $_POST['tenquyen'];
$khoalv = $_POST['khoalv'];
$giangvien = $_POST['giangvien'];


if(isset($_POST['them'])){
    //$err = ""; // rỗng
if(!$email||!$tengiangvien || !$ngaysinh || !$gioitinh||!$diachi || !$chucvu || !$sdt 
||!$matkhau || !$tenquyen  || !$khoalv || !$giangvien ) {
    // $('txtError').html($err);
    echo "Chưa nhập đủ thông tin.<a href='../../index.php?quanly=quanlygiangvien&ac=them'>Thêm lại sinh viên</a>";
    //header('location:../../index.php?capnhat=capnhatloaisanpham&ac=them');
    //onclick="return window.confirm('Bạn muốn xóa không');"

    }else{
    //thêm
        $sql ="INSERT INTO giang_vien(giang_vien.email, giang_vien.ho_ten,giang_vien.ngay_sinh,giang_vien.gioi_tinh,
        giang_vien.dia_chi,giang_vien.chuc_vu,
        giang_vien.sdt,giang_vien.mat_khau,giang_vien.ten_quyen,giang_vien.ma_khoa,giang_vien.ma_nguoi_tao_tk)
VALUES ('$email','$tengiangvien','$ngaysinh','$gioitinh','$diachi','$chucvu','$sdt','$matkhau',
'$tenquyen','$khoalv','$giangvien')";

        mysqli_query($conn,$sql);
        header('location:../../index.php?quanly=quanlygiangvien&ac=them');
    } 
    
}elseif (isset($_POST['sua'])) {
    //sửa

$sql="UPDATE giang_vien
SET 
giang_vien.email='$email',
giang_vien.ho_ten ='$tengiangvien',
giang_vien.ngay_sinh ='$ngaysinh',
giang_vien.gioi_tinh = '$gioitinh',
giang_vien.dia_chi='$diachi',
giang_vien.chuc_vu ='$chucvu',
giang_vien.sdt ='$sdt',
giang_vien.mat_khau = '$matkhau',
giang_vien.ten_quyen = '$tenquyen',
giang_vien.ma_khoa ='$khoalv',
giang_vien.ma_nguoi_tao_tk = '$giangvien'
WHERE giang_vien.ma_giang_vien ='$id'"; 

mysqli_query($conn,$sql);
header('location:../../index.php?quanly=quanlygiangvien&ac=sua&id='.$id);


}else{
    //xóa
$sql= "DELETE FROM giang_vien WHERE giang_vien.ma_giang_vien='$id'";
mysqli_query($conn,$sql);
header('location:../../index.php?quanly=quanlygiangvien&ac=them');
}
?>
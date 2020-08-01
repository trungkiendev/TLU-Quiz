<?php
session_start();
include ("../../../config.php");
 header('Content-Type: text/html; charset=UTF-8');
//$id = $_GET['id'];
$id = isset($_GET['id']) ? $_GET['id'] : '';
$email = $_POST['email'];
$tensinhvien = $_POST['hoten'];
$ngaysinh = $_POST['ngaysinh'];
$gioitinh = $_POST['gioitinh'];
$diachi = $_POST['diachi'];
$chucvu = $_POST['chucvu'];
$sdt = $_POST['sdt'];
$matkhau = $_POST['matkhau'];
$tenquyen = $_POST['tenquyen'];
$lop = $_POST['lop'];
$giangvien = $_POST['giangvien'];


if(isset($_POST['them'])){
    //$err = ""; // rỗng
if(!$email||!$tensinhvien || !$ngaysinh || !$gioitinh||!$diachi || !$chucvu || !$sdt 
||!$matkhau  || !$lop || !$giangvien ) {
    // $('txtError').html($err);
    echo "Chưa nhập đủ thông tin.<a href='../../index.php?quanly=quanlysinhvien&ac=them'>Thêm lại sinh viên</a>";
    //header('location:../../index.php?capnhat=capnhatloaisanpham&ac=them');
    //onclick="return window.confirm('Bạn muốn xóa không');"

    }else{
    //thêm
        $sql ="INSERT INTO sinh_vien(sinh_vien.email, sinh_vien.ho_ten,sinh_vien.ngay_sinh,sinh_vien.gioi_tinh,
        sinh_vien.dia_chi,sinh_vien.chuc_vu,
        sinh_vien.sdt,sinh_vien.mat_khau,sinh_vien.ten_quyen,sinh_vien.ma_lop,sinh_vien.ma_nguoi_tao_tk)
VALUES ('$email','$tensinhvien','$ngaysinh','$gioitinh','$diachi','$chucvu','$sdt','$matkhau',
'Sinh viên','$lop','$giangvien')";

        mysqli_query($conn,$sql);
        header('location:../../index.php?quanly=quanlysinhvien&ac=them');
    } 
    
}elseif (isset($_POST['sua'])) {
    //sửa

$sql="UPDATE sinh_vien
SET 
sinh_vien.email='$email',
sinh_vien.ho_ten ='$tensinhvien',
sinh_vien.ngay_sinh ='$ngaysinh',
sinh_vien.gioi_tinh = '$gioitinh',
sinh_vien.dia_chi='$diachi',
sinh_vien.chuc_vu ='$chucvu',
sinh_vien.sdt ='$sdt',
sinh_vien.mat_khau = '$matkhau',
sinh_vien.ma_lop ='$lop',
sinh_vien.ma_nguoi_tao_tk = '$giangvien'
WHERE sinh_vien.ma_sinh_vien ='$id'"; 

mysqli_query($conn,$sql);
header('location:../../index.php?quanly=quanlysinhvien&ac=sua&id='.$id);


}else{
    //xóa
$sql= "DELETE FROM sinh_vien WHERE sinh_vien.ma_sinh_vien='$id'";
mysqli_query($conn,$sql);
header('location:../../index.php?quanly=quanlysinhvien&ac=them');
}
?>
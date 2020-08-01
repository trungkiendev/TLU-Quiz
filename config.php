<?php
$tenmaychu ="localhost";
$tentaikhoan ="root";
$pass ="";
$csdl ="dbthitracnghiem";
$conn = mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die("Không thể kết nối được");
mysqli_set_charset($conn,"utf8");
mysqli_select_db($conn,$csdl);
?>
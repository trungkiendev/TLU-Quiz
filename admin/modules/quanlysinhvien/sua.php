<?php
$sql3 = "SELECT * FROM sinh_vien
WHERE sinh_vien.ma_sinh_vien = '$_GET[id]'";
$run3 = mysqli_query($conn,$sql3);
$dong3 = mysqli_fetch_array($run3);
?>

<form action="modules/quanlysinhvien/xuly.php?id=<?php echo $dong3['ma_sinh_vien'] ;?>" method="post" enctype= "multipart/form-data">
<table  class="table table-striped table-hover table-bordered table-sm">
<tr>
<td colspan = "2"><div align ="center">Sửa chi sinh viên</div></td>

</tr>

<tr>
<td>email</td>
<td><input type="text" name="email" value = "<?php echo $dong3['email'];//lấy trong cơ sở dữ liệu?>"></td>
</tr>
<tr>
<td>Họ tên</td>
<td><input type="text" name="hoten" value = "<?php echo $dong3['ho_ten'];//lấy trong cơ sở dữ liệu?>"></td>
</tr>

<tr>
<td>Ngày sinh</td>
<td><input type="date" name="ngaysinh" value = "<?php echo $dong3['ngay_sinh'];//lấy trong cơ sở dữ liệu?>"></td>
</tr>

<tr>
<td>Giới tính</td>
<td><input type="text" name="gioitinh" value = "<?php echo $dong3['gioi_tinh'];//lấy trong cơ sở dữ liệu?>"></td>
</tr>

<tr>
<td>địa chỉ</td>
<td><input type="text" name="diachi" value = "<?php echo $dong3['dia_chi'];//lấy trong cơ sở dữ liệu?>"></td>
</tr>

<tr>
<td>Chức vụ </td>
<td><input type="text" name="chucvu" value = "<?php echo $dong3['chuc_vu'];//lấy trong cơ sở dữ liệu?>"></td>
</tr>

<tr>
<td>sđt</td>
<td><input type="text" name="sdt" value = "<?php echo $dong3['sdt'];//lấy trong cơ sở dữ liệu?>"></td>
</tr>

<tr>
<td>mật khẩu</td>
<td><input type="text" name="matkhau" value = "<?php echo $dong3['mat_khau'];//lấy trong cơ sở dữ liệu?>"></td>
</tr>

<tr>
<td>tên quyền</td>
<td><input type="text" name="tenquyen" value = "<?php echo $dong3['ten_quyen'];//lấy trong cơ sở dữ liệu?>"></td>
</tr>
<?php 
//include ("../../../config.php");
$sql = "SELECT * FROM lop";
$run = mysqli_query($conn,$sql);

?>
<tr>
<td>Tên lớp </td>
<td><select name="lop" >
<?php
while($dong = mysqli_fetch_array($run)){
 if($dong3['ma_lop']==$dong['ma_lop']) {  
?>
<option selected="selected" value = "<?php echo $dong['ma_lop'];?>"><?php echo $dong['ten_lop'];?></option>
<?php
}else{
?>
<option value = "<?php echo $dong['ma_lop'];?>"><?php echo $dong['ten_lop'];?></option>
<?php
}
}
?>
</select></td>
</tr>


<?php 
//include ("../../../config.php");
$sql2 = "SELECT * FROM giang_vien";
//WHERE nhan_vien.id_bo_phan_lam_viec = 'giang'";
$run2 = mysqli_query($conn,$sql2);

?>
<tr>
<td>Người tạo tk </td>
<td><select name="giangvien" >
<?php
while($dong2 = mysqli_fetch_array($run2)){
  if($dong3['ma_nguoi_tao_tk']==$dong2['ma_giang_vien']) {   
?>
<option selected="selected" value = "<?php  echo $dong2['ma_giang_vien'];?>"><?php echo $dong2['ho_ten'];?></option>
<?php
}else{
?>
<option value = "<?php echo $dong2['ma_giang_vien'];?>"><?php echo $dong2['ho_ten'];?></option>
<?php
}
}
?>
</select></td>
</tr>


<tr>
<td colspan = "2"><div align ="center"  ><input onclick="return window.confirm('Bạn muốn sửa không');" type="submit" name = "sua" value="Sửa"></div>
<a href="index.php?quanly=quanlysinhvien&ac=them">Thêm</a>
</td>

</tr>
</table>
</form>
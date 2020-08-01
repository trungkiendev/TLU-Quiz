
<form action="modules/quanlysinhvien/xuly.php" method="post" enctype= "multipart/form-data">
<table class="table table-striped table-hover table-bordered table-sm">
<tr>
<td colspan = "2"><div align ="center">Thêm sinh viên </div></td>

</tr>

<tr>
<td>email</td>
<td><input type="text" name="email" ></td>
</tr>
<tr>
<td>Họ tên</td>
<td><input type="text" name="hoten" ></td>
</tr>

<tr>
<td>Ngày sinh</td>
<td><input type="date" name="ngaysinh" ></td>
</tr>

<tr>
<td>Giới tính</td>
<td><input type="text" name="gioitinh" ></td>
</tr>

<tr>
<td>địa chỉ</td>
<td><input type="text" name="diachi" ></td>
</tr>

<tr>
<td>Chức vụ </td>
<td><input type="text" name="chucvu" ></td>
</tr>

<tr>
<td>sđt</td>
<td><input type="text" name="sdt" ></td>
</tr>

<tr>
<td>mật khẩu</td>
<td><input type="text" name="matkhau" ></td>
</tr>

<tr>
<td>tên quyền</td>
<td><input type="text" name="tenquyen"></td>
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
    
?>
<option value = "<?php echo $dong['ma_lop'];?>"><?php echo $dong['ten_lop'];?></option>
<?php
}
?>
</select></td>
</tr>

<?php 
//$a = $_SESSION['txt_ten_dang_nhap'];
//include ("../../../config.php");
$sql2 = "SELECT * FROM giang_vien ";
$run2 = mysqli_query($conn,$sql2);

?>
<tr>
<td>Người tạo tài khoản </td>
<td><select name="giangvien" >
<?php
while($dong2 = mysqli_fetch_array($run2)){
    
?>
<option value = "<?php echo $dong2['ma_giang_vien'];?>"><?php echo $dong2['ho_ten'];?></option>
<?php
}
?>
</select></td>
</tr>


<tr>
<td colspan = "2">
<button type="submit" name ="them" value ="Thêm" class="btn btn-primary btn-danger">Them</button>
</td>

</tr>
</table>
</form>
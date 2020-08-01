<?php
$sql3 = "SELECT * FROM lop
WHERE lop.ma_lop = '$_GET[id]'";
$run3 = mysqli_query($conn,$sql3);
$dong3 = mysqli_fetch_array($run3);
?>

<form action="modules/quanlylop/xuly.php?id=<?php echo $dong3['ma_lop'] ;?>" method="post" enctype= "multipart/form-data">
<table  class="table table-striped table-hover table-bordered table-sm">
<tr>
<td colspan = "2"><div align ="center">Sửa chi tiết lớp</div></td>

</tr>

<tr>
<td>Tên lớp</td>
<td><input type="text" name="tenlop" value = "<?php echo $dong3['ten_lop'];//lấy trong cơ sở dữ liệu?>"></td>
</tr>


<?php 
//include ("../../../config.php");
$sql = "SELECT * FROM khoa";
$run = mysqli_query($conn,$sql);

?>
<tr>
<td>Tên khóa </td>
<td><select name="khoa" >
<?php
while($dong = mysqli_fetch_array($run)){
 if($dong3['ma_khoa']==$dong['ma_khoa']) {  
?>
<option selected="selected" value = "<?php echo $dong['ma_Khoa'];?>"><?php echo $dong['ten_Khoa'];?></option>
<?php
}else{
?>
<option value = "<?php echo $dong['ma_Khoa'];?>"><?php echo $dong['ten_Khoa'];?></option>
<?php
}
}
?>
</select></td>
</tr>

<?php 
//include ("../../../config.php");
$sql1 = "SELECT * FROM khoa_lv";
$run1 = mysqli_query($conn,$sql1);

?>
<tr>
<td>Tên khoa </td>
<td><select name="khoalv" >
<?php
while($dong1 = mysqli_fetch_array($run1)){
  if($dong3['ma_khoa_lv']==$dong1['ma_khoa']) {     
?>
<option selected="selected" value = "<?php  echo $dong1['ma_khoa'];?>"><?php echo $dong1['ten_khoa'];?></option>
<?php
}else{
?>
<option value = "<?php echo $dong1['ma_khoa'];?>"><?php echo $dong1['ten_khoa'];?></option>
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
<td>Giảng viên chủ nhiệm </td>
<td><select name="giangvien" >
<?php
while($dong2 = mysqli_fetch_array($run2)){
  if($dong3['ma_giang_vien']==$dong2['ma_giang_vien']) {   
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
<a href="index.php?quanly=quanlylop&ac=them">Thêm</a>
</td>

</tr>
</table>
</form>
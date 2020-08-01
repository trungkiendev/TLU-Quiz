
<form action="modules/quanlylop/xuly.php" method="post" enctype= "multipart/form-data">
<table class="table table-striped table-hover table-bordered table-sm">
<tr>
<td colspan = "2"><div align ="center">Thêm lớp </div></td>

</tr>

<tr>
<td>Tên lớp</td>
<td><input type="text" name="tenlop" id=""></td>
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
    
?>
<option value = "<?php echo $dong['ma_Khoa'];?>"><?php echo $dong['ten_Khoa'];?></option>
<?php
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
<td>Tên khoa</td>
<td><select name="khoalv" >
<?php
while($dong1 = mysqli_fetch_array($run1)){
    
?>
<option value = "<?php echo $dong1['ma_khoa'];?>"><?php echo $dong1['ten_khoa'];?></option>
<?php
}
?>
</select></td>
</tr>

<?php 
//include ("../../../config.php");
$sql2 = "SELECT * FROM giang_vien";
$run2 = mysqli_query($conn,$sql2);

?>
<tr>
<td>Giảng viên chủ nhiệm </td>
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
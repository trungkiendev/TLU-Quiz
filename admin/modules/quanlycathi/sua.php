<?php
$sql3 = "SELECT * FROM ca_thi
WHERE ca_thi.ma_ca_thi = '$_GET[id]'";
$run3 = mysqli_query($conn,$sql3);
$dong3 = mysqli_fetch_array($run3);
?>

<form action="modules/quanlycathi/xuly.php?id=<?php echo $dong3['ma_ca_thi'] ;?>" method="post" enctype= "multipart/form-data">
<table class="table table-striped table-hover table-bordered table-sm">
<tr>
<td colspan = "2"><div align ="center">Sửa chi tiết ca thi</div></td>

</tr>

<tr>
<td>Tên ca thi</td>
<td><input type="text" name="tencathi" value = "<?php echo $dong3['ten_ca_thi'];//lấy trong cơ sở dữ liệu?>"></td>
</tr>

<tr>
<td>đợt thi</td>
<td><input type="text" name="dotthi" value = "<?php echo $dong3['dot_thi'];//lấy trong cơ sở dữ liệu?>"></td>
</tr>

<?php 
//include ("../../../config.php");
$sql = "SELECT * FROM ky_thi";
$run = mysqli_query($conn,$sql);

?>
<tr>
<td>Tên kỳ thi </td>
<td><select name="kythi" >
<?php
while($dong = mysqli_fetch_array($run)){
 if($dong3['ma_ky_thi']==$dong['ma_ky_thi']) {  
?>
<option selected="selected" value = "<?php echo $dong['ma_ky_thi'];?>"><?php echo $dong['ten_ky_thi'];?></option>
<?php
}else{
?>
<option value = "<?php echo $dong['ma_ky_thi'];?>"><?php echo $dong['ten_ky_thi'];?></option>
<?php
}
}
?>
</select></td>
</tr>



<tr>
<td colspan = "2"><div align ="center"  ><input onclick="return window.confirm('Bạn muốn sửa không');" type="submit" name = "sua" value="Sửa"></div>
<a href="index.php?quanly=quanlycathi&ac=them">Thêm</a>
</td>

</tr>
</table>
</form>
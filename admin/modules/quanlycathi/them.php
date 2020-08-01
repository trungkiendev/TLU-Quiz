
<form action="modules/quanlycathi/xuly.php" method="post" enctype= "multipart/form-data">
<table  class="table table-striped table-hover table-bordered table-sm">
<thead>
<tr class="thead-dark">
<td colspan = "2"><div align ="center">Thêm ca thi </div></td>

</tr>
</thead>

<tr>
<td>Tên ca thi</td>
<td><input type="text" name="tencathi" id=""></td>
</tr>

<tr>
<td>đợt thi</td>
<td><input type="text" name="dotthi"></td>
</tr>
<?php 
//include ("../../../config.php");
$sql = "SELECT * FROM ky_thi";
$run = mysqli_query($conn,$sql);

?>
<tr>
<td>Tên khóa </td>
<td><select name="kythi" >
<?php
while($dong = mysqli_fetch_array($run)){
    
?>
<option value = "<?php echo $dong['ma_ky_thi'];?>"><?php echo $dong['ten_ky_thi'];?></option>
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
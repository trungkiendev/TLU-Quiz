<?php

$sql = "SELECT khoa_lv.* FROM khoa_lv WHERE khoa_lv.ma_khoa='$_GET[id]'";
$run = mysqli_query($conn,$sql);
$dong = mysqli_fetch_array($run);
?>
<form action="modules/quanlykhoalv/xuly.php?id=<?php echo $dong["ma_khoa"];?>" method="post" >
<table class="table table-striped table-hover table-bordered table-sm">
<tr>
<td colspan = 2> <div align = "center">Sửa khoa</div></td>

</tr>
<tr>
<td>Tên khoa</td>
<td><input type="text" name="tenkhoa" id="tenkhoa" value ="<?php echo $dong["ten_khoa"];?>"></td>
</tr>
<tr>
<td colspan = 2> <div align = "center"><input onclick="return window.confirm('Bạn sửa  không');" type="submit" name ="sua" id ="sua" value ="Sửa"></div>
<a href="index.php?quanly=quanlykhoalv&ac=them">Thêm</a>
</td>

</tr>
</table>
</form>
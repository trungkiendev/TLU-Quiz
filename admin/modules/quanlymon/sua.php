<?php

$sql = "SELECT mon.* FROM mon WHERE mon.ma_mon='$_GET[id]'";
$run = mysqli_query($conn,$sql);
$dong = mysqli_fetch_array($run);
?>
<form action="modules/quanlymon/xuly.php?id=<?php echo $dong["ma_mon"];?>" method="post" >
<table  class="table table-striped table-hover table-bordered table-sm">
<tr>
<td colspan = 2> <div align = "center">Sửa khóa</div></td>

</tr>
<tr>
<td>Tên khóa</td>
<td><input type="text" name="tenmon" id="tenmon" value ="<?php echo $dong["ten_mon"];?>"></td>
</tr>
<tr>
<td>Ngày bắt đầu</td>
<td><input type="text" name="sotinchi" id="sotinchi" value ="<?php echo $dong["so_tin_chi"];?>"></td>
</tr>
<tr>
<td colspan = 2> <div align = "center"><input onclick="return window.confirm('Bạn sửa  không');" type="submit" name ="sua" id ="sua" value ="Sửa"></div>
<a href="index.php?quanly=quanlymon&ac=them">Thêm</a>
</td>

</tr>
</table>
</form>
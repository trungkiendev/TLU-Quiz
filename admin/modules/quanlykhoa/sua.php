<?php

$sql = "SELECT khoa.* FROM khoa WHERE khoa.ma_Khoa='$_GET[id]'";
$run = mysqli_query($conn,$sql);
$dong = mysqli_fetch_array($run);
?>
<form action="modules/quanlykhoa/xuly.php?id=<?php echo $dong["ma_Khoa"];?>" method="post" >
<table class="table table-striped table-hover table-bordered table-sm">
<tr>
<td colspan = 2> <div align = "center">Sửa khóa</div></td>

</tr>
<tr>
<td>Tên khóa</td>
<td><input type="text" name="tenkhoa" id="tenkhoa" value ="<?php echo $dong["ten_Khoa"];?>"></td>
</tr>
<tr>
<td>Ngày bắt đầu</td>
<td><input type="date" name="ngaybatdau" id="ngaybatdau" value ="<?php echo $dong["ngay_bat_dau"];?>"></td>
</tr>
<tr>
<td>Ngày kết thúc</td>
<td><input type="date" name="ngayketthuc" id="ngayketthuc" value ="<?php echo $dong["ngay_ket_thuc"];?>"></td>
</tr>
<tr>
<td colspan = 2> <div align = "center"><input onclick="return window.confirm('Bạn sửa  không');" type="submit" name ="sua" id ="sua" value ="Sửa"></div>
<a href="index.php?quanly=quanlykhoa&ac=them">Thêm</a>
</td>

</tr>
</table>
</form>
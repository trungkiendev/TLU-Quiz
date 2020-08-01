<?php

$sql = "SELECT ky_thi.* FROM ky_thi WHERE ky_thi.ma_ky_thi='$_GET[id]'";
$run = mysqli_query($conn,$sql);
$dong = mysqli_fetch_array($run);
?>
<form action="modules/quanlykithi/xuly.php?id=<?php echo $dong["ma_ky_thi"];?>" method="post" >
<table class="table table-striped table-hover table-bordered table-sm">
<tr>
<td colspan = 2> <div align = "center">Sửa kỳ thi</div></td>

</tr>
<tr>
<td>Tên kỳ thi</td>
<td><input type="text" name="tenkythi" id="tenkythi" value ="<?php echo $dong["ten_ky_thi"];?>"></td>
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
<a href="index.php?quanly=quanlykithi&ac=them">Thêm</a>
</td>

</tr>
</table>
</form>
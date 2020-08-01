<?php

$sql ="SELECT * FROM lop,khoa,khoa_lv,giang_vien
WHERE lop.ma_khoa = khoa.ma_Khoa AND lop.ma_khoa_lv= khoa_lv.ma_khoa
 AND lop.ma_giang_vien = giang_vien.ma_giang_vien
ORDER BY lop.ma_lop DESC";
$run = mysqli_query($conn,$sql);
?>
<table style="margin-top:3rem;" class="table table-striped table-hover table-sm table-bordered">
<tr>
<td>id lớp</td>
<td>tên lớp</td>
<td>tên khóa</td>
<td>tên khoa</td>
<td>giảng viên chủ nhiêm</td>
<td colspan = "2">Quản lý</td>
</tr>
<?php 
//if($run){
while($dong = mysqli_fetch_array($run))
{
?>
<tr>
<td><?php echo $dong["ma_lop"];?></td>
<td><?php echo $dong['ten_lop']; ?></td>
<td><?php echo $dong['ten_Khoa']; ?></td>
<td><?php echo $dong['ten_khoa']; ?></td>
<td><?php echo $dong['ho_ten']; ?></td>

<td><a  href="index.php?quanly=quanlylop&ac=sua&id=<?php echo $dong["ma_lop"];?>">Sửa</a></td>
<td><a onclick="return window.confirm('Bạn muốn xóa không');" href="modules/quanlylop/xuly.php?id=<?php echo $dong["ma_lop"];?>">Xóa</a></td>
</tr>
<?php
//$i++;
}

//}
?>
</table>
<?php
//include ("../../../config.php");
$sql ="SELECT * FROM khoa ORDER by ma_Khoa DESC ";
$run = mysqli_query($conn,$sql);
?>
<table style="margin-top:3rem;" class="table table-hover table-striped table-bordered table-sm">
<tr>
<td>id</td>
<td>Tên khóa</td>
<td>Ngày bắt đầu</td>
<td>Ngày kết thúc</td>
<td colspan = "2">Quản lý</td>

</tr>
<?php
//$i = 0;
while ($dong = mysqli_fetch_array($run)){
?>
<tr>
<td><?php echo $dong["ma_Khoa"];?></td>
<td><?php echo $dong["ten_Khoa"];?></td>
<td><?php echo $dong["ngay_bat_dau"];?></td>
<td><?php echo $dong["ngay_ket_thuc"];?></td>
<td> <a href="index.php?quanly=quanlykhoa&ac=sua&id=<?php echo $dong["ma_Khoa"];?>">Sửa</a> </td>
<td> <a onclick="return window.confirm('Bạn muốn xóa không');" href="modules/quanlykhoa/xuly.php?id=<?php echo $dong["ma_Khoa"];?>"> Xóa</a></td>
</tr>
<?php
//$i++;
}
?>
</table>

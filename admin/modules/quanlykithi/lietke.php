<?php
//include ("../../../config.php");
$sql ="SELECT * FROM ky_thi ORDER by ma_ky_thi DESC ";
$run = mysqli_query($conn,$sql);
?>
<table style="margin-top:3rem;" class="table table-striped table-hover table-bordered table-sm">
<tr>
<td>id</td>
<td>Tên kỳ thi</td>
<td>Ngày bắt đầu</td>
<td>Ngày kết thúc</td>
<td colspan = "2">Quản lý</td>

</tr>
<?php
//$i = 0;
while ($dong = mysqli_fetch_array($run)){
?>
<tr>
<td><?php echo $dong["ma_ky_thi"];?></td>
<td><?php echo $dong["ten_ky_thi"];?></td>
<td><?php echo $dong["ngay_bat_dau"];?></td>
<td><?php echo $dong["ngay_ket_thuc"];?></td>
<td> <a href="index.php?quanly=quanlykithi&ac=sua&id=<?php echo $dong["ma_ky_thi"];?>">Sửa</a> </td>
<td> <a onclick="return window.confirm('Bạn muốn xóa không');" href="modules/quanlykithi/xuly.php?id=<?php echo $dong["ma_ky_thi"];?>"> Xóa</a></td>
</tr>
<?php
//$i++;
}
?>
</table>

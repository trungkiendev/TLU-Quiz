<?php
//include ("../../../config.php");
$sql ="SELECT * FROM khoa_lv ORDER by ma_khoa DESC ";
$run = mysqli_query($conn,$sql);
?>
<table  style="margin-top:3rem;" class="table table-striped table-bordered table-hover table-sm">
<tr>
<td>id</td>
<td>Tên khoa</td>
<td colspan = "2">Quản lý</td>

</tr>
<?php
//$i = 0;
while ($dong = mysqli_fetch_array($run)){
?>
<tr>
<td><?php echo $dong["ma_khoa"];?></td>
<td><?php echo $dong["ten_khoa"];?></td>
<td> <a href="index.php?quanly=quanlykhoalv&ac=sua&id=<?php echo $dong["ma_khoa"];?>">Sửa</a> </td>
<td> <a onclick="return window.confirm('Bạn muốn xóa không');" href="modules/quanlykhoalv/xuly.php?id=<?php echo $dong["ma_khoa"];?>"> Xóa</a></td>
</tr>
<?php
//$i++;
}
?>
</table>

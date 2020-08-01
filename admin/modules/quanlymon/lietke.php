<?php
//include ("../../../config.php");
$sql ="SELECT * FROM mon ORDER by ma_mon DESC ";
$run = mysqli_query($conn,$sql);
?>
<table style="margin-top:3rem;" class="table table-striped table-hover table-bordered table-sm">
<tr>
<td>id</td>
<td>Tên môn</td>
<td>số tín chỉ</td>
<td colspan = "2">Quản lý</td>

</tr>
<?php
//$i = 0;
while ($dong = mysqli_fetch_array($run)){
?>
<tr>
<td><?php echo $dong["ma_mon"];?></td>
<td><?php echo $dong["ten_mon"];?></td>
<td><?php echo $dong["so_tin_chi"];?></td>
<td> <a href="index.php?quanly=quanlymon&ac=sua&id=<?php echo $dong["ma_mon"];?>">Sửa</a> </td>
<td> <a onclick="return window.confirm('Bạn muốn xóa không');" href="modules/quanlymon/xuly.php?id=<?php echo $dong["ma_mon"];?>"> Xóa</a></td>
</tr>
<?php
//$i++;
}
?>
</table>

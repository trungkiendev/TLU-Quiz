<?php

$sql ="SELECT * FROM ca_thi, ky_thi
WHERE ca_thi.ma_ky_thi = ky_thi.ma_ky_thi
ORDER BY ca_thi.ma_ca_thi DESC";
$run = mysqli_query($conn,$sql);
?>
<table style="margin-top:3rem;" class="table table-striped table-hover table-bordered table-sm">
<tr>
<td>id ca thi</td>
<td>tên ca thi</td>
<td>đợt thi</td>
<td>tên kỳ thi</td>

<td colspan = "2">Quản lý</td>
</tr>
<?php 
//if($run){
while($dong = mysqli_fetch_array($run))
{
?>
<tr>
<td><?php echo $dong["ma_ca_thi"];?></td>
<td><?php echo $dong['ten_ca_thi']; ?></td>
<td><?php echo $dong['dot_thi']; ?></td>
<td><?php echo $dong['ten_ky_thi']; ?></td>


<td><a  href="index.php?quanly=quanlycathi&ac=sua&id=<?php echo $dong["ma_ca_thi"];?>">Sửa</a></td>
<td><a onclick="return window.confirm('Bạn muốn xóa không');" href="modules/quanlycathi/xuly.php?id=<?php echo $dong["ma_ca_thi"];?>">Xóa</a></td>
</tr>
<?php
//$i++;
}

//}
?>
</table>
<?php

$sql ="SELECT t1.*, t2.ho_ten as giangvien,t1.ten_khoa as tenkhoa
FROM
(SELECT giang_vien.ma_giang_vien,giang_vien.email,giang_vien.ho_ten,giang_vien.ngay_sinh,giang_vien.gioi_tinh,giang_vien.dia_chi,giang_vien.chuc_vu
 ,giang_vien.sdt,giang_vien.mat_khau,giang_vien.ten_quyen,khoa_lv.ten_khoa
 FROM giang_vien LEFT JOIN khoa_lv 
 ON (giang_vien.ma_khoa= khoa_lv.ma_khoa) )t1
    LEFT JOIN                                                                                 
(SELECT giang_vien.ma_giang_vien,giang_vien.ma_nguoi_tao_tk,giang_vien.ho_ten FROM sinh_vien LEFT JOIN giang_vien  ON (giang_vien.ma_nguoi_tao_tk= giang_vien.ma_giang_vien) )t2 
ON t1.ma_giang_vien=t2.ma_giang_vien
ORDER BY  t1.ma_giang_vien DESC";
$run = mysqli_query($conn,$sql);
?>
<table class="table table-striped table-hover table-bordered table-sm">
<tr>
<td>mã giảng viên</td>
<td>email</td>
<td>họ tên</td>
<td>ngày sinh</td>
<td>giới tính</td>
<td>địa chỉ</td>
<td>chức vụ</td>
<td>sđt</td>
<td>mật khẩu</td>
<td>tên quyền</td>
<td>tên khoa</td>
<td>Người tạo tk</td>
<td colspan = "2">Quản lý</td>
</tr>
<?php 
if($run){
while($dong = mysqli_fetch_array($run))
{
?>
<tr>
<td><?php echo $dong["ma_giang_vien"];?></td>
<td><?php echo $dong['email']; ?></td>
<td><?php echo $dong['ho_ten']; ?></td>
<td><?php echo $dong['ngay_sinh']; ?></td>
<td><?php echo $dong['gioi_tinh']; ?></td>
<td><?php echo $dong['dia_chi']; ?></td>
<td><?php echo $dong['chuc_vu']; ?></td>
<td><?php echo $dong['sdt']; ?></td>
<td><?php echo $dong['mat_khau']; ?></td>
<td><?php echo $dong['ten_quyen']; ?></td>
<td><?php echo $dong['tenkhoa']; ?></td>
<td><?php echo $dong['giangvien']; ?></td>

<td><a  href="index.php?quanly=quanlygiangvien&ac=sua&id=<?php echo $dong["ma_giang_vien"];?>">Sửa</a></td>
<td><a onclick="return window.confirm('Bạn muốn xóa không');" href="modules/quanlygiangvien/xuly.php?id=<?php echo $dong["ma_giang_vien"];?>">Xóa</a></td>
</tr>
<?php
//$i++;
}

}
?>
</table>
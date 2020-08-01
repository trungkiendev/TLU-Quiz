<?php

$sql ="SELECT t1.*, t2.ho_ten as giangvien,t1.ten_lop as tenlop
FROM
(SELECT sinh_vien.ma_sinh_vien,sinh_vien.email,sinh_vien.ho_ten,sinh_vien.ngay_sinh,sinh_vien.gioi_tinh,sinh_vien.dia_chi,sinh_vien.chuc_vu
 ,sinh_vien.sdt,sinh_vien.mat_khau,sinh_vien.ten_quyen,lop.ten_lop
 FROM sinh_vien  LEFT JOIN lop 
 ON (sinh_vien.ma_lop= lop.ma_lop) )t1
    LEFT JOIN                                                                                 
(SELECT sinh_vien.ma_sinh_vien,sinh_vien.ma_nguoi_tao_tk,giang_vien.ho_ten FROM sinh_vien LEFT JOIN giang_vien  ON (giang_vien.ma_nguoi_tao_tk= giang_vien.ma_giang_vien) )t2 
ON t1.ma_sinh_vien=t2.ma_sinh_vien
ORDER BY  t1.ma_sinh_vien DESC";
$run = mysqli_query($conn,$sql);
?>
<table style="margin-top:3rem;" class="table table-striped table-hover table-bordered table-sm">
<tr>
<td>mã sinh viên</td>
<td>email</td>
<td>họ tên</td>
<td>ngày sinh</td>
<td>giới tính</td>
<td>địa chỉ</td>
<td>chức vụ</td>
<td>sđt</td>
<td>mật khẩu</td>
<td>tên quyền</td>
<td>tên lớp</td>
<td>Người tạo tk</td>
<td colspan = "2">Quản lý</td>
</tr>
<?php 
if($run){
while($dong = mysqli_fetch_array($run))
{
?>
<tr>
<td><?php echo $dong["ma_sinh_vien"];?></td>
<td><?php echo $dong['email']; ?></td>
<td><?php echo $dong['ho_ten']; ?></td>
<td><?php echo $dong['ngay_sinh']; ?></td>
<td><?php echo $dong['gioi_tinh']; ?></td>
<td><?php echo $dong['dia_chi']; ?></td>
<td><?php echo $dong['chuc_vu']; ?></td>
<td><?php echo $dong['sdt']; ?></td>
<td><?php echo $dong['mat_khau']; ?></td>
<td><?php echo $dong['ten_quyen']; ?></td>
<td><?php echo $dong['tenlop']; ?></td>
<td><?php echo $dong['giangvien']; ?></td>

<td><a  href="index.php?quanly=quanlysinhvien&ac=sua&id=<?php echo $dong["ma_sinh_vien"];?>">Sửa</a></td>
<td><a onclick="return window.confirm('Bạn muốn xóa không');" href="modules/quanlysinhvien/xuly.php?id=<?php echo $dong["ma_sinh_vien"];?>">Xóa</a></td>
</tr>
<?php
//$i++;
}

}
?>
</table>
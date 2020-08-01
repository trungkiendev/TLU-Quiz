<?php
session_start();

include "header.php";
include "../connection.php";

if(!isset($_SESSION["txt_ten_dang_nhap"])){
    ?>
        <script type="text/javascript">
            window.location = "../../index.php";
        </script>
    <?php
}

// $ma_giang_vien = $_GET["ma_giang_vien"];

$email = "";
$ho_ten = "";
$ngay_sinh = "";
$gioi_tinh = "";
$dia_chi = "";
$chuc_vu = "";
$sdt = "";

$ma_giang_vien = $_SESSION["ma_giang_vien"];


$res = mysqli_query($conn, "SELECT * FROM giang_vien WHERE ma_giang_vien = '$ma_giang_vien'");
while ($row = mysqli_fetch_array($res)) {
    $email = $row["email"];
    $ho_ten = $row["ho_ten"];
    $ngay_sinh = $row["ngay_sinh"];
    $gioi_tinh = $row["gioi_tinh"];
    $dia_chi = $row["dia_chi"];
    $chuc_vu = $row["chuc_vu"];
    $sdt = $row["sdt"];
}


?>



<div class="content mt-3">
    <div class="animated fadeIn">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <div class="col-lg-12">

                            <div class="card">
                                <div class="card-header"><strong>Thông tin giảng viên</strong></div>
                                <div class="card-body card-block">
                                    <div class="form-group"><label class=" form-control-label">Họ tên</label><input readonly type="text" value="<?php echo $ho_ten ?>" class="form-control" name="question"></div>
                                    <div class="form-group"><label class=" form-control-label">Ngày sinh</label><input readonly type="text" value="<?php echo $ngay_sinh ?>" class="form-control" name="opt1"></div>
                                    <div class="form-group"><label class=" form-control-label">Giới tính</label><input readonly type="text" value="<?php echo $gioi_tinh ?>" class="form-control" name="opt2"></div>
                                    <div class="form-group"><label class=" form-control-label">Địa chỉ</label><input readonly type="text" value="<?php echo $dia_chi ?>" class="form-control" name="opt3"></div>
                                    <div class="form-group"><label class=" form-control-label">Email</label><input readonly type="text" value="<?php echo $email ?>" class="form-control" name="opt4"></div>
                                    <div class="form-group"><label class=" form-control-label">Số điện thoại</label><input readonly type="text" value="<?php echo $sdt ?>" class="form-control" name="answer"></div>
                                    <div class="form-group"><label class=" form-control-label">Chức vụ</label><input type="text" readonly value="<?php echo $chuc_vu ?>" class="form-control" name="answer"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> <!-- .card -->
            </div>
            <!--/.col-->
        </div>
    </div><!-- .animated -->
</div><!-- .content -->



<?php
include "footer.php";
?>
<?php
if(isset($_GET['ac']) && $_GET['ac']=='logout'){
    unset($_SESSION['txt_ten_dang_nhap
    ']);//bỏ cái duy nhất session đăng nhập
    header('location:../index.php');
}
?>

<div class="header">
                <div class="row title">
                    <div class="col-md-11">
                        <div>
                            HỆ THỐNG ĐẠI HỌC THỦY LỢi - id giang vien ----> <?php echo $_SESSION['ma_giang_vien']; ?>
                        </div>
                    </div>
                    <div class="login col-md-1">
                        <button type="button" class="btn btn-secondary"><a href="index.php?ac=logout">Đăng xuất</a></button>
                    </div>
                </div>
            </div>
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

$ma_de_thi = $_GET["ma_de_thi"];
$res = mysqli_query($conn, "SELECT * FROM de_thi WHERE ma_de_thi=$ma_de_thi");
while ($row = mysqli_fetch_array($res)) {
    $ten_de_thi = $row["ten_de_thi"];
    $so_cau_hoi = $row["so_cau_hoi"];
    $thoi_gian_lam_bai = $row["thoi_gian_lam_bai"];
    $trang_thai = $row["trang_thai"];
}

?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Sửa đề thi</h1>
            </div>
        </div>
    </div>

</div>

<div class="content mt-3">
    <div class="animated fadeIn">


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <form name="form1" action="" method="POST">
                        <div class="card-body">

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header"><strong>Sửa đề thi</strong></div>
                                    <div class="card-body card-block">
                                        <div class="form-group"><label class=" form-control-label">Tên đề thi</label><input value="<?php echo $ten_de_thi ?>" type="text" class="form-control" name="ten_de_thi" required></div>

                                        <div class="form-group"><label class=" form-control-label">Số câu hỏi</label><input value="<?php echo $so_cau_hoi ?>"t type="text" class="form-control" name="so_cau" required></div>

                                        <div class="form-group"><label class=" form-control-label">Thời gian làm bài</label><input value="<?php echo $thoi_gian_lam_bai ?>" type="text" class="form-control" name="thoi_gian" required></div>

                                        <div class="form-group"><label class=" form-control-label">Trạng thái</label><br>
                                            <select name="trang_thai">
                                                <option disabled>---Trạng thái---</option>
                                                <option value="public" <?php if($trang_thai=="public") echo 'selected="selected"'; ?>>Công khai</option>
                                                <option value="private" <?php if($trang_thai=="private") echo 'selected="selected"'; ?>>Không công khai</option>

                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <input type="submit" name="submit1" value="Sửa" class="btn btn-success rounded">
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div> <!-- .card -->
                    </form>
                </div>
                <!--/.col-->


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->

    <?php
    if (isset($_POST["submit1"])) {
        mysqli_query($conn, "UPDATE de_thi SET ten_de_thi='$_POST[ten_de_thi]', so_cau_hoi='$_POST[so_cau]', thoi_gian_lam_bai='$_POST[thoi_gian]', trang_thai='$_POST[trang_thai]' WHERE ma_de_thi=$ma_de_thi") or die(mysqli_errno($conn));

    ?>
        <script type="text/javascript">
            alert("Sửa thành công!");
            window.location = "ql_dethi.php";
        </script>
    <?php


    }
    ?>

    <?php
    include "footer.php";
    ?>
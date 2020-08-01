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

$ma_ky_thi = $_GET["ma_ky_thi"];
$res = mysqli_query($conn, "SELECT * FROM ky_thi WHERE ma_ky_thi=$ma_ky_thi");
while ($row = mysqli_fetch_array($res)) {
    $ten_ky_thi = $row["ten_ky_thi"];
    $ngay_thi = $row["ngay_thi"];
}

?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Sửa kỳ thi</h1>
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
                                    <div class="card-header"><strong>Sửa kỳ thi</strong></div>
                                    <div class="card-body card-block">

                                        <div class="form-group"><label class=" form-control-label">Tên kỳ thi</label><input value="<?php echo $ten_ky_thi ?>" type="text"  class="form-control" name="ten_ky_thi" required></div>

                                        <div class="form-group"><label class=" form-control-label">Ngày thi</label><input value="<?php echo $ngay_thi ?>" type="date"  class="form-control" name="ngay_thi" required></div>

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
        mysqli_query($conn, "UPDATE ky_thi SET ten_ky_thi='$_POST[ten_ky_thi]', ngay_thi='$_POST[ngay_thi]' WHERE ma_ky_thi=$ma_ky_thi") or die(mysqli_errno($conn));

    ?>
        <script type="text/javascript">
        alert("Sửa thành công!");
            window.location = "ql_kythi.php";
        </script>
    <?php


    }
    ?>

    <?php
    include "footer.php";
    ?>
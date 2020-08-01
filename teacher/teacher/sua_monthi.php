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

$ma_mon = $_GET["ma_mon"];
$res = mysqli_query($conn, "SELECT * FROM mon WHERE ma_mon=$ma_mon");
while ($row = mysqli_fetch_array($res)) {
    $ten_mon_thi = $row["ten_mon"];
    $so_tin_chi = $row["so_tin_chi"];
}

?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Sửa môn thi</h1>
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
                                    <div class="card-header"><strong>Sửa môn thi</strong></div>
                                    <div class="card-body card-block">

                                        <div class="form-group"><label class=" form-control-label">Tên môn thi</label><input value="<?php echo $ten_mon_thi ?>" type="text" class="form-control" name="ten_mon_thi" required></div>

                                        <div class="form-group"><label class=" form-control-label">Số tín chỉ</label><input value="<?php echo $so_tin_chi ?>" type="text" class="form-control" name="so_tin_chi" required></div>

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
        mysqli_query($conn, "UPDATE mon SET ten_mon='$_POST[ten_mon_thi]', so_tin_chi='$_POST[so_tin_chi]' WHERE ma_mon=$ma_mon") or die(mysqli_errno($conn));

    ?>
        <script type="text/javascript">
            alert("Sửa thành công!");
            window.location = "ql_monthi.php";
        </script>
    <?php


    }
    ?>

    <?php
    include "footer.php";
    ?>
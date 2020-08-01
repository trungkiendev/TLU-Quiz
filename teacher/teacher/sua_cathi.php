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


$ma_ca_thi = $_GET["ma_ca_thi"];
$res = mysqli_query($conn, "SELECT * FROM ca_thi WHERE ma_ca_thi=$ma_ca_thi");
while ($row = mysqli_fetch_array($res)) {
    $ten_ca_thi = $row["ten_ca_thi"];
    $dot_thi = $row["dot_thi"];
}

?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Sửa ca thi</h1>
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
                                    <div class="card-header"><strong>Sửa ca thi</strong></div>
                                    <div class="card-body card-block">

                                        <div class="form-group"><label class=" form-control-label">Kỳ thi: </label>
                                            <select name="ky_thi">
                                                <option disabled>---Chọn kỳ thi---</option>
                                                <?php
                                                $sql = mysqli_query($conn, "SELECT * From ky_thi");
                                                $row = mysqli_num_rows($sql);
                                                while ($row = mysqli_fetch_array($sql)) {
                                                    echo "<option value='" . $row['ma_ky_thi'] . "'>" . $row['ten_ky_thi'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group"><label class=" form-control-label">Tên ca thi</label><input type="text" value="<?php echo $ten_ca_thi ?>" class="form-control" name="ten_ca_thi" required></div>

                                        <div class="form-group"><label class=" form-control-label">Đợt thi</label><input type="text" value="<?php echo $dot_thi ?>" class="form-control" name="dot_thi" required></div>

                                        <div class="form-group">
                                            <input type="submit" name="submit1" value="Thêm" class="btn btn-success rounded">
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
        mysqli_query($conn, "UPDATE ca_thi SET ten_ca_thi='$_POST[ten_ca_thi]', dot_thi='$_POST[dot_thi]', ma_ky_thi='$_POST[ky_thi]' WHERE ma_ca_thi=$ma_ca_thi") or die(mysqli_errno($conn));

    ?>
        <script type="text/javascript">
        alert("Sửa thành công!");
            window.location = "ql_cathi.php";
        </script>
    <?php


    }
    ?>

    <?php
    include "footer.php";
    ?>
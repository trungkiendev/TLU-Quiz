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


$ma_cau_hoi = $_GET["ma_cau_hoi"];
$res = mysqli_query($conn, "SELECT * FROM cau_hoi WHERE ma_cau_hoi=$ma_cau_hoi");
while ($row = mysqli_fetch_array($res)) {
    $noi_dung = $row["noi_dung"];
    $dap_an_a = $row["dap_an_a"];
    $dap_an_b = $row["dap_an_b"];
    $dap_an_c = $row["dap_an_c"];
    $dap_an_d = $row["dap_an_d"];
    $dap_an_dung = $row["dap_an_dung"];
    $muc_do = $row["muc_do"];
}

?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Sửa câu hỏi</h1>
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

                            <div class="col-lg-12">
                                <form action="" name="form1" method="POST" enctype="multipart/form-data">
                                    <div class="card">
                                        <div class="card-header"><strong>Sửa câu hỏi</strong></div>


                                        <div class="card-body card-block">
                                            <div class="form-group"><label class=" form-control-label">Câu hỏi</label><br><textarea name="noi_dung" rows="5" cols="150" class="rounded" class="form-control" required><?php echo $noi_dung ?></textarea></div>
                                            <div class="form-group"><label class=" form-control-label">Đáp án A</label><input type="text" value="<?php echo $dap_an_a ?>" class="form-control" name="da1" required></div>
                                            <div class="form-group"><label class=" form-control-label">Đáp án B</label><input type="text" value="<?php echo $dap_an_b ?>" class="form-control" name="da2" required></div>
                                            <div class="form-group"><label class=" form-control-label">Đáp án C</label><input type="text" value="<?php echo $dap_an_c ?>" class="form-control" name="da3" required></div>
                                            <div class="form-group"><label class=" form-control-label">Đáp án D</label><input type="text" value="<?php echo $dap_an_d ?>" class="form-control" name="da4" required></div>
                                            <div class="form-group"><label class=" form-control-label">Đáp án đúng</label><input type="text" value="<?php echo $dap_an_dung ?>" class="form-control" name="dap_an_dung" required></div>
                                            <div class="form-group"><label class=" form-control-label">Mức độ</label><br>
                                                <select name="muc_do">
                                                    <option disabled>---Mức độ---</option>
                                                    <option value="easy" <?php if($muc_do=="easy") echo 'selected="selected"'; ?>>Dễ</option>
                                                    <option value="normal" <?php if($muc_do=="normal") echo 'selected="selected"'; ?>>Trung bình</option>
                                                    <option value="difficult" <?php if($muc_do=="difficult") echo 'selected="selected"'; ?>>Khó</option>
                                                </select>
                                            </div>

                                            <div class="col-lg-12">

                                            <div class="col-lg-1">
                                                <div class="form-group">
                                                    <input type="submit" name="submit1" value="Sửa" class="btn btn-success rounded">
                                                </div>
                                            </div>
                                            

                                            <div class="col-lg-11">
                                                <div class="form-group">
                                                    <a href="ds_cauhoi.php"><input type="" name="" value="Quay lại" class="btn btn-success rounded"></a>
                                                </div>
                                            </div>
                                            

                                            </div>

                                        </div>
                                    </div>
                            </div>
                    </form>



                </div> <!-- .card -->
                </form>
            </div>
            <!--/.col-->


        </div>
    </div><!-- .animated -->
</div><!-- .content -->

<?php
if (isset($_POST["submit1"])) {
    mysqli_query($conn, "UPDATE cau_hoi SET noi_dung='$_POST[noi_dung]', dap_an_a='$_POST[da1]', dap_an_b='$_POST[da2]', dap_an_c='$_POST[da3]', dap_an_d='$_POST[da4]', dap_an_dung='$_POST[dap_an_dung]', muc_do='$_POST[muc_do]' WHERE ma_cau_hoi=$ma_cau_hoi") or die(mysqli_errno($conn));

?>
    <script type="text/javascript">
    alert("Sửa thành công!");
        window.location = "ds_cauhoi.php";
    </script>
<?php


}
?>

<?php
include "footer.php";
?>
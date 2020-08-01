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
?>

<div class="content mt-3">
    <div class="animated fadeIn">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <div class="col-lg-12">
                            <form action="" name="form1" method="POST" enctype="multipart/form-data">
                                <div class="card">
                                    <div class="card-header"><strong>Thêm câu hỏi</strong></div>

                                    <div class="col-lg-12 mt-2">

                                        <div class="form-group col-lg-12"><label class=" form-control-label">Môn thi: </label>
                                            <select name="mon_thi">
                                                <option disabled>---Chọn môn thi---</option>
                                                <?php
                                                $sql = mysqli_query($conn, "SELECT ma_mon, ten_mon From mon");
                                                $row = mysqli_num_rows($sql);
                                                while ($row = mysqli_fetch_array($sql)) {
                                                    echo "<option value='" . $row['ma_mon'] . "'>" . $row['ten_mon'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>


                                    </div>

                                    <div class="card-body card-block">

                                        <div class="form-group"><label class=" form-control-label">Câu hỏi</label><br><textarea class="col-lg-12 rounded" placeholder="Nhập câu hỏi" name="cau_hoi" rows="5" cols="150" class="rounded" class="form-control" required></textarea></div>
                                        <div class="col-lg-12">
                                            <div class="col-lg-6">
                                                <div class="form-group"><label class=" form-control-label">Đáp án A</label><input type="text" placeholder="Nhập đáp án A" class="form-control" name="da1" required></div>
                                                <div class="form-group"><label class=" form-control-label">Đáp án B</label><input type="text" placeholder="Nhập đáp án B" class="form-control" name="da2" required></div>
                                                <div class="form-group"><label class=" form-control-label">Đáp án đúng</label><input type="text" placeholder="Nhập đáp án đúng" class="form-control" name="dap_an_dung" required></div>
                                                <div class="form-group">
                                                    <input type="submit" name="submit1" value="Thêm" class="btn btn-success rounded">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group"><label class=" form-control-label">Đáp án C</label><input type="text" placeholder="Nhập đáp án C" class="form-control" name="da3" required></div>
                                                <div class="form-group"><label class=" form-control-label">Đáp án D</label><input type="text" placeholder="Nhập đáp án D" class="form-control" name="da4" required></div>
                                                <div class="form-group"><label class=" form-control-label">Mức độ</label><br>
                                                    <select name="level">
                                                        <option disabled>---Mức độ---</option>
                                                        <option value="easy">Dễ</option>
                                                        <option selected value="normal">Trung bình</option>
                                                        <option value="difficult">Khó</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div><!-- .animated -->
</div><!-- .content -->

<?php

$ma_giang_vien = $_SESSION["ma_giang_vien"];

if (isset($_POST["submit1"])) {

    mysqli_query($conn, "INSERT INTO cau_hoi VALUES (NULL, '$_POST[cau_hoi]', '$_POST[da1]', '$_POST[da2]', '$_POST[da3]', '$_POST[da4]', '$_POST[dap_an_dung]', '', '$_POST[level]', now(), '$_POST[mon_thi]', '$ma_giang_vien')");

?>
    <script type="text/javascript">
        alert("Đã thêm câu hỏi thành công!");
        window.location.href = window.location.href;
    </script>
<?php

}

?>


<?php
include "footer.php";
?>
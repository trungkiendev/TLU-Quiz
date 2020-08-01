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
                    <form name="form1" action="" method="POST">
                        <div class="card-body">

                            <div class="breadcrumbs">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="page-header float-left">


                                            <div class="form-group col-lg-6"><label class=" form-control-label">Đề thi môn: </label>
                                                <select name="mon_thi" id="mon_thi">
                                                    <option selected disabled>---Chọn đề thi---</option>
                                                    <?php
                                                    $sql = mysqli_query($conn, "SELECT ma_de_thi, ten_de_thi From de_thi");
                                                    $row = mysqli_num_rows($sql);
                                                    while ($row = mysqli_fetch_array($sql)) {
                                                        echo "<option value='" . $row['ma_de_thi'] . "'>" . $row['ten_de_thi'] . "</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>

                                            <div class="form-group col-lg-6"><label  class=" form-control-label">Điểm từng câu</label><input type="text" placeholder="Nhập điểm" class="form-control" name="diem_tung_cau" required></div>



                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6" id="cau_hoi">
                                <div class="card">
                                    <div class="card-header"><strong>Danh sách câu hỏi</strong></div>
                                    <div class="card-body card-block">
                                        <table class="table table-striped table-hover table-bordered">
                                            <tr>
                                                <th>#</th>
                                                <th>Câu hỏi</th>
                                                <th>Đáp án đúng</th>
                                                <th>Độ khó</th>
                                            </tr>

                                            <?php

                                            $res = mysqli_query($conn, "SELECT * FROM cau_hoi ORDER BY ma_cau_hoi asc ");

                                            $count = 0;

                                            while ($row = mysqli_fetch_array($res)) {

                                                $count += 1;

                                                echo "<tr>";
                                                echo "<td>";
                                                echo $count;
                                                echo "</td>";
                                                echo "<td>";
                                                echo $row["noi_dung"];
                                                echo "</td>";

                                                echo "<td>";
                                                echo $row["dap_an_dung"];
                                                echo "</td>";

                                                echo "<td>";

                                                echo $row["muc_do"];

                                                echo "</td>";

                                                echo "</tr>";
                                            }

                                            ?>
                                        </table>

                                        <div class="form-group">
                                            <input type="submit" name="submit1" value="Thêm" class="btn btn-success rounded">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Câu hỏi hiện có trong đề</strong>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-striped table-hover table-bordered">
                                        <tr>
                                                <th>#</th>
                                                <th>Câu hỏi</th>
                                                <th>Đáp án đúng</th>
                                                <th>Độ khó</th>
                                            </tr>

                                            <?php

                                            $res = mysqli_query($conn, "SELECT * FROM cau_hoi ORDER BY ma_cau_hoi asc ");
                                            $count = 0;
                                            while ($row = mysqli_fetch_array($res)) {

                                                $count += 1;

                                                echo "<tr>";
                                                echo "<td>";
                                                echo $count;
                                                echo "</td>";
                                                echo "<td>";
                                                echo $row["noi_dung"];
                                                echo "</td>";

                                                echo "<td>";
                                                echo $row["dap_an_dung"];
                                                echo "</td>";

                                                echo "<td>";

                                                echo $row["muc_do"];

                                                echo "</td>";

                                                echo "</tr>";
                                            }

                                            ?>
                                        </table>
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
        mysqli_query($conn, "INSERT INTO de_thi VALUES(NULL, '$_POST[ten_de_thi]', '$_POST[ca_thi]', '$_POST[mon_thi]', now(), '$_POST[so_cau]', '$_POST[thoi_gian]', '$_POST[nguoi_tao]','$_POST[trang_thai]')") or die(mysqli_error($conn));
    ?>
        <script type="text/javascript">
            alert("Thêm thành công");
            window.location.href = window.location.href;
        </script>
    <?php


    }
    ?>

<script>
    $(document).ready(function() {
        $('#mon_thi').change(function() {
            var ma_mon = $(this).val();
            $.ajax({
                url: "ajax/load_ds_cauhoi_ctdt.php",
                method: "POST",
                data: {
                    ma_de_thi: ma_de_thi
                },
                success: function(data) {
                    $('#cau_hoi').html(data);
                }
            });
        });
    });
</script>

    <?php
    include "footer.php";
    ?>
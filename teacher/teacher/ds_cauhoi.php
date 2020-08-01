<?php
session_start();
include "header.php";
include "../connection.php";
mysqli_set_charset($conn, 'UTF8');

if(!isset($_SESSION["txt_ten_dang_nhap"])){
    ?>
        <script type="text/javascript">
            window.location = "../../index.php";
        </script>
    <?php
}

if(isset($_POST["search"])){
    $sql = mysqli_query($conn, "SELECT * FROM `cau_hoi` WHERE CONCAT (`ma_cau_hoi`,`noi_dung`,`dap_an_a`,`dap_an_b`,`dap_an_c`,`dap_an_d`,`dap_an_dung`) LIKE '%" .$_POST["valueToSearch"]. "%'");
    if(mysqli_num_rows($sql) > 0){
        $res = $sql;
    }else{
        ?>
            <script>
                alert ("Không có dữ liệu giống với từ khóa bạn nhập!");
                window.location = "ds_cauhoi.php";
            </script>
        <?php
    }
}else{
    $res = mysqli_query($conn, "SELECT * FROM cau_hoi ORDER BY ma_cau_hoi asc ");
}


?>



<div class="content mt-3">
    <div class="animated fadeIn">


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><strong>Danh sách câu hỏi</strong></div>
                    <div class="card-body">

                        <div class="form-group col-lg-6">
                            <label class=" form-control-label">Môn thi: </label>
                            <select name="mon_thi" id="mon_thi">
                                <option selected disabled>---Chọn môn thi---</option>
                                <?php
                                $sql = mysqli_query($conn, "SELECT ma_mon, ten_mon From mon");
                                $row = mysqli_num_rows($sql);
                                while ($row = mysqli_fetch_array($sql)) {
                                    echo "<option value='" . $row['ma_mon'] . "'>" . $row['ten_mon'] . "</option>";
                                }
                                ?>

                            </select>
                        </div>

                        <form action="" method="POST">
                            <div class="form-group col-lg-6">
                                <input class="rounded" type="text" name="valueToSearch" id="valueToSearch" placeholder="Nhập từ khóa tìm kiếm...">
                                <input type="submit" name="search" id="search" value="Tìm kiếm">
                            </div>
                        </form>
                        


                        <div class="form-group row col-lg-12" id="cau_hoi">
                            <table class="table table-striped table-hover table-bordered">
                                <tr>
                                    <th>#</th>
                                    <th>Câu hỏi</th>
                                    <th>Đáp án A</th>
                                    <th>Đáp án B</th>
                                    <th>Đáp án C</th>
                                    <th>Đáp án D</th>
                                    <th>Đáp án đúng</th>
                                    <th>Độ khó</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>

                                <?php

                                $count = 0;

                                // $res = mysqli_query($conn, "SELECT * FROM cau_hoi ORDER BY ma_cau_hoi asc ");
                                

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
                                    echo $row["dap_an_a"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["dap_an_b"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["dap_an_c"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["dap_an_d"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["dap_an_dung"];
                                    echo "</td>";

                                    echo "<td>";

                                    echo $row["muc_do"];

                                    echo "</td>";




                                    echo "<td>";
                                ?>
                                    <a class="menu-icon fa fa-pencil-square-o" href="sua_cauhoi.php?ma_cau_hoi=<?php echo $row["ma_cau_hoi"]; ?>"></a>
                                    <?php
                                    echo "</td>";

                                    echo "<td>";
                                    ?>
                                    <a class="menu-icon fa fa-times" href="del_cauhoi.php?ma_cau_hoi=<?php echo $row["ma_cau_hoi"]; ?>" onClick="return confirm('Bạn có chắc chắn muốn xóa?')"></a>
                                <?php
                                    echo "</td>";


                                    echo "</tr>";
                                }

                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div><!-- .animated -->
</div><!-- .content -->



<script>
    $(document).ready(function() {
        $('#mon_thi').change(function() {
            var ma_mon = $(this).val();
            $.ajax({
                url: "ajax/load_ds_cauhoi.php",
                method: "POST",
                data: {
                    ma_mon: ma_mon
                },
                success: function(data) {
                    $('#cau_hoi').html(data);
                }
            });
        });
    });
</script>

<!-- <script>

    $(document).ready(function() {
        $('#search').change(function() {
            var valueToSearch = $(this).val();
            $.ajax({
                url: "ajax/load_queslist_from_search.php",
                method: "POST",
                data: {
                    valueToSearch: valueToSearch
                },
                success: function(data) {
                    $('#cau_hoi').html(data);
                }
            });
        });
    });
</script> -->


<?php
include "footer.php";
?>
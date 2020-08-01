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


                                            <div class="form-group col-lg-6"><label class=" form-control-label">Môn thi: </label>
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

                                            <div class="form-group col-lg-6"><label class=" form-control-label">Ca thi: </label><br>
                                                <select name="ca_thi">
                                                    <option disabled>---Chọn ca thi---</option>
                                                    <?php
                                                    $sql = mysqli_query($conn, "SELECT ma_ca_thi, ten_ca_thi From ca_thi");
                                                    $row = mysqli_num_rows($sql);
                                                    while ($row = mysqli_fetch_array($sql)) {
                                                        echo "<option value='" . $row['ma_ca_thi'] . "'>" . $row['ten_ca_thi'] . "</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>

                                            

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Danh sách đề thi</strong>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-striped table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Tên đề thi</th>
                                                    <th scope="col">Số câu hỏi</th>
                                                    <th scope="col">Thời gian</th>
                                                    <th scope="col">Ca thi</th>
                                                    <th scope="col">Ngày ra đề</th>
                                                    <th scope="col">Trạng thái</th>
                                                    <th scope="col">Sửa</th>
                                                    <th scope="col">Xóa</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                <?php
                                                $count = 0;
                                                $res = mysqli_query($conn, "SELECT * FROM `de_thi`, ca_thi WHERE de_thi.ma_ca_thi=ca_thi.ma_ca_thi ORDER BY ma_de_thi DESC");
                                                while ($row = mysqli_fetch_array($res)) {

                                                    $count = $count + 1;

                                                ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $count ?></th>
                                                        <td><?php echo $row["ten_de_thi"] ?></td>
                                                        <td><?php echo $row["so_cau_hoi"] ?></td>
                                                        <td><?php echo $row["thoi_gian_lam_bai"] ?></td>
                                                        <td><?php echo $row["ten_ca_thi"] ?></td>
                                                        <td><?php echo $row["ngay_ra_de"] ?></td>
                                                        <td><?php echo $row["trang_thai"] ?></td>
                                                        <td><a class="menu-icon fa fa-pencil-square-o" href="sua_dethi.php?ma_de_thi=<?php echo $row["ma_de_thi"]; ?>"></a></td>
                                                        <td><a class="menu-icon fa fa-times" href="del_dethi.php?ma_de_thi=<?php echo $row["ma_de_thi"]; ?>" onClick="return confirm('Bạn có chắc chắn muốn xóa <?php echo $row["ten_de_thi"]; ?>?')"></a></td>
                                                    </tr>
                                                <?php

                                                }
                                                ?>



                                            </tbody>
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
    include "footer.php";
    ?>
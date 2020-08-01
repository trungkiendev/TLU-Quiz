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

<div class="breadcrumbs">

</div>

<div class="content mt-3">
    <div class="animated fadeIn">


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <form name="form1" action="" method="POST">
                        <div class="card-body">

                            <div class="form-group ml-3"><label class=" form-control-label">Kỳ thi: </label>
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


                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Ca thi</strong>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Tên ca thi</th>
                                                    <th scope="col">Đợt</th>
                                                    <th scope="col">Sửa</th>
                                                    <th scope="col">Xóa</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                <?php
                                                $count = 0;
                                                $res = mysqli_query($conn, "SELECT * FROM ca_thi");
                                                while ($row = mysqli_fetch_array($res)) {

                                                    $count = $count + 1;

                                                ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $count ?></th>
                                                        <td><?php echo $row["ten_ca_thi"] ?></td>
                                                        <td><?php echo $row["dot_thi"] ?></td>
                                                        <td><a class="menu-icon fa fa-pencil-square-o" href="sua_cathi.php?ma_ca_thi=<?php echo $row["ma_ca_thi"]; ?> "></a></td>
                                                        <td><a class="menu-icon fa fa-times" href="del_cathi.php?ma_ca_thi=<?php echo $row["ma_ca_thi"]; ?>" onClick="return confirm('Bạn có chắc chắn muốn xóa <?php echo $row["ten_ca_thi"]; ?>?')"></a></td>
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
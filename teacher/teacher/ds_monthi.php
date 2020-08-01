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

                           

                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Môn thi</strong>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Tên môn</th>
                                                    <th scope="col">Số tín chỉ</th>
                                                    <th scope="col">Sửa</th>
                                                    <th scope="col">Xóa</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                            <?php
                                            $count = 0;
                                                $res = mysqli_query($conn, "SELECT * FROM mon");
                                                while($row = mysqli_fetch_array($res)){

                                                    $count = $count+1;

                                                    ?>
                                                        <tr>
                                                        <th scope="row"><?php echo $count ?></th>
                                                        <td><?php echo $row["ten_mon"] ?></td>
                                                        <td><?php echo $row["so_tin_chi"] ?></td>
                                                        <td><a class="menu-icon fa fa-pencil-square-o" href="sua_monthi.php?ma_mon=<?php echo $row["ma_mon"]; ?>"></a></td>
                                                        <td><a class="menu-icon fa fa-times" href="del_monthi.php?ma_mon=<?php echo $row["ma_mon"]; ?>" onClick="return confirm('Bạn có chắc chắn muốn xóa <?php echo $row["ten_mon"]; ?>?')"></a></td>
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
<?php
//load_data.php  
include "../../connection.php";
mysqli_set_charset($conn, 'UTF8');
$count = 0;
if (isset($_POST["search"])) {
    if (isset($_POST["valueToSearch"])) {
   
        $sql = "SELECT * FROM `cau_hoi` WHERE CONCAT (`ma_cau_hoi`,`noi_dung`,`dap_an_a`,`dap_an_b`,`dap_an_c`,`dap_an_d`,`dap_an_dung`) LIKE '%" .$_POST["valueToSearch"]. "%'";
   
    $result = mysqli_query($conn, $sql);
?>
    <div class="form-group row col-lg-12" id="show_product">
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
            while ($row = mysqli_fetch_array($result)) {
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
<?php
}
}

?>
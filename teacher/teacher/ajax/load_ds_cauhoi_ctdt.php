<?php
//load_data.php  
include "../../connection.php";
mysqli_set_charset($conn, 'UTF8');
$count = 0;
if (isset($_POST["ma_de_thi"])) {
    if ($_POST["ma_de_thi"] != '') {
        $sql = "SELECT c.noi_dung, c.dap_an_dung, c.muc_do FROM cau_hoi c INNER JOIN mon m ON c.ma_mon=m.ma_mon INNER JOIN de_thi d ON m.ma_mon=d.ma_mon INNER JOIN chi_tiet_de_thi_cau_hoi ct ON ct.ma_de_thi=d.ma_de_thi WHERE ma_de_thi = '" . $_POST["ma_de_thi"] . "'";
    } else {
        $sql = "SELECT * FROM cau_hoi";
    }
    $result = mysqli_query($conn, $sql);
?>
    <div class=" form-group rowcol-lg-6">
        <table class="table table-striped table-hover table-bordered">
            <tr>
                <th>#</th>
                <th>Câu hỏi</th>
                <th>Đáp án đúng</th>
                <th>Độ khó</th>
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
<?php
}

?>
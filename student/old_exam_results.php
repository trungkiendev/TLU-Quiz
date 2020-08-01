<?php
    session_start();
    include "header.php";
    include "connection.php";
    if(!isset($_SESSION["txt_ten_dang_nhap"])){
        ?>
            <script type="text/javascript">
                window.location = "../index.php";
            </script>
        <?php
    }
?>


<div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px;">

    <div class="col-lg-6 col-lg-push-3" style="min-height: 500px; background-color: white;">
        <center><h2 style="margin-top: 10px;">Kết quả thi</h2></center>
        <?php
            $count = 0;
            $res = mysqli_query($conn, "SELECT * FROM bai_lam ORDER BY ma_bai_thi desc");
            $count = mysqli_num_rows($res);

            if($count == 0){
                ?>
                    <center><h2 style="margin-top: 10px;">Không có kết quả</h2></center>
                <?php
            }else{
                echo "<table class='table table-bordered'>";
                echo "<tr style='background-color: #006df0; color: #fff'>";

                echo "<th>"; echo "Email"; echo "</th>";
                echo "<th>"; echo "Bài thi"; echo "</th>";
                echo "<th>"; echo "Số câu hỏi"; echo "</th>";
                echo "<th>"; echo "Số câu trả lời đúng"; echo "</th>";
                echo "<th>"; echo "Số câu trả lời sai"; echo "</th>";
                echo "<th>"; echo "Thời gian"; echo "</th>";

                echo "</tr>";


                while($row = mysqli_fetch_array($res)){
                    echo "<tr>";

                    echo "<td>"; echo $row["email"]; echo "</td>";
                    echo "<td>"; echo $row["exam_type"]; echo "</td>";
                    echo "<td>"; echo $row["total_question"]; echo "</td>";
                    echo "<td>"; echo $row["correct_answer"]; echo "</td>";
                    echo "<td>"; echo $row["wrong_answer"]; echo "</td>";
                    echo "<td>"; echo $row["exam_time"]; echo "</td>";

                    echo "</tr>";
                }

                echo "</table>";
            }
        ?>
    </div>

</div>


<?php
    include "footer.php";
?>


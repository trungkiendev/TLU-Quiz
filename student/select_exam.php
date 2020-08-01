<?php
session_start();
if (!isset($_SESSION["txt_ten_dang_nhap"])) {
?>
    <script type="text/javascript">
        window.location = "../index.php";
    </script>
<?php
}
?>

<?php
include "header.php";
include "connection.php";
?>


<div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px;">

    <div class="col-lg-6 col-lg-push-3" style="min-height: 500px; background-color: white;">

        <div class="form-group rounded-0 col-lg-6 col-lg-push-3" style=""><label class=" form-control-label">Chọn môn thi: </label>
            <select name="giang_vien">
                <?php
                $msg = "Hiện tại chưa có đề thi!";
                $sql = mysqli_query($conn, "SELECT * FROM de_thi WHERE trang_thai='public'");
                $row = mysqli_num_rows($sql);
                while ($row = mysqli_fetch_array($sql)) {
                    if($row == 0){
                        echo "";
                    }else{
                        echo "<option value='" . $row['ma_de_thi'] . "'>" . $row['ten_de_thi'] . "</option>";
                    }
                }
                ?>
            </select>
        </div>
        
    </div>

</div>


<?php
include "footer.php";
?>

<script type="text/javascript">
    function set_exam_type_session(exam_category) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                window.location = "dashboard.php";
            }
        };
        xmlhttp.open("GET", "forajax/set_exam_type_session.php?exam_category=" + exam_category, true);
        xmlhttp.send(null);
    }
</script>
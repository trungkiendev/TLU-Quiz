<?php

    include "../connection.php";
    $ma_ky_thi = $_GET["ma_ky_thi"];
    mysqli_query($conn, "DELETE FROM ky_thi WHERE ma_ky_thi=$ma_ky_thi");
?>

<script type="text/javascript">
    alert("Đã xóa thành công!");
    window.location = "ds_kythi.php";
</script>
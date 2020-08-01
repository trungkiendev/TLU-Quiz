<?php

    include "../connection.php";
    $ma_cau_hoi = $_GET["ma_cau_hoi"];
    mysqli_query($conn, "DELETE FROM cau_hoi WHERE ma_cau_hoi=$ma_cau_hoi");
?>

<script type="text/javascript">
    alert("Đã xóa thành công!");
    window.location = "ds_cauhoi.php";
</script>
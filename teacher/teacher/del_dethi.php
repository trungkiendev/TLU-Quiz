<?php

    include "../connection.php";
    $ma_de_thi = $_GET["ma_de_thi"];
    mysqli_query($conn, "DELETE FROM de_thi WHERE ma_de_thi=$ma_de_thi");
?>

<script type="text/javascript">
    alert("Đã xóa thành công!");
    window.location = "ds_dethi.php";
</script>
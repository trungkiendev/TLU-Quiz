<?php

    include "../connection.php";
    $ma_ca_thi = $_GET["ma_ca_thi"];
    mysqli_query($conn, "DELETE FROM ca_thi WHERE ma_ca_thi=$ma_ca_thi");
?>

<script type="text/javascript">
    alert("Đã xóa thành công!");
    window.location = "ds_cathi.php";
</script>
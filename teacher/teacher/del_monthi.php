<?php

    include "../connection.php";
    $ma_mon = $_GET["ma_mon"];
    mysqli_query($conn, "DELETE FROM mon WHERE ma_mon=$ma_mon");
?>

<script type="text/javascript">
    alert("Đã xóa thành công!");
    window.location = "ds_monthi.php";
</script>
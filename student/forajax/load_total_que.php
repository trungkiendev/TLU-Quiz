<?php
    session_start();
    include "../connection.php";

    $total_que = 0;
    $res1 = mysqli_query($conn, "SELECT * FROM cau_hoi, mon WHERE category = '$_SESSION[exam_category]'");
    $total_que = mysqli_num_rows($res1);
    echo $total_que;
?>
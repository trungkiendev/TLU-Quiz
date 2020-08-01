<?php
    session_start();
    unset ($_SESSION['txt_ten_dang_nhap']);
    header ('Location:../../index.php');
?>
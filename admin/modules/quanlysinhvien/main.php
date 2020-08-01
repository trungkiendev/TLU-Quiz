<div class="content">
<?php
if(isset($_GET['ac'])){
    $tam =$_GET['ac'];
}else{
    $tam='';
}
if($tam == 'them'){
    include("modules/quanlysinhvien/them.php");
    
}elseif($tam == 'sua'){
    include("modules/quanlysinhvien/sua.php");
}
include("modules/quanlysinhvien/lietke.php");
?>
</div>

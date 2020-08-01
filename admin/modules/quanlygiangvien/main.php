<div class="content">
<?php
if(isset($_GET['ac'])){
    $tam =$_GET['ac'];
}else{
    $tam='';
}
if($tam == 'them'){
    include("modules/quanlygiangvien/them.php");
    
}elseif($tam == 'sua'){
    include("modules/quanlygiangvien/sua.php");
}
include("modules/quanlygiangvien/lietke.php");
?>
</div>

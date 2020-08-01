<div class="content">
<?php
if(isset($_GET['ac'])){
    $tam =$_GET['ac'];
}else{
    $tam='';
}
if($tam == 'them'){
    include("modules/quanlylop/them.php");
    
}elseif($tam == 'sua'){
    include("modules/quanlylop/sua.php");
}
include("modules/quanlylop/lietke.php");
?>
</div>

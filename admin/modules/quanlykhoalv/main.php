<div class="content">
<?php
if(isset($_GET['ac'])){
    $tam =$_GET['ac'];
}else{
    $tam='';
}
if($tam == 'them'){
    include("modules/quanlykhoalv/them.php");
    
}elseif($tam == 'sua'){
    include("modules/quanlykhoalv/sua.php");
    
    
}
include("modules/quanlykhoalv/lietke.php");
?>
</div>

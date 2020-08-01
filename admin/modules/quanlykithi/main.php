<div class="content">
<?php
if(isset($_GET['ac'])){
    $tam =$_GET['ac'];
}else{
    $tam='';
}
if($tam == 'them'){
    include("modules/quanlykithi/them.php");
    
}elseif($tam == 'sua'){
    include("modules/quanlykithi/sua.php");
}
include("modules/quanlykithi/lietke.php");
?>
</div>

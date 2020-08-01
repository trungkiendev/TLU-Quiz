<div class="content">
<?php
if(isset($_GET['ac'])){
    $tam =$_GET['ac'];
}else{
    $tam='';
}
if($tam == 'them'){
    include("modules/quanlycathi/them.php");
    
}elseif($tam == 'sua'){
    include("modules/quanlycathi/sua.php");
}
include("modules/quanlycathi/lietke.php");
?>
</div>

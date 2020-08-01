<div class="content">
<?php
if(isset($_GET['ac'])){
    $tam =$_GET['ac'];
}else{
    $tam='';
}
if($tam == 'them'){
    include("modules/quanlykhoa/them.php");
    
}elseif($tam == 'sua'){
    include("modules/quanlykhoa/sua.php");
}
include("modules/quanlykhoa/lietke.php");
?>
</div>

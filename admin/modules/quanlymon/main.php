<div class="content">
<?php
if(isset($_GET['ac'])){
    $tam =$_GET['ac'];
}else{
    $tam='';
}
if($tam == 'them'){
    include("modules/quanlymon/them.php");
    
}elseif($tam == 'sua'){
    include("modules/quanlymon/sua.php");
}
include("modules/quanlymon/lietke.php");
?>
</div>

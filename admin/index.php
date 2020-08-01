<?php
session_start();
include ("../config.php");
if(!isset($_SESSION["txt_ten_dang_nhap"])){
    ?>
        <script type="text/javascript">
            window.location = "../index.php";
        </script>
    <?php
}
?>



<!doctype html>
<html lang="en">
  <head>
    <title>Đại học Thủy Lợi</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#lol").click(function(){
                $("#abc").slideToggle();
            })
        })
    </script>
  </head>
  <body>
        <div class="container-fluid">
            <?php
                
                include ("modules/header.php");
                include ("modules/between.php");
                include ("modules/footer.php");
            ?>
            
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  </body>
</html>
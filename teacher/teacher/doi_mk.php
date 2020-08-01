<?php
session_start();
include "../connection.php";

if(!isset($_SESSION["txt_ten_dang_nhap"])){
    ?>
        <script type="text/javascript">
            window.location = "../../index.php";
        </script>
    <?php
}

$ma_giang_vien = $_SESSION["ma_giang_vien"];

$res = mysqli_query($conn, "SELECT * FROM giang_vien WHERE ma_giang_vien = '$ma_giang_vien'") or die(mysqli_error($conn));
$row = mysqli_fetch_assoc($res);

if(isset($_POST["submit"])){
    
    $count = mysqli_num_rows($res);

    if($_POST["old-pwd"] != $row["mat_khau"]){
        ?>
            <script >
                alert ("Mật khẩu cũ không đúng! Vui lòng kiểm tra lại");
                // document.getElementById("failure").style.display="block";
            </script>
        <?php
    }elseif($_POST["new-pwd"] != $_POST["retype"]){
        ?>
        <script type="text/javascript">
            alert ("Mật khẩu mới không trùng nhau! Vui lòng nhập lại!");
            // document.getElementById("f1").style.display="block";
        </script>
        <?php
    }elseif($_POST["retype"] == $row["mat_khau"]){
        ?>
        <script type="text/javascript">
            alert ("Mật khẩu mới trùng với mật khẩu cũ. Vui lòng nhập lại!");
            // document.getElementById("f1").style.display="block";
        </script>
        <?php
    }else{
        mysqli_query($conn, "UPDATE giang_vien SET mat_khau='$_POST[retype]' WHERE ma_giang_vien='$ma_giang_vien'");
        ?>
        <script type="text/javascript">
            alert ("Thay đổi thành công!");
            // document.getElementById("f1").style.display="block";
            window.location = "ql_cauhoi.php";
        </script>
        <?php
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Đổi mật khẩu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,400i|Noto+Sans:400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="sweetalert2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2/dist/sweetalert2.min.css">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            border: none;
            font-family: 'Palatino', sans-serif;
        }

        body {
            overflow: hidden;
            background-color: #ededed;
        }

        .to {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            grid-template-rows: minmax(100px, auto);
        }

        .form {
            border: 1px solid #80808000;
            grid-column: 6/9;
            grid-row: 3;
            height: 500px;
            width: 320px;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            border-radius: 15px;
            box-shadow: 0px 0px 14px 0px grey;
            background-color: white;
        }

        h2 {
            margin-top: 50px;
            margin-bottom: 30px;
        }

        i.fab.fa-app-store-ios {
            display: block;
            margin-bottom: 50px;
            font-size: 28px;
        }

        label {
            margin-left: -126px;
            display: block;
            font-weight: lighter;

        }

        

        input {
            display: block;
            border-bottom: 2px solid #00BCD4;
            margin-top: 2px;
            margin-bottom: 10px;
            outline-style: none;
            width: 200px;
        }

        input[type="text"] {
            padding: 5px;
            width: 300%;
        }

        input#submit {
            font-weight: bold;
            font-size: 18;
            color: #fff;
            padding: 7px;
            width: 50%;
            border-radius: 10px;
            border: none;
            position: absolute;
            bottom: 70px;
            cursor: pointer;
            background: linear-gradient(to right, #fc00ff, #00dbde);
        }

        input#submit1 {
            text-align: center;
            left: 90px;
            margin: auto;
            font-weight: bold;
            font-size: 18;
            color: #fff;
            padding: 7px;
            width: 40%;
            border-radius: 10px;
            border: none;
            position: absolute;
            bottom: 30px;
            cursor: pointer;
            background: linear-gradient(to right, #00dbde, #fc00ff);
        }

        input#submit:hover {

            transition-delay: 1s;
            text-decoration: none;
            background: #6a7dfe;
            background: -webkit-linear-gradient(left, #21d4fd, #b721ff);
            background: -o-linear-gradient(left, #21d4fd, #b721ff);
            background: -moz-linear-gradient(left, #21d4fd, #b721ff);
            background: linear-gradient(left, #21d4fd, #b721ff);
        }

        input#submit1:hover {

        text-decoration: none;
        background: #6a7dfe;
        background: -webkit-linear-gradient(left, #b721ff, #21d4fd);
        background: -o-linear-gradient(left, #b721ff, #21d4fd);
        background: -moz-linear-gradient(left, #b721ff, #21d4fd);
        background: linear-gradient(left, #b721ff, #21d4fd);
        transition: 1s;
        }

        /* .p-viewer, .p-viewer2, .p-viewer3{
            float: right;
            margin-top: -35px;
            position: relative;
            z-index: 1;
            cursor:pointer;
        } */


        
    </style>
</head>

<body>

    <div class="row">
        <form action="" name="form1" method="POST">
            <div class="to">
                <div class="form form-control">
                    <h2>Đổi mật khẩu</h2>
                    <i class="fab fa-app-store-ios"></i>

                    <div class="form-control">
                        Mật khẩu cũ:
                        <input id="password" type="password" value="" name="old-pwd" required>
                        <!-- <span class="p-viewer">
                            <i class="fa fa-eye" aria-hidden="true" type="button" id="showPassword"></i>
                        </span> -->
                    </div>
                    
                    <div class="form-control">
                        Mật khẩu mới:
                        <input id="password" type="password" name="new-pwd" required> 
                        <!-- <span class="p-viewer2">
                            <i class="fa fa-eye" aria-hidden="true" type="button" id="showPassword"></i>
                        </span>                    -->
                    </div>

                    <div class="form-control">
                        Nhập lại mật khẩu:
                        <input id="password" type="password" name="retype" required>
                        <!-- <span class="p-viewer3">
                            <i class="fa fa-eye" aria-hidden="true" type="button" id="showPassword"></i>
                        </span> -->
                    </div>

                    <input id="submit" type="submit" name="submit" value="Xác nhận">

                    <a href="ql_cauhoi.php"><input id="submit1" type="submit1" name="submit1" value="Quay lại"></a>

                    <!-- <div class="alert alert-danger" id="failure" style="margin-top: 10px; display: none">
                        <strong>Mật khẩu cũ không đúng!</strong> <br> Vui lòng kiểm tra lại!
                    </div>

                    <div class="alert alert-danger" id="f1" style="margin-top: 10px; display: none">
                        <strong>Mật khẩu không trùng khớp!</strong> <br> Vui lòng kiểm tra lại!
                    </div> -->

                </div>
            </div>
        </form>
    </div>




</body>

</html>

<!-- <script type="text/javascript">

    // Check javascript has loaded

$(document).ready(function(){
 

// Click event of the showPassword button

$('#showPassword').on('click', function(){

  // Get the password field
  var passwordField = $('#password');

  // Get the current type of the password field will be password or text
  var passwordFieldType = passwordField.attr('type');

  // Check to see if the type is a password field
  if(passwordFieldType == 'password')
  {
      // Change the password field to text
      passwordField.attr('type', 'text');

      // Change the Text on the show password button to Hide
      $(this).val('Hide');

  } else {
      // If the password field type is not a password field then set it to password
      passwordField.attr('type', 'password');

      // Change the value of the show password button to Show
      $(this).val('Show');
  }
});
});
</script> -->





<?php
session_start() ;
//var_dump($_POST);exit;
	//Gọi file connection.php ở bài trước
	require_once("config.php");
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
    if (isset($_POST["btn_submit"])) 
    {
		// lấy thông tin người dùng
		$username = $_POST["txt_ten_dang_nhap"];
        $password = $_POST["txt_mat_khau"];
        
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		// $username = strip_tags($username);
		// $username = addslashes($username);
		// $password = strip_tags($password);
        // $password = addslashes($password);
       // $password = md5($password);
        if ($username == "" || $password =="")
         {
			echo "username hoặc password bạn không được để trống!";
        }else
        {
           /* if(isset($_POST['remember']))
            {
                setcookie("logged",$username,time()+(60*86400),"/");*/
			$sql1 = "SELECT sinh_vien.email ,sinh_vien.mat_khau
            FROM sinh_vien
            WHERE sinh_vien.email = '$username' AND sinh_vien.mat_khau = '$password' ";
			$query1 = mysqli_query($conn,$sql1);
            $num_rows1 = mysqli_num_rows($query1);

            $sql2 = "SELECT *
            FROM giang_vien
            WHERE giang_vien.email = '$username' AND giang_vien.mat_khau = '$password' AND giang_vien.ten_quyen ='admin' ";
			$query2= mysqli_query($conn,$sql2);
            $num_rows2 = mysqli_num_rows($query2);

            $sql3 = "SELECT giang_vien.ma_giang_vien, giang_vien.email ,giang_vien.mat_khau
            FROM giang_vien
            WHERE giang_vien.email = '$username' AND giang_vien.mat_khau = '$password' AND giang_vien.ten_quyen ='teacher' ";
			$query3= mysqli_query($conn,$sql3);
            $num_rows3 = mysqli_num_rows($query3);
            
			if ($num_rows1) {
				$_SESSION['txt_ten_dang_nhap'] = $username;
                header('Location:student/select_exam.php');
                
            }elseif (($num_rows2)) {
                $data = mysqli_fetch_assoc($query2);
                $_SESSION['ma_giang_vien'] = $data['ma_giang_vien'];
                $_SESSION['mat_khau'] = $data['mat_khau'];
                $_SESSION['txt_ten_dang_nhap'] = $username;
                header('Location:admin/index.php');
                echo "thành công !";
                
            }elseif ($num_rows3) {
                $data = mysqli_fetch_array($query3);
                $_SESSION['ma_giang_vien'] = $data['ma_giang_vien'];
				$_SESSION['txt_ten_dang_nhap'] = $username;
                header('Location:teacher/teacher/dashboard.php');
            }else{
                echo "tên đăng nhập hoặc mật khẩu không đúng !";	
            }
       
        }
       

	}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
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
        <form action="" name="form" method="POST" id="login_form">
            <div class="to">
                <div class="form form-control">
                    <h2>Đăng nhập</h2>
                    <i class="fab fa-app-store-ios"></i>

                    <div class="form-control">
                        Email:
                        <input id="password" type="email" value="" name="txt_ten_dang_nhap" required>
                        <!-- <span class="p-viewer">
                            <i class="fa fa-eye" aria-hidden="true" type="button" id="showPassword"></i>
                        </span> -->
                    </div>
                    
                    <div class="form-control">
                        Mật khẩu:
                        <input id="password" type="password" name="txt_mat_khau" required> 
                        <!-- <span class="p-viewer2">
                            <i class="fa fa-eye" aria-hidden="true" type="button" id="showPassword"></i>
                        </span>                    -->
                    </div>

                    <input id="submit" type="submit" name="btn_submit" value="Đăng nhập">


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
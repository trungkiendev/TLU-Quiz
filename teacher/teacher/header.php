<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Teacher Panel</title>
    <meta name="description" content="Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="dashboard.php">
                    Giảng viên
                </a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <!-- <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Quản lý kỳ thi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-plus-square"></i><a href="ql_kythi.php">Thêm kỳ thi</a></li>
                            <li><i class="menu-icon fa fa-list-ul"></i><a href="ds_kythi.php">Danh sách kỳ thi</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Quản lý môn thi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-plus-square"></i><a href="ql_monthi.php">Thêm môn thi</a></li>
                            <li><i class="menu-icon fa fa-list-ul"></i><a href="ds_monthi.php">Danh sách môn thi</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Quản lý ca thi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-plus-square"></i><a href="ql_cathi.php">Thêm ca thi</a></li>
                            <li><i class="menu-icon fa fa-list-ul"></i><a href="ds_cathi.php">Danh sách ca thi</a></li>
                        </ul>
                    </li> -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Quản lý đề thi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-plus-square"></i><a href="ql_dethi.php">Thêm đề thi</a></li>
                            <li><i class="menu-icon fa fa-list-ul"></i><a href="ds_dethi.php">Danh sách đề thi</a></li>
                            <li><i class="menu-icon fa fa-info-circle"></i><a href="chitiet_dethi.php">Chi tiết đề thi</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Quản lý câu hỏi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-plus-square"></i><a href="ql_cauhoi.php">Thêm câu hỏi</a></li>
                            <li><i class="menu-icon fa fa-list-ul"></i><a href="ds_cauhoi.php">Danh sách câu hỏi</a></li>
                        </ul>
                    </li>

                    

                    <!-- <li>
                        <a href="old_exam_results.php"> <i class="menu-icon fa fa-pencil"></i>Kết quả thi </a>
                    </li> -->
                    <li>
                        <a href="logout.php"> <i class="menu-icon fa fa-close"></i>Đăng xuất </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">

                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="admin-name " style="margin-right: 10px; text-decoration: underline; font-size: 18px; color: #015C92; font-style: italic;"><?php echo $_SESSION["txt_ten_dang_nhap"]; ?></span>
                            <img class="user-avatar rounded-circle" src="images/smile.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="gv_info.php?=ma_giang_vien"> <i class="fa fa-user"></i>  Tài khoản</a>
                            <a class="nav-link" href="doi_mk.php?=ma_giang_vien"> <i class="fa fa-exchange"></i>  Đổi mật khẩu</a>
                            <a class="nav-link" href="logout.php"> <i class="fa fa-power-off"></i>  Đăng xuất</a>
                        </div>
                    </div>


                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <?php

        

        include "../connection.php";
        $res = mysqli_query($conn, "SELECT * FROM giang_vien");
        $row = mysqli_fetch_array($res);


        ?>
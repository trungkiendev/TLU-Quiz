<div class="between">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="Menu">
                                    <ul>
                                        <li><a href="index.php?quanly=quanlykhoa&ac=them">Quản Lý Khóa</a></li>
                                        <li><a href="index.php?quanly=quanlykhoalv&ac=them">Quản Lý Khoa</a></li>
                                        <li><a href="index.php?quanly=quanlylop&ac=them">Quản Lý Lớp</a></li>
                                        <li><a href="index.php?quanly=quanlysinhvien&ac=them">Quản Lý Sinh Viên</a></li>
                                        <li><a href="index.php?quanly=quanlygiangvien&ac=them">Quản Lý Giảng Viên</a></li>
                                        <li><a href="index.php?quanly=quanlykithi&ac=them">Quản Lý Kỳ Thi</a></li>
                                        <li><a href="index.php?quanly=quanlycathi&ac=them">Quản Lý ca thi</a></li>
                                        <li><a href="index.php?quanly=quanlymon&ac=them">Quản Lý Môn</a></li>
                                        <li><a href="#">Đổi Mật Khẩu</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="content">
                                <?php
                                if(isset($_GET['quanly'])){
                                    $tam =$_GET['quanly'];
                                }
                                elseif(isset($_GET['danhsach'])){
                                    $tam =$_GET['danhsach'];
                                }
                                else {
                                    $tam = '';
                                }if($tam== 'quanlykhoalv'){
                                    include("modules/quanlykhoalv/main.php");
                                }elseif($tam== 'quanlykhoa'){
                                    include("modules/quanlykhoa/main.php");
                                }elseif($tam== 'quanlylop'){
                                    include("modules/quanlylop/main.php");
                                }elseif($tam== 'quanlysinhvien'){
                                    include("modules/quanlysinhvien/main.php");
                                }elseif($tam== 'quanlygiangvien'){
                                    include("modules/quanlygiangvien/main.php");
                                }elseif($tam== 'quanlykithi'){
                                    include("modules/quanlykithi/main.php");
                                }elseif($tam== 'quanlymon'){
                                    include("modules/quanlymon/main.php");
                                }elseif($tam== 'quanlycathi'){
                                    include("modules/quanlycathi/main.php");
                                }

                                ?>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
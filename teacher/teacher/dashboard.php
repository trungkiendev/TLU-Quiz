<?php
session_start();
include "header.php";
include "../connection.php";


if (!isset($_SESSION["txt_ten_dang_nhap"])) {
?>
    <script type="text/javascript">
        window.location = "../../index.php";
    </script>
<?php
}
?>

<div class="breadcrumbs">

</div>

<div class="content mt-3">
    <div class="animated fadeIn">


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <html>

                        <head>
                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

                        </head>

                        <div class="col-lg-12">

                            <div class="col-lg-6">

                                <div id="donutchart" style="width: 800px; height: 400px;"></div>

                                <script type="text/javascript">
                                    google.charts.load("current", {
                                        packages: ["corechart"]
                                    });
                                    google.charts.setOnLoadCallback(drawChart);

                                    function drawChart() {
                                        var data = google.visualization.arrayToDataTable([
                                            ['Mức độ', 'Số câu hỏi'],
                                            <?php
                                            $sql = "SELECT * FROM cau_hoi GROUP BY muc_do";
                                            $fire = mysqli_query($conn, $sql);
                                            while ($res = mysqli_fetch_assoc($fire)) {
                                                echo "['" . $res['muc_do'] . "', " . $res['ma_cau_hoi'] . "],";
                                            }
                                            ?>
                                        ]);

                                        var options = {
                                            title: 'Số câu hỏi',
                                            pieHole: 0.4,
                                        };

                                        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
                                        chart.draw(data, options);
                                    }
                                </script>

                            </div>

                            <div class="col-lg-6">

                                <div id="donutchart" style="width: 900px; height: 500px;"></div>

                                <script type="text/javascript">
                                    google.charts.load("current", {
                                        packages: ["corechart"]
                                    });
                                    google.charts.setOnLoadCallback(drawChart);

                                    function drawChart() {
                                        var data = google.visualization.arrayToDataTable([
                                            ['Mức độ', 'Số câu hỏi'],
                                            <?php
                                            $sql = "SELECT * FROM cau_hoi GROUP BY muc_do";
                                            $fire = mysqli_query($conn, $sql);
                                            while ($res = mysqli_fetch_assoc($fire)) {
                                                echo "['" . $res['muc_do'] . "', " . $res['ma_cau_hoi'] . "],";
                                            }
                                            ?>
                                        ]);

                                        var options = {
                                            title: 'Số câu hỏi',
                                            pieHole: 0.4,
                                        };

                                        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
                                        chart.draw(data, options);
                                    }
                                </script>

                            </div>

                        </div>

                        <body>






                        </body>

                        </html>

                    </div>

                </div> <!-- .card -->
            </div>
        </div>

    </div><!-- .animated -->
</div><!-- .content -->



<?php
include "footer.php";
?>
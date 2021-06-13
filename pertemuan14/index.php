<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>pertemuan14</title>
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Tinggi Muka Air</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ch.php">Curah Hujan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kekeruhan.php">Kekeruhan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="chellenge.php">chellenge</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container mt-3">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-9">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Grafik Tinggi Permukaan Air</h5>
                            <hr>
                            <div id="grafik">
                                <?php  
                                include 'koneksi.php';
                                $tma = mysqli_query($koneksi, "select * from tma");
                                $data=array();
                                while($row = mysqli_fetch_array($tma))
                                {
                                    array_push($data, "['".$row['waktu']."',".$row['nilai']."]");
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </main>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<script src="https://code.highcharts.com/highcharts.src.js"></script> 
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script type="text/javascript">
 Highcharts.chart('grafik', {
 chart: {
        type: 'line',
        zoomType: 'x'
    },
 title: {
    text: 'Tinggi Muka Air'
 },
 subtitle: {
    text: 'Latihan Highcharts'
 },
 yAxis: {
     title: {
     text: 'Nilai Ketinggian'
 }
 },
 xAxis: {
     type: 'category',
     accessibility: {
     rangeDescription: 'Waktu'
 }
 },
 tooltip: {
    pointFormat: '{point.y} Meter'
 },
 legend: {
     layout: 'vertical',
     align: 'right',
     verticalAlign: 'middle'
 },
 plotOptions: {
     series: {
     label: {
     connectorAllowed: false
 }
 }
 },
 series: [{
     name: 'Tinggi Muka Air',
     lineWidth: 2,
     data: [<?= join($data, ',') ?>]
 }],
 responsive: {
     rules: [{
     condition: {
     maxWidth: 500
     },
 chartOptions: {
     legend: {
     layout: 'horizontal',
     align: 'center',
     verticalAlign: 'bottom'
 }
 }
 }]
 }
 });
</script>
  </body>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
</html>
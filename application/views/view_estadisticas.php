<!-- Start Sidemenu Area -->

<!-- End Sidemenu Area -->

<!-- Start Main Content Wrapper Area -->
<!-- Top Navbar Area -->

<!-- End Top Navbar Area -->

<!-- Breadcrumb Area -->
<div class="breadcrumb-area">
    <h1>Mnt Estadisticas</h1>

    <ol class="breadcrumb">
        <li class="item"><a href="<?php echo base_url('Welcome')?>"><i class='bx bx-home-alt'></i></a></li>

        <li class="item">Estadisticas</li>
    </ol>
</div>

<div class="card mb-30">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3>Mantenimiento de estadisticas</h3><br>
    </div>
    <div class="card-body">
        <div class="container mt-3">
            <h3>Selecciona una Campaña</h3>
            <form method="post" id="form_graphs">
                <select id="campañas" name="campañas"  class="form-select">
                    <?php foreach ($campain as $campains) : ?>
                    <option value="<?php echo ($campains['id_campain']) ?>"><?php echo ($campains['name_campain']) ?>
                    </option>
                    <?php endforeach; ?>
                </select>
                <button type="submit" value="add" name="action" class="btn btn-primary mt-3">Mostrar Grafica</button>
            </form>
        </div>
        <div id="piechart" style="width: 900px; height: 500px;"></div>
    </div>

</div>
<!-- End Breadcrumb Area -->

<!-- Start Footer End -->

<!-- End Footer End -->


<!-- End Main Content Wrapper Area -->

<!-- Vendors Min JS -->
<div>
    <script src="assets\js\vendors.min.js"></script>

    <!-- ApexCharts JS -->
    <script src="assets\js\apexcharts\apexcharts.min.js"></script>
    <script src="assets\js\apexcharts\apexcharts-stock-prices.js"></script>
    <script src="assets\js\apexcharts\apexcharts-irregular-data-series.js"></script>
    <script src="assets\js\apexcharts\apex-custom-line-chart.js"></script>
    <script src="assets\js\apexcharts\apex-custom-pie-donut-chart.js"></script>
    <script src="assets\js\apexcharts\apex-custom-area-charts.js"></script>
    <script src="assets\js\apexcharts\apex-custom-column-chart.js"></script>
    <script src="assets\js\apexcharts\apex-custom-bar-charts.js"></script>
    <script src="assets\js\apexcharts\apex-custom-mixed-charts.js"></script>
    <script src="assets\js\apexcharts\apex-custom-radialbar-charts.js"></script>
    <script src="assets\js\apexcharts\apex-custom-radar-chart.js"></script>

    <!-- ChartJS -->
    <script src="assets\js\chartjs\chartjs.min.js"></script>
    <div class="chartjs-colors">
        <!-- To use template colors with Javascript -->
        <div class="bg-primary"></div>
        <div class="bg-primary-light"></div>
        <div class="bg-secondary"></div>
        <div class="bg-info"></div>
        <div class="bg-success"></div>
        <div class="bg-success-light"></div>
        <div class="bg-danger"></div>
        <div class="bg-warning"></div>
        <div class="bg-purple"></div>
        <div class="bg-pink"></div>
    </div>

    <!-- jvectormap Min JS -->
    <script src="assets\js\jvectormap-1.2.2.min.js"></script>
    <!-- jvectormap World Mil JS -->
    <script src="assets\js\jvectormap-world-mill-en.js"></script>
    <!-- Custom JS -->
    <script src="assets\js\custom.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">

    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js"></script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</div>

<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(mostrarestadisticas);
    // $(document).ready(function(){
    //     $('#form_graphs').submit(function(event){
    //         event.preventDefault();

    //         var est = $('#estado').val();

    //         $.ajax({
    //             url: '<?php echo base_url('Estadisticas/graphics')?>',
    //             method: 'POST',
    //             data: { estado: est },
    //             cache: false,
    //             dataType: 'json',
    //             success: function(response) {
    //                 alert(response)
    //             }
    //         });
    //     });
    // });
    function init(){
        $('#form_graphs').on("submit", function(e) {
            mostrarestadisticas(e);
        });
    }

    function mostrarestadisticas(e){
        e.preventDefault();
        var est = $('#campañas').val();

        $.ajax({
            url: "<?php echo base_url('Estadisticas/graphics')?>",
            method: 'POST',
            data: {
                estado: est
            },
            success: function(respuesta) {
                // alert(respuesta)

                // Parsear los datos de respuesta
                var data = JSON.parse(respuesta);
                // Crear la tabla de datos
                var dataTable = google.visualization.arrayToDataTable(data);

                // Configurar las opciones de la gráfica
                var options = {
                    title: 'Campañas enviadas'
                };

                // Crear la instancia de la gráfica de barras
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                // Dibujar la gráfica
                chart.draw(dataTable, options);
            }
        });
    }


// function drawChart() {

// var data = google.visualization.arrayToDataTable([
//   ['Task', 'Hours per Day'],
//   ['Enviados',     6],
//   ['Recibido',      3],
//   ['No recibido',  3],
// ]);

// var options = {
//   title: 'Grafica de Campañas'
// };

// var chart = new google.visualization.PieChart(document.getElementById('piechart'));

// chart.draw(data, options);
// }
init();
</script>
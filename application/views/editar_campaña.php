<!-- Start Sidemenu Area -->

<!-- End Sidemenu Area -->

<!-- Start Main Content Wrapper Area -->
<!-- Top Navbar Area -->

<!-- End Top Navbar Area -->

<!-- Breadcrumb Area -->
<div class="breadcrumb-area">
    <h1>Editar Campaña</h1>

    <ol class="breadcrumb">
        <li class="item"><a href="<?php echo base_url('Welcome')?>"><i class='bx bx-home-alt'></i></a></li>

        <li class="item">Editar</li>
    </ol>
</div>

<div class="card mb-30">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3>Campaña: <a><?php echo ($campain['name_campain']) ?></a></h3><br>
        
    </div>
    <div class="card-body">
        <form action="<?php echo base_url('Campana/editar')?>" method="post" id="campain2_form">
            <input type="hidden" name="name_campain" id="name_campain" value="<?php echo ($campain['name_campain']) ?>">
            <input type="hidden" name="descripcion" id="descripcion" value="<?php echo ($campain['descripcion']) ?>">
            <input type="hidden" name="title" id="title" value="<?php echo ($campain['title']) ?>">
            <input type="hidden" name="id_campain" id="id_campain" value="<?php echo ($campain['id_campain']) ?>"> 

            <div class="form-group">
                <label>Asunto</label>
                <input type="text" id="subject" name="subject" class="form-control" required 
                value="<?php echo ($campain['subject']) ?>">
            </div>

            <div class="form-group">
                <label>Template HTML</label>
                <textarea id="template" name="template" class="form-control" rows="20"
                value="<?php echo ($campain['template']) ?>"></textarea>
            </div>

            <div class="modal-footer">
                <button type="submit" value="add" name="action" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
</div>
<!-- End Breadcrumb Area -->

<!-- Start Footer End -->

<!-- End Footer End -->


<!-- End Main Content Wrapper Area -->

<!-- Modal Nueva Campaña -->

<!-- Vendors Min JS -->
<div>
    <script src="<?php echo base_url('assets\js\vendors.min.js') ?> "></script>

    <!-- ApexCharts JS -->
    <script src="<?php echo base_url('assets\js\apexcharts\apexcharts.min.js')?> "></script>
    <script src="<?php echo base_url('assets\js\apexcharts\apexcharts-stock-prices.js')?> "></script>
    <script src="<?php echo base_url('assets\js\apexcharts\apexcharts-irregular-data-series.js')?> "></script>
    <script src="<?php echo base_url('assets\js\apexcharts\apex-custom-line-chart.js')?> "></script>
    <script src="<?php echo base_url('assets\js\apexcharts\apex-custom-pie-donut-chart.js')?> "></script>
    <script src="<?php echo base_url('assets\js\apexcharts\apex-custom-area-charts.js')?> "></script>
    <script src="<?php echo base_url('assets\js\apexcharts\apex-custom-column-chart.js')?> "></script>
    <script src="<?php echo base_url('assets\js\apexcharts\apex-custom-bar-charts.js')?> "></script>
    <script src="<?php echo base_url('assets\js\apexcharts\apex-custom-mixed-charts.js')?> "></script>
    <script src="<?php echo base_url('assets\js\apexcharts\apex-custom-radialbar-charts.js')?> "></script>
    <script src="<?php echo base_url('assets\js\apexcharts\apex-custom-radar-chart.js')?> "></script>

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
    <script src="<?php echo base_url('assets\js\jvectormap-1.2.2.min.js')?>"></script>
    <!-- jvectormap World Mil JS -->
    <script src="<?php echo base_url('assets\js\jvectormap-world-mill-en.js')?>"></script>
    <!-- Custom JS -->
    <script src="<?php echo base_url('assets\js\custom.js')?>"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">

    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js"></script>
</div>

<!-- <script src="https://cdn.tiny.cloud/1/opyybmfx93s0sfb5yg14kjzsn8uxpffqg1nf7j89etwznstq/tinymce/6/tinymce.min.js"
    referrerpolicy="origin"></script> -->

<script src="<?php echo base_url('assets\tinymce\tinymce.min.js') ?>""></script>

<script>
tinymce.init({
    selector: 'textarea#template',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [{
        value: '.template',
        title: 'template'
    }]
});
</script>

<script type='text/javascript'>
function init() {
    $('#campain_form').on("submit", function(cf) {
        guardar_campain(cf);
    });

    $('#campain2_form').on("submit", function(ec) {
        editar_campain(ec);
    });
}

function guardar_campain(cf) {
    cf.preventDefault();
    var formData = new FormData($("#campain_form")[0]);

    $.ajax({
        url: "<?php echo base_url('Campana/registrar') ?>",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(data) {
            // console.log(data);
            $('#lista_camp').DataTable().ajax.reload();
            $('#campain_new').modal('hide');

            Swal.fire({
                title: 'Correcto!',
                text: 'Se Registro Correctamente.',
                icon: 'success',
                confirmButtonText: 'Aceptar'
            });
        }
    });
}

// function editar_campain(ec) {
//     ec.preventDefault();
//     var formData = new FormData($("#campain2_form")[0]);

//     $.ajax({
//         url: "<?php echo base_url('Campana/editar') ?>",
//         type: "POST",
//         data: formData,
//         contentType: false,
//         processData: false,
//         success: function(data) {
//             // console.log(data);
//             $('#lista_camp').DataTable().ajax.reload();
//             $('#campain_edit').modal('hide');

//             Swal.fire({
//                 title: 'Correcto!',
//                 text: 'Se Registro Correctamente.',
//                 icon: 'success',
//                 confirmButtonText: 'Aceptar'
//             });
//         }
//     });
// }

$(document).ready(function() {
    $('#lista_camp').DataTable({
        ajax: {
            url: '<?php echo base_url('Campana/listar') ?>',
            type: 'POST'
        }
    });

});

function nuevo() {
    $('#lbltitulo').html("Nueva Campaña");
    $('#id_campain').val('');
    $('#campain_form')[0].reset();
    $('#campain_new').modal('show');
}
init();
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
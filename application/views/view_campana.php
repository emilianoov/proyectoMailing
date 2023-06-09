<!-- Start Sidemenu Area -->

<!-- End Sidemenu Area -->

<!-- Start Main Content Wrapper Area -->
<!-- Top Navbar Area -->

<!-- End Top Navbar Area -->

<!-- Breadcrumb Area -->
<div class="breadcrumb-area">
    <h1>Mnt Campañas</h1>

    <ol class="breadcrumb">
        <li class="item"><a href="<?php echo base_url('Welcome')?>"><i class='bx bx-home-alt'></i></a></li>

        <li class="item">Campañas</li>
    </ol>
</div>

<div class="card mb-30">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3>Mantenimiento de campañas</h3><br>
        <button onclick="nuevo()" class="btn btn-outline-primary" id="btn_nuevo">Nueva Campaña</button>
    </div>
    <div class="card-body">
        <table id="lista_camp" class="table display responsive nowrap">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>
                        <center>Editar</center>
                    </th>
                    <th>
                        <center>Eliminar</center>
                    </th>
                    <th>
                        <center>Enviar</center>
                    </th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
<!-- End Breadcrumb Area -->

<!-- Start Footer End -->

<!-- End Footer End -->


<!-- End Main Content Wrapper Area -->

<!-- Modal Nueva Campaña -->
<div id="campain_new" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form method="post" id="campain_form">
            <div class="modal-header">
                <h5  id="lbltitulo" class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id_campain" id="id_campain">

                <div class="form-group">
                    <label>Nombre de la campaña</label>
                    <input type="text" id="name_campain" name="name_campain" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Descripción</label>
                    <textarea id="descripcion" name="descripcion" class="form-control" rows="2" required></textarea>
                </div>

                <div class="form-group">
                    <label>Titutlo</label>
                    <input type="text" id="title" name="title" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Asunto</label>
                    <input type="text" id="subject" name="subject" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Template HTML</label>
                    <textarea id="template" name="template" class="form-control" rows="4" required></textarea>
                </div>

            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" value="add" name="action" class="btn btn-primary">Guardar</button>
            </div>
      </form>
    </div>
  </div>
</div>

<!-- Editar Campaña
<div id="campain_edit" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form action="" method="post" id="campain2_form">
            <div class="modal-header">
                <h5  id="lbltitulo2" class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id_campain2" id="id_campain2">
                <input type="hidden" name="name_campain2" id="name_campain2">
                <input type="hidden" name="descripcion2" id="descripcion2">
                <input type="hidden" name="title2" id="title2">

                <div class="form-group">
                    <label>Asunto</label>
                    <input type="text" id="subject2" name="subject2" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Template HTML</label>
                    <textarea id="template2" name="template2" class="form-control" rows="10"></textarea>
                </div>

            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" value="add" name="action" class="btn btn-primary">Guardar</button>
            </div>
      </form>
    </div>
  </div>
</div> -->

<!-- Modal Enviar -->
<div class="modal fade" id="enviarC" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="lbltitulo3" class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <input type="hidden" name="id_campain2" id="id_campain2">
                <table id="lista_data" class="table display responsive nowrap">
                    <thead>
                        <tr>
                            <th>Lista</th>
                            <th>
                                <center>Enviar</center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL CARGA -->
<div class="modal fade" id="carga" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="lbltitulo4" class="modal-title"></h5>
            </div>
            <div class="modal-body">
                <p>El envio de correos puede tardar un poco.</p>
                <div class="text-center">
                    <div class="spinner-border text-primary" style="width: 5rem; height: 5rem;" role="status">
                        <span class="sr-only">Enviando......</span>
                    </div>
                </div>
                <p>Enviando Campaña....</p>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

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

<script type='text/javascript'>
function init(){
    $('#campain_form').on("submit", function(cf){
        guardar_campain(cf);
    });

    $('#campain2_form').on("submit", function(ec){
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

    $('#lista_data').DataTable({
        "aProcessing": true,
        "aServerSide": true,
        dom: 'Bfrtip',
        ajax: {
            url: '<?php echo base_url('Campana/listar_lista') ?>',
            type: 'POST'
        },
        "bDestroy": true,
        "responsive": true,
        "bInfo":true,
        "iDisplayLength": 4,
    });

    $(document).on('click', '.editar', function() {
        
        var page = $(this).attr('id');
        window.location.href = page;
    
    });

    $(document).on('click', '.eliminar', function() {
        var idfront = $(this).attr("id")
        Swal.fire({
            title: 'Deseas eliminar el registro?',
            text: "Estas seguro de eliminar el registro?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancelar',
            confirmButtonText: 'Si, eliminar!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?php echo base_url('Campana/delete') ?>",
                    method: 'POST',
                    data: {
                        idback: idfront
                    },
                    cache: false,
                    //contentType: false,
                    //processData: false,
                    dataType: 'json',
                    success: function(result) {
                        alert(result)
                        window.location.reload()
                    }
                })
            }
        })
    });

    $(document).on('click', '.enviarCorreo', function() {
        var idlist = $(this).attr("id");
        var idcamp = $('#id_campain2').attr("value");

        $('#lbltitulo4').html("Enviando Correos"),
        $('#carga').modal('show'),

        $('#enviarC').modal('hide');

        $.ajax({
            url: "<?php echo base_url('Campana/sendEmail') ?>",
            type: 'POST',
            data: {
                idback: idlist,
                idback2: idcamp
            },
            
            success: function(respuesta){
                
                // alert(respuesta);
                $('#carga').modal('hide');

                Swal.fire({
                title: 'Correcto!',
                text: 'Se ha enviado la campañana correctamente.',
                icon: 'success',
                confirmButtonText: 'Aceptar'
                });
                
            }
        })
        // console.log("hola!!");
        
    });
});

function nuevo() {
    $('#lbltitulo').html("Nueva Campaña");
    $('#id_campain').val('');
    $('#campain_form')[0].reset();
    $('#campain_new').modal('show');
}
function enviar(id_campain){
    $('#lbltitulo3').html("Enviar Campaña");
    $('#enviarC').modal('show');
    $('#id_campain2').val(id_campain);
}
init();
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- Start Sidemenu Area -->
   
    <!-- End Sidemenu Area -->

    <!-- Start Main Content Wrapper Area -->
    

        <!-- Top Navbar Area -->

        <!-- End Top Navbar Area -->

        <!-- Breadcrumb Area -->
        <div class="breadcrumb-area">
            <h1>Mnt Contactos</h1>

            <ol class="breadcrumb">
                <li class="item"><a href="<?php echo base_url('Welcome') ?>"><i class='bx bx-home-alt'></i></a></li>

                <li class="item">Contactos</li>
            </ol>
        </div>

        <div class="card mb-30">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3>Mantenimiento de contactos</h3><br>

            </div>
            <div class="card-body">
                <table id="lista_data" class="table display responsive nowrap">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Correo</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>

        <!-- Modal Contacto -->
        <div class="modal fade" id="myModal2" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form method="post" action="" id="contacto_form">
                        <div class="modal-header">
                            <h5 id="lbltitulo2" class="modal-title"></h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" class="form-control" id="id_person" name="id_person">
                            <input type="hidden" class="form-control" id="list_id" name="list_id">
                            <div class="form-group">
                                <label for="lista">Nombre:</label>
                                <input type="text" id="nombre_person" name="nombre_person" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="lista">Apellidos:</label>
                                <input type="text" id="apaterno" name="apaterno" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="lista">Correo:</label>
                                <input type="email" id="person_correo" name="person_correo" class="form-control"
                                    required>
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
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </div>

    <script type='text/javascript'>
    function init() {
        $('#contacto_form').on("submit", function(c){
            guardarContacto(c);
        });
    }
    function guardarContacto(c){
        c.preventDefault();
        var formData = new FormData($("#contacto_form")[0]);

        $.ajax({
            url: "<?php echo base_url('Usuario/registrarContacto') ?>",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                // console.log(data);
                $('#lista_data').DataTable().ajax.reload();
                $('#myModal2').modal('hide');

                Swal.fire({
                    title: 'Correcto!',
                    text: 'Se Registro Correctamente.',
                    icon: 'success',
                    confirmButtonText: 'Aceptar'
                });
            }
        });
    }
    $(document).ready(function() {

        $('#lista_data').DataTable({
            "aProcessing": true,
            "aServerSide": true,
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
            ],
            ajax: {
                url: '<?php echo base_url('Usuario/contactos') ?>',
                type: 'POST'
            }
        });

        $(document).on('click', '.eliminar', function() {
            var idfront = $(this).attr("id")
            Swal.fire({
                title: 'Deseas eliminar el Contacto?',
                text: "Estas seguro de eliminar el contacto?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Cancelar',
                confirmButtonText: 'Si, eliminar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "<?php echo base_url('Usuario/delete') ?>",
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

        $(document).on('click', '.editar', function() {
            var idfront = $(this).attr("id")
            $.ajax({
                url: "<?php echo base_url('Usuario/actualizar') ?>",
                method: 'POST',
                data: {
                    idback: idfront
                },
                cache: false,
                //contentType: false,
                //processData: false,
                dataType: 'json',
                success: function(respuesta) {
                    $('#lbltitulo2').html("Editar Registro");
                    $('#myModal2').modal('show');
                    //comporbacion de la respueta del back
                    $('#nombre_person').val(respuesta.nombre_person);
                    $('#apaterno').val(respuesta.apaterno);
                    $('#person_correo').val(respuesta.person_correo);
                    $('#id_person').val(respuesta.id_person);
                    $('#list_id').val(respuesta.list_id);
                }
            });
        });

    });
    init();
    </script>

<!-- Start Sidemenu Area -->

<!-- End Sidemenu Area -->

<!-- Start Main Content Wrapper Area -->

<!-- End Top Navbar Area -->

<!-- Breadcrumb Area -->
<div class="breadcrumb-area">
    <h1>Mnt Listas</h1>

    <ol class="breadcrumb">
        <li class="item"><a href="dashboard-analytics.html"><i class='bx bx-home-alt'></i></a></li>

        <li class="item">Listas</li>
    </ol>
</div>

<div class="card mb-30">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3>Mantenimiento de Listas</h3><br>
        <button onclick="nuevo()" class="btn btn-outline-primary" id="btn_nuevo">Nueva Lista</button>
    </div>
    <div class="card-body">
        <table id="lista_data" class="table display responsive nowrap">
            <thead>
                <tr>
                    <th></th>
                    <th>
                        <center>Nombre</center>
                    </th>
                    <th>
                        <center>Nuevo Contacto</center>
                    </th>
                    <th>
                        <center>Excel Contactos</center>
                    </th>
                    <th>
                        <center>Editar</center>
                    </th>
                    <th>
                        <center>Eliminar</center>
                    </th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>
<!-- End Breadcrumb Area -->


<!-- End Main Content Wrapper Area -->

<!-- Modal Lista-->
<div class="modal fade" id="myModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form method="post" id="lista_form">
                <div class="modal-header">
                    <h5 id="lbltitulo" class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" class="form-control" id="id_list" name="id_list">
                    <div class="form-group">
                        <label for="lista">Nombre de la lista:</label>
                        <input type="text" id="nombre_list" name="nombre_list" class="form-control" required>
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
                        <input type="email" id="person_correo" name="person_correo" class="form-control" required>
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
<!-- Modal Contacto x Excel -->
<div class="modal fade" id="myModal3" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form method="post" action="" id="contac_form" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 id="lbltitulo3" class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" class="form-control" id="id_person" name="id_person">
                    <input type="hidden" class="form-control" id="list_ide" name="list_ide">
                    <div class="form-group">
                        <p>*Ejemplo de como debe estar el archivo*</p>
                        <img src="<?php echo base_url('assets\img\Excelcap.jpg') ?>" alt="image">
                        <p>*Recuerda que los archivos deben ser .CSV*</p>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="file" id="dataUsuario" name="dataUsuario" accept=".csv">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" value="add" name="action" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

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
        $('#lista_form').on("submit", function(e) {
            guardaryeditar(e);
        });
        $('#contacto_form').on("submit", function(c) {
            guardarContacto(c);
        });
        $('#contac_form').on("submit", function(ex) {
            guardarExcel(ex);
        })
    }

    function guardarContacto(c) {
        c.preventDefault();
        var formData = new FormData($("#contacto_form")[0]);

        $.ajax({
            url: "<?php echo base_url('Listas/registrarContacto') ?>",
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

    function guardaryeditar(e) {
        e.preventDefault();
        var formData = new FormData($("#lista_form")[0]);

        $.ajax({
            url: "<?php echo base_url('Listas/registrar') ?>",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                // console.log(data);
                $('#lista_data').DataTable().ajax.reload();
                $('#myModal').modal('hide');

                Swal.fire({
                    title: 'Correcto!',
                    text: 'Se Registro Correctamente.',
                    icon: 'success',
                    confirmButtonText: 'Aceptar'
                });
            }
        });
    }

    function guardarExcel(ex) {
        ex.preventDefault();
        var formData = new FormData($("#contac_form")[0]);

        $.ajax({
            url: "<?php echo base_url('Listas/registrarExcel') ?>",
            type: "POST",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                // console.log(data);
                $('#lista_data').DataTable().ajax.reload();
                $('#myModal3').modal('hide');
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
        var table = $('#lista_data').DataTable({
            "aProcessing": true,
            "aServerSide": true,
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
            ],
            ajax: {
                url: '<?php echo base_url('Listas/listar') ?>',
                type: 'POST'
            },
            order: [
                [1, 'asc']
            ],
            "bDestroy": true,
            "responsive": true,
            "bInfo": true,
        });

        $('#lista_data tbody').on('click', '.abrir', function() {

            var tr = $(this).closest('tr');
            var row = table.row(tr);
            if (row.child.isShown()) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            } else {
                // Open this row 
                // row.child($('#lista_hija').html()).show();
                row.child('<div class="child-table"></div>').show();
                tr.addClass('shown');

                var childTableContainer = $(tr).next().find('.child-table');

                var rowData = row.data();
                var idlist = $(this).attr("id");
                $.ajax({
                    url: '<?php echo base_url('Listas/contactos') ?>',
                    method: 'GET',
                    dataType: 'json',
                    data: {
                        idback: idlist,
                    },
                    success: function(respuesta) {
                        if (respuesta.length > 0) {
                            var childTableHtml = '<table class="display">';
                            childTableHtml += '<thead>';
                            childTableHtml += '<tr>';
                            childTableHtml += '<th>Nombre</th>';
                            childTableHtml += '<th>Apellidos</th>';
                            childTableHtml += '<th>Correo</th>';
                            childTableHtml += '<th>Editar</th>';
                            childTableHtml += '<th>Eliminar</th>';
                            // Agrega las columnas adicionales según tus necesidades
                            childTableHtml += '</tr>';
                            childTableHtml += '</thead>';
                            childTableHtml += '<tbody>';

                            for (var i = 0; i < respuesta.length; i++) {
                                childTableHtml += '<tr>';
                                childTableHtml += '<td>' + respuesta[i].nombre_person + '</td>';
                                childTableHtml += '<td>' + respuesta[i].apaterno + '</td>';
                                childTableHtml += '<td>' + respuesta[i].person_correo + '</td>';
                                childTableHtml += '<td>' + '<button type="button" class="btn btn-outline-success editar2" id="' + respuesta[i].id_person + '"><i class="bx bx-edit"></i></button>' + '</td>';
                                childTableHtml += '<td><button type="button" class="btn btn-outline-danger eliminar2" id="' + respuesta[i].id_person + '" ><i class="bx bx-trash"></i></button></td>';
                                // Agrega las celdas adicionales según tus necesidades
                                childTableHtml += '</tr>';
                            }

                            childTableHtml += '</tbody>';
                            childTableHtml += '</table>';

                            childTableContainer.html(childTableHtml);

                            // Inicializar el DataTable interno
                            childTableContainer.find('table').DataTable({
                                "aProcessing": true,
                                "aServerSide": true,
                                dom: 'Bfrtip',
                                "bDestroy": true,
                                "responsive": true,
                                "bInfo": true,
                                "iDisplayLength": 5,
                            });
                        } else {
                            childTableContainer.html('Esta Lista no contiene Contactos.');
                        }
                        // alert(respuesta);
                    },
                    error: function() {
                        childTableContainer.html('Error al cargar los datos específicos.');
                    } 
                });
            }

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
                        url: "<?php echo base_url('Listas/delete') ?>",
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
                url: "<?php echo base_url('Listas/actualizar') ?>",
                method: 'POST',
                data: {
                    idback: idfront
                },
                cache: false,
                //contentType: false,
                //processData: false,
                dataType: 'json',
                success: function(respuesta) {
                    $('#lbltitulo').html("Editar Registro");
                    $('#myModal').modal('show');
                    //comporbacion de la respueta del back
                    $('#nombre_list').val(respuesta.nombre_list);
                    $('#id_list').val(respuesta.id_list);
                }
            });
        });
        ////////MODAL DE CONTACTO///////////////////////////////////
        $(document).on('click', '.eliminar2', function() {
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
                            // alert(result)
                            window.location.reload()
                        }
                    })
                }
            })
        });

        $(document).on('click', '.editar2', function() {
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
                    $('#lbltitulo2').html("Editar Contacto");
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

    function nuevo() {
        $('#lbltitulo').html("Nuevo Registro");
        $('#id_list').val('');
        $('#lista_form')[0].reset();
        $('#myModal').modal('show');
    }

    function nContacto(id_list) {
        $('#lbltitulo2').html("Nuevo Contacto");
        $('#id_person').val('');
        $('#list_id').val(id_list);
        $('#contacto_form')[0].reset();
        $('#myModal2').modal('show');
    }

    function nExcel(id_list) {
        $('#lbltitulo3').html("Subir Archivos Excel");
        $('#id_person').val('');
        $('#list_ide').val(id_list);
        $('#contac_form')[0].reset();
        $('#myModal3').modal('show');
    }
    init();
</script>
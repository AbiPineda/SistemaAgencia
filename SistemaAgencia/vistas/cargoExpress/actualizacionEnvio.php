<!--para las tablas que cargan en este archivo-->
<?php
include_once '../../config/parametros.php';
?>
<link rel="stylesheet" href="<?= $base_url ?>plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="<?= $base_url ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?= $base_url ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

<!--****************fin****************-->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Registro de Actualización de Envió</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Actualización de Envió</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" style="margin-top: 7px;">
        <div class="container-fluid">

            <!-- Timelime example  -->
            <div class="row">
                <div class="col-md-12">
                    <!-- The time line -->
                    <div class="timeline">


                        <!-- timeline item -->
                        <div>
                            <i class="fas fa-comments bg-gradient-blue"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fas fa-address-book"></i>Encomiemda a Buscar</span>
                                <h3 class="timeline-header"><a href="#">Encomienda a Buscar</a></h3>
                                <div class="timeline-body" style="margin-top: 15px;">
                                     <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                     <div class="form-group">
                                      <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Encomienda</th>
                                                <td>Cliente</td>
                                                <th>Fecha</th>
                                                <th>Hora</th>
                                                <th>Lugar</th>
                                                <th>Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Pastillas</td>
                                                <td>Juan Alfaro</td>
                                                <td>24/03/2020</td>
                                                <td>8:00pm</td>
                                                <td>San Vicente</td>
                                                <td><div class="btn-group">
                                                                
                                                        <a type="button" class="btn btn-success" 
                                                           onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/cargoExpress/actualizacionRegistro.php')"   >
                                                            <i class="fas fa-car" style="color: white"></i>
                                                        </a>
                                                       
                                                    </div></td>

                                            </tr>
                                        </tbody>

                                    </table>    
                                     </div>
                                    </div>
                                        <div class="col-lg-2"></div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <!-- END timeline item -->
                        
                        
                        <!-- timeline time label -->
                        <div class="time-label">
                            <span class="bg-green">Actualización de Envió</span>
                        </div>
                        <!-- /.timeline-label -->
                    </div>
                </div>
                <!-- /.col -->
            </div>
        </div>
        <!-- /.timeline -->

    </section>
    <!-- /.content -->
</div>
<script src="<?= $base_url ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= $base_url ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?= $base_url ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= $base_url ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= $base_url ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= $base_url ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= $base_url ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script>
    $(function () {
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "pageLength": 5,
            "responsive": true,
            "oLanguage": {
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfo": "Mostrando del (_START_ al _END_) de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando del 0 al 0  de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Por favor espere - cargando...",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
        });
    });
</script>

<!-- /.content-wrapper -->
<!--para la paginacion de las tablas-->


<!--fin de la paginacion de las tablas-->

<?php
include_once '../../config/parametros.php';
?>
<link rel="stylesheet" href="<?= $base_url ?>plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="<?= $base_url ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?= $base_url ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

<div class="content-wrapper" style="min-height: 1185.73px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Calculo de Encomienda</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Calculo Encomienda</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="timeline">
                    <!-- timeline time label -->
                    <div class="time-label">
                        <span class="bg-red">Información</span>
                    </div>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <div>
                        <i class="fas fa-users bg-blue"></i>
                        <div class="timeline-item">

                            <h3 class="timeline-header"><a href="#">Datos de la Encomienda</a></h3>

                            <div class="timeline-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="cars">Seleccione el Cliente:</label>

                                            <select id="categoria" class="form-control">
                                                <option value="permitido">Jessenia Corinca</option>
                                                <option value="no">Jenny Orellana</option>
                                                <option value="no">Judith Hernández</option>
                                            </select> 
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="cars">Seleccione el Producto:</label>

                                            <select id="categoria" class="form-control">
                                                <option value="permitido">Acetaminofén</option>
                                                <option value="no">Jeringas</option>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Dirección</label>
                                            <input type="text" class="form-control"
                                                   placeholder="Introduzca la dirección">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Destino Final</label>
                                            <input type="text" class="form-control"
                                                   placeholder="Introduzca el destino final">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Costo</label>
                                            <input type="number" class="form-control" placeholder="Calculado...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Cantidad</label>
                                            <input type="number" class="form-control" placeholder="Depende el producto">
                                        </div>
                                    </div>
                                  
                                </div>
                                <div class="timeline-footer" style="text-align: right;">
                                    <a class="btn btn-info btn-sm" style="color: white">Agregar</a>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <div>
                        <i class="fas fa-user bg-green"></i>
                        <div class="timeline-item">

                            <h3 class="timeline-header no-border"><a href="#">Producto Seleccionado</a></h3>
                            <div class="timeline-body">
                                <div class="row">
                                    <div class="col-sm-12">

                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                                <tr style="text-align: center;">
                                                    <th>Producto</th>
                                                    <th>Costo</th>
                                                    <th>Cantidad</th>
                                                    <th>Sub Total</th>
                                                    <th>Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr style="text-align: center;">
                                                    <td>Acetaminofén</td>
                                                    <td>$48.20</td>
                                                    <td>2 Lbs</td>
                                                    <td>$96</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-danger"><i
                                                                    class="fas fa-trash-alt"></i></button>

                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr style="text-align: center;">
                                                    <td>Jeringas</td>
                                                    <td>$35.89</td>                                                    
                                                    <td>15 Jerigas</td>
                                                    <td>$527.12</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-danger"><i
                                                                    class="fas fa-trash-alt"></i></button>

                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>

                                    <div class="col-sm-12">
                                        <div style="text-align: right;width:475px;margin-top: 27px;">
                                            <label> Total de Encomienda: </label> <label> $84.09</label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="timeline-footer" style="text-align: right;">
                                <a class="btn btn-secondary btn-sm" style="color: white">Imprimir</a>
                                <a class="btn btn-danger btn-sm" style="color: white">Cancelar</a>
                            </div>
                        </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline item -->

                </div>
                <!-- END timeline item -->
            </div>
        </div>
    </section>
</div>

<!-- /.content-wrapper -->
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
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "pageLength": 3,
            "responsive": true,
            "oLanguage": {
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfo": "Selección (_START_ al _END_) de _TOTAL_ ",
                "sInfoEmpty": "Selección  0 al 0  de 0",
                "sInfoFiltered": "(filtrado de un total de _MAX_ )",
                "sInfoPostFix": "",
                "sSearch": "Filtrar:",
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

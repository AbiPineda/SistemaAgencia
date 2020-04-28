<?php
include_once '../../config/parametros.php';
?>
<!-- DataTables -->
<link rel="stylesheet"
    href="http://localhost/Plantillas/SistemaAgencia/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet"
    href="http://localhost/Plantillas/SistemaAgencia/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="<?=$base_url?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">

<div class="content-wrapper" style="min-height: 1185.73px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Alquiler de Vehículos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Alquiler</li>
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
                        <i class="fas fa-car bg-blue"></i>
                        <div class="timeline-item">
                            <span class="time"><i class="fas fa-clock"></i> 12:05</span>
                            <h3 class="timeline-header"><a href="#">Datos Generales:</a></h3>

                            <div class="timeline-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Vehículo</label>
                                            <input type="text" class="form-control"
                                                placeholder="Se mostrará el vehiculo seleccionado">
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Cliente</label>
                                            <select class="form-control">
                                                <option>Abigail Pineda Henríquez</option>
                                                <option>Kenia de Orellana</option>
                                                <option>Elías Herrera Amaya</option>
                                                <option>Lucia Elida Fernández</option>
                                                <option>José Teodoro Alemán</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Telefono</label>
                                            <input type="text" class="form-control"
                                                placeholder="Digite su numero de telefono">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Lugar de Recogida</label>
                                            <select class="form-control">
                                                <option>Servicio Adomicilio</option>
                                                <option>Aeropuerto</option>
                                                <option>Ciudad</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Dirección del Lugar</label>
                                            <input type="text" class="form-control"
                                                placeholder="Digite dirección">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Fecha</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>Hora</label>
                                            <select class="form-control">
                                                <option>00:00</option>
                                                <option>01:00</option>
                                                <option>02:00</option>
                                                <option>03:00</option>
                                                <option>04:00</option>
                                                <option>05:00</option>
                                                <option>06:00</option>
                                                <option>07:00</option>
                                                <option>08:00</option>
                                                <option>08:00</option>
                                                <option>10:00</option>
                                                <option>11:00</option>
                                                <option>12:00</option>
                                                <option>13:00</option>
                                                <option>14:00</option>
                                                <option>15:00</option>
                                                <option>16:00</option>
                                                <option>17:00</option>
                                                <option>18:00</option>
                                                <option>19:00</option>
                                                <option>20:00</option>
                                                <option>21:00</option>
                                                <option>22:00</option>
                                                <option>23:00</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Lugar de Devolución</label>
                                            <select class="form-control">
                                                <option>Servicio Adomicilio</option>
                                                <option>Aeropuerto</option>
                                                <option>Ciudad</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Dirección del Lugar</label>
                                            <input type="text" class="form-control"
                                                placeholder="Digite dirección">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Fecha</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>Hora</label>
                                            <select class="form-control">
                                                <option>00:00</option>
                                                <option>01:00</option>
                                                <option>02:00</option>
                                                <option>03:00</option>
                                                <option>04:00</option>
                                                <option>05:00</option>
                                                <option>06:00</option>
                                                <option>07:00</option>
                                                <option>08:00</option>
                                                <option>08:00</option>
                                                <option>10:00</option>
                                                <option>11:00</option>
                                                <option>12:00</option>
                                                <option>13:00</option>
                                                <option>14:00</option>
                                                <option>15:00</option>
                                                <option>16:00</option>
                                                <option>17:00</option>
                                                <option>18:00</option>
                                                <option>19:00</option>
                                                <option>20:00</option>
                                                <option>21:00</option>
                                                <option>22:00</option>
                                                <option>23:00</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <div>
                        <i class="fas fa-user bg-green"></i>
                        <div class="timeline-item">
                            <span class="time"><i class="fas fa-clock"></i> 5 mins ago</span>
                            <h3 class="timeline-header no-border"><a href="#">Servicios Realizados</a></h3>
                            <div class="timeline-body">
                                <div class="row">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <div>
                        <i class="fas fa-comments bg-yellow"></i>
                        <div class="timeline-item">
                            <span class="time"><i class="fas fa-clock"></i> 27 mins ago</span>
                            <h3 class="timeline-header"><a href="#">Comentarios</a></h3>
                            <div class="timeline-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3"
                                                placeholder="Describir insidentes"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-footer" style="text-align: right;">
                                    <a class="btn btn-primary btn-sm" style="color: white" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/vehiculos/alquilerReporte.php')">Guardar</a>
                                    <a class="btn btn-danger btn-sm" style="color: white">Cancelar</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- END timeline item -->


                <!-- formulario mantenimiento -->
                <!-- /.card-header -->

                <!-- DataTables -->
                <script src="http://localhost/Plantillas/SistemaAgencia/plugins/datatables/jquery.dataTables.min.js">
                </script>
                <script
                    src="http://localhost/Plantillas/SistemaAgencia/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js">
                </script>
                <script
                    src="http://localhost/Plantillas/SistemaAgencia/plugins/datatables-responsive/js/dataTables.responsive.min.js">
                </script>
                <script
                    src="http://localhost/Plantillas/SistemaAgencia/plugins/datatables-responsive/js/responsive.bootstrap4.min.js">
                </script>
                

                <script>
                $(function() {
                    $("#example1").DataTable({
                        "responsive": true,
                        "autoWidth": false,
                    });
                    $('#example2').DataTable({
                        "paging": true,
                        "lengthChange": false,
                        "searching": false,
                        "ordering": true,
                        "info": true,
                        "autoWidth": false,
                        "responsive": true,
                    });
                });
                </script>
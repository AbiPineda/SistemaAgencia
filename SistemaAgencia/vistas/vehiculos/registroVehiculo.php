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
                    <h1>Mantenimiento de Vehiculos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Mantenimiento</li>
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

                                    <div class="col-sm-3">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Marca</label>
                                            <select class="form-control">
                                                <option>Toyota</option>
                                                <option>Nissan</option>
                                                <option>Kia</option>
                                                <option>Hyundai</option>
                                                <option>Honda</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Modelo</label>
                                            <input type="text" class="form-control" placeholder="Introduzca modelo">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>Año</label>
                                            <input type="number" class="form-control" min=2010>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Placa</label>
                                            <input type="text" class="form-control" placeholder="Introduzca placa">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Combustible:</label>
                                            <select class="form-control">
                                                <option>Gasolina</option>
                                                <option>Diesel</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Color</label>
                                            <input type="text" class="form-control" placeholder="Introduzca color">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Kilometraje</label>
                                            <input type="number" class="form-control" min=1>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Transmición</label>
                                            <select class="form-control">
                                                <option>Manual</option>
                                                <option>Automatico</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Precio</label>
                                            <input type="number" class="form-control" min=1>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <label>Pasajeros</label>
                                            <input type="number" class="form-control" min=1>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <label>Puertas</label>
                                            <input type="number" class="form-control" min=1 max=5>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-4">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Categoría</label>
                                            <select class="form-control">
                                                <option>Económicos</option>
                                                <option>Sedan</option>
                                                <option>Compactos</option>
                                                <option>Microbuses</option>
                                                <option>Pickup</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Seleccione foto</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="files" name="foto">
                                            <label class="custom-file-label" for="files"></label>
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
                                    <div class="col-sm-4">
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="checkboxPrimary1" checked>
                                                <label for="checkboxPrimary1"> Aire Acondicionado
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group clearfix">
                                            <div class="icheck-success d-inline">
                                                <input type="checkbox" checked id="checkboxSuccess1">
                                                <label for="checkboxSuccess1">Silla para Bebé
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group clearfix">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" checked id="checkboxDanger1">
                                                <label for="checkboxDanger1">Equipo de Sonido
                                                </label>
                                            </div>
                                        </div>
                                    </div>
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
                            <h3 class="timeline-header"><a href="#"> Requisitos para rentar su vehículo</a>
                                </h3>
                            <div class="timeline-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>
                                                Licencia de conducir vigente<br>
                                                DUI o Pasaporte vigente<br>
                                                Tarjeta de crédito y fecha de vencimiento.<br>
                                                Números telefónicos,(extranjero/local).<br>
                                                Dirección de casa o trabajo, hotel.<br>
                                                Ser mayor de edad (21 años).<br>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-footer" style="text-align: right;">
                                    <a class="btn btn-primary btn-sm" style="color: white">Guardar</a>
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
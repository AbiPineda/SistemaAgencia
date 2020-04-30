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
                    <h1>Registrar Cliente</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Registrar Cliente</li>
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
                            <span class="time"><i class="fas fa-clock"></i> 12:05</span>
                            <h3 class="timeline-header"><a href="#">Datos Personales</a></h3>

                            <div class="timeline-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input type="text" class="form-control" placeholder="Introduzca su nombre">
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Apellidos</label>
                                            <input type="text" class="form-control"
                                                placeholder="Introduzca sus apellidos">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Documento Unico de Identidad</label>
                                            <input type="text" class="form-control" data-mask='00000000-0'
                                                placeholder="Introduzca su numero de DUI">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Telefono</label>
                                            <input type="text" class="form-control " name="tel" data-mask='0000-0000'
                                                placeholder="Introduzca numero de telefono">
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
                            <h3 class="timeline-header no-border"><a href="#">Información para Inicio de Sesión</a></h3>
                            <div class="timeline-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Correo Electronico</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                placeholder="Introduzca su Correo Electronico">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Contraseña</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1"
                                                placeholder="Introduzca su Contraseña">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="timeline-footer" style="text-align: right;">
                                <a class="btn btn-primary btn-sm" style="color: white">Guardar</a>
                                <a class="btn btn-danger btn-sm" style="color: white">Cancelar</a>
                            </div>
                        </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline item -->

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

                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
                </script>
                
                <script type="text/javascript"
                    src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
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
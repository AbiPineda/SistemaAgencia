<?php
include_once '../../config/parametros.php';
include_once '../../plantillas/cabecera.php';
include_once  '../../plantillas/navbar.php'; ?>
<!--para el reloj-->
<link rel="stylesheet" type="text/css" href="<?= $base_url ?>css/bootstrap-clockpicker.css">
<link href="<?= $base_url ?>css/mdtimepicker.css" rel="stylesheet" type="text/css">
<!--para la subida de fotos al sistema-->
<link href="<?= $base_url ?>plugins/subir-foto/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<link href="<?= $base_url ?>plugins/subir-foto/css/avatar.css" media="all" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
<link href="<?= $base_url ?>plugins/subir-foto/themes/explorer-fas/theme.css" media="all" rel="stylesheet"
    type="text/css" />
<!--alerta del sistema-->
<link href="<?= $base_url ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" all rel="stylesheet"
    type="text/css" />
<?php
include_once '../../plantillas/barra_lateral.php';
?>
<div class="content-wrapper" style="min-height: 1185.73px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Servicios Adquiridos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Servicios</li>
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

                    <div id="formulario">
                        <i class="fas fa-users bg-primary"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header"><a href="#">Información General</a></h3>

                            <div class="timeline-body">
                                <form id="datosOrigen-form" name="register-form" onsubmit="return false">
                                    <div class="row">

                                        <div class="col-sm-6">

                                            <div class="form-group">
                                                <label class="text-primary">Cliente</label>
                                                <div class="input-group">
                                                    <label id="nombre_cliente"></label>
                                                </div>
                                                <div class="input-group">
                                                    <input type="hidden" class="form-control" name="cliente"
                                                        id="cliente" disabled="true">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="text-primary">Teléfono</label>
                                            <div class="input-group">
                                                <label id="telefono"></label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                    <div id="tabla">
                        <i class="fas fa-user bg-green"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header no-border"><a href="#">Cotizaciones Realizadas</a>
                            </h3>
                            <div class="timeline-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="add-tabla" class="table table-bordered table-hover">
                                            <thead>
                                                <tr style="text-align: center;">
                                                    <th>Modelo de Vehiculo</th>
                                                    <th>Fecha</th>
                                                    <th>Descuentos (%)</th>
                                                    <th>Sub Total($)</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>

                    </div>

                    <div id="tabla">
                        <i class="fas fa-user bg-red"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header no-border"><a href="#">Encomiendas Realizadas</a>
                            </h3>
                            <div class="timeline-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="add-encomiendas" class="table table-bordered table-hover">
                                            <thead>
                                                <tr style="text-align: center;">
                                                    <th>Producto</th>
                                                    <th>Dirección Origen</th>
                                                    <th>Dirección Destino</th>
                                                    <th>Fecha</th>
                                                    <th>Cantidad</th>
                                                    <th>Sub Total($)</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>

                    </div>
                    <!-- END timeline item -->
                    <!-- /.timeline-label -->
                </div>
                <!-- END timeline item -->
            </div>
        </div>
    </section>
</div>

<?php
include_once '../../plantillas/footer.php';
?>


<script src="<?= $base_url ?>js/controladores/conf.js"></script>
<!--alerta del sistema-->
<script src="<?= $base_url ?>plugins/sweetalert2/sweetalert2.min.js"></script>

<!--validaciones del sistema-->
<script src="<?= $base_url ?>plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= $base_url ?>plugins/jquery-validation/additional-methods.min.js"></script>
<!--para la mascara-->
<script src="<?= $base_url ?>plugins/inputmask/jquery.inputmask.min.js"></script>

<!--Script de los procedimientos del sistema-->
<script src="<?= $base_url ?>js/controladores/client/mostrarServiciosAdquiridos.js"></script>

<?php include_once '../../plantillas/cierre.php'; ?>
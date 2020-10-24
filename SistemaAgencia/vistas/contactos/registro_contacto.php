<!-- INICIALIZACION -->
<?php include_once '../../config/parametros.php'; ?>
<?php include_once '../../plantillas/cabecera.php'; ?>
<!-- COLOCAR ESTILOS ADICIONALES AQUI -->
<link href="<?= $base_url ?>plugins/subir-foto/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<link href="<?= $base_url ?>plugins/subir-foto/css/avatar.css" media="all" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
<link href="<?= $base_url ?>plugins/subir-foto/themes/explorer-fas/theme.css" media="all" rel="stylesheet"
    type="text/css" />
<link href="<?= $base_url ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" all" rel="stylesheet"
    type="text/css" />
<!--COTINUANDO CON LA INICIALIZACION -->
<?php include_once '../../plantillas/navbar.php'; ?>
<?php include_once '../../plantillas/barra_lateral.php'; ?>

<div class="content-wrapper" style="min-height: 1185.73px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Registrar Servicios Adicionales</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Registrar Servicios Adicionales</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <form id="miFormulario" enctype="multipart/form-data" name="miFormulario" role="form">
            <div class="row">
                <div class="col-md-12">
                    <!-- overlay-wrapper start -->
                    <div class="overlay-wrapper">
                        <div id="loading" class="overlay"><i class="fas fa-3x fa-sync-alt fa-spin"></i>

                            <div class="text-bold pt-2">Cargando...
                            </div>
                        </div>

                        <!-- overlay-wrapper endd -->
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

                                    <h3 class="timeline-header"><a href="#">Datos Generales:</a></h3>

                                    <div class="timeline-body">
                                        <div class="row">

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Nombre de Servicio</label>
                                                    <div class="input-group">
                                                        <input id="nombre" name="nombre" type="text"
                                                            class="form-control">
                                                    </div>
                                                    <!-- /.input group -->
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Contacto</label>
                                                    <select name="tipo_servicio" id="tipo_servicio"
                                                        class="select2 select2-hidden-accessible form-control float-righ"
                                                        data-placeholder="Seleccione el tipo" style="width: 100%;"
                                                        data-select2-id="7" tabindex="-1" aria-hidden="true">
                                                        <option data-select2-id="47">Vehiculo</option>
                                                        <option data-select2-id="46">Guia Turistico</option>
                                                        <option data-select2-id="47">Busero</option>
                                                        <option data-select2-id="48">Taxista</option>
                                                        <option data-select2-id="428">Cocinero</option>
                                                        <option data-select2-id="418">Payaso</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Costo promedio</label>
                                                    <div class="input-group">
                                                        <input id="costos_defecto" name="costos_defecto" type="number"
                                                            class="form-control">
                                                    </div>
                                                    <!-- /.input group -->
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-group multiple-form-group input-group">
                                                    <label>Contacto</label>

                                                    <div class="input-group">
                                                        <select name="contacto_servicio" id="contacto_servicio"
                                                            class="select2 select2-hidden-accessible form-control"
                                                            data-placeholder="Seleccione el tipo" style="width: 100%;">
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                                <br>
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-success btn-add" id="btn-nuevo"
                                                        name="btn-nuevo" style="margin-top: 10px; width: 100%;"
                                                        id="btn-asistiran">+</button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Descripcion del Servicio</label>
                                                    <textarea name="descripcion_servicio" id="descripcion_servicio"
                                                        class="form-control" rows="3"
                                                        placeholder="Digitar aquí ..."></textarea>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!-- END timeline item -->
                            <!-- timeline item -->
                            <div>
                                <i class="fas fa-image bg-green"></i>
                                <div class="timeline-item">

                                    <h3 class="timeline-header no-border"><a href="#">Galería de Imagenes</a></h3>
                                    <div class="timeline-body">

                                        <div class="row">
                                            <div class="col-sm-12">

                                                <label>Seleccione Imagenes</label>
                                                <div class="file-loading">
                                                    <input type="file" multiple name="fotos[]" id="fotos">
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-footer" style="text-align: right;">
                        <button name="btnguardar" id="btnguardar" class="btn btn-info btn-sm"
                            style="color: white">Guardar</button>
                        <button class="btn btn-danger btn-sm" style="color: white">Cancelar</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <form id="formularioAgregar" name="formularioAgregar" enctype="multipart/form-data">
        <div class="modal fade" id="modal-agregar">
            <!-- Modal EDITAR-->
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Agregar Contacto</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Nombre de Contacto</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="nombreContacto"
                                                    id="nombreContacto">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Telefono de Contactos</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="telefonoContacto"
                                                    name="telefonoContacto">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Correo Electronico</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="correoContacto"
                                                    id="correoContacto">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <div class="kv-avatar">
                                        <label>Foto de Contacto</label>
                                        <div class="file-loading">
                                            <input id="foto" name="foto" type="file">
                                        </div>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button name="btnAgregar" id="btnAgregar" class="btn btn-info btn-sm"
                            style="color: white">Guardar</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- End Modal EDITAR-->
    </form>
</div>

<?php include_once '../../plantillas/footer.php'; ?>
<!-- PONER SCRIPT ADICIONALES ACA -->
<script src="<?= $base_url ?>plugins/subir-foto/js/plugins/piexif.js" type="text/javascript"></script>
<script src="<?= $base_url ?>plugins/subir-foto/js/plugins/sortable.js" type="text/javascript"></script>
<script src="<?= $base_url ?>plugins/subir-foto/js/fileinput.js" type="text/javascript"></script>
<script src="<?= $base_url ?>plugins/subir-foto/js/locales/es.js" type="text/javascript"></script>
<script src="<?= $base_url ?>plugins/subir-foto/themes/fas/theme.js" type="text/javascript"></script>
<script src="<?= $base_url ?>/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- jquery-validation -->
<script src="<?= $base_url ?>plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= $base_url ?>plugins/jquery-validation/additional-methods.min.js"></script>
<!-- EN EL CONTROLADOR ESTA LA LOGICA DE ESTA PANTALLA -->
<script src="<?= $base_url ?>js/controladores/conf.js"></script>
<script src="<?= $base_url ?>js/controladores/servicios-contacto/servicio-contacto.js"></script>
<!-- CIERRE DE ETIQUETAS -->
<?php include_once '../../plantillas/cierre.php'; ?>
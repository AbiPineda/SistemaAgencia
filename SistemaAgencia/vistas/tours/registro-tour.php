<!-- INICIALIZACION -->
<?php include_once '../../config/parametros.php'; ?>
<?php include_once '../../plantillas/cabecera.php'; ?>
<!-- COLOCAR ESTILOS ADICIONALES AQUI -->
<link href="<?= $base_url ?>plugins/subir-foto/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<link href="<?= $base_url ?>plugins/subir-foto/css/avatar.css" media="all" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
<link href="<?= $base_url ?>plugins/subir-foto/themes/explorer-fas/theme.css" media="all" rel="stylesheet"
    type="text/css" />
<link href="<?= $base_url ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" all rel="stylesheet"
    type="text/css" />
<link href="<?= $base_url ?>css/miniatura-tabla.css" media="all" rel="stylesheet" type="text/css" />
<!--COTINUANDO CON LA INICIALIZACION -->
<?php include_once '../../plantillas/navbar.php'; ?>
<?php include_once '../../plantillas/barra_lateral.php'; ?>
<div class="content-wrapper" style="min-height: 1185.73px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Registrar Tours</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Registrar</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form id="miFormulario" enctype="multipart/form-data" name="miFormulario" role="form">
            <div class="row">
                <!-- <div class="offset-md-1"></div> -->
                <div class="col-md-12">
                    <div class="overlay-wrapper">
                        <div id="loading" class="overlay"><i class="fas fa-3x fa-sync-alt fa-spin"></i>

                            <div class="text-bold pt-2">Cargando...
                            </div>
                        </div>
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
                                    <h3 class="timeline-header"><a href="#">Datos Generales</a></h3>
                                    <div class="timeline-body">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label>Titulo del viaje</label>

                                                    <div class="input-group">
                                                        <!-- <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa fa-bookmark"></i></span>
                                                </div>-->
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <!-- /.input group -->
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label>Fecha del viaje</label>

                                                    <div class="input-group">
                                                        <input type="text" class="form-control float-right"
                                                            id="reservation1">
                                                    </div>
                                                    <!-- /.input group -->
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label>Lugar de Salida</label>
                                                    <div class="input-group">
                                                        <!--<div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-paper-plane"></i></span>
                                                </div>-->
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <!-- /.input group -->
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label>Número de Pasajeros</label>
                                                    <div class="input-group">
                                                        <!--<div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-paper-plane"></i></span>
                                                </div>-->
                                                        <input id="cantidad" type="number" min="1" value="1"
                                                            class="form-control">
                                                    </div>
                                                    <!-- /.input group -->
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
                                    <h3 class="timeline-header no-border"><a href="#">Sitios Turístico</a></h3>
                                    <div class="timeline-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group multiple-form-group input-group">
                                                    <label>Seleccione los Sitios Turísticos</label>
                                                    <div class="input-group">
                                                        <select name="ComboTur" id="ComboTur"
                                                            class="select2 select2-hidden-accessible form-control"
                                                            data-placeholder="Seleccione el tipo" style="width: 100%;">
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label>Precio</label>
                                                    <div class="input-group">
                                                        <input type="number" min="0" class=" form-control"
                                                            name="precio_sitio" id="precio_sitio">
                                                    </div>
                                                    <!-- /.input group -->
                                                </div>
                                            </div>

                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label>Contacto</label>
                                                    <br>
                                                    <a style="position:absolute; z-index:1;" href="#">
                                                        <div id="namePreviewTur">Nombre de Contacto</div>
                                                        <div
                                                            class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                                            <div class="ocultar card bg-light">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-7">
                                                                            <p id="nameContactoTur"
                                                                                class="text-muted text-sm">
                                                                                <b>Nombre de Contacto:</b>
                                                                                Nombre de Contacto detallado
                                                                            </p>
                                                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                                                <li class="small">
                                                                                    <span class="fa-li">
                                                                                        <i
                                                                                            class="fas fa-lg fa-mail-bulk">
                                                                                        </i>
                                                                                    </span>
                                                                                    <div id="mailContactoTur">
                                                                                        correo@correo.com
                                                                                    </div>
                                                                                </li>
                                                                                <li class="small">
                                                                                    <span class="fa-li">
                                                                                        <i
                                                                                            class="fas fa-lg fa-phone"></i>
                                                                                    </span>
                                                                                    <div id="phoneContactoTur">
                                                                                        Teléfono #: 1234-5678
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-5 text-center">
                                                                            <img id="imgContactoTur"
                                                                                src="http://www.lagraderia.com/wp-content/uploads/2018/12/no-imagen.jpg"
                                                                                alt="" class="img-fluid">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-footer"></div>
                                                            </div>
                                                        </div>
                                                    </a>

                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <!-- radio -->
                                                <label>Por Pasajero</label>
                                                <div class="form-group clearfix">
                                                    <div class="icheck-success d-inline" style="margin-left: 40px;">
                                                        <input type="radio" value="si" name="radioTur"
                                                            id="radioSuccess1">
                                                        <label for="radioSuccess1">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <!-- radio -->
                                                <label>Por Viaje</label>
                                                <div class="form-group clearfix">
                                                    <div class="icheck-success d-inline" style="margin-left: 30px;">
                                                        <input type="radio" value="no" name="radioTur" checked=""
                                                            id="radioSuccess2">
                                                        <label for="radioSuccess2">
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timeline-footer" style="text-align: right;">
                                        <button id="btnAgregarTur" class="btn btn-info btn-sm"
                                            style="color: white">Agregar</button>

                                    </div>
                                </div>
                            </div>
                            <!-- END timeline item -->
                            <!-- timeline item -->
                            <div>
                                <i class="fas fa-user bg-green"></i>
                                <div class="timeline-item">
                                    <h3 class="timeline-header no-border"><a href="#">Servicios Adicionales</a></h3>
                                    <div class="timeline-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group multiple-form-group input-group">
                                                    <label>Seleccione los Servicios Adicionales</label>
                                                    <div class="input-group">
                                                        <select name="ComboServicio" id="ComboServicio"
                                                            class="select2 select2-hidden-accessible form-control"
                                                            data-placeholder="Seleccione el tipo" style="width: 100%;">
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label>Precio</label>
                                                    <div class="input-group">
                                                        <input type="number" min="0" class=" form-control"
                                                            name="precio_servicio" id="precio_servicio">
                                                    </div>
                                                    <!-- /.input group -->
                                                </div>
                                            </div>

                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label>Contacto</label>
                                                    <br>
                                                    <a style="position:absolute; z-index:1;" href="#">
                                                        <div id="namePreviewServicio">Nombre de Contacto</div>
                                                        <div
                                                            class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                                            <div class="ocultar card bg-light">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-7">
                                                                            <p id="nameContactoServicio"
                                                                                class="text-muted text-sm">
                                                                                <b>Nombre de Contacto:</b>
                                                                                Nombre de Contacto detallado
                                                                            </p>
                                                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                                                <li class="small">
                                                                                    <span class="fa-li">
                                                                                        <i
                                                                                            class="fas fa-lg fa-mail-bulk">
                                                                                        </i>
                                                                                    </span>
                                                                                    <div id="mailContactoServicio">
                                                                                        correo@correo.com
                                                                                    </div>
                                                                                </li>
                                                                                <li class="small">
                                                                                    <span class="fa-li">
                                                                                        <i
                                                                                            class="fas fa-lg fa-phone"></i>
                                                                                    </span>
                                                                                    <div id="phoneContactoServicio">
                                                                                        Teléfono #: 1234-5678
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-5 text-center">
                                                                            <img id="imgContactoServicio"
                                                                                src="http://www.lagraderia.com/wp-content/uploads/2018/12/no-imagen.jpg"
                                                                                alt="" class="img-fluid">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-footer"></div>
                                                            </div>
                                                        </div>
                                                    </a>

                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <!-- radio -->
                                                <label>Por Pasajero</label>
                                                <div class="form-group clearfix">
                                                    <div class="icheck-success d-inline" style="margin-left: 40px;">
                                                        <input type="radio" checked="" name="servicioCheck"
                                                            id="PasajeroServicio">
                                                        <label for="PasajeroServicio">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <!-- radio -->
                                                <label>Por Viaje</label>
                                                <div class="form-group clearfix">
                                                    <div class="icheck-success d-inline" style="margin-left: 30px;">
                                                        <input type="radio" name="servicioCheck" id="ViajeServicio">
                                                        <label for="ViajeServicio">
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timeline-footer" style="text-align: right;">
                                        <a class="btn btn-info btn-sm" style="color: white">Agregar</a>

                                    </div>
                                </div>
                            </div>
                            <!-- END timeline item -->
                            <!-- timeline item -->
                            <div>
                                <i class="fas fa-user bg-green"></i>
                                <div class="timeline-item">
                                    <h3 class="timeline-header no-border"><a href="#">Producto(s) Seleccionado(s)</a>
                                    </h3>
                                    <div class="timeline-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="TablaCostos" class="table table-bordered table-hover">
                                                    <thead>
                                                        <tr style="text-align: center;">
                                                            <th>Sitio Turisto/Servicio Adicional</th>
                                                            <th>Costo</th>
                                                            <th>Cantidad</th>
                                                            <th>Sub Total</th>
                                                            <th>Acción</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="text-align: center;">

                                                    </tbody>

                                                </table>
                                            </div>

                                            <div class=" col-sm-12">
                                                <div style="text-align: right;width:475px;margin-top: 27px;">
                                                    <label> Total de Encomienda: </label> <label> $84.09</label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- timeline item -->
                            <!-- END timeline item -->
                            <div>
                                <i class="fas fa-user bg-green"></i>
                                <div class="timeline-item">

                                    <h3 class="timeline-header no-border"><a href="#">Servicios Adicionales</a></h3>
                                    <div class="timeline-body">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>El viaje incluye</label>
                                                    <textarea class="form-control" rows="3"
                                                        placeholder="Digitar aquí ..."></textarea>
                                                </div>
                                            </div>

                                            <div class="col-sm-3">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>El viaje no incluye</label>
                                                    <textarea class="form-control" rows="3"
                                                        placeholder="Digitar aquí..."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Requisitos de viaje</label>
                                                    <textarea class="form-control" rows="3"
                                                        placeholder="Digitar aquí ..."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Promociones especiales</label>
                                                    <textarea class="form-control" rows="3"
                                                        placeholder="Digitar aquí ..."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Sitios turisticos</label>
                                                    <select
                                                        class="select2 select2-hidden-accessible form-control float-righ"
                                                        multiple=""
                                                        data-placeholder="Selececcione los sitios turisticos"
                                                        style="width: 100%;" data-select2-id="7" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option data-select2-id="46">SAN JOSÉ (Costa Rica)</option>
                                                        <option data-select2-id="47">CARTAGO (Costa Rica)</option>
                                                        <option data-select2-id="48">PARQUE LA SABANA (Costa Rica)
                                                        </option>
                                                        <option data-select2-id="49">ZARCERO (Costa Rica)</option>
                                                        <option data-select2-id="50">TERMALES LA FORTUNA (Costa
                                                            Rica)
                                                        </option>
                                                        <option data-select2-id="51">Washington (Costa Rica)
                                                        </option>
                                                        <option data-select2-id="61">SAN JUAN DEL SUR (Nicaragua)
                                                        </option>
                                                        <option data-select2-id="63">GRANADA (Nicaragua)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Hoteles</label>
                                                    <div class="select2-blue">
                                                        <select class="select2 select2-hidden-accessible" multiple=""
                                                            data-placeholder="Seleccione los hoteles"
                                                            data-dropdown-css-class="select2-blue" style="width: 100%;"
                                                            data-select2-id="15" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="146">Hoteles(Costa Rica)
                                                            </option>
                                                            <option data-select2-id="147">Hilton (Costa Rica)
                                                            </option>
                                                            <option data-select2-id="148">Real Roma (Costa Rica)
                                                            </option>
                                                            <option data-select2-id="149">Presidencia (Costa Rica)
                                                            </option>
                                                            <option data-select2-id="161">Monterreal (Nicaragua)
                                                            </option>
                                                            <option data-select2-id="163">San Pedro (Nicaragua)
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- END timeline item -->
                            <!-- timeline item -->

                        </div>
                    </div>
                    <div class="timeline-footer" style="text-align: right;">
                        <button name="btnguardar" id="btnguardar" class="btn btn-info btn-sm"
                            style="color: white">Guardar</button>
                        <button class="btn btn-danger btn-sm" style="color: white">Cancelar</button>
                    </div>
                </div>
            </div>
            <!-- END timeline item -->
        </form>
    </section>
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
<script src="<?= $base_url ?>js/controladores/turs/registro-tour.js"></script>
<!-- CIERRE DE ETIQUETAS -->
<?php include_once '../../plantillas/cierre.php'; ?>
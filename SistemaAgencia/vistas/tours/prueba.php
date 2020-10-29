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
<div class="container">
    <div class="row">
        <div class="col-md-4" id="arregloTipos">
            <label>¿Personas que asistirán ?</label>
            <div class="form-group multiple-form-group input-group">
                <select name="ComboTipo[]" class="select2 selectTipo" data-placeholder="Seleccione el tipo"
                    style="width: 100%;">
                </select>
            </div>
        </div>
        <div class="col-md-1">
            <br>
            <span class="input-group-btn">
                <button type="button" class="btn btn-success btn-add" id="btn-nuevo" name="btn-nuevo"
                    style="margin-top: 10px; width: 100%;">+</button>
            </span>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label>Precio(USD)</label>
                <div class="input-group">
                    <input type="number" min="0" class=" form-control" name="precio_sitio" id="precio_sitio">
                </div>
                <!-- /.input group -->
            </div>
        </div>

        <div class="col-md-2">
            <div class="form-group">
                <label>Por Pasajero</label>
                <div class="input-group">
                    <div class="icheck-success d-inline" style="text-align: center;">
                        <input type="checkbox" id="checkboxSuccess1" checked="">
                        <label for="checkboxSuccess1"></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
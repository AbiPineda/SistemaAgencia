<?php
include_once '../../config/parametros.php';
include_once '../../plantillas/cabecera.php';
?>

<!-- COLORAR ESTILOS ADICIONALES AQUI -->
<link href="<?= $base_url ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" all rel="stylesheet"
    type="text/css" />
<link rel="stylesheet" href="<?= $base_url ?>plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">

<link rel="stylesheet" href="<?= $base_url ?>plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="<?= $base_url ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">

<link href="<?= $base_url ?>css/mdtimepicker.css" rel="stylesheet" type="text/css"> <!-- reloj -->


<!-- CONTINUAMOS CON LA INICIALIZACION -->
<?php include_once  '../../plantillas/navbar.php'; ?> <?php include_once '../../plantillas/barra_lateral.php'; ?>


<div class="content-wrapper" style="min-height: 1185.73px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Cotización de Vuelo</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Cotización de Vuelo</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form id="register-cotizarv" name="register-form" onsubmit="return false">
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

                                <h3 class="timeline-header"><a href="#">Datos Generales</a></h3>

                                <div class="timeline-body">
                                    <div class="row">

                                        <div class="col-sm-12">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Nombre del Cliente</label>
                                                <select name="id_cliente" id="id_cliente" class="form-control">
                                                    <option disabled="" selected="">Seleccione</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Ciudad de Partida</label>
                                                <input type="text" class="form-control" name="ciudad_partida"
                                                    id="ciudad_partida" placeholder="Digite nombre del Lugar">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Fecha</label>
                                                <input type="date" class="form-control" name="fechaPartida"
                                                    id="fechaPartida">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label>Hora de Llegada</label>
                                            <div class="input-group clockpicker" data-autoclose="true">
                                                <input type="text" id="timepicker" name="start" class="form-control"
                                                    value="08:00" />

                                            </div>

                                        </div>

                                        <div class="col-sm-6">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Ciudad de Llegada</label>
                                                <input type="text" class="form-control" name="ciudad_llegada"
                                                    id="ciudad_llegada" placeholder="Digite nombre del Lugar">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Fecha</label>
                                                <input type="date" class="form-control" name="fechaLlegada"
                                                    id="fechaLlegada">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label>Hora de Llegada</label>
                                            <div class="input-group clockpicker" data-autoclose="true">
                                                <input type="text" id="timepicker2" name="start" class="form-control"
                                                    value="08:00" />

                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Adultos (+12 años)</label>
                                                <input type="number" class="form-control" min="1" max="100"
                                                    name="adultos" id="adultos">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Niños (5 a 11 años)</label>
                                                <input type="number" class="form-control" min="1" max="10" name="ninos"
                                                    id="ninos">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Bebés (0 a 4 años)</label>
                                                <input type="number" class="form-control" min="1" max="3" name="bebes"
                                                    id="bebes">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Cantidad de Maletas</label>
                                                <input type="number" class="form-control" min="1" max="3" name="maletas"
                                                    id="maletas">
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

                                <h3 class="timeline-header no-border"><a href="#">Opciones Avanzadas</a></h3>
                                <div class="timeline-body">
                                    <div class="row">


                                        <div class="col-sm-4">
                                            <!-- select -->
                                            <div class="form-group">
                                                <label>Preferencia de Aerolínea</label>
                                                <select name="idaerolinea" id="idaerolinea" class="form-control">
                                                    <option disabled="" selected="">Seleccione</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- select -->
                                            <div class="form-group">
                                                <label>Clase</label>
                                                <select name="idclase" id="idclase" class="form-control">
                                                    <option disabled="" selected="">Seleccione</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- select -->
                                            <div class="form-group">
                                                <label>Tipo de Viaje</label>
                                                <select name="idtipo_viaje" id="idtipo_viaje" class="form-control">
                                                    <option disabled="" selected="">Seleccione</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Opciones Avanzadas</label>
                                                <div class="select2-danger">
                                                    <select class="select2" multiple="multiple" name="opc_avanzadas"
                                                        id="opc_avanzadas" data-placeholder="Seleccione"
                                                        data-dropdown-css-class="select2-danger" style="width: 100%;">
                                                        <option>Vuelo sin Escalas</option>
                                                        <option>Misma Aerolinea</option>
                                                        <option>Equipaje Extra</option>

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
                        <div>
                            <i class="fas fa-comments bg-yellow"></i>
                            <div class="timeline-item">

                                <h3 class="timeline-header"><a href="#">Condiciones</a></h3>
                                <div class="timeline-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <p>
                                                <label name="condiciones" id="condiciones"></label>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timeline-footer" style="text-align: right;">
                                        <button name="btnGuardarCotizacion" id="btnGuardarCotizacion"
                                            class="btn btn-info btn-sm" style="color: white">Guardar</button>
                                        <a class="btn btn-danger btn-sm" style="color: white">Cancelar</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
<!-- END timeline item -->

<?php
  include_once '../../plantillas/footer.php';
?>

<script>
$(function() {
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    })

    $('.my-colorpicker1').colorpicker()
    //color picker with addon

    $("input[data-bootstrap-switch]").each(function() {
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

    $(document).ready(function() {
        $('#timepicker').mdtimepicker(); //Initializes the time picker
    });

    $(document).ready(function() {
        $('#timepicker2').mdtimepicker(); //Initializes the time picker
    });

})
</script>




<!-- jquery-validation -->

<script src="<?= $base_url ?>js/mdtimepicker.js"></script> <!-- reloj -->

<script src="<?= $base_url ?>plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= $base_url ?>plugins/jquery-validation/additional-methods.min.js"></script>
<script type="text/javascript" src="<?= $base_url?>js/controladores/conf.js"></script>

<script type="text/javascript" src="<?= $base_url?>js/controladores/vuelos/comboUsuario.js"></script>
<script type="text/javascript" src="<?= $base_url?>js/controladores/vuelos/comboAerolinea.js"></script>
<script type="text/javascript" src="<?= $base_url?>js/controladores/vuelos/comboClase.js"></script>
<script type="text/javascript" src="<?= $base_url?>js/controladores/vuelos/comboViaje.js"></script>
<script type="text/javascript" src="<?= $base_url?>js/controladores/vuelos/mostrarCondiciones.js"></script>

<script type="text/javascript" src="<?= $base_url ?>plugins/sweetalert2/sweetalert2.min.js"></script>

<script src="<?= $base_url ?>js/controladores/vuelos/insertarCotizacion.js"></script>

<script src="<?= $base_url ?>plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="<?= $base_url ?>plugins/select2/js/select2.full.min.js"></script>
<?php
include_once '../../config/parametros.php';
include_once '../../plantillas/cabecera.php';
include_once  '../../plantillas/navbar.php';
include_once '../../plantillas/barra_lateral.php';
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://rawgit.com/Eonasdan/bootstrap-datetimepicker/master/build/css/bootstrap-datetimepicker.min.css">

<div class="content-wrapper" style="min-height: 1185.73px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Cotizar Vuelo</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Cotización</li>
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
                        <i class="fas fa-plane bg-blue"></i>
                        <div class="timeline-item">

                            <h3 class="timeline-header"><a href="#">Datos Generales</a> </h3>

                            <div class="timeline-body">
                                <!-- INICIO de primera fila -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Ciudad de Partida</label>
                                            <input type="text" class="form-control"
                                                placeholder="Digite nombre del Lugar">
                                        </div>
                                    </div>
                                    <div class='col-sm-6'>
                                        <div class="form-group">
                                        <label>Fecha y Hora</label>
                                            <div class='input-group date' id='datetimepicker1'>
                                                <input type='text' class="form-control" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- FIN de primera fila -->
                                <!-- INICIO de segunda fila -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Ciudad de Llegada</label>
                                            <input type="text" class="form-control"
                                                placeholder="Digite nombre del Lugar">
                                        </div>
                                    </div>

                                   
                                    <div class='col-sm-6'>
                                        <div class="form-group">
                                        <label>Fecha y Hora</label>
                                            <div class='input-group date' id='datetimepicker2'>
                                                <input type='text' class="form-control" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- FIN de segunda fila -->
                                <!-- INICIO de 3ra fila -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Adultos (+12 años)</label>
                                            <input type="number" class="form-control" min="1" max="100">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Niños (5 a 11 años)</label>
                                            <input type="number" class="form-control" min="1" max="10">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Bebés (0 a 4 años)</label>
                                            <input type="number" class="form-control" min="1" max="3">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Cantidad de Maletas</label>
                                            <input type="number" class="form-control" min="1" max="3">
                                        </div>
                                    </div>
                                </div>
                                <!-- FIN de 3ra fila -->
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

                                <!-- INICIO de 2da fila -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Preferencia de Aerolínea</label>
                                            <select class="form-control">

                                                <option value="">Aerolineas Argentinas</option>
                                                <option value="">Aeromexico</option>
                                                <option value="">Air Canada</option>
                                                <option value="">Air Europa</option>
                                                <option value="">Air France</option>
                                                <option value="">Air New Zealand</option>
                                                <option value="">Alitalia</option>
                                                <option value="">American Airlines</option>
                                                <option value="">Andes</option>
                                                <option value="">Avianca</option>
                                                <option value="">Azul Linhas Aéreas Brasileiras</option>
                                                <option value="">British Airways</option>
                                                <option value="">Copa Airlines</option>
                                                <option value="">Delta Air Lines</option>
                                                <option value="">Emirates Airline</option>
                                                <option value="">Gol Transportes Aereos</option>
                                                <option value="">Iberia Airlines</option>
                                                <option value="">Interjet</option>
                                                <option value="">KLM Royal Dutch Airlines</option>
                                                <option value="">LATAM</option>
                                                <option value="">Lufthansa</option>
                                                <option value="">Qantas</option>
                                                <option value="">Qatar Airways</option>
                                                <option value="">South African Airways</option>
                                                <option value="">Taca</option>
                                                <option value="">TAME</option>
                                                <option value="">TAP Portugal</option>
                                                <option value="">Turkish Airlines</option>
                                                <option value="">United Airlines</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Alianza</label>
                                            <select class="form-control">

                                                <option value="">Star Alliance</option>
                                                <option value="">One World</option>
                                                <option value="">Sky Team</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Clase</label>
                                            <select class="form-control">

                                                <option value="">Ejecutiva</option>
                                                <option value="">Económica</option>
                                                <option value="">Primera</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Tipo de Viaje</label>
                                            <select class="form-control">

                                                <option value="">Aventura</option>
                                                <option value="">Ciudad</option>
                                                <option value="">Cultural</option>
                                                <option value="">Playa</option>
                                                <option value="">Vacaciones Familiares</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- FIN de 2da fila -->
                                <!-- Inicio de 1ra fila -->
                                <div class="row">
                                    <div class="offset"></div>
                                    <div class="col-sm-4">
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="checkboxPrimary1" checked>
                                                <label for="checkboxPrimary1"> Vuelo sin Escalas
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group clearfix">
                                            <div class="icheck-success d-inline">
                                                <input type="checkbox" checked id="checkboxSuccess1">
                                                <label for="checkboxSuccess1">Misma Aerolinea
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group clearfix">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" checked id="checkboxDanger1">
                                                <label for="checkboxDanger1">Equipaje Extra
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- FIN de 1ra fila -->
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
                                            <label>*Verificar documentación en orden, pasaporte valido para 6 meses,
                                                cartas de invitación cuando sean requeridas, permisos o actas notables
                                                de acuerdo a la Ley Lepina para menores de 18 años.</label>
                                            <label>*Boletos aereos no reembolsables, no endosables y no
                                                transferibles.</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-footer" style="text-align: right;">
                                    <a class="btn btn-info btn-sm" style="color: white">Guardar</a>
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
<?php
  include_once '../../plantillas/footer.php';
?>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
<script src="https://rawgit.com/Eonasdan/bootstrap-datetimepicker/master/build/js/bootstrap-datetimepicker.min.js"></script>
<script>
$('#datetimepicker1').datetimepicker({
    defaultDate: new Date(),
    format: 'DD/MM/YYYY H:mm:ss',
    sideBySide: true
});
</script>
<script>
$('#datetimepicker2').datetimepicker({
    defaultDate: new Date(),
    format: 'DD/MM/YYYY H:mm:ss',
    sideBySide: true
});
</script>
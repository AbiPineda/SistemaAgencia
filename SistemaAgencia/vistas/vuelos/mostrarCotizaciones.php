<?php include_once '../../config/parametros.php'; ?>
<?php include_once '../../plantillas/cabecera.php'; ?>
<!-- COLORAR ESTILOS ADICIONALES AQUI -->
<link href="<?= $base_url ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" all rel="stylesheet"
    type="text/css" />
<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>

<style>
.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 75%;
}

.hidden {
    display: none;
}
</style>
<!-- CONTINUAMOS CON LA INICIALIZACION -->
<?php include_once  '../../plantillas/navbar.php'; ?> <?php include_once '../../plantillas/barra_lateral.php'; ?>



<div class="content-wrapper" style="min-height: 1185.73px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Cotizaciones Registradas</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Cotizaciones Registradas</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Datos Generales</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="tabla_cotizaciones" class="table table-bordered table-striped">
                                        <thead style="text-align: center;">
                                            <tr>
                                                <th>Cliente</th>
                                                <th>Ciudad de Partida</th>
                                                <th>Ciudad de Llegada</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <!-- /.inicio de loading -->
                                        <div class="overlay-wrapper">
                                            <div id="loading" class="overlay"><i
                                                    class="fas fa-3x fa-sync-alt fa-spin"></i>

                                                <div class="text-bold pt-2">Cargando...
                                                </div>
                                            </div>
                                            <tbody id="tableBody" style="text-align: center;">
                                            </tbody>
                                        </div>
                                        <!-- /.fin de loading -->
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
</div>
<!-- End Modal Mostrar-->


<form id="formularioEditar" name="formularioEditar" role="form" onsubmit="return false">
    <!-- Modal EDITAR-->
    <div class="modal fade" id="modal-editar">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <div class="overlay-wrapper">
                    <div id="loadingActualizar" class="overlay">
                        <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                        <div class="text-bold pt-2">Cargando...
                        </div>
                    </div>
                    <div class="modal-header">
                        <h4 class="modal-title">Modificar Cotización</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <label>Cliente</label>
                                    <div class="input-group">
                                        <input id="nombre" name="nombre" type="text" class="form-control" disabled>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Telefono</label>
                                    <div class="input-group">
                                        <input id="celular" name="celular" type="text" class="form-control" disabled>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Correo Electronico</label>
                                    <div class="input-group">
                                        <input id="correo" name="correo" type="text" class="form-control" disabled>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Ciudad de Partida</label>
                                    <div class="input-group">
                                        <input id="ciudad_partida" name="ciudad_partida" type="text"
                                            class="form-control" disabled>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Fecha</label>
                                    <div class="input-group">
                                        <input id="fechaPartida" name="fechaPartida" type="text" class="form-control"
                                            disabled>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Hora</label>
                                    <div class="input-group">
                                        <input id="HoraPartida" name="HoraPartida" type="text" class="form-control"
                                            disabled>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Ciudad de Llegada</label>
                                    <div class="input-group">
                                        <input id="ciudad_llegada" name="ciudad_llegada" type="text"
                                            class="form-control" disabled>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Fecha</label>
                                    <div class="input-group">
                                        <input id="fechaLlegada" name="fechaLlegada" type="text" class="form-control"
                                            disabled>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Hora</label>
                                    <div class="input-group">
                                        <input id="HoraLlegada" name="HoraLlegada" type="text" class="form-control"
                                            disabled>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Adultos</label>
                                    <div class="input-group">
                                        <input id="adultos" name="adultos" type="text" class="form-control" disabled>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Niños</label>
                                    <div class="input-group">
                                        <input id="ninos" name="ninos" type="text" class="form-control" disabled>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Bebes</label>
                                    <div class="input-group">
                                        <input id="bebes" name="bebes" type="text" class="form-control" disabled>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Maletas</label>
                                    <div class="input-group">
                                        <input id="maletas" name="maletas" type="text" class="form-control" disabled>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Aerolinea</label>
                                    <div class="input-group">
                                        <input id="nombre_aerolinea" name="nombre_aerolinea" type="text"
                                            class="form-control" disabled>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Tipo de Clase</label>
                                    <div class="input-group">
                                        <input id="nombre_clase" name="nombre_clase" type="text" class="form-control"
                                            disabled>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Tipo de Viaje</label>
                                    <div class="input-group">
                                        <input id="nombre_tipoviaje" name="nombre_tipoviaje" type="text"
                                            class="form-control" disabled>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Opciones Avanzadas</label>
                                    <div class="input-group">
                                        <input id="opc_avanzadas" name="opc_avanzadas" type="text" class="form-control"
                                            disabled>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Descuentos</label>
                                    <div class="input-group">
                                        <input id="descuentos" name="descuentos" type="text" class="form-control">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Total</label>
                                    <div class="input-group">
                                        <input id="total" name="total" type="text" class="form-control">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button name="btnActualizar" id="btnActualizar" class="btn btn-info btn-sm"
                            style="color: white">Actualizar</button>
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- End Modal EDITAR-->
</form>


<form id="miFormulario" name="miFormulario" role="form" onsubmit="return false">
    <!-- Modal EDITAR-->
    <div class="modal fade" id="modal-cotizacion">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <div class="overlay-wrapper">

                    <div class="modal-header">
                        <h4 class="modal-title">Cotización:</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <section class="content">
                                <div class="callout callout-info">
                                    <h6><i class="fas fa-info"></i> Nota: Los datos fueron proporcionados
                                        por el cliente.</h6>

                                </div>
                                <div class="container-fluid" id="printDiv">
                                    <div class="row">
                                        <div class="col-12">
                                            <!-- Main content -->
                                            <div class="invoice p-3 mb-3">
                                                <!-- title row -->
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h4>
                                                            <i class="fas fa-globe"></i> Agencia de Viajes Martínez
                                                            Travels & Tours
                                                        </h4>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- info row -->
                                                <div class="row invoice-info">
                                                    <div class="col-sm-4 invoice-col">
                                                        <br>
                                                        <address>
                                                            <label>Cliente:</label>
                                                            <label name="nombreCliente" id="nombreCliente"
                                                                style="font-weight: normal;"></label>
                                                            <br>
                                                            <label>Email:</label>
                                                            <label name="email" id="email"
                                                                style="font-weight: normal;"></label>
                                                            <br>
                                                            <label>Telefono:</label>
                                                            <label name="telefono" id="telefono"
                                                                style="font-weight: normal;"></label>
                                                        </address>
                                                    </div>
                                                    <!-- /.col -->
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.row -->

                                                <!-- Table row -->
                                                <div class="row">
                                                    <div class="col-12 table-responsive">
                                                        <table class="table table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>Ciudad de Partida</th>
                                                                    <th>Fecha</th>
                                                                    <th>Hora</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><label name="ciudadP" id="ciudadP"
                                                                            style="font-weight: normal;"></label></td>
                                                                    <td><label name="fechaP" id="fechaP"
                                                                            style="font-weight: normal;"></label></td>
                                                                    <td><label name="horaP" id="horaP"
                                                                            style="font-weight: normal;"></label></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 table-responsive">
                                                        <table class="table table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>Ciudad de Llegada</th>
                                                                    <th>Fecha</th>
                                                                    <th>Hora</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><label name="ciudadL" id="ciudadL"
                                                                            style="font-weight: normal;"></label></td>
                                                                    <td><label name="fechaL" id="fechaL"
                                                                            style="font-weight: normal;"></label></td>
                                                                    <td><label name="horaL" id="horaL"
                                                                            style="font-weight: normal;"></label></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.row -->
                                                <div class="row">
                                                    <div class="col-12 table-responsive">
                                                        <table class="table table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>Preferencia de Aerolinea</th>
                                                                    <th>Tipo de Clase</th>
                                                                    <th>Tipo de Viaje</th>
                                                                    <th>Opciones Avanzadas</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><label name="aerolinea" id="aerolinea"
                                                                            style="font-weight: normal;"></label>
                                                                    </td>
                                                                    <td><label name="clase" id="clase"
                                                                            style="font-weight: normal;"></label></td>
                                                                    <td><label name="tipoviaje" id="tipoviaje"
                                                                            style="font-weight: normal;"></label>
                                                                    </td>
                                                                    <td><label name="opc" id="opc"
                                                                            style="font-weight: normal;"></label></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <div class="row">
                                                    <!-- accepted payments column -->
                                                    <div class="col-6">
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col-6">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <tr>
                                                                    <th style="width:50%">Cantidad de Adultos</th>
                                                                    <td><label name="adult" id="adult"
                                                                            style="font-weight: normal;"></label></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Cantidad de Niños</th>
                                                                    <td><label name="nino" id="nino"
                                                                            style="font-weight: normal;"></label></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Cantidad de Bebes</th>
                                                                    <td><label name="bb" id="bb"
                                                                            style="font-weight: normal;"></label></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Cantidad de Maletas</th>
                                                                    <td><label name="malet" id="malet"
                                                                            style="font-weight: normal;"></label></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Descuentos (%)</th>
                                                                    <td><label name="descuent" id="descuent"
                                                                            style="font-weight: normal;"></label></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Total ($)</th>
                                                                    <td><label name="tot" id="tot"
                                                                            style="font-weight: normal;"></label></td>
                                                                </tr>

                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.row -->

                                                <!-- this row will not appear when printing -->
                                                <div class="row no-print">
                                                    <div class="col-12">

                                                        <button target="_blank" id="doPrint" class="btn btn-default"><i
                                                                class="fas fa-print"></i>
                                                            Imprimir</button>

                                                        <div id="editor"></div>
                                                        <button id="convertirPDF" type="button"
                                                            class="btn btn-primary float-right"
                                                            style="margin-right: 5px;">
                                                            <i class="fas fa-download"></i> Generar PDF
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.invoice -->
                                        </div><!-- /.col -->
                                    </div><!-- /.row -->
                                </div><!-- /.container-fluid -->
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- End Modal EDITAR-->
</form>
<!-- /.MODALES DE BOTONES -->
<!-- /.Cierre de MODAL -->


<?php 
 
 include_once '../../plantillas/footer.php';?>

<script>
document.getElementById("doPrint").addEventListener("click", function() {
    var printContents = document.getElementById('printDiv').innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
});
</script>

<script>
var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function(element, renderer) {
        return true;
    }
};

$('#convertirPDF').click(function() {
    doc.fromHTML($('#printDiv').html(), 15, 15, {
        'width': 170,
        'elementHandlers': specialElementHandlers
    });
    doc.save('sample-file.pdf');
});
</script>

<!-- SCRIPT ADICIONALES -->
<script type="text/javascript" src="<?= $base_url?>js/controladores/conf.js"></script>

<script src="<?= $base_url ?>plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= $base_url ?>plugins/jquery-validation/additional-methods.min.js"></script>

<script type="text/javascript" src="<?= $base_url?>js/controladores/vuelos/cotizacion-app.js"></script>
<script type="text/javascript" src="<?= $base_url ?>plugins/sweetalert2/sweetalert2.min.js"></script>



<?php  include_once '../../plantillas/cierre.php';?>
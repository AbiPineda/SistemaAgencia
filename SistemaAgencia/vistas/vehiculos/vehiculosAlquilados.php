<?php include_once '../../config/parametros.php'; ?>
<?php include_once '../../plantillas/cabecera.php'; ?>
<!-- COLORAR ESTILOS ADICIONALES AQUI -->
<link href="<?= $base_url ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" all rel="stylesheet"
    type="text/css" />

<link rel="stylesheet" href="<?= $base_url ?>plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">

<link href="<?= $base_url ?>css/mdtimepicker.css" rel="stylesheet" type="text/css"> <!-- reloj -->

<style>
.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 75%;
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
                    <h1>Vehiculos Alquilados</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Vehiculos Alquilados</li>
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

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="tabla_mantenimientos" class="table table-bordered table-striped">
                                        <thead style="text-align: center;">
                                            <tr>
                                                <th>ID Alquiler</th>
                                                <th>Cliente</th>
                                                <th>Vehiculo</th>
                                                <th>Precio</th>
                                                <th>Fecha - Hora</th>
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



<form id="miFormulario" name="miFormulario" role="form" onsubmit="return false">
    <!-- Modal EDITAR-->
    <div class="modal fade" id="modal-editar">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <div class="overlay-wrapper">

                    <div class="modal-header">
                        <h4 class="modal-title">Regresar Vehiculo</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Id Alquiler</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="idDetalle" name="idDetalle"
                                            disabled>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Total</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="total" name="total" disabled>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Cliente</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="cliente" name="cliente" disabled>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Placa</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="placa" name="placa" disabled>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Año</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="anio" name="anio" disabled>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Modelo</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="modelo" name="modelo" disabled>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Kilometraje</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" id="kilometraje" name="kilometraje">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>


                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Dirección de Recogida</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="recogida" name="recogida" disabled>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Dirección de Devolución</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="devolucion" name="devolucion"
                                            disabled>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Servicios Adquiridos</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="servicios" name="servicios"
                                            disabled>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Fecha - Hora (Recogida/Devolución) </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="fechaHora" name="fechaHora"
                                            disabled>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Fecha de Devolución</label>
                                    <input type="date" class="form-control" name="fechaDe" id="fechaDe">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Hora de Devolución</label>
                                <div class="input-group clockpicker" data-autoclose="true">
                                    <input type="text" id="timepicker" name="start" class="form-control"
                                        value="08:00" />
                                </div>


                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Intereses (%)</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" id="porcentaje" name="porcentaje"
                                            min=0  value="5">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Total a Pagar</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="pagar" name="pagar"
                                            disabled>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>



                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            <button name="btnActualizar" id="btnActualizar" class="btn btn-info btn-sm"
                                style="color: white">Devolver</button>
                        </div>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- End Modal EDITAR-->
    </div>
</form>



<?php  
include_once '../../plantillas/footer.php';?>

<script>
$(function() {
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $(document).ready(function() {
        $('#timepicker').mdtimepicker(); //Initializes the time picker
    });

})
</script>

<!-- SCRIPT ADICIONALES -->
<script type="text/javascript" src="<?= $base_url?>js/controladores/conf.js"></script>
<script type="text/javascript" src="<?= $base_url?>js/controladores/vehiculos/vehiculos-alquilados.js"></script>
<script type="text/javascript" src="<?= $base_url ?>plugins/sweetalert2/sweetalert2.min.js"></script>


<script src="<?= $base_url ?>js/mdtimepicker.js"></script> <!-- reloj -->
<script src="<?= $base_url ?>plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="<?= $base_url ?>plugins/select2/js/select2.full.min.js"></script>

<!-- jquery-validation -->
<script src="<?= $base_url ?>plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= $base_url ?>plugins/jquery-validation/additional-methods.min.js"></script>
<script src="<?= $base_url ?>plugins/sweetalert2/sweetalert2.min.js"></script>

<?php  include_once '../../plantillas/cierre.php';?>
<?php include_once '../../config/parametros.php'; ?>
<?php include_once '../../plantillas/cabecera.php'; ?>
<!-- COLORAR ESTILOS ADICIONALES AQUI -->
<link href="<?= $base_url ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" all rel="stylesheet"
    type="text/css" />
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
                    <h1>Mantenimientos Registrados</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Mantenimientos Registrados</li>
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
                                                <th>Fecha</th>
                                                <th>Vehiculo</th>
                                                <th>Año</th>
                                                <th>Lugar</th>
                                                <th>Precio</th>
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
                        <h4 class="modal-title">Modificar Mantenimiento</h4>
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
                                    <label>Fecha</label>
                                    <div class="input-group">
                                        <input type="date" class="form-control" id="fecha" name="fecha" data-date="" data-date-format="DD MMMM YYYY" disabled>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Vehiculo</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="vehiculo" name="vehiculo" disabled>
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
                                    <label>Placa</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="placa" name="placa" disabled>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Lugar donde se realizo mantenimiento</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="lugar" name="lugar" >
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Mantenimientos Realizados</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="mantenimientos"
                                            name="mantenimientos" >
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



<?php  
include_once '../../plantillas/footer.php';?>
<script>
$("input").on("change", function() {
    this.setAttribute(
        "data-date",
        moment(this.value, "YYYY-MM-DD")
        .format( this.getAttribute("data-date-format") )
    )
}).trigger("change")
</script>


<!-- SCRIPT ADICIONALES -->
<script type="text/javascript" src="<?= $base_url?>js/controladores/conf.js"></script>
<script type="text/javascript" src="<?= $base_url?>js/controladores/vehiculos/mostrarMantenimiento.js"></script>
<script type="text/javascript" src="<?= $base_url ?>plugins/sweetalert2/sweetalert2.min.js"></script>

<?php  include_once '../../plantillas/cierre.php';?>
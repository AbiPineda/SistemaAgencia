<?php
include_once '../../config/parametros.php';
include_once '../../plantillas/cabecera.php';
include_once  '../../plantillas/navbar.php';
include_once '../../plantillas/barra_lateral.php';
?>
<link href="<?= $base_url ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" all" rel="stylesheet"
    type="text/css" />

<style>
.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 75%;
}
</style>

<div class="content-wrapper" style="min-height: 1185.73px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Vehículos Registrados</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Vehículos Registrados</li>
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
                        <div class="timeline-footer" style="text-align: right;">
                            <a class="btn btn-info btn-sm" style="color: white" data-toggle="modal"
                                data-target="#modal-marca">Nueva Marca</a>
                            <a class="btn btn-info btn-sm" style="color: white" data-toggle="modal"
                                data-target="#modal-modelo">Nuevo Modelo</a>
                            <a class="btn btn-info btn-sm" style="color: white" data-toggle="modal"
                                data-target="#modal-categoria">Nueva Categoria</a>

                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="tabla_vehiculos" class="table table-bordered table-striped">
                                        <thead style="text-align: center;">
                                            <tr>
                                                <th>Placa</th>
                                                <th>Año</th>
                                                <th>Precio</th>
                                                <th>Combustible</th>
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
    <form id="miFormulario" name="miFormulario" role="form">
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
                            <h4 class="modal-title">Modificar Servicio</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Tipo de Servicio</label>
                                        <select name="tipo_servicio" id="tipo_servicio"
                                            class="select2 select2-hidden-accessible form-control float-righ"
                                            data-placeholder="Seleccione el tipo" style="width: 100%;"
                                            data-select2-id="7" tabindex="-1" aria-hidden="true">
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Nombre de Servicio</label>
                                        <div class="input-group">
                                            <input id="nombre" name="nombre" type="text" class="form-control">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Costo promedio</label>
                                        <div class="input-group">
                                            <input id="costos_defecto" name="costos_defecto" type="number"
                                                class="form-control">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Descripcion del Servicio</label>
                                        <textarea name="descripcion_servicio" id="descripcion_servicio"
                                            class="form-control" rows="3" placeholder="Digitar aquí ..."></textarea>
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


    <form id="formularioImagenes" name="formularioImagenes" enctype="multipart/form-data">
        <!-- Modal EDITAR-->
        <div class="modal fade" id="modal-imagenes">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Editar Imagenes</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="file-loading">
                            <input id="kv-explorer" name="foto" type="file" multiple>
                        </div>
                    </div>


                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- End Modal EDITAR-->
    </form>



</div>











<!-- /.MODALES DE BOTONES PARA INSERTAR -->
<div class="modal fade" id="modal-marca">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="register-form" name="register-form" onsubmit="return false">
                <div class="modal-body">
                    <p>
                        <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="timeline">

                                    <div>
                                        <i class="fas fa-car bg-blue"></i>
                                        <div class="timeline-item">

                                            <h3 class="timeline-header"><a href="#">Registrar Marca</a> </h3>

                                            <div class="timeline-body">
                                                <!-- INICIO de primera fila -->
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <!-- text input -->
                                                        <div class="form-group">
                                                            <label>Nombre de Marca</label>
                                                            <input type="text" name="marca" class="form-control"
                                                                placeholder="Digite nombre de marca">
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="timeline-footer" style="text-align: right;">
                                                <a class="btn btn-info btn-sm" style="color: white" type="button"
                                                    id="btnAgregar">Guardar</a>
                                                <a class="btn btn-danger btn-sm" style="color: white">Cancelar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <p>
                </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.Cierre de MODAL MARCA -->


<!-- /.MODALES DE BOTONES PARA INSERTAR -->
<div class="modal fade" id="modal-modelo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="timeline">

                                <div>
                                    <i class="fas fa-car bg-blue"></i>
                                    <div class="timeline-item">

                                        <h3 class="timeline-header"><a href="#">Registrar Modelo</a> </h3>

                                        <div class="timeline-body">
                                            <!-- INICIO de primera fila -->
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Seleccione Marca</label>
                                                        <select name="id_marca" id="marca" class="form-control"
                                                            onchange="ShowSelected();">
                                                            <option disabled="" selected="">Seleccione</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nombre de Modelo</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Digite nombre de modelo">
                                                    </div>
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
                </section>
                <p>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.Cierre de MODAL MODELO -->

<!-- /.MODALES DE BOTONES PARA INSERTAR -->
<div class="modal fade" id="modal-categoria">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="timeline">

                                <div>
                                    <i class="fas fa-car bg-blue"></i>
                                    <div class="timeline-item">

                                        <h3 class="timeline-header"><a href="#">Registrar Categoria</a> </h3>

                                        <div class="timeline-body">
                                            <!-- INICIO de primera fila -->
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Nombre de Categoria</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Digite nombre de categoria">
                                                    </div>
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
                </section>
                <p>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.Cierre de MODAL CATEGORIA -->


<?php
  include_once '../../plantillas/footer.php';
?>

<!-- SCRIPT ADICIONALES -->
<script type="text/javascript" src="<?= $base_url?>js/controladores/conf.js"></script>
<script type="text/javascript" src="<?= $base_url?>js/controladores/vehiculos/comboMarca.js"></script>
<script type="text/javascript" src="<?= $base_url?>js/controladores/vehiculos/marca-app.js"></script>
<script type="text/javascript" src="<?= $base_url?>js/controladores/vehiculos/vehiculo-app.js"></script>

<script src="<?= $base_url ?>plugins/sweetalert2/sweetalert2.min.js"></script>


<script>
$(function() {
    $("#tabla_vehiculos1").DataTable({
        "responsive": true,
        "autoWidth": false,
    });

});
</script>
<?php include_once '../../config/parametros.php'; ?>
<?php include_once '../../plantillas/cabecera.php'; ?>
<!-- COLORAR ESTILOS ADICIONALES AQUI -->
<?php include_once  '../../plantillas/navbar.php'; ?>
<?php include_once '../../plantillas/barra_lateral.php'; ?>

<div class="content-wrapper" style="min-height: 1185.73px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Servicios disponibles</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
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
                        <h3 class="card-title">Servicios</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="tabla_servicios" class="table table-bordered table-striped">
                            <thead style="text-align: center;">
                                <tr>
                                    <th>Tipo del Servicio</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Costo Promedio</th>
                                    <th>Acciones</th>

                                </tr>
                            </thead>
                            <div class="overlay-wrapper">
                                <div id="loading" class="overlay"><i class="fas fa-3x fa-sync-alt fa-spin"></i>

                                    <div class="text-bold pt-2">Cargando...
                                    </div>
                                </div>
                                <tbody id="tableBody" style="text-align: center;">
                                </tbody>
                            </div>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
    <!-- Modal EDITAR-->
    <div class="modal fade" id="modal-editar">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
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
                                    data-placeholder="Seleccione el tipo" style="width: 100%;" data-select2-id="7"
                                    tabindex="-1" aria-hidden="true">
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
                                    <input id="costos_defecto" name="costos_defecto" type="number" class="form-control">
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
                                <textarea name="descripcion_servicio" id="descripcion_servicio" class="form-control"
                                    rows="3" placeholder="Digitar aquí ..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>

<?php include_once '../../plantillas/footer.php'; ?>
<!-- SCRIPT ADICIONALES AQUI -->
<script src="<?= $base_url ?>js/controladores/servicios-contacto/ver-servicios.js"></script>
<?php include_once '../../plantillas/cierre.php'; ?>
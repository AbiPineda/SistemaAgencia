<?php
include_once '../../config/parametros.php';
include_once '../../plantillas/cabecera.php';
include_once  '../../plantillas/navbar.php';
include_once '../../plantillas/barra_lateral.php';
?>
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
                    <h1>Tipos de Clases Registradas</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Tipos de Clases Registradas</li>
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
                                data-target="#modal-clase">Nueva Clase</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="tabla_vehiculos1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="tabla_vehiculos1"
                                        class="table table-bordered table-striped dataTable dtr-inline" role="grid"
                                        aria-describedby="tabla_vehiculos1_info">
                                        <thead>
                                            <tr role="row" style="text-align: center;">
                                                <th class="sorting_asc" tabindex="0" aria-controls="tabla_vehiculos1"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Rendering engine: activate to sort column descending">
                                                    Nombre</th>
                                                <th class="sorting" tabindex="0" aria-controls="tabla_vehiculos1"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Browser: activate to sort column ascending">
                                                    Descripción</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr role="row" class="odd" style="text-align: left;">
                                                <td tabindex="0" class="sorting_1">Clase económica</td>
                                                <td tabindex="0" class="sorting_1">
                                                    A pesar de los precios bajos, los pasajeros pueden viajar cómodos:
                                                    asientos ajustables con el perfil adecuado que proporciona comodidad
                                                    en una posición saludable.
                                                    <br>
                                                    En la clase económica se sirve un refrigerio de acuerdo a la hora,
                                                    fecha y duración del vuelo (un desayuno leve almuerzo o cena
                                                    completa).
                                                    <br>
                                                    Los pasajeros también pueden escoger entre una selección de bebidas
                                                    además de extras como toallitas húmedas, tapones de oído, etc. que
                                                    hacen del vuelo una experiencia más agradable.
                                                </td>

                                                <td>
                                                    <div class="btn-group">

                                                        <button type="button" class="btn btn-primary"><i
                                                                class="fas fa-edit"></i></button>
                                                        <button type="button" class="btn btn-danger"><i
                                                                class="fas fa-trash-alt"></i></button>
                                                        <button type="button" class="btn btn-warning"><i
                                                                class="fas fa-long-arrow-alt-down"
                                                                style="color: white"></i></button>
                                                    </div>
                                                </td>

                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr style="text-align: center;">
                                                <th rowspan="1" colspan="1">Nombre</th>
                                                <th rowspan="1" colspan="1">Descripción</th>


                                            </tr>
                                        </tfoot>
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
    <!-- /.content -->
</div>
<div class="modal fade" id="modal-clase">
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
                                    <i class="fas fa-plane bg-blue"></i>
                                    <div class="timeline-item">

                                        <h3 class="timeline-header"><a href="#">Registrar Clase</a> </h3>

                                        <div class="timeline-body">
                                            <!-- INICIO de primera fila -->
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Tipo de Clase</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Digite tipo de clase">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Descripción</label>
                                                        <textarea class="form-control" rows="6"
                                                            placeholder="Digitar aquí..."></textarea>
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
<!-- /.modal -->



<?php
  include_once '../../plantillas/footer.php';
?>


<script>
$(function() {
    $("#tabla_vehiculos1").DataTable({
        "responsive": true,
        "autoWidth": false,
    });

});
</script>
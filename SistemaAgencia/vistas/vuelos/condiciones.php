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
                    <h1>Condiciones Registradas</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Condiciones Registradas</li>
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
                        <h3 class="card-title">Condiciones para Cotización de Vuelos</h3>
                        <div class="timeline-footer" style="text-align: right;">
                            <a class="btn btn-info btn-sm" style="color: white" data-toggle="modal"
                                data-target="#modal-clase">Nueva Condición</a>
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
                                                    Identificador</th>
                                                <th class="sorting" tabindex="0" aria-controls="tabla_vehiculos1"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Browser: activate to sort column ascending">
                                                    Condición</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr role="row" class="odd" style="text-align: left;">
                                                <td tabindex="0" class="sorting_1">1</td>
                                                <td tabindex="0" class="sorting_1">
                                                    Verificar documentación en orden, pasaporte valido para 6 meses,
                                                    cartas de invitación cuando sean requeridas, permisos o actas
                                                    notables de acuerdo a la Ley Lepina para menores de 18 años.
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
                                            <tr role="row" class="odd" style="text-align: left;">
                                                <td tabindex="0" class="sorting_1">2</td>
                                                <td tabindex="0" class="sorting_1">
                                                    Boletos aereos no reembolsables, no endosables y no transferibles.
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
                                                <th rowspan="1" colspan="1">Identificador</th>
                                                <th rowspan="1" colspan="1">Condición</th>


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

                                        <h3 class="timeline-header"><a href="#">Registrar Condición</a> </h3>

                                        <div class="timeline-body">
                                            <!-- INICIO de primera fila -->
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Descripción</label>
                                                        <textarea class="form-control" rows="6"
                                                            placeholder="Digitar aqui en que consiste la Condición..."></textarea>
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
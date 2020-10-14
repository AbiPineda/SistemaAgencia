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
                                                    Marca</th>
                                                <th class="sorting" tabindex="0" aria-controls="tabla_vehiculos1"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Browser: activate to sort column ascending">
                                                    Modelo</th>
                                                <th class="sorting" tabindex="0" aria-controls="tabla_vehiculos1"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Platform(s): activate to sort column ascending">
                                                    Año</th>
                                                <th class="sorting" tabindex="0" aria-controls="tabla_vehiculos1"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Engine version: activate to sort column ascending">
                                                    Combustible</th>
                                                <th class="sorting" tabindex="0" aria-controls="tabla_vehiculos1"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Engine version: activate to sort column ascending">
                                                    Trasmisión</th>
                                                <th class="sorting" tabindex="0" aria-controls="tabla_vehiculos1"
                                                    rowspan="1" colspan="1"
                                                    aria-label="CSS grade: activate to sort column ascending">Acciones
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr role="row" class="odd" style="text-align: center;">
                                                <td tabindex="0" class="sorting_1">Hyundai</td>
                                                <td>Elantra</td>
                                                <td>2014</td>
                                                <td>Gasolina</td>
                                                <td>Automática</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-toggle="modal" data-target="#modal-default1">
                                                            <i class="fas fa-car"></i>
                                                            <button type="button" class="btn btn-success"
                                                                data-toggle="modal" data-target="#modal-default">
                                                                <i class="fas fa-eye"></i>
                                                            </button>
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
                                                <th rowspan="1" colspan="1">Marca</th>
                                                <th rowspan="1" colspan="1">Modelo</th>
                                                <th rowspan="1" colspan="1">Año</th>
                                                <th rowspan="1" colspan="1">Combustible</th>
                                                <th rowspan="1" colspan="1">Transmisión</th>
                                                <th rowspan="1" colspan="1">Acciones</th>
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

<div class="modal fade" id="modal-default1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Información del Vehículo:</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr style="text-align: center;">
                                <th>Marca</th>
                                <td>Hyundai</td>
                            </tr>
                            <tr style="text-align: center;">
                                <th>Modelo</th>
                                <td>Elantra</td>
                            </tr>
                            <tr style="text-align: center;">
                                <th>Año</th>
                                <td>2014</td>
                            </tr>
                            <tr style="text-align: center;">
                                <th>Placa</th>
                                <td>AA12345</td>
                            </tr>
                            <tr style="text-align: center;">
                                <th>Combustible</th>
                                <td>Gasolina</td>
                            </tr>
                            <tr style="text-align: center;">
                                <th>Color</th>
                                <td>Gris</td>
                            </tr>
                            <tr style="text-align: center;">
                                <th>Kilometraje</th>
                                <td>1500km</td>
                            </tr>
                            <tr style="text-align: center;">
                                <th>Transmisión</th>
                                <td>Automática</td>
                            </tr>
                            <tr style="text-align: center;">
                                <th>Precio</th>
                                <td><span class="badge bg-success">$28.50</span></td>
                            </tr>
                            <tr style="text-align: center;">
                                <th>Pasajeros</th>
                                <td><span class="badge bg-warning">5</span></td>
                            </tr>
                            <tr style="text-align: center;">
                                <th>Puertas</th>
                                <td><span class="badge bg-warning">4</span></td>
                            </tr>
                            <tr style="text-align: center;">
                                <th>Categoria</th>
                                <td><span class="badge bg-info">Sedan</span></td>
                            </tr>
                            <tr style="text-align: center;">
                                <th>Aire Acondicionado</th>
                                <td>Sí</td>
                            </tr>
                            <tr style="text-align: center;">
                                <th>Audio</th>
                                <td>Sí</td>
                            </tr>
                            <tr style="text-align: center;">
                                <th>Silla para Bebé</th>
                                <td>Sí</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Imagen:</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <img class="center"
                        src="https://ik.imagekit.io/udcdt0pvr/wp-content/uploads/2019/08/hyundai-elantra-njautoimport-carro-8-300x225.jpeg?wave"
                        alt="" />
                <p>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.cierre modal de imagen-->

<!-- /.MODALES DE BOTONES PARA INSERTAR -->
<div class="modal fade" id="modal-marca">
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

                                        <h3 class="timeline-header"><a href="#">Registrar Marca</a> </h3>

                                        <div class="timeline-body">
                                            <!-- INICIO de primera fila -->
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Nombre de Marca</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Digite nombre de marca">
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
                                                        <select class="form-control">

                                                            <option value="">Toyota</option>
                                                            <option value="">Nissan</option>
                                                            <option value="">Hyundai</option>
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


<script>
$(function() {
    $("#tabla_vehiculos1").DataTable({
        "responsive": true,
        "autoWidth": false,
    });

});
</script>
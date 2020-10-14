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
                                    <tr>
                                        <td>!VAMONOS A COSTA RICA¡</td>
                                        <td>DEL 4 AL 9 DE ABRIL 2019</td>
                                        <td>Internacional</td>
                                        <td id="33">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#modal-editar">
                                                    <i class="fas fa-edit" style="color: white"></i>
                                                </button>

                                                <button type="button" class="btn btn-warning" data-toggle="modal"
                                                    data-target="#modal-galeria">
                                                    <i class="fas fa-image" style="color: white"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#modal-eliminar">
                                                    <i class="fas fa-trash" style="color: white"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>


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
                    <h4 class="modal-title">Large Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>One fine body&hellip;</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
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
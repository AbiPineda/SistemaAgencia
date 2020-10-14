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
                                    <th>Nombre del Servicio</th>
                                    <th>Costo Prommedio</th>
                                    <th>tipo de Servicio</th>
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
                                        <td>
                                            <div class="btn-group">
                                                <a type="button" class="btn btn-primary"
                                                    href="<?= $base_url ?>vistas/tours/editar_tour.php">
                                                    <i class="fas fa-edit" style="color: white"></i>
                                                </a>

                                                <a type="button" class="btn btn-danger"
                                                    href="<?= $base_url ?>vistas/tours/editar_tour.php">
                                                    <i class="fas fa-trash" style="color: white"></i>
                                                </a>
                                                <a type="button" class="btn btn-warning"
                                                    href="<?= $base_url ?>vistas/tours/itinerario.php">
                                                    <i class="fas fa-long-arrow-alt-down" style="color: white"></i>
                                                </a>

                                                <a type="button" class="btn btn-success"
                                                    href="<?= $base_url ?>vistas/tours/itinerario.php">
                                                    <i class="fas fa-car" style="color: white"></i>
                                                </a>


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
</div>

<?php include_once '../../plantillas/footer.php'; ?>
<!-- SCRIPT ADICIONALES AQUI -->
<script src="<?= $base_url ?>js/controladores/servicios-contacto/ver-servicios.js"></script>
<?php include_once '../../plantillas/cierre.php'; ?>
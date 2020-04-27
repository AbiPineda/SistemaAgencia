<?php
include_once '../../config/parametros.php';
?>
<!-- DataTables -->
<link rel="stylesheet" href="<?= $base_url ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?= $base_url ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">


<div class="content-wrapper" style="min-height: 1185.73px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DataTables</h1>
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
                        <h3 class="card-title">Sitios turisticos</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead style="text-align: center;">
                                <tr>
                                    <th>foto</th>
                                    <th>Nombre</th>
                                    <th>Ubicación</th>
                                    <th>Tipo</th>
                                    <th>Acciones</th>

                                </tr>
                            </thead>
                            <tbody style="text-align: center;">
                                <tr >
                                    <td><img  src="<?= $base_url ?>img/beach" class="mailbox-attachment-icon has-img" style="margin: auto" alt=""></td>
                                    <td class="align-middle">Montezuma</td>
                                    <td class="align-middle">Costa Rica Puntarenas</td>
                                    <td class="align-middle">Pueblo</td>
                                    <td class="align-middle"> 
                                        <div class="btn-group">
                                            <a type="button" class="btn btn-primary" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_sitio.php')"   >
                                                <i class="fas fa-edit" style="color: white"></i>
                                            </a>

                                            <a type="button" class="btn btn-danger" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_sitio.php')"   >
                                                <i class="fas fa-trash" style="color: white"></i>
                                            </a>
                                            <a type="button" class="btn btn-warning" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/galeria.php')"   >
                                                <i class="fas fa-image" title="galeria" style="color: white"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr >
                                    <td><img  src="<?= $base_url ?>img/beach" class="mailbox-attachment-icon has-img" style="margin: auto" alt=""></td>
                                    <td class="align-middle">Tamarindo </td>
                                    <td class="align-middle">Provincia de Guanacaste</td>
                                    <td class="align-middle">Playa</td>
                                    <td class="align-middle"> 
                                        <div class="btn-group">
                                            <a type="button" class="btn btn-primary" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_sitio.php')"   >
                                                <i class="fas fa-edit" style="color: white"></i>
                                            </a>

                                            <a type="button" class="btn btn-danger" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_sitio.php')"   >
                                                <i class="fas fa-trash" style="color: white"></i>
                                            </a>
                                             <a type="button" class="btn btn-warning" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/galeria.php')"   >
                                                <i class="fas fa-image" title="galeria" style="color: white"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                 <tr >
                                    <td><img  src="<?= $base_url ?>img/beach" class="mailbox-attachment-icon has-img" style="margin: auto" alt=""></td>
                                    <td class="align-middle">Tamarindo </td>
                                    <td class="align-middle">Provincia de Guanacaste</td>
                                    <td class="align-middle">Playa</td>
                                    <td class="align-middle"> 
                                        <div class="btn-group">
                                            <a type="button" class="btn btn-primary" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_sitio.php')"   >
                                                <i class="fas fa-edit" style="color: white"></i>
                                            </a>

                                            <a type="button" class="btn btn-danger" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>home.php')"   >
                                                <i class="fas fa-trash" style="color: white"></i>
                                            </a>
                                             <a type="button" class="btn btn-warning" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/galeria.php')"   >
                                                <i class="fas fa-image" title="galeria" style="color: white"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>


                            </tbody>



                            <tfoot>
                                <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>

                                </tr>
                            </tfoot>
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

<!-- DataTables -->
<script src="<?= $base_url ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= $base_url ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= $base_url ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= $base_url ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>  

<script>
                                                $(function () {
                                                    $("#example1").DataTable({
                                                        "responsive": true,
                                                        "autoWidth": false,
                                                    });
                                                    $('#example2').DataTable({
                                                        "paging": true,
                                                        "lengthChange": false,
                                                        "searching": false,
                                                        "ordering": true,
                                                        "info": true,
                                                        "autoWidth": false,
                                                        "responsive": true,
                                                    });
                                                });
</script>



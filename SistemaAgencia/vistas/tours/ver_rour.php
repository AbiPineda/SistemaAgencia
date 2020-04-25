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
                        <h3 class="card-title">Próximos Tours</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nombre del Tour</th>
                                    <th>Fecha de salida</th>

                                    <th>tipo</th>
                                    <th>Editar</th>
                                    <th>Itineerario  </th>
                                    <th>Retirar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>!VAMONOS A COSTA RICA¡</td>
                                    <td>DEL 4 AL 9 DE ABRIL 2019</td>
                                    <td>Internacional</td>
                                    <td> 
                                        <a type="button" class="btn btn-block btn-primary" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')"   >
                                            <i class="fas fa-edit" style="color: white"></i>
                                        </a>
                                    </td>
                                    <td> 
                                        <a type="button" class="btn btn-block btn-success" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')"   >
                                            <i class="fas fa-car" style="color: white"></i>
                                        </a>
                                    </td>
                                    <td> 
                                        <a type="button" class="btn btn-block btn-danger" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')"   >
                                            <i class="fas fa-trash" style="color: white"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>¡¡¡VAMONOS A ORIENTE - VOLCAN DE CONCHAGUA!!!</td>
                                    <td>FECHA: 22 DE FEBRERO DE 2020</td>
                                    <td>Nacional>
                                    <td> 
                                        <a type="button" class="btn btn-block btn-primary" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')"   >
                                            <i class="fas fa-edit" style="color: white"></i>
                                        </a>
                                    </td>
                                    <td> 
                                        <a type="button" class="btn btn-block btn-success" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')"   >
                                            <i class="fas fa-car" style="color: white"></i>
                                        </a>
                                    </td>
                                    <td> 
                                        <a type="button" class="btn btn-block btn-danger" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')"   >
                                            <i class="fas fa-trash" style="color: white"></i>
                                        </a>
                                    </td>
                                </tr>
                                
                                 <tr>
                                    <td>VÁMONOS A NICARAGUA</td>
                                    <td>DEL 4 AL 8 DE ABRIL 2020</td>
                                    <td>Internacional</td>
                                    <td> 
                                        <a type="button" class="btn btn-block btn-primary" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')"   >
                                            <i class="fas fa-edit" style="color: white"></i>
                                        </a>
                                    </td>
                                    <td> 
                                        <a type="button" class="btn btn-block btn-success" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')"   >
                                            <i class="fas fa-car" style="color: white"></i>
                                        </a>
                                    </td>
                                    <td> 
                                        <a type="button" class="btn btn-block btn-danger" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')"   >
                                            <i class="fas fa-trash" style="color: white"></i>
                                        </a>
                                    </td>
                                </tr>
                                
                                
                                 <tr>
                                    <td>¡ ¡ ¡ VÁMONOS A MACHUPICCHU !!!</td>
                                    <td>FECHA: Paquete disponible año 2020</td>
                                    <td>Internacional</td>
                                    <td> 
                                        <a type="button" class="btn btn-block btn-primary" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')"   >
                                            <i class="fas fa-edit" style="color: white"></i>
                                        </a>
                                    </td>
                                    <td> 
                                        <a type="button" class="btn btn-block btn-success" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')"   >
                                            <i class="fas fa-car" style="color: white"></i>
                                        </a>
                                    </td>
                                    <td> 
                                        <a type="button" class="btn btn-block btn-danger" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')"   >
                                            <i class="fas fa-trash" style="color: white"></i>
                                        </a>
                                    </td>
                                </tr>
                                
                                 <tr>
                                    <td>¡¡¡ TOURS A PARADISIACA ROATÁN!!! </td>
                                    <td>02 AL 05 DE ENERO</td>
                                    <td>Internacional</td>
                                    <td> 
                                        <a type="button" class="btn btn-block btn-primary" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')"   >
                                            <i class="fas fa-edit" style="color: white"></i>
                                        </a>
                                    </td>
                                    <td> 
                                        <a type="button" class="btn btn-block btn-success" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')"   >
                                            <i class="fas fa-car" style="color: white"></i>
                                        </a>
                                    </td>
                                    <td> 
                                        <a type="button" class="btn btn-block btn-danger" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')"   >
                                            <i class="fas fa-trash" style="color: white"></i>
                                        </a>
                                    </td>
                                </tr>
                                
                                 <tr>
                                    <td>VÁMONOS AL FESTIVAL DE LAS FLORES A GUATEMALA</td>
                                    <td>DEL 16 AL 17 DE NOVIEMBRE  2019</td>
                                    <td>Nacional</td>
                                    <td> 
                                        <a type="button" class="btn btn-block btn-primary" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')"   >
                                            <i class="fas fa-edit" style="color: white"></i>
                                        </a>
                                    </td>
                                    <td> 
                                        <a type="button" class="btn btn-block btn-success" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')"   >
                                            <i class="fas fa-car" style="color: white"></i>
                                        </a>
                                    </td>
                                    <td> 
                                        <a type="button" class="btn btn-block btn-danger" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')"   >
                                            <i class="fas fa-trash" style="color: white"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            
                            
                            
                            <tfoot>
                                <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                    <th>CSS grade</th>
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



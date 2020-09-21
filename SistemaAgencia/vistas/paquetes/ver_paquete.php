<?php
include_once '../../config/parametros.php';
include_once '../../plantillas/cabecera.php';
include_once  '../../plantillas/navbar.php';
  include_once '../../plantillas/barra_lateral.php';
?>


<div class="content-wrapper" style="min-height: 1185.73px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                     <h1>Paquete Activos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Paquetes</li>
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
                       <h3 class="card-title">Próximos Paquete</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="paquetes_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="paquetes" class="table table-bordered table-striped dataTable dtr-inline"
                                        role="grid" aria-describedby="paquetes_info">
                                        <thead>
                                            <tr role="row" style="text-align: center;">
                                                <th class="sorting_asc" tabindex="0" aria-controls="catalogo_cliente"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Rendering engine: activate to sort column descending">Nombre del Paquete</th>
                                                <th class="sorting" tabindex="0" aria-controls="catalogo_cliente" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending">Fecha de salida</th>
                                                <th class="sorting" tabindex="0" aria-controls="catalogo_cliente" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Platform(s): activate to sort column ascending">Tipo</th>
                                                <th class="sorting" tabindex="0" aria-controls="catalogo_cliente" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Engine version: activate to sort column ascending">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                    <td>!VAMONOS A COSTA RICA¡</td>
                                    <td>DEL 4 AL 9 DE ABRIL 2019</td>
                                    <td>Internacional</td>
                                    <td> 
                                        <div class="btn-group">
                                            <a type="button" class="btn btn-primary" href="<?= $base_url ?>vistas/tours/editar_tour.php">
                                                <i class="fas fa-edit" style="color: white"></i>
                                            </a>

                                            <a type="button" class="btn btn-danger" href="<?= $base_url ?>vistas/tours/editar_tour.php">
                                                <i class="fas fa-trash" style="color: white"></i>
                                            </a>
                                            <a type="button" class="btn btn-warning" href="<?= $base_url ?>vistas/tours/itinerario.php">
                                                <i class="fas fa-long-arrow-alt-down" style="color: white"></i>
                                            </a>

                                            <a type="button" class="btn btn-success" href="<?= $base_url ?>vistas/tours/itinerario.php">
                                                <i class="fas fa-car" style="color: white"></i>
                                            </a>


                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>¡¡¡ TOURS A PARADISIACA ROATÁN!!! </td>
                                    <td>02 AL 05 DE ENERO</td>
                                    <td>Internacional</td>
                                    <td> 
                                        <div class="btn-group">
                                            <a type="button" class="btn btn-primary" href="<?= $base_url ?>vistas/tours/editar_tour.php">
                                                <i class="fas fa-edit" style="color: white"></i>
                                            </a>

                                            <a type="button" class="btn btn-danger" href="<?= $base_url ?>vistas/tours/editar_tour.php">
                                                <i class="fas fa-trash" style="color: white"></i>
                                            </a>
                                            <a type="button" class="btn btn-warning" href="<?= $base_url ?>vistas/tours/itinerario.php">
                                                <i class="fas fa-long-arrow-alt-down" style="color: white"></i>
                                            </a>

                                            <a type="button" class="btn btn-success" href="<?= $base_url ?>vistas/tours/itinerario.php">
                                                <i class="fas fa-car" style="color: white"></i>
                                            </a>


                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>VÁMONOS AL FESTIVAL DE LAS FLORES A GUATEMALA</td>
                                    <td>DEL 16 AL 17 DE NOVIEMBRE  2019</td>
                                    <td>Nacional</td>
                                    <td> 
                                        <div class="btn-group">
                                            <a type="button" class="btn btn-primary" href="<?= $base_url ?>vistas/tours/editar_tour.php">
                                                <i class="fas fa-edit" style="color: white"></i>
                                            </a>

                                            <a type="button" class="btn btn-danger" href="<?= $base_url ?>vistas/tours/editar_tour.php">
                                                <i class="fas fa-trash" style="color: white"></i>
                                            </a>
                                            <a type="button" class="btn btn-warning" href="<?= $base_url ?>vistas/tours/itinerario.php">
                                                <i class="fas fa-long-arrow-alt-down" style="color: white"></i>
                                            </a>

                                            <a type="button" class="btn btn-success" href="<?= $base_url ?>vistas/tours/itinerario.php">
                                                <i class="fas fa-car" style="color: white"></i>
                                            </a>


                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>!VAMONOS A COSTA RICA¡</td>
                                    <td>DEL 4 AL 9 DE ABRIL 2019</td>
                                    <td>Internacional</td>
                                   <td> 
                                        <div class="btn-group">
                                            <a type="button" class="btn btn-primary" href="<?= $base_url ?>vistas/tours/editar_tour.php">
                                                <i class="fas fa-edit" style="color: white"></i>
                                            </a>

                                            <a type="button" class="btn btn-danger" href="<?= $base_url ?>vistas/tours/editar_tour.php">
                                                <i class="fas fa-trash" style="color: white"></i>
                                            </a>
                                            <a type="button" class="btn btn-warning" href="<?= $base_url ?>vistas/tours/itinerario.php">
                                                <i class="fas fa-long-arrow-alt-down" style="color: white"></i>
                                            </a>

                                            <a type="button" class="btn btn-success" href="<?= $base_url ?>vistas/tours/itinerario.php">
                                                <i class="fas fa-car" style="color: white"></i>
                                            </a>


                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>¡¡¡VAMONOS A ORIENTE - VOLCAN DE CONCHAGUA!!!</td>
                                    <td>FECHA: 22 DE FEBRERO DE 2020</td>
                                    <td>Nacional</td>
                                   <td> 
                                        <div class="btn-group">
                                            <a type="button" class="btn btn-primary" href="<?= $base_url ?>vistas/tours/editar_tour.php">
                                                <i class="fas fa-edit" style="color: white"></i>
                                            </a>

                                            <a type="button" class="btn btn-danger" href="<?= $base_url ?>vistas/tours/editar_tour.php">
                                                <i class="fas fa-trash" style="color: white"></i>
                                            </a>
                                            <a type="button" class="btn btn-warning" href="<?= $base_url ?>vistas/tours/itinerario.php">
                                                <i class="fas fa-long-arrow-alt-down" style="color: white"></i>
                                            </a>

                                            <a type="button" class="btn btn-success" href="<?= $base_url ?>vistas/tours/itinerario.php">
                                                <i class="fas fa-car" style="color: white"></i>
                                            </a>


                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>VÁMONOS A NICARAGUA</td>
                                    <td>DEL 4 AL 8 DE ABRIL 2020</td>
                                    <td>Internacional</td>
                                    <td> 
                                        <div class="btn-group">
                                            <a type="button" class="btn btn-primary" href="<?= $base_url ?>vistas/tours/editar_tour.php">
                                                <i class="fas fa-edit" style="color: white"></i>
                                            </a>

                                            <a type="button" class="btn btn-danger" href="<?= $base_url ?>vistas/tours/editar_tour.php">
                                                <i class="fas fa-trash" style="color: white"></i>
                                            </a>
                                            <a type="button" class="btn btn-warning" href="<?= $base_url ?>vistas/tours/itinerario.php">
                                                <i class="fas fa-long-arrow-alt-down" style="color: white"></i>
                                            </a>

                                            <a type="button" class="btn btn-success" href="<?= $base_url ?>vistas/tours/itinerario.php">
                                                <i class="fas fa-car" style="color: white"></i>
                                            </a>


                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>¡ ¡ ¡ VÁMONOS A MACHUPICCHU !!!</td>
                                    <td>FECHA: Paquete disponible año 2020</td>
                                    <td>Internacional</td>
                                    <td> 
                                         <div class="btn-group">
                                            <a type="button" class="btn btn-primary" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/paquetes/editar_paquete.php')"   >
                                                <i class="fas fa-edit" style="color: white"></i>
                                            </a>

                                            <a type="button" class="btn btn-danger" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/paquetes/editar_paquete.php')"   >
                                                <i class="fas fa-trash" style="color: white"></i>
                                            </a>
                                            <a type="button" class="btn btn-warning" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>../../vistas/paquetes/itinerario.php')"   >
                                                <i class="fas fa-long-arrow-alt-down" style="color: white"></i>
                                            </a>

                                            <a type="button" class="btn btn-success" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>../../vistas/paquetes/itinerario.php')"   >
                                                <i class="fas fa-car" style="color: white"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>¡¡¡ TOURS A PARADISIACA ROATÁN!!! </td>
                                    <td>02 AL 05 DE ENERO</td>
                                    <td>Internacional</td>
                                    <td> 
                                        <div class="btn-group">
                                            <a type="button" class="btn btn-primary" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/paquetes/editar_paquete.php')"   >
                                                <i class="fas fa-edit" style="color: white"></i>
                                            </a>

                                            <a type="button" class="btn btn-danger" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/paquetes/editar_paquete.php')"   >
                                                <i class="fas fa-trash" style="color: white"></i>
                                            </a>
                                            <a type="button" class="btn btn-warning" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>../../vistas/paquetes/itinerario.php')"   >
                                                <i class="fas fa-long-arrow-alt-down" style="color: white"></i>
                                            </a>

                                            <a type="button" class="btn btn-success" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>../../vistas/paquetes/itinerario.php')"   >
                                                <i class="fas fa-car" style="color: white"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>VÁMONOS AL FESTIVAL DE LAS FLORES A GUATEMALA</td>
                                    <td>DEL 16 AL 17 DE NOVIEMBRE  2019</td>
                                    <td>Nacional</td>
                                    <td> 
                                         <div class="btn-group">
                                            <a type="button" class="btn btn-primary" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/paquetes/editar_paquete.php')"   >
                                                <i class="fas fa-edit" style="color: white"></i>
                                            </a>

                                            <a type="button" class="btn btn-danger" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/paquetes/editar_paquete.php')"   >
                                                <i class="fas fa-trash" style="color: white"></i>
                                            </a>
                                            <a type="button" class="btn btn-warning" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>../../vistas/paquetes/itinerario.php')"   >
                                                <i class="fas fa-long-arrow-alt-down" style="color: white"></i>
                                            </a>

                                            <a type="button" class="btn btn-success" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>../../vistas/paquetes/itinerario.php')"   >
                                                <i class="fas fa-car" style="color: white"></i>
                                            </a>
                                        </div>
                                    </td>

                                <tr>
                                    <td>!VAMONOS A COSTA RICA¡</td>
                                    <td>DEL 4 AL 9 DE ABRIL 2019</td>
                                    <td>Internacional</td>
                                    <td > 
                                        <div class="btn-group ">
                                            <a type="button" class="btn btn-primary" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')"   >
                                                <i class="fas fa-edit" style="color: white"></i>
                                            </a>

                                            <a type="button" class="btn btn-danger" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')"   >
                                                <i class="fas fa-trash" style="color: white"></i>
                                            </a>

                                            <a type="button" class="btn btn-warning" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')"   >
                                                <i class="fas fa-long-arrow-alt-down" style="color: white"></i>
                                            </a>
                                            <a type="button" class="btn btn-success" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')"   >
                                                <i class="fas fa-car" style="color: white"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                               
                               
                                <tr>
                                    <td>¡ ¡ ¡ VÁMONOS A MACHUPICCHU !!!</td>
                                    <td>FECHA: Paquete disponible año 2020</td>
                                    <td>Internacional</td>
                                    <td> 
                                        <div class="btn-group">
                                            <a type="button" class="btn btn-primary" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')"   >
                                                <i class="fas fa-edit" style="color: white"></i>
                                            </a>

                                            <a type="button" class="btn btn-danger" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')"   >
                                                <i class="fas fa-trash" style="color: white"></i>
                                            </a>
                                            <a type="button" class="btn btn-warning" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')"   >
                                                <i class="fas fa-long-arrow-alt-down" style="color: white"></i>
                                            </a>

                                            <a type="button" class="btn btn-success" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')"   >
                                                <i class="fas fa-car" style="color: white"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>¡¡¡ TOURS A PARADISIACA ROATÁN!!! </td>
                                    <td>02 AL 05 DE ENERO</td>
                                    <td>Internacional</td>
                                    <td> 
                                        <div class="btn-group">
                                            <a type="button" class="btn btn-primary" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')"   >
                                                <i class="fas fa-edit" style="color: white"></i>
                                            </a>

                                            <a type="button" class="btn btn-danger" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')"   >
                                                <i class="fas fa-trash" style="color: white"></i>
                                            </a>

                                            <a type="button" class="btn btn-warning" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')"   >
                                                <i class="fas fa-long-arrow-alt-down" style="color: white"></i>
                                            </a>
                                            <a type="button" class="btn btn-success" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')"   >
                                                <i class="fas fa-car" style="color: white"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>VÁMONOS AL FESTIVAL DE LAS FLORES A GUATEMALA</td>
                                    <td>DEL 16 AL 17 DE NOVIEMBRE  2019</td>
                                    <td>Nacional</td>
                                    <td> 
                                        <div class="btn-group">
                                            <a type="button" class="btn btn-primary" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')"   >
                                                <i class="fas fa-edit" style="color: white"></i>
                                            </a>

                                            <a type="button" class="btn btn-danger" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/editar_tour.php')"   >
                                                <i class="fas fa-trash" style="color: white"></i>
                                            </a>

                                            <a type="button" class="btn btn-warning" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')"   >
                                                <i class="fas fa-long-arrow-alt-down" style="color: white"></i>
                                            </a>
                                            <a type="button" class="btn btn-success" onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/tours/itinerario.php')"   >
                                                <i class="fas fa-car" style="color: white"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr style="text-align: center;">
                                                <th rowspan="1" colspan="1">Nombre del Paquete</th>
                                                <th rowspan="1" colspan="1">Fecha de salida</th>
                                                <th rowspan="1" colspan="1">Tipo</th>
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





<?php
  include_once '../../plantillas/footer.php';
?>

<script>
$(function() {
    $("#paquetes").DataTable({
        "responsive": true,
        "autoWidth": false,
    });
   
});
</script>
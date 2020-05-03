<?php
include_once '../../config/parametros.php';
$algo="Mande parametros por a URL";
?>

<div class="content-wrapper" style="min-height: 1185.73px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Modificar Encomienda</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Modificación de Encomienda</li>
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
                        <h3 class="card-title">Datos de la Encomienda</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                                           role="grid" aria-describedby="example1_info">
                                        <thead>
                                            <tr role="row" style="text-align: center;">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example1"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Rendering engine: activate to sort column descending">
                                                    Nombre</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending">
                                                    Apellidos</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Platform(s): activate to sort column ascending">
                                                    Dirección</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Engine version: activate to sort column ascending">
                                                    Destino Final</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="CSS grade: activate to sort column ascending">Acciones
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr role="row" class="odd" style="text-align: center;">
                                                <td tabindex="0" class="sorting_1">Jeronimo</td>
                                                <td>Lovato Villatoro</td>
                                                <td>San Vicente</td>
                                                <td>Chalatenango</td>
                                                <td>
                                                    <div class="btn-group">
                                                         <a type="button" class="btn btn-primary" 
                                                            onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/cargoExpress/modificarEncomienda.php')"   >
                                                            <i class="fas fa-edit" style="color: white"></i>
                                                        </a>
                                                        <button type="button" class="btn btn-danger"><i
                                                                class="fas fa-trash-alt"></i></button>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr role="row" class="even" style="text-align: center;">
                                                <td tabindex="0" class="sorting_1">Elias Eliseo</td>
                                                <td>Herrera Henriquez</td>
                                                <td>Ilopango</td>
                                                <td>San Vicente</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a type="button" class="btn btn-primary" 
                                                           onclick="cargar_contenido('contenido_principal', '<?= $base_url ?>vistas/cargoExpress/modificarEncomienda.php')"   >
                                                            <i class="fas fa-edit" style="color: white"></i>
                                                        </a>
                                                        <button type="button" class="btn btn-danger"><i
                                                                class="fas fa-trash-alt"></i></button>

                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr style="text-align: center;">
                                                <th rowspan="1" colspan="1">Nombre</th>
                                                <th rowspan="1" colspan="1">Apellidos</th>
                                                <th rowspan="1" colspan="1">Dirección</th>
                                                <th rowspan="1" colspan="1">Destino Final</th>
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

<script>
                                                    $(function () {
                                                        $('#example1').DataTable({
                                                            "paging": true,
                                                            "lengthChange": true,
                                                            "searching": true,
                                                            "ordering": true,
                                                            "info": true,
                                                            "autoWidth": false,
                                                            "pageLength": 3,
                                                            "responsive": true,
                                                            "oLanguage": {
                                                                "sZeroRecords": "No se encontraron resultados",
                                                                "sEmptyTable": "Ningún dato disponible en esta tabla",
                                                                "sInfo": "Mostrando del (_START_ al _END_) de _TOTAL_ registros",
                                                                "sInfoEmpty": "Mostrando del 0 al 0  de 0 registros",
                                                                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                                                                "sInfoPostFix": "",
                                                                "sSearch": "Buscar:",
                                                                "sLengthMenu": "Mostrar _MENU_ Entradas",
                                                                "sUrl": "",
                                                                "sInfoThousands": ",",
                                                                "sLoadingRecords": "Por favor espere - cargando...",
                                                                "oPaginate": {
                                                                    "sFirst": "Primero",
                                                                    "sLast": "Último",
                                                                    "sNext": "Siguiente",
                                                                    "sPrevious": "Anterior"
                                                                },
                                                                "oAria": {
                                                                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                                                                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                                                                }
                                                            }
                                                        });
                                                    });

</script>
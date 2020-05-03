<?php
include_once '../../config/parametros.php';
?>

<div class="content-wrapper" style="min-height: 1185.73px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Mantenimiento de Vehiculos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Mantenimiento</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="row">
            <div class="col-12">


                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Datos Generales</h3>
                    </div>
                    <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                                           role="grid" aria-describedby="example1_info">
                                        <thead>
                                            <tr role="row" style="text-align: center;">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-sort="ascending"
                                                    aria-label="Rendering engine: activate to sort column descending">
                                                    Vehículo</th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-sort="ascending"
                                                    aria-label="Rendering engine: activate to sort column descending">
                                                    Placa</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending">
                                                    Fecha</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending">
                                                    Lugar</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                                    Servicio Realizado</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Engine version: activate to sort column ascending">
                                                    Costo</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Engine version: activate to sort column ascending">
                                                    Comentarios</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                    Acciones
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr role="row" class="odd" style="text-align: center;">
                                                <td tabindex="0" class="sorting_1">Hyundai Elantra</td>
                                                <td>AA12345</td>
                                                <td>26/04/2020</td>
                                                <td>Econoparts</td>
                                                <td>
                                                    <span class="badge bg-teal">Cambio de Aceite</span><br>
                                                    <span class="badge bg-secondary">Reemplazo de
                                                        Llanta</span><br>
                                                    <span class="badge bg-olive">Lavado</span>
                                                </td>
                                                <td>$60.75</td>
                                                <td>ninguno</td>
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
                                                <th rowspan="1" colspan="1">Vehiculo</th>
                                                <th rowspan="1" colspan="1">Placa</th>
                                                <th rowspan="1" colspan="1">Fecha</th>
                                                <th rowspan="1" colspan="1">Lugar</th>
                                                <th rowspan="1" colspan="1">Servicio Realizado</th>
                                                <th rowspan="1" colspan="1">Costo</th>
                                                <th rowspan="1" colspan="1">Comentarios</th>
                                                <th rowspan="1" colspan="1">Acciones</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled" id="example1_previous">
                                                <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0"
                                                   class="page-link">Anterior</a>
                                            </li>
                                            <li class="paginate_button page-item active"><a href="#"
                                                                                            aria-controls="example1" data-dt-idx="1" tabindex="0"
                                                                                            class="page-link">1</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                                                                      data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                                                                      data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                                                                      data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                                                                      data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                                                                      data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                            <li class="paginate_button page-item next" id="example1_next"><a href="#"
                                                                                                             aria-controls="example1" data-dt-idx="7" tabindex="0"
                                                                                                             class="page-link">Siguiente</a></li>
                                        </ul>
                                    </div>
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
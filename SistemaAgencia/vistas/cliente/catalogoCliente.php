<?php
include_once '../../config/parametros.php';
?>
<!-- DataTables -->
<link rel="stylesheet"
    href="http://localhost/Plantillas/SistemaAgencia/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet"
    href="http://localhost/Plantillas/SistemaAgencia/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

<div class="content-wrapper" style="min-height: 1185.73px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Catalogo de Clientes</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Catalogo de Clientes</li>
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
                        <h3 class="card-title">Datos Personales</h3>
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
                                                    Documento de Identidad</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Engine version: activate to sort column ascending">
                                                    Correo Electronico</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="CSS grade: activate to sort column ascending">Acciones
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr role="row" class="odd" style="text-align: center;">
                                                <td tabindex="0" class="sorting_1">Abigail</td>
                                                <td>Pineda Henriquez</td>
                                                <td>12345678-9</td>
                                                <td>pineverdi@gmail.com</td>
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
                                            <tr role="row" class="even" style="text-align: center;">
                                            <td tabindex="0" class="sorting_1">Edwin Sebastian</td>
                                                <td>Martinez Castillo</td>
                                                <td>12345678-9</td>
                                                <td>pineverdi@gmail.com</td>
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
                                            <tr role="row" class="odd" style="text-align: center;">
                                            <td tabindex="0" class="sorting_1">Felipa Argelia </td>
                                                <td>Aguilar</td>
                                                <td>12345678-9</td>
                                                <td>pineverdi@gmail.com</td>
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
                                            <tr role="row" class="even" style="text-align: center;">
                                            <td tabindex="0" class="sorting_1">Wendy Noemi</td>
                                                <td>Solis Aguilar</td>
                                                <td>12345678-9</td>
                                                <td>pineverdi@gmail.com</td>
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
                                            <tr role="row" class="odd" style="text-align: center;">
                                            <td tabindex="0" class="sorting_1">Aida Luz</td>
                                                <td>Argueta Rivas</td>
                                                <td>12345678-9</td>
                                                <td>pineverdi@gmail.com</td>
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
                                            <tr role="row" class="even" style="text-align: center;">
                                            <td tabindex="0" class="sorting_1">Karla Maria</td>
                                                <td>Hernandez Guzman</td>
                                                <td>12345678-9</td>
                                                <td>pineverdi@gmail.com</td>
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
                                            <tr role="row" class="odd" style="text-align: center;">
                                            <td tabindex="0" class="sorting_1">Evelin Carolina</td>
                                                <td>Manzano de Gomez</td>
                                                <td>12345678-9</td>
                                                <td>pineverdi@gmail.com</td>
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
                                            <tr role="row" class="even" style="text-align: center;">
                                            <td tabindex="0" class="sorting_1">Jose Benedicto </td>
                                                <td>Almendares Flores</td>
                                                <td>12345678-9</td>
                                                <td>pineverdi@gmail.com</td>
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
                                            <tr role="row" class="odd" style="text-align: center;">
                                            <td tabindex="0" class="sorting_1">Miguel</td>
                                                <td>Carrillo Alvarez</td>
                                                <td>12345678-9</td>
                                                <td>pineverdi@gmail.com</td>
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
                                            <tr role="row" class="even" style="text-align: center;">
                                            <td tabindex="0" class="sorting_1">Vanessa Alejandra</td>
                                                <td>Tamayo</td>
                                                <td>12345678-9</td>
                                                <td>pineverdi@gmail.com</td>
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
                                            <tr role="row" class="even" style="text-align: center;">
                                            <td tabindex="0" class="sorting_1">Elias Eliseo</td>
                                                <td>Herrera Henriquez</td>
                                                <td>12345678-9</td>
                                                <td>pineverdi@gmail.com</td>
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
                                                <th rowspan="1" colspan="1">Apellidos</th>
                                                <th rowspan="1" colspan="1">Documento de Identidad</th>
                                                <th rowspan="1" colspan="1">Correo Electronico</th>
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

<!-- DataTables -->
<script src="http://localhost/Plantillas/SistemaAgencia/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="http://localhost/Plantillas/SistemaAgencia/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js">
</script>
<script src="http://localhost/Plantillas/SistemaAgencia/plugins/datatables-responsive/js/dataTables.responsive.min.js">
</script>
<script src="http://localhost/Plantillas/SistemaAgencia/plugins/datatables-responsive/js/responsive.bootstrap4.min.js">
</script>

<script>
$(function() {
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
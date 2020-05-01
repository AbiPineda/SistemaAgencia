<?php
include_once '../../config/parametros.php';
?>
<!-- DataTables -->
<link rel="stylesheet"
      href=<?=$base_url?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet"
      href="<?=$base_url?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="<?= $base_url ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">

<div class="content-wrapper" style="min-height: 1185.73px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Registro de Encomienda</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Registro</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="timeline">
                    <!-- timeline time label -->
                    <div class="time-label">
                        <span class="bg-red">Información</span>
                    </div>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <div>
                        <i class="fas fa-users bg-blue"></i>
                        <div class="timeline-item">

                            <h3 class="timeline-header"><a href="#">Datos Personales</a></h3>

                            <div class="timeline-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="cars">Seleccione el Cliente:</label>

                                            <select id="categoria" class="form-control">
                                                <option value="permitido">Jessenia Corinca</option>
                                                <option value="no">Jenny Orellana</option>
                                                <option value="no">Judith Hernández</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="cars">Seleccione el Producto:</label>

                                            <select id="categoria" class="form-control">
                                                <option value="permitido">Acetaminofén</option>
                                                <option value="no">Jeringas</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Dirección</label>
                                            <input type="text" class="form-control"
                                                   placeholder="Introduzca la dirección">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Destino Final</label>
                                            <input type="text" class="form-control"
                                                   placeholder="Introduzca el destino final">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Costo</label>
                                            <input type="number" class="form-control" placeholder="Calculado...">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Cantidad</label>
                                            <input type="number" class="form-control" placeholder="Depende el producto">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Estado</label>
                                            <select id="categoria" class="form-control">
                                                <option value="permitido">Enviado</option>
                                                <option value="no">Otros </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Fecha</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-footer" style="text-align: right;">
                                    <a class="btn btn-primary btn-sm" style="color: white">Agregar</a>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <div>
                        <i class="fas fa-user bg-green"></i>
                        <div class="timeline-item">

                            <h3 class="timeline-header no-border"><a href="#">Agregando Información</a></h3>
                            <div class="timeline-body">
                                <div class="row">
                                    <div class="col-sm-12">

                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                                <tr style="text-align: center;">
                                                    <th>Producto</th>
                                                    <th>Costo</th>
                                                    <th>Cantidad</th>
                                                    <th>Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr style="text-align: center;">
                                                    <td>Acetaminofén</td>
                                                    <td>$48.20</td>
                                                    <td>2 Lbs</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-danger"><i
                                                                    class="fas fa-trash-alt"></i></button>

                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr style="text-align: center;">
                                                    <td>Jeringas</td>
                                                    <td>$35.89</td>
                                                    <td>15 Jerigas</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-danger"><i
                                                                    class="fas fa-trash-alt"></i></button>

                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>

                                    <div class="col-sm-12">
                                        <div style="text-align: right;width:475px;margin-top: 27px;">
                                            <label> Total de Encomienda: </label> <label> $84.09</label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="timeline-footer" style="text-align: right;">
                                <a class="btn btn-primary btn-sm" style="color: white">Guardar</a>
                                <a class="btn btn-danger btn-sm" style="color: white">Cancelar</a>
                            </div>
                        </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline item -->

                </div>
                <!-- END timeline item -->
            </div>
        </div>
    </section>
</div>



<!-- formulario mantenimiento -->
<!-- /.card-header -->

<!-- DataTables -->
<script src="<?=$base_url?>plugins/datatables/jquery.dataTables.min.js">
</script>
<script
    src="<?=$base_url?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js">
</script>
<script
    src="<?=$base_url?>plugins/datatables-responsive/js/dataTables.responsive.min.js">
</script>
<script
    src="<?=$base_url?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js">
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</script>

<script type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
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
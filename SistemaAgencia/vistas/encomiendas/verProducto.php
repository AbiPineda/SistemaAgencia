<?php
include_once '../../config/parametros.php';
include_once '../../plantillas/cabecera.php';?>
<!-- COLOCAR ESTILOS ADICIONALES AQUI -->
<link href="<?= $base_url ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" all rel="stylesheet" type="text/css" />
<?php
include_once  '../../plantillas/navbar.php';
include_once '../../plantillas/barra_lateral.php';

?>

<div class="content-wrapper" style="min-height: 1185.73px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Modificar Producto</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Modificación de producto</li>
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
                     <!--para filtrar los productos activos e inactivos-->
                <div class="card-header">
                  <div class="row">
                     <div class="form-check mx-auto">
                        <input class="form-check-input" type="radio" name="radioProducto" id="radioUsuarioCliente"
                           value="activo" checked>
                        <label class="form-check-label" for="radioProductoActivo">
                           PRODUCTOS ACTIVOS
                        </label>
                     </div>
                     <div class="form-check mx-auto">
                        <input class="form-check-input" type="radio" name="radioProducto" id="radioUsuarioInactivo"
                           value="inactivo">
                        <label class="form-check-label" for="radioProductoInactivo">
                           PRODUCTOS INACTIVOS
                        </label>
                     </div>
                  </div>
               </div>
               <!-- /.card-header -->
<!--*******************************fin de filtrar esos productos***-->
                    <div class="card-header">
                        <h3 class="card-title">Datos de los productos</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                          <div id="" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="tabla_productosMo" class="table table-bordered table-striped">
                                        <thead style="text-align: center;">
                                            <tr>
                                                <th>Producto</th>
                                                <th>Tarifa($)</th>
                                                <th>Unidad de medida</th>
                                                <th>Acciones</th>
                                                <th>estado</th>
                                            </tr>
                                        </thead>
                                        <!-- /.inicio de loading -->
                                        <div class="overlay-wrapper">
                                            <div id="loading" class="overlay"><i
                                                    class="fas fa-3x fa-sync-alt fa-spin"></i>

                                                <div class="text-bold pt-2">Cargando...
                                                </div>
                                            </div>
                                            <tbody id="tableBody" style="text-align: center;">
                                            </tbody>
                                        </div>
                                        <!-- /.fin de loading -->

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

            <!--modal alternativo para modificar producto-->
    <div class="modal fade" id="modificacion-producto" tabindex="-1" role="dialog" aria-labelledby="modal-eventLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Modificar producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="register-form" name="register-form" onsubmit="return false" role="form">
                <div class="modal-body">
               <div class="row">
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-9">
                                            <div class="form-group">
                                                <form id="task-form">
                                                    <div class="form-group">
                                                        <label>Nombre Producto</label>
                                                        <input type="text" name="nombre_producto" id="producto" placeholder="Producto" class="form-control">
                                                        <input type="hidden" name="id_producto" id="id_producto">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tarifa</label>
                                                        <input type="text" name="tarifa" id="tarifa" placeholder="tarifa" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                    <label>Unidad de medida</label>
                                                    <select class="form-control" name="unidades_medidas" id="unidades">
                                                    <option value="">Seleccione</option>
                                                    <option value="lbs">Libras</option>
                                                    <option value="unidad">Unidades</option>
                                                      </select>
                                                        
                                                    </div>
                                                   
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btnActualizarProducto" class="btn btn-primary btn-sm" style="color: white">Actualizar</button>
                    <button type="button" class="btn btn-danger btn-sm" style="color: white" data-dismiss="modal">Cancelar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--fin de modal de enventos-->

    </section>
    <!-- /.content -->
</div>


<?php
  include_once '../../plantillas/footer.php';
?>
<!-- SCRIPT ADICIONALES -->
<script type="text/javascript" src="<?= $base_url?>js/controladores/conf.js"></script>>
<script type="text/javascript" src="<?= $base_url?>js/controladores/encomienda/tabla-product.js"></script>
<!-- jquery-validation -->
<script src="<?= $base_url ?>plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= $base_url ?>plugins/jquery-validation/additional-methods.min.js"></script>
<script src="<?= $base_url ?>plugins/sweetalert2/sweetalert2.min.js"></script>


<!-- CIERRE DE ETIQUETAS -->
<?php include_once '../../plantillas/cierre.php'; ?>
<?php
include_once '../../config/parametros.php';
include_once '../../plantillas/cabecera.php';
?>

<link href="<?= $base_url ?>plugins/subir-foto/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<link href="<?= $base_url ?>plugins/subir-foto/css/avatar.css" media="all" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
<link href="<?= $base_url ?>plugins/subir-foto/themes/explorer-fas/theme.css" media="all" rel="stylesheet"
    type="text/css" />

<?php include_once  '../../plantillas/navbar.php'; ?> <?php include_once '../../plantillas/barra_lateral.php'; ?>

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
                    <div>
                        <i class="fas fa-comments bg-gradient-blue"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header"><a href="#">Datos del Cliente</a></h3>
                            <div class="timeline-body" style="margin-top: -9px;">
                                <!--Una fila para jugar-->
                                <form id="cliente-form" name="recargar-form" onsubmit="return false">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group multiple-form-group input-group">
                                                <label>Cliente</label>
                                                <div class="input-group">
                                                    <select name="id_cliente" id="cliente"
                                                        class="select2 select2-hidden-accessible form-control"
                                                        data-placeholder="Seleccione" style="width: 100%;">
                                                    </select>
                                                    <input type="hidden" name="estado" id="estado" value="Enviado">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!--fin de Una fila para jugar-->
                            </div>
                        </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <div id="formulario">
                        <i class="fas fa-box-open bg-green"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header"><a href="#">Registro de encomienda</a></h3>

                            <div class="timeline-body">
                                <form id="encomienda-form" name="register-form" onsubmit="return false">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group multiple-form-group input-group">
                                                <label>Departamento</label>
                                                <div class="input-group">
                                                    <select name="depto" id="depto"
                                                        class="select2 select2-hidden-accessible form-control"
                                                        data-placeholder="Seleccione Departamento" style="width: 100%;">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group multiple-form-group input-group">
                                                <label>Municipio</label>
                                                <div class="input-group">
                                                    <select name="id_municipios" id="id_municipios"
                                                        class="select2 select2-hidden-accessible form-control"
                                                        data-placeholder="Seleccione Municipio" style="width: 100%;">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <label>Coordenadas</label>
                                                <div class="input-group">
                                                    <input disabled type="text" class="form-control" name="coordenadas"
                                                        id="coordenadas">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <br>
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-success btn-add" name="btn-mapa"
                                                    style="margin-top: 8px; width: 100%; height: 37px;" id="btn-mapa">
                                                    <i class="fas fa-globe" style="color: white"></i>
                                                </button>
                                            </span>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Dirección</label>
                                                <input name="direccion" id="direccion" type="text" class="form-control"
                                                    placeholder="Introduzca la Dirección">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Punto de referencia</label>
                                                <input name="punto_referencia" id="punto_referencia" type="text"
                                                    class="form-control"
                                                    placeholder="Introduzca el punto de referencia">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Fecha</label>
                                                <input name="fecha" id="fecha" type="date" class="form-control"
                                                    placeholder="Introduzca el punto de referencia">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group multiple-form-group input-group">
                                                <label>Producto</label>
                                                <div class="input-group">
                                                    <select name="producto" id="id_producto"
                                                        class="select2 select2-hidden-accessible form-control"
                                                        data-placeholder="Seleccione Producto" style="width: 100%;">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <br>
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-success btn-add" id="producto-add"
                                                    name="" style="margin-top: 10px; width: 100%;">+</button>
                                            </span>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="cars">Costo($)</label>
                                                <input name="costo" id="costo" type="text" disabled class="form-control"
                                                    placeholder="Costo">
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group" id="mostrar">

                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="row">
                                            <div class="col-sm-12">

                                                <label>Seleccione Imagenes</label>
                                                <div class="file-loading">
                                                    <input type="file" multiple name="fotos[]" id="fotos">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timeline-footer" style="text-align: right;">
                                        <a class="btn btn-info btn-sm" id="agregarTabla"
                                            style="color: white">Agregar</a>

                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <div id="tabla">
                        <i class="fas fa-user bg-green"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header no-border"><a href="#">Agregando Información</a></h3>
                            <div class="timeline-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label>Comision de Agencia (%)</label>
                                                    <div class="input-group">
                                                        <input id="porcenaje" type="number" min="1" value="1"
                                                            class="form-control" id="porcenaje">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <table id="add-tabla" class="table table-bordered table-hover">
                                            <thead>
                                                <tr style="text-align: center;">
                                                    <th>Producto</th>
                                                    <th>Costo</th>
                                                    <th>Cantidad</th>
                                                    <th>Sub Total</th>
                                                    <th>Acción</th>
                                                    <th>id</th>
                                                    <th>contador</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>

                                        </table>
                                    </div>



                                </div>
                                <div class="row">
                                    <div class="col-md-1 col-md-offset-1"> </div>
                                    <div class="col-md-3  ">
                                        <label class="text-primary "> Total de Encomienda: </label>
                                    </div>
                                    <div class="col-md-3  ">
                                        <label id="total" class="text-primary "> $0</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1 col-md-offset-1"> </div>
                                    <div class="col-md-3  ">
                                        <label class="text-success "> Comisión de Agencia: </label>
                                    </div>
                                    <div class="col-md-3  ">
                                        <label id="comision" class="text-success "> $0</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1 col-md-offset-1"> </div>
                                    <div class="col-md-3  ">
                                        <label class="text-danger "> Total de cliente: </label>
                                    </div>
                                    <div class="col-md-3  ">
                                        <label id="totalCliente" class="text-danger "> $0</label>
                                    </div>
                                </div>
                            </div>
                            <br> <br>
                            <div class="timeline-footer" style="text-align: right;">
                                <button name="btnguardar" id="btnguardar" class="btn btn-info btn-sm"
                                    style="color: white">Guardar</button>
                                <button class="btn btn-danger btn-sm" style="color: white">Cancelar</button>
                            </div>
                        </div>

                    </div>
                    <!-- END timeline item -->

                    <!-- /.timeline-label -->
                </div>
                <!-- END timeline item -->
            </div>
        </div>
    </section>
    <!-- Modal mostrar-->
    <div class="modal fade" id="add-producto">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <div class="overlay-wrapper">
                    <div id="loadingActualizar" class="overlay">
                        <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                        <div class="text-bold pt-2">Cargando...
                        </div>
                    </div>
                    <div class="modal-header">
                        <h4 class="modal-title">Nuevo Producto</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="register-form" name="register-form" onsubmit="return false">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input name="nombre_producto" type="text" class="form-control"
                                            placeholder="Introduzca el nombre" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Tarifa</label>
                                        <input name="tarifa" type="text" class="form-control"
                                            placeholder="Introduzca la tarifa" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Unidad de medida</label>
                                        <select class="form-control" name="unidades_medidas">
                                            <option value="">Seleccione</option>
                                            <option value="lbs">Libras</option>
                                            <option value="unidad">Unidades</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </form>

                    </div>

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button name="btn-producto" id="btn-producto" class="btn btn-info btn-sm"
                            style="color: white">Guardar</button>
                    </div>

                </div>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    <div class="modal fade" id="modal-mapa">
        <!-- Modal EDITAR-->
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Selecciona la ubicación</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div id="mapa" style="width: 100%; height: 500px"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-end">
                    <button data-dismiss="modal" class="btn btn-info btn-sm" style="color: white">Guardar</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

</div>

<?php
include_once '../../plantillas/footer.php';
?>
<script type="text/javascript">
$(document).on('click', '#producto-add', function() {
    $('#add-producto').modal('show');
    $('#loadingActualizar').hide();
});
</script>

<script src="<?= $base_url ?>js/controladores/conf.js"></script>

<script src="<?= $base_url ?>plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="<?= $base_url ?>plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= $base_url ?>plugins/jquery-validation/additional-methods.min.js"></script>
<script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHTY5pSkcpRB1CB58Y_3ob9gF52E4s97E">
</script>
<script src="<?= $base_url ?>plugins/subir-foto/js/plugins/piexif.js" type="text/javascript"></script>
<script src="<?= $base_url ?>plugins/subir-foto/js/plugins/sortable.js" type="text/javascript"></script>
<script src="<?= $base_url ?>plugins/subir-foto/js/fileinput.js" type="text/javascript"></script>
<script src="<?= $base_url ?>plugins/subir-foto/js/locales/es.js" type="text/javascript"></script>
<script src="<?= $base_url ?>plugins/subir-foto/themes/fas/theme.js" type="text/javascript"></script>


<script src="<?= $base_url ?>js/controladores/mapas/myMap.js"></script>
<script src="<?= $base_url ?>js/controladores/encomienda/deptos.js"></script>
<script src="<?= $base_url ?>js/controladores/asesorias/combobox.js"></script>
<script src="<?= $base_url ?>js/controladores/encomienda/producto.js"></script>
<script src="<?= $base_url ?>js/controladores/encomienda/insertar-productoEnco.js"></script>
<script src="<?= $base_url ?>js/controladores/encomienda/tablas-add.js"></script>

<?php include_once '../../plantillas/cierre.php'; ?>
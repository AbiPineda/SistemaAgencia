<?php
include_once '../../config/parametros.php';
include_once '../../plantillas/cabecera.php';
include_once  '../../plantillas/navbar.php';?>
<link href="<?= $base_url ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" all rel="stylesheet"type="text/css" />
<?php
include_once '../../plantillas/barra_lateral.php';
?>
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
                            <i class="fas fa-comments bg-gradient-blue"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fas fa-address-book">Empresas</i></span>
                                <h3 class="timeline-header"><a href="#">Datos de Empresa y Cliente</a></h3>
                                <div class="timeline-body" style="margin-top: -9px;">
                                    <!--Una fila para jugar-->
                          
                                    <div class="row">
                                       <div class="col-lg-3"></div>
                                        <div class="col-sm-5">
                                        <div class="form-group">
                                            <label for="cars">Seleccione el Cliente:</label>

                                            <select name="id_cliente" id="cliente" class="form-control">
                                                 <option value="">Seleccione</option>
                                            </select>
                                        </div>
                                    </div>
                                    </div>
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
                            <form id="register-form" name="register-form" onsubmit="return false">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                           <label for="cars">Seleccione el departamento</label>
                                              <select name="depto" id="depto" class="form-control">
                                                <option value="">Seleccione</option>
                                            </select>
                                        </div></div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="cars">Seleccione el municipio</label>
                                              <select name="id_municipios" id="id_municipios" class="form-control">
                                                <option value="">Seleccione</option>
                                            </select></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Punto de referencia</label>
                                             <input name="punto_referencia" type="text" class="form-control" placeholder="Introduzca el punto de referencia">
                                          </div></div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Dirección</label>
                                             <input name="direccion" type="text" class="form-control" placeholder="Introduzca la Dirección">
                                          </div></div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                            <label for="cars">Seleccione el Producto</label>
                                           <select name="producto" id="id_producto" class="form-control">
                                                <option value="">Seleccione</option>
                                            </select> 
                                             </div>
                                    </div>
                                   
                                    <div class="col-sm-3">
                                       <div class="form-group">
                                            <label for="cars">Costo($)</label>
                                            <input name="costo" id="costo" type="text" class="form-control" placeholder="Costo">
                                       </div>
                                  </div>
                                   <div class="col-sm-3">
                                       <div class="form-group">
                                        <label for="cars">Ingrese la Cantidad(Lbs)</label>
                                          <input name="cantidad" id="cantidad" type="text" class="form-control" placeholder="Lbs">
                                          </div></div>
                               </div>
                               <div class="timeline-footer" style="text-align: right;">
                                <a class="btn btn-info btn-sm" id="agregarTabla" style="color: white">Agregar</a>
                                </div>
                               </form></div></div>
                         
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

                                    <div class="col-sm-12">
                                    <div style="text-align: right;width:475px;margin-top: 27px;">
                                        <label> Total de Encomienda: </label> <label id="total"></label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                         
                        </div>
                        <!-- END timeline item -->
                        <!-- timeline item -->
                        <div id="botones">
                            <i class="fas fa-save bg-green"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fas fa-save"></i>Guardar</span>
                               <h3 class="timeline-header"><a href="#">Guardar Información</a></h3>
                                <div class="timeline-body">
                                    <div class="row">
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-10"></div>
                                          <div class="col-lg-1"></div>
                                        <div style="text-align: right;width:577px;margin-top:-8px;">
                                 <a class="btn btn-primary btn-sm" id="btn-perso" style="color: white">Guardar</a>
                                <a class="btn btn-danger btn-sm" style="color: white">Cancelar</a>
                                </div></div></div></div>
                        </div>
                        <!-- END timeline item -->

                        <!-- timeline time label -->
                        <div class="time-label">
                            <span class="bg-green">Encomiendas</span>
                        </div>
                        <!-- /.timeline-label -->
                </div>
                <!-- END timeline item -->
            </div>
        </div>
    </section>
</div>

<?php
  include_once '../../plantillas/footer.php';
?>
<script src="<?= $base_url ?>plugins/sweetalert2/sweetalert2.min.js"></script>
<script type="text/javascript" src="<?= $base_url?>js/controladores/conf.js"></script>
<script src="<?= $base_url ?>plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= $base_url ?>plugins/jquery-validation/additional-methods.min.js"></script>
<script type="text/javascript" src="<?= $base_url?>js/controladores/encomienda/deptos.js"></script>
<script type="text/javascript" src="<?= $base_url?>js/controladores/encomienda/producto.js"></script>
<script type="text/javascript" src="<?= $base_url?>js/controladores/encomienda/tablas-add.js"></script>

<?php include_once '../../plantillas/cierre.php'; ?>
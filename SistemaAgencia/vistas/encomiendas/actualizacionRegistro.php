<?php
include_once '../../config/parametros.php';
include_once '../../plantillas/cabecera.php';
include_once  '../../plantillas/navbar.php'; ?>
<!--para el reloj-->
 <link rel="stylesheet" type="text/css" href="<?= $base_url ?>css/bootstrap-clockpicker.css">
 <link href="<?= $base_url ?>css/mdtimepicker.css" rel="stylesheet" type="text/css">
<!--para la subida de fotos al sistema-->
<link href="<?= $base_url ?>plugins/subir-foto/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<link href="<?= $base_url ?>plugins/subir-foto/css/avatar.css" media="all" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
<link href="<?= $base_url ?>plugins/subir-foto/themes/explorer-fas/theme.css" media="all" rel="stylesheet" type="text/css" />
<!--alerta del sistema-->
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
               <h1>Registro de actualización de envió</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                  <li class="breadcrumb-item active">Actualización</li>
               </ol>
            </div>
         </div>
      </div><!-- /.container-fluid -->
   </section>

   <!-- Main content -->
   <section class="content">
      <div class="row">
        <div class="col-md-4">
          <div class="timeline">
           <!-- timeline item -->
                <div id="titulo">
                        <i class="fas fa-box-open bg-green"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header"><a href="#">Registro de información</a></h3>

                            <div class="timeline-body">
                                <form id="informacion-form" name="register-form" onsubmit="return false">
                                    <div class="row">
                                        <div class="col-sm-12">
                                              <div class="form-group multiple-form-group input-group">
                                                <label>Título</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="titulo_actu" id="titulo_actu" placeholder="Digite título">
                                                </div>
                                               
                                            </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-sm-12">
                                                <label>Fecha</label>
                                                <div class="input-group">
                                                <input type="date" name="fecha_actu" id="fecha_actu" class="form-control">
                                                </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Hora</label>
                                                <div class="input-group">
                                               <div class="input-group clockpicker" data-autoclose="true">
                                                <input type="text" id="hora_actu" name="hora_actu" class="form-control" value="08:00" />
                                                 </div>


                                                </div>

                                            </div>
                                        </div>           
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group"> 
                                                <div class="input-group">
                                             <button name="btn-informacion" id="btn-informacion" class="btn btn-info btn-sm"
                            style="color: white">Guardar</button>
                                                </div>

                                            </div>
                                        </div>           
                                    </div>

                                  
                                   
                                </form>
                            </div>
                        </div>

                    </div>
               <!-- END timeline item -->

                <!-- timeline item -->
                <div id="titulo">
                        <i class="fas fas fa-box-open bg-green"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header"><a href="#">Historial de información</a></h3>

                            <div class="timeline-body" id="historias">
                             
                                   
                            </div>
                        </div>

                    </div>
               <!-- END timeline item -->
            </div>

        </div>
         <div class="col-md-8">
            <div class="timeline">
               <!-- timeline item -->
                <div id="formulario">
                        <i class="fas fa-box-open bg-green"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header"><a href="#">Datos de Origen</a></h3>

                            <div class="timeline-body">
                                <form id="datosOrigen-form" name="register-form" onsubmit="return false">
                                    <div class="row">
                                        <div class="col-sm-6">
                                              <div class="form-group multiple-form-group input-group">
                                                <label>Cliente</label>
                                                <div class="input-group">
                                                    <label id="nombre_cliente"></label>
                                                </div>
                                                <div class="input-group">
                                                    <input type="hidden" class="form-control" name="cliente" id="cliente" disabled="true">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                                <label>Teléfono</label>
                                                <div class="input-group">
                                                <input disabled="true" type="text" name="telefono" id="telefono"
                                                class="form-control" autocomplete="off" placeholder="(503)7232-2345">
                                                </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Ciudad</label>
                                                <div class="input-group">
                                            <input  type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Digite la ciudad de origen">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Código postal</label>
                                                <input name="codigo" id="codigo" type="text" class="form-control"
                                                    placeholder="Introduzca el Código postal de origen">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input name="fecha" id="fecha" type="hidden" class="form-control"
                                                    placeholder="Introduzca el punto de referencia">
                                            </div>
                                        </div>            
                                    </div>
                                    <div>
                                    </div>
                                   
                                </form>
                            </div>
                        </div>

                    </div>
               <!-- END timeline item -->
                <!-- timeline item -->
                    <div id="formulario">
                        <i class="fas fa-box-open bg-green"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header"><a href="#">Datos de Destino</a></h3>

                            <div class="timeline-body">
                                <form id="datosDestino-form" name="register-form" onsubmit="return false">
                                    <div class="row">
                                        <div class="col-sm-6">
                                              <div class="form-group multiple-form-group input-group">
                                                <label>Nombre Completo</label>
                                                <div class="input-group">
                                                <input class="form-control" type="text" name="cliente_des" id="cliente_des" placeholder="Digite el nombre">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                                <label>Teléfono</label>
                                                <div class="input-group">
                                                <input type="text" name="telefono_des" id="telefono_des"
                                                class="form-control" autocomplete="off">
                                                </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Ciudad</label>
                                                <div class="input-group">
                                            <input  type="text" class="form-control" name="ciudad_des" id="ciudad_des" placeholder="Digite la ciudad de destino">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Código postal</label>
                                                <input name="codigo_des" id="codigo_des" type="text" class="form-control"
                                                    placeholder="Introduzca el Código postal de destino">
                                            </div>
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
                                                <label>Dirección alterna</label>
                                                <input name="direccion_alterna" id="direccion_alterna" type="text"
                                                    class="form-control"
                                                    placeholder="Ej: Correo El Salvador ó 2da, av sur, numero 34, barrio centro">
                                            </div>
                                        </div>            
                                    </div>
                                   
                                </form>
                            </div>
                        </div>

                    </div>
                    <!-- END timeline item -->
              <!--END timeline item-->
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
                                       <div class="input-group">
                                          <input id="porcenaje" type="hidden" class="form-control">
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
                     </div>
                     <br> 
                  </div>

               </div>
               <!-- END timeline item -->
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
<script type="text/javascript">
$(document).on('click', '#producto-add', function() {
   $('#add-producto').modal('show');
   $('#loadingActualizar').hide();
});

 $(document).ready(function() {
   $('#hora_actu').mdtimepicker(); //Initializes the time picker
});

</script>


<script src="<?= $base_url ?>js/controladores/conf.js"></script>
<!--alerta del sistema-->
<script src="<?= $base_url ?>plugins/sweetalert2/sweetalert2.min.js"></script>
<!--********************reloj********************-->
<script src="<?= $base_url ?>js/mdtimepicker.js"></script>
<!--validaciones del sistema-->
<script src="<?= $base_url ?>plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= $base_url ?>plugins/jquery-validation/additional-methods.min.js"></script>
<!--para la mascara-->
<script src="<?= $base_url ?>plugins/inputmask/jquery.inputmask.min.js"></script>
<!--para las subida de fotos-->
<script src="<?= $base_url ?>plugins/subir-foto/js/plugins/piexif.js" type="text/javascript"></script>
<script src="<?= $base_url ?>plugins/subir-foto/js/plugins/sortable.js" type="text/javascript"></script>
<script src="<?= $base_url ?>plugins/subir-foto/js/fileinput.js" type="text/javascript"></script>
<script src="<?= $base_url ?>plugins/subir-foto/js/locales/es.js" type="text/javascript"></script>
<script src="<?= $base_url ?>plugins/subir-foto/themes/fas/theme.js" type="text/javascript"></script>
<!--Script de los procedimientos del sistema-->
<script src="<?= $base_url ?>js/controladores/encomienda/actu-envio-procesos.js"></script>
<script type="text/javascript" src="<?= $base_url?>js/controladores/encomienda/combo-unidad.js"></script>
<script src="<?= $base_url ?>js/controladores/encomienda/producto.js"></script>
<script src="<?= $base_url ?>js/controladores/encomienda/insertar-unidad.js"></script>
<script src="<?= $base_url ?>js/controladores/encomienda/insertar-productoEnco.js"></script>
<?php include_once '../../plantillas/cierre.php'; ?>
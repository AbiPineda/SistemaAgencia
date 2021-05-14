<?php include_once '../../config/parametros.php'; ?>
<?php include_once '../../plantillas/cabecera.php'; ?>
<!-- COLOCAR ESTILOS ADICIONALES AQUI -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
<link href="<?= $base_url ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" all rel="stylesheet"
   type="text/css" />
<link rel=" stylesheet" type="text/css" href="<?= $base_url ?>plugins/asiento-bus/css/jquery.seat-charts.css">
<link rel=" stylesheet" type="text/css" href="<?= $base_url ?>plugins/asiento-bus/css/reserva.css">


<!--COTINUANDO CON LA INICIALIZACION -->
<?php include_once '../../plantillas/navbar.php'; ?>
<?php include_once '../../plantillas/barra_lateral.php'; ?>
<div class="content-wrapper" style="min-height: 1185.73px;">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Editar Tours</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                  <li class="breadcrumb-item active">Editar</li>
               </ol>
            </div>
         </div>
      </div><!-- /.container-fluid -->
   </section>

   <!-- Main content -->
   <section class="content">
      <form id="miFormulario" enctype="multipart/form-data" name="miFormulario" role="form">
         <div class="row">
            <!-- <div class="offset-md-1"></div> -->
            <div class="col-md-12">
               <div class="overlay-wrapper">
                  <div id="loading" class="overlay"><i class="fas fa-3x fa-sync-alt fa-spin"></i>

                     <div class="text-bold pt-2">Cargando...
                     </div>
                  </div>
                  <div class="timeline">
                     <!-- timeline time label -->
                     <div class="time-label">
                        <span class="bg-red">Información</span>
                     </div>
                     <!-- /.timeline-label -->
                     <!-- timeline item -->
                     <div>
                        <i class="fas fa-car bg-blue"></i>
                        <div class="timeline-item">
                           <h3 class="timeline-header"><a href="#">Datos Generales</a> </h3>
                           <div class="timeline-body">
                              <div class="row">
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Titulo del viaje</label>
                                       <div class="input-group">
                                          <input type="text" class="form-control" id="nombreTours" name="nombreTours"
                                             disabled="true">
                                       </div>
                                       <!-- /.input group -->
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Fecha del viaje</label>
                                       <!-- placeholder="dd-mm-yyyy"  type="date"  -->
                                       <div class="input-group">
                                          <input class=" form-control" name="fecha_salida" id="fecha_salida"
                                             disabled="true">
                                       </div>
                                       <!-- /.input group -->
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- END timeline item -->
                     <!-- timeline item -->
                     <div>
                        <i class="fas fa-user bg-green"></i>
                        <div class="timeline-item">
                           <h3 class="timeline-header no-border">
                              <a href="#">Reservas </a>
                           </h3>
                           <div class="timeline-body">
                              <div class="row">
                                 <div class="col-sm-12">
                                    <table id="TablaCostos" class="table table-bordered table-hover">

                                       <thead>
                                          <tr style="text-align: center;">
                                             <th>Cliente</th>
                                             <th>Asientos Reservados</th>
                                             <th>Detalle Resrva</th>
                                             <th>Total</th>
                                             <th>Forma de Pago</th>

                                          </tr>
                                       </thead>
                                       <tbody style="text-align: center;">

                                       </tbody>

                                    </table>
                                 </div>

                                 <div class="col-md-1 col-md-offset-1">
                                 </div>
                                 <div class="col-md-2 ">
                                    <label class="text-primary ">
                                       Total
                                       de
                                       Ingresos:
                                    </label>
                                 </div>
                                 <div class="col-md-9">
                                    <label id="totalIngresos" class="text-primary">$0</label>
                                 </div>
                              </div>
                           </div>

                        </div>
                     </div>
                     <!-- timeline item -->

                     <!-- timeline item -->
                     <div id="item_asiento">
                        <i class="fas fa-user bg-green"></i>
                        <div class="timeline-item">
                           <!--<span class="time"><i class="fas fa-clock"></i> 5 mins ago</span>-->
                           <h3 class="timeline-header no-border"><a href="#">Opciones de asientos</a></h3>
                           <div class="timeline-body">
                              <div class="row" id="dibujoAsientos">
                                 <!-- <div class="offset-md-1"></div> -->
                                 <div class="col-sm-6">
                                    <div id="seat-map" class="float-right">
                                       <div class="front-indicator">Frontal</div>
                                    </div>
                                 </div>
                                 <div class="col-sm-4 flex flex-column-reverse flex-sm-column">
                                    <div id="legend"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="timeline-footer" style="text-align: right;">
                              <button name="btnguardarReserva" id="btnguardarReserva" class="btn btn-info btn-sm"
                                 style="color: white">Guardar</button>
                              <button class="btn btn-danger btn-sm" style="color: white">Cancelar</button>
                           </div>
                        </div>
                     </div>
                     <!-- END timeline item -->

                  </div>
               </div>

            </div>
         </div>
         <!-- END timeline item -->
      </form>
   </section>
</div>

<?php include_once '../../plantillas/footer.php'; ?>
<!-- PONER SCRIPT ADICIONALES ACA -->
<script src="<?= $base_url ?>plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= $base_url ?>plugins/jquery-validation/additional-methods.min.js"></script>
<script src="<?= $base_url ?>plugins/subir-foto/js/plugins/piexif.js" type="text/javascript"></script>
<script src="<?= $base_url ?>plugins/subir-foto/js/plugins/sortable.js" type="text/javascript"></script>
<script src="<?= $base_url ?>plugins/subir-foto/js/fileinput.js" type="text/javascript"></script>
<script src="<?= $base_url ?>plugins/subir-foto/js/locales/es.js" type="text/javascript"></script>
<script src="<?= $base_url ?>plugins/subir-foto/themes/fas/theme.js" type="text/javascript"></script>
<script src="<?= $base_url ?>/plugins/sweetalert2/sweetalert2.min.js"></script>

<!-- EN EL CONTROLADOR ESTA LA LOGICA DE ESTA PANTALLA -->
<script src="<?= $base_url ?>js/controladores/conf.js"></script>
<script src="<?= $base_url ?>plugins/asiento-bus/js/jquery.seat-charts.js"></script>
<script src="<?= $base_url ?>js/controladores/turs/analitica.js"></script>
<!-- CIERRE DE ETIQUETAS -->
<?php include_once '../../plantillas/cierre.php'; ?>
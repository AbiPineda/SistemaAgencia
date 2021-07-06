<?php include_once '../../config/parametros.php'; ?>
<?php include_once '../../plantillas/session.php'; ?>
<?php include_once '../../plantillas/cabecera.php'; ?>
<!-- COLOCAR ESTILOS ADICIONALES AQUI -->
<link href="<?= $base_url ?>plugins/subir-foto/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<link href="<?= $base_url ?>plugins/subir-foto/css/avatar.css" media="all" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
<link href="<?= $base_url ?>plugins/subir-foto/themes/explorer-fas/theme.css" media="all" rel="stylesheet"
   type="text/css" />
<link href="<?= $base_url ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" all rel="stylesheet"
   type="text/css" />
<link href="<?= $base_url ?>css/miniatura-tabla.css" media="all" rel="stylesheet" type="text/css" />
<!--COTINUANDO CON LA INICIALIZACION -->
<?php include_once '../../plantillas/navbar.php'; ?>
<?php include_once '../../plantillas/barra_lateral.php'; ?>
<div class="content-wrapper" style="min-height: 1185.73px;">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Publicar Tours</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="../../home.php">Inicio</a></li>
                  <li class="breadcrumb-item active">Registrar Tours</li>
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

                     <!-- timeline item -->
                     <div>
                        <i class="fas fa-list bg-blue"></i>
                        <div class="timeline-item">
                           <h3 class="timeline-header"><a href="#">Datos Generales</a> </h3>
                           <div class="timeline-body">
                              <div class="row">
                                 <div class="col-sm-3">
                                    <div class="form-group">
                                       <label>Título del viaje</label>
                                       <div class="input-group">
                                          <input placeholder="Digite el Título" type="text" class="form-control"
                                             id="nombreTours" name="nombreTours">
                                       </div>
                                       <!-- /.input group -->
                                    </div>
                                 </div>
                                 <div class="col-sm-3">
                                    <div class="form-group">
                                       <label>Fecha del viaje</label>
                                       <!-- placeholder="dd-mm-yyyy"  type="date"  -->
                                       <div class="input-group">
                                          <input class=" form-control" name="fecha_salida" id="fecha_salida">
                                       </div>
                                       <!-- /.input group -->
                                    </div>
                                 </div>
                                 <div class="col-sm-3">
                                    <div class="form-group">
                                       <label>Pasaje Normal</label>
                                       <!-- placeholder="dd-mm-yyyy"  type="date"  -->
                                       <div class="input-group">
                                          <input class="form-control" type="number" name="CostoPasaje" id="CostoPasaje">
                                       </div>
                                       <!-- /.input group -->
                                    </div>
                                 </div>
                                 <div class="col-sm-3">
                                    <div class="form-group">
                                       <label>Número de Pasajeros</label>
                                       <!-- placeholder="dd-mm-yyyy"  type="date"  -->
                                       <div class="input-group">
                                          <input class="form-control" type="number" name="cantidad" id="cantidad">
                                       </div>
                                       <!-- /.input group -->
                                    </div>
                                 </div>

                              </div>
                              <div class="row">
                                 <div class="ml-3"><label for="">Tipo de Tour</label></div>
                                 <div class="form-check mx-auto icheck-success">
                                    <input class="form-check-input" type="radio" name="radioTipoTour"
                                       id="radioTipoTourNacional" value="Tour Nacional" checked>
                                    <label class="form-check-label" for="radioTipoTourNacional">
                                       Tour Nacional
                                    </label>
                                 </div>
                                 <div class="form-check mx-auto icheck-success">
                                    <input class="form-check-input" type="radio" name="radioTipoTour"
                                       id="radioTipoTourInternacional" value="Tour Internacional">
                                    <label class="form-check-label" for="radioTipoTourInternacional">
                                       Tour Internacional
                                    </label>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-sm-12">
                                    <!-- text input -->
                                    <div class="form-group">
                                       <label>Descripción del Viaje</label>
                                       <textarea class="form-control" rows="4" id="descripcion_tur"
                                          name="descripcion_tur" placeholder="Digitar aquí ..."></textarea>
                                    </div>
                                 </div>

                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- END timeline item -->

                     <!-- timeline item -->
                     <div>
                        <i class="fas fa-plus-square bg-red"></i>
                        <div class="timeline-item">
                           <h3 class="timeline-header no-border">
                              <a href="#">Otras opciones</a>
                           </h3>
                           <div class="timeline-body">
                              <div id="contenedor_opcions">
                                 <div class="row" id="otras_opciones">
                                    <div class="col-sm-3">
                                       <label>Lugar(es) de Salida</label>
                                       <div class="form-group multiple-form-group input-group">
                                          <input type="text" name="lugar_salida[]" class="form-control"
                                             placeholder="Digite el lugar">
                                          <span class="input-group-btn">
                                             <button type="button" class="btn btn-success btn-add"
                                                style="margin-top:0px;">+</button>
                                          </span>
                                       </div>
                                    </div>
                                    <div class="col-sm-3">
                                       <label>El viaje incluye</label>
                                       <div class="form-group multiple-form-group input-group">
                                          <input type="text" name="incluye[]" class="form-control"
                                             placeholder="¿Qué incluye el viaje?">
                                          <span class="input-group-btn">
                                             <button type="button" class="btn btn-success btn-add"
                                                style="margin-top:0px;">+</button>
                                          </span>
                                       </div>
                                    </div>
                                    <div class="col-sm-3">
                                       <label>El viaje no incluye</label>
                                       <div class="form-group multiple-form-group input-group">
                                          <input type="text" name="no_incluye[]" class="form-control"
                                             placeholder="¿Qué incluye no incluye viaje?">
                                          <span class="input-group-btn">
                                             <button type="button" class="btn btn-success btn-add"
                                                style="margin-top:0px;">+</button>
                                          </span>
                                       </div>
                                    </div>
                                    <div class="col-sm-3">
                                       <label>Requisitos</label>
                                       <div class="form-group multiple-form-group input-group">
                                          <input type="text" name="requisitos[]" class="form-control"
                                             placeholder="Digite los requisitos">
                                          <span class="input-group-btn">
                                             <button type="button" class="btn btn-success btn-add"
                                                style="margin-top:0px;">+</button>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- END timeline item -->
                     <!-- END timeline item -->
                     <div>
                        <i class="fas fa-money-bill-wave bg-blue"></i>
                        <div class="timeline-item">
                           <h3 class="timeline-header no-border">
                              <a href="#">Promociones Especiales</a>
                           </h3>
                           <div class="timeline-body">
                              <div class="row">
                                 <div class="col-sm-4">
                                    <label>Título de la Promoción</label>
                                 </div>
                                 <div class="col-sm-4">
                                    <label>Número de Asientos</label>
                                 </div>
                                 <div class="col-sm-4">
                                    <label>Costo del Pasaje($)</label>
                                 </div>
                              </div>
                              <div id="contenedorPromociones">
                                 <div class="row" id="promocione_especiales">
                                    <div class="col-sm-4">
                                       <div class="form-group multiple-form-group input-group">
                                          <input type="text" class="form-control" name="titulos[]"
                                             placeholder="Ej: Niños Menores de 5 años">
                                       </div>
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="form-group multiple-form-group input-group">
                                          <input type="number" name="asientos[]" min="1" class="form-control">
                                       </div>
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="form-group multiple-form-group input-group">
                                          <input type="number" name="pasajes[]" min="0" class="form-control">
                                          <span class="input-group-btn">
                                             <button type="button" class="btn btn-success btn-addRow"
                                                style="margin-top:0px;">+</button>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- END timeline item -->
                     <!-- timeline item -->
                     <div>
                        <i class="fas fa-image bg-green"></i>
                        <div class="timeline-item">

                           <h3 class="timeline-header no-border">
                              <a href="#">Galería de Imágenes</a>
                           </h3>
                           <div class="timeline-body">

                              <div class="row">
                                 <div class="col-sm-12">

                                    <label>Seleccione Imágenes</label>
                                    <div class="file-loading">
                                       <input type="file" multiple name="fotos[]" id="fotos">
                                    </div>
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
<script src="<?= $base_url ?>plugins/asiento-bus/js/jquery.seat-charts.js"></script>
<script src="<?= $base_url ?>plugins/asiento-bus/js/admin-configuracion.js"></script>
<script src="<?= $base_url ?>js/controladores/turs/guardar.js"></script>
<script src="<?= $base_url ?>js/controladores/turs/registro-tour.js"></script>
<!-- CIERRE DE ETIQUETAS -->
<?php include_once '../../plantillas/cierre.php'; ?>
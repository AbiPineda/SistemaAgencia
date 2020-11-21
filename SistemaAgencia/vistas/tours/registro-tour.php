<?php include_once '../../config/parametros.php'; ?>
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
               <h1>Registrar Tours</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                  <li class="breadcrumb-item active">Registrar</li>
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
                                 <div class="col-sm-4">
                                    <div class="form-group">
                                       <label>Titulo
                                          del
                                          viaje</label>

                                       <div class="input-group">
                                          <input type="text" class="form-control" id="nombreTours" name="nombreTours">
                                       </div>
                                       <!-- /.input group -->
                                    </div>
                                 </div>
                                 <div class="col-sm-4">
                                    <div class="form-group">
                                       <label>Fecha del viaje</label>
                                       <!-- placeholder="dd-mm-yyyy"  type="date"  -->
                                       <div class="input-group">
                                          <input class=" form-control" name="fecha_salida" id="fecha_salida">
                                       </div>
                                       <!-- /.input group -->
                                    </div>
                                 </div>
                                 <div class="col-sm-4">
                                    <div class="form-group">
                                       <label>Descripción del Viaje</label>
                                       <div class="input-group">
                                          <input type="text" id="descripcion_tur" name="descripcion_tur"
                                             class="form-control">
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
                              <a href="#">Sitios
                                 Turístico</a>
                           </h3>
                           <div class="timeline-body">
                              <div class="row">
                                 <div class="col-sm-4">
                                    <div class="form-group multiple-form-group input-group">
                                       <label>Seleccione
                                          los
                                          Sitios
                                          Turísticos</label>
                                       <div class="input-group">
                                          <select name="ComboTur" id="ComboTur" name="ComboTur"
                                             class="select2 select2-hidden-accessible form-control"
                                             data-placeholder="Seleccione el tipo" style="width: 100%;">
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-2">
                                    <div class="form-group">
                                       <label>Precio</label>
                                       <div class="input-group">
                                          <input type="number" min="0" class=" form-control" name="precio_sitio"
                                             id="precio_sitio">
                                       </div>
                                       <!-- /.input group -->
                                    </div>
                                 </div>

                                 <div class="col-sm-2">
                                    <div class="form-group">
                                       <label>Contacto</label>
                                       <br>
                                       <a style="position:absolute; z-index:1;" href="#">
                                          <div id="namePreviewTur">
                                             Nombre
                                             de
                                             Contacto
                                          </div>
                                          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                             <div class="ocultar card bg-light">
                                                <div class="card-body">
                                                   <div class="row">
                                                      <div class="col-7">
                                                         <p id="nameContactoTur" class="text-muted text-sm">
                                                            <b>Nombre de
                                                               Contacto:</b>
                                                            Nombre
                                                            de
                                                            Contacto
                                                            detallado
                                                         </p>
                                                         <ul class="ml-4 mb-0 fa-ul text-muted">
                                                            <li class="small">
                                                               <span class="fa-li">
                                                                  <i class="fas fa-lg fa-mail-bulk">
                                                                  </i>
                                                               </span>
                                                               <div id="mailContactoTur">
                                                                  correo@correo.com
                                                               </div>
                                                            </li>
                                                            <li class="small">
                                                               <span class="fa-li">
                                                                  <i class="fas fa-lg fa-phone"></i>
                                                               </span>
                                                               <div id="phoneContactoTur">
                                                                  Teléfono
                                                                  #:
                                                                  1234-5678
                                                               </div>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                      <div class="col-5 text-center">
                                                         <img id="imgContactoTur"
                                                            src="http://www.lagraderia.com/wp-content/uploads/2018/12/no-imagen.jpg"
                                                            alt="" class="img-fluid">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="card-footer">
                                                </div>
                                             </div>
                                          </div>
                                       </a>

                                    </div>
                                 </div>
                                 <div class="col-sm-2">
                                    <!-- radio -->
                                    <label>Por
                                       Pasajero</label>
                                    <div class="form-group clearfix">
                                       <div class="icheck-success d-inline" style="margin-left: 40px;">
                                          <input type="radio" value="si" name="radioTur" id="radioSuccess1">
                                          <label for="radioSuccess1">
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-2">
                                    <!-- radio -->
                                    <label>Por
                                       Viaje</label>
                                    <div class="form-group clearfix">
                                       <div class="icheck-success d-inline" style="margin-left: 30px;">
                                          <input type="radio" value="no" name="radioTur" checked="" id="radioSuccess2">
                                          <label for="radioSuccess2">
                                          </label>
                                       </div>

                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="timeline-footer" style="text-align: right;">
                              <button id="btnAgregarTur" class="btn btn-info btn-sm"
                                 style="color: white">Agregar</button>

                           </div>
                        </div>
                     </div>
                     <!-- END timeline item -->
                     <!-- timeline item -->
                     <div>
                        <i class="fas fa-user bg-green"></i>
                        <div class="timeline-item">
                           <h3 class="timeline-header no-border">
                              <a href="#">Servicios
                                 Adicionales</a>
                           </h3>
                           <div class="timeline-body">
                              <div class="row">
                                 <div class="col-sm-4">
                                    <div class="form-group multiple-form-group input-group">
                                       <label>Seleccione
                                          los
                                          Servicios
                                          Adicionales</label>
                                       <div class="input-group">
                                          <select name="ComboServicio" id="ComboServicio"
                                             class="select2 select2-hidden-accessible form-control"
                                             data-placeholder="Seleccione el tipo" style="width: 100%;">
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-2">
                                    <div class="form-group">
                                       <label>Precio</label>
                                       <div class="input-group">
                                          <input type="number" min="0" class=" form-control" name="precio_servicio"
                                             id="precio_servicio">
                                       </div>
                                       <!-- /.input group -->
                                    </div>
                                 </div>

                                 <div class="col-sm-2">
                                    <div class="form-group">
                                       <label>Contacto</label>
                                       <br>
                                       <a style="position:absolute; z-index:1;" href="#">
                                          <div id="namePreviewServicio">
                                             Nombre
                                             de
                                             Contacto
                                          </div>
                                          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                             <div class="ocultar card bg-light">
                                                <div class="card-body">
                                                   <div class="row">
                                                      <div class="col-7">
                                                         <p id="nameContactoServicio" class="text-muted text-sm">
                                                            <b>Nombre de Contacto:</b>Nombre de
                                                            Contacto detallado
                                                         </p>
                                                         <ul class="ml-4 mb-0 fa-ul text-muted">
                                                            <li class="small"> <span class="fa-li"><i
                                                                     class="fas fa-lg fa-mail-bulk">
                                                                  </i>
                                                               </span>
                                                               <div id="mailContactoServicio">
                                                                  correo@correo.com
                                                               </div>
                                                            </li>
                                                            <li class="small">
                                                               <span class="fa-li">
                                                                  <i class="fas fa-lg fa-phone"></i>
                                                               </span>
                                                               <div id="phoneContactoServicio">
                                                                  Teléfono
                                                                  #:
                                                                  1234-5678
                                                               </div>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                      <div class="col-5 text-center">
                                                         <img id="imgContactoServicio"
                                                            src="http://www.lagraderia.com/wp-content/uploads/2018/12/no-imagen.jpg"
                                                            alt="" class="img-fluid">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="card-footer">
                                                </div>
                                             </div>
                                          </div>
                                       </a>

                                    </div>
                                 </div>
                                 <div class="col-sm-2">
                                    <!-- radio -->
                                    <label>Por
                                       Pasajero</label>
                                    <div class="form-group clearfix">
                                       <div class="icheck-success d-inline" style="margin-left: 40px;">
                                          <input type="radio" checked="" name="servicioCheck" id="PasajeroServicio"
                                             value="si">
                                          <label for="PasajeroServicio">
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-2">
                                    <!-- radio -->
                                    <label>Por
                                       Viaje</label>
                                    <div class="form-group clearfix">
                                       <div class="icheck-success d-inline" style="margin-left: 30px;">
                                          <input type="radio" name="servicioCheck" id="ViajeServicio" value="no">
                                          <label for="ViajeServicio">
                                          </label>
                                       </div>

                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="timeline-footer" style="text-align: right;">
                              <button id="btnAgregarSitio" class="btn btn-info btn-sm"
                                 style="color: white">Agregar</button>

                           </div>
                        </div>
                     </div>
                     <!-- END timeline item -->
                     <!-- timeline item -->
                     <div>
                        <i class="fas fa-user bg-green"></i>
                        <div class="timeline-item">
                           <h3 class="timeline-header no-border">
                              <a href="#">Producto(s)
                                 Seleccionado(s)</a>
                           </h3>
                           <div class="timeline-body">
                              <div class="row">
                                 <div class="col-sm-12">
                                    <table id="TablaCostos" class="table table-bordered table-hover">
                                       <div class="row">
                                          <div class="col-sm-3">
                                             <div class="form-group">
                                                <label>Número
                                                   de
                                                   Pasajeros</label>
                                                <div class="input-group">
                                                   <input id="cantidad" type="number" min="1" value="1"
                                                      class="form-control" id="cupos_disponibles">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-sm-3">
                                             <div class="form-group">
                                                <label>Costo del Pasaje($)</label>
                                                <div class="input-group">
                                                   <input id="CostoPasaje" type="number" min="1" value="1"
                                                      class="form-control" id="precio">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <thead>
                                          <tr style="text-align: center;">
                                             <th>Sitio Turisto/Servicio dicional</th>
                                             <th>Costo</th>
                                             <th>Cantidad</th>
                                             <th>por pasajero</th>
                                             <th>Sub Total</th>
                                             <th>Eliminar</th>
                                             <th>tipo</th>
                                             <th>id</th>
                                             <th>contador</th>
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
                                 <div class="col-md-1 col-md-offset-1">
                                 </div>
                                 <div class="col-md-2">
                                    <label class="text-danger ">
                                       Total
                                       de
                                       Gastos:
                                    </label>
                                 </div>
                                 <div class="col-md-9">
                                    <label id="totalGastos" class="text-danger">$0</label>
                                 </div>
                                 <div class="col-md-1 col-md-offset-1">
                                 </div>
                                 <div class="col-md-2">
                                    <label id="labelGanancias" class="text-warning ">
                                       Ganancias:
                                    </label>
                                 </div>
                                 <div class="col-md-9">
                                    <label id="ganancias" class="text-warning">
                                       $0</label>
                                 </div>
                              </div>
                           </div>

                        </div>
                     </div>
                     <!-- timeline item -->
                     <!-- END timeline item -->
                     <div>
                        <i class="fas fa-user bg-green"></i>
                        <div class="timeline-item">
                           <h3 class="timeline-header no-border">
                              <a href="#">Otras opciones</a>
                           </h3>
                           <div class="timeline-body">
                              <div class="row">
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
                     <!-- END timeline item -->
                     <!-- END timeline item -->
                     <div>
                        <i class="fas fa-user bg-green"></i>
                        <div class="timeline-item">
                           <h3 class="timeline-header no-border">
                              <a href="#">Otras opciones</a>
                           </h3>
                           <div class="timeline-body">
                              <div class="row">
                                 <div class="col-sm-3">
                                    <label>Promociones Especiales</label>
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
                     <!-- END timeline item -->
                     <!-- timeline item -->
                     <div>
                        <i class="fas fa-image bg-green"></i>
                        <div class="timeline-item">

                           <h3 class="timeline-header no-border">
                              <a href="#">Galería
                                 de
                                 Imagenes</a>
                           </h3>
                           <div class="timeline-body">

                              <div class="row">
                                 <div class="col-sm-12">

                                    <label>Seleccione
                                       Imagenes</label>
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
<script src="<?= $base_url ?>js/controladores/conf.js"></script>
<script src="<?= $base_url ?>js/controladores/turs/registro-tour.js"></script>
<!-- CIERRE DE ETIQUETAS -->
<?php include_once '../../plantillas/cierre.php'; ?>
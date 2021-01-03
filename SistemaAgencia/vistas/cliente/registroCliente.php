<!-- INICIALIZACION -->
<?php include_once '../../config/parametros.php'; ?>
<?php include_once '../../plantillas/cabecera.php'; ?>
<!-- COLOCAR ESTILOS ADICIONALES AQUI -->
<link href="<?= $base_url ?>plugins/subir-foto/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<link href="<?= $base_url ?>plugins/subir-foto/css/avatar.css" media="all" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
<link href="<?= $base_url ?>plugins/subir-foto/themes/explorer-fas/theme.css" media="all" rel="stylesheet"
   type="text/css" />
<link href="<?= $base_url ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" rel="stylesheet"
   type="text/css" />
<!--COTINUANDO CON LA INICIALIZACION -->
<?php include_once '../../plantillas/navbar.php'; ?>
<?php include_once '../../plantillas/barra_lateral.php'; ?>
<div class="content-wrapper" style="min-height: 1185.73px;">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Registrar Cliente</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                  <li class="breadcrumb-item active">Registrar Sitio Turísticos</li>
               </ol>
            </div>
         </div>
      </div><!-- /.container-fluid -->
   </section>

   <!-- Main content -->
   <section class="content">
      <form id="miFormularioCliente" enctype="multipart/form-data" name="miFormularioCliente" role="form">
         <div class="row">
            <!-- <div class="offset-md-1"></div> -->
            <div class="col-md-12">
               <div class="overlay-wrapper">
                  <div id="loadingCliente" class="overlay"><i class="fas fa-3x fa-sync-alt fa-spin"></i>

                     <div class="text-bold pt-2">Cargando...
                     </div>
                  </div>
                  <!-- START timeline item -->
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
                                 <div class="col-sm-9">
                                    <div class="row">
                                       <div class="col-sm-6">
                                          <div class="form-group">
                                             <label>Nombre de Cliente</label>
                                             <div class="input-group">
                                                <input type="text" class="form-control" name="nombreCliente"
                                                   id="nombreCliente">
                                             </div>
                                             <!-- /.input group -->
                                          </div>
                                       </div>
                                       <div class="col-sm-6">
                                          <div class="form-group">
                                             <label>Correo Electronico</label>
                                             <div class="input-group">
                                                <input type="text" class="form-control" name="correo" id="correo">
                                             </div>
                                             <!-- /.input group -->
                                          </div>
                                       </div>

                                    </div>
                                    <div class="row">
                                       <div class="col-sm-6">
                                          <div class="form-group">
                                             <label>Contraseña</label>
                                             <div class="input-group">
                                                <input type="password" class="form-control" name="password1"
                                                   id="password1">
                                             </div>
                                             <!-- /.input group -->
                                          </div>
                                       </div>
                                       <div class="col-sm-6">
                                          <div class="form-group">
                                             <label>Repetir Contraseña</label>
                                             <div class="input-group">
                                                <input type="password" class="form-control" name="password2"
                                                   id="password2">
                                             </div>
                                             <!-- /.input group -->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-sm-6">
                                          <div class="form-group">
                                             <label>Dui (opcional)</label>
                                             <div class="input-group">
                                                <input type="text" class="form-control" id="dui" name="dui">
                                             </div>
                                             <!-- /.input group -->
                                          </div>
                                       </div>
                                       <div class="col-sm-6">
                                          <div class="form-group">
                                             <label>Célular (opcional)</label>
                                             <div class="input-group">
                                                <input type="text" class="form-control" id="celular" name="celular">
                                             </div>
                                             <!-- /.input group -->
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-3">
                                    <div class="form-group">
                                       <div class="kv-avatar">
                                          <label>Foto de Perfil (opcional)</label>
                                          <div class="file-loading">
                                             <input id="foto" name="foto" type="file">
                                          </div>
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
                        <i class="fas fa-image bg-green"></i>
                        <div class="timeline-item">

                           <h3 class="timeline-header no-border">
                              <a href="#">Documentos Personales</a>
                           </h3>
                           <div class="timeline-body">

                              <div class="row">
                                 <div class="col-sm-12">

                                    <label>Subir imagenes del Dui</label>
                                    <div class="file-loading">
                                       <input type="file" multiple name="fotos[]" id="fotos">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <br> <br>
                           <div class="timeline-footer" style="text-align: right;">
                              <button name="btnguardarCliente" id="btnguardarCliente" class="btn btn-info btn-sm"
                                 style="color: white">Guardar</button>
                              <button class="btn btn-danger btn-sm" style="color: white">Cancelar</button>
                           </div>

                        </div>
                     </div>
                     <!-- END timeline item -->
                  </div>
                  <!-- END timeline item -->
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
<script src="<?= $base_url ?>/plugins/sweetalert2/sweetalert2.js"></script>
<script src="<?= $base_url ?>plugins/inputmask/jquery.inputmask.min.js"></script>
<script src="<?= $base_url ?>js/controladores/conf.js"></script>
<script src="<?= $base_url ?>js/controladores/client/registro-cliente.js"></script>
<!-- CIERRE DE ETIQUETAS -->
<?php include_once '../../plantillas/cierre.php'; ?>
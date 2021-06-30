<?php include_once '../../config/parametros.php'; ?>
<?php include_once '../../plantillas/cabecera.php'; ?>
<!-- COLORAR ESTILOS ADICIONALES AQUI -->
<link href="<?= $base_url ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" rel="stylesheet">
<link href="<?= $base_url ?>plugins/subir-foto/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<link href="<?= $base_url ?>plugins/subir-foto/css/avatar.css" media="all" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
<link href="<?= $base_url ?>plugins/subir-foto/themes/explorer-fas/theme.css" media="all" rel="stylesheet"
   type="text/css" />
<link href="<?= $base_url ?>css/miniatura-tabla.css" media="all" rel="stylesheet" type="text/css" />

<!-- CONTINUAMOS CON LA INICIALIZACION -->
<?php include_once  '../../plantillas/navbar.php'; ?> <?php include_once '../../plantillas/barra_lateral.php'; ?>
<div class="content-wrapper" style="min-height: 1185.73px;">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <!-- <h1>Tours Registrados</h1> -->
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="../../home.php">Inicio</a></li>
                  <li class="breadcrumb-item active">Pre-Chequeo</li>
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
                  <h3 class="card-title">Pre-Chequeo</h3>
               </div>
               <!-- /.card-header -->
               <div class="card-body">
                  <table id="tabla_servicios" class="table table-bordered table-striped">
                     <thead style="text-align: center;">
                        <tr>
                           <th>Chequeo</th>
                           <th>Cliente</th>
                           <th>Asiento(s) Reservados</th>
                           <th>Descripción</th>
                           <th>Tipo de Viaje</th>


                        </tr>
                     </thead>
                     <div class="overlay-wrapper">
                        <div id="loading" class="overlay"><i class="fas fa-3x fa-sync-alt fa-spin"></i>

                           <div class="text-bold pt-2">Cargando...
                           </div>
                        </div>
                        <tbody id="tableBody" style="text-align: center;">
                        </tbody>
                     </div>

                  </table>
               </div>
               <!-- /.card-body -->
            </div>
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
   </section>
   <!-- /.content -->
   <form id="formularioEditar" name="formularioEditar" role="form">
      <!-- Modal EDITAR-->
      <div class="modal fade" id="modal-chekeo">
         <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

               <div class="overlay-wrapper">
                  <div id="loadingActualizar" class="overlay">
                     <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                     <div class="text-bold pt-2">Cargando...
                     </div>
                  </div>
                  <div class="modal-header">
                     <h4 class="modal-title">Modificar Sitio</h4>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     <div class="row">
                        <div class="col-sm-6">
                           <!-- checkbox -->
                           <div class="form-group">
                              <div class="custom-control custom-checkbox">
                                 <input class="custom-control-input" type="checkbox" id="customCheckbox1"
                                    value="option1">
                                 <label for="customCheckbox1" class="custom-control-label">Custom Checkbox</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input class="custom-control-input" type="checkbox" id="customCheckbox2" checked="">
                                 <label for="customCheckbox2" class="custom-control-label">Custom Checkbox
                                    checked</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input class="custom-control-input" type="checkbox" id="customCheckbox3" disabled="">
                                 <label for="customCheckbox3" class="custom-control-label">Custom Checkbox
                                    disabled</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input class="custom-control-input custom-control-input-danger" type="checkbox"
                                    id="customCheckbox4" checked="">
                                 <label for="customCheckbox4" class="custom-control-label">Custom Checkbox with custom
                                    color</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input
                                    class="custom-control-input custom-control-input-danger custom-control-input-outline"
                                    type="checkbox" id="customCheckbox5" checked="">
                                 <label for="customCheckbox5" class="custom-control-label">Custom Checkbox with custom
                                    color
                                    outline</label>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <!-- radio -->
                           <div class="form-group">
                              <div class="custom-control custom-radio">
                                 <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio">
                                 <label for="customRadio1" class="custom-control-label">Custom Radio</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio"
                                    checked="">
                                 <label for="customRadio2" class="custom-control-label">Custom Radio checked</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input class="custom-control-input" type="radio" id="customRadio3" disabled="">
                                 <label for="customRadio3" class="custom-control-label">Custom Radio disabled</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input class="custom-control-input custom-control-input-danger" type="radio"
                                    id="customRadio4" name="customRadio2" checked="">
                                 <label for="customRadio4" class="custom-control-label">Custom Radio with custom
                                    color</label>
                              </div>
                              <div class="custom-control custom-radio">
                                 <input
                                    class="custom-control-input custom-control-input-danger custom-control-input-outline"
                                    type="radio" id="customRadio5" name="customRadio2">
                                 <label for="customRadio5" class="custom-control-label">Custom Radio with custom color
                                    outline</label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="modal-footer justify-content-between">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                     <button name="btnActualizar" id="btnActualizar" class="btn btn-info btn-sm"
                        style="color: white">Actualizar</button>
                  </div>
               </div>
            </div>
            <!-- /.modal-content -->
         </div>
         <!-- /.modal-dialog -->
      </div>
      <!-- End Modal EDITAR-->
   </form>

</div>

<?php include_once '../../plantillas/footer.php'; ?>

<!-- SCRIPT ADICIONALES AQUI -->
<!-- jquery-validation -->
<script src="<?= $base_url ?>plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= $base_url ?>plugins/jquery-validation/additional-methods.min.js"></script>
<script src="<?= $base_url ?>plugins/subir-foto/js/plugins/piexif.js" type="text/javascript"></script>
<script src="<?= $base_url ?>plugins/subir-foto/js/plugins/sortable.js" type="text/javascript"></script>
<script src="<?= $base_url ?>plugins/subir-foto/js/fileinput.js" type="text/javascript"></script>
<script src="<?= $base_url ?>plugins/subir-foto/js/locales/es.js" type="text/javascript"></script>
<script src="<?= $base_url ?>plugins/subir-foto/themes/fas/theme.js" type="text/javascript"></script>
<script src="<?= $base_url ?>/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="<?= $base_url ?>js/controladores/turs/locales.min.js"></script>
<script src="<?= $base_url ?>js/controladores/conf.js"></script>
<script src="<?= $base_url ?>js/controladores/turs/chekeo.js"></script>
<?php include_once '../../plantillas/cierre.php'; ?>
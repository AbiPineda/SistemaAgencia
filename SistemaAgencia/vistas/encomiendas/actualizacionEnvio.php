<!--para las tablas que cargan en este archivo-->
<?php
include_once '../../config/parametros.php';
include_once '../../plantillas/cabecera.php';?>
<!-- COLOCAR ESTILOS ADICIONALES AQUI -->
<link href="<?= $base_url ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" all rel="stylesheet" type="text/css" />
<?php
include_once  '../../plantillas/navbar.php';
include_once '../../plantillas/barra_lateral.php';
?>


<!--****************fin****************-->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Registro de Actualización de Envió</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Actualización de Envió</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" style="margin-top: 7px;">
        <div class="container-fluid">

            <!-- Timelime example  -->
            <div class="row">
                <div class="col-md-12">
                    <!-- The time line -->
                    <div class="timeline">


                        <!-- timeline item -->
                        <div>
                            <i class="fas fa-comments bg-gradient-blue"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fas fa-address-book"></i>Encomienda a Buscar</span>
                                <h3 class="timeline-header"><a href="#">Encomienda a Buscar</a></h3>
                                <div class="timeline-body" style="margin-top: 15px;">
                                     <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                     <div class="form-group">
                                <table id="tabla_actualizacion" class="table table-bordered table-striped">
                                        <thead style="text-align: center;">
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Dirección</th>
                                                <th>Punto Referencia</th>
                                                <th>Fecha</th>
                                                <th>Acciones</th>
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
                                        <div class="col-lg-2"></div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <!-- END timeline item -->
                        
                        
                        <!-- timeline time label -->
                        <div class="time-label">
                            <span class="bg-green">Actualización de Envió</span>
                        </div>
                        <!-- /.timeline-label -->
                    </div>
                </div>
                <!-- /.col -->
            </div>
        </div>
        <!-- /.timeline -->

      <!--modal alternativo para los eventos-->
    <div class="modal fade" id="registro-actualizacion" tabindex="-1" role="dialog" aria-labelledby="modal-eventLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Registro de Envio</h5>
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
                                                        <label>Cliente</label>
                                                         <input type="hidden" name="id_encomienda" id="id_encomienda" class="form-control">
                                                        <input type="text" name="cliente" id="cliente" placeholder="Encomienda" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Fecha</label>
                                                        <input type="date" id="fecha" placeholder="Encomienda" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Lugar</label>
                                                       <input disabled type="text" class="form-control" name="coordenadas"
                                                       id="coordenadas" style="width: 89%;">

                                                       <span class="input-group-btn">
                                    <button type="button" class="btn btn-success btn-add" name="btn-mapa"style="margin-top:-38px; width: 11%; height: 37px; margin-left:308px;" id="btn-mapa">
                                       <i class="fas fa-globe" style="color: white"></i>
                                    </button>
                                 </span>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Descripción</label>
                                                        <textarea id="descripcion" cols="10" rows="3" class="form-control" placeholder="Escriba la Descripción"></textarea>
                                                    </div>

                                                   
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" id="btnEnvio" class="btn btn-primary btn-sm" style="color: white">Agregar</button>
                    <button type="button" class="btn btn-danger btn-sm" style="color: white" data-dismiss="modal">Cancelar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--fin de modal de enventos-->

      <!-- /.modal-del mapa -->
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
<!-- /.modal-del mapa -->

    </section>
    <!-- /.content -->
</div>


<?php
  include_once '../../plantillas/footer.php';
?>
<script type="text/javascript">

   $('#loadingActualizar').hide();
</script>
<!-- SCRIPT ADICIONALES -->
<script type="text/javascript" src="<?= $base_url?>js/controladores/conf.js"></script>>
<script type="text/javascript" src="<?= $base_url?>js/controladores/encomienda/tabla-actualizacion.js"></script>
<!-- jquery-validation -->
<script src="<?= $base_url ?>plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= $base_url ?>plugins/jquery-validation/additional-methods.min.js"></script>
<script src="<?= $base_url ?>plugins/sweetalert2/sweetalert2.min.js"></script>


<!-- CIERRE DE ETIQUETAS -->
<?php include_once '../../plantillas/cierre.php'; ?>
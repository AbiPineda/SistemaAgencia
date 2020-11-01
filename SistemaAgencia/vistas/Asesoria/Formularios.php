<?php
include_once '../../config/parametros.php';
include_once '../../plantillas/cabecera.php';?>
<!-- COLOCAR ESTILOS ADICIONALES AQUI -->
<link href="<?= $base_url ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" all rel="stylesheet"
    type="text/css" />

<style>
.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 75%;
}
</style>
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
                    <h1>Formularios Migratorios</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Formularios</li>
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
                        <h3 class="card-title">Citas atendidas</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="formularios" class="table table-bordered table-striped">
                                        <thead style="text-align: center;">
                                            <tr>
                                                <th>Cliente</th>
                                                <th>Fecha</th>
                                                 <th>Hora</th>
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

                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>

    <form id="editar" name="editar" role="form">
        <!-- Modal mostrar-->
        <div class="modal fade" id="modal-editar">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">

                    <div class="overlay-wrapper">
                        <div id="loadingActualizar" class="overlay">
                            <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                            <div class="text-bold pt-2">Cargando...
                            </div>
                        </div>
                        <div class="modal-header">
                            <h4 class="modal-title">Detalle de la Pregunta</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                <div class="row">
                    <div class="col-12 col-sm-1"></div>
                    <div class="col-12 col-sm-10">
                        <div class="card card-primary card-tabs">
                            <div class="card-header p-0 pt-1">
                                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                   
                                   
                                </ul>
                            </div>
                        <div class="card-body">
                            <form id="migratorio-form" name="register-form" onsubmit="return false" class="form-inline" role="form">
                                <div style="width: 200px;"></div>

                               <select name="id_cita" id="citas_dias" class="form-control" style="width: 400px; margin-top: 20px" required="true">
                                </select>
                                <div class="tab-content" id="custom-tabs-one-tabContent">
                                      
                            
                                </div><!--fin de una pestaña-->
                                   </br>
                            <div style="width: 400px;"></div>
                             <div style="width: 400px;">
                                 <button type="button" id="btnFormulario" class="btn btn-primary btn-sm" style=" margin-top: 10px; color: white">Guardar</button>
                                <button type="button" class="btn btn-danger btn-sm" style="margin-top: 10px; color: white" data-dismiss="modal">Cancelar</button>
                                 
                             </div>
                                
                        </form>
                                </div>


                            </div>
                        </div>
                        <!-- /.card -->
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
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
</div>
<!-- End Modal Mostrar-->
</form>
<?php
  include_once '../../plantillas/footer.php';
?>

<!-- SCRIPT ADICIONALES -->
<script type="text/javascript" src="<?= $base_url?>js/controladores/conf.js"></script>>
<script type="text/javascript" src="<?= $base_url?>js/controladores/asesorias/formularios-app.js"></script>
<script type="text/javascript" src="<?= $base_url?>js/controladores/asesorias/ramas.js"></script>
<!-- jquery-validation -->
<script src="<?= $base_url ?>plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= $base_url ?>plugins/jquery-validation/additional-methods.min.js"></script>
<script src="<?= $base_url ?>plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- CIERRE DE ETIQUETAS -->
<?php include_once '../../plantillas/cierre.php'; ?>
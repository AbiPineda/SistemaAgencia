<?php
include_once '../../config/parametros.php';
include_once '../../plantillas/cabecera.php';
include_once  '../../plantillas/navbar.php';?>
<!--aquie los scrip-->
<link href="<?= $base_url ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" all rel="stylesheet"type="text/css" />
<script>
    $(function () {
        $("#forma").change(function () {
            // alert($(this).val());

            if ($(this).val() === "Personalizado") {
                $("#unidad").prop("disabled", false);
            }


            if ($(this).val() === "Estándar") {
                $("#unidad").prop("disabled", true);
            }
        });
    });
</script>

<?php
include_once '../../plantillas/barra_lateral.php';
?>
<div class="content-wrapper" style="min-height: 1185.73px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Registro de Empresa</h1>
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
                <form id="empresa-form" name="register-form" onsubmit="return false" role="form">
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

                            <h3 class="timeline-header"><a href="#">Datos principales de la empresa</a></h3>

                            <div class="timeline-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                        <label for="cars">Nombre de la empresa</label>
                                        <input name="nombre_empresa" type="text" class="form-control" placeholder="Introduzca el nombre de la empresa" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="cars">Nombre del encargado</label>
                                             <input name="nombre_encargado" type="text" class="form-control" placeholder="Introduzca el nombre del encargado" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Dirección</label>
                                            <input name="direccion" type="text" class="form-control" placeholder="Introduzca la dirección" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Teléfono</label>
                                            <input name="telefono" type="text" class="form-control"
                                                   placeholder="Introduzca el telefono">
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                         <div class="form-group">
                                            <label for="cars">Seleccione la forma de operar</label>

                                            <select name="forma_operacion" id="forma" class="form-control">
                                                <option value="">Seleccione</option>
                                                <option value="Estándar">Estandar</option>
                                                <option value="Personalizado">Personalizado</option>
                                            </select>
                                        </div>
                                        
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                        <label for="cars">Seleccione libras o unidad</label>

                                            <select name="unidad" id="unidad" class="form-control" disabled="true">
                                                <option value="">Seleccione</option>
                                                <option value="lb">Libras</option>
                                                <option value="unidad">Unidad</option>
                                            </select>
                                        </div>
                                       
                                    </div>
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <div>
                       <i class="fas fa-save bg-gradient-lightblue"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fas fa-save"></i>Guardar</span>
                               <h3 class="timeline-header"><a href="#">Guardar Información</a></h3>
                                <div class="timeline-body">
                                    <div class="row">
                                    <div class="col-lg-1"></div><div class="col-lg-10"></div>
                                    <div class="col-lg-1"></div>
                                    <div style="text-align: right;width:577px;margin-top:-8px;">
                                 <a class="btn btn-primary btn-sm" id="btn-empresa" style="color: white">Guardar</a>
                                <a class="btn btn-danger btn-sm" style="color: white">Cancelar</a>
                                </div>
                            </div>
                         </div>
                     </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline item -->

             </div>
    </form>
                <!-- END timeline item -->
            
            </div>
        </div>
    </section>
</div>

<?php
  include_once '../../plantillas/footer.php';
?>
<script type="text/javascript" src="<?= $base_url?>js/controladores/encomienda/registro-empresa.js"></script>
<script src="<?= $base_url ?>plugins/sweetalert2/sweetalert2.min.js"></script>
<script type="text/javascript" src="<?= $base_url?>js/controladores/conf.js"></script>
<script src="<?= $base_url ?>plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= $base_url ?>plugins/jquery-validation/additional-methods.min.js"></script>
<?php include_once '../../plantillas/cierre.php'; ?>
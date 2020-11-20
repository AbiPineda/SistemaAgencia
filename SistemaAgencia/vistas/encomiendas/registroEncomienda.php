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
                                       <div class="col-lg-1"></div>
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label for="cars">Seleccione la Empresa</label>
                                                <select name='empresa' id='empresa' class="form-control">
                                                    <option value="">Seleccione</option>
                                                </select>
                                            </div>
                                        </div>

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
                         
                        </div>
                        <!-- END timeline item -->
                         <!-- timeline item -->
                        <div id="tabla">
                         
                        </div>
                        <!-- END timeline item -->
                        <!-- timeline item -->
                        <div id="botones"></div>
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
<div id="script"></div>
<script type="text/javascript" src="<?= $base_url?>js/controladores/encomienda/combo-empresa.js"></script>
<script type="text/javascript" src="<?= $base_url?>js/controladores/asesorias/combobox.js"></script>
<script type="text/javascript" src="<?= $base_url?>js/controladores/encomienda/creacion-encomienda.js"></script>
<script src="<?= $base_url ?>plugins/sweetalert2/sweetalert2.min.js"></script>
<script type="text/javascript" src="<?= $base_url?>js/controladores/conf.js"></script>
<script src="<?= $base_url ?>plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= $base_url ?>plugins/jquery-validation/additional-methods.min.js"></script>
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>

<?php include_once '../../plantillas/cierre.php'; ?>
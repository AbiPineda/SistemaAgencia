<?php
include_once '../../config/parametros.php';
include_once '../../plantillas/cabecera.php';
include_once  '../../plantillas/navbar.php';
include_once '../../plantillas/barra_lateral.php';
?>

<!--ESTILOS ADICIONALES-->
<link href="<?= $base_url ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" all rel="stylesheet">


<div class="content-wrapper" style="min-height: 1185.73px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Registro de Renta Cars</h1>
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

                    <div>
                        <i class="fas fa-car bg-blue"></i>
                        <div class="timeline-item">

                            <h3 class="timeline-header"><a href="">Datos Generales</a></h3>

                            <div class="timeline-body">
                                <form id="register-renta" name="register-form" onsubmit="return false">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Usuario</label>
                                                <input type="text" class="form-control" placeholder="Nombre del Usuario"
                                                    name="nombreUsuario" id="nombreUsuario" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Contraseña</label>
                                                <input type="password" class="form-control"
                                                    placeholder="Digite Contraseña" name="pass" id="pass"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Nombre de Renta Cars</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Nombre de Renta Cars" name="rentaCar" id="rentaCar"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Telefono</label>
                                                <input type="tel" class="form-control" placeholder="Numero de Telefono"
                                                    name="telefono" id="telefono" autocomplete="off"
                                                    pattern="^\d{3}-\d{4}-\d{4}$" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Lugar</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Dirección de Ubicación" name="lugar" id="lugar"
                                                    autocomplete="off">
                                            </div>
                                        </div>


                                        <div class="col-sm-12">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Descripción</label>
                                                <textarea type="text" class="form-control" name="descripcion"
                                                    id="descripcion" placeholder="Introduzca descripción"
                                                    autocomplete="off" rows="3"></textarea>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="timeline-footer" style="text-align: right;">
                                        <a class="btn btn-info btn-sm" style="color: white" type="button"
                                            id="btnGuardar">Guardar</a>
                                        <a class="btn btn-danger btn-sm" style="color: white">Cancelar</a>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
</div>


<?php
  include_once '../../plantillas/footer.php';
?>

<script>
$("#telefono").mask("999-999-999");
</script>
<script type="text/javascript" src="<?= $base_url?>js/controladores/conf.js"></script>
<script type="text/javascript" src="<?= $base_url?>js/controladores/vehiculos/insertarRentacars.js"></script>
<script type="text/javascript" src="<?= $base_url ?>plugins/sweetalert2/sweetalert2.min.js"></script>
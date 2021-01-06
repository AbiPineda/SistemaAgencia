<?php
include_once '../../config/parametros.php';
include_once '../../plantillas/cabecera.php';
include_once  '../../plantillas/navbar.php';
include_once '../../plantillas/barra_lateral.php';
?>

<link rel="stylesheet" href="<?= $base_url ?>dist/css/disponibilidad.css">

<style>

</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Disponibilidad</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Disponibilidad de Reserva</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <section class="content">
        <form id="flotaAutos" name="flotaAutos" role="form" onsubmit="return false">
            <div class="container">
                <div class="row" id="contenedorAutos">
                    <!-- Hover-Fall Efecto-->
                   
                </div>
            </div>
        </form>
    </section>

</div>


<?php
  include_once '../../plantillas/footer.php';
?>
<!-- SCRIPT ADICIONALES -->
<script type="text/javascript" src="<?= $base_url?>js/controladores/conf.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


<script type="text/javascript" src="<?= $base_url?>js/controladores/vehiculos/flota-app.js"></script>
<script type="text/javascript" src="<?= $base_url ?>plugins/sweetalert2/sweetalert2.min.js"></script>

<?php  include_once '../../plantillas/cierre.php';?>
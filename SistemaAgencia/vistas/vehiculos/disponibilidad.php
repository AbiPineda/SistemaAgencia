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

        <div class="container">
            <div class="row">
                <!-- Hover-Fall Efecto-->
                <div class="col-xs-6 col-sm-3">
                    <div class="fall-item fall-effect">
                        <img src="<?= $base_url ?>img/vehiculos/kia.jpg" width="500" height="500" />
                        <div class="mask">
                            <h2>Hover Fall</h2>
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of
                                spring which I enjoy with my whole heart.</p>
                            <a href="#" class="btn btn-default">Read More</a>
                        </div>
                    </div>
                    <h4 class="text-center"></h4>
                </div>

                <div class="col-xs-6 col-sm-3">
                    <div class="fall-item fall-effect">
                        <img src="http://placeimg.com/260/260/nature/8/" />
                        <div class="mask">
                            <h2>Hover Fall</h2>
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of
                                spring which I enjoy with my whole heart.</p>
                            <a href="#" class="btn btn-default">Read More</a>
                        </div>
                    </div>
                    <h4 class="text-center"></h4>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="fall-item fall-effect">
                        <img src="http://placeimg.com/260/260/nature/8/" />
                        <div class="mask">
                            <h2>Hover Fall</h2>
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of
                                spring which I enjoy with my whole heart.</p>
                            <a href="#" class="btn btn-default">Read More</a>
                        </div>
                    </div>
                    <h4 class="text-center"></h4>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="fall-item fall-effect">
                        <img src="http://placeimg.com/260/260/nature/8/" />
                        <div class="mask">
                            <h2>Hover Fall</h2>
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of
                                spring which I enjoy with my whole heart.</p>
                            <a href="#" class="btn btn-default">Read More</a>
                        </div>
                    </div>
                    <h4 class="text-center"></h4>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="fall-item fall-effect">
                        <img src="http://placeimg.com/260/260/nature/8/" />
                        <div class="mask">
                            <h2>Hover Fall</h2>
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of
                                spring which I enjoy with my whole heart.</p>
                            <a href="#" class="btn btn-default">Read More</a>
                        </div>
                    </div>
                    <h4 class="text-center"></h4>
                </div>

            </div>
        </div>

    </section>

</div>


<?php
  include_once '../../plantillas/footer.php';
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
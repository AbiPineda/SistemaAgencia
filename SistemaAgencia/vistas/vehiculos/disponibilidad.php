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

<form id="miFormulario" name="miFormulario" role="form" onsubmit="return false">
    <!-- Modal EDITAR-->
    <div class="modal fade" id="modal-editar">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <section class="content">

                    <!-- Default box -->
                    <div class="card card-solid">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="col-12">
                                        <img src="../../dist/img/prod-1.jpg" class="product-image" alt="Product Image">
                                    </div>
                                    <div class="col-12 product-image-thumbs">
                                        <div class="product-image-thumb active"><img src="../../dist/img/prod-1.jpg"
                                                alt="Product Image"></div>
                                        <div class="product-image-thumb"><img src="../../dist/img/prod-2.jpg"
                                                alt="Product Image"></div>
                                        <div class="product-image-thumb"><img src="../../dist/img/prod-3.jpg"
                                                alt="Product Image"></div>
                                        <div class="product-image-thumb"><img src="../../dist/img/prod-4.jpg"
                                                alt="Product Image"></div>
                                        <div class="product-image-thumb"><img src="../../dist/img/prod-5.jpg"
                                                alt="Product Image"></div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <h3 class="my-3" name="mode1" id="mode1"></h3>
                                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu
                                        stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu
                                        banh mi, qui irure terr.</p>
                                    <hr>
                                    <a class="btn btn-primary btn-block mb-3" >Categoría: Sedan</a>

                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Caracteristicas</h3>

                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool"
                                                    data-card-widget="collapse"><i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <ul class="nav nav-pills flex-column">
                                                <li class="nav-item active">
                                                    <a href="#" class="nav-link">
                                                        <i class="fas fa-inbox"></i> Puertas
                                                        <span class="badge bg-primary float-right"><h7 name="puerta" id="puerta"></h7></span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        <i class="fas fa-user-friends"></i> Pasajeros
                                                        <span class="badge bg-primary float-right"><h7 name="pasajero" id="pasajero"></h7></span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        <i class="fas fa-tachometer-alt"></i> Kilometraje
                                                        <span class="badge bg-warning float-right"><p name="kilometraje" id="kilometraje"></p></span>
                                                       
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        <i class="fas fa-gas-pump"></i> Tipo de Combustible
                                                        <span class="badge bg-warning float-right"><p name="combustible" id="combustible"></p></span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        <i class="fas fa-car"></i> Transmisión
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bg-gray py-2 px-3 mt-4">
                                        <h2 class="mb-0" name="precio" id="precio"></h2>
                                    </div>
                                    <div class="mt-4">
                                        <div class="btn btn-primary btn-lg btn-flat style='padding: 0.5rem 7.2rem'">
                                            <i class="fas fa-cart-plus fa-lg mr-2"></i>
                                            Reservar Vehiculo
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <nav class="w-100">
                                    <div class="nav nav-tabs" id="product-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab"
                                            href="#product-desc" role="tab" aria-controls="product-desc"
                                            aria-selected="true">Detalles</a>
                                        <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab"
                                            href="#product-comments" role="tab" aria-controls="product-comments"
                                            aria-selected="false">Descripción</a>
                                    </div>
                                </nav>
                                <div class="tab-content p-3" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="product-desc" role="tabpanel"
                                        aria-labelledby="product-desc-tab">
                                        <p name="detalles" id="detalles"></p>
                                    </div>
                                    <div class="tab-pane fade" id="product-comments" role="tabpanel"
                                        aria-labelledby="product-comments-tab" name="descripcion" id="descripcion">
                                        <p name="descripcion" id="descripcion"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </section>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- End Modal EDITAR-->
</form>


<?php
  include_once '../../plantillas/footer.php';
?>
<!-- SCRIPT ADICIONALES -->
<script type="text/javascript" src="<?= $base_url?>js/controladores/conf.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


<script type="text/javascript" src="<?= $base_url?>js/controladores/vehiculos/flota-app.js"></script>
<script type="text/javascript" src="<?= $base_url ?>plugins/sweetalert2/sweetalert2.min.js"></script>

<?php  include_once '../../plantillas/cierre.php';?>
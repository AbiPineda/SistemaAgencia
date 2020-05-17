<!--background-color: #f0f0f0;-->
<?php
include_once('../../config/parametros.php');
include_once '../../plantilla/cabecera.php';
include_once '../../plantilla/menu.php';
?>

<br><br>





<div class="blog-page area-padding">
    <div class="container">
        <div class="row">
            <!-- End left sidebar -->
            <!-- Start single blog -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">

                    <!-- SECTION -->
                    <div class="section">
                        <!-- container -->
                        <div class="container">
                            <!-- row -->
                            <div class="row">

                                <!-- section title -->
                                <div class="col-md-12">
                                    <div class="section-title">
                                        <h3 class="title">Completa la transaccion</h3>
                                        <div class="section-nav">

                                        </div>
                                    </div>
                                </div>
                                <!-- /section title -->

                                <!-- Products tab & slick -->
                                <div class="col-md-12">
                                    <div class="row">



                                        <div class="col-md-8">

                                            <img role="presentation" src="http://localhost/Plantillas/pagina/img/tours/panama.jpg" class="zoomImg"    >

                                        </div>

                                        <!-- Order Details -->
                                        <div class="col-md-4 order-details" style="background: white">
                                            <div class="section-title text-center">
                                                <h3 class="title">Tu Orden</h3>
                                            </div>
                                            <div class="order-summary">
                                                <div class="order-col">
                                                    <div><strong>VIAJE</strong></div>
                                                    <div><strong>TOTAL</strong></div>
                                                </div>
                                                <div class="order-products">
                                                    <div class="order-col">
                                                        <div>1x Vamos a Panama (Adulto)</div>
                                                        <div>280.00</div>
                                                    </div>
                                                    <div class="order-col">
                                                        <div>2x Vamos a Panama (Niños)</div>
                                                        <div>$400.00</div>
                                                    </div>
                                                </div>
                                                <div class="order-col">
                                                    <div>Otros</div>
                                                    <div><strong>$0.00</strong></div>
                                                </div>
                                                <div class="order-col">
                                                    <div><strong>TOTAL</strong></div>
                                                    <div><strong class="order-total">$2940.00</strong></div>
                                                </div>
                                            </div>

                                            <div class="input-checkbox">
                                                <input type="checkbox" id="terms">
                                                <label for="terms">
                                                    <span></span>
                                                    Acepto los <a href="#">terminos &amp; condiciones</a>
                                                </label>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <?php
                                                    include_once './botonPaypal.php';
                                                    ?>

                                                </div>
                                            </div>


                                            <div class="row">
                                                <!-- Start Google Map -->
                                                <div class="col-md-12">
                                                    <button class="btn btn-lg btn-block boton-azul" >Realizar Cita</button>
                                                </div>






                                            </div>
                                            <!-- /Order Details -->


                                        </div>
                                    </div>
                                    <!-- Products tab & slick -->
                                </div>
                                <!-- /row -->
                            </div>
                            <!-- /container -->
                        </div>
                        <!-- /SECTION -->




                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->

    <div class="clearfix"></div>





    <?php
    include_once '../../plantilla/footer.php';
    ?>

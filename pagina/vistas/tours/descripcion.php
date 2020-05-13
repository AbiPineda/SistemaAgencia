<?php
include_once('../../config/parametros.php');
include_once '../../plantilla/cabecera.php';
include_once '../../plantilla/menu.php';
?>
<!-- Slick -->
<link type="text/css" rel="stylesheet" href="../../css/slick.css" />
<link type="text/css" rel="stylesheet" href="../../css/slick-theme.css" />

<!-- nouislider -->
<link type="text/css" rel="stylesheet" href="../../css/nouislider.min.css" />

<!-- Font Awesome Icon -->
<link rel="stylesheet" href="../../css/font-awesome.min.css">

<!-- Custom stlylesheet -->
<link type="text/css" rel="stylesheet" href="../../css/styleGalery.css" />


<br>
<br><br>


<div id="portfolio" class="portfolio-area area-padding fix">
    <div class="container">
        <div class="row">
            <!-- inicio -->

            <!-- Product main img -->
            <div class="col-md-5 col-md-push-2">
                <div id="product-main-img">
                    <div class="product-preview">
                        <img src="../../img/tours/panama.jpg" alt="">
                    </div>

                    <div class="product-preview">
                        <img src="../../img/tours/conchagua.jpg" alt="">
                    </div>

                    <div class="product-preview">
                        <img src="../../img/tours/machupichu.jpg" alt="">
                    </div>

                    <div class="product-preview">
                        <img src="../../img/tours/nicaragua.jpg" alt="">
                    </div>
                </div>
            </div>
            <!-- /Product main img -->
            <!-- Product thumb imgs -->
            <div class="col-md-2  col-md-pull-5">
                <div id="product-imgs">
                    <div class="product-preview">
                        <img src="../../img/tours/panama.jpg" alt="">
                    </div>

                    <div class="product-preview">
                        <img src="../../img/tours/vuelos.jpg" alt="">
                    </div>

                    <div class="product-preview">
                        <img src="../../img/tours/conchagua.jpg" alt="">
                    </div>

                    <div class="product-preview">
                        <img src="../../img/tours/machupichu.jpg" alt="">
                    </div>
                </div>
            </div>
            <!-- /Product thumb imgs -->
            <!-- Product details -->
            <div class="col-md-5">
                <div class="product-details">
                    <div style="text-align: center"><h2 class="product-name">!!Vamos a Nicaragua!!!</h2></div>


                    <div class="row">
                        <div class="col-md-6" style="text-align: center">
                            <h3 class="product-price">$980.00 <del class="product-old-price">$990.00</del>
                            </h3>
                        </div>
                        <div class="col-md-6" style="text-align: center"> <div class="add-to-cart">
                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Reservar Paquete</button>
                            </div></div>



                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>

                    <h2 class="product-name centrado">Lugar y hora de salida</h2>
                    <p class="centrado">Parque Cañas San Vicente 8:00 am</p>
                    <div class="row">
                        <div class="col-md-4 centrado" ><p>niños(0 a 12)</p><input type="number"></div>
                        <div class="col-md-4 centrado"><p>Adultos(12 a 60)</p><input type="number"></div>
                        <div class="col-md-4 centrado"><p>Tercera Edad(60+)</p><input type="number"></div>
                    </div>



                </div>
            </div>
            <!-- /Product details -->

            <!-- Product tab -->
            <div class="col-md-12">
                <div id="product-tab">
                    <!-- product tab nav -->
                    <ul class="tab-nav">
                        <li class="active"><a data-toggle="tab" href="#tab1">Sitios Turisticos</a></li>
                        <li><a data-toggle="tab" href="#tab2">Hoteles</a></li>
                        <li><a data-toggle="tab" href="#tab3">El Viaje Incluye</a></li>
                        <li><a data-toggle="tab" href="#tab4">El Viaje No Incluye</a></li>
                        <li><a data-toggle="tab" href="#tab5">Requisitos del Viaje</a></li>
                        <li><a data-toggle="tab" href="#tab6">Promociones Especiales</a></li>
                    </ul>
                    <!-- /product tab nav -->

                    <!-- product tab content -->
                    <div class="tab-content">
                        <!-- tab1  -->
                        <div id="tab1" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /tab1  -->

                        <!-- tab2  -->
                        <div id="tab2" class="tab-pane fade in">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /tab2  -->

                        <!-- tab3  -->
                        <div id="tab3" class="tab-pane fade in">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="centrado">TRANSPORTE DE LUJO  (TV, BAÑO, ASIENTOS RECLINABLES, A/C)<br>
                                        HOTELES<br>
                                        5 DESAYUNOS<br>
                                        1 CENA<br>
                                        REFRIGERIO A BORDO<br>
                                        GUÍA DESDE EL SALVADOR</p>
                                </div>
                            </div>
                        </div>
                        <!-- /tab3  -->

                        <!-- tab4  -->
                        <div id="tab4" class="tab-pane fade in">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="centrado">SEGURO DE VIAJE<br>
                                        NI OTROS NO ESPECIFICADOS EN EL PROGRAMA.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /tab4  -->

                        <!-- tab5  -->
                        <div id="tab5" class="tab-pane fade in">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="centrado">Pasaporte Vigente.<br>
                                        Vacuna contra la fiebre amarilla..</p>
                                </div>
                            </div>
                        </div>
                        <!-- /tab5  -->

                        <!-- tab5  -->
                        <div id="tab6" class="tab-pane fade in">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="centrado">$228.00 (TERCERA EDAD)<br>
                                        2 x $249.00 (CADA UNO)<br>
                                        !!NIÑOS PRECIOS ESPECIALES!!
                                        .</p>
                                </div>
                            </div>
                        </div>
                        <!-- /tab5  -->
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>

<?php
include_once '../../plantilla/footer.php';
?>
<!-- jQuery Plugins -->
<script src="../../js/slick.min.js"></script>
<script src="../../js/jquery.zoom.min.js"></script>
<script src="../../js/mainG.js"></script>

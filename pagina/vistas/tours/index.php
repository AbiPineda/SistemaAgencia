<?php
include_once('../../config/parametros.php');
include_once '../../plantilla/cabecera.php';
include_once '../../plantilla/menu.php';
?>

<!-- Slick -->


<!--Banner de auto -->
<div class="header-bg-autos page-area">
    <div class="home-overly"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="slider-content text-center">
                    <div class="header-bottom">
                        <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                            <h1 class="title2">Los Mejores Tours</h1>
                        </div>
                        <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                            <span>
                                <h2 class="title2">Con Los Mejores Precios y calidad</h2>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Banner de auto -->





<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12 fondo-blanco">
                <div class="section-title">
                    <h3 class="title">Nuestros Tours</h3>
                    <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">Nacional</a></li>
                            <li><a data-toggle="tab" href="#tab2">Internacional</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab 1-->
                        <div id="tab1" class="tab-pane active">
                            <div class="products-slick" data-nav="#slick-nav-1">
                                <!-- product -->
                                <div class="product">
                                    <div class="product-img">
                                        <img src="../../img/tours/conchagua.jpg" alt="">
                                        <div class="product-label">
                                            <span class="sale">-30%</span>
                                            <span class="new">NEW</span>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Nacional</p>
                                        <h3 class="product-name"><a href="#">Vamos a Conchagua</a>
                                        </h3>
                                        <h4 class="product-price">$980.00 <del
                                                class="product-old-price">$990.00</del></h4>


                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn"  onclick="location.href = 'detalle-tour.php'"  >
                                            <i class="fa fa-eye"></i>Ver
                                        </button>
                                    </div>
                                </div>
                                <!-- /product -->

                                <!-- product -->
                                <div class="product">
                                    <div class="product-img">
                                        <img src="../../img/tours/machupichu.jpg" alt="">
                                        <div class="product-label">
                                            <span class="new">NEW</span>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Nacional</p>
                                        <h3 class="product-name"><a href="#">product name goes
                                            </a></h3>
                                        <h4 class="product-price">$980.00 <del
                                                class="product-old-price">$990.00</del></h4>
                                    </div>

                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn"  onclick="location.href = 'detalle-tour.php'"><i
                                                class="fa fa-eye"></i>Ver</button>
                                    </div>
                                </div>
                                <!-- /product -->

                                <!-- product -->
                                <div class="product">
                                    <div class="product-img">
                                        <img src="../../img/tours/panama.jpg" alt="">
                                        <div class="product-label">
                                            <span class="sale">-30%</span>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Nacional</p>
                                        <h3 class="product-name"><a href="#">Vamos a Panama
                                            </a></h3>
                                        <h4 class="product-price">$980.00 <del
                                                class="product-old-price">$990.00</del></h4>


                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn"  onclick="location.href = 'detalle-tour.php'"><i
                                                class="fa fa-eye"></i>Ver</button>
                                    </div>
                                </div>
                                <!-- /product -->

                                <!-- product -->
                                <div class="product">
                                    <div class="product-img">
                                        <img src="../../img/tours/panama.jpg" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">Vamos Otra vez a PAnama
                                            </a></h3>
                                        <h4 class="product-price">$980.00 <del
                                                class="product-old-price">$990.00</del></h4>


                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn"  onclick="location.href = 'detalle-tour.php'"><i
                                                class="fa fa-eye"></i>Ver</button>
                                    </div>
                                </div>
                                <!-- /product -->

                                <!-- product -->
                                <div class="product">
                                    <div class="product-img">
                                        <img src="../../img/tours/conchagua.jpg" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Internacional</p>
                                        <h3 class="product-name"><a href="#">Vamos a Conchagua</a>
                                        </h3>
                                        <h4 class="product-price">$980.00 <del
                                                class="product-old-price">$990.00</del></h4>


                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn"  onclick="location.href = 'detalle-tour.php'"><i
                                                class="fa fa-eye"></i>Ver</button>
                                    </div>
                                </div>
                                <!-- /product -->
                            </div>
                            <div id="slick-nav-1" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab 1-->

                        <!-- tab 2-->
                        <div id="tab2" class="tab-pane">
                            <div class="products-slick" data-nav="#slick-nav-1">


                                <!-- product -->
                                <div class="product">
                                    <div class="product-img">
                                        <img src="../../img/tours/panama.jpg" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Internacional</p>
                                        <h3 class="product-name"><a href="#">product name goes
                                                here</a></h3>
                                        <h4 class="product-price">$980.00 <del
                                                class="product-old-price">$990.00</del></h4>


                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn"  onclick="location.href = 'detalle-tour.php'"><i
                                                class="fa fa-eye"></i>Ver</button>
                                    </div>
                                </div>
                                <!-- /product -->

                                <!-- product -->
                                <div class="product">
                                    <div class="product-img">
                                        <img src="../../img/tours/conchagua.jpg" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Internacional</p>
                                        <h3 class="product-name"><a href="#">product name goes
                                                here</a></h3>
                                        <h4 class="product-price">$980.00 <del
                                                class="product-old-price">$990.00</del></h4>


                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn"  onclick="location.href = 'detalle-tour.php'"><i
                                                class="fa fa-eye"></i>Ver</button>
                                    </div>
                                </div>
                                <!-- /product -->
                            </div>
                            <div id="slick-nav-1" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab 2-->

                    </div>
                </div>
            </div>
            <!-- Products tab & slick -->
        </div>
        <!-- /row --> 
    </div>
    <!-- /container -->


</div>
<!-- /SECTION -->

<br><br><br>


<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12 fondo-blanco">
                <div class="section-title">
                    <h3 class="title">Crea tu propio Tour</h3>

                </div>
                <div class="row">
                    <!-- single-well start-->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="well-left">
                            <div class="single-well">
                                <a href="#">
                                    <img src="../../img/tours/machupichu.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end-->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="well-middle">
                            <div class="single-well">
                                <a href="#">
                                    <h4 class="sec-head">Agencia de Viajes</h4>
                                </a>
                                <p>
                                   Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                   Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                   when an unknown printer took a galley of type and scrambled it to make a type 
                                   specimen book. It has survived not only five centuries, but also the leap into 
                                   electronic typesetting, remaining essentially unchanged. It was popularised in
                                   the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                   and more recently with desktop publishing software like Aldus PageMaker including
                                   versions of Lorem Ipsum.
                                </p>
                                <a href="cotizacion.php" class=" btn boton-azul">CREAR EL TUR DE TUS SUEÑOS</a>
<!--                                
                                <ul>
                                  <li>
                                    <i class="fa fa-check"></i> Interior design Package
                                  </li>
                                  <li>
                                    <i class="fa fa-check"></i> Building House
                                  </li>
                                  <li>
                                    <i class="fa fa-check"></i> Reparing of Residentail Roof
                                  </li>
                                  <li>
                                    <i class="fa fa-check"></i> Renovaion of Commercial Office
                                  </li>
                                  <li>
                                    <i class="fa fa-check"></i> Make Quality Products
                                  </li>
                                </ul>
                                -->
                            </div>
                        </div>
                    </div>
                    <!-- End col-->
                </div>


            </div>
        </div>
    </div>
</div>
<!-- SECTION -->



<div class="clearfix"></div>


<!-- end Footer bottom Area -->




<br>
<?php
include_once '../../plantilla/footer.php';
?>

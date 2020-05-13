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

<!--Banner de auto -->
<div class="header-bg-autos page-area">
    <div class="home-overly"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="slider-content text-center">
                    <div class="header-bottom">
                        <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                            <h1 class="title2">Alquiler de Vehículos</h1>
                        </div>
                        <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                            <span>
                                <a href="" class="ready-btn">ver más</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Banner de auto -->



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
                                        <h3 class="title">Flota Disponible</h3>
                                        <div class="section-nav">
                                            <ul class="section-tab-nav tab-nav">
                                                <li class="active"><a data-toggle="tab" href="#tab1">Sedán</a></li>
                                                <li><a data-toggle="tab" href="#tab1">Económico</a></li>
                                                <li><a data-toggle="tab" href="#tab1">Microbus</a></li>
                                                <li><a data-toggle="tab" href="#tab1">Pickup</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /section title -->

                                <!-- Products tab & slick -->
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="products-tabs">
                                            <!-- tab -->
                                            <div id="tab1" class="tab-pane active">
                                                <div class="products-slick" data-nav="#slick-nav-1">
                                                    <!-- product -->
                                                    <div class="product">
                                                        <div class="product-img">
                                                            <img src="./img/hyundai.png" alt="">
                                                            <div class="product-label">
                                                                <span class="sale">-30%</span>
                                                                <span class="new">NEW</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-body">
                                                            <p class="product-category">Category</p>
                                                            <h3 class="product-name"><a href="#">product name goes
                                                                    here</a></h3>
                                                            <h4 class="product-price">$980.00 <del
                                                                    class="product-old-price">$990.00</del></h4>
                                                            
                                                            <div class="product-btns">
                                                                <button class="add-to-wishlist"><i
                                                                        class="fa fa-heart-o"></i><span
                                                                        class="tooltipp">Lista de Deseos</span></button>
                                                                
                                                                <button class="quick-view"><i
                                                                        class="fa fa-eye"></i><span
                                                                        class="tooltipp">Detalle</span></button>
                                                            </div>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <button class="add-to-cart-btn"><i
                                                                    class="fa fa-shopping-cart"></i>Reservar</button>
                                                        </div>
                                                    </div>
                                                    <!-- /product -->

                                                    <!-- product -->
                                                    <div class="product">
                                                        <div class="product-img">
                                                            <img src="./img/mishubichi.png" alt="">
                                                            <div class="product-label">
                                                                <span class="new">NEW</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-body">
                                                            <p class="product-category">Category</p>
                                                            <h3 class="product-name"><a href="#">product name goes
                                                                    here</a></h3>
                                                            <h4 class="product-price">$980.00 <del
                                                                    class="product-old-price">$990.00</del></h4>
                                                           
                                                            <div class="product-btns">
                                                                <button class="add-to-wishlist"><i
                                                                        class="fa fa-heart-o"></i><span
                                                                        class="tooltipp">Lista de Deseos</span></button>
                                                               
                                                                <button class="quick-view"><i
                                                                        class="fa fa-eye"></i><span
                                                                        class="tooltipp">Detalle</span></button>
                                                            </div>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <button class="add-to-cart-btn"><i
                                                                    class="fa fa-shopping-cart"></i>Detalle</button>
                                                        </div>
                                                    </div>
                                                    <!-- /product -->

                                                    <!-- product -->
                                                    <div class="product">
                                                        <div class="product-img">
                                                            <img src="./img/ford.png" alt="">
                                                            <div class="product-label">
                                                                <span class="sale">-30%</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-body">
                                                            <p class="product-category">Category</p>
                                                            <h3 class="product-name"><a href="#">product name goes
                                                                    here</a></h3>
                                                            <h4 class="product-price">$980.00 <del
                                                                    class="product-old-price">$990.00</del></h4>
                                                            
                                                            <div class="product-btns">
                                                                <button class="add-to-wishlist"><i
                                                                        class="fa fa-heart-o"></i><span
                                                                        class="tooltipp">Lista de Deseos</span></button>
                                                              
                                                                <button class="quick-view"><i
                                                                        class="fa fa-eye"></i><span
                                                                        class="tooltipp">Detalle</span></button>
                                                            </div>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <button class="add-to-cart-btn"><i
                                                                    class="fa fa-shopping-cart"></i>Reservar</button>
                                                        </div>
                                                    </div>
                                                    <!-- /product -->

                                                    <!-- product -->
                                                    <div class="product">
                                                        <div class="product-img">
                                                            <img src="./img/hyundai-elantra.png" alt="">
                                                        </div>
                                                        <div class="product-body">
                                                            <p class="product-category">Category</p>
                                                            <h3 class="product-name"><a href="#">product name goes
                                                                    here</a></h3>
                                                            <h4 class="product-price">$980.00 <del
                                                                    class="product-old-price">$990.00</del></h4>
                                                           
                                                            <div class="product-btns">
                                                                <button class="add-to-wishlist"><i
                                                                        class="fa fa-heart-o"></i><span
                                                                        class="tooltipp">Lista de Deseos</span></button>
                                                               
                                                                <button class="quick-view"><i
                                                                        class="fa fa-eye"></i><span
                                                                        class="tooltipp">Detalle</span></button>
                                                            </div>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <button class="add-to-cart-btn"><i
                                                                    class="fa fa-shopping-cart"></i>Reservar</button>
                                                        </div>
                                                    </div>
                                                    <!-- /product -->

                                                    <!-- product -->
                                                    <div class="product">
                                                        <div class="product-img">
                                                            <img src="./img/sportero.png" alt="">
                                                        </div>
                                                        <div class="product-body">
                                                            <p class="product-category">Category</p>
                                                            <h3 class="product-name"><a href="#">product name goes
                                                                    here</a></h3>
                                                            <h4 class="product-price">$980.00 <del
                                                                    class="product-old-price">$990.00</del></h4>
                                                           
                                                            <div class="product-btns">
                                                                <button class="add-to-wishlist"><i
                                                                        class="fa fa-heart-o"></i><span
                                                                        class="tooltipp">Lista de Deseos</span></button>
                                                             
                                                                <button class="quick-view"><i
                                                                        class="fa fa-eye"></i><span
                                                                        class="tooltipp">Detalle</span></button>
                                                            </div>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <button class="add-to-cart-btn"><i
                                                                    class="fa fa-shopping-cart"></i>Reservar</button>
                                                        </div>
                                                    </div>
                                                    <!-- /product -->
                                                </div>
                                                <div id="slick-nav-1" class="products-slick-nav"></div>
                                            </div>
                                            <!-- /tab -->
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




                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog Area -->

<div class="clearfix"></div>


<!-- end Footer bottom Area -->





<?php 
include_once '../../plantilla/footer.php';
 ?>

<script src="../../js/slick.min.js"></script>
<script src="../../js/nouislider.min.js"></script>
<script src="../../js/jquery.zoom.min.js"></script>
<script src="../../js/mainG.js"></script>
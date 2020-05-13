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
<div class="header-bg page-area">
    <div class="home-overly"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="slider-content text-center">
                    <div class="header-bottom">
                        <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                            <h1 class="title2">NOSE xD</h1>
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



<div id="portfolio" class="portfolio-area area-padding fix">
    <div class="container">
        <div class="row">
            <!-- inicio -->

            <!-- Product main img -->
            <div class="col-md-5 col-md-push-2">
                <div id="product-main-img">
                    <div class="product-preview">
                        <img src="./img/product01.png" alt="">
                    </div>

                    <div class="product-preview">
                        <img src="./img/product03.png" alt="">
                    </div>

                    <div class="product-preview">
                        <img src="./img/product06.png" alt="">
                    </div>

                    <div class="product-preview">
                        <img src="./img/product08.png" alt="">
                    </div>
                </div>
            </div>
            <!-- /Product main img -->
            <!-- Product thumb imgs -->
            <div class="col-md-2  col-md-pull-5">
                <div id="product-imgs">
                    <div class="product-preview">
                        <img src="./img/product01.png" alt="">
                    </div>

                    <div class="product-preview">
                        <img src="./img/product03.png" alt="">
                    </div>

                    <div class="product-preview">
                        <img src="./img/product06.png" alt="">
                    </div>

                    <div class="product-preview">
                        <img src="./img/product08.png" alt="">
                    </div>
                </div>
            </div>
            <!-- /Product thumb imgs -->
            <!-- Product details -->
            <div class="col-md-5">
                <div class="product-details">
                    <h2 class="product-name">product name goes here</h2>
                    <div>
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        
                    </div>
                    <div>
                        <h3 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h3>
                        
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>

                    

                    <div class="add-to-cart">
                        
                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                    </div>

                   

                </div>
            </div>
            <!-- /Product details -->

            <!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
								<li><a data-toggle="tab" href="#tab2">Details</a></li>
								<li><a data-toggle="tab" href="#tab3">Reviews (3)</a></li>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>

	

        </div>
        <!-- /.content-wrapper -->
    </div>
</div>




<?php 
include_once '../../plantilla/footer.php';
 ?>
 <!-- jQuery Plugins -->
<script src="../../js/slick.min.js"></script>
<script src="../../js/jquery.zoom.min.js"></script>
<script src="../../js/mainG.js"></script>

<?php
include_once('./config/parametros.php');
include_once './plantilla/cabecera.php';
include_once './plantilla/menu.php';

?>

<style>
@import url("https://fonts.googleapis.com/css?family=Raleway:300,400");

* {
    margin: 0;
    padding: 0;
}

header {
    padding: 0px 0;
}

header h1 {
    color: grey;
    text-shadow: 1px 3px 4px rgba(0, 0, 0, 0.4);
    text-align: center;
    font-size: 40px;
    letter-spacing: 0.4px;
    font-family: "Raleway", sans-serif;
}

.container {
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    justify-content: center;
    padding: 0 30px;
}

.container .thumbex {
    margin: 10px 20px 30px;
    width: 100%;
    min-width: 250px;
    max-width: 435px;
    height: 300px;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    overflow: hidden;
    outline: 2px solid white;
    outline-offset: -15px;
    background-color: blue;
    box-shadow: 5px 10px 40px 5px rgba(0, 0, 0, 0.5);
}

.container .thumbex .thumbnail {
    overflow: hidden;
    min-width: 250px;
    height: 300px;
    position: relative;
    opacity: 0.88;
    backface-visibility: hidden;
    transition: all 0.4s ease-out;
}

.container .thumbex .thumbnail img {
    position: absolute;
    z-index: 1;
    left: 50%;
    top: 50%;
    height: 115%;
    width: auto;
    transform: translate(-50%, -50%);
    backface-visibility: hidden;
}

.container .thumbex .thumbnail span {
    position: absolute;
    z-index: 2;
    top: calc(150px - 20px);
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.7);
    padding: 10px 50px;
    margin: 0 45px;
    text-align: center;
    font-size: 24px;
    color: white;
    font-weight: 300;
    font-family: "Raleway", sans-serif;
    letter-spacing: 0.2px;
    transition: all 0.3s ease-out;
}

.container .thumbex .thumbnail:hover {
    backface-visibility: hidden;
    transform: scale(1.15, 1.15);
    opacity: 1;
}

.container .thumbex .thumbnail:hover span {
    opacity: 0;
}
</style>



<!--Banner de auto -->
<div class="header-bg-autos page-area">
    <div class="home-overly"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <br>
                <br>
                <br>
                <br><br><br>
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
                            

                                <header>
                                    <h1>¡Bienvenidos!</h1>
                                </header>
                                <div class="container">
                                    <div class="thumbex">
                                        <div class="thumbnail"><a href="javascript:void(0)"> <img
                                                    src="https://bit.ly/2vnI5ZM" /><span>Paquetes</span></a>
                                        </div>
                                    </div>
                                    <div class="thumbex">
                                        <div class="thumbnail"><a href="javascript:void(0)"><img
                                                    src="https://consultingperu.com.pe/wp-content/uploads/2018/08/Comprar_Autos-portada-600x300.jpg" /><span>Vehiculos</span></a>
                                        </div>
                                    </div>
                                    <div class="thumbex">
                                        <div class="thumbnail"><a href="javascript:void(0)"><img
                                                    src="https://bit.ly/2NZ6ahm" /><span>Tours</span></a>
                                        </div>
                                    </div>
                                </div>






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
include_once './plantilla/footer.php';
 ?>
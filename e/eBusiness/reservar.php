<!doctype html>
<html lang="en">

    <head>

        <script src="https://www.paypalobjects.com/api/checkout.js"></script>

        <meta charset="utf-8">
        <title>Martinez Travels & Tours</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicons -->
        <link href="img/favicon.png" rel="icon">
        <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900"
            rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
        <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
        <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
        <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/venobox/venobox.css" rel="stylesheet">

        <!-- Nivo Slider Theme -->
        <link href="css/nivo-slider-theme.css" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Responsive Stylesheet File -->
        <link href="css/responsive.css" rel="stylesheet">

        <!-- =======================================================
          Theme Name: eBusiness
          Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
          Author: BootstrapMade.com
          License: https://bootstrapmade.com/license/
        ======================================================= -->
    </head>

    <body data-spy="scroll" data-target="#navbar-example">

        <div id="preloader"></div>

        <header>
            <!-- header-area start -->
            <div id="sticker" class="header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">

                            <!-- Navigation -->
                            <nav class="navbar navbar-default">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                            data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <!-- Brand -->
                                    <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                                        <h1><span>Martínez</span>Travels & Tours</h1>
                                        <!-- Uncomment below if you prefer to use an image logo -->
                                        <!-- <img src="img/logo.png" alt="" title=""> -->
                                    </a>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active">
                                            <a class="page-scroll" href="#home">Inicio</a>
                                        </li>
                                        <li>
                                            <a class="page-scroll" href="#about">¿Quienes somos?</a>
                                        </li>

                                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios<span class="caret"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li>
                                                    <a  href="#pricing">Asesoria Migratora</a>
                                                </li>
                                                <li>
                                                    <a  href="#pricing">Paquetes</a>
                                                </li>
                                                <li>
                                                    <a href="#pricing">Tours</a>
                                                </li>
                                                <li>
                                                    <a href="#pricing">Renta de Vehiculos</a>
                                                </li>
                                            </ul> 
                                        </li>

                                        <li>
                                            <a class="page-scroll" href="#portfolio">Promociones</a>
                                        </li>



                                        <li>
                                            <a class="page-scroll" href="#contact">Contacto</a>
                                        </li>

                                        <li>
                                            <a class="page-scroll" href="#contact">Regristrate</a>
                                        </li>


                                    </ul>
                                </div>
                                <!-- navbar-collapse -->
                            </nav>
                            <!-- END: Navigation -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-area end -->
        </header>
        <!-- header end -->

        <!-- start pricing area -->
        <div id="pricing" class="pricing-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>PASO FINAL</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">

                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="pri_table_list active">

                            <h3>ESTAS A PUNTO DE PAGAR <br /> <span>$35.99 (50%) RESERVA DE VIAJE </span><br /> <span>DETALLES DE LA COMPRA</span></h3>

                            <ol>
                                <li class="check">VOLCAN DE CONCHAGUA</li>
                                <li class="check">MIRADOR ESPIRITU DE LA MONTAÑA</li>
                                <li class="check">PARQUE DE LA FAMILIA</li>
                                <li class="check">TRANSPORTE CON A/C</li>
                                <li class="check">TRANSPORTE 4x4</li>
                                <li class="check">ENTRADA AL VOLCAN</li>
                                <li class="check cross">DESAYUNO</li>
                                <li class="check cross">ALMUERZO</li>
                                <li class="">NUMERO DE PERSONAS  (2)</li>



                            </ol>
                            <div id="paypal-button"></div>
                            <script src="https://www.paypalobjects.com/api/checkout.js"></script>
                            <script>
                                paypal.Button.render({
                                    // Configure environment
                                    env: 'sandbox', // sandbox | production


                                    style: {
                                        label: 'generic', // checkout | credit | pay | buynow | generic
                                        size: 'responsive', // small | medium | large | responsive
                                        shape: 'pill', // pill | rect
                                        color: 'blue'   // gold | blue | silver | black
                                    },

                                    client: {
                                        sandbox: 'AaumyvB48f0FgJZGEuoc_qLaxMJw_IwrsXe7cBx_nWRA0O0er3tkYaQuCJBG0P2zg2CKSiyIThJGEiMG',
                                        production: 'AUS_afGj6oF8ojYIXquhK3BZdLwOWL1ZT437Q0WOHbn1PhN6CUlv1SSALh0JVBsogpl9c-NdcmYaAcDW'
                                    },
                                    // Set up a payment
                                    payment: function (data, actions) {
                                        return actions.payment.create({
                                            transactions: [{
                                                    amount: {
                                                        total: '0.01',
                                                        currency: 'EUR'
                                                    }
                                                }]
                                        });
                                    },
                                    // Execute the payment
                                    onAuthorize: function (data, actions) {
                                        return actions.payment.execute()
                                                .then(function () {
                                                    // Show a confirmation message to the buyer
                                                    window.alert('Thank you for your purchase!');
                                                });
                                    }
                                }, '#paypal-button');
                            </script>
                        </div>
                    </div>





                </div>
            </div>
        </div>
        <!-- End pricing table area -->





        <!-- Start Footer bottom Area -->
        <footer  id="contact">
            <div class="footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <div class="footer-logo">
                                        <h2><span>Martínez</span>Travels & Tours</h2>
                                    </div>

                                    <p>Siguenos en todas nuestras redes sociales para estar al tanto de todas nuestras promociones y productos</p>
                                    <div class="footer-icons">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-google"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <div class="footer-logo">
                                        <h2><span>Cont</span>acto</h2>
                                    </div>
                                    <p>
                                        Tambien puedes contactarnos de las siguiente manera 
                                    </p>
                                    <div class="footer-contacts">
                                        <p><span>Tel:</span>+(503) 7841-1184</p>
                                        <p><span>Email:</span>info.ventas@martineztraveltours.com</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <div class="footer-logo">
                                        <h2><span>Ubic</span>ación</h2>
                                    </div>
                                    <p>
                                        Ubicación: 2a Avenida Sur, Barrio el Centro #4D San Vicente, El Salvador
                                    </p>
                                    <div class="footer-contacts">

                                        <p><span>Lunes-Viernes</span>  (8am-5:30pm)</p>
                                        <p><span>Sábados</span> (8am-12:30pm)</p>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <br>



                </div>
            </div>
            <div class="footer-area-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="copyright text-center">
                                <p>
                                    &copy; Copyright <strong>Universidad Nacional de El Salvador</strong>
                                </p>
                            </div>

                        </div>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer bottom Area -->




    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/venobox/venobox.min.js"></script>
    <script src="lib/knob/jquery.knob.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/parallax/parallax.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="lib/appear/jquery.appear.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>

    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <script src="js/main.js"></script>
</body>

</html>
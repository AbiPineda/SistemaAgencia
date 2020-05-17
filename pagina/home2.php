<?php
include_once('./config/parametros.php');
include_once './plantilla/cabecera.php';
include_once './plantilla/menuHome2.php';

?>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="<?=$base_url?>css/home2.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.0/handlebars.min.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<!--Banner de auto -->
<div class="header-bg-autos page-area">
    <div class="home-overly"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <br><br><br>


            </div>
        </div>
    </div>
</div>
<!--Banner de auto -->



<div class="blog-page area-padding" style="margin-top: -67px;">
    <div class="container">
        <div class="row">
            <!-- End left sidebar -->
            <!-- Start single blog -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">

                    <!-- SECTION -->
                    <div class="section">
                        <!-- container -->
                        <div class="container" >
                            <!-- row -->
                            <div class="row" >


                                <div class="site-outer">

                                    <div class="site-inner">
                                        <section class="container-fluid" >
                                            <!-- ACCORDION ROW -->
                                            <div class="row">
                                                <ul class="accordion-group" id="accordion" style="height: 413px;">
                                                    <li style="background-image: url('<?=$base_url?>img/asesoria/banner.jpg">
                                                          

                                                        <div class="accordion-overlay"></div>
                                                       
                                                        <section class="hidden-xs">
                                                            <article>
                                                                <p>Asesoría Migratoria</p>
                                                            </article>
                                                        </section>
                                                    </li>
                                                    <li class="out"
                                                        style="background-image: url('<?=$base_url?>img/slider/001.jpg');">
                                                        <div class="accordion-overlay"></div>
                                                       
                                                        <section class="hidden-xs">
                                                            <article>
                                                                <p>Tours</p>
                                                            </article>
                                                        </section>
                                                    </li>
                                                    <li
                                                        style="background-image: url('<?=$base_url?>img/slider/003.jpg');">
                                                        <div class="accordion-overlay"></div>
                                                        <section class="hidden-xs">
                                                            <article>
                                                                <p>Paquetes Turísticos</p>
                                                            </article>
                                                        </section>
                                                    </li>
                                                    <li
                                                        style="background-image: url('<?=$base_url?>img/vehiculos/carrito.jpg');">
                                                        <div class="accordion-overlay"></div>
                                                        
                                                        <section class="hidden-xs">
                                                            <article>
                                                                <p>Vehiculos</p>
                                                            </article>
                                                        </section>
                                                    </li>

                                                    <li
                                                        style="background-image: url('<?=$base_url?>img/tours/vueloss.jpg');">
                                                        <div class="accordion-overlay"></div>
                                                        
                                                        <section class="hidden-xs">
                                                            <article>
                                                                <p>Vuelos</p>
                                                            </article>
                                                        </section>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- BEGIN NEW ROW AFTER ACCORDION -->
<div class="row mg">
                                                <!-- FIRST ROW -->
<div class="container" style="margin-top: -130px;">
                                                      <!-- Start Service area -->
    <div id="services" class="services-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline services-head text-center">
                        <h2>Servicios</h2>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="services-contents">
                    <!-- Start Left services -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="#">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <h4>Asesoría Migratoria</h4>
                                    <p>
                                        Sí estás pensando en viajar a E.E.U.U ¡Asesórate con Nosotros!
                                    </p>
                                </div>
                            </div>
                            <!-- end about-details -->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="#">
                                        <i class="fa fa-camera-retro"></i>
                                    </a>
                                    <h4>Paquetes</h4>
                                    <p>
                                        Haz realidad tus sueños con nuestros paquetes turísticos para Centro América,
                                        Sudamérica y Europa
                                    </p>
                                </div>
                            </div>
                            <!-- end about-details -->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <!-- end col-md-4 -->
                        <div class=" about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="./vistas/tours/">
                                        <i class="fa fa-calendar"></i>
                                    </a>
                                    <h4>Tours</h4>
                                    <p>
                                        Quieres viajar? tu elige el destino, nosotros te llevamos haz realidad tus
                                        sueños viaja a Centro América, Sudamérica y Europa
                                    </p>
                                </div>
                            </div>
                            <!-- end about-details -->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <!-- end col-md-4 -->
                        <div class=" about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="#">
                                        <i class="fa fa-car"></i>
                                    </a>
                                    <h4>Renta de Vehiculos </h4>
                                    <p>
                                        Si lo que quieres es movilizarte en modernos vehículos, pregunta por nuestro
                                        servicio de alquiler de autos.
                                    </p>
                                </div>
                            </div>
                            <!-- end about-details -->
                        </div>
                    </div>
                    <!-- End Left services -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <!-- end col-md-4 -->
                        <div class=" about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="#">
                                        <i class="fa fa-check"></i>
                                    </a>
                                    <h4>Cargo Expreso</h4>
                                    <p>
                                        Deseas relizar envios al extrangero, no busques más somos la mejor opcion para
                                        enviar tu encomienda.
                                    </p>
                                </div>
                            </div>
                            <!-- end about-details -->
                        </div>
                    </div>
                    <!-- End Left services -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <!-- end col-md-4 -->
                        <div class=" about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="#">
                                        <i class="fa fa-users"></i>
                                    </a>
                                    <h4>Atención al Cliente 24/7</h4>
                                    <p>
                                        Tienes alguna duda, no te preocupes estamos aqui para ayudarte, ponte en
                                        contacto con nosotros
                                    </p>
                                </div>
                            </div>
                            <!-- end about-details -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Service area -->

                                                </div>
                                            </div>
                                        </section>
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
<script>
(function() {
    var expand;
    expand = function() {
        var $input, $search;
        $search = $(".search");
        $input = $(".input");
        if ($search.hasClass("close")) {
            $search.removeClass("close");
            $input.removeClass("square");
        } else {
            $search.addClass("close");
            $input.addClass("square");
        }
        if ($search.hasClass("close")) {
            $input.focus();
        } else {
            $input.blur();
        }
    };
    $(function() {
        var $accordion, $wideScreen;
        $accordion = $("#accordion").children("li");
        $wideScreen = $(window).width() > 767;
        if ($wideScreen) {
            $accordion.on("mouseenter click", function(e) {
                var $this;
                e.stopPropagation();
                $this = $(this);
                if ($this.hasClass("out")) {
                    $this.addClass("out");
                } else {
                    $this.addClass("out");
                    $this.siblings().removeClass("out");
                }
            });
        } else {
            $accordion.on("touchstart touchend", function(e) {
                var $this;
                e.stopPropagation();
                $this = $(this);
                if ($this.hasClass("out")) {
                    $this.addClass("out");
                } else {
                    $this.addClass("out");
                    $this.siblings().removeClass("out");
                }
            });
        }
    });
    $(function() {
        var $container, $menu, $menubtn, $navbar;
        $menubtn = $("#hb");
        $navbar = $(".navbar");
        $menu = $(".navigation");
        $container = $(".site-inner");
        $menubtn.on("click", function(e) {
            if ($menubtn.hasClass("active")) {
                $menubtn.removeClass("active");
                $menu.removeClass("slide-right");
                $container.removeClass("slide-right");
                $navbar.removeClass("slide-right");
            } else {
                $menubtn.addClass("active");
                $menu.addClass("slide-right");
                $container.addClass("slide-right");
                $navbar.addClass("slide-right");
            }
        });
    });
    $(function() {
        var $button, clickOrTouch;
        clickOrTouch = "click touchstart";
        $button = $("#search-button");
        $button.on(clickOrTouch, expand);
    });
    $(function() {
        var $box;
        $box = $(".sm-box");
        $box.on("click", function(e) {
            e.preventDefault();
            var $this;
            $this = $(this);
            if ($this.hasClass("active")) {
                $this.removeClass("active");
            } else {
                $this.addClass("active");
            }
        });
    });
}.call(this));

$("select").each(function() {
    var $this = $(this),
        $options = $(this).children("option").length;

    $this.addClass("select-hidden");
    $this.wrap("<div class='select'></div>");
    $this.after("<div class='select-styled'></div>");

    var $styledSelect = $this.next("div.select-styled");
    $styledSelect.text($this.children("option").eq(0).text());

    var $list = $("<ul />", {
        class: "select-options"
    }).insertAfter($styledSelect);

    for (var i = 0; i < $options; i++) {
        $("<li />", {
            text: $this.children("option").eq(i).text(),
            rel: $this.children("option").eq(i).val()
        }).appendTo($list);
    }

    var $listItems = $list.children("li");

    $styledSelect.on("click", function(e) {
        e.stopPropagation();
        $("div.select-styled.active").each(function() {
            $(this).removeClass("active").next("ul.select-options").hide();
        });

        $(this).toggleClass("active").next("ul.select-options").toggle();
    });

    $listItems.on("click", function(e) {
        e.stopPropagation();
        $styledSelect.text($(this).text()).removeClass("active");
        $this.val($(this).attr("rel"));
        $list.hide();
    });

    $(document).on("click", function() {
        $styledSelect.removeClass("active");
        $list.hide();
    });

    $(".select-sibling").next(".select-styled").css({
        "border-top": "0px"
    });
});

(function() {
    var $addItem = $("#add-item");
    var $badge = $(".badge");
    var $count = 1;

    $addItem.on("click", function(e) {
        e.preventDefault();
        $badge.html($count++);
    });
}.call(this));
</script>




<?php 
include_once './plantilla/footer.php';
 ?>
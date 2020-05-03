<?php
include_once '../../config/parametros.php';
?>


<link rel="stylesheet" href="<?= $base_url ?>dist/css/disponibilidad.css">
<style>
    .container {
        width: 1170px;
        margin: 0 auto;
    }

    #gallery {
        border: 0px solid #efefef;
        padding: 0px 0 0 0;
    }

    #gallery img {
        margin: 8px;
        width: 283px;
        cursor: pointer;
        border-radius: 7px;
    }

    #gallery img:hover {
        margin: 8px;
        opacity: .8;
    }

    header h1 {
        font-weight: 700;
        margin-left: 8px;
    }

    #buttons button {
        border: 1px solid #efefef;
        margin-right: 8px;
        border: 0;
        padding: 8px;
        border-radius: 3px;
    }

    #buttons button.active {
        background-color: #bbb;
        color: #111;
    }

    #buttons {
        margin: 8px;
        padding-bottom: 8px;
    }

    button:hover {
        background-color: #111;
        color: #fff;
    }

    #ocultar-card {
        display: none;
    }
    #mostrar-card {
        display: none;
    }

</style>




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sitios Turísticos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Sitios Turisticos Registrados</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
   
        <div class="container-fluid ">
            <div class="row center" >
                <div id="buttons"></div>
            </div>
            <div class="row">
              
                <div class="col-12">
                <div id="gallery" >
                    <!-- left column -->
                    <div class="cardsX">
                        <div class="card Playa">
                            <div class="card__image-holder">
                                <img class="card__image" data-tags="Playa"
                                     src="<?= $base_url ?>img/beach"
                                     alt="" />
                            </div>
                            <div class="card-title">
                                <a href="#" class="toggle-info btn">
                                    <span class="left"></span>
                                    <span class="right"></span>
                                </a>
                                <h2>
                                   Montezuma
                                    <small>Costa Rica Puntarenas</small>
                                </h2>
                            </div>
                            <div class="card-flap flap1">
                                <div class="card-description">
                                      Lorem Ipsum is simply dummy text<br> 
                                   of the printing and typesetting industry.<br>
                                   Lorem Ipsum has been the industry's<br>
                                   standard dummy text ever since the<br>
                                   1500s, when an unknown printer took a <br>
                                   galley of type and scrambled it to make<br>
                                </div>
                                <div class="card-flap flap2">
                                    <div class="card-actions">
                                        <a onclick="cargar_contenido('contenido_principal', 'http://localhost/Plantillas/SistemaAgencia/vistas/sitios/editar_sitio.php')"  
                                           class="btn btn-primary"> <i class="fas fa-edit" style="color: white;"></i></a>
                                        <a onclick="cargar_contenido('contenido_principal', 'http://localhost/Plantillas/SistemaAgencia/vistas/sitios/galeria.php')" 
                                           class="btn btn-success"> <i class="fas fa-image" style="color: white"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card Playa">
                            <div class="card__image-holder">
                                <img class="card__image" data-tags="Playa"
                                     src="<?= $base_url ?>img/1"
                                     alt="" />
                            </div>
                            <div class="card-title">
                                <a href="#" class="toggle-info btn">
                                    <span class="left"></span>
                                    <span class="right"></span>
                                </a>
                                <h2>
                                   Montezuma
                                    <small>Costa Rica Puntarenas</small>
                                </h2>
                            </div>
                            <div class="card-flap flap1">
                                <div class="card-description">
                                      Lorem Ipsum is simply dummy text<br> 
                                   of the printing and typesetting industry.<br>
                                   Lorem Ipsum has been the industry's<br>
                                   standard dummy text ever since the<br>
                                   1500s, when an unknown printer took a <br>
                                   galley of type and scrambled it to make<br>
                                </div>
                                <div class="card-flap flap2">
                                    <div class="card-actions">
                                        <a onclick="cargar_contenido('contenido_principal', 'http://localhost/Plantillas/SistemaAgencia/vistas/sitios/editar_sitio.php')"  
                                           class="btn btn-primary"> <i class="fas fa-edit" style="color: white;"></i></a>
                                        <a onclick="cargar_contenido('contenido_principal', 'http://localhost/Plantillas/SistemaAgencia/vistas/sitios/galeria.php')" 
                                           class="btn btn-success"> <i class="fas fa-image" style="color: white"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card Turisentro">
                            <div class="card__image-holder">
                                <img class="card__image" data-tags="Turisentro"
                                       src="<?= $base_url ?>img/2"
                                     alt="" />
                            </div>
                            <div class="card-title">
                                <a href="#" class="toggle-info btn">
                                    <span class="left"></span>
                                    <span class="right"></span>
                                </a>
                                <h2>
                                   Montezuma
                                    <small>Costa Rica Puntarenas</small>
                                </h2>
                            </div>
                            <div class="card-flap flap1">
                                <div class="card-description">
                                      Lorem Ipsum is simply dummy text<br> 
                                   of the printing and typesetting industry.<br>
                                   Lorem Ipsum has been the industry's<br>
                                   standard dummy text ever since the<br>
                                   1500s, when an unknown printer took a <br>
                                   galley of type and scrambled it to make<br>
                                </div>
                                <div class="card-flap flap2">
                                    <div class="card-actions">
                                        <a onclick="cargar_contenido('contenido_principal', 'http://localhost/Plantillas/SistemaAgencia/vistas/sitios/editar_sitio.php')"  
                                           class="btn btn-primary"> <i class="fas fa-edit" style="color: white;"></i></a>
                                        <a onclick="cargar_contenido('contenido_principal', 'http://localhost/Plantillas/SistemaAgencia/vistas/sitios/galeria.php')" 
                                           class="btn btn-success"> <i class="fas fa-image" style="color: white"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card Montallas">
                            <div class="card__image-holder">
                                <img class="card__image" data-tags="Montallas"
                                       src="<?= $base_url ?>img/3"
                                     alt="" />
                            </div>
                            <div class="card-title">
                                <a href="#" class="toggle-info btn">
                                    <span class="left"></span>
                                    <span class="right"></span>
                                </a>
                                <h2>
                                    Montezuma
                                    <small>Nicaragua Puerto Alegre</small>
                                </h2>
                            </div>
                            <div class="card-flap flap1">
                                <div class="card-description">
                                    Color: Negro<br>
                                    Transmisión: Automático, 4x2<br>
                                    Full Extras<br>
                                    4 puertas
                                </div>
                                <div class="card-flap flap2">
                                     <div class="card-actions">
                                        <a onclick="cargar_contenido('contenido_principal', 'http://localhost/Plantillas/SistemaAgencia/vistas/sitios/editar_sitio.php')"  
                                           class="btn btn-primary"> <i class="fas fa-edit" style="color: white;"></i></a>
                                        <a onclick="cargar_contenido('contenido_principal', 'http://localhost/Plantillas/SistemaAgencia/vistas/sitios/galeria.php')" 
                                           class="btn btn-success"> <i class="fas fa-image" style="color: white"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card Montallas">
                            <div class="card__image-holder">
                                <img class="card__image" data-tags="Montallas"
                                       src="<?= $base_url ?>img/4"
                                     alt="" />
                            </div>
                            <div class="card-title">
                                <a href="#" class="toggle-info btn">
                                    <span class="left"></span>
                                    <span class="right"></span>
                                </a>
                                <h2>
                                   Montezuma
                                    <small>Costa Rica Puntarenas</small>
                                </h2>
                            </div>
                            <div class="card-flap flap1">
                                <div class="card-description">
                                      Lorem Ipsum is simply dummy text<br> 
                                   of the printing and typesetting industry.<br>
                                   Lorem Ipsum has been the industry's<br>
                                   standard dummy text ever since the<br>
                                   1500s, when an unknown printer took a <br>
                                   galley of type and scrambled it to make<br>
                                </div>
                                <div class="card-flap flap2">
                                    <div class="card-actions">
                                        <a onclick="cargar_contenido('contenido_principal', 'http://localhost/Plantillas/SistemaAgencia/vistas/sitios/editar_sitio.php')"  
                                           class="btn btn-primary"> <i class="fas fa-edit" style="color: white;"></i></a>
                                        <a onclick="cargar_contenido('contenido_principal', 'http://localhost/Plantillas/SistemaAgencia/vistas/sitios/galeria.php')" 
                                           class="btn btn-success"> <i class="fas fa-image" style="color: white"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card Montallas">
                            <div class="card__image-holder">
                                <img class="card__image" data-tags="Montallas"
                                      src="<?= $base_url ?>img/8"
                                     alt="" />
                            </div>
                          <div class="card-title">
                                <a href="#" class="toggle-info btn">
                                    <span class="left"></span>
                                    <span class="right"></span>
                                </a>
                                <h2>
                                   Montezuma
                                    <small>Costa Rica Puntarenas</small>
                                </h2>
                            </div>
                            <div class="card-flap flap1">
                                <div class="card-description">
                                      Lorem Ipsum is simply dummy text<br> 
                                   of the printing and typesetting industry.<br>
                                   Lorem Ipsum has been the industry's<br>
                                   standard dummy text ever since the<br>
                                   1500s, when an unknown printer took a <br>
                                   galley of type and scrambled it to make<br>
                                </div>
                                <div class="card-flap flap2">
                                    <div class="card-actions">
                                        <a onclick="cargar_contenido('contenido_principal', 'http://localhost/Plantillas/SistemaAgencia/vistas/sitios/editar_sitio.php')"  
                                           class="btn btn-primary"> <i class="fas fa-edit" style="color: white;"></i></a>
                                        <a onclick="cargar_contenido('contenido_principal', 'http://localhost/Plantillas/SistemaAgencia/vistas/sitios/galeria.php')" 
                                           class="btn btn-success"> <i class="fas fa-image" style="color: white"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card Comedor">
                            <div class="card__image-holder">
                                <img class="card__image" data-tags="Comedor"
                                       src="<?= $base_url ?>img/beach"
                                     alt="" />
                            </div>
                            <div class="card-title">
                                <a href="#" class="toggle-info btn">
                                    <span class="left"></span>
                                    <span class="right"></span>
                                </a>
                                <h2>
                                    Mitsubishi Sportero 2014
                                    <small>Desde: US$42.85/día.</small>
                                </h2>
                            </div>
                            <div class="card-flap flap1">
                                <div class="card-description">
                                    Color: Gris<br>
                                    Transmisión: Standard 4x4 Turbodiesel<br>
                                    Full Extras, Doble cabina<br>
                                    Polarizado, A/A
                                </div>
                                <div class="card-flap flap2">
                                      <div class="card-actions">
                                        <a onclick="cargar_contenido('contenido_principal', 'http://localhost/Plantillas/SistemaAgencia/vistas/sitios/editar_sitio.php')"  
                                           class="btn btn-primary"> <i class="fas fa-edit" style="color: white;"></i></a>
                                        <a onclick="cargar_contenido('contenido_principal', 'http://localhost/Plantillas/SistemaAgencia/vistas/sitios/galeria.php')" 
                                           class="btn btn-success"> <i class="fas fa-image" style="color: white"></i></a>
                                    </div>
                                 
                                </div>
                            </div>
                        </div>
                        <div class="card Turisentro">
                            <div class="card__image-holder">
                                <img class="card__image" data-tags="Turisentro"
                                      src="<?= $base_url ?>img/7"
                                     alt="" />
                            </div>
                            <div class="card-title">
                                <a href="#" class="toggle-info btn">
                                    <span class="left"></span>
                                    <span class="right"></span>
                                </a>
                                <h2>
                                   Montezuma
                                    <small>Costa Rica Puntarenas</small>
                                </h2>
                            </div>
                            <div class="card-flap flap1">
                                <div class="card-description">
                                      Lorem Ipsum is simply dummy text<br> 
                                   of the printing and typesetting industry.<br>
                                   Lorem Ipsum has been the industry's<br>
                                   standard dummy text ever since the<br>
                                   1500s, when an unknown printer took a <br>
                                   galley of type and scrambled it to make<br>
                                </div>
                                <div class="card-flap flap2">
                                    <div class="card-actions">
                                        <a onclick="cargar_contenido('contenido_principal', 'http://localhost/Plantillas/SistemaAgencia/vistas/sitios/editar_sitio.php')"  
                                           class="btn btn-primary"> <i class="fas fa-edit" style="color: white;"></i></a>
                                        <a onclick="cargar_contenido('contenido_principal', 'http://localhost/Plantillas/SistemaAgencia/vistas/sitios/galeria.php')" 
                                           class="btn btn-success"> <i class="fas fa-image" style="color: white"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
</div>              
          
        </div>
    </section>



<script>
    $(document).ready(function () {
        var zindex = 10;

        $("div.card").click(function (e) {
            e.preventDefault();

            var isShowing = false;

            if ($(this).hasClass("show")) {
                isShowing = true
            }

            if ($("div.cardsX").hasClass("showing")) {
                // a card is already in view
                $("div.card.show")
                        .removeClass("show");

                if (isShowing) {
                    // this card was showing - reset the grid
                    $("div.cardsX")
                            .removeClass("showing");
                } else {
                    // this card isn't showing - get in with it
                    $(this)
                            .css({
                                zIndex: zindex
                            })
                            .addClass("show");

                }

                zindex++;

            } else {
                // no cardsX in view
                $("div.cardsX")
                        .addClass("showing");
                $(this)
                        .css({
                            zIndex: zindex
                        })
                        .addClass("show");

                zindex++;
            }

        });
    });
</script>

<script>
    (function () {
        var $imgs = $('#gallery img');
        var $buttons = $('#buttons');
        var $card = $(".card");
        var tagged = {};

        //ses recorre todos los elementos que tengan el atributo data 
        $imgs.each(function () {
            var img = this;
            var tags = $(this).data('tags');

            if (tags) {
                ///se separan por como por si alguno tiene 2 o masatributos
                tags.split(',').forEach(function (tagName) {
                    if (tagged[tagName] == null) {
                        ///se creea un array donde estan todos los nombres de los elementos
                        tagged[tagName] = [];
                    }
                    tagged[tagName].push(img);
                  //  console.log('este es el tagName: ' + [tagName]);
                });
            }
        });

        $('<button/>', {
            text: 'Todos',
            class: 'active',
            click: function () {
                //esto se activa cuando se le da click a todos
                $(this)
                        .addClass('active')
                        ///el de abajo es para obtener los elementos hermanos y quitarles la clase active
                        .siblings()
                        .removeClass('active');
                $card.show();
            }
        }).appendTo($buttons);

        $.each(tagged, function (tagName) {
            var $n = $(tagged[tagName]).length;
            $('<button/>', {
                text: tagName + '(' + $n + ')',
                click: function () {
                    //esto es para desctivar y desactivar los botones el css
                    $(this)
                            .addClass('active')
                            .siblings()
                            .removeClass('active');

                    var $cardsX = ($imgs.parents().parents().find(".card").hide());
                    console.log($cardsX[0]);
                    console.log($cardsX.filter(tagged[tagName]));


                    $card.hide();
                    console.log($("." + tagName).show());

                }
            }).appendTo($buttons);
        });
    }())
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
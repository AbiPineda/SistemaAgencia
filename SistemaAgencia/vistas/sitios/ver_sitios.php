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
                        <div class="card Sedan">
                            <div class="card__image-holder">
                                <img class="card__image" data-tags="Sedan"
                                     src="https://ik.imagekit.io/udcdt0pvr/wp-content/uploads/2019/08/hyundai-elantra-njautoimport-carro-8-300x225.jpeg?wave"
                                     alt="" />
                            </div>
                            <div class="card-title">
                                <a href="#" class="toggle-info btn">
                                    <span class="left"></span>
                                    <span class="right"></span>
                                </a>
                                <h2>
                                    Hyundai Elantra 2014
                                    <small>Desde: US$28.50/día.</small>
                                </h2>
                            </div>
                            <div class="card-flap flap1">
                                <div class="card-description">
                                    Color: Gris<br>
                                    Transmisión: Automática<br>
                                    Full Extras<br>
                                    4 puertas </div>
                                <div class="card-flap flap2">
                                    <div class="card-actions">
                                        <a href="#" class="btn">Reservar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card Sedan">
                            <div class="card__image-holder">
                                <img class="card__image" data-tags="Sedan"
                                     src="https://testdrivenow.com/files/IMG_5415-300x225.jpg?beach" alt="" />
                            </div>
                            <div class="card-title">
                                <a href="#" class="toggle-info btn">
                                    <span class="left"></span>
                                    <span class="right"></span>
                                </a>
                                <h2>
                                    Mitsubishi Lancer 2015
                                    <small>Desde: US$28.50/día.</small>
                                </h2>
                            </div>
                            <div class="card-flap flap1">
                                <div class="card-description">
                                    Color: Blanco<br>
                                    Transmisión: Automática<br>
                                    Full Extras<br>
                                    4 puertas
                                </div>
                                <div class="card-flap flap2">
                                    <div class="card-actions">
                                        <a href="#" class="btn">Reservar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card Económico">
                            <div class="card__image-holder">
                                <img class="card__image" data-tags="Económico"
                                     src="https://images.offerup.com/2gupyTAHFQSa4jwjVGGSaX4IIyU=/300x225/86bb/86bb327b5f5a40ca8f456fb132c909f0.jpg?mountain"
                                     alt="" />
                            </div>
                            <div class="card-title">
                                <a href="#" class="toggle-info btn">
                                    <span class="left"></span>
                                    <span class="right"></span>
                                </a>
                                <h2>
                                    Hyundai Elantra 2010
                                    <small>Desde: US$23.90/día.</small>
                                </h2>
                            </div>
                            <div class="card-flap flap1">
                                <div class="card-description">
                                    Color: Blanco<br>
                                    Transmisión: Standard<br>
                                    Full Extras<br>
                                    4 puertas </div>
                                <div class="card-flap flap2">
                                    <div class="card-actions">
                                        <a href="#" class="btn">Reservar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card Microbus">
                            <div class="card__image-holder">
                                <img class="card__image" data-tags="Microbus"
                                     src="https://images.offerup.com/4jPoQ7BuVBrQ64KBK9J0nkDy52Y=/300x225/6d91/6d91f3858f1947e29332859392ae15e7.jpg?field"
                                     alt="" />
                            </div>
                            <div class="card-title">
                                <a href="#" class="toggle-info btn">
                                    <span class="left"></span>
                                    <span class="right"></span>
                                </a>
                                <h2>
                                    Ford Scape 2010
                                    <small>Desde: US$38.50/día.</small>
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
                                        <a href="#" class="btn">Reservar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card Microbus">
                            <div class="card__image-holder">
                                <img class="card__image" data-tags="Microbus"
                                     src="https://tse3.mm.bing.net/th?id=OIP.LDKfIMtM6Q3Di6r8gLoGXAHaFj&pid=Api&P=0&w=300&h=300?water"
                                     alt="" />
                            </div>
                            <div class="card-title">
                                <a href="#" class="toggle-info btn">
                                    <span class="left"></span>
                                    <span class="right"></span>
                                </a>
                                <h2>
                                    Hyundai TQ H-1 2013
                                    <small>Desde: US$55.00/día.</small>
                                </h2>
                            </div>
                            <div class="card-flap flap1">
                                <div class="card-description">
                                    Color: Blanco <br>
                                    Transmisión: Standard<br>
                                    12 pasajeros / Turbodiesel<br>
                                    Doble A/A, Puertas laterales corredizas
                                </div>
                                <div class="card-flap flap2">
                                    <div class="card-actions">
                                        <a href="#" class="btn">Reservar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card Microbus">
                            <div class="card__image-holder">
                                <img class="card__image" data-tags="Microbus"
                                     src="https://www.service-repair-workshop-manual.com/wp-content/uploads/2013/10/KIA-Sedona-Factory-Service-Repair-Manual-Download-300x225.jpg?river"
                                     alt="" />
                            </div>
                            <div class="card-title">
                                <a href="#" class="toggle-info btn">
                                    <span class="left"></span>
                                    <span class="right"></span>
                                </a>
                                <h2>
                                    Kía Sedona 2009
                                    <small>Desde: US$42.85/día.</small>
                                </h2>
                            </div>
                            <div class="card-flap flap1">
                                <div class="card-description">
                                    Color: Gris<br>
                                    Transmisión: Automático, Turbodiesel<br>
                                    Full Extras 7 a 8 pasajeros<br>
                                    Puertas laterales corredizas
                                </div>
                                <div class="card-flap flap2">
                                    <div class="card-actions">
                                        <a href="#" class="btn">Reservar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card Pickup">
                            <div class="card__image-holder">
                                <img class="card__image" data-tags="Pickup"
                                     src="https://noticias.coches.com/wp-content/uploads/2015/01/mitsubishi_l200-challenger-2015_r24-300x225.jpg?kite"
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
                                        <a href="#" class="btn">Reservar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card Económico">
                            <div class="card__image-holder">
                                <img class="card__image" data-tags="Económico"
                                     src="https://cdn.dealerspike.com/imglib/v1/300x225/imglib/Assets/Inventory/6C/97/6C976285-9B57-44A7-9042-D707A5169D4E.jpg?underwater"
                                     alt="" />
                            </div>
                            <div class="card-title">
                                <a href="#" class="toggle-info btn">
                                    <span class="left"></span>
                                    <span class="right"></span>
                                </a>
                                <h2>
                                    Ford Explorer 2009
                                    <small>Desde: US$38.50/día.</small>
                                </h2>
                            </div>
                            <div class="card-flap flap1">
                                <div class="card-description">
                                    Color: Blanco<br>
                                    Transmisión: Automático 4x4 Gasolina<br>
                                    Full Extras, Doble cabina<br>
                                    Polarizado, A/A
                                </div>
                                <div class="card-flap flap2">
                                    <div class="card-actions">
                                        <a href="#" class="btn">Reservar</a>
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
                    console.log('este es el tagName: ' + [tagName]);
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
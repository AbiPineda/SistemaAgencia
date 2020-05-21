<?php
include_once('../../config/parametros.php');
include_once '../../plantilla/cabecera.php';
include_once '../../plantilla/menu.php';
?>
<link href="<?= $base_url ?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?= $base_url ?>js/bootstrap.min.js" rel="stylesheet">

<style>
input[type=text],
select {
    width: 100%;
    padding: 9px 4px;
    margin: 2px 1px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.badgebox {
    opacity: 0;
}

.badgebox+.badge {
    /* Move the check mark away when unchecked */
    text-indent: -999999px;
    /* Makes the badge's width stay the same checked and unchecked */
    width: 27px;
}

.badgebox:focus+.badge {
    /* Set something to make the badge looks focused */
    /* This really depends on the application, in my case it was: */

    /* Adding a light border */
    box-shadow: inset 0px 0px 5px;
    /* Taking the difference out of the padding */
}

.badgebox:checked+.badge {
    /* Move the check mark back when checked */
    text-indent: 0;
}
</style>

<style>
    .btn-info{
        width: 95%;
    }
</style>


<br><br>
<!--Banner de auto -->
<div class="header-bg page-area" style="padding-top: 10px">
    <div class="home-overly"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">



            </div>
        </div>
    </div>
</div>
<!--Banner de auto -->
<div class="section">

    <div class="container">
        <div class="row fondo-blanco">
            <br><br>


            <!-- inicio -->

            <!-- Product main img -->
            <div class="col-md-5 col-md-push-2">
                <div id="product-main-img">
                    <div class="product-preview">
                        <img src="../../img/vehiculos/hyundai.png" alt="">
                    </div>

                    <div class="product-preview">
                        <img src="https://i.ebayimg.com/00/s/NzY4WDEwMjQ=/z/aqgAAOSwirVejSTq/$_3.JPG?set_id=2" alt="">
                    </div>

                    <div class="product-preview">
                        <img src="https://www.rtautomotriz.com/images/ELGOLF/Ext94617-1.jpg?0" alt="">
                    </div>

                    <div class="product-preview">
                        <img src="https://img.autocosmos.com/noticias/fotosprinc/NAZ_d3cd3f472a4f4405aae5e4ac5c243f81.jpg"
                            alt="">
                    </div>
                </div>
            </div>
            <!-- /Product main img -->
            <!-- Product thumb imgs -->
            <div class="col-md-2  col-md-pull-5">
                <div id="product-imgs">
                    <div class="product-preview">
                        <img src="../../img/vehiculos/hyundai.png" alt="">
                    </div>

                    <div class="product-preview">
                        <img src="https://i.ebayimg.com/00/s/NzY4WDEwMjQ=/z/aqgAAOSwirVejSTq/$_3.JPG?set_id=2" alt="">
                    </div>

                    <div class="product-preview">
                        <img src="https://www.rtautomotriz.com/images/ELGOLF/Ext94617-1.jpg?0" alt="">
                    </div>

                    <div class="product-preview">
                        <img src="https://img.autocosmos.com/noticias/fotosprinc/NAZ_d3cd3f472a4f4405aae5e4ac5c243f81.jpg"
                            alt="">
                    </div>
                </div>
            </div>
            <!-- /Product thumb imgs -->
            <!-- Product details -->
            <div class="col-md-5">
                <div class="product-details">
                    <h2 class="product-name"> Hyundai Elantra 2014</h2>
                    <div>
                        <h3 class="product-price">$28.50 <del class="product-old-price">$35.00</del></h3>
                    </div>
                    <div class="product-rating">
                        <div class="col-md-6">
                            <!-- Iconos -->
                            <i class="fa fa-car fa-1x" style="color: #009cde"></i>
                            <p>Gasolina</p>
                            <i class="fa fa-tachometer fa-1x" style="color:#009cde"> </i>
                            <p>Automático</p>
                            <i class="fa fa-users fa-1x" style="color: #009cde"></i>
                            <p>Pasajeros:5</p>
                        </div>
                        <div class="col-md-6">
                            <i class="fa fa-door fa-1x" style="color: #009cde"></i>
                            <p>Puertas: 4</p>
                            <i class="fa fa-volume-up fa-1x" style="color: #009cde"></i>
                            <p>Sonido: Sí</p>
                            <i class="fa fa-wifi fa-1x" style="color: #009cde"></i>
                            <p>Wifi: Sí</p>
                        </div>
                        <!-- Fin de Iconos -->
                    </div>


                    <div class="add-to-cart">

                        <button class="add-to-cart-btn" data-toggle="modal" data-target="#modal-default"><i
                                class="fa fa-shopping-cart"></i> Reservar</button>
                    </div>
                    <!-- /.modal -->
                    <div class="modal fade" id="modal-default">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Alquiler de Vehículo <button type="button" class="close"
                                            data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button></h5>

                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label for="fname">Nombre de Cliente</label>
                                                <input type="text" id="fname" name="firstname"
                                                    placeholder="Digite su nombre:">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="fname">Numero de Telefono</label>
                                                <input type="text" id="fname" name="firstname"
                                                    placeholder="Digite su telefono">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="fname">Lugar de Recogida</label>
                                                <select id="" name="">
                                                    <option>Servicio a Domicilio</option>
                                                    <option>Aeropuerto</option>
                                                    <option>Ciudad</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="fname">Dirección</label>
                                                <input type="text" id="fname" name="firstname" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="fname">Fecha</label>
                                                <input type="text" id="fname" name="firstname" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="fname">Hora</label>
                                                <select>
                                                    <option>00:00</option>
                                                    <option>01:00</option>
                                                    <option>02:00</option>
                                                    <option>03:00</option>
                                                    <option>04:00</option>
                                                    <option>05:00</option>
                                                    <option>06:00</option>
                                                    <option>07:00</option>
                                                    <option>08:00</option>
                                                    <option>08:00</option>
                                                    <option>10:00</option>
                                                    <option>11:00</option>
                                                    <option>12:00</option>
                                                    <option>13:00</option>
                                                    <option>14:00</option>
                                                    <option>15:00</option>
                                                    <option>16:00</option>
                                                    <option>17:00</option>
                                                    <option>18:00</option>
                                                    <option>19:00</option>
                                                    <option>20:00</option>
                                                    <option>21:00</option>
                                                    <option>22:00</option>
                                                    <option>23:00</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="fname">Lugar de Devolución</label>
                                                <select id="" name="">
                                                    <option>Servicio a Domicilio</option>
                                                    <option>Aeropuerto</option>
                                                    <option>Ciudad</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="fname">Dirección</label>
                                                <input type="text" id="fname" name="firstname" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="fname">Fecha</label>
                                                <input type="text" id="fname" name="firstname" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="fname">Hora</label>
                                                <select id="" name="">
                                                    <option>00:00</option>
                                                    <option>01:00</option>
                                                    <option>02:00</option>
                                                    <option>03:00</option>
                                                    <option>04:00</option>
                                                    <option>05:00</option>
                                                    <option>06:00</option>
                                                    <option>07:00</option>
                                                    <option>08:00</option>
                                                    <option>08:00</option>
                                                    <option>10:00</option>
                                                    <option>11:00</option>
                                                    <option>12:00</option>
                                                    <option>13:00</option>
                                                    <option>14:00</option>
                                                    <option>15:00</option>
                                                    <option>16:00</option>
                                                    <option>17:00</option>
                                                    <option>18:00</option>
                                                    <option>19:00</option>
                                                    <option>20:00</option>
                                                    <option>21:00</option>
                                                    <option>22:00</option>
                                                    <option>23:00</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row text-center">
                                            <div class="col-md-4">
                                                 <label for="default" class="btn btn-info">Exoneración en Daños <input
                                                    type="checkbox" id="default" class="badgebox"><span
                                                    class="badge">&check;</span></label>
                                            </div>
                                          
                                           
                                            <div class="col-md-4">
                                                 <label for="primary" class="btn btn-info">Protección de Efectos <input
                                                    type="checkbox" id="primary" class="badgebox"><span
                                                    class="badge">&check;</span></label>
                                            </div>
                                           
                                            <div class="col-md-4">
                                                <label for="info" class="btn btn-info">Seguro de Responsabilidad <input
                                                    type="checkbox" id="info" class="badgebox"><span
                                                    class="badge">&check;</span></label>
                                            </div>
      
                                    </div>
                                        <div class="row text-center">
                                            <div class="col-md-4">
                                                  <label for="success" class="btn btn-info">WI-FI móvil <input type="checkbox"
                                                    id="success" class="badgebox"><span
                                                    class="badge">&check;</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                
                                            <label for="warning" class="btn btn-info">Asientos para niños <input
                                                    type="checkbox" id="warning" class="badgebox"><span
                                                    class="badge">&check;</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <label  for="danger" class="btn btn-info">Conductor Adicional <input
                                                    type="checkbox" id="danger" class="badgebox"><span
                                                    class="badge">&check;</span></label>
                                            </div>
                                        </div>
                                           
                                          
                                         
                                           
                                           
                                        </div>
                                  
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->





                </div>
            </div>
            <!-- /Product details -->

            <!-- Product tab -->
            <div class="col-md-12">
                <div id="product-tab">
                    <!-- product tab nav -->
                    <ul class="tab-nav">
                        <li class="active"><a data-toggle="tab" href="#tab1">Descripción</a></li>
                        <li><a data-toggle="tab" href="#tab2">Detalles</a></li>

                    </ul>
                    <!-- /product tab nav -->

                    <!-- product tab content -->
                    <div class="tab-content">
                        <!-- tab1  -->
                        <div id="tab1" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                        eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                                        in
                                        culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /tab1  -->

                        <!-- tab2  -->
                        <div id="tab2" class="tab-pane fade in">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                        eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                                        in
                                        culpa qui officia deserunt mollit anim id est laborum.</p>
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

<!-- /MOSTRAR PRODUCTOS ABAJO -->

<!-- Section -->
<div class="section" style="padding-top: 0px;">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row fondo-blanco" style="margin-bottom:-26">

            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3 class="title">Productos Relacionados</h3>
                </div>
            </div>

            <!-- product -->
            <div class="col-md-3 col-xs-6">
                <div class="product">
                    <div class="product-img">
                        <img src="../../img/vehiculos/hyundai.png" alt="">
                        <div class="product-label">
                            <span class="sale">-30%</span>
                        </div>
                    </div>
                    <div class="product-body">
                        <p class="product-category">Sedan</p>
                        <h3 class="product-name"><a href="#">Hyundai Elantra 2014</a></h3>
                        <h4 class="product-price">$28.50 <del class="product-old-price">$35.00</del></h4>
                        <div class="product-rating">
                        </div>
                        <div class="product-btns">
                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Lista de
                                    Deseos</span></button>

                            <button class="quick-view" onclick="location.href = 'detalle-vehiculo.php'">
                                <i class="fa fa-eye"></i><span class="tooltipp">Detalle</span></button>
                        </div>
                    </div>
                    <div class="add-to-cart">
                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Reservar</button>
                    </div>
                </div>
            </div>
            <!-- /product -->

            <!-- product -->
            <div class="col-md-3 col-xs-6">
                <div class="product">
                    <div class="product-img">
                        <img src="../../img/vehiculos/hyundai-elantra.png" alt="">
                        <div class="product-label">
                            <span class="new">NEW</span>
                        </div>
                    </div>
                    <div class="product-body">
                        <p class="product-category">Económico</p>
                        <h3 class="product-name"><a href="#"> Hyundai Elantra 2010</a></h3>
                        <h4 class="product-price">$23.90 <del class="product-old-price">$35.00</del></h4>
                        <div class="product-rating">
                        </div>
                        <div class="product-btns">
                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Lista de
                                    Deseos</span></button>

                            <button class="quick-view" onclick="location.href = 'detalle-vehiculo.php'">
                                <i class="fa fa-eye"></i><span class="tooltipp">Detalle</span></button>
                        </div>
                    </div>
                    <div class="add-to-cart">
                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Reservar</button>
                    </div>
                </div>
            </div>
            <!-- /product -->



            <!-- product -->
            <div class="col-md-3 col-xs-6">
                <div class="product">
                    <div class="product-img">
                        <img src="../../img/vehiculos/ford.png" alt="">
                    </div>
                    <div class="product-body">
                        <p class="product-category">Microbus</p>
                        <h3 class="product-name"><a href="#">Ford Scape 2010</a></h3>
                        <h4 class="product-price">$38.50 <del class="product-old-price">$40.00</del></h4>
                        <div class="product-rating">
                        </div>
                        <div class="product-btns">
                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Lista de
                                    Deseos</span></button>

                            <button class="quick-view" onclick="location.href = 'detalle-vehiculo.php'">
                                <i class="fa fa-eye"></i><span class="tooltipp">Detalle</span></button>
                        </div>
                    </div>
                    <div class="add-to-cart">
                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Reservar</button>
                    </div>
                </div>
            </div>
            <!-- /product -->

            <!-- product -->
            <div class="col-md-3 col-xs-6">
                <div class="product">
                    <div class="product-img">
                        <img src="../../img/vehiculos/mishubichi.png" alt="">
                    </div>
                    <div class="product-body">
                        <p class="product-category">Sedan</p>
                        <h3 class="product-name"><a href="#">Mitsubishi Lancer 2015</a></h3>
                        <h4 class="product-price">$28.50 <del class="product-old-price">$35.00</del></h4>
                        <div class="product-rating">
                        </div>
                        <div class="product-btns">
                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Lista de
                                    Deseos</span></button>

                            <button class="quick-view" onclick="location.href = 'detalle-vehiculo.php'">
                                <i class="fa fa-eye"></i><span class="tooltipp">Detalle</span></button>
                        </div>
                    </div>
                    <div class="add-to-cart">
                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Reservar</button>
                    </div>
                </div>
            </div>
            <!-- /product -->

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /Section -->
<!-- /FIN DE MOSTRAR PRODUCTOS ABAJO -->

<!-- /FIN .content-wrapper -->




<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<?php
include_once '../../plantilla/footer.php';
?>
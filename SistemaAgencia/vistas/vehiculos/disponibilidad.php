<?php
include_once '../../config/parametros.php';
?>

 
<link rel="stylesheet" href="<?=$base_url?>dist/css/adminlte.min.css">
<link rel="stylesheet" href="<?=$base_url?>plugins/ekko-lightbox/ekko-lightbox.css">

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
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-info">
                                <div class="card-header">
                                    <div class="card-title">
                                        Flota de Vehículos Disponibles
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <div class="btn-group w-100 mb-2">
                                            <a class="btn btn-info active" href="javascript:void(0)" data-filter="all"> Todos </a>
                                            <a class="btn btn-info" href="javascript:void(0)" data-filter="1"> Económicos</a>
                                            <a class="btn btn-info" href="javascript:void(0)" data-filter="2"> Sedan</a>
                                            <a class="btn btn-info" href="javascript:void(0)" data-filter="3"> Microbus</a>
                                            <a class="btn btn-info" href="javascript:void(0)" data-filter="4"> Pickup</a>
                                        </div>
                                        <div class="mb-2">
                                            <a class="btn btn-secondary" href="javascript:void(0)" data-shuffle> Mezclar </a>
                                            <div class="float-right">
                                               
                                             <!--   <div class="btn-group">
                                                    <a class="btn btn-default" href="javascript:void(0)" data-sortAsc> Ascendente </a>
                                                    <a class="btn btn-default" href="javascript:void(0)" data-sortDesc> Descendente </a>
                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="filter-container p-0 row">
                                            <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                                                <a href="https://www.alamo.com/alamoData/vehicle/bookingCountries/SV/CARS/ECAR.doi.320.high.imageLargeThreeQuarterNodePath.png/1533822841872.png?text=1" data-toggle="lightbox" data-title="Kia Picanto 1.0">
                                                    <img src="https://www.alamo.com/alamoData/vehicle/bookingCountries/SV/CARS/ECAR.doi.320.high.imageLargeThreeQuarterNodePath.png/1533822841872.png?text=1" class="img-fluid mb-2" alt="white sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="2" data-sort="black sample">
                                                <a href="https://www.alamo.com/alamoData/vehicle/bookingCountries/ES/CARS/CCMR.doi.320.high.imageSmallSideProfileNodePath.png/1541613232311.png?text=2" data-toggle="lightbox" data-title="Ford Focus">
                                                    <img src="https://www.alamo.com/alamoData/vehicle/bookingCountries/ES/CARS/CCMR.doi.320.high.imageSmallSideProfileNodePath.png/1541613232311.png?text=2" class="img-fluid mb-2" alt="black sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="3" data-sort="red sample">
                                                <a href="https://www.alamo.com/alamoData/vehicle/bookingCountries/ES/VANS/FVMR.doi.320.high.imageSmallSideProfileNodePath.png/1523650704806.png?text=3" data-toggle="lightbox" data-title="Seat Alhambra">
                                                    <img src="https://www.alamo.com/alamoData/vehicle/bookingCountries/ES/VANS/FVMR.doi.320.high.imageSmallSideProfileNodePath.png/1523650704806.png?text=3" class="img-fluid mb-2" alt="red sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="4" data-sort="red sample">
                                                <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=4" data-toggle="lightbox" data-title="sample 4 - red">
                                                    <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=4" class="img-fluid mb-2" alt="red sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="2" data-sort="black sample">
                                                <a href="https://www.alamo.com/alamoData/vehicle/bookingCountries/ES/CARS/CDMR.doi.320.high.imageSmallSideProfileNodePath.png/1541613478829.png?text=5" data-toggle="lightbox" data-title="Seat Leon">
                                                    <img src="https://www.alamo.com/alamoData/vehicle/bookingCountries/ES/CARS/CDMR.doi.320.high.imageSmallSideProfileNodePath.png/1541613478829.png?text=5" class="img-fluid mb-2" alt="black sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                                                <a href="https://www.alamo.com/alamoData/vehicle/bookingCountries/ES/CARS/EDMR.doi.320.high.imageSmallSideProfileNodePath.png/1542396923898.png?text=6" data-toggle="lightbox" data-title="Seat Ibiza">
                                                    <img src="https://www.alamo.com/alamoData/vehicle/bookingCountries/ES/CARS/EDMR.doi.320.high.imageSmallSideProfileNodePath.png/1542396923898.png?text=6" class="img-fluid mb-2" alt="white sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                                                <a href="https://www.alamo.com/alamoData/vehicle/bookingCountries/ES/CARS/MBMR.doi.320.high.imageSmallSideProfileNodePath.png/1569256364039.png?text=7" data-toggle="lightbox" data-title="Toyota Aygo">
                                                    <img src="https://www.alamo.com/alamoData/vehicle/bookingCountries/ES/CARS/MBMR.doi.320.high.imageSmallSideProfileNodePath.png/1569256364039.png?text=7" class="img-fluid mb-2" alt="white sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="4" data-sort="black sample">
                                                <a href="https://via.placeholder.com/1200/000000.png?text=8" data-toggle="lightbox" data-title="sample 8 - black">
                                                    <img src="https://via.placeholder.com/300/000000?text=8" class="img-fluid mb-2" alt="black sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="3" data-sort="red sample">
                                                <a href="https://www.alamo.com/alamoData/vehicle/bookingCountries/ES/VANS/LVMR.doi.320.high.imageSmallSideProfileNodePath.png/1522248269633.png?text=9" data-toggle="lightbox" data-title="Passenger Minibus">
                                                    <img src="https://www.alamo.com/alamoData/vehicle/bookingCountries/ES/VANS/LVMR.doi.320.high.imageSmallSideProfileNodePath.png/1522248269633.png?text=9" class="img-fluid mb-2" alt="red sample" />
                                                </a>
                                            </div>
                                            <div class="filtr-item col-sm-2" data-category="4" data-sort="white sample">
                                                <a href="https://via.placeholder.com/1200/FFFFFF.png?text=10" data-toggle="lightbox" data-title="sample 10 - white">
                                                    <img src="https://via.placeholder.com/300/FFFFFF?text=10" class="img-fluid mb-2" alt="white sample" />
                                                </a>
                                            </div>
                                           
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

 

    <!-- jQuery -->
    <script src="<?=$base_url?>plugins/jquery/jquery.min.js"></script>
    <script src="<?=$base_url?>plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
 <script src="<?=$base_url?>dist/js/adminlte.min.js"></script>
    <script src="<?=$base_url?>plugins/filterizr/jquery.filterizr.min.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true
                });
            });

            $('.filter-container').filterizr({
                gutterPixels: 3
            });
            $('.btn[data-filter]').on('click', function() {
                $('.btn[data-filter]').removeClass('active');
                $(this).addClass('active');
            });
        })
    </script>
    
    
    
    

    <script src="<?=$base_url?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="<?=$base_url?>plugins/jquery-ui/jquery-ui.min.js"></script>
  <script src="<?=$base_url?>dist/js/demo.js"></script>
 
    
    

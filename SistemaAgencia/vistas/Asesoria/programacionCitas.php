<?php include_once '../../config/parametros.php';?>
<?php include_once  '../../plantillas/navbar.php';?>

<link href="<?= $base_url ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" all" rel="stylesheet"type="text/css" />
<link rel="stylesheet" href="<?= $base_url ?>plugins/toastr/toastr.min.css">

<?php include_once '../../plantillas/barra_lateral.php';?>
<?php include_once'./pluing.php';?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Programación de Citas</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Citas</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-1">
                        </div>
                        <!-- /.col -->
                        <div class="col-md-10">
                            <div class="card card-primary">
                                <div class="card-body p-0">
                                    <!-- THE CALENDAR -->
                                    <div id="calendar"></div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-1">
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    </div>


    <?php
    include_once'./modal_eventos.php';
    include_once '../../plantillas/footer.php';
    ?>
    <!--JavaScript con procedimientos para la vista-->
    <script type="text/javascript" src="<?= $base_url?>js/controladores/conf.js"></script>
    <script type="text/javascript" src="<?= $base_url?>js/controladores/asesorias/combobox.js"></script>
    <script type="text/javascript" src="<?= $base_url?>js/controladores/asesorias/insertar-app.js"></script>
    <script type="text/javascript" src="<?= $base_url?>js/controladores/asesorias/update-app.js"></script>
    <script type="text/javascript" src="<?= $base_url?>js/controladores/asesorias/calendario-app.js"></script>



    <script type="text/javascript" src="<?= $base_url?>js/controladores/asesorias/input.js"></script>

    <script src="<?= $base_url ?>plugins/a/js/popper.min.js"></script>
    <script src="<?= $base_url ?>plugins/a/js/bootstrap.min.js"></script>
    <script type='text/javascript' src='<?= $base_url ?>plugins/a/js/moment.min.js'></script>
    <script type='text/javascript' src='<?= $base_url ?>plugins/a/js/fullcalendar.min.js'></script>
    <script type='text/javascript' src='<?= $base_url ?>plugins/a/js/locale/es.js'></script>

    <script src="<?= $base_url ?>js/mdtimepicker.js"></script>
    <script src="<?= $base_url ?>plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="<?= $base_url ?>plugins/toastr/toastr.min.js"></script>
    <script>
     $(document).ready(function(){
      $('#timepicker').mdtimepicker(); //Initializes the time picker
       });

     $(document).ready(function(){
      $('#timepicker2').mdtimepicker(); //Initializes the time picker
       });
    </script>


<?php include_once '../../plantillas/cierre.php'; ?>
  
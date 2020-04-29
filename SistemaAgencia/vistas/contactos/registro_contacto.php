<?php
include_once '../../config/parametros.php';
?>
<!--necesario para que funcione el selector multiple-->
<link rel="stylesheet" href="<?= $base_url ?>plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="<?= $base_url ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">


<!--  necesario para que funcione el calendiario con limites-->
<link rel="stylesheet" href="<?= $base_url ?>plugins/daterangepicker/daterangepicker.css">
<link rel="stylesheet" href="<?= $base_url ?>dist/css/adminlte.min.css">


<!--  necesaio paa que sirva la foto con vista preevia-->
<link rel="stylesheet" href="<?= $base_url ?>css/foto.css">  

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Registrar Contacttos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Registrar de Contactos</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" >
        <div class="container-fluid ">
            <div class="row">
                <div class="offset-1"></div>

                <!-- left column -->
                <div class="col-10">
                    <!-- general form elements -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Datos Generales de Contactos</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form">
                            <div class="card-body">
                                
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nombre de Contacto</label>

                                            <div class="input-group">
                                                <input type="text" class="form-control">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Telefono de Contactos</label>

                                            <div class="input-group">
                                                <input type="text" class="form-control">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Correo Electronico</label>

                                            <div class="input-group">
                                                <input type="text" class="form-control">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Costos</label>

                                            <div class="input-group">
                                                <input type="text" class="form-control">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Descripcion de Servicios</label>

                                            <div class="input-group">
                                                <input type="text" class="form-control">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Seleccione foto</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="files" name="foto" >
                                            <label class="custom-file-label" for="files"></label>
                                        </div>
                                    </div>

                                </div>
                                
                                  <div class="row">
                                    <div class="offset-md-5"></div>
                                    <div class="col-md-6">
                                        <output id="list"></output>
                                    </div>
                                </div>
                                
                                <div class="row">

                                    <div style="text-align: right;width:2200px">
                                        <button style="margin: 5px" type="submit"
                                                class="btn btn-default float-right">Cancelar</button>
                                        <button style="margin: 5px" type="submit"
                                                class="btn btn-info float-right">Guardar</button>

                                    </div>
                                </div>
                            </div>            <!-- /.card-body -->
                        </form>


                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- /.card -->
                    <!-- /.card -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


<!--  necesario para que funcione el calendiario con limites-->
<script src="<?= $base_url ?>plugins/select2/js/select2.full.min.js"></script>
<script src="<?= $base_url ?>plugins/moment/moment.min.js"></script>
<script src="<?= $base_url ?>plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<script src="<?= $base_url ?>plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?= $base_url ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="<?= $base_url ?>plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script src="<?= $base_url ?>plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<script src="<?= $base_url ?>js/inicializador-calendario.js"></script>


<!--  necesaio paa que sirva la foto con vista preevia-->
<script src="<?= $base_url ?>js/foto.js"></script> 

<!--necesario para que funcione el selector multiple-->
<script src="<?= $base_url ?>plugins/select2/js/select2.full.min.js"></script>

<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', {'placeholder': 'dd/mm/yyyy'})
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', {'placeholder': 'mm/dd/yyyy'})
        //Money Euro
        $('[data-mask]').inputmask()

        //Date range picker
        $('#reservationdate').datetimepicker({
            format: 'L'
        });
        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            locale: {
                format: 'MM/DD/YYYY hh:mm A'
            }
        })
        //Date range as a button
        $('#daterange-btn').daterangepicker(
                {
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
        function (start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
        )

        //Timepicker
        $('#timepicker').datetimepicker({
            format: 'LT'
        })

        //Bootstrap Duallistbox
        $('.duallistbox').bootstrapDualListbox()

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        $('.my-colorpicker2').on('colorpickerChange', function (event) {
            $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
        });

        $("input[data-bootstrap-switch]").each(function () {
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        });

    })
</script>

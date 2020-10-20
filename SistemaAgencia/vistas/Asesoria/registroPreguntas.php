<?php
include_once '../../config/parametros.php';
include_once '../../plantillas/cabecera.php';
include_once  '../../plantillas/navbar.php';
include_once '../../plantillas/barra_lateral.php';
?>

<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
 
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="margin-top: -12px;">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Registro de Preguntas</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Registrar Preguntas</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" style="margin-top: -20px;">
        <div class="container-fluid">

            <!-- Timelime example  -->
            <div class="row">
                <div class="col-md-12">
                    <!-- The time line -->
                    <div class="timeline">


                        <!-- timeline item -->
                        <div>
                            <i class="fas fa-comments bg-gradient-blue"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fas fa-address-book"></i>Preguntas</span>
                                <h3 class="timeline-header"><a href="#">Preguntas</a></h3>
                                <div class="timeline-body" style="margin-top: -9px;">
                                    <!--Una fila para jugar-->
                                    <div class="row">
                                        <div class="col-lg-1"></div>

                                        <div class="col-lg-5">

                                            <div class="form-group">
                                                <label for="cars">Seleccione tipo de Pregunta</label>
                                                <select name='id_pregunta' id='id_pregunta' class="form-control">
                                                    <option disabled="" selected="">Seleccione</option>
                                                    <option value="abierta">Abiertas</option>
                                                    <option value="cerrada">Cerradas</option>
                                                     <option value="cerrada">Rama</option>
                                                </select>

                                                <!--<input id="id_input" type="text" disabled>-->
                                            </div>

                                        </div>
                                        <div class="col-lg-5">

                                            <div class="form-group">
                                                <label for="cars">Seleccione rama de la Pregunta</label>
                                                <select name='combo_rama' id='combo_rama' class="form-control">
                                                    <option disabled="" selected>Rama</option>
                                                    <option value="2">Información Personal</option>
                                                    <option value="3">Información de Viaje</option>
                                                    <option value="3">Información Familiar</option>
                                                    <option value="3">Información Educativa</option>
                                                </select>

                                                <!--<input id="id_input" type="text" disabled>-->
                                            </div>

                                        </div>


                                        <div class="col-lg-1"></div>

                                    </div>
                                    <!--fin de Una fila para jugar-->
                                </div>
                            </div>
                        </div>
                        <!-- END timeline item -->

                        <!-- timeline item -->
                        <div id="mostrar"></div>
                        <!-- END timeline item -->
                        <!-- timeline item -->
                        <div id="botones"></div>
                        <!-- END timeline item -->
                        
                        <!-- timeline time label -->
                        <div class="time-label">
                            <span class="bg-green">Asesoría Migratoria</span>
                        </div>
                        <!-- /.timeline-label -->
                    </div>
                </div>
                <!-- /.col -->
            </div>
        </div>
        <!-- /.timeline -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>

<?php
  include_once '../../plantillas/footer.php';
?>
<script type="text/javascript" src="<?= $base_url?>js/controladores/asesorias/creacion_registros.js"></script>
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

       
        $('.my-colorpicker2').on('colorpickerChange', function (event) {
            $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
        });

        $("input[data-bootstrap-switch]").each(function () {
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        });

    })
</script>
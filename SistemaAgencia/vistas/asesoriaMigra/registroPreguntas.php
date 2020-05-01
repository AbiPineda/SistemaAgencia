<?php
include_once '../../config/parametros.php';
?>

<!--necesario para que funcione el selector multiple-->
<link rel="stylesheet" href="<?= $base_url ?>plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="<?= $base_url ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?= $base_url ?>plugins/fontawesome-free/css/all.min.css">
<!-- AdminLTE css -->
<link rel="stylesheet" href="<?= $base_url ?>dist/css/adminlte.min.css">
<!--**************************************************************-->


<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<script>
    $(function () {
        $("#id_pregunta").change(function () {
          // alert($(this).val());
            if ($(this).val() === "abierta") {
                $("#input_abierta").prop("disabled", false);
                $("#combo_abierta").prop("disabled", false);
                
                $("#input_cerrada").prop("disabled", true);
                $("#combo_cerrada").prop("disabled", true);
                 $("#input_rama").prop("disabled", true);
                  $("#combo_rama").prop("disabled", false);
            }
            
            if ($(this).val() === "cerrada") {
                $("#input_cerrada").prop("disabled", false);
                $("#combo_cerrada").prop("disabled", false);
                
                $("#input_abierta").prop("disabled", true);
                $("#combo_abierta").prop("disabled", true);
                 $("#input_rama").prop("disabled", true);
                 $("#combo_rama").prop("disabled", false);
            }
            
              if ($(this).val() === "rama") {
                $("#input_rama").prop("disabled", false);
                $("#input_cerrada").prop("disabled", true);
                $("#combo_cerrada").prop("disabled", true);
                $("#combo_rama").prop("disabled", true);
                
                $("#input_abierta").prop("disabled", true);
                $("#combo_abierta").prop("disabled", true);
            }
        });
    });
</script>
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
                                                    <option value="">Seleccione</option>
                                                    <option value="abierta">Abiertas</option>
                                                    <option value="cerrada">Cerradas</option>
                                                    <option value="rama">Rama</option>
                                                </select>

                                                <!--<input id="id_input" type="text" disabled>-->
                                            </div>

                                        </div>
                                        <div class="col-lg-5">

                                            <div class="form-group">
                                                <label for="cars">Seleccione rama de la Pregunta</label>
                                                <select name='combo_rama' id='combo_rama' class="form-control">
                                                    <option value="1" selected>Rama</option>
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
                        <div>
                            <i class="fas fa-address-card bg-green"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fas fa-anchor"></i>Selección</span>
                                <h3 class="timeline-header"><a href="#">Tipo de Pregunta Abiertas</a></h3>
                                <div class="timeline-body" style="margin-top: -9px;">
                                    <!--Una fila para jugar-->
                                    <div class="row">
                                        <div class="col-lg-1"></div>

                                        <div class="col-lg-7">

                                            <div class="form-group">
                                                <label for="cars">Digite la Pregunta</label>
                                                <input id="input_abierta" placeholder="Digite la pregunta" type="text" disabled class="form-control">
                                            </div>

                                        </div>
                                        <div class="col-lg-3">

                                            <div class="form-group">
                                                <label for="cars">Más de una Respuesta</label>
                                                <select name='id_categoria' id='combo_abierta' data-placeholder="Seleccione" class="form-control" disabled>
                                                    <option value="1">Seleccione</option>
                                                    <option value="2">Si</option>
                                                    <option value="3">No</option>

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
                        <div>
                            <i class="fas fa-address-card bg-gradient-info"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fas fa-anchor"></i>Selección</span>
                                <h3 class="timeline-header"><a href="#">Tipo de Pregunta Cerrada</a></h3>
                                <div class="timeline-body" style="margin-top: -9px;">
                                    <!--Una fila para jugar-->
                                    <div class="row">
                                        <div class="col-lg-1"></div>

                                        <div class="col-lg-6">

                                            <div class="form-group">
                                                <label for="cars">Digite la Pregunta</label>
                                                <input id="input_cerrada" placeholder="Digite la pregunta" type="text" disabled class="form-control" style="width:100%;">
                                            </div>

                                        </div>
                                        <div class="col-lg-4">

                                            <div class="form-group">
                                                <label>Opciones de Respueta</label>
                                                <select class="select2" disabled id="combo_cerrada" multiple="multiple" data-placeholder="Seleccione" style="width:100%;">
                                                    <option>Si</option>
                                                    <option>No</option>
                                                    <option>Tal Vez</option>
                                                    <option>Pueda ser</option>
                                                    <option>Lo pensare</option>
                                                </select>
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
                        <div>
                            <i class="fas fa-address-card bg-gradient-info"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fas fa-address-card"></i>Selección</span>
                                <h3 class="timeline-header"><a href="#">Registro de una nueva rama</a></h3>
                                <div class="timeline-body" style="margin-top: -9px;">
                                    <!--Una fila para jugar-->
                                    <div class="row">
                                        <div class="col-lg-2"></div>

                                        <div class="col-lg-6">

                                            <div class="form-group">
                                                <label for="cars">Digite la rama</label>
                                                <input id="input_rama" type="text" placeholder="Digite la rama" disabled class="form-control" style="width:100%;">
                                            </div>

                                        </div>


                                        <div class="col-lg-2"></div>
                                        

                                    </div>
                                     
                                    <!--fin de Una fila para jugar-->
                                </div>
                              
                            </div>
                        </div>
                        <!-- END timeline item -->
                        
                          <!-- timeline item -->
                        <div>
                            <i class="fas fa-save bg-gradient-lightblue"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fas fa-save"></i>Guardar</span>
                                <h3 class="timeline-header"><a href="#">Guardar Información</a></h3>
                                <div class="timeline-body">
                                    <!--Una fila para jugar-->
                                    <div class="row">
                                        <div class="col-lg-1"></div>

                                        <div class="col-lg-10">

                                            

                                        </div>
                                      
                                        <div class="col-lg-1"></div>
                                        <div style="text-align: right;width:577px;margin-top:-8px;">
                                         <a class="btn btn-primary btn-sm" style="color: white">Guardar</a>
                                <a class="btn btn-danger btn-sm" style="color: white">Cancelar</a>

                                    </div>

                                    </div>
                                     
                                    <!--fin de Una fila para jugar-->
                                </div>
                              
                            </div>
                        </div>
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
<!-- ./wrapper -->
<!-- jQuery -->
<script src="<?= $base_url ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= $base_url ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= $base_url ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= $base_url ?>dist/js/demo.js"></script>
<!-- Select2 -->
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
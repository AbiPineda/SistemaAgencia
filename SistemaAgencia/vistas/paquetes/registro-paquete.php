<?php
include_once '../../config/parametros.php';
include_once '../../plantillas/cabecera.php';
include_once  '../../plantillas/navbar.php';
  include_once '../../plantillas/barra_lateral.php';
?>
<!--necesario para que funcione el selector multiple-->
<link rel="stylesheet" href="<?= $base_url ?>plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="<?= $base_url ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">


<!--  necesario para que funcione el calendiario con limites-->
<link rel="stylesheet" href="<?= $base_url ?>plugins/daterangepicker/daterangepicker.css">
<link rel="stylesheet" href="<?= $base_url ?>dist/css/adminlte.min.css">


<!--  necesaio paa que sirva la foto con vista preevia-->
<link rel="stylesheet" href="<?= $base_url ?>css/foto.css">

<!-- DataTables -->
<link rel="stylesheet"
      href="http://localhost/Plantillas/SistemaAgencia/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet"
      href="http://localhost/Plantillas/SistemaAgencia/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="<?= $base_url ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">

<div class="content-wrapper" style="min-height: 1185.73px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Registrar Paquete</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Registrar</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="timeline">
                    <!-- timeline time label -->
                    <div class="time-label">
                        <span class="bg-red">Información</span>
                    </div>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <div>
                        <i class="fas fa-car bg-blue"></i>
                        <div class="timeline-item">

                            <h3 class="timeline-header"><a href="#">Datos Generales</a></h3>

                            <div class="timeline-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Titulo del viaje</label>

                                            <div class="input-group">
                                                <!-- <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa fa-bookmark"></i></span>
                                                </div>-->
                                                <input type="text" class="form-control">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Fecha del viaje</label>

                                            <div class="input-group">
                                                <input type="text" class="form-control float-right" id="reservation">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Lugar de Salida</label>
                                            <div class="input-group">
                                                <!--<div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-paper-plane"></i></span>
                                                </div>-->
                                                <input type="text" class="form-control">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Precio Bebe (0 a 4 años)</label>
                                            <div class="input-group">
                                                <!--<div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                                </div>-->
                                                <input type="number" class="form-control">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>

                                </div>
                                
                                 <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Precio Niños (5 a 12 años)</label>

                                            <div class="input-group">
                                                <!-- <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa fa-bookmark"></i></span>
                                                </div>-->
                                                <input type="number" class="form-control">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Precio Adulto (+12 años)</label>

                                            <div class="input-group">
                                                <input type="number" class="form-control float-right" id="reservation">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Adulto Mayor (+60 años)</label>
                                            <div class="input-group">
                                                <!--<div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-paper-plane"></i></span>
                                                </div>-->
                                                <input type="number" class="form-control">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                   

                                </div>

                            </div>

                        </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <div>
                        <i class="fas fa-user bg-green"></i>
                        <div class="timeline-item">

                            <h3 class="timeline-header no-border"><a href="#">Servicios Adicionales</a></h3>
                            <div class="timeline-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>El viaje incluye</label>
                                            <textarea class="form-control" rows="3"
                                                      placeholder="Digitar aquí ..."></textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>El viaje no incluye</label>
                                            <textarea class="form-control" rows="3"
                                                      placeholder="Digitar aquí..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Requisitos de viaje</label>
                                            <textarea class="form-control" rows="3"
                                                      placeholder="Digitar aquí ..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Promociones especiales</label>
                                            <textarea class="form-control" rows="3"
                                                      placeholder="Digitar aquí ..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Sitios turisticos</label>
                                            <select class="select2 select2-hidden-accessible form-control float-righ"
                                                    multiple="" data-placeholder="Selececcione los sitios turisticos"
                                                    style="width: 100%;" data-select2-id="7" tabindex="-1"
                                                    aria-hidden="true">
                                                <option data-select2-id="46">SAN JOSÉ (Costa Rica)</option>
                                                <option data-select2-id="47">CARTAGO (Costa Rica)</option>
                                                <option data-select2-id="48">PARQUE LA SABANA (Costa Rica)</option>
                                                <option data-select2-id="49">ZARCERO (Costa Rica)</option>
                                                <option data-select2-id="50">TERMALES LA FORTUNA (Costa Rica)</option>
                                                <option data-select2-id="51">Washington (Costa Rica)</option>
                                                <option data-select2-id="61">SAN JUAN DEL SUR (Nicaragua)</option>
                                                <option data-select2-id="63">GRANADA (Nicaragua)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Hoteles</label>
                                            <div class="select2-blue">
                                                <select class="select2 select2-hidden-accessible" multiple=""
                                                        data-placeholder="Seleccione los hoteles"
                                                        data-dropdown-css-class="select2-blue" style="width: 100%;"
                                                        data-select2-id="15" tabindex="-1" aria-hidden="true">
                                                    <option data-select2-id="146">Hoteles(Costa Rica)</option>
                                                    <option data-select2-id="147">Hilton (Costa Rica)</option>
                                                    <option data-select2-id="148">Real Roma (Costa Rica)</option>
                                                    <option data-select2-id="149">Presidencia (Costa Rica)</option>
                                                    <option data-select2-id="161">Monterreal (Nicaragua)</option>
                                                    <option data-select2-id="163">San Pedro (Nicaragua)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label>Seleccione foto</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="files" name="foto" >
                                            <label class="custom-file-label" for="files"></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <output id="list"></output>
                                    </div>

                                </div>
                                <div class="timeline-footer" style="text-align: right;">
                                    <a class="btn btn-info btn-sm" style="color: white">Guardar</a>
                                    <a class="btn btn-danger btn-sm"style="color: white" >Cancelar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline item -->

                </div>
                <!-- END timeline item -->
            </div>
        </div>
    </section>

<?php
  include_once '../../plantillas/footer.php';
?>

    <!-- formulario mantenimiento -->
    <!-- /.card-header -->

    <!-- DataTables -->
    <script src="http://localhost/Plantillas/SistemaAgencia/plugins/datatables/jquery.dataTables.min.js">
    </script>
    <script
        src="http://localhost/Plantillas/SistemaAgencia/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js">
    </script>
    <script
        src="http://localhost/Plantillas/SistemaAgencia/plugins/datatables-responsive/js/dataTables.responsive.min.js">
    </script>
    <script
        src="http://localhost/Plantillas/SistemaAgencia/plugins/datatables-responsive/js/responsive.bootstrap4.min.js">
    </script>


    <!--  necesario para que funcione el calendiario con limites-->
    <script src="<?= $base_url ?>plugins/select2/js/select2.full.min.js"></script>
    <script src="<?= $base_url ?>plugins/moment/moment.min.js"></script>
    <script src="<?= $base_url ?>plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
    <script src="<?= $base_url ?>plugins/daterangepicker/daterangepicker.js"></script>
    <script src="<?= $base_url ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
    </script>
    <script src="<?= $base_url ?>plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <script src="<?= $base_url ?>plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js">
    </script>
    <script src="<?= $base_url ?>js/inicializador-calendario.js"></script>


    <!--  necesaio paa que sirva la foto con vista preevia-->
    <script src="<?= $base_url ?>js/foto.js"></script>

    <!--necesario para que funcione el selector multiple-->
    <script src="<?= $base_url ?>plugins/select2/js/select2.full.min.js"></script>

    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2();

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            });

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            });
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {
                'placeholder': 'mm/dd/yyyy'
            });
            //Money Euro
            $('[data-mask]').inputmask();

            //Date range picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });
            ////CONFIGURACION DEL CALENDARIO
            $('#reservation').daterangepicker({
                locale: {
                    format: 'DD/MM/YYYY',
                    "separator": " - ",
                    "applyLabel": "Aplicar",
                    "cancelLabel": "Cancelar",
                    "fromLabel": "De",
                    "toLabel": "A",
                    "customRangeLabel": "Custom",
                    "daysOfWeek": [
                        "Dom",
                        "Lun",
                        "Mar",
                        "Mie",
                        "Jue",
                        "Vie",
                        "Sab"
                    ],
                    "monthNames": [
                        "Enero",
                        "Febrero",
                        "Marzo",
                        "Abril",
                        "Mayo",
                        "Junio",
                        "Julio",
                        "Agosto",
                        "Septiembre",
                        "Octubre",
                        "Noviembre",
                        "Diciembre"
                    ],
                    "firstDay": 0
                }
            });

            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'DD/MM/YYYY'
                }
            });
            //Date range as a button
            $('#daterange-btn').daterangepicker({
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment()
                                .subtract(1, 'month').endOf('month')
                    ]
                },
                startDate: moment().subtract(29, 'days'),
                endDate: moment()
            },
            function (start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                        'MMMM D, YYYY'));
            }
            );

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            });

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox();

            //Colorpicker
            $('.my-colorpicker1').colorpicker();
            //color picker with addon
            $('.my-colorpicker2').colorpicker();

            $('.my-colorpicker2').on('colorpickerChange', function (event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            });

            $("input[data-bootstrap-switch]").each(function () {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            });

        });
    </script>

    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true
            });
        });
    </script>

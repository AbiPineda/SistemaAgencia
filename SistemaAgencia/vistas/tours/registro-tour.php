<?php
include_once '../../config/parametros.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Registrar Cliente</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Registrar Cliente</li>
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
                            <h3 class="card-title">Datos Personales</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Titulo del viaje</label>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa fa-bookmark"></i></span>
                                                </div>
                                                <input type="text" class="form-control">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Fecha del viaje</label>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control float-right" id="reservation">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Lugar de Salida</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-paper-plane"></i></span>
                                                </div>
                                                <input type="text" class="form-control" >
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Precio</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                </div>
                                                <input type="text" class="form-control" >
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>El viaje incluye</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>El viaje no incluye</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Requisitos de viaje</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Promociones especiales</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Sitios turisticos</label>
                                            <select class="select2 select2-hidden-accessible form-control float-righ" multiple="" data-placeholder="Selececcione los sitios turisticos" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true">
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
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Hoteles</label>
                                            <div class="select2-blue">
                                                <select class="select2 select2-hidden-accessible" multiple="" data-placeholder="Seleccione los hoteles" data-dropdown-css-class="select2-blue" style="width: 100%;" data-select2-id="15" tabindex="-1" aria-hidden="true">
                                                    <option data-select2-id="146">Hoteles(Costa Rica)</option>
                                                    <option data-select2-id="147">Hilton (Costa Rica)</option>
                                                    <option data-select2-id="148">Real Roma (Costa Rica)</option>
                                                    <option data-select2-id="149">Presidencia (Costa Rica)</option>
                                                    <option data-select2-id="161">Monterreal (Nicaragua)</option>
                                                    <option data-select2-id="163">San Pedro (Nicaragua)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                </div>

   

                                <div class="row">
                                    <div class="offset-md-3"></div>
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
                                <!-- /.card-body -->
                                      


                        </form>
                    </div>

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


<script type="text/javascript">
    $(document).ready(function () {
        bsCustomFileInput.init();
    });
    < /script
</script>

<script src="<?=$base_url?>js/foto.js"></script> 

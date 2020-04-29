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
                    <h1>Editar Sitio Turisticos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Edición de Sitios Turisticos</li>
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
                            <h3 class="card-title">Datos de sitios Turisticos</h3>
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
                                                <input type="text" class="form-control" value="Roatan">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Ubicacion</label>

                                            <div class="input-group">
                                                <input type="text" class="form-control" value="Islas del Caribe">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tipo</label>
                                            <select class="select2 select2-hidden-accessible form-control float-righ" multiple="" data-placeholder="Selececcione el tipo" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true">
                                                <option data-select2-id="46">Playa</option>
                                                <option selected="selected" data-select2-id="47">Montaña</option>
                                                <option data-select2-id="48">Reserva Natural</option>
                                                <option data-select2-id="49">Parque Nacional</option>
                                                <option data-select2-id="50">Restaurante</option>
                                                <option data-select2-id="51">Shows Artitisticos</option>
                                                <option data-select2-id="61">Hotel</option>
                                                <option data-select2-id="63">Otros</option>
                                            </select>
                                        </div>
                                    </div>
                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Coordenadas</label>

                                            <div class="input-group">
                                                <input type="text" class="form-control" value="12349492921994922, -939403043403033 ">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Descripcion</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter ..." >Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Informacion de contacto</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter ...">Juan Jose Gomez Palacios, administrador telefono: 3939-4342 correo: elcorreo@gmail.com</textarea>
                                        </div>
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
                                    <img src="<?=$base_url?>img/4" class="product-image" alt="Product Image">
                                 
                                </div>
                                
                                <div class="row">

                                    <div style="text-align: right;width:2200px">
                                        <button style="margin: 5px" type="submit"
                                                class="btn btn-default float-right">Cancelar</button>
                                        <button style="margin: 5px" type="submit"
                                                class="btn btn-info float-right">Actualizar</button>

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

<!-- INICIALIZACION -->
<?php include_once '../../config/parametros.php'; ?>
<?php include_once '../../plantillas/cabecera.php'; ?>
<!-- COLOCAR ESTILOS ADICIONALES AQUI -->
<link href="<?= $base_url ?>plugins/subir-foto/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
<link href="<?= $base_url ?>plugins/subir-foto/themes/explorer-fas/theme.css" media="all" rel="stylesheet"
    type="text/css" />
<script src="<?= $base_url ?>plugins/subir-foto/js/plugins/piexif.js" type="text/javascript"></script>
<script src="<?= $base_url ?>plugins/subir-foto/js/plugins/sortable.js" type="text/javascript"></script>
<script src="<?= $base_url ?>plugins/subir-foto/js/fileinput.js" type="text/javascript"></script>
<script src="<?= $base_url ?>plugins/subir-foto/js/locales/es.js" type="text/javascript"></script>
<script src="<?= $base_url ?>plugins/subir-foto/themes/fas/theme.js" type="text/javascript"></script>
<!-- COTINUANDO CON LA INICIALIZACION -->
<?php include_once '../../plantillas/navbar.php'; ?>
<?php include_once '../../plantillas/barra_lateral.php'; ?>




<div class="content-wrapper" style="min-height: 1185.73px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Registrar Servicios Adicionales</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Registrar Servicios Adicionales</li>
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

                            <h3 class="timeline-header"><a href="#">Datos Generales:</a></h3>

                            <div class="timeline-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Tipo de Servicio</label>
                                            <select name="tipo_servicio" id="tipo_servicio"
                                                class="select2 select2-hidden-accessible form-control float-righ"
                                                data-placeholder="Seleccione el tipo" style="width: 100%;"
                                                data-select2-id="7" tabindex="-1" aria-hidden="true">
                                                <option data-select2-id="47">Vehiculo</option>
                                                <option data-select2-id="46">Guia Turistico</option>
                                                <option data-select2-id="47">Busero</option>
                                                <option data-select2-id="48">Taxista</option>
                                                <option data-select2-id="428">Cocinero</option>
                                                <option data-select2-id="418">Payaso</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Nombre de Servicio</label>
                                            <div class="input-group">
                                                <input id="nombre" name="nombre" type="text" class="form-control">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Costo promedio</label>
                                            <div class="input-group">
                                                <input id="costos_defecto" name="costos_defecto" type="text"
                                                    class="form-control">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Descripcion del Servicio</label>
                                            <textarea name="descripcion_servicio" id="descripcion_servicio"
                                                class="form-control" rows="3" placeholder="Digitar aquí ..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">

                                        <label>Seleccione Imagenes</label>
                                        <div class="file-loading">
                                            <input type="file" multiple name="fotos[]" id="fotos">
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

                            <h3 class="timeline-header no-border"><a href="#">Información de Contacto</a></h3>
                            <div class="timeline-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>El viaje incluye</label>
                                            <textarea name="informacion_contacto" id="informacion_contacto"
                                                class="form-control" rows="3" placeholder="Digitar aquí ..."></textarea>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="timeline-footer" style="text-align: right;">
            <button name="btnguardar" id="btnguardar" class="btn btn-info btn-sm" style="color: white">Guardar</button>
            <button class="btn btn-danger btn-sm" style="color: white">Cancelar</button>
        </div>
    </section>
</div>


<?php include_once '../../plantillas/footer.php'; ?>
<!-- PONER SCRIPT ADICIONALES ACA -->
<script>
$('#fotos').fileinput({
    theme: 'fas',
    language: 'es',
    //uploadUrl: '#',
    showUpload: false,
    //showCaption: false,
    maxFileSize: 2000,
    maxFilesNum: 10,
    allowedFileExtensions: ['jpg', 'png', 'gif'],
    required: true,
    uploadAsync: false



});
</script>



<script>
$(function() {
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
    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
            format: 'MM/DD/YYYY hh:mm A'
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
        function(start, end) {
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



    $('.my-colorpicker2').on('colorpickerChange', function(event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function() {
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

});
</script>

<script>
// CUANDO LA PAGINA YA ESTA LISTA
$(document).ready(function() {

    //CUANDO SE LE DA EL CLICK AL BOTON DE GUARDAR 
    $("#btnguardar").click(function() {
        let form = new FormData();

        //ESTO ES PARA L A GALERIA 
        let files = document.getElementById("fotos").files;
        for (let i = 0; i < files.length; i++) {
            form.append('fotos[]', files[i]);
        }

        form.append("tipo_servicio", document.getElementById("tipo_servicio").value);
        form.append("nombre", document.getElementById("nombre").value);
        form.append("costos_defecto", document.getElementById("costos_defecto").value);
        form.append("descripcion_servicio", document.getElementById("descripcion_servicio").value);
        form.append("informacion_contacto", document.getElementById("informacion_contacto").value);
        let settings = {

            "url": "http://localhost/API-REST-PHP/ServiciosAdicionales/save",
            "method": "POST",
            "timeout": 0,
            "processData": false,
            "mimeType": "multipart/form-data",
            "contentType": false,
            "data": form,
        };

        $.ajax(settings).done(function(response) {
            let respuestaDecodificada = JSON.parse(response);
            console.log(respuestaDecodificada);
        }).fail(function(response) {
            let respuestaDecodificada = JSON.parse(response.responseText);
            console.log(respuestaDecodificada);
        });
    });
});
</script>





<!-- CIERRE DE ETIQUETAS -->
<?php include_once '../../plantillas/cierre.php'; ?>
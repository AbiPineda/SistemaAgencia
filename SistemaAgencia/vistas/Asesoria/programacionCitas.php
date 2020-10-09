<?php
include_once '../../config/parametros.php';
include_once  '../../plantillas/navbar.php';
include_once '../../plantillas/barra_lateral.php';

include_once'./pluing.php';
?>


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

    <script type="text/javascript" src="<?= $base_url?>js/controladores/asesorias/combobox.js"></script>
    <script>
    $(document).ready(function() {
        //*****para el combobox


        //*********fin****




        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next,today',
                center: 'title',
                right: 'month,basicWeek,basicDay'
            },
            customButtons: {
                Miboton: {
                    text: "boton 1",
                    click: function() {
                        alert("Accion del boton");
                    }
                }
            },
            dayClick: function(date, jsEvent, view) {
                $('#modal_eventos').modal();
                $('#txtFecha').val(date.format());

                $('#btnAgregar').prop("disabled", false);
                $('#btnModificar').prop("disabled", true);
                $('#btnEliminar').prop("disabled", true);
                limpiar();


            },
            events: 'http://localhost/API-REST-PHP/index.php/Cita/cita', //aqui pongo la api que e hecho
            //http://localhost/restful/index.php/Calendario/calendario
            eventClick: function(calEvent, jsEvent, view) {

                $('#btnAgregar').prop("disabled", true);
                $('#btnModificar').prop("disabled", false);
                $('#btnEliminar').prop("disabled", false);

                $('#tituloEvento').html(calEvent.motivo);

                $('#txtId').val(calEvent.id_cita);
                $('#txtTitulo').val(calEvent.title);
                $('#txtColor').val(calEvent.color);
                $('#txtDescripcion').val(calEvent.descripcion);
                FechaHora = calEvent.start._i.split(" ");
                $('#txtFecha').val(FechaHora[0]);
                $('#txtHora').val(FechaHora[1]);

                $('#modal_eventos').modal();


            },
            editable: true,
            eventDrop: function(calEvent) {
                $('#txtId').val(calEvent.id_cita);
                $('#txtTitulo').val(calEvent.title);
                $('#txtColor').val(calEvent.color);
                $('#txtDescripcion').val(calEvent.descripcion);
                var fechaHora = calEvent.start.format().split("T");
                $('#txtFecha').val(fechaHora[0]);
                $('#txtHora').val(fechaHora[1]); //todo el modal con los datos

                recolectarDatos();
                enviarInformacion(NuevoEvento, true);


            }

        });
    }); //fin calendario
    $("#btnAgregar").on('click', function(e) {

        e.preventDefault();
        // recolectarDatos();

        $.ajax({
            url: "http://localhost/API-REST-PHP/index.php/Cita/citas",
            method: 'POST',
            data: $("#register-form").serialize(),
            success: function(response) {
                if (response) {

                    $("#modal_eventos").modal('toggle');
                    $('#calendar').fullCalendar('refetchEvents');


                    console.log(response);
                }

            },
            error: function(er) {
                console.log(er);
                alert("Hay un error....");
            }

        });

    });
    </script>
    <script src="<?= $base_url ?>plugins/a/js/popper.min.js"></script>
    <script src="<?= $base_url ?>plugins/a/js/bootstrap.min.js"></script>
    <script type='text/javascript' src='<?= $base_url ?>plugins/a/js/moment.min.js'></script>
    <script type='text/javascript' src='<?= $base_url ?>plugins/a/js/fullcalendar.min.js'></script>
    <script type='text/javascript' src='<?= $base_url ?>plugins/a/js/locale/es.js'></script>





    <script type="text/javascript">
    $('.clockpicker').clockpicker();
    </script>
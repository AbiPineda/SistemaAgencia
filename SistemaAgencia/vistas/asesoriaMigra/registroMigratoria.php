<?php
include_once '../../config/parametros.php';
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?=$base_url?>plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- SweetAlert2 -->
<link rel="stylesheet" href="<?=$base_url?>plugins/sweetalert2/sweetalert2.min.css">
<!-- Toastr -->
<link rel="stylesheet" href="<?=$base_url?>plugins/toastr/toastr.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="<?=$base_url?>dist/css/adminlte.min.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

<!-- fullCalendar -->
  <link rel="stylesheet" href="<?=$base_url?>plugins/fullcalendar/main.min.css">
  <link rel="stylesheet" href="<?=$base_url?>plugins/fullcalendar-daygrid/main.min.css">
  <link rel="stylesheet" href="<?=$base_url?>plugins/fullcalendar-timegrid/main.min.css">
  <link rel="stylesheet" href="<?=$base_url?>plugins/fullcalendar-bootstrap/main.min.css">
  
<!--necesario para que funcione el selector multiple-->
<link rel="stylesheet" href="<?= $base_url ?>plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="<?= $base_url ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?= $base_url ?>plugins/fontawesome-free/css/all.min.css">
<!-- AdminLTE css -->
<link rel="stylesheet" href="<?= $base_url ?>dist/css/adminlte.min.css">
<!--**************************************************************-->

<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>

                            <small> Registro de Información Migratoria</small>
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Información Migratoria</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- ./row -->
                <div class="row">
                    <div class="col-12 col-sm-1"></div>
                    <div class="col-12 col-sm-10">
                        <div class="card card-primary card-tabs">
                            <div class="card-header p-0 pt-1">
                                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-Personal" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Información Personal</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Información de Viaje</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Información Familiar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Formación Académica</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-one-tabContent">

                                    <div class="tab-pane fade show active" id="custom-tabs-one-Personal" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                        <!--**************una pregunta*********-->
                                        <div class="row">

                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label>
                                                        ¿Nombre según su pasaporte?
                                                    </label>

                                                </div>

                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-group">
                                                    <input type="text" class="form-control">
                                                </div>

                                            </div>

                                        </div> 
                                        <!--************** fin una pregunta*********-->

                                        <!--**************una pregunta*********-->
                                        <div class="row">

                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label>
                                                        ¿Nombre de soltera/o?
                                                    </label>

                                                </div>

                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-group">
                                                    <input type="text" class="form-control">
                                                </div>

                                            </div>

                                        </div> 
                                        <!--************** fin una pregunta*********-->
                                        <!--**************una pregunta*********-->
                                        <div class="row">

                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label>
                                                        ¿Dirección de casa?
                                                    </label>

                                                </div>

                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-group">
                                                    <input type="text" class="form-control">
                                                </div>

                                            </div>

                                        </div> 
                                        <!--************** fin una pregunta*********-->

                                        <!--**************una pregunta*********-->
                                        <div class="row">

                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label>
                                                        ¿Correo electrónico?
                                                    </label>

                                                </div>

                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-group">
                                                    <input type="text" class="form-control">
                                                </div>

                                            </div>

                                        </div> 
                                        <!--************** fin una pregunta*********-->

                                        <!--**************una pregunta*********-->
                                        <div class="row">

                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>¿Fecha de nacimiento?</label>
                                                    <input type="date" class="form-control">
                                                </div>

                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>¿Número de teléfono casa?</label> 
                                                    <input type="text" class="form-control">
                                                </div>

                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>¿Número de teléfono oficina?</label> 
                                                    <input type="text" class="form-control">
                                                </div>

                                            </div>

                                        </div> 
                                        <!--************** fin una pregunta*********-->

                                        <!--**************una pregunta*********-->
                                        <div class="row">

                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>¿Número de teléfono celular?</label>
                                                    <input type="text" class="form-control">
                                                </div>

                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>¿Número de pasaporte?</label>
                                                    <input type="text" class="form-control">
                                                </div>

                                            </div>

                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>¿Tipo de pasaporte?</label>
                                                    <select id="categoria" class="form-control">
                                                        <option value="permitido">Diplomatico</option>
                                                        <option value="no">Oficial</option>
                                                        <option value="no"> Salvoconductos </option>

                                                    </select>
                                                </div>

                                            </div>

                                        </div> 
                                        <!--************** fin una pregunta*********-->

                                        <!--**************una pregunta*********-->
                                        <div class="row">
                                            <div class="col-lg-1"></div>
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label>
                                                        ¿Ha perdido algún pasaporte o se lo han robado?
                                                    </label>

                                                </div>

                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <select id="categoria" class="form-control">
                                                        <option value="permitido">Perdido</option>
                                                        <option value="no">Robado</option>

                                                    </select>
                                                </div>

                                            </div>
                                            <div class="col-lg-2"></div>

                                        </div> 
                                        <!--************** fin una pregunta*********-->

                                    </div>

                                    <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                                        <!--**************una pregunta*********-->
                                        <div class="row">

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>¿Fecha probable de viaje?</label>
                                                    <input type="date" class="form-control">
                                                </div>

                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>¿Cuántas personas que viajaran con usted?</label>
                                                    <input type="number" class="form-control">
                                                </div>

                                            </div>

                                        </div> 
                                        <!--************** fin una pregunta*********-->  
                                        <div class="row">
                                            <div class="col-lg-6">
                                                    <div class="card">
                                                         
                                                        <div class="card-header">
                                                            <h4 class="card-title"><label>¿Nombre de las personas? </label></h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <!-- the events -->
                                                            <div id="external-events">
                                                                <div class="external-event bg-success">Petronila González</div>
                                                                <div class="external-event bg-warning">N'Golo Kanté</div>
                                                                <div class="checkbox">
                                                                    <label for="drop-remove">
                                                                        <input type="checkbox" id="drop-remove">
                                                                        Eliminar
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /.card-body -->
                                                    </div>
                                                   

                                            </div>
                                            
                                            <div class="col-lg-6">
                                                 <!-- /.card -->
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Nombre de las personas</h3>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                                                              <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
                                                                <ul class="fc-color-picker" id="color-chooser">
                                                                    <li><a class="text-primary" href="#"><i class="fas fa-square"></i></a></li>
                                                                    <li><a class="text-warning" href="#"><i class="fas fa-square"></i></a></li>
                                                                    <li><a class="text-success" href="#"><i class="fas fa-square"></i></a></li>
                                                                    <li><a class="text-danger" href="#"><i class="fas fa-square"></i></a></li>
                                                                    <li><a class="text-muted" href="#"><i class="fas fa-square"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <!-- /btn-group -->
                                                            <div class="input-group">
                                                                <input id="new-event" type="text" class="form-control" placeholder="Digite el nombre">

                                                                <div class="input-group-append">
                                                                    <button id="add-new-event" type="button" class="btn btn-primary">Agregar</button>
                                                                </div>
                                                                <!-- /btn-group -->
                                                            </div>
                                                            <!-- /input-group -->
                                                        </div>
                                                    </div>
                                            </div>

                                        </div> 
                                        <!--************** fin una pregunta*********-->
                                        <!--**************una pregunta*********-->
                                        <div class="row">

                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>¿Parentesco que tiene con ellas?</label>
                                                   <select class="select2" id="combo_cerrada" multiple="multiple" data-placeholder="Seleccione" style="width:100%;">
                                                    <option>Primos/as</option>
                                                    <option>Madre</option>
                                                    <option>Padre</option>
                                                    <option>Hermanos/as</option>
                                                </select>
                                                </div>

                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>¿Ha tenido visa antes?</label>
                                                   <select id="categoria" class="form-control">
                                                        <option value="permitido">Si</option>
                                                        <option value="no">No</option>

                                                    </select>
                                                </div>

                                            </div>

                                        </div> 
                                        <!--************** fin una pregunta*********--> 
                                    </div>

                                    <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                                        Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna. 
                                    </div>

                                    <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">
                                        Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis. 
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <div class="col-12 col-sm-1"></div>
                </div>


            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="<?=$base_url?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=$base_url?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=$base_url?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=$base_url?>dist/js/demo.js"></script>

<!--Para agregar los familiares pluing-->
<script src="<?=$base_url?>plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- fullCalendar 2.2.5 -->
<script src="<?=$base_url?>plugins/fullcalendar/locales/el.js"></script>
<script src="<?=$base_url?>plugins/moment/moment.min.js"></script>
<script src="<?=$base_url?>plugins/fullcalendar/main.min.js"></script>

<script src="<?=$base_url?>plugins/fullcalendar-daygrid/main.min.js"></script>
<script src="<?=$base_url?>plugins/fullcalendar-timegrid/main.min.js"></script>
<script src="<?=$base_url?>plugins/fullcalendar-interaction/main.min.js"></script>
<script src="<?=$base_url?>plugins/fullcalendar-bootstrap/main.min.js"></script>
<!-- Page specific script -->
<!--Para agregar los familiares pluing-->

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
<script>
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function ini_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    ini_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
  
    var Draggable = FullCalendarInteraction.Draggable;

    var containerEl = document.getElementById('external-events');
    var checkbox = document.getElementById('drop-remove');
    var calendarEl = document.getElementById('calendar');

    // initialize the external events
    // -----------------------------------------------------------------

    new Draggable(containerEl, {
      itemSelector: '.external-event',
      eventData: function(eventEl) {
        console.log(eventEl);
        return {
          title: eventEl.innerText,
          backgroundColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          borderColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          textColor: window.getComputedStyle( eventEl ,null).getPropertyValue('color'),
        };
      }
    });

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    //Color chooser button
    var colorChooser = $('#color-chooser-btn')
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      //Save color
      currColor = $(this).css('color')
      //Add color effect to button
      $('#add-new-event').css({
        'background-color': currColor,
        'border-color'    : currColor
      })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      //Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      //Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.html(val)
      $('#external-events').prepend(event)

      //Add draggable funtionality
      ini_events(event)

      //Remove event from text input
      $('#new-event').val('')
    })
  })
</script>


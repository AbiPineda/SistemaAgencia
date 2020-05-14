
<link rel="stylesheet" href="./a/css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="./a/css/bootstrap.min.css">
<link rel="stylesheet" href="./a/css/styles.css">
<link rel='stylesheet' type='text/css' href='./a/css/fullcalendar.css' />
<script src="./a/js/jquery-3.2.1.js"></script>
<script src="./a/js/popper.min.js"></script>
<script src="./a/js/bootstrap.min.js"></script>
<script type='text/javascript' src='./a/js/moment.min.js'></script>
<script type='text/javascript' src='./a/js/fullcalendar.min.js'></script>
<script type='text/javascript' src='./a/js/locale/es.js'></script>
<script>

    function addZero(i) {
        if (i < 10) {
            i = '0' + i;
        }
        return i;
    }

    var hoy = new Date();
    var dd = hoy.getDate();
    if (dd < 10) {
        dd = '0' + dd;
    }

    if (mm < 10) {
        mm = '0' + mm;
    }

    var mm = hoy.getMonth() + 1;
    var yyyy = hoy.getFullYear();

    dd = addZero(dd);
    mm = addZero(mm);

    $(document).ready(function () {
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            defaultDate: yyyy + '-' + mm + '-' + dd,
            buttonIcons: true, // show the prev/next text
            weekNumbers: false,
            editable: true,
            eventLimit: true, // allow "more" link when too many events 
            events: [
                {
                    title: 'María Salmerón',
                    description: 'Cita de asesoría',
                    start: yyyy + '-' + mm + '-01',
                    color: '#f56954',
                    textColor: '#ffffff',
                },
                {
                    title: 'Angelina Lopéz',
                    description: 'Asesoría para ella su esposo, hijos',
                    start: yyyy + '-' + mm + '-07',
                    end: yyyy + '-' + mm + '-10',
                    color: '#00c0ef',
                    textColor: '#ffffff',
                },
                {
                    title: 'Pedro Flores',
                    description: 'Cita de asesoría',
                    start: yyyy + '-' + mm + '-09T16:00:00',
                    color: '#3A87AD',
                    textColor: '#ffffff',
                }
            ],
            dayClick: function (date, jsEvent, view) {
                $('#generar').modal();
            },
            eventClick: function (calEvent, jsEvent, view) {
                $('#event-title').text(calEvent.title);
                $('#event-description').html(calEvent.description);

                $('#modal-event').modal();
            },
        });
    });

</script>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container">
        <div class="col-sm-5" id="titulo">
            <h1>Programación de Citas</h1>
        </div>
        <!--si lo tocas se arruina-->
        <h2 class="lead">     Termina tu proceso reservando una cita</h2>
        <!--si lo tocas se arruina-->
        <div class="row">
            <div id="content" class="col-lg-1"></div>
            <div id="content" class="col-lg-10">
                <div class="card">
                    <div class="card-body">
                        <div id="calendar"></div>
                    </div>
                </div>
                <!--Modal para mostrar los detalles de las citas -->
                <div class="modal fade" id="modal-event" tabindex="-1" role="dialog" aria-labelledby="modal-eventLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="event-title"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div id="event-description"></div> <br>
                                <div id="fecha"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </div>
                </div>
                <!--fin de modal para mostrar detalles de las citas-->

                <!--Modal para mostrar los generar las citas -->
                <div class="modal fade" id="generar" tabindex="-1" role="dialog" aria-labelledby="modal-eventLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="event-title"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!--formulario para ingresar las citas-->
                                <form id="task-form">
                                    <div class="form-group">
                                        <label for="cars">Seleccione el Cliente:</label>

                                        <select id="categoria" class="form-control">
                                            <option value="permitido">Jessenia Corinca</option>
                                            <option value="no">Jenny Orellana</option>
                                            <option value="no">Judith Hernández</option>
                                        </select> 
                                    </div>
                                    <div class="form-group">
                                        <label>Fecha</label>
                                        <input type="date" id="name" placeholder="Encomienda" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Hora
                                        </label>
                                        <input type="text" id="name" placeholder="Posiblemente sea un reloj" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Descripción</label>
                                        <textarea id="description" cols="10" rows="3" class="form-control" placeholder="Escriba la Descripción"></textarea>
                                    </div>

                                    <input type="hidden" id="taskId">
                                </form>
                                <!--fin de formulario para ingreso de citas-->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--fin de modal para mostrar generar la cita-->
            </div>
            <div id="content" class="col-lg-1"></div>
        </div>



    </div>


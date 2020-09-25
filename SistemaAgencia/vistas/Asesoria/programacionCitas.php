<?php
include_once '../../config/parametros.php';
include_once '../../plantillas/cabecera.php';
include_once  '../../plantillas/navbar.php';
  include_once '../../plantillas/barra_lateral.php';
?>


<div class="wrapper">
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

<!-- ./wrapper -->
<?php
  include_once '../../plantillas/footer.php';
?>


<script>
    $(function () {

        var date = new Date();
        var d = date.getDate(),
                m = date.getMonth(),
                y = date.getFullYear();

        var Calendar = FullCalendar.Calendar;
        var calendarEl = document.getElementById('calendar');


        // initialize the external events
        // -----------------------------------------------------------------

        
        var calendar = new Calendar(calendarEl, {
            locale: 'es',
            plugins: ['bootstrap', 'interaction', 'dayGrid', 'timeGrid'],
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            'themeSystem': 'bootstrap',
            //Random default events
            events:'http://localhost/API-REST-PHP/index.php/Cita/cita',
            dateClick:function(date,jsEvent,view){
                 $('#modal_eventos').modal();
            },
             eventClick:function(date,jsEvent,view){
                 $('#modal_eventos').modal();
            },
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar !!!
            drop: function (info) {
                // is the "remove after drop" checkbox checked?
                if (checkbox.checked) {
                    // if so, remove the element from the "Draggable Events" list
                    info.draggedEl.parentNode.removeChild(info.draggedEl);
                }
            }
        });

          calendar.render();
        $('#calendar').fullCalendar()

       
    })
</script>

<!--modal alternativo para los eventos-->
 <div class="modal fade" id="modal_eventos" tabindex="-1" role="dialog" aria-labelledby="modal-eventLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tituloEvento">Agregar titulo </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <input type="hidden" id="txtId" name="txtId"/>
                <input type="hidden" id="txtFecha" name="txtFecha"/>

                <div class="form-row">

                    <div class="form-group col-md-8">
                        <label>Título:</label>
                         <input type="text" id="txtTitulo" class="form-control" name="txtTitulo" placeholder="Titulo de la cita" />
                    </div>

                     <div class="form-group col-md-4">
                        <label>Hora de la cita</label>
                        <div class="input-group clockpicker" data-autoclose="true">
                        <input type="text" id="txtHora" name="txtHora" class="form-control" value="10:30" />  
                        </div>
                        
                    </div>
                </div>

                <div class="form-group">
                    <label> Descripción: </label>
               <textarea id="txtDescripcion" rows="3" class="form-control"></textarea>
                </div>
                <div class="form-group">
                <label> Color:</label>
                <input type="color" id="txtColor" name="txtColor" value="#ff0000" class="form-control" style="height: 36px;" />
               </div>

                </div>
                <div class="modal-footer">
            <button type="button" id="btnAgregar" class="btn btn-success" >Agregar</button>
            <button type="button" id="btnModificar" class="btn btn-secondary" >Modificar</button>
              <button type="button" id="btnEliminar" class="btn btn-danger" >Eliminar</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                </div>
                </div>
            </div>
            </div>
<!--fin de modal de eventos-->
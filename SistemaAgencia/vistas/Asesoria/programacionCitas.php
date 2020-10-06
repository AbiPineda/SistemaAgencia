<?php
include_once '../../config/parametros.php';
include_once '../../plantillas/cabecera.php';
include_once  '../../plantillas/navbar.php';
  include_once '../../plantillas/barra_lateral.php';
?>


<script type="text/javascript">

</script>


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

                <form id="register-form" onsubmit="return false">

                <input type="text" id="txtId" name="txtId"/>
                <input type="text" id="txtFecha" name="fecha"/>
                <input type="hidden" name="id_cliente" value="1">

                
                <div class="form-row">

                    <div class="form-group col-md-8">
                        <label>Título:</label>
                         <input type="text"  class="form-control" id="txtTitulo" name="title" placeholder="Titulo de la cita" />
                    </div>

                     <div class="form-group col-md-4">
                        <label>Hora de la cita</label>
                        <div class="input-group clockpicker" data-autoclose="true">
                        <input type="text" id="txtHora" name="start" class="form-control" value="10:30" />  
                        </div>
                        
                    </div>
                </div>

                <div class="form-group">
                    <label> Descripción: </label>
               <textarea  name="descripcion" id="txtDescripcion" rows="3" class="form-control"></textarea>
                </div>
            

                </div>
                <div class="modal-footer">
            <button type="button" id="btnAgregar" class="btn btn-success" >Agregar</button>
            <button type="button" id="btnModificar" class="btn btn-secondary" >Modificar</button>
              <button type="button" id="btnEliminar" class="btn btn-danger" >Eliminar</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                </div>
            </form> 
                </div>
            </div>
            </div>
<!--fin de modal de enventos-->

<?php
  include_once '../../plantillas/footer.php';
?>

<script>
     var Calendar = FullCalendar.Calendar;
     var calendarEl = document.getElementById('calendar');

    $(function () {
        
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
            dateClick:function(info){
                 $('#modal_eventos').modal();
                  $('#txtFecha').val(info.dateStr);
                  $('#btnAgregar').prop("disabled",false);
                $('#btnModificar').prop("disabled",true);
                $('#btnEliminar').prop("disabled",true);
                //limpiar();
               
            },
             eventClick:function(info){
            $('#modal_eventos').modal();
            $('#btnAgregar').prop("disabled",true);
            $('#btnModificar').prop("disabled",false);
            $('#btnEliminar').prop("disabled",false);

            $('#tituloEvento').html(info.event.title);

            $('#txtId').val(info.event.extendedProps.id_cita);
            $('#txtTitulo').val(info.event.extendedProps.nombre);
            //$('#txtColor').val(info.event.color);
            $('#txtDescripcion').val(info.event.extendedProps.descripcion);
            // FechaHora=calEvent.start._i.split(" ");
            let fechaHora = info.event.start.split("T");
            $('#txtFecha').val(info.event.fechaHora[0]);
            $('#txtHora').val(fechaHora[1]);

              
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
      //  $('#calendar').fullCalendar()
    
    })

     $("#btnAgregar").on('click', function(e){

       e.preventDefault();
       // recolectarDatos();

        $.ajax({
            url : "http://localhost/API-REST-PHP/index.php/Cita/citas",
            method : 'POST',
            data : $("#register-form").serialize(),
            success : function(response){
                 if (response) {
                   
                     $("#modal_eventos").modal('toggle');
                      $('#calendar').fullCalendar('addEventSource');

                   // $('#calendar').html(response);
                    //$('#calendar').html(refetchEvents());


                     // var calendar = new Calendar(calendarEl);
                     // calendar.refetchEvents();
                    // $('#calendar').fullCalendar('addEventSource');

                    //window.location.reload();
                    // $('#calendar').fullCalendar('refetchEvents');
                   
                     
                       // if (!modal) {
                        
                       // }

                       console.log(response);
                    } 
                
            },
            error : function(er){
                console.log(er);
                alert("Hay un error...."); 
            }

        });

    });
   

    
</script>



<script type="text/javascript">
      
   

            $('.clockpicker').clockpicker();
</script>


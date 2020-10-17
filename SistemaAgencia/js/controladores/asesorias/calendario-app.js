 $(document).ready(function() {
      
       
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
            dayClick: function(date, allDay,jsEvent, view) {
                actual =  new Date();
                const fechaComoCadena =date.format('YYYY-MM-DD h:mm');
                const dias = ['domingo','lunes','martes','miercoles','jueves','viernes','sabado',
                ];
               const numeroDia = new Date(fechaComoCadena).getDay();
               const nombreDia = dias[numeroDia];

              var day=2;
              actual.setDate(actual.getDay()+day);

              if(nombreDia=='domingo'){//si es domingo dia que no abre la agencia

              }else{

                if (date <= actual) {
                //texto="no se puede ";
              }else{
                  //texto="si se puede ";
                $('#modal_registro').modal();
                $('#txtFecha').val(date.format());
              }

              }//fin else domingo

              // limpiar();


            },
            events: 'http://localhost/API-REST-PHP/index.php/Cita/cita', //aqui pongo la api que e hecho
            //http://localhost/restful/index.php/Calendario/calendario
            eventClick: function(calEvent, jsEvent, view) {

                $('#tituloEvento').html(calEvent.title);
                $('#txtFecha2').val(calEvent.fecha);
                $('#txtFecha3').val(calEvent.fecha);
                $('#txtId').val(calEvent.id_cita);
                $('#timepicker2').val(calEvent.hora);
                document.getElementById("asistencia2").value = calEvent.compania;

                if (calEvent.compania==0) {
                    $('#asistiran2').prop("disabled",false);
                    $('#btn-asistiran2').prop("disabled",false);
                    //para mostrar en el input de las personas que asitiran
                $(document).ready(function() {

                 $.ajax({
                 type: "GET",
                 url: 'http://localhost/API-REST-PHP/index.php/PersonasCitas/personas/'+calEvent.id_cita,
                 async: false,
                dataType: "json",
                    success: function(data) {

                var $select = $('#inputs');
                $.each(data.personas, function(i, name) {
                    $select.append('<input id="input" name="input[]" class="form-control" value="'+name.nombres_personas+'">');
                      });
                 },
                error: function(data) {
                //alert('error');
                    }
                 });

                });
                //****
                }else{
                   $('#asistiran2').prop("disabled",true);
                   $('#btn-asistiran2').prop("disabled",true); 
                     $('#inputs').empty();
                }
                $('#id_cliente').val(calEvent.id_cita);
                $('#modal_eventos').modal();
                //document.getElementById("update-form").reset();

               


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
   
  
$(document).ready(function() {

        $.ajax({
            type: "GET",
            url: URL_SERVIDOR+"Asesoria/preguntita",
            async: false,
            dataType: "json",
            success: function(data) {
                
                for (let i = 0, ien = data.preguntas.length; i < ien; i++) {
                   // alert('paso');
                   if(data.preguntas[i].opcion=='cerrada'){
                     var $select = $('#'+data.preguntas[i].num_rama);
                    $select.append('<input type="hidden" class="form-control" id="mail">'+
                                     '<select class="form-control" id="combo'+data.preguntas[i].id_pregunta+'" style="margin-top: 20px">'+
                                        '<option>'+data.preguntas[i].pregunta+'</option>'+
                                     '</select>&nbsp&nbsp');
                     var $combo = $('#combo'+data.preguntas[i].id_pregunta);

                     //alert(data.preguntas[i].id_pregunta);
                     for (let j = 0, jen = data.opciones.length; j < jen; j++) {

                        if (data.preguntas[i].id_pregunta==data.opciones[j].id_pregunta) {
                           
                         $combo.append('<option value=' +data.opciones[j].opciones_respuestas+ '>'+data.opciones[j].opciones_respuestas+
                        '</option>'); 

                        }    
                     }
                   

                   }else{
                    var $select = $('#'+data.preguntas[i].num_rama);
                    $select.append('<input type="hidden" class="form-control">'+
                                   '<input type="email" class="form-control" id="mail"'+
                                   'placeholder="'+data.preguntas[i].pregunta+'" style="width: 400px; margin-top: 20px">&nbsp&nbsp');
                   }
                }

            },
            error: function(err) {
                const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text:'No hay preguntas registradas..!',
                showConfirmButton: true,
            });
            }
        });

    });
$(document).ready(function () {

	//CACHANDO LOS VALORES DEL URL
    const valores = window.location.search;
    const urlParams = new URLSearchParams(valores);
    let ID_ENCOMIENDA = urlParams.get('ac');

    inicializarValidaciones();
    mostrarHistorial();



     //BOTON PARA AGREGAR
    $(document).on('click', '#btn-informacion', function (evento) {
        evento.preventDefault(); //para evitar que la pagina se recargue
        let form = $("#informacion-form");  
       form.validate();
         if (form.valid()) {
            add_actualizacion();
        }  
        
    });

    function mostrarHistorial(){
    	//mostrar informacion
         $.ajax({
            type: "GET",
            url: URL_SERVIDOR+"Detalle_envio/detalleEnvio?id_encomienda="+ID_ENCOMIENDA,
            success: function(data) {
            	//alert('estoy aqui');
                if (data.detalles) {
                	//alert('entre');
                for (let i = 0, ien = data.detalles.length; i < ien; i++) {
                   // alert('paso');
                     var $select = $('#historias');
                    $select.append('<div class="row">'+
                                        '<div class="col-sm-12">'+
                                               
                                                '<div class="input-group">'+
                                                '<label class="far fa-marker"></label>'+
                                                 '<label>'+data.detalles[i].descripcion+'</label>&nbsp'+
                                                 '<label>'+data.detalles[i].fecha+'</label>&nbsp'+
                                                 '<label>'+data.detalles[i].hora+'</label>'+
                                                '</div>'+
                                        '</div>'+
                                      '</div>');

                    
                }
            }else{
            	//vamos a poner un mensaje
            }

            },
            error: function(err) {
                const Toast = Swal.mixin();
            Toast.fire({
                title: 'Error',
                icon: 'error',
                text:'No hay preguntas registradas..!',
                showConfirmButton: true,
            });
            }
        });

        ///ESTA PARTE ES PARA EL USUARIO PARA MOSTRARLOS
    }

    function add_actualizacion() {

    	let data = {
         "descripcion":          document.getElementById("titulo_actu").value,
         "id_encomienda":        ID_ENCOMIENDA,
         "fecha":                document.getElementById("fecha_actu").value,
         "hora":                 document.getElementById("hora_actu").value
         }; 

        $.ajax({
            url: URL_SERVIDOR+"Detalle_envio/detalleEnvios",
            method: 'POST',
            data: data

        }).done(function (response) {
        document.getElementById("informacion-form").reset();

            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Exito...',
                icon: 'success',
                text: response.mensaje,
                showConfirmButton: true,
            }).then((result) => {
                //
            });
        }).fail(function (response) {
            //SI HUBO UN ERROR EN LA RESPUETA REST_Controller::HTTP_BAD_REQUEST
            let respuestaDecodificada = JSON.parse(response.responseText);
            let listaErrores = "";

            if (respuestaDecodificada.errores) {
                ///ARREGLO DE ERRORES 
                let erroresEnvioDatos = respuestaDecodificada.errores;
                for (mensaje in erroresEnvioDatos) {
                    listaErrores += erroresEnvioDatos[mensaje] + "\n";
                     //toastr.error(erroresEnvioDatos[mensaje]);
                };
            } else {
                listaErrores = respuestaDecodificada.mensaje
            }
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text: listaErrores,
                showConfirmButton: true,
            });

        });


    }
    
     function inicializarValidaciones() {

        $('#informacion-form').validate({

            rules: {
               
                unidad_medida:{
                    required: true,
                    minlength: 5
                }
            },
            messages: {
                
                unidad_medida:{
                    required:"Digite la unidad de medida",
                    minlength:"El nombre producto debe tener una longitud minima de 7"
                }

            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');

            }
        });

    }

});
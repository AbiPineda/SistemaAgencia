$(document).ready(function () {

    inicializarValidaciones();
    inicializarGaleria();

    //BOTON PARA AGREGAR
    $(document).on('click', '#btnAgregar', function (evento) {
        evento.preventDefault(); //para evitar que la pagina se recargue
        let form = $("#register-form");
        form.validate();
        if (form.valid()) {
            add();
        }
    });


    function inicializarValidaciones() {

        $('#register-form').validate({
            rules: {
                id_cliente: {
                    required: true
                },
                asistencia: {
                    required: true
                },
                pasaporte: {
                    required: true,
                    minlength: 9
                },
                "asistiran[]": {
                    required: true,
                    minlength: 10
                },
                "pasaporte_personas[]": {
                    required: true,
                    minlength: 9
                },
                "fotos[]": {
                    required: true
                }
            },
            messages: {
                id_cliente: {
                    required: "Seleccione el Cliente"
                },
                asistencia: {
                    required: "Seleccione si asistirá solo"

                },
                pasaporte: {
                    required: "Campo vacío",
                    minlength: "Debe de tener una longitud minima de 9"
                },
                "asistiran[]": {
                    required: "Campo vacío",
                    minlength: "Debe de tener una longitud minima de 10"
                },
                "pasaporte_personas[]": {
                    required: "Campo vacío",
                    minlength: "Debe de tener una longitud minima de 9"
                },
                "fotos[]": {
                    required: "Inserte las fotos de los pasaportes"
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

    //***************para la galeria******************
    function inicializarGaleria() {
        // ESTO ES PARA INICIALIZAR EL ELEMENTO DE SUBIDA DE FOTOS (EN ESTE CASO UNA GALERIA )
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
            uploadAsync: false,
            showClose: false,
        });
    }
    //**********************************
    function add() {

        let form = obtenerInfo();
        $.ajax({
            url: URL_SERVIDOR + "Cita/citas",
            method: 'POST',
            mimeType: "multipart/form-data",
            data: form,
            timeout: 0,
            processData: false,
            contentType: false,

        }).done(function (response) {

            $("#modal_registro").modal('toggle');
            $('#calendar').fullCalendar('refetchEvents');
            $("#register-form").trigger("reset");
            $('#comboUsuario').val('').trigger('change');//limpia el combo
            // toastr.success(response.mensaje)//me gusta
            //console.log(response);
            // document.getElementById("register-form").reset();
            // $("#recargar").load("#recargar");//recargar solo un div y no toda la pagina
            //REST_Controller::HTTP_OK
            //let respuestaDecodificada = JSON.parse(response);
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Exito...',
                icon: 'success',
                text: response.mensaje,
                showConfirmButton: true,
            }).then((result) => {
                //TODO BIEN Y RECARGAMOS LA PAGINA 
                //location.reload(); 
            });
        }).fail(function (response) {
            console.log(response);/*
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
            }*/
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Error',
                icon: 'error',
                text:response.mensaje,
                showConfirmButton: true,
            });

        });

    }

    function obtenerInfo() {
        let form = new FormData();

           form.append("fecha", document.getElementById("txtFecha").value);
            form.append("usuario", document.getElementById("usuario").value);
            form.append("id_cliente", document.getElementById("comboUsuario").value);
            form.append("start", document.getElementById("timepicker").value);
            form.append("title", document.getElementById("txtTitulo").value);
            
      
        return form;
    }

});

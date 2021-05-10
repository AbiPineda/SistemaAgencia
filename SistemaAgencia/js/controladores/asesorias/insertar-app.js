$(document).ready(function (){

    inicializarValidaciones();
    inicializarGaleria();
    inicializarFoto();
  
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
                "asistiran[]": {
                    minlength: 10
                }
            },
            messages: {
                id_cliente:{
                    required: "Seleccione el Cliente"
                },
                asistencia:{
                    required: "Seleccione si asistirá solo"
                   
                },
                "asistiran[]": {
                    minlength: "Debe de tener una longitud minima de 10"
                    
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

    function inicializarFoto() {
        // ESTO ES PARA INICIALIZAR EL ELEMENTO DE SUBIDA DE UNA UNICA FOTO
        $('#foto').fileinput({
            theme: 'fas',
            language: 'es',
            required: true,
            maxFileSize: 2000,
            maxFilesNum: 10,
            showUpload: false,
            showClose: false,
            showCaption: true,
            browseLabel: '',
            removeLabel: '',
            //removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
            removeTitle: 'Cancel or reset changes',
            elErrorContainer: '#kv-avatar-errors-1',
            msgErrorClass: 'alert alert-block alert-danger',
            defaultPreviewContent: '<img src="../../img/avatar.png" alt="Your Avatar">',
            layoutTemplates: { main2: '{preview} {remove} {browse}' },
            allowedFileExtensions: ["jpg", "png", "gif"]
        });
    }

    //**********************************
    function add() {

         let form = obtenerInfo();

        $.ajax({
            url: URL_SERVIDOR+"Cita/citas",
            method: 'POST',
            mimeType: "multipart/form-data",
            data: form,
            timeout: 0,
            processData: false,
            contentType: false,

        }).done(function (response) {

          $("#modal_registro").modal('toggle');
          $('#calendar').fullCalendar('refetchEvents');
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
                location.reload(); 
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
                title: 'Error',
                icon: 'error',
                text: listaErrores,
                showConfirmButton: true,
            });

        });

    }

    function obtenerInfo(){
        let form = new FormData();
       
        let nombre_cliente_destino = document.getElementById("fecha").value;
        let telefono = document.getElementById("usuario").value;
        let ciudad_destino = document.getElementById("comboUsuario").value;
        let codigo_postal_destino = document.getElementById("pasaporte").value;
        let direccion_destino = document.getElementById("asistencia").value;
        //para los arreglos
        let asistiran = document.getElementById("asistiran").value;
        for (let i = 0; i < asistiran.length; i++) {
            form.append('asistiran[]', asistiran[i]);
        }
        //
        let pasaporte_personas = document.getElementById("pasaporte_personas").value;
        for (let i = 0; i < pasaporte_personas.length; i++) {
            form.append('pasaporte_personas[]', pasaporte_personas[i]);
        }
        let start = document.getElementById("timepicker").value;
        let title = document.getElementById("txtTitulo").value;
        //ESTO ES PARA LA GALERIA 
        let galeria = document.getElementById("fotos").files;
        for (let i = 0; i < galeria.length; i++) {
            form.append('fotos[]', galeria[i]);
        }
        
        return form;
    }
   
});

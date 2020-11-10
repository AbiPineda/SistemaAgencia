$(document).ready(function (){

    inicializarValidaciones();
  
    //BOTON PARA AGREGAR
    $(document).on('click', '#btn-empresa', function (evento) {
        evento.preventDefault(); //para evitar que la pagina se recargue
        let form = $("#empresa-form");
        form.validate();
        if (form.valid()) {
            add_empresa();
        }
    });

function inicializarValidaciones() {

        $('#empresa-form').validate({

            rules: {
                nombre_empresa: {
                    required:true,
                    minlength: 5
                },
                nombre_encargado: {
                    required: true,
                    minlength: 10
                },
                direccion: {
                    required: true,
                    minlength: 10
                },
                telefono: {
                    required: true,
                    maxlength:9
                },
                forma_operacion: {
                    required: true
                }
            },
            messages: {
                  nombre_empresa: {
                    required:"Digite el nombre de la empresa",
                    minlength: "Logitud del nombre de empresa debe ser mayor a 5"
                },
                nombre_encargado: {
                    required:"Digite el nombre del encargado",
                    minlength: "Logitud del nombre del encargado debe ser mayor a 10"
                },
                direccion: {
                    required:"Digite la dirección",
                    minlength: "Logitud de la dirección debe ser mayor a 10"
                },
                telefono: {
                    required:"Digite el número de telefono",
                    minlength: "Logitud del teléfono debe igual 9"
                },
                forma_operacion: {
                    required:"Seleccione la forma de operación"
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
    function add_empresa() {

        $.ajax({
            url: URL_SERVIDOR+"Empresa/empresa",
            method: 'POST',
            data: $("#empresa-form").serialize()

        }).done(function (response) {
          document.getElementById("empresa-form").reset();

            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Exito...',
                icon: 'success',
                text: response.mensaje,
                showConfirmButton: true,
            }).then((result) => {
                //TODO BIEN Y RECARGAMOS LA PAGINA 
                //location.reload(); NO QUIERO QUE RECARGUE ME ACTUALIZA SOLA
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
   
});
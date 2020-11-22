$(document).ready(function() {

    $("#btnAerolinea").on('click', function(e) {


        e.preventDefault();
        let myData = {
            "idalianza": document.getElementById("id_alianza").value,
            "nombre_aerolinea": document.getElementById("nombreAerolinea").value,
            "sitioWeb": document.getElementById("sitioW").value,
            "telefonoContacto": document.getElementById("tel").value
        }

        $.ajax({
            url: URL_SERVIDOR + "aerolinea/aerolinea",
            method: 'POST',
            data: myData

        }).done(function(response) {

            $("#modal-aerolinea").modal('toggle');

            document.getElementById("register-aerolinea").reset();

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
        }).fail(function(response) {
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

        })


    });
});
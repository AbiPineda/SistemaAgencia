$(document).ready(function() {

    $("#btnAgregar").on('click', function(e) {


        e.preventDefault();
        let myData = {
            "nombre_servicio": document.getElementById("nombre_servicio").value,
            "precio": document.getElementById("precio").value,
            "descripcion": document.getElementById("descripcion").value
        }

        $.ajax({
            url: URL_SERVIDOR + "serviciosVehiculo/servicios",
            method: 'POST',
            data: myData

        }).done(function(response) {

            $("#modal-servicio").modal('toggle');

            //document.getElementById("form-modelo").reset();

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
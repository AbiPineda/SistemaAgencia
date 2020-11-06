$(document).ready(function() {

    $("#btnGuardar").on('click', function(e) {

        var mantenimientos = document.getElementById("mantenimiento_realizado");
        var grupos = [];

        for (var i = 0; i < mantenimientos.options.length; i++) {
            if (mantenimientos.options[i].selected == true) {
                grupos.push(mantenimientos.options[i].value);

            }
        }

        e.preventDefault();
        let myData = {

            "id_vehiculoFK": document.getElementById("id_placa").value,
            "fecha": document.getElementById("fecha").value,
            "lugar": document.getElementById("lugar").value,
            "mantenimiento_realizado": document.getElementById("mantenimiento_realizado").value,
            "piezas_cambiadas": document.getElementById("piezas_cambiadas").value,
            "comentariosIncidentes": document.getElementById("comentarios").value,
            "costoMantenimiento": document.getElementById("precio").value
        }



        $.ajax({
            url: URL_SERVIDOR + "mantenimientoVehiculo/mantenimiento",
            method: 'POST',
            data: myData

        }).done(function(response) {

            document.getElementById("register-mantenimiento").reset();

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
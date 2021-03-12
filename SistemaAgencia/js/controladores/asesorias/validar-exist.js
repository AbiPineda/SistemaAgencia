//vamos a verificar si el usuario ya tomo una cita
//si ya realizo el proceso de asesoria estara registrada toda su informacion migratoria
//entonces solo se necesita modificar los datos o add si hay nuevas preguntas
$(function () {
        $("#cliente").change(function () {
           var id = document.getElementById("cliente").value;
          
           /*let data = {
        "transmision": document.getElementById("transmision").value

            };*/
   
    $.ajax({
        url: URL_SERVIDOR + "Cita/verificarExist?id_cliente="+id,
        method: 'GET'

    }).done(function(response) {

        alert(response.mensaje);

      //  document.getElementById("register-form").reset();

        /*const Toast = Swal.mixin();
        Toast.fire({
            title: 'Exito...',
            icon: 'success',
            text: response.mensaje,
            showConfirmButton: true,
        }).then((result) => {
            //TODO BIEN Y RECARGAMOS LA PAGINA 
            location.reload();
        });*/
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

         });


             });
        });

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

        alert(response.existe.id_cita);

       if (response.mensaje=='Existe') {
        const Toast = Swal.mixin();
        Swal.fire({
            title: '¡EL cliente ya ha realizado proceso migratorio!',
            text: "¿Desea modificar la información?",
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText: "Cancelar",
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí!'
        }).then((result) => {
            console.log(result);
            if (result.value) {
                eliminar();
            }
        })
       }
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

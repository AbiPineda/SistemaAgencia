 $("#btnAgregar").on('click', function(e) {

        e.preventDefault();
        // recolectarDatos();

        $.ajax({
            url: "http://localhost/API-REST-PHP/index.php/Cita/citas",
            method: 'POST',
            data: $("#register-form").serialize(),
            success: function(response) {
                if (response) {

                    $("#modal_registro").modal('toggle');
                    $('#calendar').fullCalendar('refetchEvents');

                   toastr.success(response.mensaje)//me gusta
                    //console.log(response);
                    document.getElementById("register-form").reset();
                  $("#recargar").load(" #recargar");//recargar solo un div y no toda la pagina
                }

            },
            error: function(error) {
              toastr.error(error.mensaje);
                //console.log(error);
                alert(response);
            }*/

        });

    });
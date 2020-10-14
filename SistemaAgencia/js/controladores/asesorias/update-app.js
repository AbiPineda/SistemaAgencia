 $("#btnActualizar").on('click', function(e) {

        e.preventDefault();
        // recolectarDatos();

        $.ajax({
            url: "http://localhost/API-REST-PHP/index.php/Cita/citas",
            method: 'POST',
            data: $("#update-form").serialize(),
            success: function(response) {
                if (response) {

                    $("#modal_registro").modal('toggle');
                    $('#calendar').fullCalendar('refetchEvents');

                   /* const Toast = Swal.mixin({
                         toast: true,
                        position: 'top-end',
                         showConfirmButton: false,
                         timer: 3000

                      });
                    Toast.fire({
                    title: response.mensaje,
                    icon: 'success',
                    
                    });*/

                   toastr.success(response.mensaje)//me gusta
                    //console.log(response);
                    document.getElementById("register-form").reset();
                  $("#recargar").load(" #recargar");//recargar solo un div y no toda la pagina
                }

            },
            error: function(err) {
              toastr.error('Hay error en el envio de la información');
                //console.log(er);
                //alert("Hay un error....");
            }

        });

    });
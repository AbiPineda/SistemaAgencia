 $("#btnAgregar").on('click', function(e) {

        e.preventDefault();
        // recolectarDatos();

        $.ajax({
            url: "http://localhost/API-REST-PHP/index.php/Cita/citas",
            method: 'POST',
            data: $("#register-form").serialize(),
            success: function(response) {
                if (response) {

                    $("#modal_eventos").modal('toggle');
                    $('#calendar').fullCalendar('refetchEvents');


                    console.log(response);
                }

            },
            error: function(er) {
                console.log(er);
                alert("Hay un error....");
            }

        });

    });
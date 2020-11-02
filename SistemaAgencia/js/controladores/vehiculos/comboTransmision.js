$(document).ready(function() {

    $.ajax({
        type: "GET",
        url: URL_SERVIDOR + "transmisionVehiculo/transmision",
        async: false,
        dataType: "json",
        success: function(data) {

            let $select = $('#id_transmision');
            $.each(data.transmision, function(i, name) {
                $select.append('<option value=' + name.idtransmicion + '>' + name.transmision +
                    '</option>');
            });
        },
        error: function(err) {
            //si da un error ya que quede la alerta
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text: 'No hay Transmisión para mostrar',
                showConfirmButton: true,
            });
        }
    });

});
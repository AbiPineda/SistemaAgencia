$(document).ready(function() {

    $.ajax({
        type: "GET",
        url: URL_SERVIDOR + "serviciosVehiculo/servicios",
        async: false,
        dataType: "json",
        success: function(data) {

            let $select = $('#id_servicios');
            $.each(data.Servicios, function(i, name) {
                $select.append('<option value=' + name.idservicios_opc + '>' + name.nombre_servicio +
                    '</option>');
            });
        },
        error: function(err) {
            //si da un error ya que quede la alerta
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text: 'No hay Servicios Opcionales para mostrar',
                showConfirmButton: true,
            });
        }
    });

});
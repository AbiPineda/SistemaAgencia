$(document).ready(function() {

    $.ajax({
        type: "GET",
        url: URL_SERVIDOR + "tipo_viaje/viajes",
        async: false,
        dataType: "json",
        success: function(data) {

            let $select = $('#idtipo_viaje');
            $.each(data.viaje, function(i, name) {
                $select.append('<option value=' + name.idtipo_viaje + '>' + name.nombre_tipoviaje +
                    '</option>');
            });
        },
        error: function(err) {
            //si da un error ya que quede la alerta
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text: 'No hay Tipos de Viaje para mostrar',
                showConfirmButton: true,
            });
        }
    });

});
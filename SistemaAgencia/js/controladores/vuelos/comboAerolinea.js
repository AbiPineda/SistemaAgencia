$(document).ready(function() {

    $.ajax({
        type: "GET",
        url: URL_SERVIDOR + "aerolinea/aerolinea",
        async: false,
        dataType: "json",
        success: function(data) {

            let $select = $('#idaerolinea');
            $.each(data.aerolineas, function(i, name) {
                $select.append('<option value=' + name.idaerolinea + '>' + name.nombre_aerolinea +
                    '</option>');
            });
        },
        error: function(err) {
            //si da un error ya que quede la alerta
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text: 'No hay Aerolineas para mostrar',
                showConfirmButton: true,
            });
        }
    });

});
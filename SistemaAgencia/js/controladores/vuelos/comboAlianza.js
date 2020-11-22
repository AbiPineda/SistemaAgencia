$(document).ready(function() {

    $.ajax({
        type: "GET",
        url: URL_SERVIDOR + "alianzas/alianzas",
        async: false,
        dataType: "json",
        success: function(data) {

            let $select = $('#id_alianza');
            $.each(data.alianzas, function(i, name) {
                $select.append('<option value=' + name.idalianza + '>' + name.nombre_alianza +
                    '</option>');
            });
        },
        error: function(err) {
            //si da un error ya que quede la alerta
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text: 'No hay Alianzas para mostrar',
                showConfirmButton: true,
            });
        }
    });

});
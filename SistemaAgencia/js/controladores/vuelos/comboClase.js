$(document).ready(function() {

    $.ajax({
        type: "GET",
        url: URL_SERVIDOR + "tipo_clases/clases",
        async: false,
        dataType: "json",
        success: function(data) {

            let $select = $('#idclase');
            $.each(data.clase, function(i, name) {
                $select.append('<option value=' + name.idclase + '>' + name.nombre_clase +
                    '</option>');
            });
        },
        error: function(err) {
            //si da un error ya que quede la alerta
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text: 'No hay Tipos de Clase para mostrar',
                showConfirmButton: true,
            });
        }
    });

});
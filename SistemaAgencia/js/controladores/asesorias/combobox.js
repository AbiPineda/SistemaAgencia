$(document).ready(function() {

        $.ajax({
            type: "GET",
            url: URL_SERVIDOR+"Usuario/obtenerUsuario",
            async: false,
            dataType: "json",
            success: function(data) {

                var $select = $('#cliente');
                $.each(data.usuario, function(i, name) {
                    $select.append('<option value=' + name.id_cliente + '>' + name.nombre +
                        '</option>');
                });
            },
            error: function(err) {
               const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text:'No hay Ramas para mostrar',
                showConfirmButton: true,
            });
            }
        });

    });
$(document).ready(function() {

        $.ajax({
            type: "GET",
            url: 'http://localhost/API-REST-PHP/Usuario/obtenerUsuario',
            async: false,
            dataType: "json",
            success: function(data) {

                var $select = $('#cliente');
                $.each(data.usuario, function(i, name) {
                    $select.append('<option value=' + name.id_cliente + '>' + name.nombre +
                        '</option>');
                });
            },
            error: function(data) {
                alert('error');
            }
        });

    });
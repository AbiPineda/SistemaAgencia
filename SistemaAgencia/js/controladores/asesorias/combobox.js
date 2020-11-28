$(document).ready(function() {

        $.ajax({
            type: "GET",
            url: URL_SERVIDOR+"Usuario/obtenerUsuario?nivel=CLIENTE",
          
            dataType: "json",
            success: function(data) {
        
                var $select = $('#cliente');
                $.each(data.usuario, function(i, name) {
                    $select.append('<option value=' + name.id_cliente + '>' + name.nombre +
                        '</option>');
                });
            
            },
            error: function(err) {
            var $select = $('#cliente');
            $select.append('<option value="">Seleccione</option>');
            }
        });

    });
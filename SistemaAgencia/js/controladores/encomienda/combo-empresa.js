$(document).ready(function() {

        $.ajax({
            type: "GET",
            url: URL_SERVIDOR+"Empresa/empresas",
            async: false,
            dataType: "json",
            success: function(data) {

                var $select = $('#empresa');
                $.each(data.empresa, function(i, name) {
                    $select.append('<option value=' + name.forma_operacion+ '>' + name.nombre_empresa+
                        '</option>');
                });
            },
            error: function(err) {
                var $select = $('#empresa');
              /* const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text:'No hay Ramas para mostrar',
                showConfirmButton: true,
            });*/
            }
        });

        //********para el combo de los departamentos
        

    });
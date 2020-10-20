$(document).ready(function() {

        $.ajax({
            type: "GET",
            url: URL_SERVIDOR+"Asesoria/ramita",
            async: false,
            dataType: "json",
            success: function(data) {

                var $select = $('#combo_rama');
                $.each(data.ramas, function(i, name) {
                    $select.append('<option value=' + name.id_rama + '>' + name.categoria_rama+
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
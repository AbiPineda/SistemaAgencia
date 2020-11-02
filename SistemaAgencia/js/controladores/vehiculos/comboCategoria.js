$(document).ready(function() {

    $.ajax({
        type: "GET",
        url: URL_SERVIDOR + "categoriasAutos/categorias",
        async: false,
        dataType: "json",
        success: function(data) {

            let $select = $('#id_categoria');
            $.each(data.categorias, function(i, name) {
                $select.append('<option value=' + name.idcategoria + '>' + name.nombre +
                    '</option>');
            });
        },
        error: function(err) {
            //si da un error ya que quede la alerta
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text: 'No hay Categorias para mostrar',
                showConfirmButton: true,
            });
        }
    });

});
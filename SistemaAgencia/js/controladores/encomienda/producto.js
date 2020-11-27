$(document).ready(function() {
    //*******************para los productos**************-
    $.ajax({
            type: "GET",
            url: URL_SERVIDOR+"Producto/productos",
            async: false,
            dataType: "json",
            success: function(data) {

                var $select = $('#id_producto');
                $.each(data.product, function(i,index) {
                    $select.append('<option value=' +index.id_producto+ '>' +index.nombre_producto+
                        '</option>');
                });
            },
            error: function(err) {
                var $select = $('#id_producto');
              /* const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text:'No hay Ramas para mostrar',
                showConfirmButton: true,
            });*/
            }
        });
    //**************************vamos a cargar el costo
        $(function () {
        $("#id_producto").change(function () {
           var indicador = document.getElementById("id_producto").value;
           alert(indicador);
           $.ajax({
            type: "GET",
            url: URL_SERVIDOR+"Tarifa/tarifas?id_producto="+indicador,
            async: false,
            dataType: "json",
            success: function(data) {

                $.each(data.tarifas, function(i,index) {
                    $('#costo').val(index.tarifa);

                });
            },
            error: function(err) {
              /* const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text:'No hay Ramas para mostrar',
                showConfirmButton: true,
            });*/
            }
             });


             });
        });

    });
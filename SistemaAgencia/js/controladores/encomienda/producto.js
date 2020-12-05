$(document).ready(function() {
    //*******************para los productos**************-
    $.ajax({
            type: "GET",
            url: URL_SERVIDOR+"Producto/productos",
            dataType: "json",
            success: function(data) {

                var $select = $('#id_producto');
                 $select.append('<option value="">Seleccione</option>');
                $.each(data.product, function(i,index) {
                    $select.append('<option value=' +index.id_producto+ '>' +index.nombre_producto+
                        '</option>');
                });
            },
            error: function(err) {
                $select.append('<option value="">Seleccione</option>');
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
           //alert(indicador);
           $.ajax({
            type: "GET",
            url: URL_SERVIDOR+"Tarifa/tarifas?id_producto="+indicador,
            dataType: "json",
            success: function(data) {

                let select=$('#mostrar');
                select.empty();
                $.each(data.tarifas, function(i,index) {
                    $('#costo').val(index.tarifa);

                    if (index.unidades_medidas=='lbs') {
                    select.append('<label for="cars">Ingrese la Cantidad(Lbs)</label>'+
                    '<input name="cantidad" id="cantidad" type="text" class="form-control" placeholder="Lbs">');
                    }
                    if (index.unidades_medidas=='unidad') {
                    select.append('<label for="cars">Ingrese la Cantidad(Unidades)</label>'+
                    '<input name="cantidad" id="cantidad" type="text" class="form-control" placeholder="Unidades">');
                    
                    }
                    

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
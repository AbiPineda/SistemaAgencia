$(document).ready(function() {

    $.ajax({
        type: "GET",
        url: URL_SERVIDOR + "vehiculo/vehiculos",
        async: false,
        dataType: "json",
        success: function(data) {

            let $select = $('#id_placa');
            $.each(data.autos, function(i, name) {
                $select.append('<option value=' + name.idvehiculo + '>' + "Modelo: " + name.modelo + '>' + " Placa: " + name.placa + '>' + " Año: " + name.anio +
                    '</option>');
            });
        },
        error: function(err) {
            //si da un error ya que quede la alerta
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text: 'No hay Vehiculos para mostrar',
                showConfirmButton: true,
            });
        }
    });

});
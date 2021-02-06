let DATA_TRANSMISION;

$(document).ready(function() {

    $.ajax({
        type: "GET",
        url: URL_SERVIDOR + "transmisionVehiculo/transmision",
        async: false,
        dataType: "json",
        success: function(data) {

            let myData = [];
            DATA_TRANSMISION = data.transmision;
            for (let index = 0; index < DATA_TRANSMISION.length; index++) {
                myData.push({
                    id: DATA_TRANSMISION[index].idtransmicion,
                    text: DATA_TRANSMISION[index].transmision
                });
            }
            ///LE CARGAMOS LA DATA 
            $('#id_transmision').select2({ data: myData });

            //let $select = $('#id_transmision');
            //$.each(data.transmision, function(i, name) {
              //  $select.append('<option value=' + name.idtransmicion + '>' + name.transmision +
                //    '</option>');
            //});
        },
        error: function(err) {
            //si da un error ya que quede la alerta
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text: 'No hay Transmisión para mostrar',
                showConfirmButton: true,
            });
        }
    });

});
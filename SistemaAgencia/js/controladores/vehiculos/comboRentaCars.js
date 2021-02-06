let DATA_RENTAC;

$(document).ready(function() {

    $.ajax({
        type: "GET",
        url: URL_SERVIDOR + "rentacars/rentaAuto",
        async: false,
        dataType: "json",
        success: function(data) {

            let myData = [];
            DATA_RENTAC = data.agencia;
            for (let index = 0; index < DATA_RENTAC.length; index++) {
                myData.push({
                    id: DATA_RENTAC[index].id_rentaCar ,
                    text: DATA_RENTAC[index].rentaCar
                });
            }
            $('#id_renta').select2({ data: myData });

            //let $select = $('#id_renta');
            //$.each(data.agencia, function(i, name) {
              //  $select.append('<option value=' + name.id_rentaCar + '>' + name.rentaCar +
                //    '</option>');
            //});
        },
        error: function(err) {
            //si da un error ya que quede la alerta
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text: 'No hay Renta Cars para mostrar',
                showConfirmButton: true,
            });
        }
    });

});
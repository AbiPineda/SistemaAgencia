$(document).ready(function() {

    $.ajax({
        type: "GET",
        url: 'http://localhost/API-REST-PHP/index.php/marcaVehiculo/marca',
        async: false,
        dataType: "json",
        success: function(data) {

            var $select = $('#marca');
            $.each(data.marcas, function(i, name) {
                $select.append('<option value=' + name.id_marca + '>' + name.marca +
                    '</option>');
            });
        },
        error: function(data) {
            alert('error');
        }
    });

});
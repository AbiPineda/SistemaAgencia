$(document).ready(function() {
    let explorer = $("#kv-explorer");
    let idVehiculo;

    inicializarComboTuristico();

    function inicializarComboTuristico() {


        $.ajax({
            url: URL_SERVIDOR + "vehiculo/vehiculos",
            method: "GET"
        }).done(function(response) {

            console.log(response);
            let contenedor = $('#contenedorAutos');
            if (response.autos) {
                let lista = response.autos;
                for (let index = 0; index < lista.length; index++) {
                    console.log(lista[index]);
                    let html = "";
                    html += '<div class="col-xs-6 col-sm-3">';
                    html += '    <div class="fall-item fall-effect">';
                    html += '        <img src="' + lista[index].foto + '" />';
                    html += '        <div class="mask">';
                    html += '            <h2 id="nombre_auto" name="nombre_auto">nombre auto</h2>';
                    html += '            <p>precio diario</p>';
                    html += '            <a href="#" class="btn btn-default">Reservar</a>';
                    html += '        </div>';
                    html += '    </div>';
                    html += '    <h4 class="text-center"></h4>';
                    html += '</div>';

                    contenedor.append(html);
                }
            }
        }).fail(function(response) {
            console.log(response);

        });
    }



});
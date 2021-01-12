$(document).ready(function() {
    let explorer = $("#kv-explorer");
    let idVehiculo;

    inicializarFlota();

    //BOTON DE MOSTRAR CARACTERISTICAS
    $(document).on('click', '.btn-primary', function() {

        idVehiculo = $(this).attr("name");

        $('#loadingActualizar').show();
        $.ajax({
            url: "http://localhost/API-REST-PHP/vehiculo/Flota?idvehiculo=" + idVehiculo,
            method: "GET"
        }).done(function(response) {
            //MANDALOS LOS VALORES AL MODAL
            for (let i = 0, ien = response.autos.length; i < ien; i++) {
                $('#mode1').text(response.autos[i].modelo);
                $('#precio').text(response.autos[i].precio_diario);
                $('#categoria').text(response.autos[i].nombre);
                $('#detalles').text(response.autos[i].detalles);
                $('#descripcion').text(response.autos[i].descripcion);
                $('#puerta').text(response.autos[i].puertas);
                $('#pasajero').text(response.autos[i].pasajeros);
                $('#kilometraje').text(response.autos[i].kilometraje);
                $('#combustible').text(response.autos[i].tipoCombustible);
                $('#transmision').text(response.autos[i].transmision);
                $('#placa').text(response.autos[i].placa);
            }

        }).fail(function(response) {

        }).always(function(xhr, opts) {
            $('#modal-editar').modal('show');
            $('#loadingActualizar').hide();
        });
    });


    function inicializarFlota() {


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
                    html += '        <img style="width:500px; height:250px;" src="' + lista[index].foto + '" />';
                    html += '        <div class="mask">';
                    html += '            <h2 id="">' + lista[index].modelo + '</h2>';
                    html += '            <br>';
                    html += '            <div> Categoria: ' + lista[index].nombre + '</div>';
                    html += '            <div> Año: ' + lista[index].anio + '</div>';
                    html += '            <p> Precio Diario: $' + lista[index].precio_diario + '</p>';
                    html += '           <button type="button" name="' + lista[index].idvehiculo + '" class="btn btn-primary" data-toggle="modal"';
                    html += '            data-target="#modal-editar">Detalles</button>';
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
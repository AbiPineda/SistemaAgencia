$(document).ready(function() {

    //CACHANDO LOS VALORES DEL URL
    const valores = window.location.search;
    const urlParams = new URLSearchParams(valores);
    let ID_CLIENTE = urlParams.get('ac');
    let tabla;
    let contadorTabla = 0;

    mostrarDatos();
    inicializarTablaTours();
    inicializarTabla();
    inicializarTablaEncomiendas();
    inicializarTablaVehiculos();
    inicializarTablaVuelos();

    function mostrarDatos() {

        $.ajax({
            url: URL_SERVIDOR + 'usuario/datosUsuario?id_cliente=' + ID_CLIENTE,
            method: "GET"
        }).done(function(response) {
            $.each(response.servicios, function(i, index) {

                $('#nombre_cliente').text(index.nombre);
                $('#telefono').text(index.celular);
            });
        }).fail(function(response) {
            console.log(response);

        });

    }

    function inicializarTabla() {
        tabla = $("#add-tabla").DataTable({
            "responsive": true,
            "autoWidth": false,
            "deferRender": true,
            "columnDefs": [
                { "className": "dt-center", "targets": "_all" },

            ],
            "ajax": {
                "url": URL_SERVIDOR + "usuario/cotizacionesRealizadas?id_cliente=" + ID_CLIENTE,
                "method": "GET",
                "dataSrc": function(json) {
                    if (json.servicios) {
                        for (let i = 0, ien = json.servicios.length; i < ien; i++) {
                            //CREAMOS UNA NUEVA PROPIEDAD LLAMADA BOTONES
                            html = "";
                            html += '<td>';
                            html += '    <div class="btn-group">';
                            html += '        <button type="button" name="' + json.servicios[i].id_cliente + '" class="btn btn-danger" data-toggle="modal"';
                            html += '            data-target="#modal-mostrar">';
                            html += '            <i class="fas fa-trash" style="color: white"></i>';
                            html += '        </button>';
                            html += '    </div>';
                            html += '</td>';
                            json.servicios[i]["botones"] = html;
                        }
                        $('#loading').hide();
                        return json.servicios;
                    } else {
                        $('#loading').hide();
                        return [];
                    }
                }
            },
            columns: [
                { data: "modelo" },
                { data: "anio" },
                { data: "fechaRecogida" },
                { data: "caracteristicas" },
                { data: "descuentosCotizacion" },
                { data: "totalCotizacion" },

            ]
        });

    }

    function inicializarTablaEncomiendas() {
        tabla = $("#add-encomiendas").DataTable({
            "responsive": true,
            "autoWidth": false,
            "deferRender": true,
            "columnDefs": [
                { "className": "dt-center", "targets": "_all" },

            ],
            "ajax": {
                "url": URL_SERVIDOR + "usuario/encomiendasRealizadas?id_cliente=" + ID_CLIENTE,
                "method": "GET",
                "dataSrc": function(json) {
                    if (json.servicios) {
                        for (let i = 0, ien = json.servicios.length; i < ien; i++) {
                            //CREAMOS UNA NUEVA PROPIEDAD LLAMADA BOTONES
                            html = "";
                            html += '<td>';
                            html += '    <div class="btn-group">';
                            html += '        <button type="button" name="' + json.servicios[i].id_cliente + '" class="btn btn-danger" data-toggle="modal"';
                            html += '            data-target="#modal-mostrar">';
                            html += '            <i class="fas fa-trash" style="color: white"></i>';
                            html += '        </button>';
                            html += '    </div>';
                            html += '</td>';
                            json.servicios[i]["botones"] = html;
                        }
                        $('#loading').hide();
                        return json.servicios;
                    } else {
                        $('#loading').hide();
                        return [];
                    }
                }
            },
            columns: [
                { data: "nombre_producto" },
                { data: "ciudad_origen" },
                { data: "direccion_destino" },
                { data: "fecha" },
                { data: "cantidad" },
                { data: "sub_total" },

            ]
        });

    }

    function inicializarTablaVehiculos() {
        tabla = $("#add-vehiculos").DataTable({
            "responsive": true,
            "autoWidth": false,
            "deferRender": true,
            "columnDefs": [
                { "className": "dt-center", "targets": "_all" },

            ],
            "ajax": {
                "url": URL_SERVIDOR + "usuario/vehiculosAlquilados?id_cliente=" + ID_CLIENTE,
                "method": "GET",
                "dataSrc": function(json) {
                    if (json.servicios) {
                        for (let i = 0, ien = json.servicios.length; i < ien; i++) {
                            //CREAMOS UNA NUEVA PROPIEDAD LLAMADA BOTONES
                            html = "";
                            html += '<td>';
                            html += '    <div class="btn-group">';
                            html += '        <button type="button" name="' + json.servicios[i].id_cliente + '" class="btn btn-danger" data-toggle="modal"';
                            html += '            data-target="#modal-mostrar">';
                            html += '            <i class="fas fa-trash" style="color: white"></i>';
                            html += '        </button>';
                            html += '    </div>';
                            html += '</td>';
                            json.servicios[i]["botones"] = html;
                        }
                        $('#loading').hide();
                        return json.servicios;
                    } else {
                        $('#loading').hide();
                        return [];
                    }
                }
            },
            columns: [
                { data: "id_detalle" },
                { data: "modelo" },
                { data: "anio" },
                { data: "placa" },
                { data: "fechaHora_detalle" },
                { data: "total_detalle" },

            ]
        });

    }

    function inicializarTablaTours() {
        tabla = $("#add-tours").DataTable({
            "responsive": true,
            "autoWidth": false,
            "deferRender": true,
            "columnDefs": [
                { "className": "dt-center", "targets": "_all" },

            ],
            "ajax": {
                "url": URL_SERVIDOR + "usuario/toursAdquiridos?id_cliente=" + ID_CLIENTE,
                "method": "GET",
                "dataSrc": function(json) {
                    if (json.servicios) {
                        for (let i = 0, ien = json.servicios.length; i < ien; i++) {
                            //CREAMOS UNA NUEVA PROPIEDAD LLAMADA BOTONES
                            html = "";
                            html += '<td>';
                            html += '    <div class="btn-group">';
                            html += '        <button type="button" name="' + json.servicios[i].id_cliente + '" class="btn btn-danger" data-toggle="modal"';
                            html += '            data-target="#modal-mostrar">';
                            html += '            <i class="fas fa-trash" style="color: white"></i>';
                            html += '        </button>';
                            html += '    </div>';
                            html += '</td>';
                            json.servicios[i]["botones"] = html;
                        }
                        $('#loading').hide();
                        return json.servicios;
                    } else {
                        $('#loading').hide();
                        return [];
                    }
                }
            },
            columns: [
                { data: "id_detalle" },
                { data: "nombreTours" },
                { data: "start" },
                { data: "end" },
                { data: "tipo" },
                { data: "precio" },

            ]
        });

    }

    function inicializarTablaVuelos() {
        tabla = $("#add-vuelos").DataTable({
            "responsive": true,
            "autoWidth": false,
            "deferRender": true,
            "columnDefs": [
                { "className": "dt-center", "targets": "_all" },

            ],
            "ajax": {
                "url": URL_SERVIDOR + "usuario/vuelosCotizaciones?id_cliente=" + ID_CLIENTE,
                "method": "GET",
                "dataSrc": function(json) {
                    if (json.servicios) {
                        for (let i = 0, ien = json.servicios.length; i < ien; i++) {
                            //CREAMOS UNA NUEVA PROPIEDAD LLAMADA BOTONES
                            html = "";
                            html += '<td>';
                            html += '    <div class="btn-group">';
                            html += '        <button type="button" name="' + json.servicios[i].id_cliente + '" class="btn btn-danger" data-toggle="modal"';
                            html += '            data-target="#modal-mostrar">';
                            html += '            <i class="fas fa-trash" style="color: white"></i>';
                            html += '        </button>';
                            html += '    </div>';
                            html += '</td>';
                            json.servicios[i]["botones"] = html;
                        }
                        $('#loading').hide();
                        return json.servicios;
                    } else {
                        $('#loading').hide();
                        return [];
                    }
                }
            },
            columns: [
                { data: "ciudad_partida" },
                { data: "fechaPartida" },
                { data: "ciudad_llegada" },
                { data: "fechaLlegada" },
                { data: "nombre_aerolinea" },
                { data: "total" },

            ]
        });

    }
});
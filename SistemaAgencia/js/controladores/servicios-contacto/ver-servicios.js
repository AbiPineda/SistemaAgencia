$(document).ready(function () {
    inicializarTabla();

    function inicializarTabla() {
        $("#tabla_servicios").DataTable({
            "responsive": true,
            "autoWidth": false,
            "deferRender": true,
            "ajax": {
                "method": "GET",
                "url": "http://localhost/API-REST-PHP/ServiciosAdicionales/obtenerServicio",
                "dataSrc": function (json) {
                    //ESTO ES PARA PERSONALIZAR LE BOTON
              
                    if (json.servicio) {
                        for (var i = 0, ien = json.servicio.length; i < ien; i++) {
                            //CREAMOS UNA NUEVA PROPIEDAD LLAMADA BOTONES
                            json.servicio[i]["botones"] = '<a href="#">View message</a>';
                        }
                        return json.servicio;
                    }else {
                        return [];
                    }
                }
            },
            columns: [
                { data: "botones" },
                { data: "tipo_servicio" },
                { data: "descripcion_servicio" },
                { data: "nombre" },
            ]
        });
        $('#loading').hide();
    }
});
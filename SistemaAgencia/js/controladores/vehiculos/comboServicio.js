//$(document).ready(function() {
let DATA_SERVICIO;
let precioAuto;

$.ajax({
    type: "GET",
    url: URL_SERVIDOR + "serviciosVehiculo/servicios",
    data: { id: 1 },
    dataType: "json",
    success: function(data) {
        let myData = [];
        precioAuto = data.vehiculo.precio_diario;
        $('#totalVehiculo').text('$' + precioAuto);
        $('#totalCliente').text("$" + precioAuto);
        DATA_SERVICIO = data.Servicios;
        $('#costo').val(DATA_SERVICIO[0].precio);
        for (let index = 0; index < DATA_SERVICIO.length; index++) {
            myData.push({
                id: DATA_SERVICIO[index].idservicios_opc,
                text: DATA_SERVICIO[index].nombre_servicio
            });
        }

        ///LE CARGAMOS LA DATA 
        $('#comboServicio').select2({ data: myData });
    },
    error: function(err) {
        //si da un error ya que quede la alerta
        $('#comboServicio').select2({});
        const Toast = Swal.mixin();
        Toast.fire({
            title: 'Oops...',
            icon: 'error',
            text: 'No hay Servicios Opcionales para mostrar',
            showConfirmButton: true,
        });
    }
});


$('#comboServicio').on('select2:select', function(e) {
    let id = e.params.data.id;
    let seleccion = DATA_SERVICIO.find(servicio => servicio.idservicios_opc === id);
    ///ENCONTRO EL SERVICIO
    if (seleccion) {
        $('#costo').val(seleccion.precio);
    }
});

//});
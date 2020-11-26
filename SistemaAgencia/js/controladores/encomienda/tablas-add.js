$(document).ready(function () {

    let DATA_TUR;
    let DATA_SERVICIO;
    let contadorTabla = 0;
    let totalGastos = 0;
    let totalIngresos = 0;
    let ganancias = 0;
    let cantidad = document.getElementById("cantidad");
    let tabla = $('#add-tabla').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "pageLength": 3,
        "responsive": true,
        "columnDefs": [
            { "className": "dt-center", "targets": "_all" },
            { "targets": [6], "visible": false },
            { "targets": [7], "visible": false },
            { "targets": [8], "visible": false },
        ]
    });

});
$(document).ready(function () {
    inicializarValidaciones();
    inicializarCalendario();
    let contadorTabla = 0;
    let TOTAL = 0.0;
    let COMISION = 0.0;
    let TOTALCLIENTE = 0.0;
    let contadorServicio = 0;
    let TOTAL_DIAS = 1;
 


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
            // { "targets": [5], "visible": false },
            // { "targets": [6], "visible": false },
        ],
        columns: [
            { data: "servicio" },
            { data: "costo" },
            { data: "cantidad" },
            { data: "sub_total" },
            { data: "botones" },
            { data: "id_servicio" },
            { data: "contador" },
        ]

    });

    $(document).on('click', '#agregarTabla', function (evento) {


        evento.preventDefault();

        //verifiacando que existe un precio
        let costo = $('#costo').val();


        //alert(cantidad);
        if (!costo) {
            // errors = { cantidad: "Digite la cantidad" };
            // $("#encomienda-form").validate().showErrors(errors);
        } else {

            let id = document.getElementById("comboServicio").value;
            let costo = document.getElementById("costo").value;
            let cantidad = $('#cantidad').val();
            let nombre = $('#comboServicio').select2('data')[0].text;

            agregarFila(nombre, costo, cantidad, id);


        }
    });


    function agregarFila(nombre, costo, cantidad, id) {

        if (!ExisteFila(id, cantidad, costo)) {

            let subTotal = (costo * cantidad).toFixed(2);
            let html = "";
            html += '<td>';
            html += '    <div class="btn-group">';
            html += '        <button type="button" name="" class="btn btn-danger" data-toggle="modal"';
            html += '            data-target="#modal-eliminar">';
            html += '            <i class="fas fa-trash" style="color: white"></i>';
            html += '        </button>';
            html += '    </div>';
            html += '</td>';
            tabla.row.add({
                "servicio": nombre,
                "costo": costo,
                "cantidad": cantidad,
                "sub_total": subTotal,
                "botones": html,
                "id_servicio": id,
                "contador": contadorServicio,

            }).draw(false);
            //PARA ORDENAR LA TABLA
            // tabla.order([6, 'desc']).draw();
            contadorServicio++;
        }
        modificarTotal();
        modificarTotalCliente();

    }

    function ExisteFila(id, cantidadd, costo) {
        let encontrado = false;
        tabla.rows().every(function (value, index) {
            let data = this.data();
            if (id == data.id_servicio) {
                let subTotoal = (costo * cantidadd).toFixed(2);
                data.cantidad = cantidadd;
                data.sub_total = subTotoal;
                encontrado = true;
                this.data(data).draw(false);
                modificarTotal();
            }
        });
        return encontrado;


    }

    function modificarTotal() {
        TOTAL = 0.0;
        tabla.rows().every(function (value, index) {
            let data = this.data();
            TOTAL += parseFloat(data.sub_total);
        });
        $('#totalServicios').empty();
        $('#totalServicios').text("$" + TOTAL);
    }


    function modificarTotalCliente() {
        //POR DIA
        $('#totalCliente').empty();
        $('#totalCliente').text("$" + (parseFloat(TOTAL) + parseFloat(precioAuto)));
    }

    //BOTON DE IMPRIMIR
    $(document).on('click', '#btnImprimir', function (evento) {
        evento.preventDefault(); //para evitar que la pagina se recargue
        let form = $("#cliente-form");
        let form1 = $("#encomienda-form");
        form1.validate();
        form.validate();
        if (form.valid()) {
            if (form1.valid()) {
                //aqui podemos poner el método guardar por si llegariamos a guardar las
                //las cotizaciones
            }

        }
    });
    ///PARA LAS VALIDACIONES AL  MOMENTO DE IMPRIMIRLAS
    function inicializarValidaciones() {
        $('#cliente-form').validate({

            rules: {
                id_cliente: {
                    required: true
                }
            },
            messages: {
                id_cliente: {
                    required: "Seleccione el cliente"
                }
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');

            }
        });

        $('#encomienda-form').validate({

            rules: {
                direccion: {
                    required: true,
                    minlength: 10
                },
                punto_referencia: {
                    required: true,
                    minlength: 10
                },
                fecha: {
                    required: true
                }
            },
            messages: {
                direccion: {
                    required: "Digite la dirección",
                    minlength: "La dirección debe de tener una longitud minima de 10"
                },
                punto_referencia: {
                    required: "Digite el punto de referencia",
                    minlength: "El punto referencia debe de tener una longitud minima de 10"
                },
                fecha: {
                    required: "Digite la fecha"
                }
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');

            }
        });

    }
    //BOTON DE ELIMINAR
    $(document).on('click', '.btn-group .btn-danger', function (evento) {

        tabla.row($(this).parents('tr')).remove().draw();
        modificarTotal();
        //modificarComision();
        //modificarTotalCliente();
    });
    //CAMBIOS EN EL INPUT DE PORCENTAJE
    $(document).on('keyup mouseup', '#porcenaje', function () {
        modificarComision();
        modificarTotalCliente();
    });


    $(function () {
        $("#fecha_salida").on("change", function () {
            let inicio = moment($('#fecha_salida').data('daterangepicker').startDate._d);
            let fin = moment($('#fecha_salida').data('daterangepicker').endDate._d);
            TOTAL_DIAS = fin.diff(inicio, 'days');
            let nuevoTotal =  (precioAuto*TOTAL_DIAS).toFixed(2)
            $('#totalVehiculo').text(`$${nuevoTotal}(${TOTAL_DIAS} Días)` );
        });
    });

    function inicializarCalendario() {
        $('#fecha_salida').daterangepicker({
            timePicker: true,
            startDate: moment().startOf('hour'),
            endDate: moment().startOf('hour').add(24, 'hour'),
            locale: {
                format: 'DD/MM/YYYY hh:mm A',
                separator: " - ",
                applyLabel: "Aplicar",
                cancelLabel: "Cancelar",
                fromLabel: "De",
                toLabel: "A",
                customRangeLabel: "Custom",
                daysOfWeek: [
                    "Dom",
                    "Lun",
                    "Mar",
                    "Mie",
                    "Jue",
                    "Vie",
                    "Sab"
                ],
                monthNames: [
                    "Enero",
                    "Febrero",
                    "Marzo",
                    "Abril",
                    "Mayo",
                    "Junio",
                    "Julio",
                    "Agosto",
                    "Septiembre",
                    "Octubre",
                    "Noviembre",
                    "Diciembre"
                ],
                "firstDay": 0
            }
        });

    }

    //BOTON DE NUEVO CLIENTE
    $(document).on('click', '#btnNuevoCliente', function (evento) {
        $('#modalAgregarCliente').modal('show');
    });


});
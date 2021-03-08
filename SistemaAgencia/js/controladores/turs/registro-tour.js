inicializarCalendario();
inicializarValidaciones();
inicializarGaleria();
$('#loading').hide();

let cantidad = document.getElementById("cantidad");
const htmlOtrasOpciones = $('#otras_opciones').clone();
const htmlPromociones = $('#promocione_especiales').clone();

//BOTON DE GUARDAR 
$(document).on('click', '#btnguardar', function (evento) {
    evento.preventDefault(); //para evitar que la pagina se recargue
    let form = $("#miFormulario");
    form.validate();
    if (form.valid()) {
        guardar();
    } else {
        const Toast = Swal.mixin();
        Toast.fire({
            title: 'Exito...',
            icon: 'error',
            text: "Complete los campos",
            showConfirmButton: true,
        });
    }
});
//BOTON DE AGREGAR INPUT
$(document).on('click', '.btn-add', addFormGroup);
//BOTON DE ELIMINAR INPUT
$(document).on('click', '.btn-remove', removeFormGroup);
//BOTON DE AGREGAR FILA
$(document).on('click', '.btn-addRow', addRow);
//BOTON DE ELIMINAR FILA
$(document).on('click', '.btn-removeRow', removeRow);

function inicializarGaleria() {
    // ESTO ES PARA INICIALIZAR EL ELEMENTO DE SUBIDA DE FOTOS (EN ESTE CASO UNA GALERIA )
    $('#fotos').fileinput({
        theme: 'fas',
        language: 'es',
        //uploadUrl: '#',
        showUpload: false,
        //showCaption: false,
        maxFileSize: 2000,
        maxFilesNum: 10,
        allowedFileExtensions: ['jpg', 'png', 'gif'],
        required: true,
        uploadAsync: false,
        showClose: false,
    });
}
function inicializarValidaciones() {
    $('#miFormulario').validate({
        rules: {
            nombreTours: {
                required: true,
                minlength: 3,
                maxlength: 150
            },
            fecha_salida: {
                required: true,
            },
            cantidad: {
                required: true,
                digits: true,
                min: 1
            },
            CostoPasaje: {
                required: true,
                number: true,
                min: 0
            },
            precio_sitio: {
                required: true,
                number: true,
                min: 0
            },
            precio_servicio: {
                required: true,
                number: true,
                min: 0
            },
            descripcion_tur: {
                required: true,
                minlength: 5
            },
            "requisitos[]": {
                required: true,
                minlength: 5,

            },
            "no_incluye[]": {
                required: true,
                minlength: 5
            },
            "incluye[]": {
                required: true,
                minlength: 5
            },
            "lugar_salida[]": {
                required: true,
                minlength: 3
            },

        },
        messages: {
            nombreTours: {
                required: "Digite titulo",
                minlength: "Longitud debe ser mayor a 3",
                maxlength: "Longitud debe ser menor a 150"
            },
            fecha_salida: {
                required: "Es necesaria la fecha de salida",
            },
            cantidad: {
                required: "Digite el numero de pasajeros",
                digits: "Solo numeros enteros",
                min: "Debe de ser mayor a 0"
            },
            CostoPasaje: {
                required: "Digite costo del pasaje",
                number: "Solo numero",
                min: "Debe ser mayor o igual a 0"
            },
            precio_sitio: {
                required: "Digite precio",
                number: "Solo numero",
                min: "Debe ser mayor o igual a 0"
            },
            precio_servicio: {
                required: "Digite precio",
                number: "Solo numero",
                min: "Debe ser mayor o igual a 0"
            },
            descripcion_tur: {
                required: "Este campo es requierido",
                minlength: "debe de tener una longitud mayor a 4 "
            },
            "lugar_salida[]": {
                required: "Digite el luegar de salida",
                minlength: "Longitud debe ser mayor a 3",
            },
            "incluye[]": {
                required: "Este campo es requierido",
                minlength: "debe de tener una longitud mayor a 4 "
            },
            "no_incluye[]": {
                required: "Este campo es requierido",
                minlength: "debe de tener una longitud mayor a 4 "
            },

            "requisitos[]": {
                required: "Este campo es requierido",
                minlength: "debe de tener una longitud mayor a 4 "
            },
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
function addFormGroup(event) {
    event.preventDefault();
    let $formGroup = $(this).closest('.form-group');
    let $formGroupClone = $formGroup.clone();

    if (!$formGroupClone.find('input').val() == "") {
        $formGroupClone.find('input').val('');
        $(this).toggleClass('btn-success btn-add btn-danger btn-remove').html('–');
        $formGroupClone.insertAfter($formGroup);
    }
};

function removeFormGroup(event) {
    event.preventDefault();
    let $formGroup = $(this).closest('.form-group');
    $formGroup.remove();
};

function addRow(event) {
    event.preventDefault();
    let $formGroup = $(this).closest('.row');
    let $formGroupClone = $formGroup.clone();

    if (!$formGroupClone.find('input').val() == "") {
        $formGroupClone.find('input').val('');
        $(this).toggleClass('btn-success btn-addRow btn-danger btn-removeRow').html('–');
        $formGroupClone.insertAfter($formGroup);
    }
};

function removeRow(event) {
    event.preventDefault();
    let $formGroup = $(this).closest('.row');
    $formGroup.remove();
};





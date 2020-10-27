// CUANDO LA PAGINA YA ESTA LISTA
$(document).ready(function () {
    let contadorTipo = 1;
    let myData = [
        { id: 233, text: "boris" },
        { id: 343, text: "ricardo" },
        { id: 336, text: "mirdna" }

    ];
    inicializarCombo(contadorTipo);

    let addFormGroup = function (event) {
        event.preventDefault();

        let formGroup = $('#arregloTipos');

        let html = "";
        html += '<div class="form-group multiple-form-group input-group">';
        html += '    <select name="ComboTipo[]" class="select2 selectTipo" data-placeholder="Seleccione el tipo"';
        html += '        style="width: 90%;">';
        html += '    </select>';
        html += '    <span class="input-group-btn">';
        html += '        <button type="button" class="btn btn-success btn-add" id="btn-asistiran"';
        html += '            style="margin-top:0px;">+</button>';
        html += '    </span>';
        html += '</div>';
        formGroup.append(html);
        inicializarCombo()

        $(this).toggleClass('btn-success btn-add btn-danger btn-remove').html('–');

    };

    let removeFormGroup = function (event) {
        event.preventDefault();

        let $formGroup = $(this).closest('.form-group');
        let $multipleFormGroup = $formGroup.closest('.multiple-form-group');

        let $lastFormGroupLast = $multipleFormGroup.find('.form-group:last');
        if ($multipleFormGroup.data('max') >= countFormGroup($multipleFormGroup)) {
            $lastFormGroupLast.find('.btn-add').attr('disabled', false);
        }

        $formGroup.remove();
    };

    let selectFormGroup = function (event) {
        event.preventDefault();

        let $selectGroup = $(this).closest('.input-group-select');
        let param = $(this).attr("href").replace("#", "");
        let concept = $(this).text();

        $selectGroup.find('.concept').text(concept);
        $selectGroup.find('.input-group-select-val').val(param);

    }

    let countFormGroup = function ($form) {
        return $form.find('.form-group').length;
    };

    $(document).on('click', '.btn-add', addFormGroup);
    $(document).on('click', '.btn-remove', removeFormGroup);
    $(document).on('click', '.dropdown-menu a', selectFormGroup);


    function inicializarCombo() {
        //COMBO DE TIPOS 
        $('.selectTipo').select2({
            data: myData
        });
    }

    $(document).on('click', '#agregar', function () {
        let elems = document.getElementsByName("ComboTipo[]");
        let arr = jQuery.makeArray(elems);
      
        arr.forEach(element => {
            console.log(element.value);
        });



    });
});
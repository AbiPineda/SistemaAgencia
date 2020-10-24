
$(document).ready(function () {
  const $select = $("#combo_cerrada");

  const opcionCambiada = () => {
    console.log("Cambio");
  };

  $select.change(opcionCambiada);
  const agregar = () => {
    const valor = $('#opcion').val();
    if ($('#opcion').val().length != 0) {
    var $seleccionadas = $("<option></option>").val(valor).text(valor); 
    $('#combo_cerrada').append($seleccionadas).trigger('change');
    //$('#opcion').val('')
    $('#modal-opciones').modal('hide');
  }else{
    const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text: "Campo vacio",
                showConfirmButton: true,
            });
  }
  };

  /*const mostrar = () => {
    const valor = $("#miSelect :selected").val(),
      texto = $("#miSelect :selected").text();
    alert(`Texto: ${texto}. Valor: ${valor}`);
  };*/

  $("#agregar").click(agregar);
});
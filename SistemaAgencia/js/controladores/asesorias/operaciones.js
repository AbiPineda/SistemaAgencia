

/*operaciones dinamicas para que funcione mejor*/

    $(function () {
        $("#asistencia").change(function () {
            // alert($(this).val());
            if ($(this).val() === "1") {
                $("#btn-asistiran").prop("disabled",true);
                $("#asistiran").prop("disabled", true);
            }
            if ($(this).val() === "0") {
                $("#btn-asistiran").prop("disabled",false);
                $("#asistiran").prop("disabled", false);    
            }
        });
    });
function ShowSelected()
{
/* Para obtener el valor */
//var cod = document.getElementById("cliente").value;
//alert(cod);
 
/* Para obtener el texto */
var combo = document.getElementById("cliente");
var selected = combo.options[combo.selectedIndex].text;
$('#usuario').val(selected);
}

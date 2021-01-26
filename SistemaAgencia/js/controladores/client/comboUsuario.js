let DATA_USUARIO;

$(document).ready(function() {

    $.ajax({
        type: "GET",
        url: URL_SERVIDOR + "usuario/obtenerUsuario",
        async: false,
        dataType: "json",
        success: function(data) {
            let myData = [];
            DATA_USUARIO = data.usuarios;
            for (let index = 0; index < DATA_USUARIO.length; index++) {
                myData.push({
                    id: DATA_USUARIO[index].id_cliente,
                    text: DATA_USUARIO[index].nombre
                });
            }

            ///LE CARGAMOS LA DATA 
            $('#comboUsuario').select2({ data: myData });
        },

        error: function(err) {
            //si da un error ya que quede la alerta
            $('#comboUsuario').select2({});
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text: 'No hay Usuarios para mostrar',
                showConfirmButton: true,
            });
        }
    });



});
$(document).ready(function () {

    let DATA_TUR;
    let DATA_SERVICIO;
    let contadorTabla = 0;
    let totalGastos = 0;
    let totalIngresos = 0;
    let ganancias = 0;
   // let cantidad = document.getElementById("cantidad");
    let tabla = $('#add-tabla').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "pageLength": 3,
        "responsive": true,
       
    });

     //AGREGANDO LA INFORMACION DE UN TUR A LA TABLA
    $(document).on('click', '#agregarTabla', function (evento) {

        console.log("fdas");
        evento.preventDefault();
        $('#agregarTabla').attr("disabled", true);
        //verifiacando que existe un precio
        let costo = $('#costo').val();
        let cantidad=$('#cantidad').val();
        //alert(cantidad);
        if (!costo) {
       //     errors = { precio_sitio: "Digite precio" };
            //$("#miFormulario").validate().showErrors(errors);
        } else {
            
            let id = document.getElementById("id_producto").value;
            let combo = document.getElementById("id_producto");
            let nombre = combo.options[combo.selectedIndex].text;
                   
            agregarFila(nombre,costo, cantidad, id);   
                  
          
        }
    });

       function agregarFila(nombre,costo, cantidad, id) {
        let subTotoal = (costo * cantidad).toFixed(2);
        let html = "";
        html += '<td>';
        html += '    <div class="btn-group">';
        html += '        <button type="button" name="" class="btn btn-danger" data-toggle="modal"';
        html += '            data-target="#modal-eliminar">';
        html += '            <i class="fas fa-trash" style="color: white"></i>';
        html += '        </button>';
        html += '    </div>';
        html += '</td>';
        tabla.row.add([nombre,costo, cantidad,  subTotoal, html,  id, contadorTabla]).draw(false);
        //PARA ORDENAR LA TABLA
        tabla.order([6, 'desc']).draw();
        modificarTotal();
     
    }

     function validarAdd(id,cantidad) {
    let myTotal = 0;
      
    }


     function modificarTotal() {
    let myTotal = 0;
        tabla.rows().every(function (value, index) {
            let data = this.data();
            myTotal += data[1] * data [2];
            
                    
        });
        $('#total').text("$" + myTotal);
    }

});
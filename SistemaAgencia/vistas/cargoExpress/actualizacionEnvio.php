

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-5" id="titulo">
                    <h1>Registro de Actualizacion de Envio</h1>
                </div>
                <div class="col-sm-3" id="titulo">
                    <div class="center">
                        <div id="cargoExpres">
                            <img src="vistas/cargoExpress/img/cargo.png" class="app-logo" alt="Logotipo"/> 
                        </div>

                    </div>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Actualizacion de Encomienda</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" >
        <div class="container-fluid ">
            <div class="row">
                <div class="offset-1"></div>
                <div class="container">
                    <div class="row p-4">
                        <div class="col-md-4">
                            <div class="card" id="formulario-busqueda-encomienda">
                                <div class="card-body" >
                                    <!-- FORM TO ADD TASKS -->
                                    <form id="task-form">
                                        <div class="form-group">
                                            <label>Encomienda</label>
                                            <input type="text" id="name" placeholder="Encomienda" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha</label>
                                            <input type="date" id="name" placeholder="Encomienda" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Lugar</label>
                                            <input type="date" id="name" placeholder="Lugar" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Descripción</label>
                                            <textarea id="description" cols="10" rows="3" class="form-control" placeholder="Escriba la Descripción"></textarea>
                                        </div>

                                        <input type="hidden" id="taskId">
                                        <div >
                                        <button style="margin: 5px" type="submit"
                                            class="btn btn-default float-right">Cancelar</button>
                                        <button style="margin: 5px" type="submit"
                                            class="btn btn-info float-right">Guardar</button>

                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- TABLE  -->
                        <div class="col-md-8" id="alinear-buscador">
                            <div class="card my-4" id="task-result">
                                <div class="card-body" id="buscador-encomieda">
                                    <!-- SEARCH -->
                                    <ul id="container"></ul>

                                    <div class="form-group">
                                        <label>Buscar Encomienda</label>
                                        <input type="text" class="form-control" placeholder="Ingrese la Encomienda a buscar">
                                    </div>
                                </div>
                            </div>
                            
           <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Fecha</th>
                  <th>Hora</th>
                  <th>Lugar</th>
                  <th>Descripción</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>20/04/2019</td>
                  <td>8:00pm</td>
                  <td>San Vicente</td>
                  <td>Esta bien</td>
                
                </tr>
                <tr>
                  <td>20/04/2019</td>
                  <td>8:00pm</td>
                  <td>San Vicente</td>
                  <td>Esta bien</td>
                
                </tr>
                <tr>
                  <td>20/04/2019</td>
                  <td>8:00pm</td>
                  <td>San Vicente</td>
                  <td>Esta bien</td>
                
                </tr>
                <tr>
                  <td>20/04/2019</td>
                  <td>8:00pm</td>
                  <td>San Vicente</td>
                  <td>Esta bien</td>
                
                </tr>
                </tbody>
                
              </table>     

                        </div>
                    </div>
                </div>

            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>

</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
   <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "pageLength":3,
      "responsive": true,
      "oLanguage": {    
		    "sZeroRecords":    "No se encontraron resultados",
		    "sEmptyTable":     "Ningún dato disponible en esta tabla",
		    "sInfo":           "Mostrando del (_START_ al _END_) de _TOTAL_ registros",
		    "sInfoEmpty":      "Mostrando del 0 al 0  de 0 registros",
		    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		    "sInfoPostFix":    "",
		    "sSearch":         "Filtrar:",
		    "sUrl":            "",
		    "sInfoThousands":  ",",
		    "sLoadingRecords": "Por favor espere - cargando...",
		    "oPaginate": {
		        "sFirst":    "Primero",
		        "sLast":     "Último",
		        "sNext":     "Siguiente",
		        "sPrevious": "Anterior"
		    },
		    "oAria": {
		        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
		        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
		    }
        }
    });
  });
</script>

<!-- /.content-wrapper -->
<!--para la paginacion de las tablas-->
  

<!--fin de la paginacion de las tablas-->

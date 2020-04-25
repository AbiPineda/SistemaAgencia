<?php
include_once '../../config/parametros.php';
?>
<!-- DataTables -->
  <link rel="stylesheet" href="<?=$base_url?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=$base_url?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">


<div class="content-wrapper" style="min-height: 1185.73px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DataTables</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                

                 <div class="card">
            <div class="card-header">
              <h3 class="card-title">Próximos Tours</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nombre del Tour</th>
                  <th>Fecha de salida</th>
                
                  <th>tipo</th>
                  <th>Editar</th>
                  <th>Retirar  </th>
                  <th>Itinerario</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>!VAMONOS A COSTA RICA¡</td>
                  <td>DEL 4 AL 9 DE ABRIL 2019</td>
                  <td>Internacional</td>
               
                  <td> <button type="button" class="btn btn-block btn-primary"><i class="fas fa-edit"></i> </button></td>
                  <td> <button type="button" class="btn btn-block btn-danger"><i class="fas fa-trash"></i> </button></td>
                  <td> <button type="button" class="btn btn-block btn-success"><i class="fas fa-car"></i> </button></td>
                </tr>
                               
                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
  
<!-- DataTables -->
<script src="<?=$base_url?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=$base_url?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=$base_url?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=$base_url?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>  
  
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
      "responsive": true,
    });
  });
</script>



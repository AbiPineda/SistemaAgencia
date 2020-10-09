<?php
include_once '../../config/parametros.php';
//include_once '../../plantillas/cabecera.php';
include_once  '../../plantillas/navbar.php';
  include_once '../../plantillas/barra_lateral.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 3 | Fixed Sidebar</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?= $base_url ?>plugins/fontawesome-free/css/all.min.css">

        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="<?= $base_url ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?= $base_url ?>dist/css/adminlte.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <link rel="stylesheet" href="<?= $base_url ?>css/style.css">
        <link rel="stylesheet" href="<?= $base_url ?>css/foto.css">

        <!-- DataTables -->
        <link rel="stylesheet" href="<?= $base_url ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="<?= $base_url ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">


        <!--necesario para que funcione el selector multiple-->
        <link rel="stylesheet" href="<?= $base_url ?>plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="<?= $base_url ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">


        <!--  necesario para que funcione el calendiario con limites-->
        <link rel="stylesheet" href="<?= $base_url ?>plugins/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" href="<?= $base_url ?>dist/css/adminlte.min.css">
        <!-- iCheck for checkboxes and radio inputs -->
        <link rel="stylesheet" href="<?= $base_url ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">

        <link rel='stylesheet' type='text/css' href='<?= $base_url ?>plugins/a/css/fullcalendar.css' />


        <link rel="stylesheet" type="text/css" href="<?= $base_url ?>css/bootstrap-clockpicker.css">

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>




    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <!-- Site wrapper -->
        <div class="wrapper">

            <!-- Main Sidebar Container -->





      


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Programación de Citas</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Citas</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <!-- /.col -->
                    <div class="col-md-10">
                        <div class="card card-primary">
                            <div class="card-body p-0">
                                <!-- THE CALENDAR -->
                                <div id="calendar"></div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-1">
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

</div>

<!-- ./wrapper -->
<!--modal alternativo para los eventos-->
 <div class="modal fade" id="modal_eventos" tabindex="-1" role="dialog" aria-labelledby="modal-eventLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tituloEvento">Agregar titulo </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                <form id="register-form" onsubmit="return false">

                <input type="text" id="txtId" name="txtId"/>
                <input type="text" id="txtFecha" name="fecha"/>
                <input type="hidden" name="id_cliente" value="1">

                
                <div class="form-row">

                    <div class="form-group col-md-4">
                        <label>Título:</label>
                         <input type="text"  class="form-control" id="txtTitulo" name="title" placeholder="Titulo de la cita" />
                    </div>

                     <div class="form-group col-md-4">
                        <label>Hora de la cita</label>
                        <div class="input-group clockpicker" data-autoclose="true">
                        <input type="text" id="txtHora" name="start" class="form-control" value="10:30" />  
                        </div>
                        
                    </div>
                    <div class="form-group col-md-4">
                        <label>Cliente</label>
                         <select name="id_cliente" id="cliente"></select>

                        
                    </div>
                </div>

                <div class="form-group">
                    <label> Descripción: </label>
               <textarea  name="descripcion" id="txtDescripcion" rows="3" class="form-control"></textarea>
                </div>
            

                </div>
                <div class="modal-footer">
            <button type="button" id="btnAgregar" class="btn btn-success" >Agregar</button>
            <button type="button" id="btnModificar" class="btn btn-secondary" >Modificar</button>
              <button type="button" id="btnEliminar" class="btn btn-danger" >Eliminar</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                </div>
            </form> 
                </div>
            </div>
            </div>
<!--fin de modal de enventos-->



<?php
  include_once '../../plantillas/footer.php';
?>

 <script type="text/javascript">
          $(document).ready(function() {

        $.ajax({
        type: "GET",
        url: 'http://localhost/API-REST-PHP/Usuario/obtenerUsuario', 
        async: false,
        dataType: "json",
        success: function(data){
          var $select = $('#cliente');
          $.each(data, function(i,name) {
           
          $select.append('<option value=' + name.id_cliente + '>' + name.nombre + '</option>');
          });    
        },
        error: function(data) {
          alert('error');
        }
      });
   
  }); 
    </script>
<script>
      $(document).ready(function(){
        //*****para el combobox
       

        //*********fin****




        $('#calendar').fullCalendar({
            header:{
                left:'prev,next,today',
                center:'title',
                right:'month,basicWeek,basicDay'
            },
            customButtons:{
                Miboton:{
                    text:"boton 1",
                    click: function(){
                        alert("Accion del boton");
                    }
                }
            },
            dayClick:function(date,jsEvent,view){
                $('#modal_eventos').modal();
                $('#txtFecha').val(date.format());
                
                $('#btnAgregar').prop("disabled",false);
                $('#btnModificar').prop("disabled",true);
                $('#btnEliminar').prop("disabled",true);
                limpiar();
                

            },
            events:'http://localhost/API-REST-PHP/index.php/Cita/cita', //aqui pongo la api que e hecho
            //http://localhost/restful/index.php/Calendario/calendario
            eventClick:function(calEvent,jsEvent,view){

            $('#btnAgregar').prop("disabled",true);
            $('#btnModificar').prop("disabled",false);
            $('#btnEliminar').prop("disabled",false);

            $('#tituloEvento').html(calEvent.motivo);

            $('#txtId').val(calEvent.id_cita);
            $('#txtTitulo').val(calEvent.title);
            $('#txtColor').val(calEvent.color);
            $('#txtDescripcion').val(calEvent.descripcion);
             FechaHora=calEvent.start._i.split(" ");
            $('#txtFecha').val(FechaHora[0]);
            $('#txtHora').val(FechaHora[1]);

                 $('#modal_eventos').modal();


            },
            editable:true,
            eventDrop:function(calEvent){
            $('#txtId').val(calEvent.id_cita);
            $('#txtTitulo').val(calEvent.title);
            $('#txtColor').val(calEvent.color);
            $('#txtDescripcion').val(calEvent.descripcion);
            var fechaHora=calEvent.start.format().split("T");
            $('#txtFecha').val(fechaHora[0]);
            $('#txtHora').val(fechaHora[1]); //todo el modal con los datos

            recolectarDatos();
            enviarInformacion(NuevoEvento,true);
            

            }
           
        });
    });//fin calendario
     $("#btnAgregar").on('click', function(e){

       e.preventDefault();
       // recolectarDatos();

        $.ajax({
            url : "http://localhost/API-REST-PHP/index.php/Cita/citas",
            method : 'POST',
            data : $("#register-form").serialize(),
            success : function(response){
                 if (response) {
                   
                     $("#modal_eventos").modal('toggle');
                      $('#calendar').fullCalendar('refetchEvents'); 
                       

                       console.log(response);
                    } 
                
            },
            error : function(er){
                console.log(er);
                alert("Hay un error...."); 
            }

        });

    });
   

    
</script>
<script src="<?= $base_url ?>plugins/a/js/popper.min.js"></script>
<script src="<?= $base_url ?>plugins/a/js/bootstrap.min.js"></script>
<script type='text/javascript' src='<?= $base_url ?>plugins/a/js/moment.min.js'></script>
<script type='text/javascript' src='<?= $base_url ?>plugins/a/js/fullcalendar.min.js'></script>
<script type='text/javascript' src='<?= $base_url ?>plugins/a/js/locale/es.js'></script>





<script type="text/javascript">
      
   

            $('.clockpicker').clockpicker();
</script>


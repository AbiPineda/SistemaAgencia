<?php
//include_once '../plantillas/cabecera.php';
//include_once '../plantillas/navbar.php';
//include_once '../plantillas/barra_lateral.php';
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-5" id="titulo">
                    <h1>Registro de Encomienda</h1>
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
                        <li class="breadcrumb-item active">Registrar Encomienda</li>
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

                <!-- left column -->
                <div class="col-10">
                    <!-- general form elements -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Datos de la Encomienda</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form">
                            <div class="card-body">
                                <!--Esta es una fila-->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="cars">Seleccione el Cliente:</label>

                                            <select id="categoria" class="form-control">
                                                <option value="permitido">Jessenia Corinca</option>
                                                <option value="no">Jenny Orellana</option>
                                                <option value="no">Judith Hernández</option>
                                            </select> 
                                        </div>
                                    </div>
                                        <div class="col-lg-6">
                                          <div class="form-group">
                                            <label for="cars">Seleccione el Producto:</label>

                                            <select id="categoria" class="form-control">
                                                <option value="permitido">Acetaminofén</option>
                                                <option value="no">Jeringas</option>
                                            </select> 
                                        </div>
                                            </div>
                                    
                                    
                                </div>
                                <!--****************FIN FILA*************-->
                                
                                 <!--Esta es una fila-->
                                <div class="row">
                                   <div class="col-lg-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Dirección</label>
                                            <input type="text" class="form-control" placeholder="Introduzca la dirección">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Destino Final</label>
                                            <input type="text" class="form-control" placeholder="Introduzca el destino final">
                                        </div>
                                    </div>
                                </div>
                                 
                                 
                                <!--****************FIN FILA*************-->
                                
                                <!--Esta es una fila-->
                                <div class="row">
                                   <div class="col-lg-3">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Costo</label>
                                            <input type="text" class="form-control" placeholder="Calculado...">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Cantidad</label>
                                            <input type="" class="form-control" placeholder="Depende el producto">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Estado</label>
                                            <select id="categoria" class="form-control">
                                                <option value="permitido">Enviado</option>
                                                <option value="no">Otros </option>
                                            </select> 
                                           </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Fecha</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    
                                     <div style="text-align: right;width:2200px">
                                        <button style="margin: 5px" type="submit"
                                            class="btn btn-default float-right">Cancelar</button>
                                        <button style="margin: 5px" type="submit"
                                            class="btn btn-info float-right">Guardar</button>

                                    </div>
                                    
                                </div>
                                 
                                 
                                <!--****************FIN FILA*************-->
                               
                                
                               
                                
                                
                            </div><!-- /.card-body -->
                        </form>
                    </div> <!-- /.card-body -->

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

<!-- /.content-wrapper -->

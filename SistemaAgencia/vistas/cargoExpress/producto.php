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
                <div class="col-sm-6" id="titulo">
                    <h1>Registrar Productos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Registro de Productos</li>
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
                            <h3 class="card-title">Datos </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input type="text" class="form-control" placeholder="Introduzca su nombre">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="cars">Seleccione la Categoría:</label>

                                            <select id="categoria" class="form-control">
                                                <option value="permitido">Permitido</option>
                                                <option value="no">No permitido</option>
                                               
                                            </select> 
                                        </div>
                                    </div>
                                </div>
                              
                                <!-- /.card-body -->


                        </form>
                    </div>

                    <!-- /.card-body -->
                </div>
                <!-- /.card -->







                <!-- /.card -->


                <!-- /.card -->
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

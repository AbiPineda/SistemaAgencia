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
                            <h3 class="card-title">Datos de los Productos </h3>
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
                                            <input type="text" class="form-control" placeholder="Introduzca el nombre">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="cars">Seleccione la Categoría:</label>

                                            <select id="categoria" class="form-control">
                                                <option value="permitido">Alimentos</option>
                                                <option value="no">Licores y Tabaco</option>
                                                 <option value="no">Medicamentos</option>
                                            </select> 
                                        </div>
                                        
                                         <div style="text-align: right;width:392px">
                                        <button style="margin: 5px" type="submit"
                                            class="btn btn-default float-right">Cancelar</button>
                                        <button style="margin: 5px" type="submit"
                                            class="btn btn-info float-right">Guardar</button>

                                    </div>
                                    </div>

                                </div>
                            </div><!-- /.card-body -->
                        </form>
                    </div> <!-- /.card-body -->

                </div>
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>
            <div class="center">
                <div id="cargoExpresRe">
                    <img src="vistas/cargoExpress/img/cargo.png" class="app-logo" alt="Logotipo"/> 
                </div>
                
            </div>
       
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

<!-- /.content-wrapper -->

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
                    <h1>Registro de Reglas</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Reglas de los Productos</li>
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
                            <h3 class="card-title">Reglas de los Productos </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form">
                            <div class="card-body">
                                <!--Esta es una fila-->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="cars">Seleccione el Producto:</label>

                                            <select id="categoria" class="form-control">
                                                <option value="permitido">Acetaminofen</option>
                                                <option value="no">Jeringas</option>
                                                <option value="no">Y más efecto de diseño</option>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Unidades de medidad</label>
                                            <input type="text" class="form-control" placeholder="Introduzca la unidad de medida">
                                        </div>
                                    </div>
                                </div>
                                <!--****************FIN FILA*************-->
                                
                                 <!--Esta es una fila-->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Tarifa</label>
                                            <input type="text" class="form-control" placeholder="Introduzca la tarifa">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Comisión</label>
                                            <input type="text" class="form-control" placeholder="Introduzca la comisión">
                                        </div>
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

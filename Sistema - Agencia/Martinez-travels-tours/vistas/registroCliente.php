<?php
include_once '../plantillas/cabecera.php';
include_once '../plantillas/navbar.php';
include_once '../plantillas/barra_lateral.php';
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Registrar Cliente</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Registrar Cliente</li>
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
                            <h3 class="card-title">Datos Personales</h3>
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
                                            <label>Apellidos</label>
                                            <input type="text" class="form-control"
                                                   placeholder="Introduzca sus apellidos">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Documento Unico de Identidad (DUI)</label>
                                            <input type="text" class="form-control" data-mask='00000000-0'
                                                   placeholder="Introduzca su numero de DUI">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Telefono</label>
                                            <input type="text" class="form-control " name="tel" data-mask='0000-0000' placeholder="Introduzca su Numero de Telefono">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Correo Electronico</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                   placeholder="Introduzca su Correo Electronico">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Contraseña</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1"
                                                   placeholder="Introduzca su Contraseña">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button style="margin: 5px" type="submit"
                                            class="btn btn-default float-right">Cancelar</button>
                                    <button style="margin: 5px" type="submit"
                                            class="btn btn-info float-right">Guardar</button>

                                </div>
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


<?php
include_once '../plantillas/footer.php';
?>

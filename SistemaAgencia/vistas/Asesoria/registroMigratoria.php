<?php
include_once '../../config/parametros.php';
include_once '../../plantillas/cabecera.php';
include_once  '../../plantillas/navbar.php';
include_once '../../plantillas/barra_lateral.php';
?>
<script>
    $(function () {
        $("#casado").change(function () {
            // alert($(this).val());
            if ($(this).val() === "si") {
                $("#input_nombre_conyuge").prop("disabled", false);
                $("#input_fecha_conyuge").prop("disabled", false);
                $("#nacionalidad_conyuge").prop("disabled", false);
            }

            if ($(this).val() === "no") {
                $("#input_nombre_conyuge").prop("disabled", true);
                $("#input_fecha_conyuge").prop("disabled", true);
                $("#nacionalidad_conyuge").prop("disabled", true);
            }
        });
    });
</script>

<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>

                            <small> Registro de Información Migratoria</small>
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Información Migratoria</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- ./row -->
                <div class="row">
                    <div class="col-12 col-sm-1"></div>
                    <div class="col-12 col-sm-10">
                        <div class="card card-primary card-tabs">
                            <div class="card-header p-0 pt-1">
                                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                   
                                   
                                </ul>
                            </div>
                            <div class="card-body">
                                 <form class="form-inline" role="form">
                                <div class="tab-content" id="custom-tabs-one-tabContent">
                                        <!--<div class="form-group" id="1"> 
                                         <input type="hidden" class="form-control" placeholder="esta es una respuesa" id="mail" placeholder="esta es otra ´reg">
                                         <input type="email" class="form-control" id="mail" placeholder="esta es una preguntas" style="width: 400px; margin-top: 20px">&nbsp&nbsp
                                          
                                         </div>

                                         <div class="form-group">
                                            <input type="hidden" class="form-control" id="mail">
                                            <select class="form-control" style="margin-top: 20px">
                                                <option>¿Esta casado por que quiere o lo obligaron?</option>
                                                
                                            </select>&nbsp&nbsp
                                            <input type="hidden" class="form-control" id="mail">
                                            <select class="form-control" style="margin-top: 20px">
                                                <option>¿Esta casado?</option>
                                                
                                            </select>&nbsp&nbsp
                                            <input type="hidden" class="form-control" id="mail">
                                            <select class="form-control" style="margin-top: 20px">
                                                <option>¿Esta casado?</option>
                                                
                                            </select>&nbsp&nbsp
                                            <input type="hidden" class="form-control" id="mail">
                                            <select class="form-control" style="margin-top: 20px">
                                                <option>¿Esta casado?</option>
                                                
                                            </select>&nbsp&nbsp
                                            <input type="hidden" class="form-control" id="mail">
                                            <select class="form-control" style="margin-top: 20px">
                                                <option>¿Esta casado?</option>
                                                
                                            </select>&nbsp&nbsp
                                             
                                         </div>-->
                                           
                                        </div>

                                      
                                   
                                </div><!--fin de una pestaña-->
                                </form>
                                </div>


                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <div class="col-12 col-sm-1"></div>
            </div>


        </section>
    </div>
</div>

<?php
  include_once '../../plantillas/footer.php';
?>

<script type="text/javascript" src="<?= $base_url?>js/controladores/asesorias/ramas.js"></script>
<script type="text/javascript" src="<?= $base_url?>js/controladores/asesorias/preguntas.js"></script>
<script type="text/javascript" src="<?= $base_url?>js/controladores/conf.js"></script>




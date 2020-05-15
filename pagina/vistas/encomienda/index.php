<?php
include_once '../../config/parametros.php';
include_once '../../plantilla/cabecera.php';
include_once '../../plantilla/menu.php';
//include_once '../../plantilla/portada.php';
$espacio=36;
?>

 

<div style="margin-top: 105px;">

  <div class="row">

    <div class="col-lg-3"></div>

    <div class="col-lg-7">

       <div>
                        
                        <div class="timeline-item">

                            <h4 class="timeline-header" style="background: #3ec1d5; color: white; text-align: center;">Datos de la Encomienda </h4>

                            <div class="timeline-body">
                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="cars">Seleccione el Producto:</label>

                                            <select id="categoria" class="form-control">
                                                <option value="permitido">Acetaminofén</option>
                                                <option value="no">Jeringas</option>
                                            </select> 
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Cantidad</label>
                                            <input type="number" class="form-control" placeholder="lbs">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Dirección</label>
                                            <input type="text" class="form-control"
                                                   placeholder="Introduzca la dirección">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Destino Final</label>
                                            <input type="text" class="form-control"
                                                   placeholder="Introduzca el destino final">
                                        </div>
                                    </div>
                                    
                                    
                                  
                                </div>
                                <div class="timeline-footer" style="text-align: right;">
                                    <a class="btn btn-info btn-sm" style="color: white">Agregar</a>

                                </div>
                            </div>

                        </div>
      
      </div>
    </div>
  </div>

  <!--EL CARRO ********************-->
<div class="container main-section">
    <div class="row">
      <div class="col-lg-12 pb-2">
        <h4>Producto Seleccionado</h4>
      </div>
      <div class="col-lg-12 pl-3 pt-3">
        <table class="table table-hover border bg-white">
          <thead>
            <tr>
              <th>Producto</th>
              <th>Cantidad</th> 
              <th>Costo</th>
              <th>Subtotal</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="row">
                  <div class="col-lg-2 Product-img">
                    <img src="https://previews.123rf.com/images/steveallenuk/steveallenuk1503/steveallenuk150300051/37744391-una-selecci%C3%B3n-de-las-jeringas-y-agujas-hipod%C3%A9rmicas-utilizado-en-la-medicina-para-dar-inyecciones-.jpg" alt="..." class="img-responsive" />
                  </div>
                  <div class="col-lg-10">
                    <h4 class="nomargin">Jeringas</h4>
                  </div>
                </div>
              </td>
             
              <td data-th="Quantity">
                <input type="number" class="form-control text-center" value="1">
              </td>
               <td> 35.00 </td>
              <td>35.00</td>
              <td class="actions" data-th="" style="width:10%;">
                <button class="btn btn-warning btn-sm"><i class="fa fa-refresh"></i></button>
                <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
              </td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
             
              <td colspan="2" class="hidden-xs"></td>
              <td class="hidden-xs text-center" style="width:10%;"><strong>Total : 47,000</strong></td>
              <td><a href="#" class="btn btn-success btn-block">Enviar Cotización <i class="fa fa-angle-right"></i></a></td>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
  <!--SE APAGO EL CARRO****************-->

<!--para que me deje colocar bien las preguntas y no se monte en las preguntas-->
<section class="post-content-area single-post-area" style="margin-top: <?php echo $espacio.'px';?>;">

</section>
<!--fin de que para que no se monte-->
</div>
<?php
include_once '../../plantilla/footer.php';
?>
 

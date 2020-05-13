<?php
include_once '../../config/parametros.php';
include_once '../../plantilla/cabecera.php';
include_once '../../plantilla/menu.php';
include_once '../../plantilla/portada.php';
?>

   <link href="pregunta.css" rel="stylesheet">

<div style="margin-top: 15px;">
<div class="info">
  <h1>Información Migratoria</h1>
  <span>
    Responda las preguntas de acuerdo al formato establecido.
  </span>
</div>

<form class="steps" accept-charset="UTF-8" enctype="multipart/form-data" novalidate="">
  <ul id="progressbar">
    <li class="active">Información Personal</li>
    <li>Información de Viaje</li>
    <li>Información Familiar</li>
    <li>Información Académica</li>
  </ul>



  <!-- USER INFORMATION FIELD SET --> 
  <fieldset>
    <h2 class="fs-title">Información Básica</h2>
    <h3 class="fs-subtitle"></h3>

    <!-- Begin What's Your First Name Field -->
    <!--************** fin una pregunta*********-->
        <div class="hs_firstname field hs-form-field">
          <label>¿Nombre según su pasaporte?</label>
    <input type="text" placeholder="Digite el nombre según pasaporte" class="form-control" required="required"
    data-rule-required="true" data-msg-required="Ingrese el nombre según pasaporte">
    <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>

    
        
          <label>¿Nombre de soltera/o?</label>
          <input  name="te" required="required" type="text" class="form-control" placeholder="Digite el nombre" data-rule-required="true" data-msg-required="Nombre de soltera/o incorrecto" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
  
 
        
          <label>¿Dirección de casa? </label>
          <input  name="direccion" class="form-control" required="required" type="text"  placeholder="Digite la dirección" data-rule-required="true" data-msg-required="Dirrección incorrecta" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        
          <label>¿Correo electrónico?</label>
          <input  name="correp" class="form-control" required="required" type="email" value="" placeholder="Digite el correo electrónico" data-rule-required="true" data-msg-required="Correo incorrectro" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
    
        
          <label>¿Fecha de nacimiento?</label>

          <input name="fecha" class="form-control" required="required" size="60" maxlength="128" type="date" value="" placeholder="" data-rule-required="true" data-msg-required="Fecha vacía" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>

          <label>¿Número de teléfono casa?</label> 
          <input type="text" name="telefono_casa" placeholder="Digite el número de Teléfono" class="form-control"
          data-rule-required="true" data-msg-required="Teléfono de casa vacío" required="required">

          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>


        <label>¿Número de teléfono oficina?</label> 
        <input type="text" name="tel_oficina" placeholder="Digite el número de la oficina" class="form-control"
         data-rule-required="true" data-msg-required="Teléfono de oficina vacío" required="required">
         <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>

          <label>¿Número de teléfono celular?</label>
         <input type="text" name="tel_celular" placeholder="Digite el número de celular" class="form-control"
           data-rule-required="true" data-msg-required="Teléfono de celular vacío" required="required">

          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>

          <label>¿Número de pasaporte?</label>
          <input type="text" name="num_pasaporte" placeholder="Digite el numero de pasaporte" class="form-control"
           data-rule-required="true" data-msg-required="Número de pasaporte incorrecto" required="required">
           
           <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>

          <label>¿Tipo de pasaporte?</label>
          <select  name="tipo_pasaporte1" class="form-control"  data-rule-required="true" data-msg-required="Seleccione tipo de pasaporte" required="required">
            <option value="" selected>Seleccione</option>
           <option value="permitido">Diplomatico</option>
            <option value="no">Oficial</option>
            <option value="no"> Salvoconductos </option>

           </select>

           <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
                                                    
          <label>¿Ha perdido algún pasaporte o se lo han robado?</label>
          <select name="robado" class="form-control" data-rule-required="true" data-msg-required="Seleccione la opción" required="required">
          <option value="" selected>Seleccione</option>
          <option value="permitido">Perdido</option>
          <option value="no">Robado</option>

          </select>

          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
                                              
    <!-- End Total Number of Constituents in Your Database Field -->
    <input type="button" data-page="1" name="next" class="next action-button" value="Next" />
    
  </fieldset>



  <!-- ACQUISITION FIELD SET -->  
  <fieldset>
    <h2 class="fs-title">Información Básica de viaje</h2>
    <h3 class="fs-subtitle"></h3>

   <label>¿Fecha probable de viaje?</label>
    <input type="date" name="fecha_viaje" class="form-control"
    data-rule-required="true" data-msg-required="Fecha vacía" required="required">
    <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
                                    

    <label>¿Ha tenido visa antes?</label>
    <select name="ha_visa" class="form-control" data-rule-required="true" data-msg-required="Seleccione la opción" required="required">
    <option value="" selected>Seleccione</option>
    <option value="permitido">Si</option>
    <option value="no">No</option>

    </select>
    <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
    
    <label>¿Ha viajado antes a Estados Unidos?</label>
     <select name="ha_viajado" class="form-control" data-rule-required="true" data-msg-required="Seleccione la opción" required="required">
     <option value="" selected>Seleccione</option>
     <option value="permitido">Si</option>
      <option value="no">No</option>

    </select>

     <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
      
      <label>¿Tiene alguna petición de familia en trámite con la embajada de Estados Unidos?</label>
        <select id="categoria" class="form-control" data-rule-required="true" data-msg-required="Seleccione la opción" required="required">
        <option value="" selected>Seleccione</option>
        <option value="permitido">Si</option>
        <option value="no">No</option>

        </select>

        <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
                                                
      <label>¿Nombre de la empresa que visitará en los Estados Unidos?</label>
      <input type="text" name="empresa" placeholder="Digite la Empresa" class="form-control"
      data-rule-required="true" data-msg-required="Nombre de la empresa vacía" required="required">

       <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
                                       
      
     <label>¿Dirección de esa persona?</label>
     <input type="text" name="direc_persona" placeholder="Digite la Dirección" class="form-control"
      data-rule-required="true" data-msg-required="Nombre de la persona vacío" required="required">

     <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>


     <label>¿Número de teléfono de esa persona?</label>
     <input type="text" name="tel_persona" placeholder="Digite la Teléfono" class="form-control"  data-rule-required="true" data-msg-required="Número de la persona vacío" required="required">

     <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>

     <label>¿e-mail de esa persona?</label>
       <input type="text" name="email_persona" placeholder="Digite el e-mail" class="form-control"
       data-rule-required="true" data-msg-required="Email de la persona vacío" required="required">

        <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
     
     <label>¿Dirección de esa empresa?</label>
     <input type="text" name="dire_empresa" placeholder="Digite la Dirección" class="form-control" 
     data-rule-required="true" data-msg-required="Dirección de la empresa vacío" required="required">

        <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>                                         
                                                    
       <label>¿Número de teléfono de esa empresa?</label>
       <input type="text" name="tel_empresa2" placeholder="Digite la Teléfono" class="form-control" 
       data-rule-required="true" data-msg-required="Número de la empresa vacío" required="required">
        
        <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>                                         
                                          
       <label>¿e-mail de esa empresa?</label>
       <input type="text" name="email_empresa" placeholder="Digite el e-mail" class="form-control" data-rule-required="true" data-msg-required="Email de la empresa vacío" required="required">

         <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>  

    <input type="button" data-page="2" name="previous" class="previous action-button" value="Previous" />
    <input type="button" data-page="2" name="next" class="next action-button" value="Next" />
  </fieldset>



  <!-- Cultivation FIELD SET -->  
  <fieldset>
    <h2 class="fs-title">Cultivation and Nurturing your Donors</h2>
    <h3 class="fs-subtitle">How have you been nurturing donors to get better donations?</h3>
      <!-- Begin Average Gift Size in Year 1 Field -->
        <div class="form-item webform-component webform-component-textfield hs_average_gift_size_in_year_1 field hs-form-field" id="edit-submitted-cultivation-amount-1 average_gift_size_in_year_1-99a6d115-5e68-4355-a7d0-529207feb0b3_3256">
        
          <label for="edit-submitted-cultivation-amount-1 average_gift_size_in_year_1-99a6d115-5e68-4355-a7d0-529207feb0b3_3256">What was your average gift size in year 1? *</label>

          <input id="edit-submitted-cultivation-amount-1" class="form-text hs-input" name="average_gift_size_in_year_1" required="required" size="60" maxlength="128" type="number" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid number">
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
        <!-- End Average Gift Size in Year 1 Field -->

      <!-- Begin Average Gift Size in Year 2 Field -->
        <div class="form-item webform-component webform-component-textfield hs_average_gift_size_in_year_2 field hs-form-field" id="webform-component-cultivation--amount-2">
        
          <label for="edit-submitted-cultivation-amount-2 average_gift_size_in_year_2-99a6d115-5e68-4355-a7d0-529207feb0b3_3256">What was your average gift size in year 2? *</label>

          <input id="edit-submitted-cultivation-amount-2" class="form-text hs-input" name="average_gift_size_in_year_2" required="required" size="60" maxlength="128" type="number" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid number">
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
        <!-- End Average Gift Size in Year 2 Field -->

      <!-- Begin Average Gift Size Perchent Change Field -->
      <!-- THIS FIELD IS NOT EDITABLE | GRAYED OUT -->
        <div class="form-item webform-component webform-component-textfield webform-container-inline hs_average_gift_size_percent_change field hs-form-field" id="webform-component-cultivation--percent-change1">
        
          <label for="edit-submitted-cultivation-percent-change1 average_gift_size_percent_change-99a6d115-5e68-4355-a7d0-529207feb0b3_3256">Average Gift Size Percent Change</label>

          <input id="edit-submitted-cultivation-percent-change1" class="form-text hs-input" name="average_gift_size_percent_change" readonly="readonly" size="60" maxlength="128" type="text" value="" placeholder="0">
        </div>
        <!-- End Average Gift Size Perchent Change Field -->
    <input type="button" data-page="3" name="previous" class="previous action-button" value="Previous" />
    <input type="button" data-page="3" name="next" class="next action-button" value="Next" />

  </fieldset>



  <!-- Cultivation2 FIELD SET --> 
  <fieldset>
    <h2 class="fs-title">Total Cultivation in Donation</h2>
    <h3 class="fs-subtitle">Let's talk about your donations as a whole</h3>
              <!-- Begin Total Giving In Year 1 Field -->
        <div class="form-item webform-component webform-component-textfield" id="webform-component-cultivation--amount-3 hs_total_giving_in_year_1 field hs-form-field">
        
          <label for=" edit-submitted-cultivation-amount-3 total_giving_in_year_1-99a6d115-5e68-4355-a7d0-529207feb0b3_4902">What was your total giving in Year 1? *</label>

          <input id="edit-submitted-cultivation-amount-3" class="form-text hs-input" name="total_giving_in_year_1" required="required" size="60" maxlength="128" type="number" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid number">
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
        <!-- End Total Giving In Year 1 Field -->

      <!-- Begin Total Giving In Year 2 Field -->
        <div class="form-item webform-component webform-component-textfield hs_total_giving_in_year_2 field hs-form-field" id="webform-component-cultivation--amount-4"> 
        
          <label for=" edit-submitted-cultivation-amount-4 total_giving_in_year_2-99a6d115-5e68-4355-a7d0-529207feb0b3_4902">What was your total giving in Year 2? *</label>

          <input id="edit-submitted-cultivation-amount-4" class="form-text hs-input" name="total_giving_in_year_2" required="required" size="60" maxlength="128" type="number" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid number">
        <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
        
        <!-- End Total Giving In Year 2 Field -->

      <!-- Begin Average Gift Size Percent Change Field 2 -->
      <!-- THIS FIELD IS NOT EDITABLE | GRAYED OUT -->
        <div class="form-item webform-component webform-component-textfield webform-container-inline hs_total_giving_percent_change field hs-form-field" id="webform-component-cultivation--percent-change2">

          <label for=" edit-submitted-cultivation-percent-change2 total_giving_percent_change-99a6d115-5e68-4355-a7d0-529207feb0b3_4902">Average Gift Size Percent Change</label>

          <input id="edit-submitted-cultivation-percent-change2" class="form-text hs-input" name="total_giving_percent_change" readonly="readonly" size="60" maxlength="128" type="text" value="" placeholder="0">
        </div>
        <!-- End Average Gift Size Percent Change Field 2 -->
    <input type="button" data-page="4" name="previous" class="previous action-button" value="Previous" />
    <input type="button" data-page="4" name="next" class="next action-button" value="Next" />
  </fieldset>



  <!-- RETENTION FIELD SET -->  
  <fieldset>
    <h2 class="fs-title">Retention of your donors</h2>
    <h3 class="fs-subtitle">How long can you keep your donors and their donations?</h3>
        <!-- Begin Total Number of Donors Who Gave in Year 1 Field -->
          <div class="form-item webform-component webform-component-textfield hs_number_of_donors_in_year_1 field hs-form-field" id="webform-component-retention--amount-1"> 
        
          <label for=" edit-submitted-retention-amount-1 number_of_donors_in_year_1-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">What was your total number of donors who gave in year 1? *</label>

          <input id="edit-submitted-retention-amount-1" class="form-text hs-input" name="number_of_donors_in_year_1" required="required" size="60" maxlength="128" type="number" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid number">
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
          </div>
        <!-- End Total Number of Donors Who Gave in Year 1 Field-->


        <!-- Begin Total Number of Donors Who Gave in Year 1 and Year 2 Field -->
          <div class="form-item webform-component webform-component-textfield" id="webform-component-retention--amount-2 hs_number_of_year_1_donors_who_also_gave_in_year_2 field hs-form-field">
        
          <label for=" edit-submitted-retention-amount-2 number_of_year_1_donors_who_also_gave_in_year_2-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">What was your total number of donors who gave in year 1 that also gave in year 2? *</label>

          <input id="edit-submitted-retention-amount-2" class="form-text hs-input" name="number_of_year_1_donors_who_also_gave_in_year_2" required="required" size="60" maxlength="128" type="number" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid number">
          
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
          </div>
        <!-- End Total Number of Donors Who Gave in Year 1 and Year 2 Field -->

        <!-- Begin Retention Rate Percent -->
          <div class="form-item webform-component webform-component-textfield" id="webform-component-retention--percent-change field hs-form-field">
        
          <label for="edit-submitted-retention-percent-change">Retention Rate</label>

         <input id="edit-submitted-retention-percent-change" class="form-text hs-input" name="retention_rate_percent" readonly="readonly" size="60" maxlength="128" type="text" value="" placeholder="0">
          
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
          </div>

        <!-- End Retention Rate Percent -->


        <!-- Begin Final Calc -->
          <div class="form-item webform-component webform-component-textfield hs_fundraising_400_index field hs-form-field" id="webform-component-final-grade--grade">

          <label for=" fundraising_400_index-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Fundraising 400 Index Score</label>

          <input id="edit-submitted-final-grade-grade" class="form-text hs-input" name="fundraising_400_index" readonly="readonly" size="60" maxlength="128" type="text" value="" placeholder="0">
          </div>
        <!-- End Final Calc -->
    <input type="button" data-page="5" name="previous" class="previous action-button" value="Previous" />
    <input id="submit" class="hs-button primary large action-button next" type="submit" value="Submit">
    
</fieldset>

</form>
<!--para que me deje colocar bien las preguntas y no se monte en las preguntas-->
<section class="post-content-area single-post-area" style="margin-top: 1335px;">

</section>
<!--fin de que para que no se monte-->
</div>
<?php
include_once '../../plantilla/footer.php';
?>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>
    
 

<script>
  
 $(document).ready(function() {
    var current_fs, next_fs, previous_fs;
    var left, opacity, scale;
    var animating;
    $(".steps").validate({
        errorClass: 'invalid',
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.insertAfter(element.next('span').children());
        },
        highlight: function(element) {
            $(element).next('span').show();
        },
        unhighlight: function(element) {
            $(element).next('span').hide();
        }
    });
    $(".next").click(function() {
        $(".steps").validate({
            errorClass: 'invalid',
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.insertAfter(element.next('span').children());
            },
            highlight: function(element) {
                $(element).next('span').show();
            },
            unhighlight: function(element) {
                $(element).next('span').hide();
            }
        });
        if ((!$('.steps').valid())) {
            return true;
        }
        if (animating) return false;
        animating = true;
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        next_fs.show();
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                scale = 1 - (1 - now) * 0.2;
                left = (now * 50) + "%";
                opacity = 1 - now;
                current_fs.css({
                    'transform': 'scale(' + scale + ')'
                });
                next_fs.css({
                    'left': left,
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            easing: 'easeInOutExpo'
        });
    });
    $(".submit").click(function() {
        $(".steps").validate({
            errorClass: 'invalid',
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.insertAfter(element.next('span').children());
            },
            highlight: function(element) {
                $(element).next('span').show();
            },
            unhighlight: function(element) {
                $(element).next('span').hide();
            }
        });
        if ((!$('.steps').valid())) {
            return false;
        }
        if (animating) return false;
        animating = true;
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        next_fs.show();
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                scale = 1 - (1 - now) * 0.2;
                left = (now * 50) + "%";
                opacity = 1 - now;
                current_fs.css({
                    'transform': 'scale(' + scale + ')'
                });
                next_fs.css({
                    'left': left,
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            easing: 'easeInOutExpo'
        });
    });
    $(".previous").click(function() {
        if (animating) return false;
        animating = true;
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
        previous_fs.show();
        current_fs.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                scale = 0.8 + (1 - now) * 0.2;
                left = ((1 - now) * 50) + "%";
                opacity = 1 - now;
                current_fs.css({
                    'left': left
                });
                previous_fs.css({
                    'transform': 'scale(' + scale + ')',
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_fs.hide();
                animating = false;
            },
            easing: 'easeInOutExpo'
        });
    });
});
jQuery(document).ready(function() {
    jQuery("#edit-submitted-acquisition-amount-1,#edit-submitted-acquisition-amount-2,#edit-submitted-cultivation-amount-1,#edit-submitted-cultivation-amount-2,#edit-submitted-cultivation-amount-3,#edit-submitted-cultivation-amount-4,#edit-submitted-retention-amount-1,#edit-submitted-retention-amount-2,#edit-submitted-constituent-base-total-constituents").keyup(function() {
        calcTotal();
    });
});

function calcTotal() {
    var grade = 0;
    var donorTotal = Number(jQuery("#edit-submitted-constituent-base-total-constituents").val().replace(/,/g, ""));
    if (donorTotal) {
        donorTotal = parseFloat(donorTotal);
    } else {
        donorTotal = 0;
    }
    grade += getBonusDonorPoints(donorTotal);
    var acqAmount1 = Number(jQuery("#edit-submitted-acquisition-amount-1").val().replace(/,/g, ""));
    var acqAmount2 = Number(jQuery("#edit-submitted-acquisition-amount-2").val().replace(/,/g, ""));
    var acqTotal = 0;
    if (acqAmount1) {
        acqAmount1 = parseFloat(acqAmount1);
    } else {
        acqAmount1 = 0;
    }
    if (acqAmount2) {
        acqAmount2 = parseFloat(acqAmount2);
    } else {
        acqAmount2 = 0;
    }
    if (acqAmount1 > 0 && acqAmount2 > 0) {
        acqTotal = ((acqAmount2 - acqAmount1) / acqAmount1 * 100).toFixed(2);
    } else {
        acqTotal = 0;
    }
    jQuery("#edit-submitted-acquisition-percent-change").val(acqTotal + '%');
    grade += getAcquisitionPoints(acqTotal);
    console.log(grade);
    var cultAmount1 = Number(jQuery("#edit-submitted-cultivation-amount-1").val().replace(/,/g, ""));
    var cultAmount2 = Number(jQuery("#edit-submitted-cultivation-amount-2").val().replace(/,/g, ""));
    var cultTotal = 0;
    if (cultAmount1) {
        cultAmount1 = parseFloat(cultAmount1);
    } else {
        cultAmount1 = 0;
    }
    if (cultAmount2) {
        cultAmount2 = parseFloat(cultAmount2);
    } else {
        cultAmount2 = 0;
    }
    if (cultAmount1 > 0 && cultAmount2 > 0) {
        cultTotal = ((cultAmount2 - cultAmount1) / cultAmount1 * 100).toFixed(2);
    } else {
        cultTotal = 0;
    }
    jQuery("#edit-submitted-cultivation-percent-change1").val(cultTotal + '%');
    grade += getAcquisitionPoints(cultTotal);
    var cultAmount3 = Number(jQuery("#edit-submitted-cultivation-amount-3").val().replace(/,/g, ""));
    var cultAmount4 = Number(jQuery("#edit-submitted-cultivation-amount-4").val().replace(/,/g, ""));
    if (cultAmount3) {
        cultAmount3 = parseFloat(cultAmount3);
    } else {
        cultAmount3 = 0;
    }
    if (cultAmount4) {
        cultAmount4 = parseFloat(cultAmount4);
    } else {
        cultAmount4 = 0;
    }
    if (cultAmount3 > 0 && cultAmount4 > 0) {
        cultTotal2 = ((cultAmount4 - cultAmount3) / cultAmount3 * 100).toFixed(2);
    } else {
        cultTotal2 = 0;
    }
    jQuery("#edit-submitted-cultivation-percent-change2").val(cultTotal2 + '%');
    grade += getAcquisitionPoints(cultTotal2);
    var retAmount1 = Number(jQuery("#edit-submitted-retention-amount-1").val().replace(/,/g, ""));
    var retAmount2 = Number(jQuery("#edit-submitted-retention-amount-2").val().replace(/,/g, ""));
    var retTotal = 0;
    if (retAmount1) {
        retAmount1 = parseFloat(retAmount1);
    } else {
        retAmount1 = 0;
    }
    if (retAmount2) {
        retAmount2 = parseFloat(retAmount2);
    } else {
        retAmount2 = 0;
    }
    if (retAmount1 > 0 && retAmount2 > 0) {
        retTotal = (retAmount2 / retAmount1 * 100).toFixed(2);
    } else {
        retTotal = 0;
    }
    jQuery("#edit-submitted-retention-percent-change").val(retTotal + '%');
    grade += getAcquisitionPoints(retTotal);
    jQuery("#edit-submitted-final-grade-grade").val(grade + ' / 400');
}

function getAcquisitionPoints(val) {
    if (val < 1) {
        return 0;
    } else if (val >= 1 && val < 6) {
        return 50;
    } else if (val >= 6 && val < 11) {
        return 60;
    } else if (val >= 11 && val < 16) {
        return 70;
    } else if (val >= 16 && val < 21) {
        return 75;
    } else if (val >= 21 && val < 26) {
        return 80;
    } else if (val >= 26 && val < 31) {
        return 85;
    } else if (val >= 31 && val < 36) {
        return 90;
    } else if (val >= 36 && val < 41) {
        return 95;
    } else if (val >= 41) {
        return 100;
    }
}

function getCultivationGiftPoints(val) {
    if (val < 1) {
        return 0;
    } else if (val >= 1 && val < 4) {
        return 50;
    } else if (val >= 4 && val < 7) {
        return 60;
    } else if (val >= 7 && val < 10) {
        return 70;
    } else if (val >= 10 && val < 13) {
        return 75;
    } else if (val >= 13 && val < 16) {
        return 80;
    } else if (val >= 16 && val < 21) {
        return 85;
    } else if (val >= 21 && val < 26) {
        return 90;
    } else if (val >= 26 && val < 51) {
        return 95;
    } else if (val >= 51) {
        return 100;
    }
}

function getCultivationDonationPoints(val) {
    if (val < 1) {
        return 0;
    } else if (val >= 1 && val < 6) {
        return 50;
    } else if (val >= 6 && val < 11) {
        return 60;
    } else if (val >= 11 && val < 16) {
        return 70;
    } else if (val >= 16 && val < 21) {
        return 75;
    } else if (val >= 21 && val < 26) {
        return 80;
    } else if (val >= 26 && val < 31) {
        return 85;
    } else if (val >= 31 && val < 36) {
        return 90;
    } else if (val >= 36 && val < 41) {
        return 95;
    } else if (val >= 41) {
        return 100;
    }
}

function getRetentionPoints(val) {
    if (val < 1) {
        return 0;
    } else if (val >= 1 && val < 51) {
        return 50;
    } else if (val >= 51 && val < 56) {
        return 60;
    } else if (val >= 56 && val < 61) {
        return 70;
    } else if (val >= 61 && val < 66) {
        return 75;
    } else if (val >= 66 && val < 71) {
        return 80;
    } else if (val >= 71 && val < 76) {
        return 85;
    } else if (val >= 76 && val < 81) {
        return 90;
    } else if (val >= 81 && val < 91) {
        return 95;
    } else if (val >= 91) {
        return 100;
    }
}

function getBonusDonorPoints(val) {
    if (val < 10001) {
        return 0;
    } else if (val >= 10001 && val < 25001) {
        return 10;
    } else if (val >= 25001 && val < 50000) {
        return 15;
    } else if (val >= 50000) {
        return 20;
    }
}
var modules = {
    $window: $(window),
    $html: $('html'),
    $body: $('body'),
    $container: $('.container'),
    init: function() {
        $(function() {
            modules.modals.init();
        });
    },
    modals: {
        trigger: $('.explanation'),
        modal: $('.modal'),
        scrollTopPosition: null,
        init: function() {
            var self = this;
            if (self.trigger.length > 0 && self.modal.length > 0) {
                modules.$body.append('<div class="modal-overlay"></div>');
                self.triggers();
            }
        },
        triggers: function() {
            var self = this;
            self.trigger.on('click', function(e) {
                e.preventDefault();
                var $trigger = $(this);
                self.openModal($trigger, $trigger.data('modalId'));
            });
            $('.modal-overlay').on('click', function(e) {
                e.preventDefault();
                self.closeModal();
            });
            modules.$body.on('keydown', function(e) {
                if (e.keyCode === 27) {
                    self.closeModal();
                }
            });
            $('.modal-close').on('click', function(e) {
                e.preventDefault();
                self.closeModal();
            });
        },
        openModal: function(_trigger, _modalId) {
            var self = this,
                scrollTopPosition = modules.$window.scrollTop(),
                $targetModal = $('#' + _modalId);
            self.scrollTopPosition = scrollTopPosition;
            modules.$html.addClass('modal-show').attr('data-modal-effect', $targetModal.data('modal-effect'));
            $targetModal.addClass('modal-show');
            modules.$container.scrollTop(scrollTopPosition);
        },
        closeModal: function() {
            var self = this;
            $('.modal-show').removeClass('modal-show');
            modules.$html.removeClass('modal-show').removeAttr('data-modal-effect');
            modules.$window.scrollTop(self.scrollTopPosition);
        }
    }
}
modules.init();

  </script>
 

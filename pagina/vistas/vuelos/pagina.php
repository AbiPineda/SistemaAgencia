<?php
include_once('../../config/parametros.php');
include_once '../../plantilla/cabecera.php';
include_once '../../plantilla/menu.php';
?>

      <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/3.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="<?=$base_url?>css/StyleVuelos.css">
        
    </head>



<!-- Based on https://dribbble.com/shots/2790827-Booking-com-Redesign-Concept-->
<section id="padder" style="margin-top: 15px;">
 
  <div id="slider">
    <ul>
      <li class="slide active" style="background-image:url('http://i.huffpost.com/gen/2832512/images/o-AMSTERDAM-CANALS-facebook.jpg')">
        <div class="slide-title">Amsterdam</div>
      </li>
      <li class="slide" style="background-image:url('http://postodiconversazione.com/wp-content/uploads/navigli_milano_5.jpg')">
        <div class="slide-title">Milano</div>
      </li>
      <li class="slide" style="background-image:url('http://airlines-airports.com/wp-content/uploads/2016/08/Germany-Cologne.jpg')">
        <div class="slide-title">Cologne</div>
      </li>
      <div id="controls">
        <div class="prev"><a href="javascript:void(0)">PREV</a></div>
        <div class="next"><a href="javascript:void(0)">NEXT</a></div>
      </div>
    </ul>
  </div>
  <section class="container get_booking" id="content">
    <form name="booking_details" method="post">
      <div id="booking_details">
        <div id="search_destination"><i class="fa icon-search"></i>
          <input class="search" type="text" placeholder="Enter Destination/Hotel Name"/>
        </div>
        <div id="dates_people">
          <div class="date_box" id="check_in">
            <p class="label">CHECK-IN</p>
            <input class="datepicker" type="hidden" name="check_in_date"/>
            <div class="date">25</div>
            <div class="aside">
              <div class="month">December</div>
              <div class="year">2016</div>
            </div>
          </div>
          <div class="date_box" id="check_out">
            <p class="label">CHECK-OUT</p>
            <input class="datepicker" type="hidden" name="check_out_box"/>
            <div class="date">20</div>
            <div class="aside">
              <div class="month">January</div>
              <div class="year">2017</div>
            </div>
          </div>
          <div class="user_counter" id="user_adult">
            <p class="label">ADULTS</p>
            <input type="hidden" name="count_adult" value="3"/>
            <div class="count">3</div>
            <div class="counter_controls"><a class="counter_up" href="javascript:void(0)"><i class="fa icon-plus"></i></a><a class="counter_down" href="javascript:void(0)"><i class="fa icon-minus"></i></a></div>
          </div>
          <div class="user_counter" id="user_children">
            <p class="label">CHILDREN</p>
            <input name="count_children" type="hidden" value="3"/>
            <div class="count">3</div>
            <div class="counter_controls"><a class="counter_up" href="javascript:void(0)"><i class="fa icon-plus"></i></a><a class="counter_down" href="javascript:void(0)"><i class="fa icon-minus"></i></a></div>
          </div>
        </div>
      </div><a id="cta_go" href="javascript:void(0)"><span class="centered"><span>SHOW OFFERS</span><i class="fa fa-arrow-right"></i></span></a>
    </form>
  </section>
</section>

<div style="margin-top:117px;"></div>



<?php
include_once '../../plantilla/footer.php';
?>
<!-- JavaScript Libraries -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
<script type="text/javascript">
  $(function() {
  //Set Current Date
  var today = new Date();
  $('#check_in .date').text($.datepicker.formatDate('dd',today));
  $('#check_in .month').text($.datepicker.formatDate('MM',today));
  $('#check_in .year').text($.datepicker.formatDate('yy',today));
  $('#check_in input').val($.datepicker.formatDate('mm/dd/yy',today));
  var chkout_date = $.datepicker.parseDate('mm/dd/yy', $('#check_in input').val());
  chkout_date.setDate(chkout_date.getDate() + 1);
  $('#check_out .datepicker').val($.datepicker.formatDate('mm/dd/yy',chkout_date));
  $('#check_out .date').text($.datepicker.formatDate('dd',chkout_date));
  $('#check_out .month').text($.datepicker.formatDate('MM',chkout_date));
  $('#check_out .year').text($.datepicker.formatDate('yy',chkout_date));
  
  //Drop Down
  $('.drop span').on('click', function() {
    $(this).parent().find('.drop_options').slideToggle('fast');
  });

  $('.drop_options li span').on('click', function() {
    $(this).parents('.drop_options').slideUp('fast');
  });

  //Slider
  $('#slider #controls .prev').on('click', function() {
    var prevSlide = $("#slider .slide.active").prev('.slide');
    $('#slider .active').removeClass('animated fadeIn active');
    if (prevSlide.length) {
      $(prevSlide).addClass('animated fadeIn active');
    } else {
      $('#slider .slide').last().addClass('animated fadeIn active');
    }
  });

  $('#slider #controls .next').on('click', function() {
    var nextSlide = $("#slider .slide.active").next('.slide');
    $('#slider .active').removeClass('animated fadeIn active');
    if (nextSlide.length) {
      $(nextSlide).addClass('animated fadeIn active');
    } else {
      $('#slider .slide').first().addClass('animated fadeIn active');
    }
  });

  //DatePicker
  $('.datepicker').datepicker({
    defaultDate: '+1d',
    minDate:0,
    onSelect: function(dateText, inst) {
      var date = $(this).datepicker('getDate'),
        day = $.datepicker.formatDate('dd',$(this).datepicker('getDate')),
        month = $.datepicker.formatDate('MM',$(this).datepicker('getDate')),
        year = date.getFullYear();
        $(this).parent().find('.date').text(day);
        $(this).parent().find('.month').text(month);
        $(this).parent().find('.year').text(year);
        if($(this).parent().attr('id')=="check_in"){
          var chkout_date = $.datepicker.parseDate('mm/dd/yy', $('#check_in input').val());
          chkout_date.setDate(chkout_date.getDate() + 1);
          $('#check_out .datepicker').val($.datepicker.formatDate('mm/dd/yy',chkout_date));
          $('#check_out .date').text($.datepicker.formatDate('dd',chkout_date));
          $('#check_out .month').text($.datepicker.formatDate('MM',chkout_date));
          $('#check_out .year').text($.datepicker.formatDate('yy',chkout_date));
        }else{
          var chkin_date = $.datepicker.parseDate('mm/dd/yy', $('#check_out input').val());
          chkin_date.setDate(chkin_date.getDate() - 1);
          $('#check_in .datepicker').val($.datepicker.formatDate('mm/dd/yy',chkin_date));
          $('#check_in .date').text($.datepicker.formatDate('dd',chkin_date));
          $('#check_in .month').text($.datepicker.formatDate('MM',chkin_date));
          $('#check_in .year').text($.datepicker.formatDate('yy',chkin_date));
        }
    }
  });
    $('#check_out .datepicker').datepicker("option",{minDate:+1});
  $('.date_box .date').on('click', function() {
    $(this).parent().find('.datepicker').datepicker('show');
  });
  
  //Counter
  $('.counter_controls a').on('click',function(){
    var count = parseInt($(this).parents('.user_counter').find('.count').text());
      if($(this).hasClass('counter_up')){
        $(this).parents('.user_counter').find('.count').text(count+1);
        $(this).parents('.user_counter').find('input').val(count+1);    
      }else{
        if($(this).parents('.user_counter').attr('id')=="user_adult"){
          if(count>1){
            $(this).parents('.user_counter').find('.count').text(count-1);
            $(this).parents('.user_counter').find('input').val(count-1);  
          }
        }else if(count){
          $(this).parents('.user_counter').find('.count').text(count-1);
          $(this).parents('.user_counter').find('input').val(count-1);          }
      }
  });

});
</script>
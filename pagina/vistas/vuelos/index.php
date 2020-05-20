<?php
include_once('../../config/parametros.php');
include_once '../../plantilla/cabecera.php';
include_once '../../plantilla/menu.php';
?>


<link href="https://netdna.bootstrapcdn.com/font-awesome/3.0/css/font-awesome.min.css" rel="stylesheet" />
<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" />

<style>
@import url("https://fonts.googleapis.com/css?family=Open+Sans");
@import url("https://fonts.googleapis.com/css?family=Kaushan+Script");

body {
    font-family: "Open Sans", sans-serif;
    font-size: 18px;
    min-width: 620px;
}

body a {
    text-decoration: none;
}

#padder {
    padding: 0px 50px 30px;
}

.container {
    max-width: 960px;
    margin: 0 auto;
}

.topbar {
    padding: 15px 30px;
}

.topbar .preferences {
    display: inline-block;
}

.topbar .preferences .drop {
    position: relative;
    cursor: pointer;
}

.topbar .preferences .drop span {
    display: inline-block;
    padding: 5px 7px;
    color: #4b4186;
    font-size: 12px;
    font-weight: bold;
    border: 2px solid #4b4186;
    border-radius: 10px;
    width: 34px;
    background: #fff;
}

.topbar .preferences .drop span i.arrow-down {
    width: 10px;
    height: 10px;
    position: relative;
    display: inline-block;
    margin-left: 5px;
}

.topbar .preferences .drop span i.arrow-down:before {
    content: "";
    position: absolute;
    top: 5px;
    left: 0;
    border-top: 5px solid #4b4186;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
}

.topbar .preferences .drop span i.arrow-down:after {
    content: "";
    position: absolute;
    left: 1px;
    top: 4px;
    border-top: 3px solid #fff;
    border-left: 4px solid transparent;
    border-right: 4px solid transparent;
}

.topbar .preferences .drop .drop_options {
    position: absolute;
    display: none;
    width: 100%;
    z-index: 5;
}

.topbar .preferences .drop .drop_options li {
    text-align: center;
}

.topbar .preferences .drop .drop_options li:hover span {
    background: #4b4186;
    color: #fff;
}

.topbar #login_register {
    display: inline-block;
    float: right;
}

.topbar #login_register a {
    color: #4b4186;
    text-decoration: none;
    font-size: 14px;
    font-weight: bold;
}

header {
    padding: 20px 30px;
    position: relative;
    z-index: 2;
}

header .logo {
    display: inline-block;
}

header .logo img {
    max-width: 100%;
    height: 30px;
}

header nav {
    float: right;
}

header nav ul li {
    display: inline-block;
}

header nav ul li a {
    margin: 0px 20px;
    line-height: 30px;
    color: #fff;
}

header nav ul li:last-child a {
    margin-right: 0px;
}

#slider {
    position: relative;
    margin-top: -72px;
    z-index: 1;
    width: 100%;
}

#slider .slide {
    width: 100%;
    height: 90vh;
    background-size: cover;
    list-style: none;
    display: none;
    transition: all 0.5s ease;
}

#slider .slide.active {
    display: block;
}

#slider .slide .slide-title {
    font-family: "Kaushan Script", cursive;
    font-size: 100px;
    color: #fff;
    position: absolute;
    top: 50%;
    margin-top: -50px;
    width: 100%;
    text-align: center;
}

#slider #controls .next,
#slider #controls .prev {
    position: absolute;
    cursor: pointer;
}

#slider #controls .next {
    top: 50%;
    right: -45px;
    transform: rotate(90deg);
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
}

#slider #controls .prev {
    top: 50%;
    left: -45px;
    transform: rotate(270deg);
    -webkit-transform: rotate(270deg);
    -moz-transform: rotate(270deg);
}

#slider #controls a {
    color: #4b4186;
}

.get_booking {
    margin-top: -110px;
    position: relative;
    z-index: 3;
    text-align: center;
}

.get_booking #booking_details {
    display: inline-block;
    width: 68%;
    margin-right: 10px;
    background: #4b4186;
}

.get_booking #booking_details #search_destination {
    padding: 20px;
    background: #413975;
}

.get_booking #booking_details #search_destination i.fa {
    color: #fff;
    opacity: 0.3;
    font-size: 40px;
    margin-right: 5px;
}

.get_booking #booking_details #search_destination input.search {
    display: inline-block;
    width: 80%;
    padding: 0px 15px;
    font-size: 20px;
    line-height: 40px;
    vertical-align: top;
    background: transparent;
    border: none;
    outline: none;
    color: #fff;
}

.get_booking #booking_details #dates_people {
    display: table;
    width: 100%;
}

.get_booking #booking_details #dates_people .user_counter,
.get_booking #booking_details #dates_people .date_box {
    display: table-cell;
    width: 25%;
    box-sizing: border-box;
    border-right: 1px solid rgba(255, 255, 255, 0.2);
    padding: 20px 15px;
    text-align: center;
}

.get_booking #booking_details #dates_people .user_counter:last-child,
.get_booking #booking_details #dates_people .date_box:last-child {
    border: none;
}

.get_booking #booking_details #dates_people .user_counter p.label,
.get_booking #booking_details #dates_people .date_box p.label {
    color: #fff;
    font-size: 12px;
    text-align: center;
    margin-bottom: 15px;
}

.get_booking #booking_details #dates_people .date_box {
    color: #fff;
}

.get_booking #booking_details #dates_people .date_box .date {
    display: inline-block;
    font-size: 50px;
    margin-right: 5px;
    cursor: pointer;
}

.get_booking #booking_details #dates_people .date_box .aside {
    display: inline-block;
    text-align: left;
}

.get_booking #booking_details #dates_people .date_box .month,
.get_booking #booking_details #dates_people .date_box .year {
    font-size: 12px;
    margin-bottom: 5px;
}

.get_booking #booking_details #dates_people .user_counter {
    color: #fff;
}

.get_booking #booking_details #dates_people .user_counter .count {
    font-size: 50px;
    display: inline-block;
    margin-right: 15px;
}

.get_booking #booking_details #dates_people .user_counter .counter_controls {
    display: inline-block;
}

.get_booking #booking_details #dates_people .user_counter .counter_controls a {
    display: block;
    color: #fff;
    font-size: 14px;
}

.get_booking #booking_details #dates_people .user_counter .counter_controls a.counter_down {
    margin-top: 10px;
}

.get_booking #cta_go {
    display: inline-block;
    width: 30%;
    text-align: center;
    background: #df7521;
    color: #fff;
    line-height: 198px;
    vertical-align: top;
}

.get_booking #cta_go:hover {
    background: #e5914e;
}

.get_booking #cta_go span.centered {
    line-height: 40px;
    display: inline-block;
    vertical-align: middle;
}

.get_booking #cta_go span.centered i {
    display: block;
}

.ui-widget-header,
.ui-state-default,
.ui-widget-content .ui-state-default,
.ui-widget-header .ui-state-default,
.ui-button,
html .ui-button.ui-state-disabled:hover,
html .ui-button.ui-state-disabled:active {
    background: #e6edf6;
    color: #4b4186;
}

.ui-state-highlight,
.ui-widget-content .ui-state-highlight,
.ui-widget-header .ui-state-highlight {
    background: #df7521;
    color: #fff;
}

.animated {
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}

@-webkit-keyframes fadeIn {
    from {
        opacity: 0;
    }

    to {
        opacity: 1;
    }
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }

    to {
        opacity: 1;
    }
}

.fadeIn {
    -webkit-animation-name: fadeIn;
    animation-name: fadeIn;
}

@media all and (min-width: 1px) and (max-width: 850px) {
    header {
        padding: 20px 10px;
    }

    header .logo img {
        height: 20px;
    }

    header nav ul li a {
        margin: 0px 10px;
        font-size: 14px;
        line-height: 20px;
    }

    #slider .slide .slide-title {
        font-size: 50px;
    }

    .get_booking {
        text-align: center;
    }

    .get_booking #booking_details,
    .get_booking #cta_go {
        width: 98%;
        margin: 10px auto;
    }
}
</style>
<br>


<!--Banner de auto -->
<div class="header-bg-autos page-area">
    <div class="home-overly"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

            </div>
        </div>
    </div>
</div>
<!--Banner de auto -->

<!-- SECTION -->
<section id="padder">
    <br><br> <br><br> <br><br> <br><br>
    <div id="slider">
        <ul>
            <li class="slide active"
                style="background-image:url('http://i.huffpost.com/gen/2832512/images/o-AMSTERDAM-CANALS-facebook.jpg')">
                <div class="slide-title">Amsterdam</div>
            </li>
            <li class="slide"
                style="background-image:url('http://postodiconversazione.com/wp-content/uploads/navigli_milano_5.jpg')">
                <div class="slide-title">Milano</div>
            </li>
            <li class="slide"
                style="background-image:url('http://airlines-airports.com/wp-content/uploads/2016/08/Germany-Cologne.jpg')">
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
                    <input class="search" type="text" placeholder="Enter Destination/Hotel Name" />
                </div>
                <div id="dates_people">
                    <div class="date_box" id="check_in">
                        <p class="label">CHECK-IN</p>
                        <input class="datepicker" type="hidden" name="check_in_date" />
                        <div class="date">25</div>
                        <div class="aside">
                            <div class="month">December</div>
                            <div class="year">2016</div>
                        </div>
                    </div>
                    <div class="date_box" id="check_out">
                        <p class="label">CHECK-OUT</p>
                        <input class="datepicker" type="hidden" name="check_out_box" />
                        <div class="date">20</div>
                        <div class="aside">
                            <div class="month">January</div>
                            <div class="year">2017</div>
                        </div>
                    </div>
                    <div class="user_counter" id="user_adult">
                        <p class="label">ADULTS</p>
                        <input type="hidden" name="count_adult" value="3" />
                        <div class="count">3</div>
                        <div class="counter_controls"><a class="counter_up" href="javascript:void(0)"><i
                                    class="fa icon-plus"></i></a><a class="counter_down" href="javascript:void(0)"><i
                                    class="fa icon-minus"></i></a></div>
                    </div>
                    <div class="user_counter" id="user_children">
                        <p class="label">CHILDREN</p>
                        <input name="count_children" type="hidden" value="3" />
                        <div class="count">3</div>
                        <div class="counter_controls"><a class="counter_up" href="javascript:void(0)"><i
                                    class="fa icon-plus"></i></a><a class="counter_down" href="javascript:void(0)"><i
                                    class="fa icon-minus"></i></a></div>
                    </div>
                </div>
            </div><a id="cta_go" href="javascript:void(0)"><span class="centered"><span>SHOW OFFERS</span><i
                        class="fa fa-arrow-right"></i></span></a>
        </form>
    </section>
</section>

<script>
$(function() {
    //Set Current Date
    var today = new Date();
    $('#check_in .date').text($.datepicker.formatDate('dd', today));
    $('#check_in .month').text($.datepicker.formatDate('MM', today));
    $('#check_in .year').text($.datepicker.formatDate('yy', today));
    $('#check_in input').val($.datepicker.formatDate('mm/dd/yy', today));
    var chkout_date = $.datepicker.parseDate('mm/dd/yy', $('#check_in input').val());
    chkout_date.setDate(chkout_date.getDate() + 1);
    $('#check_out .datepicker').val($.datepicker.formatDate('mm/dd/yy', chkout_date));
    $('#check_out .date').text($.datepicker.formatDate('dd', chkout_date));
    $('#check_out .month').text($.datepicker.formatDate('MM', chkout_date));
    $('#check_out .year').text($.datepicker.formatDate('yy', chkout_date));

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
        minDate: 0,
        onSelect: function(dateText, inst) {
            var date = $(this).datepicker('getDate'),
                day = $.datepicker.formatDate('dd', $(this).datepicker('getDate')),
                month = $.datepicker.formatDate('MM', $(this).datepicker('getDate')),
                year = date.getFullYear();
            $(this).parent().find('.date').text(day);
            $(this).parent().find('.month').text(month);
            $(this).parent().find('.year').text(year);
            if ($(this).parent().attr('id') == "check_in") {
                var chkout_date = $.datepicker.parseDate('mm/dd/yy', $('#check_in input').val());
                chkout_date.setDate(chkout_date.getDate() + 1);
                $('#check_out .datepicker').val($.datepicker.formatDate('mm/dd/yy', chkout_date));
                $('#check_out .date').text($.datepicker.formatDate('dd', chkout_date));
                $('#check_out .month').text($.datepicker.formatDate('MM', chkout_date));
                $('#check_out .year').text($.datepicker.formatDate('yy', chkout_date));
            } else {
                var chkin_date = $.datepicker.parseDate('mm/dd/yy', $('#check_out input').val());
                chkin_date.setDate(chkin_date.getDate() - 1);
                $('#check_in .datepicker').val($.datepicker.formatDate('mm/dd/yy', chkin_date));
                $('#check_in .date').text($.datepicker.formatDate('dd', chkin_date));
                $('#check_in .month').text($.datepicker.formatDate('MM', chkin_date));
                $('#check_in .year').text($.datepicker.formatDate('yy', chkin_date));
            }
        }
    });
    $('#check_out .datepicker').datepicker("option", {
        minDate: +1
    });
    $('.date_box .date').on('click', function() {
        $(this).parent().find('.datepicker').datepicker('show');
    });

    //Counter
    $('.counter_controls a').on('click', function() {
        var count = parseInt($(this).parents('.user_counter').find('.count').text());
        if ($(this).hasClass('counter_up')) {
            $(this).parents('.user_counter').find('.count').text(count + 1);
            $(this).parents('.user_counter').find('input').val(count + 1);
        } else {
            if ($(this).parents('.user_counter').attr('id') == "user_adult") {
                if (count > 1) {
                    $(this).parents('.user_counter').find('.count').text(count - 1);
                    $(this).parents('.user_counter').find('input').val(count - 1);
                }
            } else if (count) {
                $(this).parents('.user_counter').find('.count').text(count - 1);
                $(this).parents('.user_counter').find('input').val(count - 1);
            }
        }
    });

});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>

<?php
include_once '../../plantilla/footer.php';
?>
<?php
include_once('../../config/parametros.php');
include_once '../../plantilla/cabecera.php';
include_once '../../plantilla/menu.php';
?>

<link rel="stylesheet" href="<?= $base_url ?>css/css-vuelos/bootstrap.min.css"> <!-- Bootstrap style -->
<link rel="stylesheet" href="<?= $base_url ?>slick/slick.css" />
<link rel="stylesheet" href="<?= $base_url ?>slick/slick-theme.css" />
<link rel="stylesheet" href="<?= $base_url ?>css/css-vuelos/datepicker.css" />
<link rel="stylesheet" href="<?= $base_url ?>css/css-vuelos/tooplate-style.css">
<br>


<!--Banner de auto -->
<div class="header-bg-autos page-area">
    <div class="home-overly"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <br>
                <br>

            </div>
        </div>
    </div>
</div>
<!--Banner de auto -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12 fondo-blanco">
                <!-- SECTION -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="tm-main-content" id="top">
                            <div class="tm-top-bar-bg"></div>
                            <div class="tm-section tm-bg-img" id="tm-section-1">
                                <div class="tm-bg-white ie-container-width-fix-2">
                                    <div class="container ie-h-align-center-fix">
                                        <div class="row">
                                            <div class="col-xs-12 ml-auto mr-auto ie-container-width-fix">
                                                <form action="index.html" method="get"
                                                    class="tm-search-form tm-section-pad-2">
                                                    <div class="form-row tm-search-form-row">
                                                        <div class="form-group tm-form-element tm-form-element-100">
                                                            <i class="fa fa-map-marker fa-2x tm-form-element-icon"></i>
                                                            <input name="city" type="text" class="form-control"
                                                                id="inputCity" placeholder=" Ciudad de Partida">
                                                        </div>
                                                        <div class="form-group tm-form-element tm-form-element-50">
                                                            <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
                                                            <input name="check-in" type="text" class="form-control"
                                                                id="inputCheckIn" placeholder="Check In">
                                                        </div>
                                                        <div class="form-group tm-form-element tm-form-element-50">
                                                            <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
                                                            <input name="check-out" type="text" class="form-control"
                                                                id="inputCheckOut" placeholder="Check Out">
                                                        </div>
                                                    </div>
                                                    <div class="form-row tm-search-form-row">
                                                        <div class="form-group tm-form-element tm-form-element-2">
                                                            <select name="adult" class="form-control tm-select"
                                                                id="adult">
                                                                <option value="">Adult</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                            </select>
                                                            <i class="fa fa-2x fa-user tm-form-element-icon"></i>
                                                        </div>
                                                        <div class="form-group tm-form-element tm-form-element-2">
                                                            <select name="children" class="form-control tm-select"
                                                                id="children">
                                                                <option value="">Children</option>
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                            </select>
                                                            <i
                                                                class="fa fa-user tm-form-element-icon tm-form-element-icon-small"></i>
                                                        </div>
                                                        <div class="form-group tm-form-element tm-form-element-2">
                                                            <select name="room" class="form-control tm-select"
                                                                id="room">
                                                                <option value="">Room</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                            </select>
                                                            <i class="fa fa-2x fa-bed tm-form-element-icon"></i>
                                                        </div>
                                                        <div class="form-group tm-form-element tm-form-element-2">
                                                            <button type="submit"
                                                                class="btn btn-primary tm-btn-search">Check
                                                                Availability</button>
                                                        </div>
                                                    </div>
                                                    <div class="form-row clearfix pl-2 pr-2 tm-fx-col-xs">
                                                        <p class="tm-margin-b-0">Lorem ipsum dolor sit amet, consectetur
                                                            adipiscing elit.</p>
                                                        <a href="#"
                                                            class="ie-10-ml-auto ml-auto mt-1 tm-font-semibold tm-color-primary">Need
                                                            Help?</a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- load JS files -->
<script src="<?= $base_url ?>js/js-vuelos/jquery-1.11.3.min.js"></script> <!-- jQuery (https://jquery.com/download/) -->
<script src="<?= $base_url ?>js/js-vuelos/popper.min.js"></script> <!-- https://popper.js.org/ -->
<script src="<?= $base_url ?>js/js-vuelos/bootstrap.min.js"></script> <!-- https://getbootstrap.com/ -->
<script src="<?= $base_url ?>js/js-vuelos/datepicker.min.js"></script> <!-- https://github.com/qodesmith/datepicker -->
<script src="<?= $base_url ?>js/js-vuelos/jquery.singlePageNav.min.js"></script>
<!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
<script src="<?= $base_url ?>slick/slick.min.js"></script> <!-- http://kenwheeler.github.io/slick/ -->
<script>
/* Google map   
            ------------------------------------------------*/
var map = '';
var center;

function initialize() {
    var mapOptions = {
        zoom: 16,
        center: new google.maps.LatLng(13.7567928, 100.5653741),
        scrollwheel: false
    };

    map = new google.maps.Map(document.getElementById('google-map'), mapOptions);

    google.maps.event.addDomListener(map, 'idle', function() {
        calculateCenter();
    });

    google.maps.event.addDomListener(window, 'resize', function() {
        map.setCenter(center);
    });
}

function calculateCenter() {
    center = map.getCenter();
}

function loadGoogleMap() {
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src =
        'https://maps.googleapis.com/maps/api/js?key=AIzaSyDVWt4rJfibfsEDvcuaChUaZRS5NXey1Cs&v=3.exp&sensor=false&' +
        'callback=initialize';
    document.body.appendChild(script);
}

function setCarousel() {

    if ($('.tm-article-carousel').hasClass('slick-initialized')) {
        $('.tm-article-carousel').slick('destroy');
    }

    if ($(window).width() < 438) {
        // Slick carousel
        $('.tm-article-carousel').slick({
            infinite: false,
            dots: true,
            slidesToShow: 1,
            slidesToScroll: 1
        });
    } else {
        $('.tm-article-carousel').slick({
            infinite: false,
            dots: true,
            slidesToShow: 2,
            slidesToScroll: 1
        });
    }
}

function setPageNav() {
    if ($(window).width() > 991) {
        $('#tm-top-bar').singlePageNav({
            currentClass: 'active',
            offset: 79
        });
    } else {
        $('#tm-top-bar').singlePageNav({
            currentClass: 'active',
            offset: 65
        });
    }
}

function togglePlayPause() {
    vid = $('.tmVideo').get(0);

    if (vid.paused) {
        vid.play();
        $('.tm-btn-play').hide();
        $('.tm-btn-pause').show();
    } else {
        vid.pause();
        $('.tm-btn-play').show();
        $('.tm-btn-pause').hide();
    }
}

$(document).ready(function() {

    $(window).on("scroll", function() {
        if ($(window).scrollTop() > 100) {
            $(".tm-top-bar").addClass("active");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
            $(".tm-top-bar").removeClass("active");
        }
    });

    // Google Map
    loadGoogleMap();

    // Date Picker
    const pickerCheckIn = datepicker('#inputCheckIn');
    const pickerCheckOut = datepicker('#inputCheckOut');

    // Slick carousel
    setCarousel();
    setPageNav();

    $(window).resize(function() {
        setCarousel();
        setPageNav();
    });

    // Close navbar after clicked
    $('.nav-link').click(function() {
        $('#mainNav').removeClass('show');
    });

    // Control video
    $('.tm-btn-play').click(function() {
        togglePlayPause();
    });

    $('.tm-btn-pause').click(function() {
        togglePlayPause();
    });

    // Update the current year in copyright
    $('.tm-current-year').text(new Date().getFullYear());
});
</script>



<?php
include_once '../../plantilla/footer.php';
?>
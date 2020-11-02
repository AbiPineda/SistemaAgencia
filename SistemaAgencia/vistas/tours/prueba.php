<html>

<head>
    <title>JSC Demo</title>

    <!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'> -->

    <link rel=" stylesheet" type="text/css" href="../../plugins/asiento-bus/css/jquery.seat-charts.css">
    <link rel=" stylesheet" type="text/css" href="../../plugins/asiento-bus/css/myStyle.css">
</head>

<body>
    <div class="wrapper">
        <div>
            <label for="numero_filas">numero de filas</label>
            <input id="numero_filas" name="numero_filas" type="number" min="2" value="2" step="1" class="form-control">
        </div>
        <div>
            <label for="asientos_derecho">numero de asientos lado derecho</label>
            <input id="asientos_derecho" name="asientos_derecho" type="number" min="2" value="2" step="1"
                class="form-control">
        </div>
        <div>
            <label for="asientos_izquierdo">numero de asientos lado izquierdo</label>
            <input id="asientos_izquierdo" name="asientos_izquierdo" type="number" min="2" value="2" step="1"
                class="form-control">
        </div>
        <div class="container">
            <div id="seat-map">
                <div class="front-indicator">Front</div>

            </div>


            <div class="booking-details">
                <h2>Booking Details</h2>

                <h3> Selected Seats (<span id="counter">0</span>):</h3>
                <ul id="selected-seats"></ul>

                Total: <b>$<span id="total">0</span></b>

                <button class="checkout-button">Checkout &raquo;</button>

                <div id="legend"></div>
            </div>
        </div>
    </div>

    <script src="../../plugins/jquery/jquery.min.js"></script>
    <script src="../../plugins/asiento-bus/js/jquery.seat-charts.js"></script>
    <script src="../../plugins/asiento-bus/js/mi-configuracion.js"></script>


</body>

</html>
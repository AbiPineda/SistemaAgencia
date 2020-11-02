
$(document).ready(function () {

    let $cart = $('#selected-seats');
    let $counter = $('#counter');
    let $total = $('#total');
    let strFila = "ee_ee";
    let sc;
    let numero_filas = 2;
    let asientos_derecho = 2
    let asientos_izquierdo = 2

    let miMapa = [
        'ee_ee',
        'ee_ee'
    ];
    dibujarAsientos();
    //CUANDO HAY CAMBIOS EN EL NUMERO DE FILAS
    $(document).on('keyup mouseup', '#numero_filas', function () {

        miMapa = [];
        borrarTodo();
        crearFilas();
        dibujarAsientos();

    });
    //CUANDO HAY CAMBIOS EN EL NUMERO DE ASIENTOS DERECHOS
    $(document).on('keyup mouseup', '#asientos_derecho', function () {
        miMapa = [];

        crearStrFila();
        borrarTodo();
        crearFilas();
        dibujarAsientos();

    });
    $(document).on('keyup mouseup', '#asientos_izquierdo', function () {
        miMapa = [];

        crearStrFila();
        borrarTodo();
        crearFilas();
        dibujarAsientos();;

    });
    //this will handle "[cancel]" link clicks
    $('#selected-seats').on('click', '.cancel-cart-item', function () {
        //let's just trigger Click event on the appropriate seat, so we don't have to repeat the logic here
        sc.get($(this).parents('li:first').data('seatId')).click();
    });

    //let's pretend some seats have already been booked
    //sc.get(['1_2', '5_3', '7_1', '7_2']).status('unavailable');

    // $(document).on('click', '#btn-nuevo', function (evento) {


    function dibujarAsientos() {
        let firstSeatLabel = 1;
        //inicializacmos el sc
        sc = $('#seat-map').seatCharts({
            map: miMapa,
            seats: {
                f: {
                    price: 100,
                    classes: 'first-class', //your custom CSS class
                    category: 'First Class'
                },
                e: {
                    price: 40,
                    classes: 'economy-class', //your custom CSS class
                    category: 'Economy Class'
                }

            },
            naming: {
                top: false,
                getLabel: function (character, row, column) {
                    return firstSeatLabel++;
                },
            },
            legend: {
                node: $('#legend'),
                items: [
                    ['f', 'available', 'First Class'],
                    ['e', 'available', 'Economy Class'],
                    ['f', 'unavailable', 'Already Booked']
                ]
            },
            click: function () {
                if (this.status() == 'available') {
                    //let's create a new <li> which we'll add to the cart items
                    $('<li>' + this.data().category + ' Seat # ' + this.settings.label + ': <b>$' +
                        this.data().price +
                        '</b> <a href="#" class="cancel-cart-item">[cancel]</a></li>')
                        .attr('id', 'cart-item-' + this.settings.id)
                        .data('seatId', this.settings.id)
                        .appendTo($cart);

                    /*
                     * Lets update the counter and total
                     *
                     * .find function will not find the current seat, because it will change its stauts only after return
                     * 'selected'. This is why we have to add 1 to the length and the current seat price to the total.
                     */
                    $counter.text(sc.find('selected').length + 1);
                    $total.text(recalculateTotal(sc) + this.data().price);

                    return 'selected';
                } else if (this.status() == 'selected') {
                    //update the counter
                    $counter.text(sc.find('selected').length - 1);
                    //and total
                    $total.text(recalculateTotal(sc) - this.data().price);

                    //remove the item from our cart
                    $('#cart-item-' + this.settings.id).remove();

                    //seat has been vacated
                    return 'available';
                } else if (this.status() == 'unavailable') {
                    //seat has been already booked
                    return 'unavailable';
                } else {
                    return this.style();
                }
            }
        });

    }
    function borrarTodo() {
        $('.seatCharts-row').remove();
        $('.seatCharts-legendItem').remove();
        $('#seat-map,#seat-map *').unbind().removeData();

    }
    function recalculateTotal(sc) {
        var total = 0;

        //basically find every selected seat and sum its price
        sc.find('selected').each(function () {
            total += this.data().price;
        });

        return total;
    }
    function crearStrFila() {
        strFila = "";
        asientos_derecho = parseInt($("#asientos_derecho").val());
        asientos_izquierdo = parseInt($("#asientos_izquierdo").val());
        for (let index = 0; index < asientos_derecho; index++) {
            strFila += "e"
        }
        strFila += "_"
        for (let index = 0; index < asientos_izquierdo; index++) {
            strFila += "e"
        }
        console.log(strFila);

    }
    function crearFilas(params) {
        numero_filas = parseInt($("#numero_filas").val());
        for (let index = 0; index < numero_filas; index++) {
            miMapa.push(strFila);
        }
        console.log(miMapa);
    }
});

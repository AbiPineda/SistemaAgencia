<!--para simular la compra usar 
usuario sb-fomez260021@personal.example.com
password 6$BO_Nm@-->

  <script
    src="https://www.paypal.com/sdk/js?client-id=AYBxpDiCPENjEjXEShxiZHedWBvHjRLKGdhPAlU0yIbGaF3rYMr9rsdmyAbikjHBh-v1tsKijMXD1lnx"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
  </script>

  <div id="paypal-button-container"></div>
  
<script>
  // Customize button (optional)
   
    
    
    paypal.Buttons({
        
        locale: 'en_US',
            style: {
             size: 'responsive',
             color: 'blue',
             shape: 'pill',
             label: 'paypal',
             tagline : false,
             layout: 'horizontal'///quitando esta linea se habilita para pagar por tarjeta de credito
            
            },
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '20.01'
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
        alert('Transaccion completada ' + details.payer.name.given_name + 'por un monto de $20.00x');
      });
    }
  }).render('#paypal-button-container');
  //This function displays Smart Payment Buttons on your web page.
</script>

  
<?php

include_once './boton2.php';
?>

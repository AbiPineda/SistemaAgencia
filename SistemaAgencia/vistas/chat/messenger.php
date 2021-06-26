<!-- INICIALIZACION -->
<?php include_once '../../config/parametros.php'; ?>
<html>

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Martínez T&T</title>
   <!-- Tell the browser to be responsive to screen width -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="<?= $base_url ?>plugins/fontawesome-free/css/all.min.css">

   <!-- Ionicons -->
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- overlayScrollbars -->
   <link rel="stylesheet" href="<?= $base_url ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="<?= $base_url ?>dist/css/adminlte.min.css">
   <!-- COLOCAR ESTILOS ADICIONALES AQUI -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
      integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="../../css/messenger.css">
   <!--COTINUANDO CON LA INICIALIZACION -->
   <?php include_once '../../plantillas/navbar.php'; ?>
   <?php include_once '../../plantillas/barra_lateral.php'; ?>




   <div class="content-wrapper" style="min-height: 1185.73px;">

      <!-- Main content -->
      <section class="content">

         <div class="main-wrapper">

            <div class="flex-box">
               <div class="box-1">
                  <div class="messenger">
                     <div class="heading"><i class="fab fa-facebook-messenger"></i>&nbsp;<span>Messenger</span></div>
                     <div class="users">
                     </div>
                  </div>
               </div>
               <div class="box-2">
                  <div class="chat-container">
                     <div class="heading"><i class="fas fa-user"></i>&nbsp;<span class="name"></span></div>
                     <div class="messages">
                        <div class="chats" id="chats">
                           <div class="message-container">
                              <img src="http://localhost/plantillas/SistemaAgencia/img/logo.jpg" class="user-image"
                                 style="height: auto;    width: 40%; display: block; margin: auto;" />
                              <span style="text-align: center; display: block; font-size: xxx-large;">seleccione un
                                 chat</span>
                           </div>
                        </div>
                        <div class="write-message">
                           <div class="message-area">
                              <textarea class="message-input" id="message-input"
                                 placeholder="Escribe tu mensaje"></textarea>
                              <button id="btn-enviar" class="send-btn"><i
                                    class="fab fa-telegram-plane"></i>&nbsp;Send</button>
                           </div>
                        </div>

                     </div>

                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <?php include_once '../../plantillas/footer.php'; ?>
   <!-- PONER SCRIPT ADICIONALES ACA -->
   <script type="text/javascript" src="../../js/controladores/conf.js"></script>
   <!-- Firebase App is always required and must be first -->
   <script src="https://www.gstatic.com/firebasejs/5.7.0/firebase-app.js"></script>
   <!-- Add additional services that you want to use -->
   <script type="text/javascript" src="../../js/controladores/chat/chat.js"></script>

   <!-- CIERRE DE ETIQUETAS -->
   <?php include_once '../../plantillas/cierre.php'; ?>
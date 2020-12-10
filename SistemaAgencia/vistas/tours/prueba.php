"
<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

   <h4>A PHP Error was encountered</h4>

   <p>Severity: Notice</p>
   <p>Message: Undefined property: Usuario::$Imagen_model</p>
   <p>Filename: core/Model.php</p>
   <p>Line Number: 73</p>


   <p>Backtrace:</p>








   <p style="margin-left:10px">
      File: C:\wamp64\www\API-REST-PHP\application\models\Usuario_model.php<br />
      Line: 45<br />
      Function: __get </p>




   <p style="margin-left:10px">
      File: C:\wamp64\www\API-REST-PHP\application\controllers\Usuario.php<br />
      Line: 29<br />
      Function: createAccount </p>




   <p style="margin-left:10px">
      File: C:\wamp64\www\API-REST-PHP\application\libraries\REST_Controller.php<br />
      Line: 688<br />
      Function: registroUser_post </p>






   <p style="margin-left:10px">
      File: C:\wamp64\www\API-REST-PHP\index.php<br />
      Line: 290<br />
      Function: require_once </p>




</div>
<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

   <h4>An uncaught Exception was encountered</h4>

   <p>Type: Error</p>
   <p>Message: Call to a member function guardarGaleria() on null</p>
   <p>Filename: C:\wamp64\www\API-REST-PHP\application\models\Usuario_model.php</p>
   <p>Line Number: 45</p>


   <p>Backtrace:</p>


   <p style="margin-left:10px">
      File: C:\wamp64\www\API-REST-PHP\application\controllers\Usuario.php<br />
      Line: 29<br />
      Function: createAccount </p>



   <p style="margin-left:10px">
      File: C:\wamp64\www\API-REST-PHP\application\libraries\REST_Controller.php<br />
      Line: 688<br />
      Function: registroUser_post </p>





   <p style="margin-left:10px">
      File: C:\wamp64\www\API-REST-PHP\index.php<br />
      Line: 290<br />
      Function: require_once </p>



</div>"
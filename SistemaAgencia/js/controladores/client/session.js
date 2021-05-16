firebase.auth().onAuthStateChanged(function (user) {
   //VERIFICAMOS QUE EL ADMINISTRADOR ESTA LOGUEADO
   if (user) {
     console.log("esta logueado")
   } else {
     console.log("no esta logueado");
   }
 });
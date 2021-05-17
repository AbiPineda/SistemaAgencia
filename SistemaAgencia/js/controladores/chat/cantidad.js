function obenerChats() {

   // const query = db.collection("chat");
   // const snapshot = await query.get();
   // console.log(snapshot.size)
   // snapshot.forEach((doc) => {
   //    console.log(doc)
   // });


   $.ajax({
      url: "http://localhost/API-REST-PHP/Usuario/obtenerAdminByChat",
      method: "GET"
   }).done(function (response) {
      // //CARGAMOS EL COSTO AL INPUT
      let time = new Date(response.ultimaConexion);
      db.collection("chat")
         .where("user_1_uuid",'!=', response.uuid)
         .where("time", ">", time)
         .get()
         .then((snapshot) => {
            console.log(snapshot.size);
            $('#mensajesPendientes').text(snapshot.size);
         })
         .catch((e) => {
            console.log(e);
         });

      ;
   }).fail(function (response) {
      console.log(response);

   });

}

obenerChats();
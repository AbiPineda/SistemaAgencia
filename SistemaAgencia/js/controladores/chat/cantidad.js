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
       let count = 0;
      db.collection("chat")
         .where("time", ">", response.ultimaConexion)
         .get()
         .then((chats) => {
            chats.forEach(chat => {
               if (chat.data().user_1_uuid != response.uuid) {
                  count++;
               }
            });
            $('#mensajesPendientes').text(count);
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
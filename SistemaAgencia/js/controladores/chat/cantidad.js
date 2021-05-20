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
      let listChats = [];
      console.log(response.ultimaConexion);
      db.collection("chat")
         // .where("time", ">", response.ultimaConexion)
         .get()
         .then((chats) => {
            chats.forEach(chat => {
               listChats.push(chat.data().chat_uuid);
            });
            let chatsUnicos = listChats.filter(unique);
            $('#mensajesPendientes').text(chatsUnicos.length);
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

function unique(value, index, self) {
   return self.indexOf(value) === index
}

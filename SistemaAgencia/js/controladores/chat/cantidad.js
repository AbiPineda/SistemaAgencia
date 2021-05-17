function obenerChats() {

   // const query = db.collection("chat");
   // const snapshot = await query.get();
   // console.log(snapshot.size)
   // snapshot.forEach((doc) => {
   //    console.log(doc)
   // });



   db.collection("chat").get().then((snapshot) => {
      $('#mensajesPendientes').text(snapshot.size);
   });
}

obenerChats();
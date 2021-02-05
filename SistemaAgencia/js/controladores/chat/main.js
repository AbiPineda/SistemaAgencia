inicializarValidaciones();

$("#register-btn").on("click", function (e) {
  e.preventDefault();

  let btnHTML = $(this).html();
  $(this).html("<img id='loader' src='img/loader.svg' alt='Loading...!' />");

  let myData = {
    "nombre": document.getElementById("fullname").value,
    "correo": document.getElementById("email").value,
    "password": document.getElementById("email").value,
    "celular": "12334562",
    "nivel": "USUARIO",
  };
  $.ajax({
    url: "http://localhost/API-REST-PHP/Usuario/registroUser",
    method: "POST",
    data: myData,
    success: function (response) {
      $("#register-btn").html(btnHTML);
      console.log(response);
      $("#register-form").trigger("reset");
      changeForm($(".login-register-btn"));
    },
    error: function (er) {
      console.log(er);
    },
  });
});

$("#login-btn").on("click", function () {
  let btnHTML = $(this).html();
  $(this).html("<img id='loader' src='img/loader.svg' alt='Loading...!' />");

  $.ajax({
    url: "http://localhost/API-REST-PHP/Usuario/loginUser",
    method: "POST",
    data: $("#login-form").serialize()
  }).done(function (resp) {
    if (!resp.err) {
      let token = resp.token;
      console.log(resp.message);
      firebase
        .auth()
        .signInWithCustomToken(token)
        .catch(function (error) {
          // Handle Errors here.
          let errorCode = error.code;
          let errorMessage = error.message;

          alert(errorMessage);
        })
        .then(function (data) {
          $("#login-btn").html(btnHTML);
          if (data.user.uid != "") {
            window.location.href = "chat.php";
          }
        });
    } else {
      alert(response.message);
    }
  }
  ).fail(function (resp) {
    if (resp.responseJSON.err) {
      if (resp.responseJSON.mensaje == 'EMAIL_NOT_FOUND') {
        const Toast = Swal.mixin();
        Toast.fire({
          title: 'Oops...',
          icon: 'error',
          text: 'Correo electrónico no registrado',
          showConfirmButton: true,
        });
      }
      else if (resp.responseJSON.mensaje == 'INVALID_EMAIL') {
        const Toast = Swal.mixin();
        Toast.fire({
          title: 'Oops...',
          icon: 'error',
          text: 'Correo electrónico no valido',
          showConfirmButton: true,
        });
      }
    } else {
      const Toast = Swal.mixin();
      Toast.fire({
        title: 'Oops...',
        icon: 'error',
        text: 'Credenciales no validas',
        showConfirmButton: true,
      });
    }
    $("#login-btn").html(btnHTML);

  });
});

$(".login-register-btn").on("click", function () {
  changeForm(this);
});

function changeForm($this) {
  $($this).children("span").toggleClass("active");

  $(".content").toggleClass("active");
}
$(".card input").on("focus blur", function () {
  $(".card").toggleClass("active");
});

function inicializarValidaciones() {
  console.log("cargando validaciones ")
  $('#login-form').validate({
    rules: {
      username: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 4
      }
    },
    messages: {
      username: {
        required: "Ingrese el correo",
        email: "Ingrese un correo valido"
      },
      password: {
        required: "Ingrese la contraseña",
        minlength: "Debe tener una longitud minima de 4"
      }
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');

    }
  });
}
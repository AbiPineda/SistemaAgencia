inicializarValidaciones();

$("#login-btn").on("click", function () {
  const Toast = Swal.mixin();
  let form = $("#login-form");
  form.validate();
  if (form.valid()) {
    let btnHTML = $(this).html();
    $(this).html("<img id='loader' src='img/loader.svg' alt='Loading...!' />");
    $.ajax({
      url: URL_SERVIDOR+"Usuario/loginUser",
      method: "POST",
      data: $("#login-form").serialize()
    }).done(function (resp) {
      //NUESTRO SERVICIO RETORNARA UN TOKEN QUE ES EL
      // QUE OCUPAREMOS PARA MANEJAR LA SESION DEL USUARIO
      if (!resp.err) {
        if (resp.nivel == 'EMPLEADO' || resp.nivel == 'ADMINISTRADOR') {
          //aqui estamos guardando la foto de perfil del usuario          
          initPreferencias(resp);
          let token = resp.token;
          firebase
            .auth()
            .signInWithCustomToken(token)
            .then(function (data) {
              $("#login-btn").html(btnHTML);
              if (data.user.uid != "") {
                console.log(resp);
                $.post("vistas/cliente/session.php", { action: "start", nivel: resp.nivel },
                  function (data) {
                    location = 'home.php';
                  });
              }
            }).catch(function (error) {
              // Handle Errors here.
              let errorCode = error.code;
              let errorMessage = error.message;
              alert(errorMessage);
            });
        } else {
          $("#login-btn").html(btnHTML);
          Toast.fire({
            title: 'Oops...',
            icon: 'error',
            text: 'No tienes los permisos necesarios',
            showConfirmButton: true,
          });
        }
      } else {
        Toast.fire({
          title: 'Oops...',
          icon: 'error',
          text: 'Credenciales no validas',
          showConfirmButton: true,
        });
      }

    }).fail(function (resp) {
      console.log(resp)
      if (resp.responseJSON.err) {
        if (resp.responseJSON.mensaje == 'EMAIL_NOT_FOUND') {

          Toast.fire({
            title: 'Oops...',
            icon: 'error',
            text: 'Correo electrónico no registrado',
            showConfirmButton: true,
          });
        }
        else if (resp.responseJSON.mensaje == 'INVALID_EMAIL') {
          Toast.fire({
            title: 'Oops...',
            icon: 'error',
            text: 'Correo electrónico no valido',
            showConfirmButton: true,
          });
        }
      } else {
        Toast.fire({
          title: 'Oops...',
          icon: 'error',
          text: 'Credenciales no validas',
          showConfirmButton: true,
        });
      }
      $("#login-btn").html(btnHTML);

    });

  } else {
    Toast.fire({
      title: 'Oops...',
      icon: 'error',
      text: 'Digite Credenciales',
      showConfirmButton: true,
    });
  }


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
function initPreferencias(resp) {
  console.log(resp);
  localStorage.setItem("id_cliente", resp.id_cliente);
  localStorage.setItem("nombre", resp.nombre);
  localStorage.setItem("correo", resp.correo);
  localStorage.setItem("nivel", resp.nivel);
  localStorage.setItem("celular", resp.celular);
  localStorage.setItem("dui", resp.dui);
  localStorage.setItem("foto", resp.foto);
  localStorage.setItem("user_uuid", resp.user_uuid);
}
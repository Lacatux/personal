$( document ).ready(function()
{
  $("#formulario").on("input", function(event)
  {
    $("#formulario input").css("background-color", "white");
    var email = $("#email").val();
    var indice = email.indexOf('@');

    var pass1 = $("#password").val();
    var pass2 = $("#repassword").val();
    var mensajeError = "";

    if(pass1 != pass2)
    {
      event.preventDefault();
      $("#repassword").css("background-color", "red");
      mensajeError += "Las contraseñas no coinciden.";
      $("#mensajeError > p").text(mensajeError);
      $("#mensajeError").show();
    }

    if(indice <= 0)
    {
      event.preventDefault();
      $("#email").css("background-color", "red");
      mensajeError += "El email debe contener una @.";
      $("#mensajeError > p").text(mensajeError);
      $("#mensajeError").show();
    }

  });

  $("#repassword").on("change textInput input", function()
  {
    var pass1 = $("#password").val();
    var pass2 = $("#repassword").val();

    if(pass1 != pass2)
    {
      $("#repassword").css("background-color", "red");
    } else
    {
      $("#repassword").css("background-color", "green");
    }
  });
});

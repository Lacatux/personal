$(document).ready(function()
{
  var error;
  $('#formulario').submit(function(event)
  {
    var pass1 = $('#password').val();
    var pass2 = $('#repassword').val();
    var mensajeError = "";
//CONTRASEÑA
    if (pass1 != pass2) {
      event.preventDefault();
      $("#repassword").css("background-color", "red");
      mensajeError += "las contraseñas no coinciden"
      $("#mensajeError > p").text(mensajeError);
      $("#mensajeError").show();
    }
    //MAYUSCULAS
    var user = $('#user').val();

    for(var i = 0; i <= user.length; i++){
      if(user.charCodeAt(i) >=65 && user.charCodeAt(i) <= 90)
      {
      event.preventDefault();
      console.log(user);
      mensajeError += "los usuarios NO deben contener MAYUSCULAS"
      $("#mensajeError > p").text(mensajeError);
      $("#mensajeError").show();
      }
    }
    //USUARIO EXISTE
    if (error = 1)
    {
      event.preventDefault();
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

  $("#user").on("change textInput input", function()
  {
    var user = $(this).val();
    var parametros = {function: 'comprobarUsuario', user: user};
    //console.log(parametros);
    $.ajax(
      {
        data:parametros,
        url:"http://127.0.0.1/grupo_musical/servicios.php",
        type:"post",
        success:function(response)
        {
          var usuariosArray = $.parseJSON(response);
          //console.log(usuariosArray);
          if (usuariosArray.length == 0) {
            //console.log("Usuario no existe");
            $('#resultado').html("Usuario no existe")
            error=0;
          }else {
            //console.log("usuario existe");
            $('#resultado').html("Usuario existe")
            error = 1;
          }
        },
        error:function(err)
        {
          console.log(err);
        }
      });


  });
});

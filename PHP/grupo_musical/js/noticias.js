$(document).ready(function()
{
  $(".primerbox").on("change", function(){
    var idtag = $(this).val();

    var parametros = {function: 'noticiasbyid_tag', id_tag: idtag};
    $.ajax({
      data: parametros,
      url: "http://127.0.0.1/grupo_musical/servicios.php",
      type:"post",
      success:function(response)
      {
        var noticiasArray = $.parseJSON(response);
        console.log(noticiasArray);
        var tamArray = noticiasArray.length;
        $(".segundobox").html("");
        $(".tercerbox").html("");
        $("#detallesNoticia").html("");
        $(".segundobox").append("<option></option>");
        for(var i = 0; i < tamArray; i++)
        {
          var noticia = noticiasArray[i];
          var htmlNoticia = "<option value='"+noticia.fecha+"%'>" + noticia.fecha + "</option>";
          $(".segundobox").append(htmlNoticia);
        }
      },
      error:function(err)
      {
        console.log(err);
      }
    });
  });

  $(".segundobox").on("change", function(){
    var idtag = $('.primerbox').val();
    var fecha = $(this).val();
      var parametros = {function: 'noticiasytags', id_tag: idtag, fecha:fecha};
      console.log(parametros);

      $.ajax(
      {
        data:parametros,
        url:"http://127.0.0.1/grupo_musical/servicios.php",
        type:"post",
        success:function(response)
        {
          var noticiasArray = $.parseJSON(response);
          var tamArray = noticiasArray.length;
          $(".tercerbox").html("");
          $("#detallesNoticia").html("");
          $(".tercerbox").append("<option></option>");
          for(var i = 0; i < tamArray; i++)
          {
            var noticia = noticiasArray[i];
            var htmlNoticia = "<option value='"+noticia.id_noticia+"'>"+noticia.nombre+ "-"+ noticia.titulo + "-"+noticia.fecha+"</option>";
            console.log();
            $(".tercerbox").append(htmlNoticia);
          }
        },
        error:function(err)
        {
          console.log(err);
        }
      });
  });

  $('.tercerbox').on("change", function(){
    var id_noticia = $(this).val();

    var parametros = {function: 'noticiasbyid', id_noticia: id_noticia};
    $.ajax({
      data: parametros,
      url: "http://127.0.0.1/grupo_musical/servicios.php",
      type:"post",
      success:function(response)
      {
        var noticiaJson = $.parseJSON(response);
        var htmlNoticia = "<h1>" + noticiaJson.titulo + "</h1>";
        htmlNoticia += "<img src='" + noticiaJson.imagen + "' />";
        htmlNoticia += "<p>" + noticiaJson.texto + "</p>";
        $("#detallesNoticia").html(htmlNoticia);

      },
      error:function(err)
      {
        console.log(err);
      }
    });
  });

});

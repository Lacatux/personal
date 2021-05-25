$(document).ready(function () {
  $("h2").click(function () {
    $(this).parent().children(".juego").toggle();
  });
  $('#logo').mouseenter(function () {
    $("#logo").animate({ "width": "300px", "height": "300px" }, 1000);
  });
  $('#logo').mouseleave(function () {
    $("#logo").animate({ "width": "140px", "height": "140px" }, 1000);
  });

  $('.botonMas').click(function () {
    var idPadre = $(this).parent().attr('id');
    var id = 0;
    if (idPadre == "RPG") {
      id = 1;
    } else if (idPadre == "Deportes") {
      id = 3;
    } else if (idPadre == "Estrategia") {
      id = 5;
    } else if (idPadre == "Accion") {
      id = 6;
    }

    var parametros = { 'id': id, 'function': 'juegosCategoria' };
    $.ajax(
      {
        data: parametros,
        url: 'http://127.0.0.1/proyecto3/servicios.php',
        type: 'post',
        success: function (response) {
          var arrayJuegos = $.parseJSON(response);
          for (var i = 2; i < arrayJuegos.length; i++) {
            var juego = arrayJuegos[i];
            var htmlJuego = "<div id='rpg" + juego.idJuego + "' class='juego'>";
            htmlJuego = htmlJuego + "<img src='" + juego.imagen + "' alt='Portada' class='portadaJuego'/>";
            htmlJuego = htmlJuego + "<h3>" + juego.titulo + "</h3>";
            htmlJuego += "<p>" + juego.texto + "Precio:<span>" + juego.precio + "€</span></p>";
            htmlJuego += "<a href='detalles.php?id=" + juego.idJuego + "'>Más información</a>";
            htmlJuego += "<div class='floatClear'></div>";
            htmlJuego += "</div>";

            $("#" + idPadre).append(htmlJuego);
          }
        },
        error: function (error) {
          console.log(error);
        }
      }
    );
  });

  ("#cbCategorias").on("input", function () {

  });
  
});





































/**/

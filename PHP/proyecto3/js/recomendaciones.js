$(document).ready(function () {
  $("#filtro").on("input", function () {
    var textoFiltro = $("#filtro").val();
    var campoFiltrar = $("#campos").val();

    var resto = 0;
    if (campoFiltrar == "nombre") {
      resto = 0;
    } else if (campoFiltrar == "precio") {
      resto = 1;
    } else if (campoFiltrar == "categoria") {
      resto = 2;
    }

    $("#tablaRecomendaciones td").each(function (index) {
      if (index % 3 == resto) {
        var texto = $(this).text();
        if (!texto.includes(textoFiltro)) {
          $(this).parent('tr').hide();
        } else {
          $(this).parent('tr').show();
        }
      }
    });

  });

  /*
  $("#tablaRecomendaciones tr").each(function(index)
  {
    $(this).children("td").each(function(i)
    {
      if(i == 0)
      {
        var texto = $(this).text();
        if(!texto.includes(textoFiltro))
        {
          $(this).closest("tr").hide();
        }
      }
    });
  });
  */
  $("#limpiarFiltro").click(function () {
    $("#tablaRecomendaciones tr").show();
    $("#filtro").val('');
  });
});

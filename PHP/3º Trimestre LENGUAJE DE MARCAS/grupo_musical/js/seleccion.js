$(document).ready(function()
{
  $('.editar').click(function(){
    var idnoticia = $(this).val();
    console.log(idnoticia);
  });

  $('#filtro').on("input",function(){
    var textoFiltro = $("#filtro").val();

    $("#tablaNoticias td").each(function(index)
    {
      if(index % 4 == 1)
      {
        var texto = $(this).text();
        if(!texto.includes(textoFiltro))
        {
          $(this).parent('tr').hide();
        } else {
          $(this).parent('tr').show();
        }
      }
    });
  });

  $('.borrar').click(function()
  {
    var mensaje = confirm("¿Quieres borrar la noticia?");
    if (mensaje == true)
    {

    }
    else {
      return false;
    }
  });
});

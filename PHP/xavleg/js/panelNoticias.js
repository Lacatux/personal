$(document).ready(function () {
    $("#filtro").on("input", function () {
        var textoFiltro = $("#filtro").val();
        $("#tablaNoticias td").each(function (index) {
            if (index % 4 == 1) {
                var texto = $(this).text();
                if (!texto.includes(textoFiltro)) {
                    $(this).parent('tr').hide();
                } else {
                    $(this).parent('tr').show();
                }
            }
        });
    });
    $('.borrar').click(function (event) {
        if (confirm("¿Desea eliminar esta tabla?")) {
            
        } else {
            event.preventDefault();
        }
    });
});

$(document).ready(function () {
    $("#asc").hide();
    $("#orden").click("input", function () {

        if ($(this).is(":checked")) {
            $("#desc").hide();
            $("#asc").show();
        } else {
            $("#asc").hide();
            $("#desc").show();
        }
    });
    $("#enviar").click(function (event) {
        var num = $("#num").val();
        var orden;
        if ($.isNumeric(num)) {
            if (num < 6 && num >= 0) {
                if ($("#orden").is(":checked")) {
                    orden = 0;
                } else {
                    orden = 1;
                }
                var parametros = { number: num, order: orden };
                $.ajax({
                    data: parametros,
                    url: "http://127.0.0.1/PHP/xavleg/servicios.php",
                    type: "post",
                    success: function (response) {
                        var noticiasArray = $.parseJSON(response);
                        var tamArray = noticiasArray.length;
                        for (var i = 0; i < tamArray; i++) {
                            var noticia = noticiasArray[i];
                            var htmlNoticia = "<option value='" + noticia.titulo + "'>" + noticia.titulo + "-" + noticia.texto + "-" + noticia.fecha + "</option>";
                            $("#noticias").append(htmlNoticia);
                        }
                    },
                    error: function (err) {
                        console.log(err);
                    }
                });
            } else {
                alertDatosIncorrectos(event);
            }
        } else {
            alertDatosIncorrectos(event);
        }
    });


    function alertDatosIncorrectos(event) {
        event.preventDefault();
        alert("Inserte datos correctos.")
    }
});
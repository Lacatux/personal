$(document).ready(function () {
    $("#send").click(function (event) {
        var fechaMax = new Date(2022, 0, 01,);
        var fechaInicio = new Date($('[id$=fecha_in]').val());
        var fechaFin = new Date($('[id$=fecha_fin]').val());
        var parametros = { fecha_in: fechaInicio, fecha_fin: fechaFin };
        console.log(parametros);
        if (fechaMax > fechaFin) {
            if (fechaFin != null && fechaInicio != null) {
                $.ajax({
                    url: "fechasphp.php",
                    type: "POST",
                    data: parametros,
                    success:function(datos){
                        console.log(datos)
                    }
                });
            }
        } else {
            event.preventDefault();
        }
    });
});
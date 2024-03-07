
var ajaxPeliculas = function (accion, url, formulario) {

    var datos = $('#' + formulario).serializeArray();
    datos.push({ name: 'accion', value: accion });
    $.ajax({
        url: url,
        data: datos,
        type: "POST",
        datatype: "JSON",
        success: function (response) {
            try {
                const peliculas = JSON.parse(response);
                if (peliculas !== null) {
                    $.each(peliculas.peliculas, function (index, pelicula) {
                        $('#tablaPeliculas tbody').append(
                            "<tr><td>" + pelicula.idp + "</td>" +
                            "<td>" + pelicula.titulo + "</td>" +
                            "<td>" + pelicula.genero + "</td>" +
                            "<td>" + pelicula.duracion + "</td>" +
                            "<td>" + pelicula.clasificacion + "</td>" +
                            "</tr>"
                        )
                    });
                }
            }catch(e){
                console.log(e);
            }
        }
    })
}
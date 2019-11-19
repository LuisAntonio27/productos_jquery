$(document).ready(function () {
    $.ajax({
        method: "GET",
        url: "productos.json",
        dataType: "json"
    }).done(function (data) {
        imprimirLista(data);
    });

    function imprimirLista(lista) {
        console.log(lista);
        var lista_html = '<ul class="list-group list-group-flush">';
        $.each(lista, function (key, value) {
            lista_html += '<li class="list-group-item">';
            lista_html += value.nombre;
            lista_html += '<button class="btn btn-info ml-3" id="' + value.id + '">';
            lista_html += "Ver detalle";
            lista_html += "</button>";
            lista_html += '</li>';
        });
        lista_html += '</ul>';
        $('h1 + div').html(lista_html);
        $("button").click(function () {
            imprimirDetalle($(this).attr("id"));
        });
    }

    function imprimirDetalle(id) {
        $.ajax({
            method: "GET",
            url: "productos.json",
            dataType: "json"
        }).done(function (data) {
            imprimirListaDetalle(id, data);
        });
    }

    function imprimirListaDetalle(id, lista) {
        var lista_html = '<div class="card-deck">';
        lista_html += '<div class="card">';
        $.each(lista, function (key, value) {
            if (id == value.id) {
                lista_html += '<img class="card-img-top" src="images/productos/' + value.id + '.jpg"/>';
                lista_html += '<div class="card-body">';
                lista_html += '<h5 class="card-title">' + value.nombre + '</h5>';
                lista_html += '<p class="card-text">$' + value.precio + '</p>';
                lista_html += '<p class="card-text"><small class="text-muted">' + value.codigo + '</small></p>';
                lista_html += '</div>';
            }
        });
        lista_html += '</div>';
        lista_html += '</div>';
        $('#lista-detalle').html(lista_html);
    }
});
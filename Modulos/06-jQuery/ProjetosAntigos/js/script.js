$(document).ready(function () {
    $("#formAjax").on("submit", function (e) {
        e.preventDefault();
        var txt = $(this).serialize();

        $.ajax({
            type: 'GET',
            url: 'ajax.php',
            data: txt,
            success:function (resultado) {
                $("#div").html("Resultado: " + resultado)
            },
            error:function () {
                alert("ocorreu um erro na requisição");
            }
        });
    });

    $("#formJson").on("submit", function (e) {
        e.preventDefault();
        var txt = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: 'ajax.php',
            data: txt,
            dataType: 'json ',
            success:function (resultado) {
                $("#div").html("nome: " + resultado.nome +" com "+ resultado.qt_nome +" letras")
            },
            error:function () {
                alert("ocorreu um erro na requisição");
            }
        });
    });
});
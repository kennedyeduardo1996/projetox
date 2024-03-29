$(document).ready(function () {
    var campoEscolha;
    $("input").on("focus", function () {
        var pos = $(this).offset();
        var width = $(this).width();
        $(".horaescolha").css({"left": pos.left + width, "top": pos.top});
        $(".horaescolha").show();
        campoEscolha = $(this);

    });
    $("input").on("blur", function () {
        setTimeout(function () {
            $(".horaescolha").hide();
        },200);

    });

    $(".horaescolha button").on("click", function () {
        var valor = $(this).html();
        campoEscolha.val(valor);

    });


});
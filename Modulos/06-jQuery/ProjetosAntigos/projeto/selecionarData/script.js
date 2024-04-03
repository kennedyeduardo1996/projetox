$(document).ready(function () {
    var campoEscolha;
    $("input").on("focus", function () {
//        offset retorna uma array 
//        com top e left doque foi selecionado
        var pos = $(this).offset();
        var width = $(this).width();
        $(".horaescolha").css({"left": pos.left + width, "top": pos.top});
        $(".horaescolha").show();
        campoEscolha = $(this);

    });
    $("input").on("blur", function () {
//        função que executa apos certo tempo
        setTimeout(function () {
            $(".horaescolha").hide();
        },200);

    });

    $(".horaescolha button").on("click", function () {
        var valor = $(this).html();
//      campoEscolha = $(this) o campo que foi selecionado
        campoEscolha.val(valor);

    });


});
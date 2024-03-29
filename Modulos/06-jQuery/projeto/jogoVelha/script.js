var vez = "x";
$(document).ready(function () {
    atualizarPlacar();

    $(".area").bind("click", function () {
        if ($(this).find("img").length == 0) {
            var jogada = $("<img src='" + vez + ".jpg' width='80'>");
            $(this).attr("data-marcado", vez);
            $(this).html(jogada);

            if (vez == "o") {
                vez = "x";
            } else {
                vez = "o";
            }
        }
        atualizarPlacar();

        setTimeout(function () {
            verificaCampeao();
            verificaPreenchimento();
        }, 200);


    });
});

function atualizarPlacar() {

    if (vez == "x") {
        $(".placar img").attr("src", "x.jpg");
    } else {
        $(".placar img").attr("src", "o.jpg");
    }
};

function verificaCampeao() {
    var a1 = $(".a1").attr("data-marcado");
    var a2 = $(".a2").attr("data-marcado");
    var a3 = $(".a3").attr("data-marcado");
    var b1 = $(".b1").attr("data-marcado");
    var b2 = $(".b2").attr("data-marcado");
    var b3 = $(".b3").attr("data-marcado");
    var c1 = $(".c1").attr("data-marcado");
    var c2 = $(".c2").attr("data-marcado");
    var c3 = $(".c3").attr("data-marcado");

    var ganhador = "";
    for (var i = 0; i <= 1; i++) {
        if (i == 0) {
            var op = "o";
        } else {
            var op = "x";
        }

        if (a1 == op && b1 == op && c1 == op) {
            ganhador = op;
        } else if (a2 == op && b2 == op && c2 == op) {
            ganhador = op;
        } else if (a3 == op && b3 == op && c3 == op) {
            ganhador = op;
        } else if (a1 == op && a2 == op && a3 == op) {
            ganhador = op;
        } else if (b1 == op && b2 == op && b3 == op) {
            ganhador = op;
        } else if (c1 == op && c2 == op && c3 == op) {
            ganhador = op;
        } else if (a1 == op && b2 == op && c3 == op) {
            ganhador = op;
        } else if (a3 == op && b2 == op && c1 == op) {
            ganhador = op;
        }
    }
    if (ganhador != "") {

        if (ganhador == "0") {
            alert("O jogador " + ganhador + " ganhou!")
            $(".area").html("");
            $(".area").attr("data-marcado", "");
        } else {
            alert("O jogador " + ganhador + " ganhou!")
            $(".area").html("");
            $(".area").attr("data-marcado", "");
        }

    }

};

function verificaPreenchimento() {
    var verifica = 0;
    $(".area").each(function () {
        if ($(this).find("img").length != 0) {
            verifica++;
        }
    });
    console.log(verifica);
    if (verifica == 9) {
        alert("Ninguem ganhou!");
        $(".area").html("");
        $(".area").attr("data-marcado", "");

    }
};
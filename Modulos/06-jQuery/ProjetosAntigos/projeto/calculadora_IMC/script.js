$(document).ready(function () {
    $("input#enviar").on("click", function (e) {
        e.preventDefault();
        var altura = $("#altura").val();
        var peso = $("#peso").val();
        var altura = altura.replace(",", ".");
        var imc = peso / (altura * altura);
        if (imc < 16) {
            var media = "Baixo peso muito grave";
        } else if (imc >= 16 && imc <= 16.99) {
            var media = "Baixo peso grave";
        } else if (imc >= 17 && imc <= 18.49) {
            var media = "Baixo peso grave";
        } else if (imc >= 18.5 && imc <= 24.99) {
            var media = "Peso normal";
        } else if (imc >= 25) {
            var media = "Gordo";
        }
        $("#resultado").html("Seu IMC �: " + imc + "kg/m�, vc est� " + media);


    });
});

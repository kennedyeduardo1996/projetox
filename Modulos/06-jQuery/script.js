$(document).ready(function () {
//    o $(".minhaclass") retorna um array
//     então o length conta os elemmentos 
//     dentro do array e verifica se tem mais de 0
    if ($(".minhaclass").length > 0) {
        alert("Existe essa class");
    }
    // mudar atributo
    $("#primeirolink").attr("href", "https://www.google.com/");
    //salva o valor na var (https://www.google.com/)
    var link = $("#primeirolink").attr("href");

    $("#item1").html("Texto alterado");
    $("#item2").addClass("estilo");

    $("#meuinput").val("Texto para o input");

    $("#meuinput").after("<h1>h1 com texto adiciondo</h1>");
    $("ul").append("<li>Ultimo item da lista adicionado</li>");


    $("#botao").on("click", function () {
        // animação
        $("#animacao").animate({
            "margin-left": "100px",
//          isso ira somar 50px a cada click no botao
//          "margin-left": "+=50",
            "margin-top": "100px"
        }, {
            duration: 1500,
            start: function () {
                $("#animacao").css("background-color", "blue");
                console.log("animação Começou");
            },
            complete: function () {

                $("#animacao").animate({
                    "margin-left": "0", "margin-top": "0"
                }, 1500);

            }
        });
    });

    /* Ajax se trata de um requisição interna do javascript
     * onde carrega por ex uma pagina dentro de uma div
     * **********************************************************************************
     * **********************************************************************************
     * **********************************************************************************
     */


    $("#botaoajax").on("click", function () {
//    metodo auxciliar do ajax
//    $("#testeajax").load("../05-Bootstrap/grid.php");
//    ou
//    metodo auxciliar do ajax
        $.post("../05-Bootstrap/grid.php", function (t) {
            $("#testeajax").html(t);
        })
    });

    $("#form").on("submit", function (e) {
//      cancela o envio
        e.preventDefault();
        //formata todas as informações do formulario
        //onde ficam prontas para serem enviadas pelo ajax
        var txt = $(this).serialize();
        console.log(txt);
    });



});







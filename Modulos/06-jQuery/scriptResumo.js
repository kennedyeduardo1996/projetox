$(document).ready(function () {

    // mudar atributo
    $("#id").attr("href", "www.google.com");
    // remover atributo
    $("input").removeAttr("checked");


    // mudar conteudo dentro de um elemento
    $("#id").html("<p>mudar conteudo</p>");
    // muda o texto dentro de um elemento
    $("#id").text("novo texto");

    // mudar css de elemento dentro de outro
    $("#id").find("#dentro").css("color", "red");

    // adicionar class e eremover
    $("#id").addClass("principais");
    $("#id").removeClass("principais");

    // verifica se tem a class
    $("#id").hasClass("principais");


    // pegar o valor do input
    $("input").val();

    // inserir elemento antes de certo elemento
    $("div").before("<div>Texto qualquer</div>");
    // inserir elemento depois de certo elemento
    $("div").after("<div>Texto qualquer</div>");

    //insere dentro de elemento (no final)
    $("ul").append("<li>Ultimo item</li>");
    //insere dentro de elemento (no inicio)
    $("ul").prepend("<li>primeiro item</li>");

    // remover elemento
    $("div").remove();

    // Ex pegar 3 elemento de uma lista
    $("li").eq(2);

    // busca nos elementos antecedentes o paramento especificado("#vo")
    $("#irmao").closest("#vo");
    // busca nos elementos filhos o paramento especificado("#irmao")
    $("#vo").find("#irmao");

    // verifica se tem a class
    $("#id").css("color", "red");

    //salva dados na memória
    $("#id").data("var", "valor");

    //retira os espaços em branco antes e depois do texto q tiver na var
    $.trim( variavel );

    //igual o foreach do PHP (faz um loop em todos objetos)
    $("li").each(function () { alert($(this).html()); });

    //retorna o tipo da var
    $.type( variavel );

    //retorn true se for numero
    $.isNumeric( variavel );

    // verificar existencia de elemento
    if ($("#id").length() > 0) {}



/* TESTE AVANÇADO
* **********************************************************************************
* **********************************************************************************
* **********************************************************************************
* **********************************************************************************
* **********************************************************************************
* **********************************************************************************
 */

    // click no botao remove e insere a class
    $("button").bind("click", function () {
        $(this).toggleClass("nomeClass");
    });

    // click duplo no botao
    $("button").bind("dblclick", function () { });

    // Remover evento
    $("button").unbind("click");

    // quando é apertado o botão no esquerdo do mouse
    $("div").on("mousedown",function () { })

    // quando é movimentado o mouse
    $("div").on("mousemove",function () { })

    // durante a rolagem do mouse
    $(window).bind("scroll", function () {  });

    // durante a redimencionagem da página
    $(window).bind("resise", function () {  });

    // Aciona evento
    $("button").trigger("click");

    // Passar mouse no botao
    $("button").mouseover(function () { });
    // Tirar mouse no botao
    $("button").mouseout(function () { });
    // passar o mouse
    $("button").hover(function () { /* mouseover*/ },function () { /* mouseout*/ });

    $("button").bind("click", function (e) {
        // previne a ação do botão(submit)"no caso cancela"
        e.preventDefault();
    });

/* Formulario
* **********************************************************************************
* **********************************************************************************
* **********************************************************************************
 */
    // ao enviar um form
    $("form").on("submit",function (e) {
        e.preventDefault();
    });

    // quando seleciona uma parte do texto digitado
    $("input").on("select",function () { })

    // quando é focado no campo
    $("input").on("focus",function () { })
    // quando é retirado  foco
    $("input").on("blur",function () { })

    // quando um <select> é selecionado ou checkbox
    $("estado").on("change",function () { })

    // quando é apertado o botão no teclado
    $("input").on("keydown",function () { })

    // quando é solto o botão no teclado
    $("input").on("keyup",function (e) {
        if (e.keyCode == 13){ /* 13 == enter */
            console.log($(this).val());
            $(this).val("");
        }
    })

/* Animação
* **********************************************************************************
* **********************************************************************************
* **********************************************************************************
 */
    // div desaparecer (hide)
    $("div").hide();
    // div aparecer (show)
    $("div").show();
    // div aparece e some
    $("div").toggle();


    // div desaparecer devagar
    $("div").show("slow");
    // div desaparecer rapido
    $("div").show("fast");

    // div desaparecer (opacidade)
    $("div").fadeOut();
    // div aparecer (opacidade)
    $("div").fadeIn();
    // div aparece e some
    $("div").fadeToggle();
    // div aparece na opacidade especificada
    $("div").fadeTo("slow", 0.3);

    // div desaparecer (sobe)
    $("div").slideUp();
    // div aparecer (desce)
    $("div").slideDown();
    // div aparece e some
    $("div").slideToggle();
    // div aparece na opacidade especificada
    $("div").slideToggle("slow", 0.3);

    // animação
    $("div").animate({"margin-left" : "100px", "margin-top" : "100px"},
        {
            duration: 1500,
            start: function () {
                console.log("animação Começou");
            },
            complete: function () {
                console.log("animação finalizada");
            }
        });

    // para animação
    $("div").stop();

/* Ajax
* **********************************************************************************
* **********************************************************************************
* **********************************************************************************
 */

    // Carrega o conteudo de um arquivo detro da div
    $("div").load("teste.html");

    // Carrega o conteudo de um arquivo detro da div
    $.get("teste.html",function (t) {
        $("div").html(t);
    });

    $("form").bind("submit",function (e) {
        e.preventDefault();
        //formata todas as informações do formulario
        var txt = $(this).serialize();
    });








});

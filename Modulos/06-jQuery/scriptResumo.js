//quando a pagina ja estiver pronta
// $(function () {... });    
//ou
$(document).ready(function () {

//  passar o jQuery para outra var e 
//  evitar conflito com outra bibliotecas
//  var $j = jQuery.noConflict();

    // mudar atributo
    $("#id").attr("href", "www.google.com");
    // remover atributo
    $("input").removeAttr("checked");
    //pega no valor do atributo
    $("#primeirolink").attr("href");


    // mudar conteudo dentro de um elemento
    $("#id").html("<p>mudar conteudo</p>");
    // muda o texto dentro de um elemento 
    // ficando unicamente como texto mesmo 
    // tento tags será exibido a tag como texto
    $("#id").text("novo texto");

    // mudar css de elemento dentro de outro
    $("#id").find("#dentro").css("color", "red");

    // adicionar class e remover no elemento
    $("div").addClass("principais");
    $("div").removeClass("principais");

    // verifica se tem a class(retorna true ou false)
    $("div").hasClass("principais");


    // pegar o valor do input(tbm funciona com select)
    $("input").val();

    // inserir elemento antes de certo elemento
    $("div").before("<div>Texto qualquer</div>");
    // inserir elemento depois de certo elemento
    $("div").after("<div>Texto qualquer</div>");

    //insere dentro de elemento (no final)
    $("ul").append("<li>Ultimo item</li>");
    //insere dentro de elemento (no inicio)
    $("ul").prepend("<li>primeiro item</li>");

    // remover elemento (tag)
    $("div").remove();

    // Ex pegar terceiro elemento de uma lista
    $("li").eq(2);
    
    // pega o elemento pai 
    $("#filho").parent();

    // busca nos elementos antecedentes o paramento especificado("#filho")
    $("#filho").closest("#vo");
    // busca nos elementos filhos o paramento especificado("#filho")
    $("#vo").find("#filho");

    // verifica se tem a class
    $("#id").css("color", "red").css("background-color","blue");

    //salva dados na memória ou 
    //seja fica salvo mas não é exibido na tela
    $("#id").data("var", "valor");

    //retira os espaços em branco antes e depois do texto q tiver na var
    $.trim( variavel );

    //igual o foreach do PHP (faz um loop em todos objetos)
    $("li").each(function () { alert($(this).html()); });

//    substitui a virgula pelo ponto
    var altura = altura.replace(",", ".");
    
    //retorna o tipo da var
    $.type( variavel );

    //retorn true se for numero
    $.isNumeric( variavel );
    
    //retorn true se for array
    $.isArray( variavel );
    

//    o $("#id") retorna um array
//     então o length conta os elemmentos 
//     dentro do array e verifica se tem mais de 0 ou seja
//     verifica a existencia do elemento
    if ($("#id").length() > 0) {}



/* TESTE AVANÇADO EVENTOS 
* **********************************************************************************
* **********************************************************************************
* **********************************************************************************
* **********************************************************************************
* **********************************************************************************
* **********************************************************************************
 */

//  o evento "bind" ou "on" funciona para todos

    // click no botao remove e insere a class
    $("button").bind("click", function () {
        $(this).toggleClass("nomeClass");
    });

    // click duplo no botao
    $("button").bind("dblclick", function () { });

    // Remover evento (click por ex) do button
    $("button").unbind("click");
    //ou
    $("button").off("click");

    // quando é apertado o botão no esquerdo do mouse
    $("div").on("mousedown",function () { })

    // quando é movimentado o mouse
    $("div").on("mousemove",function () { })

    // durante a rolagem do mouse
    $(window).bind("scroll", function () {  });

    // durante a redimencionagem da página
    $(window).bind("resise", function () {  });

    // Aciona evento sem que o usuario tenha executado "click"
    $("button").trigger("click");

    // Passar mouse no botao
    $("button").mouseover(function () { });
    // Tirar mouse no botao
    $("button").mouseout(function () { });
    // passar o mouse
    $("button").hover(function () { 
        /* mouseover(passar o mouse)*/ 
    },function () { /* mouseout(tirar o mouse)*/ });

    $("button").bind("click", function (e) {
        // previne a ação do botão ao clicar
        // "no caso cancela a ação original"
        e.preventDefault();
    });
    
    
//    funcao eventodo botao ao clicar
    function eventoBotao(e) {
        e.preventDefault();
    }
//    ao clicar vai chamar a funcao
    $("button").bind("click", eventoBotao);

/* Formulario
* **********************************************************************************
* **********************************************************************************
* **********************************************************************************
 */
    // ao enviar um form
    $("form").on("submit",function (e) {
//        cancela o evento 
        e.preventDefault();
    });

    // quando seleciona uma parte do texto digitado
    $("input").on("select",function () { })

    // quando é focado no campo
    $("input").on("focus",function () { })
    // quando é retirado  foco
    $("input").on("blur",function () { })

    // quando um <select> é selecionado ou checkbox ou radio
    $("estado").on("change",function () { })

    // quando é apertado o botão no teclado
    $("input").on("keydown",function () { })

    // quando é solto o botão no teclado
    $("input").on("keyup",function (e) {
        if (e.keyCode == 13){ /* 13 == enter */
//            exibe no consele oq foi digitado ao teclar enter
            console.log($(this).val());
//            limpa o campo
            $(this).val("");
        }
    })

/* Animação (efeitos)
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

//  função que executa apos certo tempo
    setTimeout(function () {
        $("div").show();
    },200);


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


//botao que ativa a animaçao
 $("#botao").on("click", function () {
        // animação
        $("#animacao").animate({
//          isso ira somar 50px a cada click no botao
//          "margin-left": "+=50",
            "margin-left": 100,
            "margin-top": "100px"
        }, {
            duration: 1500,
            start: function () {
                $("#animacao").css("background-color","blue");
                console.log("animação Começou");
            },
            complete: function () {
//                animação iniciada ao finalizar a animação 
                $("#animacao").animate({
                    "margin-left": "0", "margin-top": "0"
                }, 1500);
                
            }
        });




    });

    // para animação
    $("div").stop();

/* Ajax se trata de um requisição interna do javascript
* **********************************************************************************
* **********************************************************************************
* **********************************************************************************
 */

    // Carrega o conteudo de um arquivo dentro da div
    $("div").load("teste.html");

    // Carrega o conteudo de um arquivo dentro da div
    $.get("teste.html",function (t) {
        $("div").html(t);
    });

    $("form").bind("submit",function (e) {
        e.preventDefault();
        //formata todas as informações do formulario
        var txt = $(this).serialize();
    });








});


//assim é criada uma variavel no javascript
//var nome = "kennedy";

//o sinal de + é para concatenar a var
//alert("meu nome é " + nome);

/* prompt abre uma janela onde o usuario 
 digita algo que se torna uma texto
 mesmo sendo um numero */
//var texto = prompt("digite um texto");

/* esse comando insere algo na pagina exibida
 podendo ser até tag html */
//document.write("texto exibido na tela");

/*  document = trabalha no documento da pagina html 
 window = trabalha em toda a janela no navegado */

function MudarTextodaDiv() {
//    pega o elemnto pelo id e joga na var
    var area = document.getElementById("area");
//    pega o texto digitado pelo user e joga na var
    var texto = prompt("digite um texto");
//      pega var area e muda o html dentro dela
    area.innerHTML = texto;
}
;
function escreverNome(nome) {
//    pega o elemnto pelo id e joga na var
    var seuNome = document.getElementById("seuNome");
//    pega o texto digitado pelo user e joga na var
    var sobrenome = prompt("Qual seu sobrenome? ");
//      pega var area e muda o html dentro dela
    seuNome.innerHTML = nome + " " + sobrenome;
}

function adicionarIngrediente() {
//    value no caso é o valor que foi digitado no input
    var ing = document.getElementById("ingrediente").value;
//    estou armazenando o conteudo da lista na variavel
    var listahtml = document.getElementById("lista").innerHTML;
//    adicionei o intem novo na lista antiga
    listahtml = listahtml + "<li>" + ing + "</li>";

//    adiciona na lista a var listahtml
    document.getElementById("lista").innerHTML = listahtml;

}

function somar() {
//    parseInt é a função que converte uma string em texto
    var campo1 = parseInt(document.getElementById("campo1").value);
    var campo2 = parseInt(document.getElementById("campo2").value);

    var soma = campo1 + campo2;
    alert(soma);
}
;


function test() {

//array
    var lista = ["Arroz", "Feijao", "Macarrao", "Cane", 20];
//retorna a posição que a palavra 
//pesquisada caso não encontre retorna -1 -1
    var posicao = lista.indexOf("Feijao");
//transforma o array em string e separa por virgula
    var texto = lista.join(",");
    alert(lista);

//remove o ultimo item da lista e salva na var Ultimo
    var Ultimo = lista.pop();
    alert(tirandoUltimo);
    alert(lista);

//remove o primeiro item da lista e salva na var primeiro
    var primeiro = lista.shift();

//adiciona o item no final da lista
    lista.push("teste");
}



function loops() {
    var x = 0;
    while (x < 10) {
        document.write("Numero: " + x + "<br>");
        x++;
    }



    for (var i = 0; i < 10; i++) {
        document.write("Numero do for: " + i + "<br>");
    }

}


function switchCase() {
    var x = prompt("Qual é o numero?");

    switch (x) {
        case "0":
            document.write("Numero do switch: " + x + "<br>");
            break;
        case "1":
            document.write("Numero do switch: " + x + "<br>");
            break;
        case "2":
            document.write("Numero do switch: " + x + "<br>");
            break;
        case "3":
            document.write("Numero do switch: " + x + "<br>");
            break;
        case "4":
            document.write("Numero do switch: " + x + "<br>");
            break;
        default:
            document.write("Numero do switch: numero diferente do que esta no case<br>");
            break;
    }
}

function VerificarNumero() {
//    pego o que esta dentro das tag do #n1 
    var n1 = document.getElementById("n1").innerHTML;
//        pega o valor digitado no campo
    var n2 = document.getElementById("n2").value;
    
    if (n1 == n2) {
        alert("Voce acertou o numero!");
    } else {
        alert("Voce errou");
    }

}
function resetarNumero(){
//        deixa em branco o valor do campo n2
        document.getElementById("n2").value = "";
//        o conteudo do dentro do n1 vai ser 
//        vai ser um valor ramdomico até 10 (Math.random()*10)
//        que foi arredondado (Math.floor)
        document.getElementById("n1").innerHTML = Math.floor(Math.random()*10);

}
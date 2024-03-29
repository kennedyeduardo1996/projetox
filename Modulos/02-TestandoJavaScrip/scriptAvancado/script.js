//criando um objeto
function Animal() {
//    propriedades
    this.raca = "Cao";
    this.nome = "Lulu";
    this.idade = 200;
    this.peso = 10;

//  metodo
    this.fazerXixi = function () {
        console.log("xiiiiii....");
    }
//  metodo = acao
    this.comer = function (kg) {
        for (var i = 0; i < kg; i++) {

            this.mastigar(i);
        }

        this.peso = this.peso + kg;
    }

//  funçao auxiliar é usada dentro 
//  de uma função para organizar 
//  mais o codigo
    this.mastigar = function (i) {
        console.log("Nhoc..." + i);
    }
}

//instanciando o objeto
var lulu = new Animal();
//passando novos valores para as propriedades do objeto instanciado
lulu.raca = "Gato";
lulu.nome = "xuxa";

var xuxu = new Animal();
xuxu.raca = "Papagaio";
xuxu.nome = "Loro";


document.write(xuxu.raca + "<br>");
document.write("Pesa: " + xuxu.peso + "<br>");
xuxu.comer(25);
document.write("Pesa após comer 25kg: " + xuxu.peso + "<br>");





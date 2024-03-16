
function apertouMouse() {
//    será exibido ao apertar o botao do maouse para baixo
    document.getElementById("textoexibido").innerHTML = "apertou o Mouse para baixo";

}
function soltouMouse() {
//    será exibido ao apertar o botao do maouse para baixo

    document.getElementById("textoexibido").innerHTML = "Soltou o mouse";
}

function passarMouseEmCima() {
//    será exibido ao passar o mause em cima
    document.getElementById("textoexibido").innerHTML = "Passou o mouse em cima";
}

function mouseSaiuDeCima(){
//    será exibido ao passar o mause em cima
    document.getElementById("textoexibido").innerHTML = "Mouse saiu de cima";
    
}

//Evento do teclado

function apertouTecla(event){
//    o event.keyCode retorna o numero do tecla
    document.getElementById("divEventoTeclado").innerHTML = "tecla numero: " + event.keyCode;    
}

//Evento da pagina
function carregou(){
    alert("Pagina carregada"); 
}

function mudouOpcao(cidade){
        document.getElementById("campoCidade").value = cidade.value;    
}

function addBola(){
//    Cria uma div
    var bola = document.createElement("div");
//    adiciona a class bola na div criada
    bola.setAttribute("class", "bola");
    
//    gera um numero ramdomico até 500
    var p1 = Math.floor(Math.random() * 500);
    var p2 = Math.floor(Math.random() * 500);
//    Adiciona css
    bola.setAttribute("style", "left:"+p1+"px; top:"+p2+"px;");
//    adiciona onclick com a funcao estorar
    bola.setAttribute("onclick", "estourar(this)");
//    adiciona oque foi criado dentro do body
    document.body.appendChild(bola);
}

function estourar(element){
//    remove o oque foi recebido que se trata 
//    da propria div que foi criada na funcçao anterior
    document.body.removeChild(element);
}

function iniciar(){
//    vai executar a funcao a cada 1 segundo
    setInterval(addBola,1000);

    
}

function validar() {

	var valor = document.getElementById("numero").value;
//        length retorna o tamanho do valor ou
//         seja quantos algarismos tem
	if(valor.length > 2) {
		alert("Você digitou um número que tem mais de 2 algarismos.");
//                Se retornar false o form não é enviado
		return false;
	} else {
		return true;
	}
}
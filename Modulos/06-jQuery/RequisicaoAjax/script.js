$(document).ready(function () {



    $("#form").on("submit", function (e) {
//      cancela o envio
        e.preventDefault();
        //formata todas as informações do formulario
        //onde ficam prontas para serem enviadas pelo ajax
        var txt = $(this).serialize();
        console.log(txt);
    });
    
    
    
//REQUISIÇÃO AJAX COMPLETA
//      requisicao ajax onde passa o 
//      dados para a pagina php e é retornado aki
    $("#form2").on("submit", function (e) {
        e.preventDefault();
        var txt = $(this).serialize();
        console.log(txt);

//      requisicao ajax
        $.ajax({
            type: "POST",
            url: "ajax.php",
            data: txt,
            success: function (resultado) {
                $("#testeajax").html("Resultdo" + resultado);
            }
        });



    });



});







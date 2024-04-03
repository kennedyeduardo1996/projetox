$(document).ready(function () {



//REQUISIÇÃO AJAX COMPLETA
    $("#form").on("submit", function (e) {
        e.preventDefault();
        var txt = $(this).serialize();


//      requisicao ajax onde passa o 
//      dados para a pagina php e é retornado aki
        $.ajax({
            type: "POST",
            url: "ajax.php",
            data: txt,
            dataType: 'json',
            success: function (json) {
                console.log(json);

                $("#testeajax").html("Resultdo: "
                + json.nome + " e tem " + json.qt_nome + " caracteres");
            }
        });



    });



});







$(document).ready(function () {

    $("#objeto").bind("mousedown", function () {
//        o "e" pega os eventos do mousemove
        $(this).bind("mousemove", function (e) {
            var pos = $(this).offset();

             console.log(e);
//          após verificar no console.log(e) foi identificado
//          o evento originalEvent.pageX que pega a posição do X
            var x = e.originalEvent.pageX;
            var y = e.originalEvent.pageY;

//            var mouseObjetoX = e.originalEvent.layerX;
//            var mouseObjetoY = e.originalEvent.layerY;
//            console.log("pos x : " + mouseObjetoX, "pos y " + mouseObjetoY);

            $(this).css({
//                para o cursor ficar no meio do quadrado
                "top": y - ($(this).width() / 2) + "px",
                "left": x - ($(this).height() / 2) + "px"
            });

        });
    });
    
//    ao soltar o botao do mouse
    $("#objeto").bind("mouseup", function () {
//        cancala o evento de movimento do mouse
        $(this).unbind("mousemove");
    });


});
$(document).ready(function () {

    $("#objeto").bind("mousedown", function () {

        $(this).bind("mousemove", function (e) {
            var pos = $(this).offset();

            // console.log("y =" + y);
            // console.log("pos.top = " +pos.top);
            // console.log("e.originalEvent.layerY = " +e.originalEvent.layerY);
            var x = e.originalEvent.pageX;
            var y = e.originalEvent.pageY;

            var mouseObjetoX = e.originalEvent.layerX;
            var mouseObjetoY = e.originalEvent.layerY;
            console.log("pos x : " + mouseObjetoX, "pos y " + mouseObjetoY);

            $(this).css({
                "top": y - ($(this).width() / 2) + "px",
                "left": x - ($(this).height() / 2) + "px"
            });

        });
    });

    $("#objeto").bind("mouseup", function () {
        $(this).unbind("mousemove");
    });


});
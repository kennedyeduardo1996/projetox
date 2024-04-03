//esse plug adiciona o href 
//em frente ao nome que esta no link
(function ($) {
    $.fn.showRealLink = function () {
        this.each(function () {
//            pega o atributo href
            var link = $(this).attr("href");
//            adicion o link em frete ao texto do link
            $(this).append("( " + link + " )");
        })
        return this;
    }
}(jQuery));
$(document).ready(function () {
    $("li").hover(function () {
       $(this).find(".submenu").slideToggle();
    });

});
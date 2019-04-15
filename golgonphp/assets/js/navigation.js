$(document).ready(function () {
    $(".level-1").children("li").mouseover(function () {
        $(this).children('.sub-menu').fadeToggle(0);
    });
    $(".level-1").children("li").mouseout(function () {
        $(this).children('.sub-menu').fadeToggle(0);
    });
});
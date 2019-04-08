$(".level-1").children("li").mouseover(function(){
    var isDisplay = $(this).children('.sub-menu').css('display');
    $(this).children('.sub-menu').stop(true,false).fadeToggle(100);
});
$(".level-1").children("li").mouseout(function(){
    $(this).children('.sub-menu').stop(true,false).fadeToggle(100);
});
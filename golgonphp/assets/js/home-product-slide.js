$(document).ready(function () {
    function translateLeft() {
        var left = $(this).parent().parent().siblings().find(".abs").css("left");
        if (parseInt(left) !== 0) {
            $(this).parent().parent().siblings().find(".abs").css("left", "+=230px");
        }
    }
    function translateRight() {
        var left = $(this).parent().parent().siblings().find(".abs").css("left");
        if (parseInt(left) !== -1380) {
            $(this).parent().parent().siblings().find(".abs").css("left", "-=230px");
        }
    }
    $(".prslide-prev").click(translateLeft);
    $(".prslide-next").click(translateRight);
    
    $(".cat-tab").click(function(){
        var tab = $(this).attr("href").split('#')[1];
        $(".row-1").not(document.getElementById(tab)).hide();
        $("#"+tab+"").show();
        $(".cat-tab").removeClass("selected");
        $(this).addClass("selected");
        return false;
    });
    $(".cat-tab-2").click(function(){
        var tab = $(this).attr("href").split('#')[1];
        $(".row-2").not(document.getElementById(tab)).hide();
        $("#"+tab+"").show();
        $(".cat-tab-2").removeClass("selected");
        $(this).addClass("selected");
        return false;
    });
    $(".cat-tab-3").click(function(){
        var tab = $(this).attr("href").split('#')[1];
        $(".row-3").not(document.getElementById(tab)).hide();
        $("#"+tab+"").show();
        $(".cat-tab-3").removeClass("selected");
        $(this).addClass("selected");
        return false;
    });
    $(".cat-tab-4").click(function(){
        var tab = $(this).attr("href").split('#')[1];
        $(".row-4").not(document.getElementById(tab)).hide();
        $("#"+tab+"").show();
        $(".cat-tab-4").removeClass("selected");
        $(this).addClass("selected");
        return false;
    });
});
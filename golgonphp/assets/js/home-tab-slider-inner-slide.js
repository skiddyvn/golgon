var curIndex1 = 1;
var curIndex2 = 1;
showslidesnew(1,curIndex1);
showslidesnew(2,curIndex2);
function plus(i,n) {
    (i===1) ? showslidesnew(1,curIndex1 += n) : showslidesnew(2,curIndex2 += n);
}
function showslidesnew(x,n) {
    var slides;
    (x===1) ? slides = document.getElementsByClassName("slide-1-1") : slides = document.getElementsByClassName("slide-1-2");
    (x===1) ? dots = document.getElementsByClassName("dot-1") : dots = document.getElementsByClassName("dot-2");

    if (n > slides.length) {
        (x===1) ? curIndex1 = 1 : curIndex2 = 1;
    }
    if (n < 1) {
        (x===1) ? curIndex1 = slides.length : curIndex2 = slides.length;
    }
    for (var i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        dots[i].style.backgroundColor = "transparent";
    }
    (x===1) ? slides[curIndex1 - 1].style.display = "block" : slides[curIndex2 - 1].style.display = "block";
    (x===1) ? dots[curIndex1 - 1].style.backgroundColor = "#eee" : dots[curIndex2 - 1].style.backgroundColor = "#eee";
}

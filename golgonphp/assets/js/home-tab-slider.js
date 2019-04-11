var seindex = 1;
currentevent(seindex);

function currentevent(n) {
    showslideevent(seindex = n);
}
function showslideevent(n) {
    var j;
    var slideEvent = document.getElementsByClassName("slide-0");
    var tabItem = document.getElementsByClassName("tab-item");
    for (j = 0; j < slideEvent.length; j++) {
        slideEvent[j].style.display = "none";
        tabItem[j].className = tabItem[j].className.replace(" active","");
    }
    slideEvent[seindex - 1].style.display = "block";
    tabItem[seindex - 1].className += " active";
}


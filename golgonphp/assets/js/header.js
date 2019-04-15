$(document).ready(function () {
    $('a[href="/golgonphp/home/index#home-news"]').click(function(e) {
        if (location.hash === '/golgonphp/home/index') {
            e.preventDefault();
            var pos = $("#home-news").offset().top;
            $('html,body').animate({
                scrollTop: pos
            }, 600);
        } else {
            var pos = $("#home-news").offset().top;
            $('html,body').animate({
                scrollTop: pos
            }, 600);
        }
    });
    $('a[href="/golgonphp/home/index#home-info"]').click(function(e) {
        if (location.hash === '/golgonphp/home/index') {
            e.preventDefault();
            var pos = $("#home-info").offset().top;
            $('html,body').animate({
                scrollTop: pos
            }, 600);
        } else {
            var pos = $("#home-info").offset().top;
            $('html,body').animate({
                scrollTop: pos
            }, 600);
        }
    });
    $("#bar-nav-btn").click(function(){
       $("#bar-nav-panel").toggle();
    });
    window.onclick = function(event) {
        var modal = document.getElementById('login');
        if (event.target === modal) {
            modal.style.display = "none";
        }
    };
});
function responsiveCollapse() {
    var navpanel = document.getElementById("navpanel");
    if (navpanel.className === "cnavpanel") {
        navpanel.className += "responsive";
    } else {
        navpanel.className = "cnavpanel";
    }
}
function clicklogin1() {
    document.getElementById('login').style.display = 'block';
    document.getElementById('modal-child1').style.display = 'block';
    document.getElementById('modal-child2').style.display = 'none';
    document.getElementById('btn-register1').style.background = '#eee';
    document.getElementById('btn-log1').style.background = '#fff';
    document.getElementById('btn-register1').style.color = '#aaa';
    document.forms["modal-child1"].reset();
    document.forms["modal-child2"].reset();
}

function clicklogin2() {
    document.getElementById('login').style.display = 'block';
    document.getElementById('modal-child1').style.display = 'none';
    document.getElementById('modal-child2').style.display = 'block';
    document.getElementById('btn-register2').style.background = '#fff';
    document.getElementById('btn-log2').style.background = '#eee';
    document.getElementById('btn-log2').style.color = '#aaa';
    document.forms["modal-child1"].reset();
    document.forms["modal-child2"].reset();
}
function switchbutton1() {
    document.getElementById('modal-child1').style.display = 'block';
    document.getElementById('modal-child2').style.display = 'none';
    document.getElementById('btn-register1').style.background = "#eee";
    document.getElementById('btn-log1').style.background = "#fff";
    document.getElementById('btn-register1').style.color = '#aaa';
    document.forms["modal-child1"].reset();
}

function switchbutton2() {
    document.getElementById('modal-child1').style.display = 'none';
    document.getElementById('modal-child2').style.display = 'block';
    document.getElementById('btn-log2').style.background = "#eee";
    document.getElementById('btn-register2').style.background = "#fff";
    document.getElementById('btn-log2').style.color = '#aaa';
    document.forms["modal-child2"].reset();
}
var index = 0;
var slides = document.getElementsByClassName("slides");
var dotsx = document.getElementsByClassName("dot");
showslides();
function showslides() {
	for (var i = 0; i < slides.length; i++){
		slides[i].style.display = "none";
		dotsx[i].style.backgroundColor="transparent";
	}
	index++;
	if(index > slides.length) {index = 1;}
	slides[index-1].style.display = "block";
	dotsx[index-1].style.backgroundColor="#ed3a53";
	setTimeout(showslides,2000);
}
var slideindex = 1;
currentslide(slideindex);
function current(n) {
	currentslide(slideindex = n);
	index = n;
}
function currentslide(n) {
	var i,j;
	if (n > slides.length ) {slideindex = 1;}
	if (n < 1 ) {slideindex = slide.length;}
	for (i = 0; i < slides.length; i++){
		slides[i].style.display="none";
	}
	for (j = 0; j < dotsx.length; j++){
		dotsx[j].style.backgroundColor="transparent";
	}
	slides[slideindex-1].style.display="block";
	dotsx[slideindex-1].style.backgroundColor="#ed3a53";
}
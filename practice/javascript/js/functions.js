
function addNumbers(number1, number2) {
	
	var total = number1 + number2;	
	document.getElementById("answer").innerHTML = total;
	return total;

}



function changeStyle(tag,colour) {
	var tag=document.getElementsByTagName(tag);

	for (i=0; i<tag.length; i++) {
		tag[i].style.color = colour;
		tag[i].style.fontSize = "20px";
	}	
}



function changeStylePromt() {
	var colour = prompt("Which colour would ypu like to change the headers to?", "green");
	var tag = document.getElementsByTagName("h3");

	for (i=0; i<tag.length; i++) {
		tag[i].style.color = colour;	
	}	
}
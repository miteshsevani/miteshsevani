

var cars = ["Ford", "Vauxhall", "Honda", "BMW", "Audi"];		
cars.push("VW");

var ptag = document.getElementById("cars").innerHTML = "Array of Cars = " + cars;

// Method 1
document.write("<h3>Method 1 - Loop Array</h3>");
var carQuantity = cars.length;
for (i=0; i<carQuantity; i++) {
	document.write(cars[i] + "<br />");

}

document.write("<br />")

// Method 2
document.write("<h3>Method 2 - Loop Array</h3>");
for (n in cars) {
	document.write(cars[n] + "<br />");
}


document.write("<br />")

// Switch Statement
document.write("<h3>Switch Statement</h3>");

var colour = "Red";
switch(colour) {
	case "Orange" :
		document.write("Orange is available" + "<br />");
		break;

	case "Blue" :
		document.write("Blue is available" + "<br />");
		break;

	default:
		document.write(colour + " is not available" + "<br />");
		break;
}


document.write("<br />")

// Switch Statement
document.write("<h3>While Statement</h3>");


var num = 1;

while(num <=10) {
	if (num == 10) {
		break;
	}

	if (num % 2) {
		
		//document.write(num + "<br />");
		num++;
		continue;
	}
	
	document.write(num + "<br />");
	num++
	
}


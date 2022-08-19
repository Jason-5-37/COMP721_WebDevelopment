// JavaScript Document

function makeTable(){
	var theTable =document.getElementById("tbl");
	//IE requires rows to be added to a tBody element
	//IE automatically creates a tBody element - delete it and then manually create
	if (theTable.firstChild != null){
		var badIEBody = theTable.childNodes[0];  
		theTable.removeChild(badIEBody);
	}
	var tBody = document.createElement("TBODY");
	theTable.appendChild(tBody);

	var newRow = document.createElement("tr");
	var c1 = document.createElement("td");
	var v1 = document.createTextNode("7308");
	c1.appendChild(v1);
	newRow.appendChild(c1);
	var c2 = document.createElement("td");
	var v2 = document.createTextNode("software engineering");
	c2.appendChild(v2);
	newRow.appendChild(c2);
	tBody.appendChild(newRow);

	newRow = document.createElement("tr");
	c1 = document.createElement("td");
	v1 = document.createTextNode("7003");
	c1.appendChild(v1);
	newRow.appendChild(c1);
	c2 = document.createElement("td");
	v2 = document.createTextNode("Web Development");
	c2.appendChild(v2);
	newRow.appendChild(c2);
	tBody.appendChild(newRow);
}

function appendRow() {
	var r=Math.round(Math.random()*255);
	var g=Math.round(Math.random()*255);
    var b=Math.round(Math.random()*255);
	var theTable =document.getElementById("tbl");
	let userinput1 = prompt('Please input number');
	let userinput2 = prompt('Please input subject');
	console.log(userinput1);

	var tBody = document.createElement("TBODY");
	theTable.appendChild(tBody);
	
	var newRow = document.createElement("tr");
	var c1 = document.createElement("td");
	var v1 = document.createTextNode(userinput1);
	c1.appendChild(v1);
	newRow.appendChild(c1);
	var c2 = document.createElement("td");
	var v2 = document.createTextNode(userinput2);
	c2.appendChild(v2);
	newRow.appendChild(c2);
	newRow.style.backgroundColor="rgb("+r+","+g+","+b+")";
	tBody.appendChild(newRow);

}

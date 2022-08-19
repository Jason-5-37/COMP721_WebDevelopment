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
	var c3 = document.createElement("button");
	c3.onclick = function selectRow(){
		newRow.style.backgroundColor="red";
		newRow.id="Selected";
	}
	var v3 = document.createTextNode("Select");
	c3.appendChild(v3);



	newRow.appendChild(c3);

	tBody.appendChild(newRow);

}


function removeRow() {
	var elms = document.querySelectorAll("[id='Selected']");
	console.log(elms.length);
	for(var i=0; i<elms.length; i++){
		var deleteRow = document.getElementById("Selected");
		deleteRow.remove();
	}
}

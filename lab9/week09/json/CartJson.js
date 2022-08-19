var xHRObject = false;
if (window.XMLHttpRequest)
{
xHRObject = new XMLHttpRequest();
}
else if (window.ActiveXObject)
{
xHRObject = new ActiveXObject("Microsoft.XMLHTTP");
}


function getData()
{
    if ((xHRObject.readyState == 4) &&(xHRObject.status == 200))
    {
        // var obj = JSON.parse('{ "name":"John", "age":30, "city":"New York"}'); 
		
		var spantag = document.getElementById("cart");
		
		var serverResponse;
		if (xHRObject.responseText!="") serverResponse= JSON.parse(xHRObject.responseText);
		else serverResponse=null;
		
		// alert(keys[0]);
		// alert(serverResponse[keys[0]]);
		
		
		if (serverResponse != null){
			
			var keys = Object.keys(serverResponse);
			spantag.innerHTML = "";
            
			
            if (window.ActiveXObject)
            {
                var Book1 = serverResponse[keys[0]];

                spantag.innerHTML += "name: " + Book1.name;
                spantag.innerHTML += "<br>";
                spantag.innerHTML += "ISBN: " + Book1.ISBN;
                spantag.innerHTML += "<br>";
                spantag.innerHTML += "price: $" + Book1.price;
                spantag.innerHTML += "<br>";
                spantag.innerHTML += "Quality : " + Book1.value + " <br>" + "<a href='#' onclick='AddRemoveItem(\"delete\");'>Remove Item</a>";

                
            }
            else
            {
                var Book1 = serverResponse[keys[0]];

                spantag.innerHTML += "name: " + Book1.name;
                spantag.innerHTML += "<br>";
                spantag.innerHTML += "ISBN: " + Book1.ISBN;
                spantag.innerHTML += "<br>";
                spantag.innerHTML += "price: $" + Book1.price;
                spantag.innerHTML += "<br>";
                spantag.innerHTML += "Quality : " + Book1.value + " <br>" + "<a href='#' onclick='AddRemoveItem(\"delete\");'>Remove Item</a>";
                
                
            }
        
        }
        else{  spantag.innerHTML = ""; }
		
		
		
		/*

        var spantag = document.getElementById("cart");

        if (serverResponse != null){
            var header = serverResponse.getElementsByTagName("book");
            spantag.innerHTML = "";
            for (i=0; i<header.length; i++)
            {
           
            if (window.ActiveXObject)
            {
                spantag.innerHTML += " " +header[0].firstChild.text;
                spantag.innerHTML += " " + header[0].lastChild.text + " " + "<a href='#' onclick='AddRemoveItem(\"Remove\");'>Remove Item</a>";
            }
            else
            {
                spantag.innerHTML += " " +header[0].firstChild.textContent;
                spantag.innerHTML += " " + header[0].lastChild.textContent + " " + "<a href='#' onclick='AddRemoveItem(\"Remove\");'>Remove Item</a>";
            }
            }
        }
        else{  spantag.innerHTML = ""; }
*/
    }
}

function getData2()
{
    if ((xHRObject.readyState == 4) &&(xHRObject.status == 200))
    {
        // var obj = JSON.parse('{ "name":"John", "age":30, "city":"New York"}'); 
		
		var spantag = document.getElementById("cart2");
		
		var serverResponse;
		if (xHRObject.responseText!="") serverResponse= JSON.parse(xHRObject.responseText);
		else serverResponse=null;
		
		// alert(keys[0]);
		// alert(serverResponse[keys[0]]);
		
		
		if (serverResponse != null){
			
			var keys = Object.keys(serverResponse);
			spantag.innerHTML = "";
            
			
            if (window.ActiveXObject)
            {
                var Book1 = serverResponse[keys[0]];

                spantag.innerHTML += "name: " + Book1.name;
                spantag.innerHTML += "<br>";
                spantag.innerHTML += "ISBN: " + Book1.ISBN;
                spantag.innerHTML += "<br>";
                spantag.innerHTML += "price: $" + Book1.price;
                spantag.innerHTML += "<br>";
                spantag.innerHTML += "Quality : " + Book1.value + " <br>" + "<a href='#' onclick='AddRemoveItem(\"delete2\");'>Remove Item</a>";

                
            }
            else
            {
                var Book1 = serverResponse[keys[0]];

                spantag.innerHTML += "name: " + Book1.name;
                spantag.innerHTML += "<br>";
                spantag.innerHTML += "ISBN: " + Book1.ISBN;
                spantag.innerHTML += "<br>";
                spantag.innerHTML += "price: $" + Book1.price;
                spantag.innerHTML += "<br>";
                spantag.innerHTML += "Quality : " + Book1.value + " <br>" + "<a href='#' onclick='AddRemoveItem(\"delete2\");'>Remove Item</a>";
                
                
            }
        
        }
        else{  spantag.innerHTML = ""; }
		
		
		
		/*

        var spantag = document.getElementById("cart");

        if (serverResponse != null){
            var header = serverResponse.getElementsByTagName("book");
            spantag.innerHTML = "";
            for (i=0; i<header.length; i++)
            {
           
            if (window.ActiveXObject)
            {
                spantag.innerHTML += " " +header[0].firstChild.text;
                spantag.innerHTML += " " + header[0].lastChild.text + " " + "<a href='#' onclick='AddRemoveItem(\"Remove\");'>Remove Item</a>";
            }
            else
            {
                spantag.innerHTML += " " +header[0].firstChild.textContent;
                spantag.innerHTML += " " + header[0].lastChild.textContent + " " + "<a href='#' onclick='AddRemoveItem(\"Remove\");'>Remove Item</a>";
            }
            }
        }
        else{  spantag.innerHTML = ""; }
*/
    }
}

function getData3()
{
    if ((xHRObject.readyState == 4) &&(xHRObject.status == 200))
    {
        // var obj = JSON.parse('{ "name":"John", "age":30, "city":"New York"}'); 
		
		var spantag = document.getElementById("cart3");
		
		var serverResponse;
		if (xHRObject.responseText!="") serverResponse= JSON.parse(xHRObject.responseText);
		else serverResponse=null;
		
		// alert(keys[0]);
		// alert(serverResponse[keys[0]]);
		
		
		if (serverResponse != null){
			
			var keys = Object.keys(serverResponse);
			spantag.innerHTML = "";
            
			
            if (window.ActiveXObject)
            {
                var Book1 = serverResponse[keys[0]];

                spantag.innerHTML += "name: " + Book1.name;
                spantag.innerHTML += "<br>";
                spantag.innerHTML += "ISBN: " + Book1.ISBN;
                spantag.innerHTML += "<br>";
                spantag.innerHTML += "price: $" + Book1.price;
                spantag.innerHTML += "<br>";
                spantag.innerHTML += "Quality : " + Book1.value + " <br>" + "<a href='#' onclick='AddRemoveItem(\"delete3\");'>Remove Item</a>";

                
            }
            else
            {
                var Book1 = serverResponse[keys[0]];

                spantag.innerHTML += "name: " + Book1.name;
                spantag.innerHTML += "<br>";
                spantag.innerHTML += "ISBN: " + Book1.ISBN;
                spantag.innerHTML += "<br>";
                spantag.innerHTML += "price: $" + Book1.price;
                spantag.innerHTML += "<br>";
                spantag.innerHTML += "Quality : " + Book1.value + " <br>" + "<a href='#' onclick='AddRemoveItem(\"delete3\");'>Remove Item</a>";
                
                
            }
        
        }
        else{  spantag.innerHTML = ""; }
		
		
		
		/*

        var spantag = document.getElementById("cart");

        if (serverResponse != null){
            var header = serverResponse.getElementsByTagName("book");
            spantag.innerHTML = "";
            for (i=0; i<header.length; i++)
            {
           
            if (window.ActiveXObject)
            {
                spantag.innerHTML += " " +header[0].firstChild.text;
                spantag.innerHTML += " " + header[0].lastChild.text + " " + "<a href='#' onclick='AddRemoveItem(\"Remove\");'>Remove Item</a>";
            }
            else
            {
                spantag.innerHTML += " " +header[0].firstChild.textContent;
                spantag.innerHTML += " " + header[0].lastChild.textContent + " " + "<a href='#' onclick='AddRemoveItem(\"Remove\");'>Remove Item</a>";
            }
            }
        }
        else{  spantag.innerHTML = ""; }
*/
    }
}

function AddRemoveItem(action)
{
          
          
           
          if(action=="Add")
          {
            var book  = document.getElementById("book").innerHTML;
            var ISBN  = document.getElementById("ISBN").innerHTML;
            var price  = document.getElementById("price").innerHTML;
            var action = "Add";
            xHRObject.onreadystatechange = getData;
          }else if(action=="Add2"){
            var book  = document.getElementById("book2").innerHTML;
            var ISBN  = document.getElementById("ISBN2").innerHTML;
            var price  = document.getElementById("price2").innerHTML;
            xHRObject.onreadystatechange = getData2;
            var action = "Add";
              
          }else if(action == "Add3"){
            var book  = document.getElementById("book3").innerHTML;
            var ISBN  = document.getElementById("ISBN3").innerHTML;
            var price  = document.getElementById("price3").innerHTML;
            xHRObject.onreadystatechange = getData3;
            var action = "Add";

          }else if(action =="delete"){
            var book  = document.getElementById("book").innerHTML;
            var ISBN  = document.getElementById("ISBN").innerHTML;
            var price  = document.getElementById("price").innerHTML;
            xHRObject.onreadystatechange = getData;
            var action = "delete";
          }else if(action =="delete2"){
            var book  = document.getElementById("book2").innerHTML;
            var ISBN  = document.getElementById("ISBN2").innerHTML;
            var price  = document.getElementById("price2").innerHTML;
            xHRObject.onreadystatechange = getData2;
            var action = "delete";
          }else if(action =="delete3"){
            var book  = document.getElementById("book3").innerHTML;
            var ISBN  = document.getElementById("ISBN3").innerHTML;
            var price  = document.getElementById("price3").innerHTML;
            xHRObject.onreadystatechange = getData3;
            var action = "delete";
          }

          
          //xHRObject.open("GET", "ManageCartJson.php?action=" + action + "&book=" + encodeURIComponent(book) + "&value=" + Number(new Date), true); 
          xHRObject.open("GET", "test.php?action=" + action + "&book=" + encodeURIComponent(book) +"&value=" + Number(new Date) + 
          "&ISBN=" + encodeURIComponent(ISBN)+
          "&price=" + encodeURIComponent(price), true);

          xHRObject.send(null);   
}




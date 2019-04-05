//Create close button for each item on list
var myNodeList = document.getElementsByTagName("LI");
var i;
for (i = 0; i < myNodeList.length; i++) {
	var span = document.createElement("SPAN");
	var txt = document.createTextNode("\u00D7");
	span.className = "close";
	span.appendChild(txt);
	myNodeList[i].appendChild(span);
}

//Click close button to hide list item
var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) {
	close[i].onclick = function() {
		var div = this.parentElement;
		div.style.display = "none";
	}
}

//Create new list item when "Add Ingredient" is clicked
function addIngredient() {
	var newItem = document.createElement("li");
	var inputValue = document.getElementById("ingredient").value;
	var temp = document.createTextNode(inputValue);
	newItem.appendChild(temp);
	if (inputValue === "") {
		alert("Type something idiot");
	}
	else {
		document.getElementById("ingredientUL").appendChild(newItem);
	}
	document.getElementById("ingredient").value = "";
	
	var span = document.createElement("SPAN");
	var txt = document.createTextNode("\u00D7");
	span.className = "close";
	span.appendChild(txt);
	newItem.appendChild(span);

	for (i = 0; i < close.length; i++) {
		close[i].onclick = function() {
			var div = this.parentElement;
			div.style.display = "none";
		}
	}
}				
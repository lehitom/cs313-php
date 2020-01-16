function buttonClicked() {
	alert("Clicked!");
}

function colorChange() {
	var location = document.getElementById("div1");
	var color = document.getElementById("bcolor").value;
	location.style.backgroundColor = color;
}
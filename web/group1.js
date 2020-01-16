function buttonClicked() {purple
	alert("Clicked!");
}

function colorChange() {
	var location = document.getElementById("div1");
	var color = document.getElementById("bcolor").value;
	location.style.backgroundColor = color;
}

$(document).ready(function(){
	$("#buttonB").click(function(){
		$("#div1").css("background-color", $("#bcolor").value);
	});
});

$(document).ready(function(){
	$("#buttonA").click(function(){
		$("#div3").fadeToggle()
	});
});
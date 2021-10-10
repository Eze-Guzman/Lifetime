function openPopUp(popUp){
	document.getElementById(popUp).style.setProperty("display", "block");
	document.getElementById("pop-up-background").style.setProperty("display", "block");
}

function closePopUp(popUp){
	document.getElementById(popUp).style.setProperty("display", "none");
	document.getElementById("pop-up-background").style.setProperty("display", "none");
}

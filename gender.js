function checkGender () {
	if (document.getElementById("custom").checked) {
		document.getElementById("custom-gender").style.setProperty('display', 'flex');
	} else {
		document.getElementById("custom-gender").style.setProperty('display', 'none');
	}
}

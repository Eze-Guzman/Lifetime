var horarios = [[], [], [], [], [], [], []];
var actividades = [];
let dayId = "";

for (i = 0; i < horarios.length; i++) {
	for (j = 0; j < 288; j++) {
		horarios[i][j] = [ {estado: "libre"}, {tag: "none"} ];
	}
}

function modificarHorario(dia, inicio, fin, estado, tag) {
	for (i = inicio; i <= fin; i++) {
		horarios[dia][i] = [{estado: estado}, {tag: tag}];
	}
}

function agregarActividad(actividad) {
	if(actividades.indexOf(actividad) == -1)
		actividades.push(actividad);
}

function quitarActividad(actividad) {
	actividades.splice(actividades.indexOf(actividad), 1)
}

function autoestablecer(dia, duracion, tag) {
	let i = 0;
	while (duracion > 0) {
		if (horarios[dia][i][0].estado === "dudoso" ||
			horarios[dia][i][0].estado === "libre") {
			horarios[dia][i] = [ {estado: "ocupado"}, {tag: tag} ];
			duracion--;
		}
		i++;
	}
}

function abrirDia(element){
	let day = element.children[0].children[0].innerHTML;
	
	switch(day){
		case "Lunes": document.getElementsByClassName("modal-calendar-day")[0].style.display = "block"; dayId="0"; break;
		case "Martes": document.getElementsByClassName("modal-calendar-day")[1].style.display = "block"; dayId="1"; break;
		case "Miércoles": document.getElementsByClassName("modal-calendar-day")[2].style.display = "block"; dayId="2"; break;
		case "Jueves": document.getElementsByClassName("modal-calendar-day")[3].style.display = "block"; dayId="3"; break;
		case "Viernes": document.getElementsByClassName("modal-calendar-day")[4].style.display = "block"; dayId="4"; break;
		case "Sábado": document.getElementsByClassName("modal-calendar-day")[5].style.display = "block"; dayId="5"; break;
		case "Domingo": document.getElementsByClassName("modal-calendar-day")[6].style.display = "block"; dayId="6"; break;
	}
}

function cerrarDia(){
	document.getElementsByClassName("modal-calendar-day")[dayId].style.display = "none";
	dayId=0;
}
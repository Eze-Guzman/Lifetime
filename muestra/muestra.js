let horarios = [[], [], [], [], [], [], []];

for (i = 0; i < horarios.length; i++) {
	for (j = 0; j < 288; j++) {
		horarios[i][j] = [ {estado: "libre"}, {tag: "none"} ];
	}
}

function modificarHorario(dia, inicio, fin, estado, tag) {
	for (i = inicio; i < fin; i++) {
		horarios[dia][i] = [{estado: estado}, {tag: tag}];
	}
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

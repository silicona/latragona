
function detectarFile(){

	if (window.File || window.FileReader || window.FileList || window.Blob) {

		var salida = "APIs de File en tu navegador:<br>";
		salida += "File: " + Boolean(window.File) + "<br>";
		salida += "FileReader: " + Boolean(window.FileReader) + "<br>";
		salida += "FileList: " + Boolean(window.FileList) + "<br>";
		salida += "Blob: " + Boolean(window.Blob);

	} else {

		var salida = 'La API de JS File no esta en absoluto implementada en tu navegador';
	}

	document.getElementById('deteccion').innerHTML = salida;
}


function detectarSlice(){

	var salida = "API Slice en tu navegador:<br>";

	if (window.mozSlice){

		salida += "Moz Slice: " + Boolean(window.mozSlice) + "<br>";

	} else if(window.webkitSlice){

		salida += "Webkit Slice: " + Boolean(window.webkitSlice) + "<br>";

	} else if(window.slice){

		salida += "Slice: " + Boolean(window.slice) + "<br>";

	} else {

		var salida = 'La API Slice no esta implementada en tu navegador.';
	}

	document.getElementById('deteccion').innerHTML += "<br>" + salida;
}


function iniciar(){

	detectarFile();
	detectarSlice();
}

window.addEventListener('load', iniciar, false)

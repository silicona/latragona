
function detectarFile(){

	if (window.File || window.FileReader || window.FileList || window.Blob) {

		var salida = [
			'<ul>',
				'<legend>APIs de File en tu navegador:</legend>',
				'<li>File: ' + (Boolean(window.File) ? 'Correcto' : 'Fracaso') +'</li>',
				'<li>FileReader: ' + (Boolean(window.FileReader) ? 'Correcto' : 'Fracaso') + '</li>',
				'<li>FileList: ' + (Boolean(window.FileList) ? 'Correcto' : 'Fracaso') + '</li>',
				'<li>Blob: ' + (Boolean(window.Blob) ? 'Correcto' : 'Fracaso') + '</li>',
			'</ul>'
		].join('');

	} else {

		var salida = '<div>La API de JS File no esta en absoluto implementada en tu navegador, cacho de carne!!</div>';
	}

	document.getElementById('deteccion').innerHTML = salida;
}


function detectarSlice(){

	if( window.mozSlice || window.webkitSlice || window.slice ){

		var salida = [
			'<ul>',
				'<legend>API Slice en tu navegador:</legend>',
				'<li>Versión Mozilla: ' + Boolean(window.mozSlice) +'</li>',
				'<li>Versión Webkit: ' + Boolean(window.webkitSlice) +'</li>',
				'<li>Versión común: ' + Boolean(window.slice) +'</li>',
			'</ul>'
		].join('');

	} else {

		var salida = '<div>La API Slice no esta implementada en tu navegador, cacho de carne!!</div>';
	}

	document.getElementById('deteccion').innerHTML += "<br>" + salida;
}


function iniciar(){

	detectarFile();
	detectarSlice();
}

window.addEventListener('load', iniciar, false)

//variables
var send = document.getElementById('send');
var isbn = document.getElementById('isbn');
var año = document.getElementById('año');
var autor = document.getElementById('autor');
var title = document.getElementById('title');
var place = document.getElementById('place');
var edi = document.getElementById('edi');
//Funciones
send.onclick = function(){
	//Verificando los textos
	console.log(edi.value.search(/^([0-9])*$|([0-9])\s.+/));
	if (autor.value.search(/^([0-9])*$|([0-9])\s.+/) != -1) {
		window.alert('El nombre de autor debe ser texto');
		return false;
	}
	else if (title.value.search(/^([0-9])*$|([0-9])\s.+/) != -1) {
		window.alert('El título debe ser texto');
		return false;
	}
	else if (place.value.search(/[A-Z]+|[a-z]+/) != 0) {
		window.alert('El campo de lugar debe comenzar con texto');
		return false;
	}
	else if (edi.value.search(/^([0-9])*$|([0-9])\s.+/) != -1) {
		window.alert('La editorial debe ser texto');
		return false;
	}
	else if (año.value.length != 4) {
		window.alert('El año ingresado no es correcto');
		return false;
	}
	else if(isbn.value.search(/[0-9]{3}[-][0-9]{2}[-][0-9]{4}[-][0-9]{3}[-][0-9]{1}/) != 0)
	{
		window.alert('El ISBN no es correcto');
		return false;
	}
}
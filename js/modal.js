//alamcena en variable el elemento de la ventana modal
var modal = document.getElementById('simpleModal');

//alamcena en variable el boton para abrir  la ventana modal
var modalBtn = document.getElementById('modalBtn');


//alamcena en variable el boton para cerrar la ventana modal
var closeBtn = document.getElementsByClassName('closeBtn')[0];

//accion cuando se clickea el boton para abrir
modalBtn.addEventListener('click', openModal);
//accion cuando se clickea el boton para cerrar
closeBtn.addEventListener('click', closeModal);
//accion cuando se hace click afuera de al ventana
window.addEventListener('click', clickOutside);


//funcion para abrir la ventana modal
function openModal(){
	modal.style.display = 'block';
} 

//funcion para cerrar la ventana modal
function closeModal(){
	modal.style.display = 'none';
}

//funcion para cerrar la ventana modal cuando se clickea afuera de la ventana
function clickOutside(e){
	if (e.target == modal) {
		modal.style.display = 'none';
	}
}

$( function() {
    $( "#draggable" ).draggable();
  } );
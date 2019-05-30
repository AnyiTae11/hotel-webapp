var btnAbrirPopup = document.querySelectorAll('btn-abrir-popup'),
	overlay = document.querySelectorAll('overlay'),
	popup = document.querySelectorAll('popup'),
	btnCerrarPopup = document.querySelectorAll('btn-cerrar-popup');

btnAbrirPopup.addEventListener('click', function(){
	overlay.classList.add('active');
	popup.classList.add('active');
});

btnCerrarPopup.addEventListener('click', function(e){
	e.preventDefault();
	overlay.classList.remove('active');
	popup.classList.remove('active');
});
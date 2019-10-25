// Validaciones
// Espera a que se cargue el documento
$(document).ready(function(){

	// Boton
	let submit = document.getElementById('submit');
	// Mensajes de error
	let requiredError = document.getElementById('requiredError');
	let textError = document.getElementById('textError');
	let numError = document.getElementById('numError');
	// Deshabilito el boton
	submit.disabled = true;
	// Oculto los mensajes de error
	requiredError.hidden = true;
	textError.hidden = true;
	numError.hidden = true;

	$('input').change(function(){
		validator();

	});

	
	function validator(){
		requiredError.hidden = true;
		textError.hidden = true;
		numError.hidden = true;
		// Todos los inputs
		let inputs = document.querySelectorAll('input');
		// Numero de campos requeridos
		var requiresNum = 0;


		// Recorro los input para saber cual tiene algun valor y cual no
		for (var i = 0; i < inputs.length; i++) {
			// Compruebo que tenga el atributo data-required
			if (inputs[i].dataset.required) {
				// Compruebo que dicho campo tenga un valor
				if (inputs[i].value) {
					if (inputs[i].dataset.number) {
						if (!isNaN(inputs[i].value)) {
							requiresNum++;
						}else{
							numError.hidden = false;
						}
					}else if(inputs[i].dataset.text){
						if (inputs[i].value.includes('<')) {
							textError.hidden = false;
						}else{
							requiresNum++;
						}
					}
				}else{
					requiredError.hidden = false;
				}
			}
		}
		comprobar(requiresNum);

	}

	function comprobar(int){
		// Siempre que requiresNum sea igual a 5 se activará el boton
		if(int === 5){
			submit.disabled = false;
			requiredError.hidden = true;
			textError.hidden = true;
			numError.hidden = true;
		}
	}


});




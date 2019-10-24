// Validaciones
// Espera a que se cargue el documento
$(document).ready(function(){

	// Boton
	let submit = document.getElementById('submit');
	// Deshabilito el boton
	submit.disabled = true;
	$('requiredError').hide();
	$('textError').hide();
	$('numError').hide();

	$('input').change(function(){
		console.log('ALgun input esta cambiando');
		$('requiredError').hide();
		$('textError').hide();
		$('numError').hide();
		validator();

	});

	
	function validator(){
		console.log('Empieza a validar');
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
							$('#numError').show();
						}
					}else if(inputs[i].dataset.text){
						if (inputs[i].value.includes('<')) {
							$('#textError').show();
						}else{
							requiresNum++;
						}
					}
				}else{
					$('#requiredError').show();
				}
			}
		}
		comprobar(requiresNum);

	}

	function comprobar(int){
		console.log(typeof(int));
		// Siempre que requiresNum sea igual a 5 se activará el boton
		if(int === 5){
			submit.disabled = false;
			$('requiredError').hide();
			$('textError').hide();
			$('numError').hide();
		}
	}


});




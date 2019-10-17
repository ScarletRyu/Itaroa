// Validaciones
// Espera a que se cargue el documento
$(document).ready(function(){
	// Cada vez que se cambie un input se ejecutará la funcion validate
	$('input').change(function(){

/*						Formulario de modificación de productos 					*/

		// Llama a la funcion validate del plugin de jquery
		$('#modificar').validate({
			// Especifica las reglas de validación que se aplican al formulario
			rules: {
				name: "required",
				descripcion: "required",
				stock: {
					required: true,
					number: true
				},
				enlace: {
					required: true,
					url: true
				}
			},
			// Los mensajes de error en caso de que no se cumplan los requisitos
			messages: {
				name: "Es necesario que introduzca un nombre",
				descripcion: "Es necesario que introduzca una descripcion",
				stock: {
					required: "Es necesario que indique el stock del producto",
					number: "El stock debe ser un numero"
				},
				enlace: {
					required: "Es necesario que introduzca un enlace",
					url: "Debe introducir un enlace valido"
				}
			}
		});

/*						Formulario de creación de productos 					*/

		// Llama a la funcion validate del plugin de jquery
		$('#crear').validate({
			// Especifica las reglas de validación que se aplican al formulario
			rules: {
				name: "required",
				descripcion: "required",
				stock: {
					required: true,
					number: true
				},
				enlace: {
					required: true,
					url: true
				}
			},
			// Los mensajes de error en caso de que no se cumplan los requisitos
			messages: {
				name: "Es necesario que introduzca un nombre",
				descripcion: "Es necesario que introduzca una descripcion",
				stock: {
					required: "Es necesario que indique el stock del producto",
					number: "El stock debe ser un numero"
				},
				enlace: {
					required: "Es necesario que introduzca un enlace",
					url: "Debe introducir un enlace valido"
				}
			}
		});
	});
});
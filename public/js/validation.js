// Validaciones
// Espera a que se cargue el documento
$(document).ready(function(){
		// Evito que se recargue la pagina al darle al boton	
		document.getElementById('submit').addEventListener("click", function(event){
	  		event.preventDefault()
		});

		$('#submit').click(function(){
			console.log('Has pulsado el boton');
			// Recojo el formulario (Modificar)
			var form = document.getElementById('form');


			var inputs = document.querySelectorAll('input');
			for (var i = inputs.length - 1; i >= 0; i--) {
				console.log(inputs[i].name+inputs[i].value);
			}




			// Compruebo que los elementos no esten vacios
			if (form.name.value && form.description.value && form.price.value && form.stock.value && form.link.value != '' || null) {
				console.log('todos los campos tienen algo');
				$( "p" ).text( "" );
			}else{
				$( "button[id='submit']" ).after( "<p>Todos los valores con * son requeridos<p>" );
			}

			// Validar el precio
			if (isNaN(form.price.value)) {
				$( "input[name='price']" ).after( "<p>El precio debe ser un numero<p>" );
			}else{
				// Borrar el p anterior
			}

			// Validar el stock
			if (isNaN(form.stock.value)) {
				$( "input[name='stock']" ).after( "<p>El stock debe ser un numero<p>" );
			}else{
				// Borrar el p anterior
			}


		});


});

/*						Formulario de modificación de productos 					

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

/*						Formulario de creación de productos 					

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
	});*/
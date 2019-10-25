$(document).ready(function($) {
	$('.tarjeta').hover(function(){
		$(this).children('.datos').fadeIn(200);
	},function(){
		$(this).children('.datos').fadeOut(200);
	})


	$('#icono_menu').click(function(event) {
		$('#buscador').slideToggle(400);
	});

	
});

$(document).ready(function($) {
	$('.tarjeta').hover(function(){
		$(this).children('.datos').fadeIn(200);
	},function(){
		$(this).children('.datos').fadeOut(200);
	})
	
});

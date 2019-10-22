<!DOCTYPE html>
<html>
<head>
	<title>Itaro</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/efectos.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div id="contenedor">
		<nav>
			<ul>
				<li><a href="#restaurantes">Restaurantes</a></li>
				<li><a href="#tiendas">Tiendas</a></li>
				<li><a href="#ubicacion">Donde estamos</a></li>
				<li></li>
			</ul>

		<div id="Idiomas">
        <img class="flags" src="img/flags/ukflag.jpeg" onclick="traducir('eng')">				
	    <img class="flags" src="img/flags/spainflag.jpeg" onclick="traducir('esp')">
		<img class="flags" src="img/flags/euskalflag.jpeg" onclick="traducir('eus')">
		
		</nav>
		<header>
			<img src="img/portada.jpg">
			<div id="entrada">
				<h1>Itaroa</h1>
			</div>
		</header>
		<section>
			<h3>TIENDAS</h3>
			<article id="stores">
				@foreach($shops as $shop)
				<div class="tarjeta">
					<img src="{{$shop->photo}}">
					<div class="datos">
						<ul>
							<li>Nombre:<a href="{{route('stores.show', $shop->id)}}">{{$shop->name}}</a></li>
							<li>Abre a las: {{$shop->openAt}}</li>
							<li>Cierra a las: {{$shop->closeAt}}</li>
						</ul>
					</div>
				</div>
				@endforeach
			</article>
			<h3>RESTAURANTES</h3>
			<article id="rests">
				@foreach($restaurants as $restaurant)
				<div class="tarjeta">
					<img src="{{$restaurant->photo}}">
					<div class="datos">
						<ul>
							<li>Nombre:<a href="{{route('stores.show', $restaurant->id)}}">{{$restaurant->name}}</a></li>
							<li>Abre a las: {{$restaurant->openAt}}</li>
							<li>Nombre: Paco</li>
						</ul>
					</div>
				</div>
				@endforeach
			</article>
			<article>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5852.228874929889!2d-1.5852752611111365!3d42.828196430132266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd509496b2fd8013%3A0xc7c9487a4ea69d85!2sCentro%20Comercial%20Itaroa!5e0!3m2!1ses!2ses!4v1571293994574!5m2!1ses!2ses" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</article>
			<p id="direccion">Encuentranos en: <br>Calle Intxaurdia, 5, 31620 Huarte, Navarra</p>
			
		</section>
	</div>
</body>
</html>
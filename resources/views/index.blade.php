<!DOCTYPE html>
<html>
<head>
	<title>Itaro</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/jquery/jquery-3.1.1.js"></script>
	<script src="js/efectos.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div id="contenedor">
		
		<header>
			<img src="img/portada.jpg">
			<div id="entrada">
				<h1>Itaroa</h1>
			</div>
		</header>
		<nav>
			<div id="buscador">
				<ul>
					<li><a href="#stores">Tiendas</a></li>
					<li><a href="#rests">Restaurantes</a></li>
					<li><a href="#ubicacion">Donde estamos</a></li>
					<li><a href="#contacto">Contacta con nosotros</a></li>
				</ul>
			</div>
			<div id="idiomas">
				<ul>
					<li>Eu</li>
					<li>En</li>
					<li>Es</li>
				</ul>
			</div>
		</nav>
		<section id="stores">
			<h3>TIENDAS</h3>
			<article>
				@foreach($shops as $shop)
				
				<div class="tarjeta">

					<img src="{{$shop->photo}}">
					
					<div class="datos">
						<ul>
							<li><a href="{{route('stores.show', $shop->id)}}">{{$shop->name}}</a></li>
							<li>De: {{$shop->openAt}}</li>
							<li>A: {{$shop->closeAt}}</li>
							<li>Teléfono: {{$shop->phone}}</li>
						</ul>
					</div>

				</div>
				
				@endforeach
			</article>
		</section>
		<section id="rests">
			<h3>RESTAURANTES</h3>
			<article>
				@foreach($restaurants as $restaurant)
				<div class="tarjeta">
					<img src="{{$restaurant->photo}}">
					<div class="datos">
						<ul>
							<li><a href="{{route('stores.show', $restaurant->id)}}">{{$restaurant->name}}</a></li>
							<li>De: {{$restaurant->openAt}}</li>
							<li>A: {{$restaurant->closeAt}}</li>
							<li>Teléfono: {{$restaurant->phone}}</li>
						</ul>
					</div>
				</div>
				@endforeach
			</article>
		</section>
		<section id="ubicacion">
			
				<iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5852.228874929889!2d-1.5852752611111365!3d42.828196430132266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd509496b2fd8013%3A0xc7c9487a4ea69d85!2sCentro%20Comercial%20Itaroa!5e0!3m2!1ses!2ses!4v1571293994574!5m2!1ses!2ses" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			
		</section>
		<section id="contacto">
			<form>
				<label>Nombre: </label><br>
				<input id="nombre" type="text" name="" placeholder="ej: Paco Jimenez"><br>
				<label>E-mail: </label><br>
				<input id="email" type="email" name="" placeholder="ej: pacojimenez@tucorreo.com"><br>
				<label>Escribenos tu comentario</label><br>
				<textarea id="comentario"></textarea><br>
				<input type="button" name="" value="Enviar">
			</form>
		</section>
		<footer><span>Ander Gonzalez, Nerea Labandera & Jon Imanol Pinto</span></footer>
	</div>
</body>
</html>
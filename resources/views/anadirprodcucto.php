<!DOCTYPE html>
<html>
<head>
	<title>Itaro</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
<div class="container">
  <form>
    <ul class="flex-outer">
      <li>
        <label for="prod-id">ID</label>
        <input type="text" id="prod-id" placeholder="Introduce ID de producto">
      </li>
      <li>
        <label for="name">Nombre</label>
        <input type="text" id="name" placeholder="Introduce nombre producto">
      </li>
      <li>
        <label for="Stock">Descripcion</label>
        <textarea rows="6" id="message" placeholder="Introduce una breve descripcion"></textarea>
      </li>
      <li>
        <label for="img">Imagen</label>
        <input type="file" id="img" placeholder="Seleccione una imagen">
      </li>
      <li>
        <label for="link">Link</label>
        <input type="url" id="url" placeholder="Introduce un Link">
      <li>
        <button type="submit">Añadir</button>
      </li>
    </ul>
  </form>
</div>
</body>
</html>
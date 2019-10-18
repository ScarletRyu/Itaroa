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
        <input type="text" id="Descripcion" placeholder="Introduce una breve descripcion">
      </li>
      <li>
        <label for="img">Imagen</label>
        <input type="img" id="img" placeholder="Enter your phone here">
      </li>
      <li>
        <label for="message">Message</label>
        <textarea rows="6" id="message" placeholder="Enter your message here"></textarea>
      </li>
      <li>
        <p>Age</p>
        <ul class="flex-inner">
          <li>
            <input type="checkbox" id="twenty-to-twentynine">
            <label for="twenty-to-twentynine">20-29</label>
          </li>
          <li>
            <input type="checkbox" id="thirty-to-thirtynine">
            <label for="thirty-to-thirtynine">30-39</label>
          </li>
          <li>
            <input type="checkbox" id="fourty-to-fourtynine">
            <label for="fourty-to-fourtynine">40-49</label>
          </li>
          <li>
            <input type="checkbox" id="fifty-to-fiftynine">
            <label for="fifty-to-fiftynine">50-59</label>
          </li>
          <li>
            <input type="checkbox" id="sixty-to-sixtynine">
            <label for="sixty-to-sixtynine">60-69</label>
          </li>
          <li>
            <input type="checkbox" id="other">
            <label for="other">Other</label>
          </li>
        </ul>
      </li>
      <li>
        <button type="submit">Submit</button>
      </li>
    </ul>
  </form>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Itaroa</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Scripts -->
        <script src="js/JQuery/jquery-3.1.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.min.js"></script>
        <script src="js/validation.js"></script>

    </head>
    <body>
        <div>
            <!-- Imagen y nombre del producto -->
            <img src="algunaruta" alt="Image not found">
            <h2>Camiseta </h2>
        </div>
        <div>
            <!-- Formulario de modificación y visualización de datos -->
            <form id="modificar" action="" method="get">
                Nombre: <input type="text" name="name" value="Camiseta sandia L"><br>
                Descripción: <input type="text" name="descripcion" value="Camiseta con estampado de sandias"><br>
                Stock: <input type="number" name="stock" value="2"><br>
                Enlaces de interés: <input type="text" name="enlace"><br>
                <!-- Botones de administración de productos de la tienda -->
                <button id="modificar">Modificar</button>
            </form>
        </div>
    </body>
</html>

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
            <img src="algunaruta" alt="Imagen no encontrada">
            <h2>Crear producto </h2>
        </div>
        <div>
            <!-- Formulario de modificación y visualización de datos -->
            <form id="crear" action="{{Route('products.store')}}" method="post">
                @csrf
                
                <input type="hidden" name="store_id" value="{{$store_id}}">
                Nombre: <input type="text" name="name"><br>
                Descripción: <input type="text" name="descripcion"><br>
                Stock: <input type="number" name="stock"><br>
                Precio: <input type="number" name="price"><br>
                Enlaces de interés: <input type="text" name="link"><br>
                <!-- Botones de administración de productos de la tienda -->
                <button type="submit" class="validar">Crear</button>
            </form>
        </div>
    </body>
</html>

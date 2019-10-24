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
            <form id="form" action="{{Route('products.store')}}" method="post">
                @csrf
                
                <input type="hidden" name="store_id" value="{{$store_id}}">
                <label>Nombre:</label> <input type="text" data-required=true data-text=true name="name"><br>
                <label>Descripción:</label> <input type="text" data-required=true data-text=true name="description"><br>
                <label>Stock:</label> <input type="number" data-required=true data-number=true name="stock"><br>
                <label>Precio:</label> <input type="number" data-required=true data-number=true name="price"><br>
                <label>Enlaces de interés:</label> <input type="text" data-required=true data-text=true name="link"><br>
                <button type="submit" id="submit" class="validar">Crear</button><br>
                <div id='numError'>Los campos 'precio' y 'stock' deben ser numeros.</div><br>
                <div id='textError'>No introduzcas etiquetas html o scripts.</div><br>
                <div id='requiredError'>Todos los campos que tengan * son requeridos.</div>
            </form>
        </div>
    </body>
</html>

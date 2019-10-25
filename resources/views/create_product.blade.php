<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Itaroa</title>
        <!--Estilos-->
        <link rel="stylesheet" type="text/css" href="/css/formulario.css">

        <!-- Scripts -->
        <script src="js/JQuery/jquery-3.1.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.min.js"></script>
        <script src="js/validation.js"></script>


    </head>
    <body>
    <a href="{{URL::previous()}}"><img src="/img/arrow_back_icon.svg"></a>
        <header>
            <!-- Imagen y nombre del producto -->
            <img src="{{$store->photo}}" alt="Imagen del Store donde se guarda el prod">
            <h1>Nuevo producto</h1>
        </header>
        <div id="contenedor">
            <!-- Formulario de modificación y visualización de datos -->
            <form id="form" action="{{Route('products.store')}}" method="post">
                @csrf
                
                <input type="hidden" name="store_id" value="{{$store->id}}">
                <label>Nombre<span>*</span>:</label><br>
                <input type="text" data-required=true data-text=true name="name"><br>
                <label>Descripción<span>*</span>:</label><br>
                <input type="text" data-required=true data-text=true name="description"><br>
                <label>Stock<span>*</span>:</label><br> 
                <input type="number" data-required=true data-number=true name="stock"><br>
                <label>Precio<span>*</span>:</label><br>
                <input type="number" data-required=true data-number=true name="price"><br>
                <label>Foto del producto<span>*</span>:</label><br>
                <input type="file"  name="photo"><br>
                <label>Enlaces de interés<span>*</span>:</label> <br>
                <input type="text" data-required=true data-text=true name="link"><br>
                <button type="submit" id="submit" class="validar">Crear</button><br>
                <div id='numError'>Los campos 'precio' y 'stock' deben ser numeros.</div><br>
                <div id='textError'>No introduzcas etiquetas html o scripts.</div><br>
                <div id='requiredError'>Todos los campos que tengan * son requeridos.</div>
            </form>
        </div>
    </body>
</html>

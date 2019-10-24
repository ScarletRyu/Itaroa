<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Itaroa</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Scripts -->
        <script src="/js/JQuery/jquery-3.1.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.min.js"></script>
        <script type="text/javascript" src="/js/validation.js"></script>

    </head>
    <body>
        <div>
            <!-- Imagen y nombre del producto -->
            <img src="{{$product->photo}}" alt="Imagen no encontrada">
            <h2>{{$product->name}} </h2>
        </div>
        <div>
            <!-- Formulario de modificación y visualización de datos -->
        <form id="modificar" method="POST" action="{{ route('products.update',$product->id) }}" novalidate>
            @csrf
            @method('PUT')
                Nombre: <input type="text" name="name" value="{{$product->name}}" ><br>
                Descripción: <input type="text" name="description" value="{{$product->description}}" ><br>
                Precio: <input type="text" name="price" value="{{$product->price}}" ><br>
                Stock: <input type="number" name="stock" value="{{$product->stock}}" ><br>
                Image: <input type="file" name="photo" value="{{$product->photo}}" ><br>
                Enlaces de interés: <input type="text" name="link" value="{{$product->link}}" ><br>
                <!-- Botones de administración de productos de la tienda -->
                <button id="boton" type="submit" class="validar">Modificar</button>
            </form>
        </div>
    </body>
</html>

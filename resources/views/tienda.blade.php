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
            <!-- Imagen y nombre de la tienda -->
            <img src="algunaruta" alt="Imagen no encontrada">
            <h2>{{$store->name}}</h2>
        </div>
        <div>
            <!-- Listado de productos de la tienda -->
            <table>
                <tr>
                    <th>Codigo de producto</th>
                    <th>Nombre</th>
                    <th>Stock</th>
                    <th>Enlace</th>
                </tr>
                @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->stock}}</td>
                    <td><a href="{{Route('products.show', $product->id)}}">Ver</a></td>
                </tr>
                @endforeach
            </table>
        </div>
        <div>
            <!-- Botones de administración de productos de la tienda -->
            <button>Añadir</button>
        </div>
    </body>
</html>

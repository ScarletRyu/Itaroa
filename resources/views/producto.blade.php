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
        <h2>{{$product->name}} </h2>
        <div id="producto">
            <p>Producto: </p>
            <p>{{$product->name}}</p>
        </div>
        <div id="description">
            <p>Descripción: </p>
            <p>{{$product->description}}</p>
        </div>
        <div id="precio">
            <p>Precio: </p>
            <p>{{$product->price}}€</p>
        </div>
        <div id="enlace">
            <p>Enlace: </p>
            <a href="{{$product->link}}"></a>
        </div>
        <div id="foto">
            <p>Foto: </p>
            <img src="{{$product->photo}}">
        </div>
    </div>
    <div>
        <!-- Formulario de modificación y visualización de datos -->
        <form id="form" method="POST" action="{{ route('products.update',$product->id) }}" novalidate>
            @csrf
            @method('PUT')

            <label>Stock: <label></label><input type="number" name="stock" value="{{$product->stock}}" ><br>
            <button id="submit" type="submit" class="validar">Modificar</button>
        </form>
    </div>
</body>
</html>

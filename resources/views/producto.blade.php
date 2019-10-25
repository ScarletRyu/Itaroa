<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Itaroa</title>
    <!-- Estilos -->
    <link rel="stylesheet" type="text/css" href="/css/producto.css">
    <!-- Scripts -->
    <script src="/js/JQuery/jquery-3.1.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.min.js"></script>
    <script type="text/javascript" src="/js/validation.js"></script>

</head>
<body>
    <a href="{{URL::previous()}}"><img src="/img/arrow_back_icon.svg"></a>
    <div id="contenido">
        <!-- información del producto -->
        <section id="info" >
            <h2>{{$product->name}} </h2>
            <article id="description">
                <p>{{$product->description}}</p>
            </article>
            <article id="precio">
                <p>{{$product->price}}€</p>
            </article>
            <article id="enlace">
                <p>Visita la página oficial de la tienda aquí: </p>
                <a href="{{$product->link}}"></a>
            </article>
            <form method="POST" action="{{ route('products.update',$product->id) }}" novalidate>
                @csrf
                @method('PUT')

                <label>Stock: <label></label><input type="number" name="stock" value="{{$product->stock}}" >
                <button type="submit" class="validar">Modificar</button>
            </form>
        </section>
        <section id="imagen">
            <article>
                <img src="{{$product->photo}}">
            </article>
        </section>   
    </div>
</body>
</html>

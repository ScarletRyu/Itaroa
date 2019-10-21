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
            <h2>Zara</h2>
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
                <tr>
                    <td>001</td>
                    <td>Camiseta</td>
                    <td>32</td>
                    <td><button>Ver</button></td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>Pantalón</td>
                    <td>14</td>
                    <td><button>Ver</button></td>
                </tr>
                <tr>
                    <td>003</td>
                    <td>Zapatatillas</td>
                    <td>20</td>
                    <td><button>Ver</button></td>
                </tr>
            </table>
        </div>
        <div>
            <!-- Botones de administración de productos de la tienda -->
            <form action="anadirproducto.php">
                <input type="submit" value="Añadir nuevo producto" />
            </form>
            <button>Eliminar</button>
        </div>
    </body>
</html>
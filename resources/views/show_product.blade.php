<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Itaroa</title>

        

    </head>
    <body>
        <div>
            <!-- Imagen y nombre del producto -->
            <img src="algunaruta" alt="Imagen no encontrada">
            <h2>Crear producto </h2>
        </div>
        <div>
            <!-- Formulario de modificación y visualización de datos -->
            <form action="" method="POST">
                Nombre: <input type="text" name="name"><br>
                Descripción: <input type="text" name="descripcion"><br>
                Stock: <input type="number" name="stock"><br>
                Enlaces de interés: <input type="text" name="enlace"><br>
                <!-- Botones de administración de productos de la tienda -->
                <form action="anadirproducto.php">
                <input type="submit" value="Añadir nuevo producto" />
            </form>
            
        </div>
    </body>
</html>

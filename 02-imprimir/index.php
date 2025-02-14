<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir por pantalla - Master en PHP</title>
</head>
<body>
    <h1>Master en PHP - victorroblesweb.es</h1>
    <?=
        // Esto es un echo 
        "Bienvenido al curso mas grande de PHP";
    ?>
    <?php
        // Titular de la seccion
        echo "<h3>Listado de videojuegos:</h3>";
        /*
            Esta es una lista
            de videojuegos
            modernos
        */
        echo "<ul>"
            ."<li>GTA</li>"
            ."<li>Fifa</li>"
            ."<li>Mario Bros/li>"
            ."</ul>";
        echo '<p> Esa es toda'.' - '.'lista de videojuegos </p>';
    ?>
</body>
</html>l
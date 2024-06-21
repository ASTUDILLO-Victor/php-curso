<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imprimir por pantalla</title>
</head>
<body>
    <h1>Imprimir por pantalla</h1>
    <?php
    //se puede imprimir codigo html dentro de php usando echo
    echo"<h2>listado de juegos</h2>";

    /*vamos hacer una lista usando ul de hmtl de dos formas 
    de la primera forma usamos la concatenar para unir todo en un solo echo*/
    echo"<ul>"
    ."<li>FiFA 2024</li>"
    ."<li>Cod Mobile</li>"
    ."</ul>";
    //en la segunda opcion se utilizo el echo por cada etiqueta que necesitamos utilizar
    echo"<h2>listado de frutas</h2>";
    echo"<ul>";
    echo"<li>Pera</li>";
    echo"<li>Manzana</li>";
    echo"</ul>";

    echo"<p> estas son las dos maneras";

    ?>
</body>
</html>
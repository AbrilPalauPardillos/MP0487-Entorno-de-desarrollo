<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>EJERCICIO 4:</h1>
<?php

    $letters = array(
        "NOMBRE" => "Sara",
        "APELLIDO" => "Martinez",
        "EDAD" => 23,
        "CIUDAD" => "Barcelona"
    );

    $datos ['EDAD']=24;
    unset($datos['CIUDAD']);

    foreach ($datos as $key => $value) {
        echo "$key: $value <br>";
    }
    ?>  
</body>
</html>
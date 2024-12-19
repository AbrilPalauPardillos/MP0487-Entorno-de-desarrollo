<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>EJERCICIO 3:</h1>
<?php
    $datos = array(
        "dato 1º" => "Sara",
        "dato 2º" => "Martinez",
        "dato 3º" => 23,
        "dato 4º" => "Barcelona"
    );

    $datos ['dato 3º']=24;

    foreach ($datos as $key => $value) {
        echo "$key: $value <br>";
    }
    ?>  
</body>
</html>
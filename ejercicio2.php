<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <!-- INSERTAR EL TITULO DEL EJERCICIO -->
    <h1>EJERCICIO 2:</h1>
    <!-- CREAR EL PHP -->
     
    <?php
        // CREAR EL ARRAY QUE CONTENGA LOS DATOS
    $datos = array(
        "NOMBRE" => "Sara",
        "APELLIDO" => "Martinez",
        "EDAD" => "23",
        "CIUDAD" => "Barcelona"
    );
    // CREAR EL BUCLE FOREACH
    foreach ($datos as $key => $value) {
        echo "$key: $value <br>";
    }
    ?>
</body>
</html>

<!-- LA DIFERENCIA ENTRE EL EJERCICIO 1 Y EL SEJERCICIO 2 ES QUE EN EL
 1 SE ESCRIBIA DAT1º, DATO2º... Y EN ESTE ES CON NOMBRE, APELLIDO... -->
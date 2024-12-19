<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- INSERTAR EL TITULO DEL EJERCICIO -->
    <h1>EJERCICIO 1:</h1>
    <!-- CREACION DEL PHP -->ç
    <?php
    // CREAR EL ARRAY QUE CONTENGA LOS DATOS
    $datos = array(  
        "dato 1º" => "Sara",
        "dato 2º" => "Martinez",
        "dato 3º" => "23",
        "dato 4º" => "Barcelona"
    );
    // EL FOREACH PARA QUE IMPRIMA LOS VALORES DE LA FORMA
    // QUE QUEREMOS. SE TIENE QUE PONER LE $KEY PARA QUE IMPRIMA
    // LA PARTE DE DATO 1º ...
    foreach ($datos as $key => $value) {
        echo "$key: $value <br>";
    }
    ?>
</body>
</html>
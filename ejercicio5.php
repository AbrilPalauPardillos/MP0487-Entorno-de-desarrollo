<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$letters = "a,b,c,d,e,f"; // Cadena de texto

// Convertir la cadena en un array usando explode
$array = explode(",", $letters);

// Ordenar el array en orden descendente
rsort($array);

// Mostrar los elementos del array en el formato solicitado
$contador = 6;
foreach ($array as $key => $value) {
    echo "letter " . ($contador) . ": " . $value . "<br>";
    $contador --;
}
?>
</body>
</html>

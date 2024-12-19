<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $notasEstudiantes = array ("Miguel" => 5,"Luís"=>7,"Marta"=>10,"Isabel"=>8,"Aitor"=>4,"Pepe"=>1);


$media = array_sum($notasEstudiantes) / count($notasEstudiantes);

echo "Media de las notas: " . number_format($media, 2) . "<br>";

echo "Alumnos con nota por encima de la media: <br>";
foreach ($notasEstudiantes as $key => $value) {
    if ($value > $media) {
        echo "$key <br>";
    }
}
?>

</body>
</html>
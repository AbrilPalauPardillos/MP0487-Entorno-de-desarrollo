<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>EJERCICIO 6:</h1>
    <?php
    $notasEstudiantes = array ("Miguel" => 5,"Luís"=>7,"Marta"=>10,"Isabel"=>8,"Aitor"=>4,"Pepe"=>1);

    arsort($notasEstudiantes);

    echo "Notas de los estudiantes: ";
    foreach ($notasEstudiantes as $key => $value) {
        echo "$key : $value. ";
    }

    ?>

</body>
</html>
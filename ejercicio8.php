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


$nota_maxima = max($notasEstudiantes);
$mejor_alumno = array_search($nota_maxima, $notasEstudiantes);

echo "La nota más alta es un $nota_maxima y el/la mejor alumno/a es $mejor_alumno. <br>";
?>

</body>
</html>
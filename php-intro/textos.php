<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Textos</title>
</head>
<body>
    <h1>Trabajar con textos</h1>

<?php

//concatenación
$frase1="Hola, como estás?";
$frase2="Muy bien, gracias";
$frase3="TODO EN MAYUSCULAS";

echo $frase1 . " " . $frase2;
echo "<br>";

//Transformacion de textos

echo "Primera letra en mayuscúscula:" . " " . ucfirst($frase2);
echo "<br>";
echo "Primera letra de cada palabra en mayúscula" . " " . ucwords($frase2);
echo "<br>";
echo "Texto en mayúsculas". " " . strtoupper($frase2);
echo "<br>";
echo "Texto en minúsculas". " " . strtolower($frase3);

//Encontrar caracteres
echo "<br>";
echo "Encontrar un caracter". " ". strchr($frase1, "a");
echo "<br>";

//Reemplazar texto

echo "Reemplazar texto". " ". str_replace("Hola", "Adios", $frase1);


?>

</body>
</html>
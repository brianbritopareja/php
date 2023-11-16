<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>
    
<?php
//definir: funciones
function saludo () {
echo 'Hola caracola';
}

//llamar a la funcion
saludo();

//definir una funcion con parametros
function saludoparametros($nom) {
    echo 'Hola '. $nom;

}

$nombre="Ana";
echo "<br>";
saludoparametros($nombre);



//SUMA

function suma ($num1, $num2){
    $resultado = $num1 + $num2;
    echo "<br> Resultado de la suma: ". $resultado;
}

$numero1=3;
$numero2=5;

suma($numero1, $numero2);

//RESTA
function resta ($num1, $num2){
    $resultado = $num1 - $num2;
    echo "<br> Resultado de la resta: ". $resultado;
}

$numero1=3;
$numero2=5;

resta($numero1, $numero2);


//funciones con return
function sumareturn ($num1, $num2){
    $resultado = $num1 - $num2;
    return $resultado;
}

$numero1=3;
$numero2=5;

$resultadosuma=sumareturn($numero1, $numero2);

echo "<br>$resultadosuma";

resta($resultadosuma, $numero1);


echo "<br>";


//funcion que busca la posicion de un caracter
function buscaletra($frase1){
    echo "encontrar caracter". " ". strchr($frase1, "a");
}

$frase1="Hola, como estás?";

buscaletra($frase1);














?>
</body>
</html>
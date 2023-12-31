<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso PHP</title>
</head>
<body>

    <a href='forloop.php'>ForLoop</a><br>
    <a href='array.php'>Array</a><br>
    <a href="formulario.php">Inicio de sesión</a><br>
    <a href="formulario2.php">Registro</a><br>
    <a href="arrays_funciones.php">Arrays Funciones</a><br>
    <a href="textos.php">Textos</a><br>
    <a href="strings.php">Fechas</a><br>
    <a href="funciones.php">Funciones</a><br>
    <a href="includefuncion.php">Include</a><br>
    <a href="mysql/formulario.php">Formulario</a><br>
    <a href="mysql/conexion.php">Conexion</a><br>
    <a href="actividad/inicio_formulario.php">Inicio actividad</a><br>
    <H1>Primer uso de PHP</H1>
    
    <?php
    //Holaa
    echo 'Hola Caracola';

    //Puedes añadir etiquetas como texto

    echo '<br>';

    echo '<h1>Linea con h1 desde PHP</h1>';

    echo '<br>';

    ?>

    <h2>Otro bloque de</h2>

    <?php
    $nombre='Brian';

    $edad='19';

   
    //echo del contenido de la variable

    echo $nombre;

    //concatenacion de variables

    echo '<h3>Mi nombre es ' . $nombre . '</h3>';
    echo '<br>';
    echo '<h3>Mi nombre es . $nombre . </h3>'; //esto no muestra el valor de la variable

    //Interpolación variables y texto
    echo "<h3>Mi edad: $edad </h3>"
    

    ?>

<h2><?php echo 'Hola'?></h2>

<!-- CONDICIONALES -->
<h2>Condicionales if - else</h2>

<?php
$resultado = 5;
//sintaxis de comparación <=, <
if ($resultado >= 5){
    echo '<h3 style="color:green">Prueba superada</h3>';
}
else{
    echo '<h3 style="color:red">Prueba suspendida</h3>';
}

?> 

<h2>Condicional if - elseif - else</h2>
<!-- Nos permite poder realizar más de una comparación-->

<?php
$resultado = 'A';

if($resultado == 'A'){
    echo '<h3 style="color:green">Prueba superada fantástico!</h3>';
}
else{
    echo '<h3 style="color:red">Prueba NO superada</h3>';
}
?>

<h2>Condicional con switch</h2>
<?php
$resultado = 'C';

switch($resultado){
    case 'A';
    echo '<h3>Enlace a <a href="resultado-login.php">Aquí</a></h3>';
        break;
    case 'B';
        echo '<h3 style="color:yellow">Prueba superada al límite</h3>';
        break;
    default;
        echo '<h3 style="color:red">Prueba NO superada</h3>';
        if($resultado == 'C'){
                echo '<h3>Puedes volver a realizar la prueba pulsando <a href="index.php">Aquí</a></h3>';
        }
        else {
            echo '<h3>No es posible realizar la prueba en este momento</h3>';
        }
        break;
}
?>
<footer>
            <p style="text-align=center">
            Creado por 2Asir<?php $fecha = getdate();
            echo "<br>"; echo "fecha:" . $fecha[ 'mday' ]. "/". $fecha[ 'mon' ]. "/". $fecha[ 'year' ];
            echo "<br>";?>
           
            </p>
 
    </footer>
</body>
</html>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado-login</title>
</head>
<body>


<?php

$rol = "Usuario";

switch($rol){
    case 'Administrador';
    echo '<h3>Puede modificar los datos</h3>';
    echo '<h3>Enlace a data <a href="data.php">Aquí</a></h3>';
    break;        
    case 'Usuario';
    echo '<h3>No puede modificar los datos</h3>';
    echo '<h3>Enlace a data <a href="data.php">Aquí</a></h3>';
    break;
    default;
    echo '<h3 style="color:red">Acceso denegado</h3>';
    break;
    

}
?>


</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>



<?php
$resultado = 'Administrador';

if($resultado == 'Administrador'){
    echo '<h3>Puede modificar los datos</h3>';
    echo '<h3>Enlace a data <a href="data.php">Aquí</a></h3>';
}
else{
    echo '<h3 style="color:red">Solo visualización de datos.</h3>';
}
?>



    
</body>
</html>
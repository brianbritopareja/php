<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>


    
<?php

$password = "Campus";

if($password == 'Campus'){
    echo '<h3>Enlace a <a href="resultado-login.php">Aquí</a></h3>';
}

else {
    echo '<h3 style="color:red">El acceso ha sido denegado</h3>';
}

?>





</body>
</html>
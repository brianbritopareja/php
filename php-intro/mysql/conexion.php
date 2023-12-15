<?php

$link = 'mysql:host=localhost; dbname=tienda';
$usuario = 'web';
$pass = 'Campus.1';

try{
$pdo = new PDO($link, $usuario, $pass);
//echo 'conectado';
echo "Última conexión: " ;
print date("d/m/y G:i:s",time());
} catch(PDEException $e){
    print "Error; " . $e->getMessage(). '<br>';
    die();
}

?>
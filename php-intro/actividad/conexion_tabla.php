<?php

$link = 'mysql:host=brianbasir.es.mialias.net;dbname=brianbd';
$usuario = 'brian';
$pass = 'Campus.123';


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
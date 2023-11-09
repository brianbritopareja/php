
<?php 
$usuario = $_POST['user'];
$password= $_POST['password'];

$arrayusuario = array("Brian"=>123, "Campus"=>1234, "Pepe"=>12345);



echo "<h2>In_array</h2>";

$exite = array_key_exists($usuario, $arrayusuario);


if($exite == 1){
$key=$arrayusuario[$usuario];

if($key == $password){
    echo "Usuario permitido";
}
else{
    echo "Usuario no permitido";
}
}

?>

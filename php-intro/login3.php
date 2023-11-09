
<?php
$usuario = $_POST['user'];
$password= $_POST['password'];


$arrayusuario = array("Brian"=>123, "Campus"=>1234, "Pepe"=>12345);

$exite = array_key_exists($usuario, $arrayusuario);


if($exite == 1){
echo "Usuario existente";
}
else{
    $arrayusuario[$usuario] = $password;
    echo "Usuario creado <br>";
    print_r($arrayusuario);

}


?>
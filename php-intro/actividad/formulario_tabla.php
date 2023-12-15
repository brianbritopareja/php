<?php
include_once "conexion_tabla.php";

// Agregar registros a la tabla

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $mail = $_POST['mail'];
    $pc = $_POST['pc'];
    $ip = $_POST['ip'];

    $sql_insert = 'INSERT INTO trabajo (nombre, apellido, mail, pc, ip) VALUES (?, ?, ?, ?, ?)';
    $sentence_insert = $pdo->prepare($sql_insert);
    $sentence_insert->execute([$nombre, $apellido, $mail, $pc, $ip]);

    header('location: mostrar_tabla.php');
}
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Formulario de Datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        h1{
            text-align: center;
            color: white;
            font-size: 100px;
        }

       form{
        padding: 20px;
        background-color: grey;
        /* margin-left: 40%; */
        
       }

       /* button{
        margin-left: 20%;
       } */

       body{
        background-image: url(https://img.lovepik.com/background/20211022/large/lovepik-black-texture-background-image_500848839.jpg);
       }

       #atras{
        margin-top: 5%;
        margin-left: 50px;
       }
    </style>


</head>
<body>

<h1>Registro</h1>
<center>
<div class="container mt-5">
    
        <div class="col-md-6">
            <form method="post" action="">
                <div class="mb-3">
                    <label for="exampleInputname1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="exampleInputname1" name="nombre" placeholder="Escribe tu nombre...">
                </div>

                <div class="mb-3">
                    <label for="exampleInputlastname1" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="exampleInputlastname1" name="apellido" placeholder="Escribe tu apellido...">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mail</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail" placeholder="Escribe tu correo...">
                    <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputpc1" class="form-label">Número de PC</label>
                    <input type="text" class="form-control" id="exampleInputpc1" name="pc" placeholder="Escribe tu número de pc...">
                </div>

                <div class="mb-3">
                    <label for="exampleInputip1" class="form-label">IP</label>
                    <input type="text" class="form-control" id="exampleInputip1" name="ip" placeholder="Escribe tu IP...">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        
    </div>
</div>
</center>

<button id="atras" onclick="location.href='inicio_formulario.php'" class="btn btn-primary" >Atrás</button>

</body>
</html>

<?php
include_once 'conexion_tabla.php';

$sql_read = 'SELECT * FROM trabajo WHERE ip LIKE "100%"';
$gsent = $pdo->prepare($sql_read);
$gsent->execute();

$resultado = $gsent->fetchAll();


?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
    <style>

      h1{
        text-align: center;
        padding-bottom: 20px;

      }

      table {
      border: red 5px solid;
      width: 15%;
      text-align: center;
      
      }

      tr {
  border: green 5px solid;
}

td {
  border: orange 5px solid;
}
#atras{
        margin-top: 5%;
        margin-left: 50px;
       }
</style>
  
  </head>
  <body>

  <h1>Registros de cvs_db 7 que empiezan por la IP 100</h1>

<center>
  <table>

<tr>
  <th>Nombre</th>
  <th>IP</th>
</tr>

<tr>

<td>            
      <?php foreach($resultado as $dato): ?>
          <div class="text-uppercase" role="alert">
             <?php echo $dato['nombre'];?>
          </div>
      <?php endforeach ?>
    
    </td>



 <td> <?php foreach($resultado as $dato): ?>
          <div class="text-uppercase" role="alert">
             <?php echo $dato['ip'];?>
          </div>
      <?php endforeach ?>
 </td>
    </tr>
</table>
 </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <button id="atras" onclick="location.href='inicio_formulario.php'" class="btn btn-primary" >Atrás</button>


  </body>
</html>




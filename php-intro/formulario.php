<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
         <nav>

             <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Resultados</a></li>
             </ul>    

                 <div id="formlogin">

                     <form action="login2.php" method="post">
                                <div>
                                    <label for="user">Usuario</label>
                                    
                                    <input type="text" name="user" id="user"
                                    placeholder="Aquí tu usuario">

                                </div>
                                <div>
                                    <label for="password">Contraseña</label>
                                    
                                    <input type="text" name="password" id="password"
                                    placeholder="Aquí tu contraseña">
                                </div>
                                <div>
                                    <input type="submit" value="Entrar">
                                </div>

                     </form>
                </div>
         </nav>
    </header>
</body>
</html>
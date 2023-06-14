<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header>
        <h2>Inicio de Sesion</h2>
    </header>

        <!--Formulario para ingresar a la aplicación-->

        <form action="app.php" method="POST">
            <input type="text" name="Nusuario" id="" placeholder="Usuario">
            <input type="password" name="pass" id="" placeholder="Contraseña">
            <input type="submit" value="Ingresar"><br>
            <input type="reset" name="" id="reset" value="Borrar formulario">
            <br>
            <br>

            <!--Enlace para regístro de usuario nuevo-->
            <a href="registro.php">Registrése</a>

        </form>
    
</body>
</html>
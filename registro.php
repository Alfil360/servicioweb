<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header>
        <h2>Registro de Usuario</h2>
    </header>
<!--Se crea un formulario para el registro de usuarios-->

        <form action="crearUsuario.php" method="POST">
            <input type="text" name="nombre" id="" placeholder="Nombres">
            <input type="text" name="apellido" id="" placeholder="Apellidos">
            <input type="text" name="usuario" id="" placeholder="Usuario">
            <input type="password" name="clave" id="" placeholder="************">
            <input type="submit" value="Registrése"><br>
            <input type="reset" value="Borrar formulario">
            <br><br>
            <a href="index.php">Inicio de Sesión</a>
        </form>
    <!--Añado enlace para redirección de paguina en caso de tener unusuario -->
</body>
</html>
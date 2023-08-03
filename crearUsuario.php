<?php

// Se vincula la conexión a la base de datos
include "conexion.php";

// Se crean variables requeridas
$nombres = $_POST['nombre'];
$apellidos = $_POST['apellido'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['clave'];

// Se crea un usuario nuevo mediante sentencia SQL INSERT
$crear = "INSERT INTO `usuarios`(`nombres`, `apellidos`, `usuario`, `contrasena`) VALUES ('$nombres','$apellidos','$usuario','$contrasena')";

$resultado = $conexion->query($crear);


if($resultado){
    header("location:index.php");
}


else{
    header("location:Error.php");
}





?>
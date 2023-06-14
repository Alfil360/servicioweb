<?php
// Se incluye conexión a la base de datos
include "conexion.php";

$usu = $_POST['Nusuario'];
$clave = $_POST['pass'];

//consulta a la base de datos un usuario registrado

$consulta ="select * from usuarios where usuario ='$usu' and contraseña='$clave'";


$resultado =$conexion->query($consulta);

$numreg = $resultado->num_rows;

if($numreg == 1){
    header("location:j&j.php");
}


else{
    header("location:Error.php");
}


?>
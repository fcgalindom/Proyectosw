<?php
include("../../modelo/conexion.php");
$email = $_GET['email'];
$password = $_GET['password'];

$sql = "SELECT cod_estudiante, correo,contrasenia FROM ESTUDIANTE";
$encontrado = false;
$conexion = conectar();
$resultado = mysqli_query($conexion,$sql);

while ($fila = mysqli_fetch_array($resultado)) 
{
    if($fila['correo'] == $email && $fila['contrasenia'] == $password)
    {
        $encontrado = true;
        break;
    }
}

if($encontrado)
{
    header("Location: ../../vista/it-next/it_about.php");
}
else{
    header("Location: ../../vista/formulario/loginproy.php");
}

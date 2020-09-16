<?php
include("../../modelo/conexion.php");
$email = $_GET['email'];
$password = $_GET['password'];

$sql = "SELECT cod_estudiante, correo,contrasenia FROM ESTUDIANTE";
$encontrado = false;
$codigo = 0;
$conexion = conectar();
$resultado = mysqli_query($conexion,$sql);

while ($fila = mysqli_fetch_array($resultado)) 
{
    if($fila['correo'] == $email && $fila['contrasenia'] == $password)
    {
        $codigo = $fila['cod_estudiante'];
        $encontrado = true;
        break;
    }
}

if($encontrado)
{ 
    header("Location: ../../vista/it-next/it_about.php?ky=$codigo");
}
else{
    header("Location: ../../vista/formulario/loginproy.php");
}
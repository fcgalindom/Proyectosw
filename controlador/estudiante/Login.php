<?php

include("../../modelo/conexion.php");

function buscarEstudiante()
{
    $email = $_GET['email'];
    $password = $_GET['password'];
    $password = sha1($password);
    $sql = "SELECT cod_estudiante, correo,contrasenia FROM ESTUDIANTE";
    $codigo = 0;
    $conexion = conectar();
    $resultado = mysqli_query($conexion,$sql);

    foreach ($resultado as $fila) 
    {
        if($fila['correo'] == $email && $fila['contrasenia'] == $password)
        {
            $codigo = $fila['cod_estudiante'];
            break;
        }
    }
    return $codigo;
}


function buscarEmpresa()
{
    $email = $_GET['email'];
    $password = $_GET['password'];
    $password = sha1($password);
    $sql = "SELECT cod_empresa, correo,contrasenia FROM EMPRESA";
    $codigo = 0;
    $conexion = conectar();
    $resultado = mysqli_query($conexion,$sql);
    foreach ($resultado as $fila) 
    {
        if($fila['correo'] == $email && $fila['contrasenia'] == $password)
        {
            $codigo = $fila['cod_empresa'];
            break;
        }
    }
    mysqli_close($conexion);
    return $codigo;
}

$cod_estudiante = buscarEstudiante();
$cod_empresa = buscarEmpresa();

if($cod_estudiante != 0)
{
    header("Location: ../../vista/it-next/it_about.php?ky=$cod_estudiante");
}
elseif ($cod_empresa != 0) 
{
   # header("Location: ");  --> redireccion
   echo "Empresa encontrada";
}
else
{
    # No encontrado
    header("Location: ../../vista/it-next/loginProy.php");
}






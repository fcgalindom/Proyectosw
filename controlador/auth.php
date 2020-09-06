<?php

//--------------------------------------------------------------------------
// Atajos para redireccion
//--------------------------------------------------------------------------
$rutaModelo = "../modelo";
$rutaVista = "../vista";

//--------------------------------------------------------------------------
// Include's
//--------------------------------------------------------------------------
include("$rutaModelo/conexion.php");

//--------------------------------------------------------------------------
// Recibidos de formularios
//--------------------------------------------------------------------------
$email = $_POST['email'];
$password = $_POST['password'];


//--------------------------------------------------------------------------
// Logica
//--------------------------------------------------------------------------
$conexion = conectar();
$encontrado = false;
$sql = "SELECT correo, contrasenia FROM ESTUDIANTE";
$consulta = mysqli_query($conexion,$sql);
while ($fila = mysqli_fetch_array($consulta)) 
{
    if($email == $fila['correo'] && $password == $fila['contrasenia'])
    {
        $encontrado = true;
        break;
    }
}

if ($encontrado) 
{
    echo "encontrado";
}
<?php
$rutaModelo = "../modelo";
$rutaVista = "../vista";

include("$rutaModelo/conexion.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['tel'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$semestre = $_POST['carrera'];
$carrera = $_POST['semestre'];
$contrasenia = $_POST['password'];
$con_contrasenia = $_POST['confirmPassword'];

if(!($contrasenia == $con_contrasenia))
{
 
}
else
{
    $conexion = conectar();
    $sql = "INSERT INTO ESTUDIANTE VALUES(0,$nombre,$telefono,$correo,$direccion,0,$contrasenia,$ciudad,$carrera)";
    $consulta = mysqli_query($conexion,$sql);
}

#echo "$nombre --> $apellido --> $telefono --> $correo --> $direccion --> $ciudad --> $semestre --> $carrera";


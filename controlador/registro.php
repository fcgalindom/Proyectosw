<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$correo = $_POST['email'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$semestre = $_POST['semestre'];
$carrera = $_POST['carrera'];
$contrasenia = $_POST['password'];
$con_contrasenia = $_POST['ConfirmPassword'];

if($contrasenia == $con_contrasenia)
{
  include("../modelo/conexion.php");
  $conexion = conectar();
  $nombre = "$nombre $apellido";
  $sql = "INSERT INTO ESTUDIANTE VALUES(0,'$nombre',$telefono,'$correo','$direccion',0,'$contrasenia',$ciudad,$carrera,NULL)";
  mysqli_query($conexion,$sql);
  mysqli_close($conexion);  
}

echo "$nombre --> $apellido --> $telefono --> $correo --> $direccion --> $ciudad --> $semestre --> $carrera";
    
header("Location: hoja_vida_registro/CRUD_Estudiante.php");
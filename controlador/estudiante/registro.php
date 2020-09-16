<?php

include("../../modelo/conexion.php");
$conexion = conectar();
$cod_estudiante = 0;
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$telefono = $_GET['telefono'];
$email = $_GET['email'];
$direccion = $_GET['direccion'];
$carrera = $_GET['carrera'];
$passowrd = $_GET['password'];
$nombre = "$nombre $apellido";
#$passowrd = md5($passowrd);
$passowrd = sha1($passowrd);
$sql = "INSERT INTO ESTUDIANTE VALUES(0,'$nombre','$telefono','$email','$direccion',0,'$passowrd',$carrera)";
echo $sql;
mysqli_query($conexion, $sql);
mysqli_close($conexion);

header("Location: ../../vista/it-next/it_about.php?ky=$cod_estudiante");
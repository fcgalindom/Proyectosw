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
$semestre = $_GET['semestre'];
$passowrd = $_GET['password'];
$nombre = "$nombre $apellido";
$sql = "INSERT INTO ESTUDIANTE VALUES(0,'$nombre','$telefono','$email','$direccion',0,'$passowrd',1)";
mysqli_query($conexion, $sql);
mysqli_close($conexion);

header("Location: ../../vista/it-next/it_about.php?ky=$cod_estudiante");
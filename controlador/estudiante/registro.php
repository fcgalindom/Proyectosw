<?php

include("../../modelo/conexion.php");
$conexion = conectar();
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$telefono = $_GET['telefono'];
$email = $_GET['email'];
$direccion = $_GET['direccion'];
$carrera = $_GET['carrera'];
$semestre = $_GET['semestre'];
$passowrd = $_GET['password'];
$nombre = "$nombre $apellido";
$passowrd = sha1($passowrd);
$sql = "INSERT INTO ESTUDIANTE VALUES(0,'$nombre','$telefono','$email','$direccion',$carrera,0,'$semestre','$passowrd',0)";
mysqli_query($conexion, $sql);
mysqli_close($conexion);

header("Location: ../../vista/it-next/it_about.php");
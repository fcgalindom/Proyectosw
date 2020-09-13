<?php
include("../modeloEmpresa/conexion.php");

$conexion = conectar();

$descripcion_oferta = $_POST['descripcion'];
$salario = $_POST['salario'];
$tipo_oferta=settype($_POST['tipo_contrato'], 'string');
$fecha = $_POST['fecha'];
$estado = 3;
$n_oferta = $_POST['Noferta'];




$sql = "INSERT INTO oferta  VALUES (0 ,'$n_oferta','$salario','$descripcion_oferta','$fecha',7,'$tipo_oferta')";
$resultado = mysqli_query($conexion, $sql);
mysqli_close($conexion);







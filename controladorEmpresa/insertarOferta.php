<?php
include("../modeloEmpresa/conexion.php");

$conexion = conectar();

$descripcion_oferta = $_POST['descripcion'];
$salario = $_POST['salario'];
$tipo_oferta=settype($_POST['tipo_contrato'], 'string');
$fecha = $_POST['fecha'];
$estado = 3;
$n_oferta = $_POST['Noferta'];
$oferta_carrera = $_POST['oferta_carrera'];
echo $oferta_carrera;
$codigo_empresa = $_POST['codigo'];



$sql = "INSERT INTO oferta  VALUES (0 ,'$n_oferta','$salario','$descripcion_oferta','$fecha','$codigo_empresa','$tipo_oferta','$oferta_carrera')";
$resultado = mysqli_query($conexion, $sql);
mysqli_close($conexion);


header ("Location: ../vistaEmpresa/it-next/ofertas.php");











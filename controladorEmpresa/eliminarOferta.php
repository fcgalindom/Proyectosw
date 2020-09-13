<?php
include("../modeloEmpresa/conexion.php");

$conexion = conectar();

$descripcion_oferta = $_POST['descripcion'];
$salario = $_POST['salario'];
$tipo_oferta=settype($_POST['tipo_contrato'], 'string');
$fecha = $_POST['fecha'];
$estado = 3;
$cod_oferta = $_POST['cod_oferta'];




$sql = "DELETE FROM oferta  WHERE cod_oferta=$cod_oferta";
$resultado = mysqli_query($conexion, $sql);
mysqli_close($conexion);

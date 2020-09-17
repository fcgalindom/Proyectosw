<?php

include("../../../modelo/conexion.php");
$conexion = conectar();
$codigo = $_POST['codigo_estudiante'];
$codigo_oferta = $_POST['codigo_oferta'];

$sql = "DELETE FROM OFERTA_ESTUDIANTE WHERE cod_oferta = $codigo_oferta AND cod_estudiante=$codigo";

mysqli_query($conexion,$sql);
mysqli_close($conexion);
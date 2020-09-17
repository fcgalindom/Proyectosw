<?php
include("../../../modelo/conexion.php");
$conexion = conectar();
$codigo = $_POST['codigo_estudiante'];
$codigo_oferta = $_POST['codigo_oferta'];

$sql = "INSERT INTO OFERTA_ESTUDIANTE VALUES($codigo_oferta,$codigo,1)";

mysqli_query($conexion,$sql);
mysqli_close($conexion);

header("Location: ../../vista/it-next/it_home.php?ky=$codigo");
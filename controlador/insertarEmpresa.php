<?php
include("../modelo/conexion.php");

$conexion = conectar();

$nom_empresa   = $_POST["nombreRazonSocial"];
$nom_comercial = $_POST["nombreComercial"];
$descripccion = NULL;
$estado_empresa =NULL;
$pdf = $_FILES["camaraComercio"]["name"];
$ruta=$_FILES["camaraComercio"]["tmp_name"];

$camara_comercio="../data/dataEmpresa/".$pdf;
copy($ruta,$camara_comercio);
$tipo_de_empresa= null;
$cod_t_empresa= 1;






$sql = "INSERT INTO empresa VALUES (0,'$nom_comercial','$nom_comercial','$descripccion',$cod_t_empresa,'$estado_empresa','$camara_comercio')";
$resultado = mysqli_query($conexion, $sql);
mysqli_close($conexion);

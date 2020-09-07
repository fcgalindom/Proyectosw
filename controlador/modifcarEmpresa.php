<?php 

include("../modelo/conexion.php");

$conexion = conectar();
$cod_empresa=$_GET['cod_empresa'];
$descripcion=$_GET['descripcion'];
$nom_empresa=$_GET['nom_empresa'];

$tipo_empresa=$_GET['cod_t_empresa'];


$sql = "UPDATE empresa  SET   nom_empresa='{$nom_empresa}' ,  descripcion='{$descripcion}', cod_t_empresa='{$tipo_empresa}' WHERE cod_empresa = '{$cod_empresa}' ";


$result = mysqli_query($conexion , $sql);

mysqli_close($conexion);

?>
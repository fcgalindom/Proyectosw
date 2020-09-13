<?php 

include("../modeloEmpresa/conexion.php");

$conexion = conectar();
$cod_empresa=$_POST['cod_empresa'];
$descripcion=$_POST['descripcion'];
$nom_empresa=$_POST['nom_empresa'];
$tipo_empresa=$_POST['cod_t_empresa'];

$img = $_FILES["logo"]["name"];
$ruta=$_FILES["logo"]["tmp_name"];

$logo="../dataEmpresa/logoEmpresa/".$img;
echo $logo;
copy($ruta,$logo);


$sql = "UPDATE empresa  SET   nom_empresa='{$nom_empresa}' ,  descripcion='{$descripcion}', cod_t_empresa='{$tipo_empresa}', logo = '{$logo}' WHERE cod_empresa = '{$cod_empresa}' ";


$result = mysqli_query($conexion , $sql);

mysqli_close($conexion);

?>
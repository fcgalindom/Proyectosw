<?php 
$nom_empresa = $_POST["nom_empresa"];
$nom_comercial= $_POST["nom_comercial"];
$descripcion = $_POST["descripcion"];
$tipo_empresa = $_POST["tipo_empresa"];

$elUsr = "root";
$elPw  = "";
$elServer ="localhost:3306";
$laBd = "feriaop_bd";
     


$conexion =  mysqli_connect( $elServer , $elUsr , $elPw , $laBd  ) ;


$sql = "UPDATE empresa  SET   nom_empresa='{$nom_empresa}' ,  descripcion='{$descripcion}', tipo_empresa='{$tipo_empresa}' WHERE id = '{$variableId}' ";





$result = mysqli_query($conexion , $sql);

 
mysqli_free_result($result);

mysqli_close($conexion)

 ?>

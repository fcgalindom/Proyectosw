<?php


$nom_empresa   = $_POST["nombreRazonSocial"];
$nom_comercial = $_POST["nombreComercial"];
$descripccion = NULL;
$cod_empresa_t = 1;
$estado_empresa =NULL;
$camara_comercio=NULL;


$elUsr = "root";
$elPw = "";
$elServer = "localhost:3306";
$laBd = "feriaop_bd";


$conexion = mysqli_connect($elServer, $elUsr, $elPw, $laBd);


$sql = "INSERT into empresa  VALUES (0, $nom_empresa,$nom_comercial,$descripccion,$cod_empresa_t,$estado_empresa,$camara_comercio);";
$resultado = mysqli_query($conexion, $sql);
mysqli_close($conexion);
?>

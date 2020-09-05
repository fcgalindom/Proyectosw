<?php


$nom_empresa   = $_POST["nombreRazonSocial"];
$nom_comercial = $_POST["nombreComercial"];
$descripccion = NULL;
$cod_empresa_t = 1;
$estado_empresa =NULL;
$camara_comercio=NULL;
$tipo_de_empresa= null;


$elUsr = "root";
$elPw = "";
$elServer = "localhost:3306";
$laBd = "feriaop_bd";
echo $nom_comercial;
echo $nom_empresa;

$conexion = mysqli_connect($elServer, $elUsr, $elPw, $laBd);



$sql = "INSERT INTO empresa VALUES (0,'$nom_comercial','$nom_comercial','$descripccion','$estado_empresa','$camara_comercio','$tipo_de_empresa')";
$resultado = mysqli_query($conexion, $sql);
mysqli_close($conexion);
<?php
include("../modeloEmpresa/conexion.php");
include("../modeloEmpresa/seciones/seguridad.php");

$seguridad= new Seguridad();

$conexion = conectar();



$contraseñaResivida=$_POST["confirmarPassword"];
$contraseñaCifrada=$seguridad->securePassword($contraseñaResivida);
$correo=$_POST["correo"];
$nom_empresa   = $_POST["nombreRazonSocial"];
$nom_comercial = $_POST["nombreComercial"];
$descripccion = NULL;
$estado_empresa =NULL;
$pdf = $_FILES["camaraComercio"]["name"];
$ruta=$_FILES["camaraComercio"]["tmp_name"];


$camara_comercio="../dataEmpresa/dataEmpresa/".$pdf;
copy($ruta,$camara_comercio);
$tipo_de_empresa= null;
$cod_t_empresa= null;
$logo=null;



$sql = "INSERT INTO empresa VALUES (0,'$nom_empresa','$nom_comercial','$descripccion',1,'$estado_empresa','$logo','$correo','$contraseñaCifrada',1,'$camara_comercio')";
$resultado = mysqli_query($conexion, $sql);
mysqli_close($conexion);

header ("Location: ../login/loginProy.php");
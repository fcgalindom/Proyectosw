<?php

function filtrar()
{
include("../../modelo/conexion.php");
$conexion = conectar();

$texto = $_POST['texto'];
$array = [];

$sql = "SELECT descripcion_oferta,cod_oferta FROM oferta, estudiante WHERE estudiante.cod_carrera = oferta.oferta_carrera
GROUP BY descripcion_oferta";

$descripcion = mysqli_query($conexion,$sql);
$x = 0;
foreach ($descripcion as $key) 
{
    $coin = explode(" ", $key['descripcion_oferta']);
    foreach ($coin as $llave) 
    {
        if ($llave == $texto) 
        {
            $array[$x] = $key['cod_oferta'];
            $x++;
        }
    }
}
mysqli_close($conexion);
return $array;
}
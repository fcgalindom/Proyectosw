<?php

function filtrar()
{
include("../../modelo/conexion.php");
$conexion = conectar();

$texto = $_POST['texto'];
$array = [];

$sql = "SELECT logo, nom_oferta, fecha_inicio, descripcion_oferta, OFERTA.cod_oferta
FROM oferta, oferta_estudiante, estudiante, empresa
WHERE
estudiante.cod_estudiante =oferta_estudiante.cod_estudiante AND 
oferta_estudiante.cod_oferta = oferta.cod_oferta AND
empresa.cod_empresa = oferta.cod_empresa AND
estudiante.cod_carrera = oferta.oferta_carrera
GROUP BY logo, nom_oferta, fecha_inicio, descripcion_oferta, oferta.cod_oferta";

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

?>
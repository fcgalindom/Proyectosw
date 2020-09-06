<?php

function retornar_carreras()
{
    $rutaModelo = "../modelo";
    include("$rutaModelo/conexion.php");
    $conexion = conectar();
    $sql = "SELECT cod_carrera, nom_carrera FROM CARRERA";
    $carreras = mysqli_query($conexion,$sql);
    return $carreras;
}

function retornar_ciudades()
{
    $rutaModelo = "../modelo";
    include("$rutaModelo/conexion.php");
    $conexion = conectar();
    $sql = "SELECT * FROM CIUDAD";
    $ciudades = mysqli_query($conexion,$sql);
    return $ciudades;
}
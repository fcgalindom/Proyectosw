<?php

function conectar()
{
    $servidor = 'localhost';
    $usuario = 'root';
    $password = '';
    $base_Datos = 'prueba6';
    $conexion = mysqli_connect($servidor, $usuario, $password, $base_Datos);
    return $conexion;
}

<?php
function conectar()
{
  $servidor = 'localhost';
  $usuario = 'root';
  $password = '';
  $base_Datos = 'feriaop_bd';
  $conexion = mysqli_connect($servidor,$usuario,$password,$base_Datos);

  return $conexion;
}

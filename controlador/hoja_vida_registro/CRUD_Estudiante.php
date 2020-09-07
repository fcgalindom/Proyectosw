<?php

include("../../modelo/conexion.php");

function guardarPerfil()
{
    $perfil = $_POST['perfil'];
    $sql = "INSERT INTO PERFIL VALUES(0,'$perfil')";
    $conexion = conectar();
    mysqli_query($conexion,$sql);
    mysqli_close($conexion);
}

function guardarFormacionAcademica()
{
    $conexion = conectar();
   $ins_bachiller  = $_POST['ins_bachiller'];
    $ingles = $_POST['ingles'];
    $profesion = "";
    $sql = "INSERT INTO FORMACION_ACADEMICA VALUES(0, '$ins_bachiller','$profesion','$ingles')";
    mysqli_query($conexion,$sql);
    mysqli_close($conexion);
    #echo "$ins_bachiller ---> $ingles";
}

function guardarExperienciaLaboral()
{
    #$conexion = conectar();
    $cargo = $_POST['cargo'];
    $empresa = $_POST['empresa'];
    $objetivo = "";
    $funciones = $_POST['fun_principales'];
    $fecha_inicio = "";
    $fecha_fin = $_POST['fecha_fin'];
    #$sql = "INSERT INTO EXP_LABORAL VALUES(0,'$cargo','$empresa','$objetivo','$funciones',$fecha_inicio,$fecha_fin)";
    #mysqli_query($conexion,$sql);
    #mysqli_close($conexion);
    echo "$cargo --> $empresa --> $funciones --> $fecha_fin";
}

function guardarReferencias()
{
    #$conexion = conectar();
    $nombre = $_POST['nom_referencia'];
    $cargo = $_POST['cargo_referencia'];
    $celular = $_POST['celular_referencia'];
   # $sql = "INSERT INTO REFERENCIA VALUES(0,'$nombre','$cargo',$celular,$cod_estudiante)";
   # mysqli_query($conexion,$sql);
   echo "$nombre --> $cargo --> $celular";
}

function guardar_f_tecnica()
{

}

function guardarCertificaciones()
{
    #$conexion = conectar();
    $nombre_cer = $_POST['nombre_certificacion'];
    $ins_certificado = $_POST['ins_certificado'];
    $fec_certificado = $_POST['fec_certificado'];
    $horas = $_POST['cant_horas'];
    #$sql = "INSERT INTO CERTIFICACION VALUES(0,'$nombre_cer','$fec_certificado','$ins_certificado',$horas)";
    #mysqli_query($conexion,$sql);
    echo "$nombre_cer --> $ins_certificado --> $fec_certificado --> $horas";
}

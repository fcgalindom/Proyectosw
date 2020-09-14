<?php

include("../../modelo/conexion.php");

//finalizado
function guardarPerfil()
{
    $perfil = $_POST['perfil'];
    $key = $_POST['key'];
    $sql = "INSERT INTO PERFIL VALUES($key,'$perfil')";
    $conexion = conectar();
    mysqli_query($conexion,$sql);
    mysqli_close($conexion);
}

// finalizado
function guardarFormacionAcademica()
{
    $conexion = conectar();
    $key = $_POST['key'];
    $ins_bachiller  = $_POST['ins_bachiller'];
    $titulo = $_POST['titulo_bachiller'];
    $profesion = $_POST['profesion'];
    $ingles = $_POST['ingles'];
    $fecha = $_POST['fecha_grado'];
    $sql = "INSERT INTO FORMACION_ACADEMICA VALUES($key,'$ins_bachiller','$titulo','$fecha','$profesion','$ingles')";
    mysqli_query($conexion,$sql);
    mysqli_close($conexion);
}

function guardarExperienciaLaboral()
{
    $conexion = conectar();
    $key = $_POST['key'];
    $cargo = $_POST['cargo'];
    $empresa = $_POST['empresa'];
    $funciones = $_POST['fun_principales'];
    $fecha_fin = $_POST['fecha_fin_exp_laboral'];
    $sql = "INSERT INTO EXP_LABORAL VALUES(0,'$cargo','$empresa','$funciones','$fecha_fin',$key)";
    #echo $sql;
    mysqli_query($conexion,$sql);
    mysqli_close($conexion);
}

function guardarExperienciaAcademica()
{
    $conexion = conectar();
    $key = $_POST['key'];
    $nombre = $_POST['nom_exp_academica'];
    $conocimientos = $_POST['con_aplicados'];
    $materia = $_POST['materia'];
    $sql = "INSERT INTO EXP_ACADEMICA VALUES(0,'$nombre','$conocimientos','$materia',$key)";
    mysqli_query($conexion,$sql);
    mysqli_close($conexion);
}

// falta cod_estudiante
function guardarReferencias()
{
    $conexion = conectar();
    $key = $_POST['key'];
    $nombre = $_POST['nom_referencia'];
    $cargo = $_POST['cargo_referencia'];
    $celular = $_POST['celular_referencia'];

    if($nombre != '' && $cargo != '' && $celular != '')
    {
        $sql = "INSERT INTO REFERENCIA VALUES(0,'$nombre','$cargo',$celular,$key)";
        mysqli_query($conexion,$sql);
    }

    $nombre = $_POST['nom_referencia2'];
    $cargo = $_POST['cargo_referencia2'];
    $celular = $_POST['celular_referencia2'];

    if($nombre != '' && $cargo != '' && $celular != '')
    {
        $sql = "INSERT INTO REFERENCIA VALUES(0,'$nombre','$cargo',$celular,$key)";
        mysqli_query($conexion,$sql);
    }
    mysqli_close($conexion);
}

//falta estudiante
function guardar_f_tecnica()
{
    $conexion = conectar();
    $key = $_POST['key'];
    $nombre = $_POST['nom_tecnico'];
    $fecha = $_POST['fec_tecnico'];
    $institucion = $_POST['institucion'];
    $nivel =  1;
    $sql = "INSERT INTO F_TECNICA VALUES(0,'$nombre','$fecha','$institucion',$nivel,$key)";
    mysqli_query($conexion,$sql);
    mysqli_close($conexion);
}

//falta estudiante
function guardarCertificaciones()
{
    $conexion = conectar();
    $key = $_POST['key'];
    $nombre_cer = $_POST['nombre_certificacion'];
    $ins_certificado = $_POST['ins_certificado'];
    $fec_certificado = $_POST['fec_certificado'];
    $horas = $_POST['cant_horas'];
    if($nombre_cer != '' && $ins_certificado != '' && $fec_certificado != '' && $horas != '')
    {
        $sql = "INSERT INTO CERTIFICACION VALUES(0,'$nombre_cer','$fec_certificado','$ins_certificado',$horas,$key)";
        mysqli_query($conexion,$sql);
    }
    mysqli_close($conexion);
}

#guardarPerfil();
#guardarFormacionAcademica();
#guardar_f_tecnica();
#guardarCertificaciones();
#guardarReferencias();
#guardarExperienciaLaboral();
#guardarExperienciaAcademica();
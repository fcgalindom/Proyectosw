<?php

include("../../modelo/conexion.php");
$key = $_POST['key'];

//finalizado
function guardarPerfil()
{
    $perfil = $_POST['perfil'];
    $sql = "INSERT INTO PERFIL VALUES($key,'$perfil')";
    $conexion = conectar();
    mysqli_query($conexion,$sql);
    mysqli_close($conexion);
}

// finalizado
function guardarFormacionAcademica()
{
    #include("../../modelo/conexion.php");
    $conexion = conectar();
    $ins_bachiller  = $_POST['ins_bachiller'];
    $titulo = $_POST['titulo_bachiller'];
    $profesion = $_POST['profesion'];
    $ingles = $_POST['ingles'];
    $fecha = $_POST['fecha_grado'];
    $sql = "INSERT INTO FORMACION_ACADEMICA VALUES(0,'$ins_bachiller','$titulo','$fecha','$profesion','$ingles')";
    mysqli_query($conexion,$sql);
    mysqli_close($conexion);
}

function guardarExperienciaLaboral()
{
    $conexion = conectar();
    $cargo = $_POST['cargo'];
    $empresa = $_POST['empresa'];
    $funciones = $_POST['fun_principales'];
    $fecha_fin = $_POST['fecha_fin_exp_laboral'];
    $sql = "INSERT INTO EXP_LABORAL VALUES(0,'$cargo','$empresa','$funciones','$fecha_fin',1)";
    #echo $sql;
    mysqli_query($conexion,$sql);
    mysqli_close($conexion);
}

function guardarExperienciaAcademica()
{
    $conexion = conectar();
    $nombre = $_POST['nom_exp_academica'];
    $conocimientos = $_POST['con_aplicados'];
    $materia = $_POST['materia'];
    $sql = "INSERT INTO EXP_ACADEMICA VALUES(0,'$nombre','$conocimientos','$materia',1)";
    mysqli_query($conexion,$sql);
    mysqli_close($conexion);
}

// falta cod_estudiante
function guardarReferencias()
{
    $conexion = conectar();
    $nombre = $_POST['nom_referencia'];
    $cargo = $_POST['cargo_referencia'];
    $celular = $_POST['celular_referencia'];
    $sql = "INSERT INTO REFERENCIA VALUES(0,'$nombre','$cargo',$celular,1)";
    mysqli_query($conexion,$sql);
    mysqli_close($conexion);
}

//falta estudiante
function guardar_f_tecnica()
{
    $conexion = conectar();
    $nombre = $_POST['nom_tecnico'];
    $fecha = $_POST['fec_tecnico'];
    $institucion = $_POST['institucion'];
    $nivel =  1;
    $sql = "INSERT INTO F_TECNICA VALUES(0,'$nombre','$fecha','$institucion',$nivel,1)";
    mysqli_query($conexion,$sql);
    mysqli_close($conexion);
}

//falta estudiante
function guardarCertificaciones()
{
    $conexion = conectar();
    $nombre_cer = $_POST['nombre_certificacion'];
    $ins_certificado = $_POST['ins_certificado'];
    $fec_certificado = $_POST['fec_certificado'];
    $horas = $_POST['cant_horas'];
    $sql = "INSERT INTO CERTIFICACION VALUES(0,'$nombre_cer','$fec_certificado','$ins_certificado',$horas,1)";
    #echo $sql;
    mysqli_query($conexion,$sql);
    mysqli_close($conexion);
}

#guardarPerfil();
#guardarFormacionAcademica();
#guardar_f_tecnica();
#guardarCertificaciones();
#guardarReferencias();
#guardarExperienciaLaboral();
#guardarExperienciaAcademica();
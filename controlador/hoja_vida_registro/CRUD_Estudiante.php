<?php

include("../../modelo/conexion.php");
$codigo = $_POST['key'];

//finalizado
function guardarPerfil()
{
    
    $perfil = $_POST['perfil'];
    $key = $_POST['key'];
    $sql = "INSERT INTO PERFIL VALUES($key,'$perfil')";
    echo $sql;
    $conexion = conectar();
    mysqli_query($conexion,$sql);
    mysqli_close($conexion);
}

// finalizado
function guardarFormacionAcademica()
{
    $conexion = conectar();
    $key = $_POST['key'];
    $ins_bachiller  = $_POST['bachillerInst'];
    $titulo = $_POST['bachillerTit'];
    $ingles = $_POST['ingles'];
    $fecha = $_POST['bachillerFecha'];
    $sql = "INSERT INTO FORMACION_ACADEMICA VALUES($key,'$ins_bachiller','$titulo','$fecha','$ingles')";
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
    $fecha_fin = $_POST['fecha_fin'];
    if($cargo != '' && $empresa != '' && $funciones != '' && $fecha_fin != '')
    {
        $sql = "INSERT INTO EXP_LABORAL VALUES(0,'$cargo','$empresa','$funciones','$fecha_fin',$key)";
       mysqli_query($conexion,$sql);
    }

    $cargo = $_POST['cargo2'];
    $empresa = $_POST['empresa2'];
    $funciones = $_POST['fun_principales2'];
    $fecha_fin = $_POST['fecha_fin2'];
    if($cargo != '' && $empresa != '' && $funciones != '' && $fecha_fin != '')
    {
        $sql = "INSERT INTO EXP_LABORAL VALUES(0,'$cargo','$empresa','$funciones','$fecha_fin',$key)";
        mysqli_query($conexion,$sql);
    }

    $cargo = $_POST['cargo3'];
    $empresa = $_POST['empresa3'];
    $funciones = $_POST['fun_principales3'];
    $fecha_fin = $_POST['fecha_fin3'];
    if($cargo != '' && $empresa != '' && $funciones != '' && $fecha_fin != '')
    {
        $sql = "INSERT INTO EXP_LABORAL VALUES(0,'$cargo','$empresa','$funciones','$fecha_fin',$key)";
        mysqli_query($conexion,$sql);
    }

    $cargo = $_POST['cargo4'];
    $empresa = $_POST['empresa4'];
    $funciones = $_POST['fun_principales4'];
    $fecha_fin = $_POST['fecha_fin4'];
    if($cargo != '' && $empresa != '' && $funciones != '' && $fecha_fin != '')
    {
        $sql = "INSERT INTO EXP_LABORAL VALUES(0,'$cargo','$empresa','$funciones','$fecha_fin',$key)";
        mysqli_query($conexion,$sql);
    }
    mysqli_close($conexion);
}

function guardarExperienciaAcademica()
{
    $conexion = conectar();
    $key = $_POST['key'];
    $nombre = $_POST['nom_exp_academica'];
    $conocimientos = $_POST['con_aplicados'];
    $materia = $_POST['materia'];

    if($nombre != '' && $conocimientos != '' && $materia != '')
    {
        $sql = "INSERT INTO EXP_ACADEMICA VALUES(0,'$nombre','$conocimientos','$materia',$key)";
        mysqli_query($conexion,$sql);
    }

    $nombre = $_POST['nom_exp_academica2'];
    $conocimientos = $_POST['con_aplicados2'];
    $materia = $_POST['materia2'];
    if($nombre != '' && $conocimientos != '' && $materia != '')
    {
        $sql = "INSERT INTO EXP_ACADEMICA VALUES(0,'$nombre','$conocimientos','$materia',$key)";
        mysqli_query($conexion,$sql);
    }

    $nombre = $_POST['nom_exp_academica3'];
    $conocimientos = $_POST['con_aplicados3'];
    $materia = $_POST['materia3'];
    if($nombre != '' && $conocimientos != '' && $materia != '')
    {
        $sql = "INSERT INTO EXP_ACADEMICA VALUES(0,'$nombre','$conocimientos','$materia',$key)";
        mysqli_query($conexion,$sql);
    }
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
    $nombre = $_POST['tecnicoTit'];
    $fecha = $_POST['tecnicoFecha'];
    $institucion = $_POST['tecnicoInst'];
    $nivel =  1;
    if($nombre != '' && $fecha != '' && $institucion != '')
    {
        $sql = "INSERT INTO F_TECNICA VALUES(0,'$nombre','$fecha','$institucion',$nivel,$key)";
        mysqli_query($conexion,$sql);
    }

    $nombre = $_POST['nom_tecnico2'];
    $fecha = $_POST['fec_tecnico2'];
    $institucion = $_POST['institucion2'];
    $nivel =  1;
    if($nombre != '' && $fecha != '' && $institucion != '')
    {
        $sql = "INSERT INTO F_TECNICA VALUES(0,'$nombre','$fecha','$institucion',$nivel,$key)";
        mysqli_query($conexion,$sql);
    }

    $nombre = $_POST['nom_tecnico3'];
    $fecha = $_POST['fec_tecnico3'];
    $institucion = $_POST['institucion3'];
    $nivel =  1;
    if($nombre != '' && $fecha != '' && $institucion != '')
    {
        $sql = "INSERT INTO F_TECNICA VALUES(0,'$nombre','$fecha','$institucion',$nivel,$key)";
        mysqli_query($conexion,$sql);
    }

    $nombre = $_POST['nom_tecnologo'];
    $fecha = $_POST['fec_tecnologo'];
    $institucion = $_POST['institucion4'];
    $nivel =  2;
    if($nombre != '' && $fecha != '' && $institucion != '')
    {
        $sql = "INSERT INTO F_TECNICA VALUES(0,'$nombre','$fecha','$institucion',$nivel,$key)";
        mysqli_query($conexion,$sql);
    }

    $nombre = $_POST['nom_tecnologo2'];
    $fecha = $_POST['fec_tecnologo2'];
    $institucion = $_POST['institucion5'];
    $nivel =  2;
    if($nombre != '' && $fecha != '' && $institucion != '')
    {
        $sql = "INSERT INTO F_TECNICA VALUES(0,'$nombre','$fecha','$institucion',$nivel,$key)";
        mysqli_query($conexion,$sql);
    }

    $nombre = $_POST['nom_tecnologo3'];
    $fecha = $_POST['fec_tecnologo3'];
    $institucion = $_POST['institucion6'];
    $nivel =  2;
    if($nombre != '' && $fecha != '' && $institucion != '')
    {
        $sql = "INSERT INTO F_TECNICA VALUES(0,'$nombre','$fecha','$institucion',$nivel,$key)";
        mysqli_query($conexion,$sql);
    }
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
        $sql = "INSERT INTO CERTIFICACION VALUES(0,'$nombre_cer','$ins_certificado',$horas,'$fec_certificado',$key)";
        echo $sql."<br>";
        mysqli_query($conexion,$sql);
    }

    $nombre_cer = $_POST['nombre_certificacion2'];
    $ins_certificado = $_POST['ins_certificado2'];
    $fec_certificado = $_POST['fec_certificado2'];
    $horas = $_POST['cant_horas2'];
    if ($nombre_cer != '' && $ins_certificado != '' && $fec_certificado != '' && $horas != '') 
    {
        $sql = "INSERT INTO CERTIFICACION VALUES(0,'$nombre_cer','$ins_certificado',$horas,'$fec_certificado',$key)";
        echo $sql."<br>";
        mysqli_query($conexion,$sql);
    }

    $nombre_cer = $_POST['nombre_certificacion3'];
    $ins_certificado = $_POST['ins_certificado3'];
    $fec_certificado = $_POST['fec_certificado3'];
    $horas = $_POST['cant_horas3'];
    if ($nombre_cer != '' && $ins_certificado != '' && $fec_certificado != '' && $horas != '') 
    {
        $sql = "INSERT INTO CERTIFICACION VALUES(0,'$nombre_cer','$ins_certificado',$horas,'$fec_certificado',$key)";
        echo $sql."<br>";
        mysqli_query($conexion,$sql);
    }

    $nombre_cer = $_POST['nombre_certificacion4'];
    $ins_certificado = $_POST['ins_certificado4'];
    $fec_certificado = $_POST['fec_certificado4'];
    $horas = $_POST['cant_horas4'];
    if ($nombre_cer != '' && $ins_certificado != '' && $fec_certificado != '' && $horas != '') 
    {
        $sql = "INSERT INTO CERTIFICACION VALUES(0,'$nombre_cer','$ins_certificado',$horas,'$fec_certificado',$key)";
        echo $sql."<br>";
        mysqli_query($conexion,$sql);
    }
    mysqli_close($conexion);
}

guardarPerfil();
guardarFormacionAcademica();
guardar_f_tecnica();
guardarCertificaciones();
guardarReferencias();
guardarExperienciaLaboral();
guardarExperienciaAcademica();

header("Location: ../../vista/it-next/it_about.php?ky=$codigo");
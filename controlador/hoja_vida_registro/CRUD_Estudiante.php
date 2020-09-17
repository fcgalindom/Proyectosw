<?php

include("../../modelo/conexion.php");
$codigo = $_POST['key'];

//finalizado
function guardarPerfil()
{
    
    $perfil = $_POST['perfil'];
<<<<<<< HEAD
    $codigo=$_SESSION['id'];
    $sql = "INSERT INTO PERFIL VALUES($codigo,'$perfil')";
=======
    $key = $_POST['key'];
    $sql = "INSERT INTO PERFIL VALUES($key,'$perfil')";
>>>>>>> a2780013978197ecca1011b785f9a7c07b5c7fd6
    echo $sql;
    $conexion = conectar();
    mysqli_query($conexion,$sql);
    mysqli_close($conexion);
    header("Location: ../../vista/it-next/it_home.php");
}

// finalizado
function guardarFormacionAcademica()
{
    $conexion = conectar();
<<<<<<< HEAD
    $codigo=$_SESSION['id'];
=======
    $key = $_POST['key'];
>>>>>>> a2780013978197ecca1011b785f9a7c07b5c7fd6
    $ins_bachiller  = $_POST['bachillerInst'];
    $titulo = $_POST['bachillerTit'];
    $ingles = $_POST['ingles'];
    $fecha = $_POST['bachillerFecha'];
<<<<<<< HEAD
    $sql = "INSERT INTO FORMACION_ACADEMICA VALUES($codigo,'$ins_bachiller','$titulo','$fecha','$ingles')";
=======
    $sql = "INSERT INTO FORMACION_ACADEMICA VALUES($key,'$ins_bachiller','$titulo','$fecha','$ingles')";
>>>>>>> a2780013978197ecca1011b785f9a7c07b5c7fd6
    mysqli_query($conexion,$sql);
    mysqli_close($conexion);
    header("Location: ../../vista/it-next/it_home.php");
}

function guardarExperienciaLaboral()
{
    $conexion = conectar();
    $codigo=$_SESSION['id'];
    $cargo = $_POST['cargo'];
    $empresa = $_POST['empresa'];
    $funciones = $_POST['fun_principales'];
    $fecha_fin = $_POST['fecha_fin'];
    if($cargo != '' && $empresa != '' && $funciones != '' && $fecha_fin != '')
    {
<<<<<<< HEAD
        $sql = "INSERT INTO EXP_LABORAL VALUES(0,'$cargo','$empresa','$funciones','$fecha_fin',$codigo)";
=======
        $sql = "INSERT INTO EXP_LABORAL VALUES(0,'$cargo','$empresa','$funciones','$fecha_fin',$key)";
>>>>>>> a2780013978197ecca1011b785f9a7c07b5c7fd6
       mysqli_query($conexion,$sql);
    }

    $cargo = $_POST['cargo2'];
    $empresa = $_POST['empresa2'];
    $funciones = $_POST['fun_principales2'];
    $fecha_fin = $_POST['fecha_fin2'];
    if($cargo != '' && $empresa != '' && $funciones != '' && $fecha_fin != '')
    {
        $sql = "INSERT INTO EXP_LABORAL VALUES(0,'$cargo','$empresa','$funciones','$fecha_fin',$codigo)";
        mysqli_query($conexion,$sql);
    }

    $cargo = $_POST['cargo3'];
    $empresa = $_POST['empresa3'];
    $funciones = $_POST['fun_principales3'];
    $fecha_fin = $_POST['fecha_fin3'];
    if($cargo != '' && $empresa != '' && $funciones != '' && $fecha_fin != '')
    {
        $sql = "INSERT INTO EXP_LABORAL VALUES(0,'$cargo','$empresa','$funciones','$fecha_fin',$codigo)";
        mysqli_query($conexion,$sql);
    }

    $cargo = $_POST['cargo4'];
    $empresa = $_POST['empresa4'];
    $funciones = $_POST['fun_principales4'];
    $fecha_fin = $_POST['fecha_fin4'];
    if($cargo != '' && $empresa != '' && $funciones != '' && $fecha_fin != '')
    {
        $sql = "INSERT INTO EXP_LABORAL VALUES(0,'$cargo','$empresa','$funciones','$fecha_fin',$codigo)";
        mysqli_query($conexion,$sql);
    }
    mysqli_close($conexion);
    header("Location: ../../vista/it-next/it_home.php");
}

function guardarExperienciaAcademica()
{
    $conexion = conectar();
    $codigo=$_SESSION['id'];
    $nombre = $_POST['nom_exp_academica'];
    $conocimientos = $_POST['con_aplicados'];
    $materia = $_POST['materia'];

    if($nombre != '' && $conocimientos != '' && $materia != '')
    {
        $sql = "INSERT INTO EXP_ACADEMICA VALUES(0,'$nombre','$conocimientos','$materia',$codigo)";
        mysqli_query($conexion,$sql);
    }

    $nombre = $_POST['nom_exp_academica2'];
    $conocimientos = $_POST['con_aplicados2'];
    $materia = $_POST['materia2'];
    if($nombre != '' && $conocimientos != '' && $materia != '')
    {
        $sql = "INSERT INTO EXP_ACADEMICA VALUES(0,'$nombre','$conocimientos','$materia',$codigo)";
        mysqli_query($conexion,$sql);
    }

    $nombre = $_POST['nom_exp_academica3'];
    $conocimientos = $_POST['con_aplicados3'];
    $materia = $_POST['materia3'];
    if($nombre != '' && $conocimientos != '' && $materia != '')
    {
        $sql = "INSERT INTO EXP_ACADEMICA VALUES(0,'$nombre','$conocimientos','$materia',$codigo)";
        mysqli_query($conexion,$sql);
    }
    mysqli_close($conexion);
    header("Location: ../../vista/it-next/it_home.php");
}

// falta cod_estudiante
function guardarReferencias()
{
    $conexion = conectar();
    $codigo=$_SESSION['id'];
    $nombre = $_POST['nom_referencia'];
    $cargo = $_POST['cargo_referencia'];
    $celular = $_POST['celular_referencia'];

    if($nombre != '' && $cargo != '' && $celular != '')
    {
        $sql = "INSERT INTO REFERENCIA VALUES(0,'$nombre','$cargo',$celular,$codigo)";
        mysqli_query($conexion,$sql);
    }

    $nombre = $_POST['nom_referencia2'];
    $cargo = $_POST['cargo_referencia2'];
    $celular = $_POST['celular_referencia2'];

    if($nombre != '' && $cargo != '' && $celular != '')
    {
        $sql = "INSERT INTO REFERENCIA VALUES(0,'$nombre','$cargo',$celular,$codigo)";
        mysqli_query($conexion,$sql);
    }
    mysqli_close($conexion);
    header("Location: ../../vista/it-next/it_home.php");
  
}

//falta estudiante
function guardar_f_tecnica()
{
    $conexion = conectar();
<<<<<<< HEAD
    $codigo=$_SESSION['id'];
=======
    $key = $_POST['key'];
>>>>>>> a2780013978197ecca1011b785f9a7c07b5c7fd6
    $nombre = $_POST['tecnicoTit'];
    $fecha = $_POST['tecnicoFecha'];
    $institucion = $_POST['tecnicoInst'];
    $nivel =  1;
    if($nombre != '' && $fecha != '' && $institucion != '')
    {
        $sql = "INSERT INTO F_TECNICA VALUES(0,'$nombre','$fecha','$institucion',$nivel,$codigo)";
        mysqli_query($conexion,$sql);
    }

    $nombre = $_POST['nom_tecnico2'];
    $fecha = $_POST['fec_tecnico2'];
    $institucion = $_POST['institucion2'];
    $nivel =  1;
    if($nombre != '' && $fecha != '' && $institucion != '')
    {
        $sql = "INSERT INTO F_TECNICA VALUES(0,'$nombre','$fecha','$institucion',$nivel,$codigo)";
        mysqli_query($conexion,$sql);
    }

    $nombre = $_POST['nom_tecnico3'];
    $fecha = $_POST['fec_tecnico3'];
    $institucion = $_POST['institucion3'];
    $nivel =  1;
    if($nombre != '' && $fecha != '' && $institucion != '')
    {
        $sql = "INSERT INTO F_TECNICA VALUES(0,'$nombre','$fecha','$institucion',$nivel,$codigo)";
        mysqli_query($conexion,$sql);
    }

    $nombre = $_POST['nom_tecnologo'];
    $fecha = $_POST['fec_tecnologo'];
    $institucion = $_POST['institucion4'];
    $nivel =  2;
    if($nombre != '' && $fecha != '' && $institucion != '')
    {
        $sql = "INSERT INTO F_TECNICA VALUES(0,'$nombre','$fecha','$institucion',$nivel,$codigo)";
        mysqli_query($conexion,$sql);
    }

    $nombre = $_POST['nom_tecnologo2'];
    $fecha = $_POST['fec_tecnologo2'];
    $institucion = $_POST['institucion5'];
    $nivel =  2;
    if($nombre != '' && $fecha != '' && $institucion != '')
    {
        $sql = "INSERT INTO F_TECNICA VALUES(0,'$nombre','$fecha','$institucion',$nivel,$codigo)";
        mysqli_query($conexion,$sql);
    }

    $nombre = $_POST['nom_tecnologo3'];
    $fecha = $_POST['fec_tecnologo3'];
    $institucion = $_POST['institucion6'];
    $nivel =  2;
    if($nombre != '' && $fecha != '' && $institucion != '')
    {
        $sql = "INSERT INTO F_TECNICA VALUES(0,'$nombre','$fecha','$institucion',$nivel,$codigo)";
        mysqli_query($conexion,$sql);
    }
    mysqli_close($conexion);
    header("Location: ../../vista/it-next/it_home.php");
    
}

//falta estudiante
function guardarCertificaciones()
{
    $conexion = conectar();
    $codigo=$_SESSION['id'];
    $nombre_cer = $_POST['nombre_certificacion'];
    $ins_certificado = $_POST['ins_certificado'];
    $fec_certificado = $_POST['fec_certificado'];
    $horas = $_POST['cant_horas'];
    if($nombre_cer != '' && $ins_certificado != '' && $fec_certificado != '' && $horas != '')
    {
<<<<<<< HEAD
        $sql = "INSERT INTO CERTIFICACION VALUES(0,'$nombre_cer','$ins_certificado',$horas,'$fec_certificado',$codigo)";
=======
        $sql = "INSERT INTO CERTIFICACION VALUES(0,'$nombre_cer','$ins_certificado',$horas,'$fec_certificado',$key)";
>>>>>>> a2780013978197ecca1011b785f9a7c07b5c7fd6
        echo $sql."<br>";
        mysqli_query($conexion,$sql);
    }

    $nombre_cer = $_POST['nombre_certificacion2'];
    $ins_certificado = $_POST['ins_certificado2'];
    $fec_certificado = $_POST['fec_certificado2'];
    $horas = $_POST['cant_horas2'];
    if ($nombre_cer != '' && $ins_certificado != '' && $fec_certificado != '' && $horas != '') 
    {
<<<<<<< HEAD
        $sql = "INSERT INTO CERTIFICACION VALUES(0,'$nombre_cer','$ins_certificado',$horas,'$fec_certificado',$codigo)";
=======
        $sql = "INSERT INTO CERTIFICACION VALUES(0,'$nombre_cer','$ins_certificado',$horas,'$fec_certificado',$key)";
>>>>>>> a2780013978197ecca1011b785f9a7c07b5c7fd6
        echo $sql."<br>";
        mysqli_query($conexion,$sql);
    }

    $nombre_cer = $_POST['nombre_certificacion3'];
    $ins_certificado = $_POST['ins_certificado3'];
    $fec_certificado = $_POST['fec_certificado3'];
    $horas = $_POST['cant_horas3'];
    if ($nombre_cer != '' && $ins_certificado != '' && $fec_certificado != '' && $horas != '') 
    {
<<<<<<< HEAD
        $sql = "INSERT INTO CERTIFICACION VALUES(0,'$nombre_cer','$ins_certificado',$horas,'$fec_certificado',$codigo)";
=======
        $sql = "INSERT INTO CERTIFICACION VALUES(0,'$nombre_cer','$ins_certificado',$horas,'$fec_certificado',$key)";
>>>>>>> a2780013978197ecca1011b785f9a7c07b5c7fd6
        echo $sql."<br>";
        mysqli_query($conexion,$sql);
    }

    $nombre_cer = $_POST['nombre_certificacion4'];
    $ins_certificado = $_POST['ins_certificado4'];
    $fec_certificado = $_POST['fec_certificado4'];
    $horas = $_POST['cant_horas4'];
    if ($nombre_cer != '' && $ins_certificado != '' && $fec_certificado != '' && $horas != '') 
    {
<<<<<<< HEAD
        $sql = "INSERT INTO CERTIFICACION VALUES(0,'$nombre_cer','$ins_certificado',$horas,'$fec_certificado',$codigo)";
=======
        $sql = "INSERT INTO CERTIFICACION VALUES(0,'$nombre_cer','$ins_certificado',$horas,'$fec_certificado',$key)";
>>>>>>> a2780013978197ecca1011b785f9a7c07b5c7fd6
        echo $sql."<br>";
        mysqli_query($conexion,$sql);
    }
    mysqli_close($conexion);
    header("Location: ../../vista/it-next/it_home.php");
}

<<<<<<< HEAD
// guardarPerfil();
// guardarFormacionAcademica();
// guardar_f_tecnica();
// guardarCertificaciones();
// guardarReferencias();
 guardarExperienciaLaboral();
// guardarExperienciaAcademica();

//header("Location: ../../vista/it-next/it_about.php?ky=$codigo");
=======
guardarPerfil();
guardarFormacionAcademica();
guardar_f_tecnica();
guardarCertificaciones();
guardarReferencias();
guardarExperienciaLaboral();
guardarExperienciaAcademica();

header("Location: ../../vista/it-next/it_about.php?ky=$codigo");
>>>>>>> a2780013978197ecca1011b785f9a7c07b5c7fd6

<?php

include("../modelo/conexion.php");
$conexion = conectar();
$correo = $_POST['correo'];
$password = sha1($_POST['password']);


$sql = "SELECT cod_empresa FROM empresa WHERE correo='{$correo}' AND contrasenia='{$password}'"; 
$respuesta=mysqli_query($conexion, $sql);
$ingresos=0;
$id="";
//Si existe al menos una fila
if( $row=mysqli_fetch_array($respuesta) )
{
     $id=$row['cod_empresa'];
        //Iniciar una sesion de PHP
        session_start();
        //Crear una variable para indicar que se ha autenticado
        $_SESSION['autenticado']    = 'SI';
        //Crear una variable para guardar el ID del usuario para tenerlo siempre disponible
        $_SESSION['id'] = $id;
        //CODIGO DE SESION
         
        //Crear un formulario para redireccionar al usuario y enviar oculto su Id
?>
        <form name="formulario" method="post" action="../vistaEmpresa/it-next/inicio.php">
            <input type="hidden" name="idUser" value='<?php echo $id ?>' />
        </form>
<?php
    $ingresos=$ingresos+1;
    $sql4 = "UPDATE empresa SET ingresos='{$ingresos}'  WHERE cod_empresa='{$id}'"; 
    mysqli_query($conexion, $sql4);
    header ("Location: ../vistaEmpresa/it-next/inicio.php");
    }else{


    $sql2 = "SELECT cod_estudiante, ingresos FROM estudiante WHERE correo='{$correo}' AND contrasenia='{$password}'"; 
    $respuesta2=mysqli_query($conexion, $sql2);
    $ingresos=0;
    $id="";

    if($row=mysqli_fetch_array($respuesta2)){

        $id=$row['cod_estudiante'];
        $ingresos=$row['ingresos'];
        //Iniciar una sesion de PHP
        session_start();
        //Crear una variable para indicar que se ha autenticado
        $_SESSION['autenticado']    = 'SI';
        //Crear una variable para guardar el ID del usuario para tenerlo siempre disponible
        $_SESSION['id'] = $id;
        //CODIGO DE SESION
         
        //Crear un formulario para redireccionar al usuario y enviar oculto su Id
?>
        <form name="formulario" method="post" action="../vista/it-next/it_home.php">
            <input type="hidden" name="idUser" value='<?php echo $id ?>' />
        </form>
<?php
$ingresos=$ingresos+1;
$sql3 = "UPDATE estudiante SET ingresos='{$ingresos}'  WHERE cod_estudiante='{$id}'"; 
mysqli_query($conexion, $sql3);
header ("Location: ../vista/it-next/it_home.php");    
}

$sql5 = "SELECT cod_empresa, ingresos FROM estudiante WHERE correo='{$correo}' AND contrasenia='{$password}'"; 
$respuesta5=mysqli_query($conexion, $sql5);

if($row=mysqli_fetch_array($respuesta5))
{
    $id=$row['cod_estudiante'];
        $ingresos=$row['ingresos'];
        //Iniciar una sesion de PHP
        session_start();
        //Crear una variable para indicar que se ha autenticado
        $_SESSION['autenticado']    = 'SI';
        //Crear una variable para guardar el ID del usuario para tenerlo siempre disponible
        $_SESSION['id'] = $id;
        //CODIGO DE SESION
         
        //Crear un formulario para redireccionar al usuario y enviar oculto su Id
?>
        <form name="formulario" method="post" action="../vista/it-next/it_home.php">
            <input type="hidden" name="idUser" value='<?php echo $id ?>' />
        </form>
<?php
$ingresos=$ingresos+1;
$sql3 = "UPDATE empresa SET ingresos='{$ingresos}'  WHERE cod_empresa='{$id}'"; 
mysqli_query($conexion, $sql3);
header ("Location: ../vista/it-next/it_home.php");  
}


    else {
        //En caso de que no exista una fila...
        //..Crear un formulario para redireccionar al usuario a la pagina de login
        //enviandole un codigo de error
?>
        <form name="formulario" method="post" action="loginProy.php">
            <input type="hidden" name="msg_error" value="1">
        </form>
<?php
header ("Location: loginProy.php");   
    }
}
    ?>
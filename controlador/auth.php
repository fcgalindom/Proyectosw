<?php
$email = $_POST['email'];
$password = $_POST['password'];

if($email === '' && $password === '')
{
    echo json_encode('Llena todos los campos');
}
else if($email == '')
{

}
else
{
    echo json_encode('Validacion correcta');
    // $rutaModelo = "../modelo";
    // include("$rutaModelo/conexion.php");
    // $conexion = conectar();
    // $encontrado = false;
    // $sql = "SELECT cod_estudiante, correo, contrasenia FROM ESTUDIANTE";
    // $consulta = mysqli_query($conexion,$sql);

    // while ($fila = mysqli_fetch_array($consulta)) 
    // {
    //     if($email == $fila['correo'] && $password == $fila['contrasenia'])
    //     {
    //         $encontrado = true;
    //         break;
    //     }
    // }

    // if ($encontrado) 
    // {
    //     echo json_encode('encontrado');
    // }
    // else
    // {
    //     echo json_encode('No encontrado');
    // }
}
?>
<?php

 $nombre = $_POST['nombre'];
 $apellido = $_POST['apellido'];
 $telefono = $_POST['telefono'];
 $correo = $_POST['email'];
 $direccion = $_POST['direccion'];
 $semestre = $_POST['semestre'];
 $carrera = $_POST['carrera'];
 $contrasenia = $_POST['password'];
 $con_contrasenia = $_POST['ConfirmPassword'];

$mail = explode("@", $correo);
$arroba = substr_count($correo, '@');

if($nombre === '' || $apellido === '' || $telefono === '' || $correo === '' || $direccion === '' || 
	$semestre === 'semestre' || $carrera === 'carrera' || $contrasenia === '' || $con_contrasenia === '')
{
  echo json_encode('INCOMPLETO');
}
else {
	if ($arroba !== 1){
	 	echo json_encode('correo mal');

	}else {

		if($mail[1] !== 'unbosque.edu.co'){

				echo json_encode('correo mal');

		}else{

			if($contrasenia != $con_contrasenia){
					echo json_encode('CONTRASENIAS NO COINCIDEN');

			}else {

					echo json_encode('correcto');	
			} 
			
		}	
	}
}
<<<<<<< HEAD:controlador/validaciones/registro.php


=======
>>>>>>> 042f74db9287699f466f66c8d7657eedfd00fca6:controlador/registro.php

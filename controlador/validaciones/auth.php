<?php
$email = $_POST['email'];
$password = $_POST['password'];

$mail = explode("@", $email);
$arroba = substr_count($email, '@');

if($email === '' || $password === '')
{
    echo json_encode('INCOMPLETO');
}
else{
   if ($arroba !== 1){
        echo json_encode('correo mal');

    }else {

        if($mail[1] !== 'unbosque.edu.co'){

             echo json_encode('correo mal');

        }else{
            echo json_encode('correcto');
        }   
    }
}
<?php

class Seguridad{

    function securePassword($contraseña)
    {
         $contraseñaCifrada=sha1($contraseña);
         return $contraseñaCifrada;
    }

   
    }
        ?>

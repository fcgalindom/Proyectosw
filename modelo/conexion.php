<?php

function conectar()
{
    $conectar = mysqli_connect('localhost','root','','feriaop_bd');
    return $conectar;
}
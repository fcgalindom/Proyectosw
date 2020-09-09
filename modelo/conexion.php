<?php

function conectar()
{
    $conectar = mysqli_connect('localhost','root','','feriaOportunidades');
    return $conectar;
}

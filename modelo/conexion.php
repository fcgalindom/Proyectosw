<?php

function conectar()
{
    $conectar = mysqli_connect('localhost','root','','feriaoportunidades');
    return $conectar;
}
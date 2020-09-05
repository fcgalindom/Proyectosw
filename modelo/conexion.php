<?php

public function conectar()
{
    $conectar = mysqli_connect('localhost','root','','mydatabase');
    return $conectar;
}

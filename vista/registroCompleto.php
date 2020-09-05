<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href='loginProy.css'>
</head>

<body>
<?php
 $elUsr = "root";
 $elPw  = "";
 $elServer ="localhost:3306";
 $laBd = "feriaop_bd";
/* conexion a la base de datos*/
$conexion=mysqli_connect($elServer , $elUsr , $elPw , $laBd);
$sql="select * from empresa where cod_empresa=1";
$resultado_set=mysqli_query($conexion, $sql);
/* funcion pg_fetch_array loque hace es que va leyendo fila por fila de la variable resultado que es 
la que tiene el resultado_set*/



if( $row = mysqli_fetch_array($result , MYSQLI_ASSOC)  )
{
//Iniciar una sesion de PHP

    $nom_empresa = $row["nom_empresa"];
    $nom_comercial= $row["nom_comercial"];
    $descripcion = $row["descripcion"];
    $tipo_empresa = $row["tipo_empresa"];
   }
   







?>

    <<div class="container-fluid">
        <div class="row no-gutter">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4">Completar Registro</h3>
                                <form action="../modelo/modificarEmpresa.php" method="post">
                                     <div class="form-label-group">
                                    <p>
                                    Nombre 
                                    Empresa:
                                    <input type="text" id="nombreEmpresa" name="nombreEmpresa" size="12" value="<?php echo $nom_empresa ?>" readonly="readonly">
                                    </p>
                                    </div>

                                    <div class="form-label-group">
                                    <p>
                                    Nombre 
                                    Comercial:
                                    <input type="text" id="nombreComercial" name="nombreComercial" size="12" value="<?php echo $nom_comercial ?>" readonly="readonly">
                                    </p>
                                    </div>

                                    <div class="form-label-group">
                                    <p>Descripcion:
                                    <input type="text" id="descripcion" name="descripcion" size="13" value="<?php echo $descripcion ?>" readonly="readonly">
                                    </p>
                                    </div>

                                    <div class="form-label-group">
                                    <p>Tipo De Empresa:
                                    <input type="text" id="tipo_empresa" name="tipo_empresa" size="12" value="<?php echo $tipo_empresa ?>" readonly="readonly">
                                    </p>
                                    </div>


                                    <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Registrarse</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>


<?php
$elUsr = "root";
$elPw  = "";
$elServer ="localhost:3306";
$laBd = "feriaop_bd";
/* conexion a la base de datos*/
$conexion=mysqli_connect($elServer , $elUsr , $elPw , $laBd);
$sql="select * from empresa";
$resultado_set=mysqli_query($conexion, $sql);
/* funcion pg_fetch_array loque hace es que va leyendo fila por fila de la variable resultado que es
la que tiene el resultado_set*/
?>

</html>
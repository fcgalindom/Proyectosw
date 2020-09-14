<<<<<<< HEAD
<head>
=======
>>>>>>> a2398f22746ce97f8252c426a190fba1036ad3c2
<!doctype html>
<html lang="es">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href='loginProy.css'>
</head>
<body>
<div class="container-fluid">
        <div class="row no-gutter">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4">Registrarse</h3>
                             <!--   <form action="../../controlador/registro.php" id="formulario" method="POST"> -->
                                <form id="formulario">
                                    <div class="form-label-group">
                                        <input type="text" name="nombre" id="inputName"  class="form-control" placeholder="Name" >
                                        <label for="inputName">Nombres</label>
                                    </div>

                                     <div class="form-label-group">
                                        <input type="text" name="apellido" id="inputApellido" class="form-control" placeholder="Apellido" >
                                        <label for="inputApellido">Apellidos</label>
                                    </div>

                                     <div class="form-label-group">
                                        <input type="text" name="telefono" id="inputTel" class="form-control" placeholder="Telefono" maxlength="10" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                                        <label for="inputTel">Telefono</label>
                                    </div>


                                    <div class="form-label-group">
                                        <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Email address" >
                                        <label for="inputEmail">Correo</label>
                                    </div>

                                     <div class="form-label-group">
                                        <input type="text" name="direccion" id="inputDir" class="form-control" placeholder="Direccion" >
                                        <label for="inputDir">Direccion</label>
                                    </div>

                                    <div class="select">
                                    <select name="carrera" class="form-control" >
                                        <?php 
                                        include("../../modelo/conexion.php");
                                        $conexion = conectar();
                                        $sql = "SELECT * FROM CARRERA";
                                        $carrera = mysqli_query($conexion,$sql);
                                        while ($fila = mysqli_fetch_array($carrera)) 
                                        { ?>
                                            <option value="<?php echo $fila['cod_carrera'] ?>"><?php echo $fila['nom_carrea'] ?></option>
                                        <?php }
                                        ?>
                                        <option value="Carrera" selected>Carrera</option>
                                        </select>
                                    </div>

                                    <div class="select">
                                    <select name="semestre" class="form-control" > 
                                        <option value="7" >7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="Semeste" selected>Semestre</option>
                                        </select>
                                    </div>

                                    <hr>

                                    <div class="form-label-group">
                                        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" >
                                        <label for="inputPassword">Contraseña</label>
                                    </div>

                                    <div class="form-label-group">
                                        <input type="password" name="ConfirmPassword" id="inputConfirmPassword" class="form-control" placeholder="Confirm Password">
                                        <label for="inputConfirmPassword">Confirmar contraseña</label>
                                    </div>
                                    
                                    <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Registrarse</button>
                                </form>
                                    <div id="alertas">
                                       
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <script src="../js/validacion_estudiante.js"></script>

    
</body>
</html>


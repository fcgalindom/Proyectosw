<!doctype html>
<html lang="es">

<head>
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
                                <h3 class="login-heading mb-4">Feria de proyectos</h3>
                                <form id="formulario2">
                                    <div class="form-label-group">
                                        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address">
                                        <label for="inputEmail">Email address</label>
                                    </div>

                                    <div class="form-label-group">
                                        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
                                        <label for="inputPassword">Password</label>
                                    </div>

                                    <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Ingresar</button>
                                    
                                    <div class="text-center">
                                        <a class="small" href="registroProy.php">Registrarse como Estudiante</a></div>
                                    <div class="text-center">
                                        <a class="small" href="#">Registrarse como Empresa</a></div>
                                </form>
                                <div id="alertas2">
                                       
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <script src="../js/validacion_login.js"></script>
</body>

</html>
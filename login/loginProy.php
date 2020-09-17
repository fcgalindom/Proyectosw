<!doctype html>
<html lang="es">

<head>
  <!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel='stylesheet' type='text/css' media='screen' href='loginProy.css'>
<!-- site metas -->
<title>El bosque</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- site icons -->
<link rel="icon" href="images/loaders/bosqueloader.png" type="image/gif" />
<!-- bootstrap css -->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<!-- Site css -->
<link rel="stylesheet" href="css/style.css" />
<!-- responsive css -->
<link rel="stylesheet" href="css/responsive.css" />
<!-- colors css -->
<link rel="stylesheet" href="css/colors1.css" />
<!-- custom css -->
<link rel="stylesheet" href="css/custom.css" />
<!-- wow Animation css -->
<link rel="stylesheet" href="css/animate.css" />
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
                                <form action="seguridad2.php" method="post">
                                <div >   
                                        <input type="text" placeholder="correo" id="correo" name="correo" class="form-control"  required autofocus>
                                    </div>
                                    <br>
                                    <div >
                                        <input type="password" id="password" name="password" class="form-control" placeholder="password"  required autofocus>    
                                    </div>
                                    <button class="btn sqaure_bt btn-lg btn-block" type="submit">Ingresar</button>
                                    
                                    <div class="text-center">
                                        <a class="small" href="../vista/it-next/RegistroProy.php">Registrarse como Estudiante</a></div>
                                    <div class="text-center">
                                        <a class="small" href="../vistaEmpresa/it-next/RegistroProy.php">Registrarse como Empresa</a></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- menu js -->
        <script src="js/menumaker.js"></script>
        <!-- wow animation -->
        <script src="js/wow.js"></script>
</body>
</html>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href='loginProy.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="js/script.js"></script>
</head>

<body  onload="onload();" >

    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                               <center> <h3 class="login-heading mb-4">Registrarse</h3></center>
                                <form action="..\..\controladorEmpresa\insertarEmpresa.php" method="post"   enctype="multipart/form-data">
                                    <div class="form-label-group">
                                        <input type="text" id="nombreComercial" name="nombreComercial" class="form-control" placeholder="Nombre Comercial" required autofocus>
                                    </div>
                                    <br>
                                    <div class="form-label-group">
                                        <input type="text" id="nombreRazonSocial" name="nombreRazonSocial" class="form-control" placeholder="Nombre Razon Social" required autofocus>
                                        
                                    </div>
                                    <br>
                                    <div class="form-label-group">
                                        <input type="text" id="correo" name="correo" class="form-control" placeholder="correo" required autofocus>
                                        
                                    </div>
                                    <br>
                                    <div class="form-label-group">
                                        <input type="text" id="password" name="password" class="form-control" placeholder="password" placeholder="password" required autofocus>
                                        
                                    </div>
                                    <br>
                                    
                                    <div class="form-label-group">
                                        <input  type="text" id="confirmarPassword" name="confirmarPassword" class="form-control" placeholder="confirmarPassword" required autofocus>
 
                                    </div>



                                    <div class="form-label-group" >

                                    <label for="nombreComercial">Subir Achivo Camara de Comercio con nombre de la Empresa</label>
                                    <br>
                                    <br>
                                    
                                    
                                    
                                        <input type="file" name="camaraComercio"  id="camaraComercio" required   onchange="return validacionImagen()">
                                    </div>
                                    
                                    
                                    <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit" onclick="return kk()">Registrarse</button>
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


</html>
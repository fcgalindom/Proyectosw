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

    <<div class="container-fluid">
        <div class="row no-gutter">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4">Registrarse</h3>
                                <form>

                                    <div class="form-label-group">
                                        <input type="text" id="inputName" class="form-control" placeholder="Name" required autofocus>
                                        <label for="inputName">Nombres</label>
                                    </div>

                                     <div class="form-label-group">
                                        <input type="text" id="inputApellido" class="form-control" placeholder="Apellido" required autofocus>
                                        <label for="inputApellido">Apellidos</label>
                                    </div>

                                     <div class="form-label-group">
                                        <input type="text" id="inputTel" class="form-control" placeholder="Telefono" required autofocus>
                                        <label for="inputTel">Telefono</label>
                                    </div>


                                    <div class="form-label-group">
                                        <input type="text" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                                        <label for="inputEmail">Correo</label>
                                    </div>

                                     <div class="form-label-group">
                                        <input type="text" id="inputDir" class="form-control" placeholder="Direccion" required autofocus>
                                        <label for="inputDir">Direccion</label>
                                    </div>

                                    <div class="select">
                                    <select name="ciudad" class="form-control" required autofocus>
                                        <option value="Bioingenieria">Chia</option> 
                                        <option value="Ingenieria_Sistemas" selected>Cota</option>
                                        <option value="Ingenieria_Industrial">Bogotá</option>
                                        <option value="Ingenieria_Ambiental">Soacha</option>
                                        <option value="Ingenieria_Electronica">OtrasNoSeCuales</option>
                                        <option value="Carrera" selected>Ciudad</option>
                                        </select>
                                    </div>


                                    <div class="select">
                                    <select name="carrera" class="form-control" required autofocus>
                                        <option value="Bioingenieria">Bioingenieria</option> 
                                        <option value="Ingenieria_Sistemas" selected>Ingenieria de sistemas</option>
                                        <option value="Ingenieria_Industrial">Ingenieria industrial</option>
                                        <option value="Ingenieria_Ambiental">Ingenieria ambiental</option>
                                        <option value="Ingenieria_Electronica">Ingenieria electronica</option>
                                        <option value="Carrera" selected>Carrera</option>
                                        </select>
                                    </div>

                                    <div class="select">
                                    <select name="semestre" class="form-control" required autofocus> 
                                        <option value="7" >7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="Semeste" selected>Semestre</option>
                                        </select>
                                    </div>

                                  

                                    <hr>

                                    <div class="form-label-group">
                                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                        <label for="inputPassword">Contraseña</label>
                                    </div>

                                    <div class="form-label-group">
                                        <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Email address" required autofocus>
                                        <label for="inputConfirmPassword">Confirmar contraseña</label>
                                    </div>

                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">

                                    </div>
                                    <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Ingresar</button>
                                    <div class="text-center">
                                        <a class="small" href="#">Registrarse</a></div>
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
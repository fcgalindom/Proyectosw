<?php

session_start();

$codigo=$_SESSION['id'];
 
//Validar que el usuario este logueado y exista un UID
if ( ! ($_SESSION['autenticado'] == 'SI' && isset($_SESSION['id'])) )
{
    //En caso de que el usuario no este autenticado, crear un formulario y redireccionar a la
    //pantalla de login, enviando un codigo de error
?>
        <form name="formulario" method="post" action="index.php">
            <input type="hidden" name="msg_error" value="2">
        </form>
        <script type="text/javascript">
            document.formulario.submit();
        </script>
<?php
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>El Bosque</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icons -->
    <link rel="icon" href="images/fevicon/fevicon.png" type="image/gif" />
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
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   
</head>
<body id="default_theme" class="it_service about">
<!-- loader -->
<div class="bg_load"> <img class="loader_animation" src="images/loaders/loader_1.png" alt="#" /> </div>
<!-- end loader -->
<!-- header -->
<header id="default_header" class="header_style_1">
    <!-- header top -->
    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="full">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header top -->
    <!-- header bottom -->
    <div class="header_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <!-- logo start -->
                    <div class="logo"> <a href="inicio.php"><img src="images/logos/it_logo.png" alt="logo" /></a> </div>
                    <!-- logo end -->
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <!-- menu start -->
                    <div class="menu_side">
                        <div id="navbar_menu">
                        <ul class="first-ul">
                
                        <li> <a href="ofertas.php">Ofertas</a>
                  <ul>
                    <li><a href="ofertas.php">Realizar Oferta</a></li>
                    <li><a href="mostrar.php">Ofertas Realizadas</a></li>
                  </ul>
                </li>
                <li><a href="miPerfil.php">Mi Perfil</a>
                <ul>
                <li><a href="miPerfil.php">Editar Mi Perfil</a></li>
                <li><a href="../../login/cerrarSesion.php">Cerrar Sesion</a></li>
                  </ul>
                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- menu end -->
                </div>
            </div>
        </div>
    </div>
    <!-- menu end -->
    </div>
    </div>
    </div>
    </div>
    <!-- header bottom end -->
</header>
<!-- end header -->
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="title-holder">
                        <div class="title-holder-cell text-left">
                            <h1 class="page-title">Mi Perfil</h1>
                            <ol class="breadcrumb">
                                <li><a href="inicio.php">inicio</a></li>
                                <li class="active">Mi Perfil</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end inner page banner -->
<!-- section -->
<div class="section padding_layout_1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="main_heading text_align_center">
                        <h2>OFERTA </h2>
                        <p class="large">datos del oferta a realizar</p>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include("../../modeloEmpresa/conexion.php");
        $conexion = conectar();
        ?>
        <div class="form-group">

            <form action="..\..\controladorEmpresa\insertarOferta.php" method="post">
                 <input type="hidden"  name="codigo"  value="<?php echo $codigo  ?>">

                <div class="form-group">
                    <label class="font-weight-bold" >Nombre de la oferta </label>
                    <div class="row">
                        <br>
                        <div class="col">
                            <input type="text" class="form-control" name="Noferta"  id="Noferta" value="" required style="width : 1170px">
                        </div>
                    </div>

                    <br>
                    <br>


                <label class="font-weight-bold"  >Salario</label>
                <div class="row">
                    <br>
                    <div class="col">
                        <input type="number" class="form-control" name="salario" id="salario" min="877803" max="8778030" value="877803" required>

                    </div>
                </div>
                <br>
                    <br>
                    <label class="font-weight-bold" >Fecha</label>
                    <div class="row">

                        <div class="col">
                            <input type="date" name="fecha" id="fecha" class="form-control" max="2100-01-01" min="2020-05-20" required>
                        </div>

                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <label class="font-weight-bold">Descripcion de la oferta</label>
                        <br>
                        <textarea class="form-control" name="descripcion" id="descripcion" rows="5" required></textarea>
                    </div>

                    <br>
                    <br>


                        <div class="select">
                            <label class="font-weight-bold">Tipo  de la oferta</label>
                            <select name="tipo_contrato" id="tipo_contrato" class="form-control"  autofocus>
                                <?php
                                $sql = "SELECT * FROM tipo_contrato";
                                $resultado = mysqli_query($conexion,$sql);
                                while ($fila = mysqli_fetch_array($resultado))
                                { ?>
                                    <option value="<?php echo  $fila['cod_t_contrato'] ?>"><?php echo $fila['nom_t_contrato'] ?></option>
                                    <?php
                                }
                                mysqli_close($conexion);


                                ?>


                            </select>

                        </div>
                    <br>
                    <br>
                   
                    <div class="select">
                                    <select name=" oferta_carrera" class="form-control" >
                                        <?php 
                                        $conexion = conectar();
                                        $sql = "SELECT * FROM CARRERA";
                                        $carrera = mysqli_query($conexion,$sql);
                                        while ($fila = mysqli_fetch_array($carrera)) 
                                        { ?>
                                            <option value="<?php echo $fila['cod_carrera'] ?>"><?php echo $fila['nom_carrera'] ?></option>
                                        <?php }
                                        mysqli_close($conexion);
                                        ?>
                                       
                                        </select>



                    </div>
                    <br>
                    <br>






                    <div class="col">
                        <input type="submit" class="btn btn-primary btn-lg btn-block">Guardar
                    </div>

                </div>

        </div>
        </form>
    </div>
    <!-- end section -->

    <!-- js section -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- menu js -->
    <script src="js/menumaker.js"></script>
    <!-- wow animation -->
    <script src="js/wow.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>


</body>
</html>







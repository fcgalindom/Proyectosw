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
                    <div class="logo"> <a href="it_home.html"><img src="images/logos/logito.jpg" alt="logo" /></a> </div>
                    <!-- logo end -->
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <!-- menu start -->
                    <div class="menu_side">
                        <div id="navbar_menu">
                            <ul class="first-ul">

                                <li><a href="miPerfil.php">MiPerfil</a></li>
                                </li>
                                <li> <a href="inicio.php">Ofertas</a>
                                    <ul>
                                        <li><a href="oferta.php">Realizar Oferta</a></li>
                                        <li><a href="mostrar.php">Ofertas Realizadas</a></li>
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
                        <p class="large">Todas las ofertas</p>
                    </div>
                </div>
            </div>
        </div>
       
        </div>

        <SCRIPT type="text/javascript">
 var  h = 0;
</SCRIPT>   

    <?php

    include("../../modeloEmpresa/conexion.php");
    $conexion = conectar();

    $sql= "SELECT * FROM oferta WHERE cod_empresa =7";
 
    $respuesta=mysqli_query($conexion, $sql);
        $contador=0;
        foreach ($respuesta as $row) 
        {

         $nombreOferta = $row['nom_oferta'];
         $fecha = $row['fecha_inicio'];
         $salario = $row['salario'];
         $descripcion=$row['descripcion_oferta'];
         $cod_oferta = $row['cod_oferta'];
      
         $contador=$contador+1;
               
        
        ?>

<SCRIPT type="text/javascript">
  var h = h +1 ;
  console.log(h);
</SCRIPT>   
<form action="..\..\\eliminarOferta.php" method="post">
    <center>
                   
    <table class="table">

    <tr>
     <center><input type="text" class="form-control" name="fecha"  id="fecha"  value="Oferta <?php echo $contador?>" style="width : 700px"></center>
  </tr>
<tr>
    <td style="width : 100px">Nombre:</td>
    <td><input type="text" class="form-control" name="fecha"  id="fecha"  value="<?php echo $nombreOferta?>" style="width : 700px"></td>
  </tr>

  <tr>
     <td style="width : 100px">Fecha: </td>
     <td> <input type="text" class="form-control" name="fecha"  id="fecha"  value="<?php echo $fecha?>" style="width : 700px"></td>
  </tr>
  <tr>
      <td style="width : 100px">Salario: </td>
      <td><input type="text" class="form-control" name="salario"  id="salario" value="<?php echo $salario?>" style="width : 700px"></td>
  </tr>
  <tr>
      <td style="width : 100px">Descripcion: </td>
      <td><input type="text" class="form-control" id="descripcion" name="descripcion"   value="<?php echo $descripcion ?>" style="width : 700px"></td>
  </tr>
  <tr>
      <input type="hidden" class="form-control" id="cod_oferta" name="cod_oferta"   value="<?php echo $cod_oferta ?>" style="width : 700px">
    </tr>
  </tr>

  <tr>
  <th colspan="8" ><center><input type="submit"  value="Eliminar" class="btn btn-success"></center></th>
  </tr>
</table>
        </center>

        
</form>         



    <?php
        
    }
    mysqli_close($conexion);

    ?>


   
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>
    </div>


    </div>
    <!-- end section -->


    <!-- footer -->
    <footer class="footer_style_2">
        <div class="container-fuild">
            <div class="row">
                <div class="map_section">
                    <div id="map"></div>
                </div>
                <div class="footer_blog">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="main-heading left_text">
                                <h2>It Next Theme</h2>
                            </div>
                            <p>Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.</p>
                            <ul class="social_icons">
                                <li class="social-icon fb"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li class="social-icon tw"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li class="social-icon gp"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div class="main-heading left_text">
                                <h2>Additional links</h2>
                            </div>
                            <ul class="footer-menu">
                                <li><a href="it_about.html"><i class="fa fa-angle-right"></i> About us</a></li>
                                <li><a href="it_term_condition.html"><i class="fa fa-angle-right"></i> Terms and conditions</a></li>
                                <li><a href="it_privacy_policy.html"><i class="fa fa-angle-right"></i> Privacy policy</a></li>
                                <li><a href="it_news.html"><i class="fa fa-angle-right"></i> News</a></li>
                                <li><a href="it_contact.html"><i class="fa fa-angle-right"></i> Contact us</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="cprt">
                    <p>ItNext © Copyrights 2019 Design by html.design</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
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







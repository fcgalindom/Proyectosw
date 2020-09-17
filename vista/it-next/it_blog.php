<?php

session_start();

$codigo=$_SESSION['id'];
 
//Validar que el usuario este logueado y exista un UID
if ( ! ($_SESSION['autenticado'] == 'SI' && isset($_SESSION['id'])) )
{
    //En caso de que el usuario no este autenticado, crear un formulario y redireccionar a la
    //pantalla de login, enviando un codigo de error
?>
       <form name="formulario" method="post" action="../../login/loginProy.php">
            <input type="hidden" name="msg_error" value="2">
        </form>
        <script type="text/javascript">
            document.formulario.submit();
        </script>
<?php
}
include("../../modelo/conexion.php");
$conexion = conectar();
$sql = "SELECT
cod_estudiante
FROM
perfil, estudiante, formacion_academica
WHERE
perfil.cod_perfil = estudiante.cod_estudiante AND
formacion_academica.cod_f_academica = estudiante.cod_estudiante AND
cod_estudiante = $codigo";

$resultado = mysqli_query($conexion, $sql);
mysqli_close($conexion);
$llave = 0;
foreach ($resultado as $key) 
{
  $llave = $key['cod_estudiante'];
}

if($llave == null)
{
   header("Location: it_about.php?ky=$codigo");
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
<body id="default_theme" class="it_service blog">
<!-- loader -->
<div class="bg_load"> <img class="loader_animation" src="images/loaders/bosqueloader.png" alt="#" /> </div>
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
          <div class="logo"> <a href="it_home.html"><img src="images/logos/logo2.png" alt="logo" /></a> </div>
          <!-- logo end -->
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
          <!-- menu start -->
          <div class="menu_side">
            <div id="navbar_menu">
              <ul class="first-ul">
                <li> 
                  <a href= "it_home.php">Home</a>
                </li>
                <li>
                  <a href= "it_about.php" >Hoja de Vida</a>
                </li>
                <li> 
                  <a class="active" href= "it_blog.php">Mis ofertas</a>
                </li>
                <li> 
                  <a href= "it_contact.php">Datos de Contacto</a>
                </li>  
                <li> 
                  <a href="../../login/cerrarSesion.php">Cerrar Sesion</a>
                </li>   
                <li> 
                  <form action="../../controlador/filtros/filtro.php" method="post">
                  <input type="text" class="form-control" name="texto" placeholder="Buscar">
                  <button type="submit">Enviar</button>
                  </form>
                </li>          
              </ul>
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
      <div class="col-md-6">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Mis Ofertas</h1>
              <ol class="breadcrumb">
                <li><a href="it_home.html">Home</a></li>
                <li class="active">Mis Ofertas</li>
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
<div class="section padding_layout_1 blog_grid">
  <div class="container">

  <?php 
  $conexion = conectar();
  $sql = "SELECT descripcion_oferta,cod_oferta FROM oferta, estudiante WHERE estudiante.cod_estudiante = oferta.oferta_carrera  GROUP BY descripcion_oferta";
  $resultado = mysqli_query($conexion,$sql);
  foreach ($resultado as $key) 
  { ?>
    <div class="row">
      <div class="col-lg-6 col-md-1 col-sm-12 col-xs-12">
          <div class="blog_section">
            <div class="blog_feature_img"> <img class="img-responsive" src="images/it_service/post-06.jpg" alt="#"> </div>
            <div class="blog_feature_cantant">
              <p class="blog_head">Blogpost With Image</p>
              <div class="post_info">
                <ul>
                  <li><i class="fa fa-user" aria-hidden="true"></i> Marketing</li>
                  <li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i> 12 Aug 2017</li>
                </ul>
              </div>
              <p><?php echo $key['descripcion_oferta'] ?></p>
              <div class="bottom_info">
              
              </div>
            </div>
          </div>
      </div>
      <div class="col-lg-6 col-md-1 col-sm-12 col-xs-12">
         <div class="blog_section">
            <div class="blog_feature_img"> <img class="img-responsive" src="images/it_service/home_01.png" alt="#"> </div>
            <div class="blog_feature_cantant">
              <p class="blog_head">Blogpost With Image</p>
              <div class="post_info">
                <ul>
                  <li><i class="fa fa-user" aria-hidden="true"></i> Marketing</li>
                  <li><i class="fa fa-comment" aria-hidden="true"></i> 5</li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i> 12 Aug 2017</li>
                </ul>
              </div>
              <p><?php echo $key['descripcion_oferta'] ?> </p>
              
            </div>
          </div>
      </div>      
    </div>
  <?php }
  ?>



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

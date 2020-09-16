<?php

include("../../modelo/conexion.php");
$conexion = conectar();
$codigo = $_GET['ky'];
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
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
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
                  <a href="<?php echo "it_home.php?ky=$codigo" ?>">Home</a>
                </li>
                <li>
                  <a href="<?php echo "it_about.php?ky=$codigo" ?>">Hoja de Vida</a>
                </li>
                <li> 
                  <a class="active" href="<?php echo "it_blog.php?ky=$codigo" ?>">Mis ofertas</a>
                </li>
                <li> 
                  <a href="<?php echo "it_contact?ky=$codigo" ?>">Datos de Contacto</a>
                </li>    
                <li> 
                <input type="email" class="form-control" placeholder="Buscar" >
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
              <p>Consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis, 
                asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea maiores corporis. Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
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
              <p>Consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis, 
                asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea maiores corporis. Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              
            </div>
          </div>
        
      </div>
      
    </div>
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
              <p>Consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis, 
                asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea maiores corporis. Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
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
              <p>Consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis, 
                asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea maiores corporis. Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              
            </div>
          </div>
        
      </div>
      
    </div>
  </div>
</div>


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

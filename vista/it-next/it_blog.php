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
<!-- revolution slider css -->
<link rel="stylesheet" type="text/css" href="revolution/css/settings.css" />
<link rel="stylesheet" type="text/css" href="revolution/css/layers.css" />
<link rel="stylesheet" type="text/css" href="revolution/css/navigation.css" />
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<body id="default_theme" class="it_service">
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
                  <a  class="active" href="<?php echo "it_blog.php?ky=$codigo" ?>">Mis ofertas</a>
                </li>
                <li> 
                  <a href="<?php echo "it_contact.php?ky=$codigo" ?>">Datos de Contacto</a>
                </li>    
                <li> 
                  <input type="text" class="form-control" name="texto" placeholder="Buscar">
                  <button type="submit" onclick="" > Enviar </button>
                  <h1></h1>
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
<!-- section -->

<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2>OFERTAS Aplicadas</h2>
          </div>
        </div>
      </div>
    </div>

    <?php
  $conectar = mysqli_connect('localhost','root','','feriaop_bd');
  $sql= "SELECT logo, nom_oferta, fecha_inicio, descripcion_oferta, OFERTA.cod_oferta, nom_estado
  FROM oferta, oferta_estudiante, estudiante, empresa, estado
  WHERE estudiante.cod_estudiante =oferta_estudiante.cod_estudiante AND 
  oferta_estudiante.cod_oferta = oferta.cod_oferta AND
  empresa.cod_empresa = oferta.cod_empresa AND
  oferta_estudiante.cod_estado = estado.cod_estado AND 
  oferta_estudiante.cod_estudiante = $codigo
  GROUP BY logo, nom_oferta, fecha_inicio, descripcion_oferta, oferta.cod_oferta";


  $respuesta=mysqli_query($conectar, $sql);   
 
              ?>
                <div class="row">
                <?php 
                while ($row = mysqli_fetch_array($respuesta)): ?>
                   <div class="col-md-3">
                      <div class="full blog_colum">
                      
                      <form action="<?php echo "devolverHoja.php?ky=$codigo" ?>" method="POST">
                        <input type="hidden" name="codigo_oferta" value="<?php echo $row['cod_oferta']?>">
                        <div class="blog_feature_img"><img width="100" height="250"  src="<?php echo $row['logo'] ?> "/></div>
                        

                        
                        <div class="post_time">
                          <p><i class="fa fa-clock-o"></i><?php echo  $row['fecha_inicio'] ?></p>
                        </div>

                        <div class="blog_feature_head">
                          <h4><?php echo $row['nom_oferta'] ?></h4>
                        </div>

                        <div class="blog_feature_cont">
                          <div width="100" height="250"><?php echo $row['descripcion_oferta'] ?></div>
                        </div>

                        <button type="submit" class="btn sqaure_bt">Ver mas</button>
                        </form>
                      </div>
                    </div>
                    <br>
                <br>
                    <?php endwhile;?>
                </div>
                
              

  </div>
</div>
<!-- end section -->


<!-- Modal -->
<div class="modal fade" id="search_bar" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
            <div class="navbar-search">
              <form action="#" method="get" id="search-global-form" class="search-global">
                <input type="text" placeholder="Type to search" autocomplete="off" name="s" id="search" value="" class="search-global__input">
                <button class="search-global__btn"><i class="fa fa-search"></i></button>
                <div class="search-global__note">Begin typing your search above and press return to search.</div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Model search bar -->
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
           
          </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Additional links</h2>
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
<!-- revolution js files -->
<script src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.video.min.js"></script>


</body>
</html>

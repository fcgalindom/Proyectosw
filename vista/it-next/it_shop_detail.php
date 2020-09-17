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
<!-- zoom effect -->
<link rel='stylesheet' href='css/hizoom.css'>
<!-- end zoom effect -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<body id="default_theme" class="it_service about">
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
                  <a href= "it_about.php">Hoja de Vida</a>
                </li>
                <li> 
                  <a href= "it_blog.php" >Mis ofertas</a>
                </li>
                <li> 
                  <a href= "it_contact" >Datos de Contacto</a>
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
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Empresa</h1>
              <ol class="breadcrumb">
                <li><a href="it_home.php">Home</a></li>
                <li class="active">Empresa</li>
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
<div class="section padding_layout_1 product_detail">
  <div class="container">
     <?php 
           
      $codigo_oferta=$_POST['codigo_oferta'];
      

      $conectar = mysqli_connect('localhost','root','','feriaop_bd');
      $sql= "SELECT logo,nom_empresa, descripcion, nom_oferta, fecha_inicio, salario, descripcion_oferta
      FROM oferta, tipo_contrato, empresa
      WHERE
      tipo_contrato.cod_t_contrato = oferta.cod_t_contrato AND
      empresa.cod_empresa = oferta.cod_empresa AND
      oferta.cod_oferta='{$codigo}'
      GROUP BY logo,nom_empresa,descripcion, nom_oferta, fecha_inicio, salario, descripcion_oferta";

      $respuesta=mysqli_query($conectar, $sql);  
        
      while ($row = mysqli_fetch_array($respuesta)): ?>
      <div class="row">
        <div class="col-md-12">
          <div class="row">

            <div class=" col-md-5">
              <div class="product_detail_feature_img ">
              <div class="blog_feature_img"> <img src="<?php echo $row['logo'] ?>"/></div>
              </div>
            </div>

            <div class=" col-md-7 product_detail_side detail_style1">
              <div class="product-heading">
                <h2>
                <?php echo $row['nom_oferta'] ?>
                </h2>
                <h3>
                <?php echo $row['nom_empresa'] ?>
                </h3>
              </div>
              <div class="detail-contant">
                <p>
                <?php echo $row['descripcion'] ?>
                </p>    
                <br>
                <br>
                <form class="cart" method="post" action="it_blog.php">
                  <button type="submit" class="btn sqaure_bt">Enviar hoja de vida</button>
                </form>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="full">
                <div class="tab_bar_section">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#">Detalles de la Oferta</a></li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div id="description" class="tab-pane active">
                      <div class="product_desc">
                      <br>
                      <h2>
                      <?php echo $row['nom_oferta'] ?>
                      </h2>
                      <h3>
                      <br>
                      <?php echo $row['descripcion_oferta'] ?>
                      <br>
                      <?php echo $row['salario'] ?>
                      <br>
                      <?php echo $row['fecha_inicio'] ?>
                      <h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
     </div>
     <?php 
     endwhile;
     ?>  
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

<!-- zoom effect -->
<script src='js/hizoom.js'></script>
<script>
       
        $('.hi2').hiZoom({
            width: 400,
            position: 'right'
        });
    </script>
</body>
</html>

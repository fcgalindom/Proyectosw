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
                <li> <a  href="it_home.php">Home</a>
                  
                </li>
                <li><a href="it_about.php">Hoja de Vida</a></li>
                  
                </li>
                <li> <a href="it_blog.php">Mis ofertas</a>
                  
                </li>
                <li> <a  href="it_contact.php">Datos de Contacto</a>
                  
                </li>              
              </ul>
            </div>
            <div class="search_icon">
              <ul>
                <li><a href="#" data-toggle="modal" data-target="#search_bar"><i class="fa fa-search" aria-hidden="true"></i></a></li>
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
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class=" col-md-5">
            <div class="product_detail_feature_img hizoom hi2">
            <?php    
                    $conectar = mysqli_connect('localhost','root','','feriaOportunidades');
                    $sql= "SELECT descripcion_oferta, salario, TIPO_CONTRATO.nom_t_contrato, nom_empresa, EMPRESA.descripcion
                            FROM OFERTA, EMPRESA, TIPO_CONTRATO
                            WHERE EMPRESA.cod_empresa = OFERTA.cod_empresa AND OFERTA.cod_t_contrato = TIPO_CONTRATO.cod_t_contrato
                            GROUP BY descripcion_oferta, salario, TIPO_CONTRATO.nom_t_contrato, nom_empresa, EMPRESA.descripcion";

                    $respuesta=mysqli_query($conectar, $sql);                     
                                while ($row = mysqli_fetch_array($respuesta)){
                                  echo  $row['descripcion'];
                                }
                     mysqli_close($conectar);

                      ?>
              <div class='hizoom hi2'> <img src="images/it_service/huawei.jpg" alt="#" /> </div>
            </div>
          </div>
          <div class=" col-md-7 product_detail_side detail_style1">
            <div class="product-heading">
              <h2>

                <?php    
                    $conectar = mysqli_connect('localhost','root','','feriaOportunidades');
                    $sql= "SELECT descripcion_oferta, salario, TIPO_CONTRATO.nom_t_contrato, nom_empresa, EMPRESA.descripcion
                            FROM OFERTA, EMPRESA, TIPO_CONTRATO
                            WHERE EMPRESA.cod_empresa = OFERTA.cod_empresa AND OFERTA.cod_t_contrato = TIPO_CONTRATO.cod_t_contrato
                            GROUP BY descripcion_oferta, salario, TIPO_CONTRATO.nom_t_contrato, nom_empresa, EMPRESA.descripcion";

                    $respuesta=mysqli_query($conectar, $sql);                     
                                while ($row = mysqli_fetch_array($respuesta)){
                                  echo  $row['nom_empresa'];
                                }
                     mysqli_close($conectar);

                      ?>

              </h2>
            </div>
            <div class="detail-contant">
              <p>
                   
                    <?php    
                    $conectar = mysqli_connect('localhost','root','','feriaOportunidades');
                    $sql= "SELECT descripcion_oferta, salario, TIPO_CONTRATO.nom_t_contrato, nom_empresa, EMPRESA.descripcion
                            FROM OFERTA, EMPRESA, TIPO_CONTRATO
                            WHERE EMPRESA.cod_empresa = OFERTA.cod_empresa AND OFERTA.cod_t_contrato = TIPO_CONTRATO.cod_t_contrato
                            GROUP BY descripcion_oferta, salario, TIPO_CONTRATO.nom_t_contrato, nom_empresa, EMPRESA.descripcion";

                    $respuesta=mysqli_query($conectar, $sql);                     
                                while ($row = mysqli_fetch_array($respuesta)){
                                  echo  $row['descripcion'];
                                }
                     mysqli_close($conectar);

                      ?>
                      
                  </p>    
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
                  <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#">Descripcion de la Oferta</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                  <div id="description" class="tab-pane active">
                    <div class="product_desc">

                    <?php    
                    $conectar = mysqli_connect('localhost','root','','feriaOportunidades');
                    $sql= "SELECT descripcion_oferta, salario, TIPO_CONTRATO.nom_t_contrato, nom_empresa, EMPRESA.descripcion
                            FROM OFERTA, EMPRESA, TIPO_CONTRATO
                            WHERE EMPRESA.cod_empresa = OFERTA.cod_empresa AND OFERTA.cod_t_contrato = TIPO_CONTRATO.cod_t_contrato
                            GROUP BY descripcion_oferta, salario, TIPO_CONTRATO.nom_t_contrato, nom_empresa, EMPRESA.descripcion";

                    $respuesta=mysqli_query($conectar, $sql);                     
                                while ($row = mysqli_fetch_array($respuesta)){
                                  echo  $row['descripcion_oferta'];
                                  echo "<br>";
                                  echo  $row['salario'];
                                  echo "<br>";
                                  echo  $row['nom_t_contrato'];
                                  echo "<br>";
                                }
                    mysqli_close($conectar);
                    ?>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
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

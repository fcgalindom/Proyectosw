<!DOCTYPgE html>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../../vistaEmpresa/js/script.js"></script>
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
                    <li><a href="ofertas.php">Realizar Oferta</a></li>
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
                        <h2>MI PERFIL</h2>
                        <p class="large">datos importantes de la empresa</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
        <form action="..\..\controladorEmpresa\modifcarEmpresa.php" method="post" enctype="multipart/form-data">
            <?php
            include("../../modeloEmpresa/conexion.php");
            $conexion = conectar();
            ?>
              
            <?php
            $sql = "SELECT * FROM  empresa WHERE cod_empresa = 7";
            $resultado = mysqli_query($conexion,$sql);
            if( $row = mysqli_fetch_array($resultado , MYSQLI_ASSOC)  )
            { ?>
                
    
            <div class="row">
                <br>
                <div class="col">
                <input type="hidden" id="cod_empresa" name="cod_empresa"  size="15" value="<?php echo $row['cod_empresa']?>"  style="width : 1170px" readonly="readonly">  
                </div>
            </div>
            
            <div class="form-group">
                <label class="font-weight-bold" >Nombre de la Empresa:</label>
                <div class="row">
                    <br>
                    <div class="col">
                        <input type="text" class="form-control" name="nom_empresa"  id="nom_empresa" value="<?php echo $row['nom_empresa']?>" style="width : 1170px">
                    </div>
                </div>

                <br>
                <br>
                <label class="font-weight-bold" >Nombre Comercial de la Empresa:</label>
                <div class="row">

                    <div class="col">
                        <input type="text" class="form-control" name="nom_comercial"  id="nom_comercial" value="<?php echo $row['nom_comercial']?>" style="width : 1170px">
                    </div>

                </div>
                <br>
                <br>
                <div class="form-group">
                    <label class="font-weight-bold">Descripcion</label>
                    <br>
                    <textarea class="form-control" name="descripcion" id="descripcion" rows="5"></textarea>
                </div>
                <br>
                <br>
                <div class="form-label-group" >
                     <label class="font-weight-bold">Subir logo de la empresa</label>
                      <p>Subir Achivo :
                          <input type="file" name="logo"  id="logo" required   onchange="return validacionImagen2()">

                     </p>
                </div>

                <?php
                  }
                 
               ?>
                <br>
                <br>
                <div class="form-group">
                    <label class="font-weight-bold">Tipo Empresa</label>

                    <br>


                    <div class="select">
                        <select name="cod_t_empresa" id="cod_t_empresa" class="form-control"  autofocus>
                            <?php
                            $sql = "select * from tipo_empresa";
                            $resultado = mysqli_query($conexion,$sql);
                            while ($fila = mysqli_fetch_array($resultado))
                            { ?>
                                <option value="<?php echo  $fila['cod_t_empresa'] ?>"><?php echo $fila['nom_t_empresa'] ?></option>
                                <?php
                            }
                            mysqli_close($conexion);
                            ?>


                        </select>
                    </div>

                    <br>
                </div>

                    <div class="col">
                    <input type="submit" class="btn btn-primary btn-lg btn-block">Guardar
                    </div>

                </div>

            </div>
                          </form>
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
























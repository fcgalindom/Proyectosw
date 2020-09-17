<?php
<<<<<<< HEAD

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
=======
$codigo = $_GET['ky'];
>>>>>>> a2780013978197ecca1011b785f9a7c07b5c7fd6
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
<body id="default_theme" class="contact_us">
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
<<<<<<< HEAD
                  <a href="it_home.php">Home</a>
                </li>
                <li>
                  <a href= "it_about.php" >Hoja de Vida</a>
                </li>
                <li> 
                  <a href="it_blog.php">Mis ofertas</a>
                </li>
                <li> 
                  <a class="it_contact.php">Datos de Contacto</a>
                </li>  
                <li> 
                  <a href="../../login/cerrarSesion.php">Cerrar Sesion</a>
                </li>   
                <li> 
                  <form action="../../controlador/filtros/filtro.php" method="post">
                  <input type="text" class="form-control" name="texto" placeholder="Buscar">
                  <button type="submit">Enviar</button>
                  </form>
=======
                  <a href="<?php echo "it_home.php?ky=$codigo" ?>">Home</a>
                </li>
                <li>
                  <a href="<?php echo "it_about.php?ky=$codigo" ?>">Hoja de Vida</a>
                </li>
                <li> 
                  <a href="<?php echo "it_blog.php?ky=$codigo" ?>">Mis ofertas</a>
                </li>
                <li> 
                  <a class="active" href="<?php echo "it_contact.php?ky=$codigo" ?>">Datos de Contacto</a>
                </li>    
                <li> 
                <input type="email" class="form-control" placeholder="Buscar" >
>>>>>>> a2780013978197ecca1011b785f9a7c07b5c7fd6
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
              <h1 class="page-title">Contact</h1>
              <ol class="breadcrumb">
                <li><a href="it_home.php">Home</a></li>
                <li class="active">Contact</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
      <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
          <div class="full">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 adress_cont margin_bottom_30_all">
              <div class="information_bottom left-side margin_bottom_20_all">
                <div class="icon_bottom"> <i class="fa fa-road" aria-hidden="true"></i> </div>
                <div class="info_cont">
                  <h4>Lorem Ipsum is simply dummy text..</h4>
                  <p>Sydney Australia</p>
                </div>
              </div>
              <div class="information_bottom left-side margin_bottom_20_all">
                <div class="icon_bottom"> <i class="fa fa-user" aria-hidden="true"></i> </div>
                <div class="info_cont">
                  <h4>0011 234 56789</h4>
                  <p>Mon-Fri 8:30am-6:30pm</p>
                </div>
              </div>
              <div class="information_bottom left-side">
                <div class="icon_bottom"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
                <div class="info_cont">
                  <h4>Correo institucional</h4>
                  <p>nombre@unbosque.edu.co</p>
                </div>

                
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 adress_cont margin_bottom_30_all"> 
              <div class="information_bottom left-side margin_bottom_20_all">
                <div class="icon_bottom"> <i class="fa fa-road" aria-hidden="true"></i> </div>
                <div class="info_cont">
                  <h4>Lorem Ipsum is simply dummy text..</h4>
                  <p>Sydney Australia</p>
                </div>
              </div>
              <div class="information_bottom left-side margin_bottom_20_all">
                <div class="icon_bottom"> <i class="fa fa-user" aria-hidden="true"></i> </div>
                <div class="info_cont">
                  <h4>0011 234 56789</h4>
                  <p>Mon-Fri 8:30am-6:30pm</p>
                </div>
              </div>
              <div class="information_bottom left-side">
                <div class="icon_bottom"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
                <div class="info_cont">
                  <h4>Correo institucional</h4>
                  <p>nombre@unbosque.edu.co</p>
                </div>
              </div>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


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

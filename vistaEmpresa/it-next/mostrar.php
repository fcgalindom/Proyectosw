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
                    <div class="logo"> <a href="inicio.php"><img src="images/logos/it_logo.png"  /></a> </div>
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

    $sql= "SELECT * FROM oferta WHERE cod_empresa =$codigo";
 
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
<form action="..\..\controladorEmpresa\eliminarOferta.php" method="post">
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







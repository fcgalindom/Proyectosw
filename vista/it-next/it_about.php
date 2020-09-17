<<<<<<< HEAD
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
=======
<?php $codigo = $_GET['ky'] ?>

>>>>>>> a2780013978197ecca1011b785f9a7c07b5c7fd6
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
<<<<<<< HEAD
                  <a  href= "it_home.php">Home</a>
                </li>
                <li>
                  <a class="active" href="it_about.php" >Hoja de Vida</a>
                </li>
                <li> 
                  <a href="it_blog.php">Mis ofertas</a>
                </li>
                <li> 
                  <a href="it_contact.php">Datos de Contacto</a>
                </li>
                <li> 
                  <a href="../../login/cerrarSesion.php">Cerrar Sesion</a>
=======
                  <a  href="<?php echo "it_home.php?ky=$codigo" ?>">Home</a>
                </li>
                <li>
                  <a class="active" href="<?php echo "it_about.php?ky=$codigo" ?>">Hoja de Vida</a>
                </li>
                <li> 
                  <a href="<?php echo "it_blog.php?ky=$codigo" ?>">Mis ofertas</a>
                </li>
                <li> 
                  <a href="<?php echo "it_contact.php?ky=$codigo" ?>">Datos de Contacto</a>
>>>>>>> a2780013978197ecca1011b785f9a7c07b5c7fd6
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
              <h1 class="page-title">Hoja de vida</h1>
              <ol class="breadcrumb">
                <li><a href="it_home.php.html">Home</a></li>
                <li class="active">Hoja de vida</li>
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
            <h2>FORMULARIO DE HOJA DE VIDA</h2>
            <p class="large">Será necesario para ofertar las empresas</p>
          </div>
        </div>
      </div>
    </div>
    <!-- -->
    <div class="form-group">
    <!-- <form id="hojaDeVida"> -->
    <form action="../../controlador/hoja_vida_registro/CRUD_estudiante.php" method="POST">
<<<<<<< HEAD
=======
    <input type="hidden" name="key" value="<?php echo $_GET['ky'] ?>">

>>>>>>> a2780013978197ecca1011b785f9a7c07b5c7fd6
      <label class="font-weight-bold">Perfil Profesional</label>
      <br>
      <label >Conocimientos, habilidades, experiencia, competencias, areas de gusto, cualidades</label>
      <textarea name="perfil" class="form-control" maxlenght="10"  rows="5" required></textarea>
    </div>

    <br>
    <div class="form-group">
      <label class="font-weight-bold" >Formacion Academica</label>
      <br>
      <label>Bachiller</label>
      <div class="row">

        <div class="col">
          <input type="text" class="form-control"  name="bachillerInst" placeholder="Institucion Academica" required>
         </div>

         <div class="col">
          <input type="text" class="form-control"  name="bachillerTit" placeholder="Titulo Bachiller" required>
         </div>

         <div class="col">
          <input type="date"  class="form-control"  name="bachillerFecha" placeholder="Fecha de Grado" required>
         </div>

       </div>
       
      <br>

      <label>Tecnicos (opcional)</label>
      <div class="row">
        
        <div class="col">
          <input type="text" class="form-control"   name="tecnicoInst" placeholder="Institucion Academica">
         </div>

         <div class="col">
          <input type="text" class="form-control"  name="tecnicoTit" placeholder="Titulo Tecnico">
         </div>

         <div class="col">
          <input type="date"  class="form-control"  name="tecnicoFecha" placeholder="Fecha de Grado">
         </div>

       </div>
       <br>
       <div class="row">
        <br>
        <div class="col">
          <input type="text" name="institucion2" class="form-control"   id="tecnicoInst2" placeholder="Institucion Academica">
         </div>

         <div class="col">
          <input type="text" name="nom_tecnico2" class="form-control"  id="tecnicoTit2" placeholder="Titulo Tecnico">
         </div>

         <div class="col">
          <input type="date" name="fec_tecnico2" class="form-control"  id="tecnicoFecha2" placeholder="Fecha de Grado">
         </div>

       </div>
       <br>
       <div class="row">
        
        <div class="col">
          <input type="text" name="institucion3" class="form-control"   id="tecnicoInst3" placeholder="Institucion Academica">
         </div>

         <div class="col">
          <input type="text" name="nom_tecnico3" class="form-control"  id="tecnicoTit3" placeholder="Titulo Tecnico">
         </div>

         <div class="col">
          <input type="date" name="fec_tecnico3" class="form-control"  id="tecnicoFecha3" placeholder="Fecha de Grado">
         </div>

       </div>

       <br>

      <label>Tecnologos (opcional)</label>
      <div class="row">
        
        <div class="col">
          <input type="text" name="institucion4" class="form-control"  id="tecnologoInst" placeholder="Institucion Academica">
         </div>

         <div class="col">
          <input type="text" name="nom_tecnologo" class="form-control"  id="tecnologoTit" placeholder="Titulo Tecnologo">
         </div>

         <div class="col">
          <input type="date" name="fec_tecnologo" class="form-control"  id="tecnologoFecha" placeholder="Fecha de Grado">
         </div>

       </div>
       <br>
       <div class="row">
        
        <div class="col">
          <input type="text" name="institucion5" class="form-control"  id="tecnologoInst2" placeholder="Institucion Academica">
         </div>

         <div class="col">
          <input type="text" name="nom_tecnologo2" class="form-control"  id="tecnologoTit2" placeholder="Titulo Tecnologo">
         </div>

         <div class="col">
          <input type="date" name="fec_tecnologo2" class="form-control"  id="tecnologoFecha2" placeholder="Fecha de Grado">
         </div>

       </div>
       <br>
       <div class="row">
        
        <div class="col">
          <input type="text" name="institucion6" class="form-control"  id="tecnologoInst3" placeholder="Institucion Academica">
         </div>

         <div class="col">
          <input type="text" name="nom_tecnologo3" class="form-control"  id="tecnologoTit3" placeholder="Titulo Tecnologo">
         </div>

         <div class="col">
          <input type="date" name="fec_tecnologo3" class="form-control"  id="tecnologoFecha3" placeholder="Fecha de Grado">
         </div>

       </div>
    </div>

    <br>
    <div class="form-group">
     <label class="font-weight-bold">Formacion Complementaria (opcional)</label>
      <br>

      <label>Cursos certificados, talleres, actualizaciones </label>
       <div class="row">
         <div class="col">
          <input type="text" name="nombre_certificacion" class="form-control" placeholder="Nombre">
         </div>

         <div class="col">
          <input type="text" name="ins_certificado" class="form-control" placeholder="Institucion">
         </div>

         <div class="col">
          <input type="date" name="fec_certificado" class="form-control" placeholder="Fecha">
         </div>

         <div class="col">
          <input type="number" name="cant_horas" class="form-control" placeholder="Horas">
         </div>
       </div>

       <br>

       <div class="row">
         <div class="col">
          <input type="text" name="nombre_certificacion2" class="form-control" placeholder="Nombre">
         </div>

         <div class="col">
          <input type="text" name="ins_certificado2" class="form-control" placeholder="Institucion">
         </div>

         <div class="col">
          <input type="date" name="fec_certificado2" class="form-control" placeholder="Fecha">
         </div>

         <div class="col">
          <input type="number" name="cant_horas2" class="form-control" placeholder="Horas">
         </div>
       </div>

       <br>

       <div class="row">
         <div class="col">
          <input type="text" name="nombre_certificacion3" class="form-control" placeholder="Nombre">
         </div>

         <div class="col">
          <input type="text" name="ins_certificado3" class="form-control" placeholder="Institucion">
         </div>

         <div class="col">
          <input type="date" name="fec_certificado3" class="form-control" placeholder="Fecha">
         </div>

         <div class="col">
          <input type="number" name="cant_horas3" class="form-control" placeholder="Horas">
         </div>
       </div>

       <br>

       <div class="row">
         <div class="col">
          <input type="text" name="nombre_certificacion4" class="form-control" placeholder="Nombre">
         </div>

         <div class="col">
          <input type="text" name="ins_certificado4" class="form-control" placeholder="Institucion">
         </div>
         
         <div class="col">
          <input type="date" name="fec_certificado4" class="form-control" placeholder="Fecha">
         </div>

         <div class="col">
          <input type="number" name="cant_horas4" class="form-control" placeholder="Horas">
         </div>
       </div>

    </div>

    <br>
    
    <div class="form-group">
     <label class="font-weight-bold">Ingles</label>

      <br>

       <div class="select">
        <select name="ingles" class="form-control" required>
            <option value="A1">A1</option> 
            <option value="A2">A2</option>
            <option value="B1">B1</option>
            <option value="B2">B2</option>
            <option value="C1">C1</option>
            <option value="C2">C2</option>
            <option value="Carrera" selected>Nivel</option>
            </select>
        </div>
       <br>
    </div>

    <br>
    <div class="form-group">
     <label class="font-weight-bold">Experiencia Academica (opcional)</label>
      <br>
       <label>Proyectos</label>
       <div class="row">
         <div class="col">
          <input type="text" name="nom_exp_academica" class="form-control" placeholder="Titulo del Proyecto">
         </div>

         <div class="col">
          <input type="text" name="materia" class="form-control" placeholder="Materia/Asignatura">
         </div>

         <div class="col">
          <textarea type="text" name="con_aplicados" class="form-control" placeholder="Conocimientos Aplicados"></textarea>
         </div>
       </div>

       <br>

       <div class="row">
         <div class="col">
          <input type="text" name="nom_exp_academica2" class="form-control" placeholder="Titulo del Proyecto">
         </div>

         <div class="col">
          <input type="text" name="materia2" class="form-control" placeholder="Materia/Asignatura">
         </div>

         <div class="col">
          <textarea type="text" name="con_aplicados2" class="form-control" placeholder="Conocimientos Aplicados"></textarea>
         </div>
       </div>

       <br>
       <div class="row">
         <div class="col">
          <input type="text" name="nom_exp_academica3" class="form-control" placeholder="Titulo del Proyecto">
         </div>

         <div class="col">
          <input type="text" name="materia3" class="form-control" placeholder="Materia/Asignatura">
         </div>

         <div class="col">
          <textarea type="number" name="con_aplicados3" class="form-control" placeholder="Conocimientos Aplicados"></textarea>
         </div>
       </div>
    </div>

    <br>
    <div class="form-group">
     <label class="font-weight-bold">Experiencia Laboral (opcional)</label>
      <br>
       <div class="row">
         <div class="col">
          <input type="text" name="cargo" class="form-control" placeholder="Cargo">
         </div>

         <div class="col">
          <input type="text" name="empresa" class="form-control" placeholder="Empresa">
         </div>

         <div class="col">
          <input type="date" name="fecha_fin" class="form-control" placeholder="Fecha finalizacion">
         </div>

         <div class="col">
          <textarea type="text" name="fun_principales" class="form-control" placeholder="Funciones Principales"></textarea>
         </div>
       </div>
       <br>
       <div class="row">
         <div class="col">
          <input type="text" name="cargo2" class="form-control" placeholder="Cargo">
         </div>

         <div class="col">
          <input type="text" name="empresa2" class="form-control" placeholder="Empresa">
         </div>

         <div class="col">
          <input type="date" name="fecha_fin2" class="form-control" placeholder="Fecha finalizacion">
         </div>

         <div class="col">
          <textarea type="text" name="fun_principales2" class="form-control" placeholder="Funciones Principales"></textarea>
         </div>
       </div>
       <br>
       <div class="row">
         <div class="col">
          <input type="text" name="cargo3" class="form-control" placeholder="Cargo">
         </div>

         <div class="col">
          <input type="text" name="empresa3" class="form-control" placeholder="Empresa">
         </div>

         <div class="col">
          <input type="date" name="fecha_fin3" class="form-control" placeholder="Fecha finalizacion">
         </div>

         <div class="col">
          <textarea type="text" name="fun_principales3" class="form-control" placeholder="Funciones Principales"></textarea>
         </div>
       </div>
       <br>
       <div class="row">
         <div class="col">
          <input type="text" name="cargo4" class="form-control" placeholder="Cargo">
         </div>

         <div class="col">
          <input type="text" name="empresa4" class="form-control" placeholder="Empresa">
         </div>

         <div class="col">
          <input type="date" name="fecha_fin4" class="form-control" placeholder="Fecha finalizacion">
         </div>

         <div class="col">
          <textarea type="text" name="fun_principales4" class="form-control" placeholder="Funciones Principales"></textarea>
         </div>
       </div>
    </div>
    <div class="form-group">
     <label class="font-weight-bold">Referencias (opcional)</label>
      <br>
       <div class="row">
         <div class="col">
          <input type="text" name="nom_referencia" class="form-control" placeholder="Nombre Completo">
         </div>

         <div class="col">
          <input type="text" name="cargo_referencia" class="form-control" placeholder="Cargo">
         </div>

         <div class="col">
          <input type="number" name="celular_referencia" class="form-control" placeholder="Celular">
         </div>
       </div>

       <br>

       <div class="row">
         <div class="col">
          <input type="text" name="nom_referencia2" class="form-control" placeholder="Nombre Completo">
         </div>

         <div class="col">
          <input type="text" name="cargo_referencia2" class="form-control" placeholder="Cargo">
         </div>

         <div class="col">
          <input type="number" name="celular_referencia2" class="form-control" placeholder="Celular">
         </div>
       </div>
    </div>
    <br>
    <br>
        <div class="row">

        <div class="col">
          <button type="submit" id="enviar" class="btn sqaure_bt btn-lg btn-block">Guardar</button>
          <a href="<?php echo "../../controlador/PDF/pruebadescarga.php?ky=$codigo" ?>" class="btn sqaure_bt btn-lg btn-block">Descargar</a>
        </div>

        </div>
         </form>
         <div id="alertas3"></div>
        </div>
</div>
<!-- end section -->

<<<<<<< HEAD
=======

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
      </div>
      <div class="cprt">
        <p>ItNext © Copyrights 2019 Design by html.design</p>
      </div>
    </div>
  </div>
</footer>
<!-- end footer -->
>>>>>>> a2780013978197ecca1011b785f9a7c07b5c7fd6
<!-- js section -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- menu js -->
<script src="js/menumaker.js"></script>
<!-- wow animation -->
<script src="js/wow.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>
<script>

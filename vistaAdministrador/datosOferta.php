<?php

session_start();

$codigo=$_SESSION['id'];
 
//Validar que el usuario este logueado y exista un UID
if ( ! ($_SESSION['autenticado'] == 'SI' && isset($_SESSION['id'])) )
{
    //En caso de que el usuario no este autenticado, crear un formulario y redireccionar a la
    //pantalla de login, enviando un codigo de error
?>
       <form name="formulario" method="post" action="../login/loginProy.php">
            <input type="hidden" name="msg_error" value="2">
        </form>
        <script type="text/javascript">
            document.formulario.submit();
        </script>
<?php
}
?>
<!DOCTYPE html>
<html>
<head>
<?php
require_once "../modelo/conexion.php";
$conexion=conectar();
?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ADMINISTRADOR</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      <a href="AdminPrincipal.php" class="nav-link">Inicio</a>
      <a style="    top: -46%; left: 706%;" href='../login/cerrarSesion.php' class="nav-link">Cerrar Sesión</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside style="    background-color: #0B7984 !important;" class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a style="color: white;" href="#" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Administrador</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div style="color: white;" class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a style="color: white;" href="#" class="d-block">ADMINISTRADOR</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a style="color: white;" href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                MAESTRA DE DATOS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a style="color: white;" href="datosEstudiantes.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ESTUDIANTES</p>
                </a>
              </li>
              <li class="nav-item">
                <a style="color: white;" href="datosEmpresa.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>EMPRESAS</p>
                </a>
              </li>
              <li class="nav-item">
                <a style="color: white;" href="datosOferta.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>OFERTAS</p>
                </a>
              </li>
              <li class="nav-item">
                <a style="color: white;" href="datosOfertasProceso.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>OFERTAS EN PROCESO</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a style="color: white;" href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                INFORMES
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a style="color: white;" href="informe1.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>APLICANTES</p>
                </a>
              </li>
              <li class="nav-item">
                <a style="color: white;" href="informe2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ESTADO DE APLICACIÓN</p>
                </a>
              </li>
              <li class="nav-item">
                <a style="color: white;" href="informe3.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>POSTULACIONES</p>
                </a>
              </li>
            
              <li class="nav-item has-treeview">
            <a style="color: white;" href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               INGRESOS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a style="color: white;" href="informe5empresas.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>INGRESOS EMPRESAS</p>
                </a>
              </li>
              <li class="nav-item">
                <a style="color: white;" href="informe5estudiantes.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>INGRESOS ESTUDIANTES</p>
                </a>
              </li>
            </ul>
          </li>  




            </ul>
          </li>   

         
          
          <li class="nav-item">
            <a style="color: white;" href="datosAuditoria.php" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>AUDITORIA</p>
            </a> 
        </li></ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

        <!-- Main content -->
        <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <form method="post" style="text-align:right"> 
              <input  style="font-family: monospace;"type="text" placeholder="Empresa" name="xnombreEmpresa"/>
              <input style="font-family: monospace;" type="text" placeholder="Tipo de contrato" name="xtipoContrato"/>
              <select style="margin-right: 20%; font-family: monospace;" name="xregistros">
                <option value="">No. de registros</option>
                <option value="limit 5">5</option>
                <option value="limit 25">25</option>
                <option value="limit 50">50</option>
                <option value="limit 100">100</option>
                <option value="limit 125">125</option>
                <option value="limit 150">150</option>
                <option value="limit 175">175</option>
                <option value="limit 200">200</option>
                <option value="limit 225">225</option>    
                <option value="limit 250">250</option>     
              </select>
              <button name="buscar" type="submit" class="btn btn-block btn-info" style='    background-color: #0B7984;
    width: 83px;
    height: 40px;
    border-color: #0B7984;     margin-left: 83%;
    position: absolute;
    top: -10px; font-family: monospace;'>Filtrar</button>
              </form>
            <div style="top: 5%;     text-align: center;" class="card">
              <div style="text-align-last: center;" class="card-header">
              
                <h3 style="font-variant: all-petite-caps; font-family: monospace; font-size: 20px;     display: contents;" class="card-title">OFERTAS</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table style="font-family: monospace;" id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                  <th>Código</th>
                  <th>Nombre oferta</th>
                    <th>Salario</th>
                    <th>Descripcción</th>
                    <th>Fecha inicio</th>
                    <th>Empresa</th>
                    <th>Tipo de contrato</th>
                    <th>Carrera de la oferta</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $where="";
                  $limit="";          
                  
                  if(isset($_POST['xnombreEmpresa']))
                  {                        
                    $nombreEmpresa=$_POST['xnombreEmpresa'];                                
                  }   
                  if(isset($_POST['xregistros']))                
                  {  
                    $limit=$_POST['xregistros'];      
                  }   
                  if(isset($_POST['xtipoContrato']))
                  {
                    $nombreContrato=$_POST['xtipoContrato'];
                  }      
    
                  if(isset($_POST['buscar']))
                  {
                    if(empty($_POST['xtipoContrato']))
                    {
                         $where="WHERE nom_empresa like '".$nombreEmpresa."%'";
                    }
                    else if (empty($_POST['xnombreEmpresa']))
                    {
                         $where="WHERE nom_t_contrato like '".$nombreContrato."%'";
                    }
                  }                 
                $sql= "SELECT O.cod_oferta, O.nom_oferta, O.salario, O.descripcion_oferta, O.fecha_inicio, 
                Em.nom_empresa,Tc.nom_t_contrato, O.oferta_carrera
         FROM OFERTA O
         INNER JOIN EMPRESA Em ON O.cod_empresa = Em.cod_empresa
         INNER JOIN TIPO_CONTRATO Tc ON O.cod_t_contrato = Tc.cod_t_contrato $where $limit ";
                  $resultado=mysqli_query($conexion,$sql);

                  while($mostrar=mysqli_fetch_array($resultado)) 
                  {  
                  ?>
                    <th><?php echo $mostrar['cod_oferta'] ?></th>
                    <th><?php echo $mostrar['nom_oferta'] ?></th>
                    <th><?php echo $mostrar['salario'] ?></th>
                    <th><?php echo $mostrar['descripcion_oferta'] ?></th>
                    <th><?php echo $mostrar['fecha_inicio'] ?></th>
                    <th><?php echo $mostrar['nom_empresa'] ?></th>     
                    <th><?php echo $mostrar['nom_t_contrato'] ?></th> 
                    <th><?php echo $mostrar['oferta_carrera'] ?></th>                     
                  </tr>
                  </tbody>
                <?php
                } 
                ?>                
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->           
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>



    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Versión</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2020 <a href="#">BigSixSoft</a>.</strong> Todos los derechos reservados.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- FLOT CHARTS -->
<script src="plugins/flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="plugins/flot-old/jquery.flot.resize.min.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="plugins/flot-old/jquery.flot.pie.min.js"></script>
<!-- Page script -->
</body>
</html>

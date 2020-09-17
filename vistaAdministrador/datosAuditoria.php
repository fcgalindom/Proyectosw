<!DOCTYPE html>
<html>
<head>
<?php
require_once "../modelo/conexion.php";
$conexion=conectar();
define('NUM_ITEMS_BY_PAGE', 6);
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

  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

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
      <a style="    top: -46%; left: 706%;" href='#' class="nav-link">Cerrar Sesión</a>
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
            <!-- /.card -->

      <div style="text-align: center;" class="card">
              <div style="text-align-last: center;" class="card-header">
                <h3 style="font-variant: all-petite-caps; font-family: monospace; font-size: 20px;     display: contents;"  class="card-title">AUDITORÍA</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table style="font-family: monospace;" id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Código</th>
                    <th>Tabla afectada</th>
                    <th>Acción</th>
                    <th>Fecha</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  
                  $sql= "SELECT * FROM AUDITORIA";
                  $resultado=mysqli_query($conexion,$sql);

                  while($mostrar=mysqli_fetch_array($resultado)) 
                  {  
                  ?>
                    <th><?php echo $mostrar['cod_auditoria'] ?></th>
                    <th><?php echo $mostrar['nom_tabla'] ?></th>
                    <th><?php echo $mostrar['accion'] ?></th>
                    <th><?php echo $mostrar['fecha'] ?></th>
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
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
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

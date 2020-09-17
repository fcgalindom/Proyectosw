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
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <!---GRÁFICAS ------>
  <script src="graficas/graficas/librerias/jquery-3.5.1.min.js"></script>
  <script src="graficas/graficas/librerias/plotly-latest.min.js"></script>
  <link rel="stylesheet" type="text/css" href="graficas/graficas/librerias/bootstrap/css/bootstrap.css">

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
        <a style="    top: -46%; left: 867%;" href='#' class="nav-link">Cerrar Sesión</a>
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
    <div class="sidebar" style="margin: 3%">
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
          <div class="col-sm-6">
            <h1 style=" font-variant: all-petite-caps; font-family: monospace; font-size: 30px;  display: contents;">ESTADÍSTICAS</h1>
          </div>          
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row" >
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <?php
                  
                  $consulta='SELECT COUNT(cod_empresa) AS num_empresas FROM EMPRESA;';
                  $sql = mysqli_query($conexion, $consulta);
                  $aux=0;
                  while ($valores = mysqli_fetch_array($sql)) { 
                            $aux=$valores['num_empresas'];
                        }
              ?>
              
                <h3><?php echo ''.$aux ?></h3>

                <p>TOTAL DE EMPRESAS</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php
                  
                  $consulta='SELECT COUNT(cod_estudiante) AS num_estudiantes FROM ESTUDIANTE;';
                  $sql = mysqli_query($conexion, $consulta);
                  $aux=0;
                  while ($valores = mysqli_fetch_array($sql)) { 
                            $aux=$valores['num_estudiantes'];
                        }
              ?>
                <h3><?php echo ''.$aux ?><sup style="font-size: 20px"></sup></h3>

                <p>TOTAL DE ESTUDIANTES</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>  
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <?php
                  
                  $consulta='SELECT COUNT(cod_oferta) AS num_ofertas FROM oferta;';
                  $sql = mysqli_query($conexion, $consulta);
                  $aux=0;
                  while ($valores = mysqli_fetch_array($sql)) { 
                            $aux=$valores['num_ofertas'];
                        }
              ?>
                <h3><?php echo ''.$aux?></h3>

                <p>TOTAL DE OFERTAS</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <?php
        
                  $consulta='SELECT COUNT(cod_estudiante) AS estudiantes_contratados FROM OFERTA_ESTUDIANTE WHERE cod_estado = 3;';
                  $sql = mysqli_query($conexion, $consulta);
                  $aux=0;
                  while ($valores = mysqli_fetch_array($sql)) { 
                            $aux=$valores['estudiantes_contratados'];
                        }
              ?>

                <h3><?php echo ''.$aux ?></h3>

                <p>TOTAL DE ESTUDIANTES CONTRATADOS</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- ./AQUÍ TERMINAN LOS DASHBORADS -->
        

        <!-- ./AQUÍ EMPIEZAN LAS GRÁFICAS -->
        <div class="row">
			<div class="col-sm-12"     style = "padding-left: 15px" >
				<div class="panel panel-primary" style="width: 100%">
					<div class="panel panel-heading" style="background: #0B7984;
                  border-color: #0B7984;">
					
					</div>
					<div class="panel panel-body">
						<div class="row"  style="justify-content: center">
						
							<div class="col-sm-6">
								<div id="cargaBarras"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

        <div class="row">
          <div class="col-md-6">



            <!-- Line chart -->
            <?php
 
              $dataPoints = array();
	
              $con = mysqli_connect("localhost","root","","feriaop_bd");
              $sql ="SELECT nom_t_contrato AS contrato, count(cod_estudiante) AS cantidad
              FROM 
              oferta_estudiante, oferta, tipo_contrato
              WHERE
              oferta_estudiante.cod_oferta = oferta.cod_oferta
              AND oferta.cod_t_contrato = tipo_contrato.cod_t_contrato 
              GROUP BY nom_t_contrato";

              $consulta = mysqli_query($con,$sql);
              while ($row = mysqli_fetch_assoc($consulta)) 
              {

        
                $point = array("label" => $row['contrato'] , "y" => $row['cantidad']);
                array_push($dataPoints, $point);
       
               }

              ?>

            <div class="card card-primary card-outline" style="width: 206%; border-top: #0B7984">
              <div class="panel panel-heading" style="background: #0B7984;
                  border-color: #0B7984;">

					
					</div>
              
                 <script>
                  window.onload = function () {
                  
                  var chart = new CanvasJS.Chart("chartContainer", {
                    animationEnabled: true,
                    exportEnabled: true,
                    title:{

                      text: "CANTIDAD DE ESTUDIANTES POR TIPO DE CONTRATO ",
                      fontFamily: "Raleway, sans-serif",
                      fontSize : 16

                      
                    },
                    subtitles: [{
                      text: ""
                    }],
                    data: [{
                      type: "pie",
                      showInLegend: "true",
                      legendText: "{label}",
                      indexLabelFontSize: 16,
                      indexLabel: "{label} - #percent%",
                      yValueFormatString: "#,##0",
                      dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                    }]
                  });
                  chart.render();
                  
                  }
                  </script>
                <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>




                
              </div>
              
           

          </div>
          <!-- /.col -->

          <div class="col-md-6">
           

           

            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
<!-- FLOT CHARTS -->
<script src="plugins/flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="plugins/flot-old/jquery.flot.resize.min.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="plugins/flot-old/jquery.flot.pie.min.js"></script>
<!-- Page script -->
<script>
  $(function () {
    /*
     * Flot Interactive Chart
     * -----------------------
     */
    // We use an inline data source in the example, usually data would
    // be fetched from a server
    var data        = [],
        totalPoints = 100

    function getRandomData() {

      if (data.length > 0) {
        data = data.slice(1)
      }

      // Do a random walk
      while (data.length < totalPoints) {

        var prev = data.length > 0 ? data[data.length - 1] : 50,
            y    = prev + Math.random() * 10 - 5

        if (y < 0) {
          y = 0
        } else if (y > 100) {
          y = 100
        }

        data.push(y)
      }

      // Zip the generated y values with the x values
      var res = []
      for (var i = 0; i < data.length; ++i) {
        res.push([i, data[i]])
      }

      return res
    }

    var interactive_plot = $.plot('#interactive', [
        {
          data: getRandomData(),
        }
      ],
      {
        grid: {
          borderColor: '#f3f3f3',
          borderWidth: 1,
          tickColor: '#f3f3f3'
        },
        series: {
          color: '#3c8dbc',
          lines: {
            lineWidth: 2,
            show: true,
            fill: true,
          },
        },
        yaxis: {
          min: 0,
          max: 100,
          show: true
        },
        xaxis: {
          show: true
        }
      }
    )

    var updateInterval = 500 //Fetch data ever x milliseconds
    var realtime       = 'on' //If == to on then fetch data every x seconds. else stop fetching
    function update() {

      interactive_plot.setData([getRandomData()])

      // Since the axes don't change, we don't need to call plot.setupGrid()
      interactive_plot.draw()
      if (realtime === 'on') {
        setTimeout(update, updateInterval)
      }
    }

    //INITIALIZE REALTIME DATA FETCHING
    if (realtime === 'on') {
      update()
    }
    //REALTIME TOGGLE
    $('#realtime .btn').click(function () {
      if ($(this).data('toggle') === 'on') {
        realtime = 'on'
      }
      else {
        realtime = 'off'
      }
      update()
    })
    /*
     * END INTERACTIVE CHART
     */


    /*
     * LINE CHART
     * ----------
     */
    //LINE randomly generated data

    var sin = [],
        cos = []
    for (var i = 0; i < 14; i += 0.5) {
      sin.push([i, Math.sin(i)])
      cos.push([i, Math.cos(i)])
    }
    var line_data1 = {
      data : sin,
      color: '#3c8dbc'
    }
    var line_data2 = {
      data : cos,
      color: '#00c0ef'
    }
    $.plot('#line-chart', [line_data1, line_data2], {
      grid  : {
        hoverable  : true,
        borderColor: '#f3f3f3',
        borderWidth: 1,
        tickColor  : '#f3f3f3'
      },
      series: {
        shadowSize: 0,
        lines     : {
          show: true
        },
        points    : {
          show: true
        }
      },
      lines : {
        fill : false,
        color: ['#3c8dbc', '#f56954']
      },
      yaxis : {
        show: true
      },
      xaxis : {
        show: true
      }
    })
    //Initialize tooltip on hover
    $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
      position: 'absolute',
      display : 'none',
      opacity : 0.8
    }).appendTo('body')
    $('#line-chart').bind('plothover', function (event, pos, item) {

      if (item) {
        var x = item.datapoint[0].toFixed(2),
            y = item.datapoint[1].toFixed(2)

        $('#line-chart-tooltip').html(item.series.label + ' of ' + x + ' = ' + y)
          .css({
            top : item.pageY + 5,
            left: item.pageX + 5
          })
          .fadeIn(200)
      } else {
        $('#line-chart-tooltip').hide()
      }

    })
    /* END LINE CHART */

    /*
     * FULL WIDTH STATIC AREA CHART
     * -----------------
     */
   
    /* END AREA CHART */

    /*
     * BAR CHART
     * ---------
     */

    var bar_data = {
      data : [[1,10], [2,8], [3,4], [4,13], [5,17], [6,9]],
      bars: { show: true }
    }
    $.plot('#bar-chart', [bar_data], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
         bars: {
          show: true, barWidth: 0.5, align: 'center',
        },
      },
      colors: ['#3c8dbc'],
      xaxis : {
        ticks: [[1,'January'], [2,'February'], [3,'March'], [4,'April'], [5,'May'], [6,'June']]
      }
    })
    /* END BAR CHART */

    /*
     * DONUT CHART
     * -----------
     */

    var donutData = [
      {
        label: 'Series2',
        data : 70,
        color: '#3c8dbc'
      },
      {
        label: 'Series3',
        data : 20,
        color: '#0073b7'
      },
      {
        label: 'Series4',
        data : 50,
        color: '#00c0ef'
      }
    ]
    $.plot('#donut-chart', donutData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.5,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    })
    /*
     * END DONUT CHART
     */

  })

  /*
   * Custom Label formatter
   * ----------------------
   */
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }
</script>



</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		
		$('#cargaBarras').load('graficaBarras.php');
	});
</script>
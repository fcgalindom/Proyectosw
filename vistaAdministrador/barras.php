<?php 
require_once "../modelo/conexion.php";
$conexion = conectar();

$sql= "SELECT
nom_empresa AS nombre_empresa, COUNT(cod_estudiante) AS cantidad_aplicantes
FROM
empresa, oferta, OFERTA_ESTUDIANTE
WHERE
empresa.cod_empresa = oferta.cod_empresa AND oferta.cod_oferta = oferta_estudiante.cod_oferta
GROUP BY(nom_empresa);";


$result = mysqli_query($conexion,$sql);

$valoresY = array(); //empresas
$valoresX = array(); //N° Estudiantes

while ($ver = mysqli_fetch_row($result)) {
		$valoresY[] = $ver[1]; //empresas
		$valoresX[] = $ver[0]; //Estudiantes
	}

	$datosX = json_encode($valoresX);
	$datosY = json_encode($valoresY);
	?>

	<div id="graficaBarras"></div>

	<script type="text/javascript">

		function crearCadenaBarras(json){
			var parsed = JSON.parse(json);
			var arr = [];
			for (var x in parsed) {
				arr.push(parsed[x]);
			}
			return arr;
		}

	</script>

	<script type="text/javascript">

		datosX = crearCadenaBarras('<?php echo $datosX; ?>');
		datosY = crearCadenaBarras('<?php echo $datosY; ?>');
		var data = [
			{
				x: datosX,
				y: datosY,
				type: 'bar',
                
                
				marker: {
					color: 'rgb(49,130,189)',
                    opacity: 0.7,
                    
				}
                
			}
		];


		var layout = {
			title: 'ESTUDIANTES APLICANTES POR EMPRESA',
            
			font:{
				family: 'Raleway, sans-serif'
			},
			xaxis: {
				title: 'Empresas'
			},
			yaxis: {
				title: 'N° de Estudiantes'
			},
			barmode: 'stack'
		};




		Plotly.newPlot('graficaBarras', data, layout);
	</script>
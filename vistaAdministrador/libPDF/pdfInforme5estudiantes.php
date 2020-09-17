<?php
require('fpdf.php');
require_once "../../modelo/conexion.php";
$conexion=conectar();


class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    // $this->Image('logo_pb.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(30);
    // Título
    $this->Cell(130,10,'Cantidad de ingresos por estudiante',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(90,10,'Estudiante',1,0,'C',0);
    $this->Cell(90,10,'Ingresos',1,1,'C',0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}


$sql= "SELECT nom_estudiante as estudiantes, sum(ingresos) as ingresos_estudiantes 
FROM ESTUDIANTE group by nom_estudiante"; 
$resultado=mysqli_query($conexion,$sql);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);

while($mostrar=mysqli_fetch_array($resultado)) 
{  
    $pdf->Cell(90,10,$mostrar['estudiantes'],1,0,'C',0);
    $pdf->Cell(90,10,$mostrar['ingresos_estudiantes'],1,1,'C',0);                  
} 

$pdf->Output();

?>
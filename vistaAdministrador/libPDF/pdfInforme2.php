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
    $this->Cell(130,10,utf8_decode('Estados de aplicación de los estudiantes'),0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(50,10,'Estudiante',1,0,'C',0);
    $this->Cell(30,10,utf8_decode('Estado'),1,0,'C',0);
    $this->Cell(72,10,utf8_decode('Oferta'),1,0,'C',0);
    $this->Cell(45,10,utf8_decode('Empresa'),1,1,'C',0);
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


$sql= "SELECT nom_estudiante AS nombre_estudiante, nom_estado AS estado_postulacion, nom_oferta AS ofertas, nom_empresa AS empresas FROM estudiante,oferta_estudiante,estado, oferta, empresa 
                  WHERE estudiante.cod_estudiante = oferta_estudiante.cod_estudiante AND oferta_estudiante.cod_estado = estado.cod_estado 
                  AND oferta.cod_oferta = oferta_estudiante.cod_oferta AND empresa.cod_empresa = oferta.cod_empresa";
                  $resultado=mysqli_query($conexion,$sql);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);

while($mostrar=mysqli_fetch_array($resultado)) 
{  
    $pdf->Cell(50,10,utf8_decode($mostrar['nombre_estudiante']),1,0,'C',0);
    $pdf->Cell(30,10,utf8_decode($mostrar['estado_postulacion']),1,0,'C',0);   
    $pdf->Cell(72,10,utf8_decode($mostrar['ofertas']),1,0,'C',0); 
    $pdf->Cell(45,10,utf8_decode($mostrar['empresas']),1,1,'C',0);                  
} 

$pdf->Output();

?>
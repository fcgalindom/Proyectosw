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
require('fpdf/fpdf.php');

>>>>>>> a2780013978197ecca1011b785f9a7c07b5c7fd6
    
class PDF extends FPDF
{
    function contenido($nombre, $telefono, $correo, $direccion){
    $this->Image('header2.png',-1.7,15,215);

    $this->SetFont('Arial','B',24);
    $this->SetTextColor(255,255,255);
    $this->Cell(150);
    $this->Cell(30,25,$nombre,0,0,'R');


    $this->Ln(15);
    $this->SetFont('Arial','',17);
    $this->Cell(150);
    $this->Cell(30,15,$telefono,0,0,'R');

    $this->Ln(10);
    $this->Cell(150);
    $this->Cell(30,7,$correo,0,0,'R');

    $this->Ln(10);
    $this->Cell(150);
    $this->Cell(30,0,$direccion,0,0,'R');

    }

    function obligatorios($instituto, $titulo, $fecha, $idiomas, $descripcion){
    $this->Ln(30);
    $this->Cell(30);
    $this->SetTextColor(48,149,160);
    $this->SetFont('Arial','B',20);
    $this->Cell(30,10,'Perfil Profesional',0,0,'C');

    $this->Ln(10);
    $this->Cell(15);
    $this->SetTextColor(0,0,0);
    $txt = $descripcion;
    $this->SetFont('Arial','',15);
    $this->MultiCell(160,7,$txt);
    
    $this->Ln(10);
    $this->Cell(25);
    $this->SetTextColor(48,149,160);
    $this->SetFont('Arial','B',20);
    $this->Cell(30,10,'Nivel de ingles',0,0,'C');
    
    $this->Ln(10);
    $this->SetTextColor(0,0,0);
    $this->SetFont('Arial','',15);
    $this->Cell(5);
    $this->Cell(30,15,$idiomas,0,0,'C');

    $this->Ln(30);
    $this->Cell(15);
    $this->SetTextColor(48,149,160);
    $this->SetFont('Arial','B',20);
    $this->Cell(30,10,'Formacion Academica',0,0,'');

    $this->Ln(10);
    $this->Cell(13);
    $this->SetTextColor(48,149,160);
    $this->SetFont('Arial','B',15);
    $this->Cell(30,10,'Bachiller',0,0,'C');

    $this->Ln(10);
    $this->Cell(15);
    $this->SetTextColor(0,0,0);
    $inst = ('Institucion: '.$instituto);
    $this->SetFont('Arial','',15);
    $this->MultiCell(160,7,$inst);
  
    $this->Cell(15);
    $tit = ('Titulo de bachiller: '.$titulo);
    $this->SetFont('Arial','',15);
    $this->MultiCell(160,7,$tit);

    $this->Cell(15);
    $fech = ('Fecha de Grado: '.$fecha);
    $this->SetFont('Arial','',15);
    $this->MultiCell(160,7,$fech);

    }

    function tecnico($instituto, $nombre,$fecha){
    $this->Ln(10);
    $this->Cell(15);
    $this->SetTextColor(0,0,0);
    $inst = ('Institucion: '.$instituto);
    $this->SetFont('Arial','',15);
    $this->MultiCell(160,7,$inst);
  
    $this->Cell(15);
    $tit = ('Nombre del Tecnico: '.$nombre);
    $this->SetFont('Arial','',15);
    $this->MultiCell(160,7,$tit);

    $this->Cell(15);
    $fech = ('Fecha de Grado: '.$fecha);
    $this->SetFont('Arial','',15);
    $this->MultiCell(160,7,$fech);
    }

    function tecnologo($instituto, $nombre,$fecha){
    $this->Ln(10);
    $this->Cell(15);
    $this->SetTextColor(0,0,0);
    $inst = ('Institucion: '.$instituto);
    $this->SetFont('Arial','',15);
    $this->MultiCell(160,7,$inst);
  
    $this->Cell(15);
    $tit = ('Nombre del Tecnologo: '.$nombre);
    $this->SetFont('Arial','',15);
    $this->MultiCell(160,7,$tit);

    $this->Cell(15);
    $fech = ('Fecha de Grado: '.$fecha);
    $this->SetFont('Arial','',15);
    $this->MultiCell(160,7,$fech);
    }

    function formacionComplementaria($instituto, $nombre,$fecha, $horas){
    $this->Ln(10);
    $this->Cell(34);
    $this->SetTextColor(48,149,160);
    $this->SetFont('Arial','B',15);
    $this->Cell(30,10,'Cursos, seminarios, talleres',0,0,'C');

    $this->Ln(10);
    $this->Cell(15);
    $this->SetTextColor(0,0,0);
    $nom = ('Nombre del curso: '.$nombre);
    $this->SetFont('Arial','',15);
    $this->MultiCell(160,7,$nom);
  
    $this->Cell(15);
    $inst = ('Institucion: '.$instituto);
    $this->SetFont('Arial','',15);
    $this->MultiCell(160,7,$inst);

    $this->Cell(15);
    $fech = ('Fecha de Finalizacion: '.$fecha);
    $this->SetFont('Arial','',15);
    $this->MultiCell(160,7,$fech);

    $this->Cell(15);
    $horas = ('Horas cursadas: '.$horas);
    $this->SetFont('Arial','',15);
    $this->MultiCell(160,7,$horas);
    }

    function experienciaAcademica($nombre, $conocimientos,$materia){
        $this->Ln(10);
        $this->Cell(30);
        $this->SetTextColor(48,149,160);
        $this->SetFont('Arial','B',15);
        $this->Cell(30,10,'Proyectos academicos',0,0,'C');
    
        $this->Ln(10);
        $this->Cell(15);
        $this->SetTextColor(0,0,0);
        $nom = ('Nombre del proyecto: '.$nombre);
        $this->SetFont('Arial','',15);
        $this->MultiCell(160,7,$nom);
      
        $this->Cell(15);
        $inst = ('Materia: '.$materia);
        $this->SetFont('Arial','',15);
        $this->MultiCell(160,7,$inst);
    
        $this->Cell(15);
        $fech = ('Conocimientos adquiridos: '.$conocimientos);
        $this->SetFont('Arial','',15);
        $this->MultiCell(160,7,$fech);
    }

    function experienciaLaboral($cargo,$empresa,$funciones,$fecha){
    
        $this->Ln(10);
        $this->Cell(15);
        $this->SetTextColor(0,0,0);
        $nom = ('Cargo: '.$cargo);
        $this->SetFont('Arial','',15);
        $this->MultiCell(160,7,$nom);
      
        $this->Cell(15);
        $inst = ('Empresa: '.$empresa);
        $this->SetFont('Arial','',15);
        $this->MultiCell(160,7,$inst);
    
        $this->Cell(15);
        $fech = ('Fecha de Finalizacion: '.$fecha);
        $this->SetFont('Arial','',15);
        $this->MultiCell(160,7,$fech);
    
        $this->Cell(15);
        $func = ('Funciones: '.$funciones);
        $this->SetFont('Arial','',15);
        $this->MultiCell(160,7,$func);
    }

    function referencias($nombre,$cargo,$telefono){
    
        $this->Ln(10);
        $this->Cell(15);
        $this->SetTextColor(0,0,0);
        $nom = ('Nombre completo: '.$nombre);
        $this->SetFont('Arial','',15);
        $this->MultiCell(160,7,$nom);
      
        $this->Cell(15);
        $carg = ('Cargo: '.$cargo);
        $this->SetFont('Arial','',15);
        $this->MultiCell(160,7,$carg);
    
        $this->Cell(15);
        $tel = ('telefono: '.$telefono);
        $this->SetFont('Arial','',15);
        $this->MultiCell(160,7,$tel);

    }
    
// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

require 'conec.php';

$code=$codigo;


$con_header = "SELECT nom_estudiante, telefono, correo, direccion FROM estudiante WHERE cod_estudiante=$code";
$header = $mysqli->query($con_header);

$con_obligatorios = "SELECT ins_bachiller, titulo_bachiller, fec_fin_bachiller, idiomas, descripcion 
                    FROM estudiante, perfil, formacion_academica
                    WHERE PERFIL.cod_perfil=ESTUDIANTE.cod_estudiante AND FORMACION_ACADEMICA.cod_f_academica = ESTUDIANTE.cod_estudiante 
                    AND cod_estudiante=$code";
$obligatorios = $mysqli->query($con_obligatorios);

$con_tecnico = "SELECT nom_f_tecnica, inst_f_tecnica, f_final_f_tecnica FROM f_tecnica WHERE nivel=1 AND cod_f_academica=$code ";
$tecnico = $mysqli->query($con_tecnico);

$con_tecnologo = "SELECT nom_f_tecnica, inst_f_tecnica, f_final_f_tecnica FROM f_tecnica WHERE nivel=2 AND cod_f_academica=$code ";
$tecnologo = $mysqli->query($con_tecnologo);

$con_complementaria = "SELECT nom_certificacion, fecha_final_certificacion, inst_certificacion, horas FROM certificado WHERE cod_f_academica=$code ";
$complementaria = $mysqli->query($con_complementaria);

$con_expaca = "SELECT nom_exp_academica, con_aplicados, materia FROM exp_academica WHERE cod_estudiante=$code ";
$expaca = $mysqli->query($con_expaca);

$con_explabo = "SELECT cargo, empresa, fun_principales, fecha_fin FROM exp_laboral WHERE cod_estudiante=$code ";
$explaboral = $mysqli->query($con_explabo);

$con_referencias = "SELECT nom_referencia, cargo_referencia, tel_referencia FROM referencia WHERE cod_estudiante=$code ";
$referencias = $mysqli->query($con_referencias);


    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',15);

    while($row=$header ->fetch_assoc()){
        $pdf->contenido($row['nom_estudiante'], $row['telefono'], $row['correo'], $row['direccion']);
    }

    while($row=$obligatorios ->fetch_assoc()){
        $pdf->obligatorios($row['ins_bachiller'], $row['titulo_bachiller'], $row['fec_fin_bachiller'],
         $row['idiomas'], $row['descripcion']);
    }

    if(mysqli_num_rows($tecnico)>0){
        $pdf->Ln(30);
        $pdf->Cell(13);
        $pdf->SetTextColor(48,149,160);
        $pdf->SetFont('Arial','B',15);
        $pdf->Cell(30,10,'Tecnico',0,0,'C');

        while($row=$tecnico ->fetch_assoc()){
            $pdf->tecnico($row['inst_f_tecnica'], $row['nom_f_tecnica'], $row['f_final_f_tecnica']);
        }
    }

    if(mysqli_num_rows($tecnologo)>0){
        $pdf->Ln(10);
        $pdf->Cell(13);
        $pdf->SetTextColor(48,149,160);
        $pdf->SetFont('Arial','B',15);
        $pdf->Cell(30,10,'Tecnologo',0,0,'C');
    

        while($row=$tecnologo ->fetch_assoc()){
            $pdf->tecnologo($row['ins_f_tecnica'], $row['nom_f_tecnica'], $row['f_final_f_tecnica']);
        }
    }
   

    if(mysqli_num_rows($complementaria)>0){
        $pdf->Ln(20);
        $pdf->Cell(15);
        $pdf->SetTextColor(48,149,160);
        $pdf->SetFont('Arial','B',20);
        $pdf->Cell(30,10,'Formacion Complementaria',0,0,'');

        while($row=$complementaria ->fetch_assoc()){
            $pdf->formacionComplementaria($row['inst_certificacion'], $row['nom_certificacion'], $row['fecha_final_certificacion'], $row['horas']);
        }
    }

    if(mysqli_num_rows($expaca)>0){
        $pdf->Ln(20);
        $pdf->Cell(15);
        $pdf->SetTextColor(48,149,160);
        $pdf->SetFont('Arial','B',20);
        $pdf->Cell(30,10,'Experiencia Academica',0,0,'');

        while($row=$expaca ->fetch_assoc()){
            $pdf->experienciaAcademica($row['nom_exp_academica'], $row['con_aplicados'], $row['materia']);
        }
    }

    if(mysqli_num_rows($explaboral)>0){
        $pdf->Ln(20);
        $pdf->Cell(15);
        $pdf->SetTextColor(48,149,160);
        $pdf->SetFont('Arial','B',20);
        $pdf->Cell(30,10,'Experiencia Laboral',0,0,'');

        while($row=$explaboral ->fetch_assoc()){
            $pdf->experienciaLaboral($row['cargo'], $row['empresa'], $row['fun_principales'],$row['fecha_fin']);
        }
    }
        
    if(mysqli_num_rows($referencias)>0){
        $pdf->Ln(20);
        $pdf->Cell(15);
        $pdf->SetTextColor(48,149,160);
        $pdf->SetFont('Arial','B',20);
        $pdf->Cell(30,10,'Referencias',0,0,'');

        while($row=$referencias ->fetch_assoc()){
            $pdf->referencias($row['nom_referencia'], $row['cargo_referencia'], $row['tel_referencia']);
        }
    }
    $pdf->Output('hoja_de_vida.pdf', 'D');

    if($referencias != ''){
        $pdf->Ln(20);
        $pdf->Cell(15);
        $pdf->SetTextColor(48,149,160);
        $pdf->SetFont('Arial','B',20);
        $pdf->Cell(30,10,'Referencias',0,0,'');
        
        while($row=$referencias ->fetch_assoc()){
            $pdf->referencias($row['nom_referencia'], $row['cargo_referencia'], $row['tel_referencia']);
        }
    }

    
    header("Location: http://localhost/proyectosw/vista/it-next/it_about.php?ky=$code");
?>
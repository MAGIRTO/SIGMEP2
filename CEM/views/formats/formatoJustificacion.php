<?php
require('../../libs/fpdf/fpdf.php');

include("../../persistense/Db.class.php");

$bd=Db::getInstance();
$idJustificacion= $_POST['idJustificacion'];
$a = '20 de abril';
$a2= " decilo papa";   
$sql="SELECT `idJustificaciones`, `fechaJustificacion`, `valorContrato`, `que`, `porque`, `paraque`, `plazoContrato`, `observaciones`, `resultadoEsperado`, `especificacionesContrato`, `fechaAutorizacion`, `Areas_idAreas`, `nombres`, `apellidos`, `nombreareas`
 FROM justificaciones j, personas p, areas a
  WHERE j.Personas_cedula=p.cedula and j.Areas_idAreas= a.idAreas and j.idJustificaciones='$idJustificacion'";

$stmt=$bd->ejecutar($sql);

/*Realizamos un bucle para ir obteniendo los resultados*/
$x=$bd->obtener_fila($stmt,0);

$date = date_create($x['fechaJustificacion']);
$fechaFormato=date_format($date,'d/m/y');
$valorContratoTexto =number_format($x['valorContrato']);

   //echo $x['valorContrato'].'<br />';


class PDF extends FPDF
{
	

// Cabecera de página
function Header()
{
	// Logo
	//$this->Image('../MetroAutomatizacion/img/logo.png',20,16,33);
	// Arial bold 15
	$this->SetFont('Arial','B',12);
   //Establecemos los márgenes izquierda, arriba y derecha: 
   //$this->SetMargins(60, 25 , 30); 
	// Movernos a la derecha
	$this->Cell(44,21,$this->Image('../../assets/img/logo.png',15,12,33),1,0,'C');
	// Título
	$this->Cell(0,7,"GESTION DE BIENES Y SERVICIOS",1,0,'C');
	$this->Ln(7);
	$this->Cell(44);
	$this->Cell(80,14,"JUSTIFICACION DE NECESIDADES",1,0,'C');
	$this->Cell(30,7,"Codigo",1,0,'L');
	$this->Cell(0,7,"FRABS-14",1,0,'L');
	$this->Ln(7);
	$this->Cell(124);
	$this->Cell(30,7,"Version",1,0,'L');
	$this->Cell(0,7,"01",1,0,'L');

	// Salto de línea
	$this->Ln(7);
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



// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFillColor(191,191,191);
$pdf->Ln(14);
$pdf->SetFont('Arial','B',10);

$pdf->Cell(60,7,"AREA SOLICITANTE",1,0,'L',true);
$pdf->SetFont('Arial','',10);
$pdf->Cell(0,7,$x['nombreareas'],1,'C');
$pdf->Ln(7);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(60,7,"NOMBRE SOLICITANTE",1,0,'L',true);
$pdf->SetFont('Arial','',10);
$pdf->Cell(0,7,$x['nombres']." ".$x['apellidos'],1,'C');
$pdf->Ln(7);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(60,7,"VALOR",1,0,'L',true);
$pdf->SetFont('Arial','',10);
$pdf->Cell(60,7,"$ ".$valorContratoTexto,1,'C');
$pdf->Cell(40,7,"FECHA SOLICITUD",1,0,'C',true);

$pdf->Cell(0,7,$fechaFormato,1,'C');
$pdf->Ln(14);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,7,"¿QUE SE REQUIERE?",1,0,'C',true);
$pdf->Ln(7);
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(0,5,$x['que'],1,'L');

$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,7,"¿PORQUE SE REQUIERE?",1,0,'C',true);
$pdf->Ln(7);
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(0,5,$x['porque'],1,'L');

$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,7,"¿PARAQUE SE REQUIERE?",1,0,'C',true);
$pdf->Ln(7);
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(0,5,$x['paraque'],1,'L');

$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,7,"TERMINO",1,0,'C',true);
$pdf->SetFont('Arial','',10);
$pdf->Cell(0,7,$x['plazoContrato'],1,0,'C');
$pdf->Ln(7);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,7,"OBSERVACIONES",1,0,'C',true);
$pdf->Ln(7);
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(0,7,$x['observaciones'],1,'L');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,7,"RESULTADO ESPERADO",1,0,'C',true);
$pdf->Ln(7);
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(0,7,$x['resultadoEsperado'],1,'L');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,7,"ESPECIFICACIONES O CARACTERISTICAS DE LO QUE SE REQUIERE",1,0,'C',true);
$pdf->Ln(7);
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(0,7,$x['especificacionesContrato'],1,'L');
$pdf->Cell(80,7,"JEFE DE UNIDAD",1,0,'C',true);
$pdf->Cell(80,7,"INTERVENTOR",1,0,'C',true);
$pdf->Cell(0,14,"FECHA ",1,0,'C',true);
$pdf->Ln(7);
$pdf->Cell(80,30,"",1,0,'C');
$pdf->Cell(80,30,"",1,0,'C');
$pdf->Ln(7);
$pdf->Cell(160);
$pdf->Cell(0,30,"",1,0,'C');


$pdf->Ln(23);
$pdf->Cell(80,7,"FIRMA",1,0,'C',true);
$pdf->Cell(80,7,"FIRMA",1,0,'C',true);


$accion= $_POST['accion'];
if($accion=="guardar"){
$pdf->Output('justificacion.pdf','F');

}else if($accion=="explorar"){
$pdf->Output('justificacion.pdf','I');

}

?>

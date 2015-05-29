<?php
require('../../libs/fpdf/fpdf.php');

include("../../persistense/Db.class.php");
   $a = '20 de abril';
   $a2= "X";
   $a3= "20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril20 de abril";
   // //Datos del contrato
   // $codigo = $_POST['codigo'];
   // $fechaContrato = $_POST['fechaContrato'];
   // $tipoContrato = $_POST['tipoContrato'];
   // $valor = $_POST['valor'];
   // $plazo = $_POST['plazo'];

   // //Datos Contratista
   // $nombreContratista = $_POST['nombreContratista'];
   // $nitContratista = $_POST['nitContratista'];
   // $nombreRepresentanteContratista = $_POST['nombreRepresentanteContratista'];
   // $cedulaRepresentanteContratista = $_POST['cedulaRepresentanteContratista'];
   // $lugarExpedicionContratista = $_POST['lugarExpedicionContratista'];
   // $cargoRepresentanteContratista = $_POST['cargoRepresentanteContratista'];
   
   // //Datos Contratante
   // $nombreContratante = $_POST['nombreContratante'];
   // $nitContratante = $_POST['nitContratante'];
   // $nombreRepresentanteContratante = $_POST['nombreRepresentanteContratante'];
   // $cedulaRepresentanteContratante = $_POST['cedulaRepresentanteContratante'];
   // $lugarExpedicionContratante = $_POST['lugarExpedicionContratante'];
   // $cargoRepresentanteContratante = $_POST['cargoRepresentanteContratante'];

   // //Datos Tecnicos
   // $nombreSupervisor = $_POST['nombreSupervisor'];
   // $cedulaSupervisor = $_POST['cedulaSupervisor'];
   // $fechaReunion = $_POST['fechaReunion'];
   // $fechaInicio = $_POST['fechaInicio'];
   // $fechaFinalizacion = $_POST['fechaFinalizacion'];
   // $fechaFirma = $_POST['fechaFirma'];
   // $objetoContrato = $_POST['objetoContrato'];
   // $formaPago = $_POST['formaPago'];
   // $alcance = $_POST['alcance'];

  


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
	$this->Cell(0,7,"GESTION FINANCIERA",1,0,'C');
	$this->Ln(7);
	$this->Cell(44);
	$this->Cell(80,14,"SOLICITUD  TRÁMITE PRESUPUESTAL",1,0,'C');
	$this->Cell(30,7,"Codigo",1,0,'L');
	$this->Cell(0,7,"FRAGF-01",1,0,'L');
	$this->Ln(7);
	$this->Cell(124);
	$this->Cell(30,7,"Version",1,0,'L');
	$this->Cell(0,7,"03",1,0,'L');

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
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,10,"1. DEPENDENCIA QUE PRESENTA LA SOLICITUD",1,0,'C');
$pdf->Ln(10);
$pdf->SetFont('Arial','',10);   
$pdf->Cell(80,10,"1.1. DEPENDENCIA",1,'C');
$pdf->Cell(0,10,$a,1,'C');
$pdf->Ln(10);
$pdf->Cell(80,10,"1.2. FUNCIONARIO QUE SOLICITA",1,'C');
$pdf->Cell(0,10,$a,1,'C');
$pdf->Ln(10);
$pdf->Cell(80,10,"1.3. FECHA DE LA SOLICITUD",1,'C');
$pdf->Cell(0,10,$a,1,'C');
$pdf->Ln(10);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,10,"2. TIPO DE TRAMITE SOLICITADO",1,0,'C');
$pdf->Ln(10);
$pdf->SetFont('Arial','',10);   
$pdf->Cell(80,10,"DISPONIBILIDAD PRESUPUESTAL",1,'C');
$pdf->Cell(15,10,$a2,1,0,'C');
$pdf->Cell(80,10,"ADICION DISPONIBILIDAD",1,'C');
$pdf->Cell(15,10,$a2,1,0,'C');
$pdf->Ln(10);
$pdf->Cell(80,10,"COMPROMISO PRESUPUESTAL",1,'C');
$pdf->Cell(15,10,$a2,1,0,'C');
$pdf->Cell(80,10,"ADICION COMPROMISO",1,'C');
$pdf->Cell(15,10,$a2,1,0,'C');
$pdf->Ln(10);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,10,"3. DATOS DE PROVEEDOR",1,0,'C');
$pdf->Ln(10);
$pdf->SetFont('Arial','',10);   
$pdf->Cell(80,10,"3.1. FECHA DE RECEPCION",1,'C');
$pdf->Cell(0,10,$a,1,'C');
$pdf->Ln(10);
$pdf->Cell(80,10,"3.2. NOMBRE DEL BENEFICIARIO",1,'C');
$pdf->Cell(0,10,$a,1,'C');
$pdf->Ln(10);
$pdf->Cell(30,10,"3.3. CEDULA ",1,'C');
$pdf->Cell(10,10,$a2,1,0,'C');
$pdf->Cell(10,10,"NIT",1,'C');
$pdf->Cell(10,10,$a2,1,0,'C');
$pdf->Cell(10,10,"RUT",1,'C');
$pdf->Cell(10,10,$a2,1,0,'C');
$pdf->Cell(0,10,$a,1,'C');
$pdf->Ln(10);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,10,"4. CONTABILIDAD Y PRESUPUESTO",1,0,'C');
$pdf->Ln(10);
$pdf->SetFont('Arial','',10);   
$pdf->Cell(80,10,"4.1. DISPONIBILIDAD PRESUPUESTAL",1,'C');
$pdf->Cell(0,10,$a,1,'C');
$pdf->Ln(10);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,10,"5. OBJETO",1,0,'C');
$pdf->Ln(10);
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(0,10,$a3,1,'L');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,10,"6. NOMBRE Y CODIGO DEL RUBRO PRESUPUESTAL",1,0,'C');
$pdf->Ln(10);
$pdf->SetFont('Arial','',10);
$pdf->Cell(0,10,$a,1,'L');
$pdf->Ln(10);
$pdf->Cell(50,10,"6.1. CONTRATO ",1,'C');
$pdf->Cell(15,10,$a2,1,0,'C');
$pdf->Cell(20,10,"DURACION",1,'C');
$pdf->Cell(15,10,$a2,1,0,'C');
$pdf->Cell(0,10,$a,1,'C');
$pdf->Ln(10);
$pdf->Cell(50,10,"6.2. ORDEN DE COMPRA ",1,'C');
$pdf->Cell(15,10,$a2,1,0,'C');
$pdf->Cell(20,10,"DURACION",1,'C');
$pdf->Cell(15,10,$a2,1,0,'C');
$pdf->Cell(0,10,$a,1,'C');
$pdf->Ln(10);
$pdf->Cell(70,10,"6.3. NOMBRE DEL BENEFICIARIO ",1,'C');
$pdf->Cell(0,10,$a2,1,0,'C');
$pdf->Ln(10);
$pdf->Cell(70,10,"6.4. CENTRO DE COSTOS ",1,'C');
$pdf->Cell(0,10,$a2,1,0,'C');
$pdf->Ln(10);
$pdf->Cell(70,10,"6.5. VALOR",1,'C');
$pdf->Cell(0,10,$a2,1,0,'C');
$pdf->Ln(10);
$pdf->Cell(70,10,"6.6. VIGENCIA ",1,'C');
$pdf->Cell(0,10,$a2,1,0,'C');
$pdf->Ln(10);
$pdf->Cell(110,10,"6.7. CON CARGO A LA DISPONIBILIDAD NUMERO ",1,'C');
$pdf->Cell(0,10,$a2,1,0,'C');
$pdf->Ln(10);
$pdf->Cell(95,40,"",1,'C');
$pdf->Cell(0,40,"",1,'C');
$pdf->Ln(40);
$pdf->Cell(95,10,"FIRMA DEL SOLICITANTE",1,0,'C');
$pdf->Cell(95,10,"GERENCIA ADMINISTRATIVA Y FINANCIERA",1,0,'C');





$pdf->Output();
?>

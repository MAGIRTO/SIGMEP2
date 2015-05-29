<?php
require('../../libs/fpdf/fpdf.php');

include("../../persistense/Db.class.php");
$bd=Db::getInstance();
$idContrato= $_POST['idContrato'];
$fechaReunion= $_POST['fechaReunion'];
$fechaFirma= $_POST['fechaFirma'];
$a = '20 de abril';
$a2= " decilo papa";  


$sql = "SELECT *
          FROM contratos c , personas p 
          WHERE c.idContratos='$idContrato'
          and p.cedula=c.supervisor";

$stmt=$bd->ejecutar($sql);
$x=$bd->obtener_fila($stmt,0);


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
	$this->Cell(0,7,"GESTION DE BIENES Y SERVICIOS",1,0,'C');
	$this->Ln(7);
	$this->Cell(44);
	$this->Cell(80,14,"ACTA DE INICIO",1,0,'C');
	$this->Cell(30,7,"Codigo",1,0,'L');
	$this->Cell(0,7,"FRABS-18",1,0,'L');
	$this->Ln(7);
	$this->Cell(124);
	$this->Cell(30,7,"Version",1,0,'L');
	$this->Cell(0,7,"1.0",1,0,'L');

	// Salto de línea
	$this->Ln(10);
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
$pdf->SetFont('Arial','',12);	

$pdf->Ln(15);
$pdf->Cell(90,10,"CONTRATO",1,'C');
$pdf->Cell(0,10,$x['idContratos'],1,'C');
$pdf->Ln(10);
$pdf->Cell(90,10,"FECHA DEL CONTRATO",1,'C');
$pdf->Cell(0,10,$x['fechaElaboracion'],1,'C');
$pdf->Ln(10);
$pdf->Cell(90,10,"TIPO CONTRATO",1,'C');
$pdf->Cell(0,10,$x['tipoContrato'],1,'C');
$pdf->Ln(10);
$pdf->Cell(90,10,"CONTRATISTA",1,'C');
$pdf->Cell(0,10,$x['contratista'],1,'C');
$pdf->Ln(10);
$pdf->Cell(90,10,"CONTRATANTE",1,'C');
$pdf->Cell(0,10,$x['contratante'],1,'C');
$pdf->Ln(10);
$pdf->Cell(90,10,"VALOR",1,'C');
$pdf->Cell(0,10,$x['valorContrato'],1,'C');
$pdf->Ln(20);

$sql2=" SELECT * FROM empresas e,representantes r
 WHERE e.idEmpresa='".$x['contratista']."' 
 AND e.Representantes_cedulaRepresentantes= r.cedula";
$stmt2=$bd->ejecutar($sql2);
$x2=$bd->obtener_fila($stmt2,0);


$sql3=" SELECT nombreEmpresa FROM empresas e,representantes r
 WHERE e.idEmpresa='".$x['contratante']."' 
 AND e.Representantes_cedulaRepresentantes= r.cedula";
$stmt3=$bd->ejecutar($sql3);
$x3=$bd->obtener_fila($stmt3,0);


$mensaje="El dia ".$fechaReunion." Se reunieron ".$x['nombres']." ".$x['apellidos']." en calidad de Supervisor por parte de ".$x3['nombreEmpresa']." y ".$x2['nombreRepresentantes']." ".$x2['apellidoRepresentantes']." en calidad de ".$x2['cargoRepresentante']." por parte de ".$x2['nombreEmpresa']." Con NIT Nº ".$x2['idEmpresa']." con la finalidad de dar inicio al contrato";
$mensaje2="El plazo para la ejecucion sera desde el dia ".$x['fechaInicio']." hasta el dia ".$x['fechaFin'];
$mensaje3="Para constancia se firma en Medellin el dia ".$fechaFirma;
$pdf->MultiCell(0, 10, $mensaje);
$pdf->Ln(10);
$pdf->MultiCell(0, 10, $mensaje2);
$pdf->Ln(10);
$pdf->MultiCell(0, 10, $mensaje3);
$pdf->Ln(40);

$pdf->Cell(10);
$pdf->Cell(70,10,"",'B',0,'C');
$pdf->Cell(30);
$pdf->Cell(70,10,"",'B',0,'C');

$pdf->Ln(10);
$pdf->Cell(20);
$pdf->Cell(50,7,$x['nombres']." ".$x['apellidos'],0,0,'C');
$pdf->Cell(50);
$pdf->Cell(50,7,$x2['nombreRepresentantes']." ".$x2['apellidoRepresentantes'],0,0,'C');
$pdf->Ln(7);
$pdf->Cell(20);
$pdf->Cell(50,7,"Supervisor",0,0,'C');
$pdf->Cell(50);
$pdf->Cell(50,7,$x2['cargoRepresentante'],0,0,'C');
$pdf->Ln(7);
$pdf->Cell(20);
$pdf->Cell(50,7,$x3['nombreEmpresa'],0,0,'C');
$pdf->Cell(50);
$pdf->Cell(50,7,$x2['nombreEmpresa'],0,0,'C');





$pdf->Output();
?>

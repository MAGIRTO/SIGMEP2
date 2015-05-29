<?php
require('../../libs/fpdf/fpdf.php');

include("../../persistense/Db.class.php");
$bd=Db::getInstance();
$idSolicitud= $_POST['idSolicitud'];


$sql=" SELECT * FROM areas a, solicitudcontratos s, detallecontratos dc, detallevalorcontratos dvc
 WHERE s.idSolicitudContratos='$idSolicitud'
 AND s.detalleContrato=dc.idDetalleContratos
 AND s.valorContrato=dvc.idDetalleValorContratos
 AND s.idAreaSolicitante=a.idAreas";
$stmt=$bd->ejecutar($sql);
$x=$bd->obtener_fila($stmt,0);
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
	$this->Cell(150,14,"SOLICITUD DE ELABORACION DE CONTRATO",1,0,'C');
	$this->Cell(30,7,"Codigo",1,0,'L');
	$this->Cell(0,7,"FRABS-09",1,0,'L');
	$this->Ln(7);
	$this->Cell(194);
	$this->Cell(30,7,"Version",1,0,'L');
	$this->Cell(0,7,"1.0",1,0,'L');

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




$pdf = new PDF("L");
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFillColor(191,191,191);
$pdf->SetFont('Arial','',12);	


$pdf->Cell(0,7,"METROPARQUES E.I.C.E",'LR',0,'C');
$pdf->Ln(7);
$pdf->Cell(180,7," ",'L',0,'C');

$pdf->SetFont('Arial','B',10); 
$pdf->Cell(40,6,"FECHA SOLICITUD",1,0,'L',true);
$pdf->SetFont('Arial','',10);  
$pdf->Cell(0,6,$x['fechaSolicitud'],1,'L');
$pdf->Ln(6);
$pdf->Cell(40,7," ",'L',0,'C');
$sql2=" SELECT * FROM empresas e,representantes r
 WHERE e.idEmpresa='".$x['contratista']."' 
 AND e.Representantes_cedulaRepresentantes= r.cedula";
$stmt2=$bd->ejecutar($sql2);
$x2=$bd->obtener_fila($stmt2,0);
$x3=$bd->obtener_fila($bd->obtener_Persona($x['cedulaEncargado']),0);


$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,6,"CONTRATISTA",0,'L');
$pdf->SetFont('Arial','',10); 
$pdf->Cell(60,6,$x2['nombreEmpresa'],'B','L');
$pdf->Cell(0,6," ",'R',0,'C');
$pdf->Ln(6);

$pdf->Cell(40,6," ",'L',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,6,"NIT o C.C",0,'L');
$pdf->SetFont('Arial','',10); 
$pdf->Cell(60,6,$x2['idEmpresa'],'B','L');
$pdf->Cell(0,6," ",'R',0,'C');
$pdf->Ln(6);

$pdf->Cell(40,6," ",'L',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,6,"REPRESENTANTE LEGAL",0,'L');
$pdf->SetFont('Arial','',10); 
$pdf->Cell(60,6,$x2['nombreRepresentantes']." ".$x2['apellidoRepresentantes'],'B','L');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(30);
$pdf->Cell(40,6,"TIPO DE CONTRATO",0,'L');
$pdf->SetFont('Arial','',10); 
$pdf->Cell(0,6,$x['tipoContrato'],'BR','L');
$pdf->Ln(6);

$pdf->Cell(40,6," ",'L',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,6,"CC",0,'L');
$pdf->SetFont('Arial','',10); 
$pdf->Cell(60,6,number_format($x2['cedula']),'B','L');
$pdf->Cell(0,6," ",'R',0,'C');
$pdf->Ln(6);

$pdf->Cell(40,6," ",'L',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,6,"PERSONA ENCARGADA",0,'L');
$pdf->SetFont('Arial','',10); 
$pdf->Cell(60,6,$x3['nombres']." ".$x3['apellidos'],'B','L');
$pdf->Cell(0,6," ",'R',0,'C');
$pdf->Ln(6);

$pdf->Cell(40,6," ",'L',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,6,"DIRECCION",0,'L');
$pdf->SetFont('Arial','',10); 
$pdf->Cell(60,6,$x2['direccion'],'B','L');
$pdf->Cell(0,6," ",'R',0,'C');
$pdf->Ln(6);

$pdf->Cell(40,6," ",'L',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,6,"Nº TELEFONICO",0,'L');
$pdf->SetFont('Arial','',10); 
$pdf->Cell(60,6,$x2['telefono'],'B','L');

$pdf->SetFont('Arial','B',10);
$pdf->Cell(8,6,"FAX",0,'L');
$pdf->SetFont('Arial','',10); 
$pdf->Cell(40,6,$x2['fax'],'B','L');

$pdf->SetFont('Arial','B',10);
$pdf->Cell(12,6,"EMAIL",0,'L');
$pdf->SetFont('Arial','',10); 
$pdf->Cell(0,6,$x3['email'],'BR','L');
$pdf->Ln(6);

$pdf->Cell(40,6," ",'L',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,6,"AREA SOLICITANTE",0,'L');
$pdf->SetFont('Arial','',10); 
$pdf->Cell(60,6,$x['nombreAreas'],'B','L');
$pdf->Cell(0,6," ",'R',0,'C');
$pdf->Ln(6);
$pdf->Cell(0,6," ",'LR',0,'C');
$pdf->Ln(6);

$pdf->SetFont('Arial','B',10);
$x3=$bd->obtener_fila($bd->obtener_Persona($x['cedulaSupervisor']),0);

$pdf->Cell(50,20,"INTERVENTOR",1,0,'C',true);
$pdf->SetFont('Arial','',10);
$pdf->Cell(80,20,$x3['nombres']." ".$x3['apellidos'],1,0,'C');

$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,20,"SOLICITUD REFERENTE A",1,0,'C',true);
$pdf->SetFont('Arial','',10);
$pdf->Cell(0,20,$x['referenciaSolicitud'],1,0,'C');

$pdf->Ln(20);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,5,"OBJETO DEL CONTRATO",1,0,'C',true);
$pdf->Ln(5);
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(0,5,$x['objetoContrato'],1,"L");

$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,5,"OBLIGACIONES DEL CONTRATISTA",1,0,'C',true);
$pdf->Ln(5);
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(0,5,$x['obligacionesContratista'],1,'L');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,5,"OBLIGACIONES DEL CONTRATANTE",1,0,'C',true);
$pdf->Ln(5);
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(0,5,$x['obligacionesContratante'],1,'L');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,10,"VALORES EN PESOS",1,0,'C',true);
$pdf->Ln(10);
$pdf->Cell(55,5,"VALOR",1,0,'C',true);
$pdf->SetFont('Arial','',10);

$valorContrato =number_format($x['valorContrato']);
$pdf->Cell(55,5,"$ ".$valorContrato,1,0,'C');
$valorIva=number_format($x['iva'] * 0.01 * $x['valorContrato']);
$valorTotal=number_format($x['iva'] * 0.01 * $x['valorContrato']+ $x['valorContrato']);


$pdf->SetFont('Arial','B',10);
$pdf->Cell(55,5,"IVA ( ".$x['iva']."% )",1,0,'C',true);
$pdf->SetFont('Arial','',10);
$pdf->Cell(0,5,"$ ".$valorIva,1,0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Ln(5);
$pdf->Cell(0,5,"VALOR TOTAL",1,0,'C',true);
$pdf->Ln(5);
$pdf->SetFont('Arial','',10);



$pdf->MultiCell(0,5,"$ ".$valorTotal,1,'C');
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,5,"CONCEPTO",1,0,'C',true);
$pdf->Ln(5);
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(0,5,$x['concepto'],1,'L');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,5,"FORMA Y MEDIOS DE PAGO",1,0,'C',true);
$pdf->Ln(5);
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(0,5,$x['formasPago'],1,'L');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(160,10,"NUMERO Y FECHA DEL CERTIFICADO DE DISPONIBILIDAD PRESUPUESTAL",1,0,'C',true);
$pdf->Cell(0,10,"NÚMERO Y FECHA COMPROMISO PRESUPUESTAL ",1,0,'C',true);
$pdf->Ln(10);
$nfCertificado = 'Certificado Nº '.$x['numeroCertificadoP']." Del Dia: ".$x['fechaCertificadoP'];
$nfCompromiso = 'Compromiso Nº '.$x['numeroCompromisoP']." Del Dia: ".$x['fechaCompromisoP'];
$pdf->SetFont('Arial','',10);
$pdf->Cell(160,5,$nfCertificado,1,0,'C');
$pdf->Cell(0,5,$nfCompromiso,1,0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Ln(5);
$pdf->Cell(160,10,"SEGURIDAD SOCIAL",1,0,'C',true);
 $pdf->Cell(60,10,"FECHA DE INICIO",1,0,'C',true);
 $pdf->Cell(0,10,$x['fechaInicio'],1,0,'C');
$pdf->Ln(10);
$pdf->SetFont('Arial','',10);
$pdf->Cell(160,10,$x['estadoSeguridadSocial'],1,0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(60,10,"FECHA DE FINALIZACION",1,0,'C',true);
$pdf->Cell(0,10,$x['fechaFin'],1,0,'C');
$pdf->Ln(10);
$pdf->Cell(0,10,"OBSERVACIONES",1,0,'C',true);
$pdf->Ln(10);
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(0,5,$x['observacionesSolicitud'],1,'J');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(130,10,"NOMBRE Y FIRMA DEL JEFE DE UNIDAD",1,0,'C',true);
$pdf->Cell(0,10,"NOMBRE Y FIRMA DEL INTERVENTOR",1,0,'C',true);
$pdf->Ln(10);
$pdf->Cell(130,20,"",1,0,'C');
$pdf->Cell(0,20,"",1,0,'C');
$pdf->Output();
?>

<?php
require("../../bibliotecas/fpdf/fpdf.php");
require("../../bibliotecas/adodb/adodb.inc.php");
require("../../php/conecta.php");
require("../../php/funcoes.php");


define('FPDF_FONTPATH', '../../bibliotecas/fpdf/font/');

$objeto = new FPDF();

$objeto->AddPage('P','A4');


$objeto->SetY(40);

$objeto->SetFont('Arial', 'B', 14);

//título do relatório
$objeto->Cell(190,10,utf8_decode('RELATÓRIO DE CIDADES'),0,1,'C',0); 

$objeto->Ln(20);

//linha de cabeçalho do relatório
$objeto->SetFont('Arial', 'B', 12);
$objeto->SetFillColor('#0000CD');
$objeto->SetTextColor(255,255,255);
$objeto->Cell(30,5,utf8_decode('CÓDIGO'),1,0,'C',1);
$objeto->Cell(110,5,'NOME',1,0,'C',1);
$objeto->Cell(50,5,'ESTADO',1,1,'C',1);

$mod = new conecta();
$sql = "select * from cidade order by nome";
$res = $mod->bd->Execute($sql);

$objeto->SetFont('Arial', '', 10);
$objeto->SetTextColor(000,000,000);
$x = 0;
while($reg = $res->FetchNextObject())
{
    //linha dos dados
    $objeto->Cell(30,5,$reg->COD,1,0,'C',0);
    $objeto->Cell(110,5,utf8_decode($reg->NOME),1,0,'L',0);
    $objeto->Cell(50,5,$reg->ESTADO,1,1,'C',0); 
    $x++;
}

$objeto->Cell(95,5,'Total de registros listados '.$x,0,0,'L',0);
$objeto->Cell(95,5,'Data - Hora: '.date("d/m/Y - H:i:s"),0,1,'C',0);
//Inicializa o buffer
//ob_start ();
 ob_clean();//add this line
//$objeto->Output();
$objeto->Output("arquivo.pdf","I");
?>

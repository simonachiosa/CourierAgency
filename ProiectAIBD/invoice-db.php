<?php
require('fpdf/fpdf.php');

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'curierat');

$query1 = mysqli_query($con, "select * from clienti where cod_clienti = '".$_GET['invoiceID']."'");
$invoice1 = mysqli_fetch_array($query1);

$query2 = mysqli_query($con, "select * from factura where cod_clienti  = '".$_GET['invoiceID']."'");
$invoice2 = mysqli_fetch_array($query2);

$query3 = mysqli_query($con, "select *
from `colet`, `comenzi-clienti`, `clienti`
where `colet`.cod_comanda=`comenzi-clienti`.cod_comanda
  and `comenzi-clienti`.cod_clienti=`clienti`.cod_clienti
  and `clienti`.cod_clienti = '".$_GET['invoiceID']."'");
$invoice3 = mysqli_fetch_array($query3);


$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
$pdf->Image('dpdLogo1.png', 22, 3);
//firma

$pdf->Cell(130,5,'DPD',0,0);
$pdf->Cell(59,5,'FACTURA',0,1);

$pdf->SetFont('Arial','',12);

$pdf->Cell(130,5,'Strada Cascavalului',0,0);
$pdf->Cell(59,5,'',0,1);

$pdf->Cell(130,5,'Galati, Romania, 800112',0,0);
$pdf->Cell(25,5,'Date',0,0);
$pdf->Cell(34,5,$invoice2['data_infiintarii'],0,1);

$pdf->Cell(130,5,'Phone: 0733-082-652',0,0);
$pdf->Cell(25,5,'Invoice #',0,0);
$pdf->Cell(34,5,$invoice2['cod_factura'],0,1);

$pdf->Cell(130,5,'Fax: 021.323.52.38',0,0);
$pdf->Cell(25,5,'Colet #',0,0);
$pdf->Cell(34,5,$invoice2['cod_colet'],0,1);

$pdf->Cell(189,10,'',0,1);

$pdf->Cell(100,5,'Bill to:',0,1);

//client

$pdf->Cell(10,5,'',0,0);
$pdf->Cell(90,5,$invoice1['nume'],0,1);

$pdf->Cell(10,5,'',0,0);
$pdf->Cell(90,5,$invoice1['prenume'],0,1);

$pdf->Cell(10,5,'',0,0);
$pdf->Cell(90,5,$invoice1['adresa'],0,1);

$pdf->Cell(10,5,'',0,0);
$pdf->Cell(90,5,$invoice1['telefon'],0,1);

$pdf->Cell(10,5,'',0,0);
$pdf->Cell(90,5,$invoice1['adresa_mail'],0,1);

$pdf->Cell(189,10,'',0,1);

//aranjament
$pdf->SetFont('Arial','B',12);

$pdf->Cell(130,5,'Descriptie',1,0);
$pdf->Cell(25,5,'Taxa',1,0);
$pdf->Cell(34,5,'Amount',1,1);

//produs
$pdf->SetFont('Arial','',12);

$amount = 0;

while($item = mysqli_fetch_array($query3) && $item2 = mysqli_fetch_array($query2)){
  $pdf->Cell(130,5,$item['dimensiune'],1,0);
  $pdf->Cell(25,5,'0',1,0);
  $pdf->Cell(34,5,number_format($item2['total_plata']),1,1,'R');
  $amount += $item2['total_plata'];
}

//total
$pdf->Cell(130,5,'',0,0);
$pdf->Cell(25,5,'Subtotal',0,0);
$pdf->Cell(4,5,'$',1,0);
$pdf->Cell(30,5,number_format($amount),1,1,'R');

$pdf->Cell(130,5,'',0,0);
$pdf->Cell(25,5,'Taxa',0,0);
$pdf->Cell(4,5,'$',1,0);
$pdf->Cell(30,5,'0',1,1,'R');

$pdf->Cell(130,5,'',0,0);
$pdf->Cell(25,5,'TVA',0,0);
$pdf->Cell(4,5,'-',1,0);
$pdf->Cell(30,5,'19%',1,1,'R');

$aftertax = $amount + (19*$amount/100);

$pdf->Cell(130,5,'',0,0);
$pdf->Cell(25,5,'Total',0,0);
$pdf->Cell(4,5,'$',1,0);
$pdf->Cell(30,5,number_format($aftertax),1,1,'R');

$pdf->Output();
?>

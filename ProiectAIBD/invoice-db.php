<?php
require('fpdf/fpdf.php');

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'curierat');

$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);

//firma
$pdf->Cell(130,5,'DPD',0,0);
$pdf->Cell(59,5,'FACTURA',0,1);

$pdf->SetFont('Arial','',12);

$pdf->Cell(130,5,'Strada Cascavalului',0,0);
$pdf->Cell(59,5,'',0,1);

$pdf->Cell(130,5,'Galati, Romania, 800112',0,0);
$pdf->Cell(25,5,'Date',0,0);
$pdf->Cell(34,5,'[dd/mm/yyyy]',0,1);

$pdf->Cell(130,5,'Phone 0722383404',0,0);
$pdf->Cell(25,5,'Invoice #',0,0);
$pdf->Cell(34,5,'[1234567]',0,1);

$pdf->Cell(130,5,'Fax[07xxyyyzzz]',0,0);
$pdf->Cell(25,5,'*cod_clienti*',0,0);
$pdf->Cell(34,5,'[1234567]',0,1);

$pdf->Cell(189,10,'',0,1);

$pdf->Cell(100,5,'Bill to:',0,1);

//client

$query = mysqli_query($con, "select * from clienti where cod_clienti = '".$_GET['invoiceID']."'");
$invoice = mysqli_fetch_array($query);

$pdf->Cell(10,5,'',0,0);
$pdf->Cell(90,5,$invoice['nume'],0,1);

$pdf->Cell(10,5,'',0,0);
$pdf->Cell(90,5,$invoice['prenume'],0,1);

$pdf->Cell(10,5,'',0,0);
$pdf->Cell(90,5,$invoice['adresa'],0,1);

$pdf->Cell(10,5,'',0,0);
$pdf->Cell(90,5,$invoice['telefon'],0,1);

$pdf->Cell(10,5,'',0,0);
$pdf->Cell(90,5,$invoice['adresa_mail'],0,1);

$pdf->Cell(189,10,'',0,1);

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(130,5,'Description',1,0);
$pdf->Cell(25,5,'Taxable',1,0);
$pdf->Cell(34,5,'Amount',1,1);

//produs
$pdf->SetFont('Arial','',12);

$pdf->Cell(130,5,'ceva ceva ceva',1,0);
$pdf->Cell(25,5,'-',1,0);
$pdf->Cell(34,5,'3,250',1,1,'R');

$pdf->Cell(130,5,'altcevaceva ceva',1,0);
$pdf->Cell(25,5,'-',1,0);
$pdf->Cell(34,5,'1,200',1,1,'R');

$pdf->Cell(130,5,'cevacevaceva',1,0);
$pdf->Cell(25,5,'-',1,0);
$pdf->Cell(34,5,'999',1,1,'R');

//summary
$pdf->Cell(130,5,'',0,0);
$pdf->Cell(25,5,'Subtotal',0,0);
$pdf->Cell(4,5,'$',1,0);
$pdf->Cell(30,5,'4,450',1,1,'R');

$pdf->Cell(130,5,'',0,0);
$pdf->Cell(25,5,'Taxable',0,0);
$pdf->Cell(4,5,'$',1,0);
$pdf->Cell(30,5,'0',1,1,'R');

$pdf->Cell(130,5,'',0,0);
$pdf->Cell(25,5,'TVA',0,0);
$pdf->Cell(4,5,'$',1,0);
$pdf->Cell(30,5,'19%',1,1,'R');

$pdf->Cell(130,5,'',0,0);
$pdf->Cell(25,5,'Total',0,0);
$pdf->Cell(4,5,'$',1,0);
$pdf->Cell(30,5,'4,450',1,1,'R');

$pdf->Output();
?>

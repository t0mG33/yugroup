<?php
//ob_start();
use setasign\Fpdi\Fpdi;
// or for usage with TCPDF:
// use setasign\Fpdi\Tcpdf\Fpdi;

// or for usage with tFPDF:
// use setasign\Fpdi\Tfpdf\Fpdi;

// setup the autoload function
define('FPDF_FONTPATH','./font/');
require_once('autoload.php');
require_once('fpdf.php');
require_once('FpdfTpl.php');


// initiate FPDI  
$pdf =new Fpdi('P','mm', array(215.9,279.4));  
// add a page
$pdf->AddPage();  
// set the sourcefile  
$pdf->setSourceFile('input.pdf'); 


$pdf->SetAutoPageBreak(false); 
// import page 1  

 
$line_height = 5;
$tplIdx = $pdf->importPage(1);  
	// use the imported page and place it at point 10,10 with a width of 200 mm   (This is the image of the included pdf)
	$pdf->useTemplate($tplIdx, 2, 0, 215); 

$buyer_name = 'Shihan araf';
$buyer_address = 'Kazla Anandita';

$buyer_city = 'Rajshahi';
$buyer_province = "Albarta";
$buyer_postCode = 6204;

$buyer_email = 'shihan.cse@gmail.com';
$buyer_homePhone = '0721 451245';
$buyer_WorkPhone = '02588866638';
$buyer_cellPhone = '01719543625';

$vehicle_year = '2023';
$vehicle_make = 'toyota';
$vehicle_model = 'toyota r';
$vehicle_colour = 'Red';
$vehicle_sn = '20235870';
$vehicle_stock_number = '545875';

$vehichle_unit = 'km';
$vehichle_reading = 51245;


$tradein_year =  2023;
$tradein_make = 'Japan';
$tradein_model = 'Toyota';
$tradein_serial = '5415';
$tradein_colour = 'Red';

$tradein_unit = 'km';
$tradein_reading = 2154;

$tradein_lien_payable = 'asdfasf';

$tradein_address = 'Dhaka';
$tradein_lien_amount = 5458;

$retail_selling_price = 12457;
extract($_POST);

$pdf->SetFont('arial','B',10); 
$pdf->SetXY(168.9,16);
$pdf->Cell(12.5,4,date('d'),0,0,'C');
$pdf->Cell(13,4,date('m'),0,0,'C');
$pdf->Cell(12.5,4,date('Y'),0,0,'C');

$pdf->SetFont('arial','B',8); 

$pdf->SetXY(10,27.5);
$pdf->Cell(105.5,4,$buyer_name,0,0,'L');
$pdf->Cell(90,4,$buyer_address,0,1,'L');

$pdf->SetXY(10,33.5);
$pdf->Cell(95.5,4,$buyer_city,0,0,'L');
$pdf->Cell(64,4,$buyer_province,0,0,'L');
$pdf->Cell(35,4,$buyer_postCode,0,0,'L');

$pdf->SetXY(10,39.8);
$pdf->Cell(95.5,4,$buyer_email,0,0,'L');
$pdf->Cell(31.5,4,$buyer_homePhone,0,0,'L');
$pdf->Cell(32.5,4,$buyer_WorkPhone,0,0,'L');
$pdf->Cell(35,4,$buyer_cellPhone,0,0,'L');


$pdf->SetXY(77,45.8);
$pdf->Cell(34, 4,$vehicle_year,0,0,'L');
$pdf->Cell(25,4,$vehicle_make,0,0,'L');
$pdf->Cell(49.6,4,$vehicle_model,0,0,'L');
$pdf->Cell(32.5,4,$vehicle_colour,0,0,'L');

$pdf->SetXY(77,53);
$pdf->Cell(106.3, 4,$vehicle_sn,0,0,'L');
$pdf->Cell(25,4,$vehicle_stock_number,0,0,'L');

if($vehichle_unit == 'mi')
{
	$pdf->SetXY(99.5,57.7);
	$pdf->Image('tick.png',96,57.5,3);
	$pdf->Cell(106.3, 3,$vehichle_reading,0,0,'L');
}

if($vehichle_unit == 'km')
{
	$pdf->SetXY(99.5,60.7);
	$pdf->Image('tick.png',96,60.5,3);
	$pdf->Cell(106.3, 3,$vehichle_reading,0,0,'L');
}


$pdf->SetXY(77.5,90.5);
$pdf->Cell(21.5, 4,$tradein_year,0,0,'L');
$pdf->Cell(24.5,4,$tradein_make,0,0,'L');
$pdf->Cell(25,4,$tradein_model,0,0,'L');


$pdf->SetXY(77.5,96.8);
$pdf->Cell(21.5, 4,$tradein_serial,0,0,'L');

//$offered = '';
//$accepted = '';
//$refused = '';

if(!empty($offered))
{
	$pdf->Image('tick.png',138.5,70.5,3);
}

if(!empty($accepted))
{
	$pdf->Image('tick.png',160.9,70.5,3);
}

if(!empty($refused))
{
	$pdf->Image('tick.png',184.8,70.5,3);
}



if($tradein_unit == 'mi')
{
	$pdf->Image('tick.png',83,100.5,3);
}

if($tradein_unit == 'km')
{
	$pdf->Image('tick.png',83,103.5,3);
}


$pdf->SetXY(86.5,102.8);
$pdf->Cell(36, 4,$tradein_reading,0,0,'L');
$pdf->Cell(36.5, 4,$tradein_colour,0,0,'L');


$pdf->SetXY(95.5,130);
$pdf->Cell(36, 4,$tradein_lien_payable,0,0,'L');

$pdf->SetXY(77.5,140);
$pdf->Cell(57.5, 4,$tradein_address,0,0,'L');
$pdf->Cell(20, 4,$tradein_lien_amount,0,0,'L');

$pdf->SetXY(183.5,88.5);
$pdf->Cell(17.5, 4,$retail_selling_price,0,0,'R');

//$pdf->Cell(80,38.5,$buyer_address,0,1,'L');


/*$pdf->SetTitle('New Title');
$pdf->SetAuthor('New Author');
$pdf->SetCreator('New Creator');
$pdf->SetSubject('New SetSubject');
$pdf->SetKeywords('New SetKeywords');
*/

$pdf->Output('sample.pdf','I');
//ob_clean();
?>
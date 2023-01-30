<?php
//include connection file 
include('pricePDF.php');
include_once('fpdf/fpdf.php');
 
class PDF extends FPDF
{
// Page header
function Header()
{
    $this->SetFont('Arial','B',13);
    // Move to the right
    // Title
    $this->Cell(80,10,'Burger List',1,0,'C');
    // Line break
    $this->Ln(20);
}
 
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
 
$display_heading = array('id'=>'id', 'burgername'=> 'burgername', 'price'=> 'price');
 
$result = mysqli_query($conn, "SELECT id, burgername, price FROM Burgers") or die("database error:". mysqli_error($conn));
$header = mysqli_query($conn, "SHOW columns FROM Burgers WHERE field != 'created_on'");
 
$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',16);

foreach($result as $row) {
$pdf->SetFont('Arial','',10);
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(35,10,$column,1);
}
$pdf->Output();
?>

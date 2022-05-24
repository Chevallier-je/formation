<?php
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$string2print= $contact['name']." ".$contact['phone'];
$pdf->Cell(40,10, $string2print);
$pdf->Output();
?>
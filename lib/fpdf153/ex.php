<?php
require('japanese.php');

$pdf=new PDF_Japanese();
$pdf->AddSJISFont();
//$pdf->Open();
$pdf->AddPage();
$pdf->SetFont('SJIS','',18);
$pdf->WriteHTML(8,'�c�����q');
$pdf->Output();
?>

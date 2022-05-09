<?php

require 'vendor/autoload.php';

use Dompdf\Dompdf;

$file = __DIR__ . '/cv-masnukha.html';
$cv = file_get_contents($file);

$pdf = new Dompdf();
$pdf->setPaper('A4');
$pdf->loadHtml($cv);
$pdf->render();
$pdf->stream();

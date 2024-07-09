<?php

require 'vendor/autoload.php';

use Dompdf\Dompdf;

$name = 'cv-masnukha';
$file = __DIR__ . DIRECTORY_SEPARATOR . $name . '.html';
$cv = file_get_contents($file);

$cv = str_replace('<body id="browser">', '<body id="pdf">', $cv);

$pdf = new Dompdf();
$pdf->setPaper('A4');
$pdf->loadHtml($cv);
$pdf->render();
$pdf->stream($name);

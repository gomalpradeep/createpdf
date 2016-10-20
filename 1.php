<?php
require_once 'dompdf/autoload.inc.php';
// instantiate and use the dompdf class
use Dompdf\Dompdf;
$dompdf = new Dompdf();

$dompdf->loadHtml(file_get_contents("attestation-adhesion.html"));

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();

?>
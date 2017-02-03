<?php
 
// Include Composer autoloader if not already done.
include 'vendor/autoload.php';
 
// Parse pdf file and build necessary objects.
$parser = new \Smalot\PdfParser\Parser();
$pdf    = $parser->parseFile($_REQUEST["src-pdf"]);
 
$text = $pdf->getText();
echo $text;
 
?>

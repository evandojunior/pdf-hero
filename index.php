<?php
require_once 'vendor/autoload.php';

$files = [
 "files/mypdf.pdf",
 "files/Saque.pdf"
];

EvandoJunior\PDFHero::merge($files, "files/merged.pdf");

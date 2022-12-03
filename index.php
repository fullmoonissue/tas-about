<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\TasAboutEN;
use App\TasAboutFR;

$qpLang = isset($_GET['lang']) ? substr($_GET['lang'], 0, 2) : 'fr';
$pdf = match($qpLang) {
    'en' => new TasAboutEN(),
    default => new TasAboutFR(),
};

$pdf->pages();
$pdf->Output('', 'I');
<?php    
    //set it to writable location, a place for temp generated PNG files
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
    //html PNG location prefix
    $PNG_WEB_DIR = 'temp/';

    include "qrlib.php";    
    
    $filename = $PNG_TEMP_DIR.'test.png';
    $errorCorrectionLevel = 'Q';
    $matrixPointSize = 4;
    QRcode::png('PHP QR Code :)', $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
    echo '<img src="'.$PNG_WEB_DIR.basename($filename).'" /> ';
    
// benchmark
    //QRtools::timeBenchmark();    

    
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 *  =======================================
 *  Author     : Muhammad Surya Ikhsanudin
 *  License    : Protected
 *  Email      : mutofiyah@gmail.com
 *
 *  Dilarang merubah, mengganti dan mendistribusikan
 *  ulang tanpa sepengetahuan Author
 *  =======================================
 */
require_once APPPATH."/third_party/PHPExcel/PHPExcel.php";
/**
$rendererName = PHPExcel_Settings::PDF_RENDERER_DOMPDF;
$rendererLibrary = 'dompdf-master';
$rendererLibraryPath =  APPPATH."/third_party/" . $rendererLibrary;

if (!PHPExcel_Settings::setPdfRenderer(
    $rendererName,
    $rendererLibraryPath
)) {
die(
    'NOTICE: Please set the $rendererName and $rendererLibraryPath values' .
    EOL .
    'at the top of this script as appropriate for your directory structure'
);
}
*/
class Excel extends PHPExcel {
    public function __construct() {
        parent::__construct();
    }
}
?>
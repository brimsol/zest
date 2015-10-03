<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
require('fpdf/fpdf.php');

class Lpdf extends FPDF
{
    // Extend FPDF using this class
    // More at fpdf.org -> Tutorials
    function __construct($orientation = 'L', $unit = 'mm', $size = 'A4')
    {
        // Call parent constructor
        parent::__construct($orientation, $unit, $size);
    }

    function Header()
    {
        // Logo

        $site_url = site_url();

        $this->Image($site_url . 'assets/images/pdf_logo_zest.jpg', 5, 6, 80);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 16);
        // Move to the right
        $this->Cell(150);
        // Title
        $this->Cell(110, 10, $this->title, 0, 0, 'R');    // Line break
        $this->Ln(20);
        $this->Line(5, 25, 290, 25);

    if($this->pdftype == 'schools'){

            $this->SetFont('Arial', '', 10);
            $header = array('Sl.No.', 'NAME', 'PRINCIPAL', 'PLACE', 'CONTACT #', '# CAN');

            $w = array(15, 90, 60, 60,40,15);
            // Header
            for ($i = 0; $i < count($header); $i++)
                $this->Cell($w[$i], 7, $header[$i], 1, 0, 'C');
            $this->Ln();


        }


    }

// Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-20);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
        $this->Ln(1);

        $gen = 'Generated on: ' . date('d-m-Y');

        $this->Cell(0, 14, $gen, 0, 0, 'C');
    }

}

?>
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 *  =======================================
 *  Author     : Ajeesh A
 *  License    : Protected
 *  Email      : ajeesh.a@verbat.com
 *
 *  =======================================
 */

require_once(APPPATH . '/libraries/FPDF.php');

class mc_table extends FPDF {

    var $widths;
    var $aligns;
    var $CurOrientation = "P";
    var $font = "Arial";
    var $leftMargin = 10;
    var $topMargin = 5;

    function SetWidths($w) {
        //Set the array of column widths
        $this->widths = $w;
    }

    function SetAligns($a) {
        //Set the array of column alignments
        $this->aligns = $a;
    }

    function Row($data) {
        //Calculate the height of the row
        $nb = 0;
        for ($i = 0; $i < count($data); $i++)
            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
        $h = 10 * $nb;
        //Issue a page break first if needed
        $this->CheckPageBreak($h);
        //Draw the cells of the row
        for ($i = 0; $i < count($data); $i++) {
            $w = $this->widths[$i];
            $a = isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
            //Save the current position
            $x = $this->GetX();
            $y = $this->GetY();
            //Draw the border
            $this->SetLineWidth('0.1');
            $this->Rect($x + 5, $y - 3, $w, $h, 'D');
            //Print the text
            $this->SetX($x + 5);
            $this->MultiCell($w, 5, $data[$i], 0, $a);
            //Put the position to the right of the cell
            $this->SetXY($x + $w, $y);
        }
        //Go to the next line
        $this->Ln($h);
    }

    function CheckPageBreak($h) {
        //If the height h would cause an overflow, add a new page immediately
        if ($this->GetY() + $h > $this->PageBreakTrigger)
            $this->AddPage($this->CurOrientation);
    }

    function NbLines($w, $txt) {
        //Computes the number of lines a MultiCell of width w will take
        $cw = &$this->CurrentFont['cw'];
        if ($w == 0)
            $w = $this->w - $this->rMargin - $this->x;
        $wmax = ($w - 2 * $this->cMargin) * 1000 / $this->FontSize;
        $s = str_replace("\r", '', $txt);
        $nb = strlen($s);
        if ($nb > 0 and $s[$nb - 1] == "\n")
            $nb--;
        $sep = -1;
        $i = 0;
        $j = 0;
        $l = 0;
        $nl = 1;
        while ($i < $nb) {
            $c = $s[$i];
            if ($c == "\n") {
                $i++;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
                continue;
            }
            if ($c == ' ')
                $sep = $i;
            $l+=$cw[$c];
            if ($l > $wmax) {
                if ($sep == -1) {
                    if ($i == $j)
                        $i++;
                } else
                    $i = $sep + 1;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
            } else
                $i++;
        }
        return $nl;
    }

    function Header() {
        
    }

    function Header_print() {

        $this->Ln(25);
    }

    // Header for INVOICE
    function Header_invoice($arrHeaders) {
        // Select Arial bold 15
        //Heading
        // Line break
        $this->SetFont($this->font, 'IB', 30);
        $this->Text($this->leftMargin, 20, $arrHeaders['heading']);
        
        //LOGO
        $this->Image($arrHeaders['logo'] , $this->leftMargin + 150, 10, 25, 'JPG');


        //Sub date , inv id

        $this->Ln(25);
        $y = $this->GetY();

        $this->SetFont($this->font, '', 10);
        $this->Text($this->leftMargin, $y, "Date :");
        $this->Text($this->leftMargin + 12, $y, $arrHeaders['date']);

        $this->Ln(5);
        $y = $this->GetY();
        $this->Text($this->leftMargin, $y, 'Invoice : # ');
        $this->Text($this->leftMargin + 20, $y, $arrHeaders['invoiceId']);

        /*
        $this->Ln(2);
        if($arrHeaders['status'] == 'PAID'){
            $this->SetFillColor(25, 129, 9);  
        }else{
            $this->SetFillColor(161, 19, 19);
        }
        */
        
        $this->Cell(125);
        $this->SetFillColor(256);
        $this->SetTextColor(25, 129, 9);
        $this->Cell(65, 7, 'Invoice / Order Status: '.$arrHeaders['status'], 0, 1, 'C', 1);

    
        //EVENT HEADING
        $this->Ln(5);
        $this->SetFillColor(25, 129, 9);
        $this->SetFont($this->font, 'B', 12);
        $this->SetTextColor(255);
        $this->Cell(0, 10, $arrHeaders['event_name'], 0, 1, 'C', 1);
        
        //FORM NAME
        $this->Ln(5);
        $y = $this->GetY();
        $this->SetTextColor(0);
        $this->Text($this->leftMargin, $y, $arrHeaders['form_name']);

        $this->Ln();
        $this->SetFillColor(0, 92, 128);
        $this->Cell(0, 0.1, '', 0, 1, 'C', 1);
        
    }

    // Body for INVOICE
    function Body_invoice($body) {
        $this->Ln(5);
        $y = $this->GetY();
        $this->SetTextColor(0);
        $cnt = 5;
        $keyBto = 0;

        foreach ($body['billto'] as $keyBT => $valBT) {
            if (isset($body['key'][$keyBT])) {
                
                $this->SetDrawColor(192, 192, 192);
                $this->SetFont($this->font, 'B', 8);
                $this->SetFillColor(238, 238, 238);
                $this->Cell(30, 7, $body['key'][$keyBT] . ': ', 1, 0, 'L', 1);
                //$this->Text($this->leftMargin, $y + $cnt, $body['key'][$keyBT] . ': ');
                $this->SetFont($this->font, '', 8);
                $this->SetFillColor(256);
                $this->Cell(80, 7, $valBT, 1, 1, 'L', 1);
                //$this->Text($this->leftMargin + 30, $y + $cnt, $valBT);
                $keyBto++;
                $cnt +=5;
            }
           
            
        }

        // NOTES
        if($body['billto'] ['show_notes'] == 1){
            $this->Ln(10);
            //$y = $this->GetY();
            $this->SetFont($this->font, 'B', 8);
            $this->Text(130, $y + 2, "Notes:");
            $this->SetY(90);
            $this->SetX(130);
            $this->SetFillColor(199, 220, 225);
            $this->SetFont($this->font, '', 8);
            $this->MultiCell(70, 5, $body['billto'] ['note'], 0, 'L', true);
            $this->Ln(12);
        }else{
            $this->SetY(90);
            $this->Ln(15);   
        }
    }

    function Footer_invoice($footer) {

        // Position at 1.5 cm from bottom
        // Arial italic 8

        $this->Ln(5);
        $this->SetFillColor(25, 129, 9);  
        $this->SetFont($this->font, 'B', 10);
        $this->SetTextColor(255);
        $this->Cell(0, 8, "THIS INVOICE IS NOW DUE & PAYABLE", 0, 1, 'C', 1);


        $this->Ln(3);
        $y = $this->GetY();
        $this->SetFont($this->font, '', 8);
        $this->SetTextColor(0);
        $this->MultiCell(190, 5, $footer['text'], 0, 1, 'L');
        
        $this->Ln(5);
        $y = $this->GetY();
        $this->SetFont($this->font, '', 8);
        $this->SetTextColor(0);
        $this->Cell(190, 2, $footer['site'], 0, 0, 'C');

        $this->Ln(3);
        $y = $this->GetY();
        $this->SetFont($this->font, '', 6);
        $this->Cell(190, 2, $footer['copy'], 0, 0, 'C');
       
    }

    function ChapterTitle($num, $label) {
        // Arial 12
        $this->SetFont('Arial', '', 12);
        // Background color
        $this->SetFillColor(200, 220, 255);
        // Title
        $this->Cell(0, 6, "Chapter $num : $label", 0, 1, 'L', true);
        // Line break
        $this->Ln(4);
    }

    function ChapterBody($file) {
        // Read text file
        $txt = file_get_contents($file);
        // Times 12
        $this->SetFont('Times', '', 12);
        // Output justified text
        $this->MultiCell(0, 5, $txt);
        // Line break
        $this->Ln();
        // Mention in italics
        $this->SetFont('', 'I');
        $this->Cell(0, 5, '(end of excerpt)');
    }

    function PrintChapter($num, $title, $file) {
        $this->AddPage();
        $this->ChapterTitle($num, $title);
        $this->ChapterBody($file);
    }

    function FancyTable($header, $data, $width, $total_data) {
        // Colors, line width and bold font
        $this->SetFillColor(0, 0, 50);
        $this->SetTextColor(255);
        $this->SetDrawColor(0, 0, 50);
        $this->SetLineWidth(.3);
        $this->SetFont('Arial', 'B', 8);
        $this->Ln(30);

        //Draw the border
        //Print the text
        $this->SetX($this->leftMargin);
        $x = $this->GetX();
        $y = $this->GetY();
        // Header
        $w = $width;
        $h = 5;
        for ($i = 0; $i < count($header); $i++)
            $this->Cell($w[$i], $h, $header[$i], 1, 0, 'C', true);
        $this->Ln();
        // Color and font restoration
        $this->SetFillColor(224, 235, 255);
        $this->SetTextColor(0);
        $this->SetFont('Arial', '', 8);
        // Data
        $fill = false;

        foreach ($data as $row) {
            $this->Cell($w[0], $h, $row[0], 'LR', 0, 'L', $fill);
            $this->Cell($w[1], $h, $row[1], 'LR', 0, 'C', $fill);
            $this->Cell($w[2], $h, $row[2], 'LR', 0, 'L', $fill);
            $this->Cell($w[3], $h, $row[3], 'LR', 0, 'L', $fill);
            $this->Cell($w[4], $h, $row[4], 'LR', 0, 'R', $fill);
            $this->Ln();
            $fill = !$fill;
        }

        // Closing line
        $this->Cell(array_sum($w), 0, '', 'T');

        $this->Ln();
        $y = $this->GetY();
        $sumWidth = $w[0] + $w[1] + $w[2] + $w[3];

        foreach ($total_data as $keyTot => $valTot) {
            $this->Cell($sumWidth, $h, $keyTot, 'LR', 0, 'R', $fill);
            $this->Cell($w[4], $h, $valTot, 'LR', 0, 'R', $fill);
            $this->Ln();
            $fill = !$fill;
        }
        $this->Cell(array_sum($w), 0, '', 'T');
    }

    function FancyTableNoBg($header, $data, $width) {
        // Colors, line width and bold font
        $this->SetFillColor(0, 92, 128);
        $this->SetTextColor(255);
        $this->SetDrawColor(0, 92, 128);
        $this->SetLineWidth(.1);
        $this->SetFont('Arial', 'B', 10);

        $x = $this->GetX() - 5;
        $y = $this->GetY();
        //Draw the border
        //Print the text
        $this->SetX($x + 5);
        // Header
        $w = $width;
        $h = 7;
        for ($i = 0; $i < count($header); $i++) {
            if (isset($w[$i])) {
                $this->Cell($w[$i], $h, $header[$i], 1, 0, 'L', true);
            }
        }
        $this->Ln();
        // Color and font restoration
        $this->SetFillColor(224, 235, 255);
        $this->SetTextColor(0);
        $this->SetFont('Arial', '', 10);
        // Data
        $fill = false;

        foreach ($data as $row) {
            $this->SetX($x + 5);
            $this->Cell($w[0], $h, $row[0], 'LR', 0, 'L', $fill);
            $this->Cell($w[1], $h, $row[1], 'LR', 0, 'L', $fill);
            $this->Cell($w[2], $h, $row[2], 'LR', 0, 'L', $fill);
            if (isset($w[3])) {
                $this->Cell($w[3], $h, $row[3], 'LR', 0, 'L', $fill);
            }
            if (isset($w[4])) {
                $this->Cell($w[4], $h, $row[4], 'LR', 0, 'L', $fill);
            }
            if (isset($w[5])) {
                $this->Cell($w[5], $h, $row[5], 'LR', 0, 'L', $fill);
            }
            $this->Ln();
            //$fill = !$fill;
            $this->SetFillColor(0, 92, 128);
            //$this->Cell($w[3], $h, $row[3], 'LR', 0, 'L', $fill);
            //$this->SetFillColor(0, 0, 50);
            $this->SetX($x + 5);
            if (isset($w[3])) {
                $wc = $w[0] + $w[1] + $w[2] + $w[3];
            } else {
                $wc = $w[0] + $w[1] + $w[2];
            }
            if (isset($w[4])) {
                $wc = $w[0] + $w[1] + $w[2] + $w[3] + $w[4];
            }
            if (isset($w[5])) {
                $wc = $w[0] + $w[1] + $w[2] + $w[3] + $w[4] + $w[5];
            }

            $this->Cell($wc, 0.1, '', 'LR', 1, 'L', 1);
        }
        // Closing line
        $this->SetX($x + 5);
        $this->Cell(array_sum($w), 0, '', 'T');
    }

    function WordWrap_(&$text, $maxwidth) {
        $text = trim($text);
        if ($text === '')
            return 0;
        $space = $this->GetStringWidth(' ');
        $lines = explode("\n", $text);
        $text = '';
        $count = 0;

        foreach ($lines as $line) {
            $words = preg_split('/ +/', $line);
            $width = 0;

            foreach ($words as $word) {
                $wordwidth = $this->GetStringWidth($word);
                if ($wordwidth > $maxwidth) {
                    // Word is too long, we cut it
                    for ($i = 0; $i < strlen($word); $i++) {
                        $wordwidth = $this->GetStringWidth(substr($word, $i, 1));
                        if ($width + $wordwidth <= $maxwidth) {
                            $width += $wordwidth;
                            $text .= substr($word, $i, 1);
                        } else {
                            $width = $wordwidth;
                            $text = rtrim($text) . "\n" . substr($word, $i, 1);
                            $count++;
                        }
                    }
                } elseif ($width + $wordwidth <= $maxwidth) {
                    $width += $wordwidth + $space;
                    $text .= $word . ' ';
                } else {
                    $width = $wordwidth + $space;
                    $text = rtrim($text) . "\n" . $word . ' ';
                    $count++;
                }
            }
            $text = rtrim($text) . "\n";
            $count++;
        }
        $text = rtrim($text);
        return $count;
    }

}

?>

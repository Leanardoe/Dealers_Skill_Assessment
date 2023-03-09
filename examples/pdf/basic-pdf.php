<?php
/*
 * This file shows the basics of the FPDF Class
 */

//Require the FPDF Library
require_once __DIR__ . '/../../libraries/fpdf/fpdf.php';

// Initialize the class in 'P'ortrate Mode, use 'in'ches, the page size is 8.5x11 inches
$pdf = new FPDF('P', 'in', array(8.5,11));

//Set the Font of the PDF
//Arial font, Regular type (not bold or Italics), 12 point font
$pdf->SetFont('Arial', '', 12);

//Always add a page to the Document
//This will add a new page in the default orientation (as specified in the constructor)
$pdf->AddPage();

//Now add your Content
//This will add a line ("Cell") to the PDF that is 8 inches long, 0.2 inches high with the text "This is a Basic PDF"
//do not add a border, do not do a line return, and 'C'enter the text in the middle of the Cell.
$pdf->Cell(8, 0.2, "This is a Basic PDF", 0, 0, 'C');

//Add a Line Return
$pdf->Ln();

//You can also do a line return inside the Cell
$pdf->Cell(8, 0.2, "This cell will do a line return.", 0, 0.2);
$pdf->Cell(8, 0.2, "This cell is on the next line since the one above had a 0.2 inch line return");

//Line return 1/2 inch
$pdf->Ln(0.5);

$pdf->Cell(2, 0.2, "This is a 2 inch cell");
$pdf->Cell(3, 0.2, "This is a 3 inch cell with a border", 1);

$pdf->Ln();

//Be careful because your text will keep going if the width is not set correctly
$pdf->Cell(1, 0.2, "This cell is 1 inch but my text doesn't fit so it keeps going....", 1);

$pdf->Ln(0.5);

//MultiLine Cell
$pdf->MultiCell(1, 0.2, "This is a Multi-Cell Method. It wraps the line the same width as specified. In this case that is 1 inch. This text will not overflow. It will keep going and going.");
$pdf->Cell(7, 0.2, "The Multi-Cell will do a return for each line, but as you can see the spacing is weird.", 0, 0.2);

//Make the Font Bold and 20 point
$pdf->SetFont('Arial', 'B', 20);
$pdf->Cell(8, 0.2, "The font has been changed to Bold and set to 20 point", 0, 0.2);
$pdf->Cell(8, 0.2, "The font will stay until it is changed.", 0);

//Change the Font back to normal
$pdf->SetFont('Arial', '', 12);

$pdf->Ln(0.5);

//Lets add a picture
$pdf->Cell(8, 0.2, "Lets add a Picture to the PDF.", 0, 0.5);
$pdf->Image('images/dwc_web_header_resized.png', $pdf->GetX(), $pdf->GetY(), 7, 1, "PNG");
$pdf->Ln(1);


$pdf->Cell(8, 0.2, "Next is to Save or Display the File. Look at the Code to see how this is done.");

//Now how to display the PDF
// "I" is for in browser or inline
// "F" is to a file, it looks like $pdf->Output("F", "location/to/save/file/name.pdf");


$pdf->Output("I");
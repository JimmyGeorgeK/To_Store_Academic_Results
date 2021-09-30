<?php
session_start();
 require_once 'FPDF/fpdf.php';

 class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('logo.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(100,10,'SEMESTER 5 MARKS DETAILS',1,0,'C');
    // Line break
    $this->Ln(30);
}
}



 $db = mysqli_connect('localhost','root','','storemyresults') or die('Could not connect to db');

 $e=$_SESSION['email'];
 
 $query1 = "SELECT * FROM sem5 WHERE email='".$e."' AND sem='5' ";

 $data1 = mysqli_query($db, $query1);

    if(isset($_POST['btn_pdf'])){

        $pdf = new PDF();
        $pdf->SetFont('Arial','B',14);
        $pdf->AddPage();
        $pdf->Cell(65,10,'SUBJECT ID',1,0,'C');
        $pdf->Cell(80,10,'SUBJECT NAME',1,0,'C');
        $pdf->Cell(40,10,'MARKS',1,1,'C');
    
        $pdf->SetFont('Arial','',10);
        while($row = mysqli_fetch_assoc($data1))
        {
           
            $pdf->Cell(65,10,$row['sub_id'],1,0,'C');
            $pdf->Cell(80,10,$row['subject'],1,0,'C');
            $pdf->Cell(40,10,$row['marks'],1,1,'C');

        }        
    }

   

    $pdf->Output();


?>

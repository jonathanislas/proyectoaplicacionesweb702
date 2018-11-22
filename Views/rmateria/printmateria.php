<?php
ob_start();
require_once("Public/fpdf/fpdf.php");
class PDF extends FPDF{
  function Header(){
    $this->SetFont('Arial','',12);
    $this->Cell(80);
    $this->Cell(30,10,utf8_decode('"2018. Año del Bicentenario"'));
    $this->ln(20);
  }
  function Footer(){
    $this->SetY(-15);
    $this->SetFont('Arial','I',8);
  }
}
$pdf=new PDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",12);
$inicioX=40;
$inicioY=25;
$pdf->SetY($inicioY);
$pdf->Cell(15,10,"Materia:");
$pdf->SetX($pdf->GetX()+5);
$pdf->SetFont("Arial","",12);
// $pdf->Cell(30,10,$datos[0]['des_materia']);
while($fila= mysqli_fetch_assoc($datos[0])){
    $pdf->Cell(30,10,utf8_decode($fila['desc_materia']));
}
// $pdf->Cell(30,10,$datos[0]['nombre']);
$pdf->SetY($pdf->GetY()+7);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(15,10,"Grupo:");
$pdf->SetX($pdf->GetX()+5);
$pdf->SetFont("Arial","",12);
// $pdf->Cell(30,10,$datos[0]['desc_grupo']);
while($fila= mysqli_fetch_assoc($datos[1])){
    $pdf->Cell(30,10,$fila['desc_grupo']);
}
$pdf->SetY($pdf->GetY()+7);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(15,10,"Docente:");
$pdf->SetX($pdf->GetX()+5);
$pdf->SetFont("Arial","",12);
// $pdf->Cell(15,10,utf8_decode($datos[0]['nombre']." ".$datos[0]['ap_p']." ".$datos[0]['ap_m']));
while($fila= mysqli_fetch_assoc($datos[2])){
    $pdf->Cell(30,10,utf8_decode($fila['nombre']." ".$fila['ap_p']." ".$fila['ap_m']));
}
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont("Arial","",10);
$pdf->Cell(10,7,"No.",1,0);
$pdf->Cell(70,7,"Alumno",1,0,'C');
while($fila= mysqli_fetch_assoc($datos[3])){
    $largo=110/($fila['no_unidades']+1);
    for($i=0;$i<$fila['no_unidades'];$i++){
        $pdf->Cell($largo,7,"Unidad".($i+1),1,0,'C');
    }
}
$pdf->Ln();
$d=0;
while($fila= mysqli_fetch_assoc($datos[5])){
    $pdf->cell(15,10,($d+1));       
    
    $pdf->Cell(70,10,$fila['ap_p']." ".$fila['ap_m']." ".$fila['nombre']);//."   ".$fila['calificacion']);
    $pdf->Cell(10,10,$fila['calificacion']);
    $pdf->Ln();
    $d++;
}



$pdf->Output("D","reporte.pdf");
ob_end_flush();
?>
<!-- <?php
// ob_start();
// require_once("Public/fpdf/fpdf.php");

// $pdf=new FPDF();
// class PDF extends FPDF
// {
// function Header()
// {
    // global $title;

    // Arial bold 15
    // $this->SetFont('Arial','B',15);
    // Calculamos ancho y posición del título.
    // $w = $this->GetStringWidth($title)+6;
    // $this->SetX((210-$w)/2);
    // Colores de los bordes, fondo y texto
    // $this->SetDrawColor(0,80,180);
    // $this->SetFillColor(230,230,0);
    // $this->SetTextColor(220,50,50);
    // Ancho del borde (1 mm)
    // $this->SetLineWidth(1);
    // Título
    // $this->Cell($w,9,$title,1,1,'C',true);
    // Salto de línea
    // $this->Ln(10);
// }

// function Footer()
// {
    // Posición a 1,5 cm del final
    // $this->SetY(-15);
    // Arial itálica 8
    // $this->SetFont('Arial','I',8);
    // Color del texto en gris
    // $this->SetTextColor(128);
    // Número de página
    // $this->Cell(0,10,'Página '.$this->PageNo(),0,0,'C');


// }
// }
// Creación del objeto de la clase heredada
// $pdf = new PDF();
// $pdf->AddPage();
// $pdf->SetFont('Arial','B',16);
// $pdf->Cell(190,10,'Boleta',0,0,'C');
// $pdf->Ln();
// $pdf->Ln();
// $pdf->SetX(15);
// $pdf->SetFont('Arial','B',12);
// $pdf->SetTextColor(255,255,255);
// $pdf->SetFillColor(26,122,113);
// $pdf->Cell(30, 10,'Alumno',0,0,'C',1);
// $pdf->Cell(30, 10, 'Unidad I', 0, 0, 'C', 1);
// $pdf->Cell(30, 10, 'Unidad II', 0, 0, 'C', 1);
// $pdf->Cell(30, 10, 'Unidad III', 0, 0, 'C', 1);
// $pdf->Cell(30, 10, 'Unidad IV', 0, 0, 'C', 1);
// $pdf->Ln();
// $pdf->SetTextColor(0,0,0);   
// $pdf->SetFillColor(255,255,255);
// $pdf->SetFont('Arial','',10);
// while($fila= mysqli_fetch_assoc($datos)){
    // $pdf->Cell(30,10,$fila['ap_p']." ".$fila['ap_m']." ".$fila['nombre']);
    // $pdf->Cell(80,20,$fila['calificacion']);
    // $pdf->Ln();
// }
// $pdf->Output("F","reporte.pdf");
// ob_end_flush();
?> -->
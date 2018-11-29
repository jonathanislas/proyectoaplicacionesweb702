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
    $this->SetFont('Arial','',8);
    $this->Cell(150,10,utf8_decode("Reporte de Usuarios del TESVB"));
    $this->Cell(25,10,utf8_decode('29/11/2018'));
  }
}
$pdf=new PDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",12);
$inicioX=40;
$inicioY=25;
$pdf->SetY($inicioY);
$pdf->Cell(130,10,"Reporte de Usuarios");
$pdf->SetFont("Arial","",10);
$pdf->Cell(30,7,"Fecha:",1,0);
$pdf->Cell(25,7,"29/11/2018 ",1,0);
$pdf->SetY($pdf->GetY()+7);
$pdf->SetX($pdf->GetX()+130);
$pdf->SetFont("Arial","",10);
$pdf->Cell(30,7,"Responsable:",1,0);
$pdf->Cell(25,7,"Ricardo",1,0);
$pdf->SetY($pdf->GetY()+20);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(50,10,"Jefes de Division");
$pdf->SetFont("Arial","",12);
$pdf->Ln();
$pdf->SetFont("Arial","",10);
$pdf->Cell(10,7,"No.",1,0);
$pdf->Cell(180,7,"Nombre",1,0,'C');
$pdf->Ln();
$d=0;
while($fila= mysqli_fetch_assoc($datos[0])){
    $pdf->cell(10,7,($d+1),1,0 );       
    $pdf->Cell(180,7,utf8_decode($fila['ap_p']." ".$fila['ap_m']." ".$fila['nombre']),1,0);
    $pdf->Ln();
    $d++;
}

$pdf->SetY($pdf->GetY()+10);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(50,10,"Docentes");
$pdf->SetFont("Arial","",12);
$pdf->Ln();
$pdf->SetFont("Arial","",10);
$pdf->Cell(10,7,"No.",1,0);
$pdf->Cell(180,7,"Nombre",1,0,'C');
$pdf->Ln();
$d=0;
while($fila= mysqli_fetch_assoc($datos[1])){
    $pdf->cell(10,7,($d+1),1,0);       
    $pdf->Cell(180,7,utf8_decode($fila['ap_p']." ".$fila['ap_m']." ".$fila['nombre']),1,0);
    $pdf->Ln();
    $d++;
}

$pdf->SetY($pdf->GetY()+10);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(50,10,"Alumnos");
$pdf->SetFont("Arial","",12);
$pdf->Ln();
$pdf->SetFont("Arial","",10);
$pdf->Cell(10,7,"No.",1,0);
$pdf->Cell(180,7,"Nombre",1,0,'C');
$pdf->Ln();
$d=0;
while($fila= mysqli_fetch_assoc($datos[2])){
    $pdf->cell(10,7,($d+1),1,0);       
    $pdf->Cell(180,7,utf8_decode($fila['ap_p']." ".$fila['ap_m']." ".$fila['nombre']),1,0);
    $pdf->Ln();
    $d++;
}


$pdf->Output("F","Reporte General.pdf");
ob_end_flush();



?>

<script type="text/javascript">
 

  swal({
          title: " ",
          text: "PDF creado correctamente",
          timer: 2000
        });
</script>
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
// while($fila= mysqli_fetch_assoc($datos[0])){
//     $pdf->Cell(30,10,utf8_decode($fila['desc_materia']));
// }
// $pdf->Cell(30,10,$datos[0]['nombre']);
$pdf->SetY($pdf->GetY()+7);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(15,10,"Grupo:");
$pdf->SetX($pdf->GetX()+5);
$pdf->SetFont("Arial","",12);
// $pdf->Cell(30,10,$datos[0]['desc_grupo']);
// while($fila= mysqli_fetch_assoc($datos[1])){
//     $pdf->Cell(30,10,$fila['desc_grupo']);
// }
$pdf->SetY($pdf->GetY()+7);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(15,10,"Docente:");
$pdf->SetX($pdf->GetX()+5);
$pdf->SetFont("Arial","",12);
// $pdf->Cell(15,10,utf8_decode($datos[0]['nombre']." ".$datos[0]['ap_p']." ".$datos[0]['ap_m']));
// while($fila= mysqli_fetch_assoc($datos[2])){
//     $pdf->Cell(30,10,utf8_decode($fila['nombre']." ".$fila['ap_p']." ".$fila['ap_m']));
// }
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont("Arial","",10);
$pdf->Cell(10,7,"No.",1,0);
$pdf->Cell(70,7,"Alumno",1,0,'C');
// while($fila= mysqli_fetch_assoc($datos[3])){
//     $largo=110/($fila['no_unidades']+1);
//     for($i=0;$i<$fila['no_unidades'];$i++){
//         $pdf->Cell($largo,7,"Unidad".($i+1),1,0,'C');
//     }
// }
$pdf->Ln();
$d=0;
// while($fila= mysqli_fetch_assoc($datos[5])){
//     $pdf->cell(15,10,($d+1));       
    
//     $pdf->Cell(70,10,$fila['ap_p']." ".$fila['ap_m']." ".$fila['nombre']);//."   ".$fila['calificacion']);
//     $pdf->Cell(10,10,$fila['calificacion']);
//     $pdf->Ln();
//     $d++;
// }



$pdf->Output("F","Reporte de Grupo.pdf");
ob_end_flush();



?>

<script type="text/javascript">
 

  swal({
          title: " ",
          text: "PDF creado correctamente",
          timer: 2000
        });
</script>
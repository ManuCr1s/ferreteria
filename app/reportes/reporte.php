<?php
require "../scripts/conexion.php";

require "../report/fpdf.php";
$query=mysqli_query($conexion,"SELECT id_venta,costo,precio,utilidad FROM venta");
$query2=mysqli_query($conexion,"SELECT fecha FROM venta");
$fecha=mysqli_fetch_array($query2);
$pdf = new FPDF("p","mm","A4");
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(185, 10, 'REPORTE DE VENTAS DIARIAS', 0,0,'C');
$pdf->Ln(10);
$pdf->Cell(31, 10,$fecha['fecha'], 0,0,'C');
$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(31, 5, 'BOLETA', 1,0,'C');
$pdf->Cell(31, 5, 'MONTO', 1,0,'C');
$pdf->Cell(31, 5, 'PRECIO', 1,0,'C');
$pdf->Cell(31, 5, 'UTILIDAD', 1,0,'C');
$pdf->Ln(10);
while($fila=mysqli_fetch_array($query))
	{
		$pdf->SetFont('Arial', '', 8);
		$pdf->Cell(31, 5, $fila["id_venta"], 1,0,'C');
		$pdf->Cell(31, 5, $fila["costo"], 1,0,'C');
		$pdf->Cell(31, 5, $fila["precio"], 1,0,'C');
        $pdf->Cell(31, 5, $fila["utilidad"], 1,0,'C');
        $pdf->Ln(5);
    }
    $pdf->ln(10);
    $pdf->Cell(31, 5, 'TOTAL', 1,0,'C');
    $pdf->Cell(31, 5, 'MONTO', 1,0,'C');
    $pdf->Cell(31, 5, 'PRECIO', 1,0,'C');
    $pdf->Cell(31, 5, 'UTILIDAD', 1,0,'C'); 
    $pdf->ln(5); 

$pdf->Output("reporte","I");
<?php 
	require "conexion.php";

	require "../report/fpdf.php";
	$query=mysqli_query($conexion,"SELECT * FROM producto");
	$pdf = new FPDF("p","mm","A4");
	$pdf->AddPage();
	$pdf->SetFont('Arial', 'B', 16);
		$pdf->Cell(185, 10, 'REPORTE DE PRODUCTOS', 0,0,'C');
		$pdf->Ln(30);
	$pdf->SetFont('Arial', 'B', 9);
		$pdf->Cell(5, 10, 'N', 1,0,'C');
		$pdf->Cell(50, 10, 'Producto', 1,0,'C');
		$pdf->Cell(13, 10, 'Tamano', 1,0,'C');
		$pdf->Cell(12, 10, 'Fardos', 1,0,'C');
		$pdf->Cell(55, 10, 'Descripcion', 1,0,'C');
		$pdf->Cell(20, 10, 'Fecha', 1,0,'C');
		$pdf->Cell(10, 10, 'Costo', 1,0,'C');
		$pdf->Cell(10, 10, 'Precio', 1,0,'C');
		$pdf->Ln(10);
	
	while($fila=mysqli_fetch_array($query))
	{
		$pdf->SetFont('Arial', '', 9);
		$pdf->Cell(5, 8, $fila["id_producto"], 1,0,'C');
		$pdf->Cell(50, 8, $fila["marca"], 1,0,'C');
		$pdf->Cell(13, 8, $fila["tamano"], 1,0,'C');
		$pdf->Cell(12, 8, $fila["fardos"], 1,0,'C');
		$pdf->Cell(55, 8, $fila["descripcion"], 1,0,'C');
		$pdf->Cell(20, 8, $fila["fecha_de_ingreso"], 1,0,'C');
		$pdf->Cell(10, 8, $fila["costo"], 1,0,'C');
		$pdf->Cell(10, 8, $fila["precio"], 1,0,'C');
		$pdf->Ln(8);
	}
	$pdf->Output("reporte","I");
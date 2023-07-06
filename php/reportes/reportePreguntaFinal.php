<?php

			
		include ('plantillaPreguntaFinal.php');
		require '../conexion.php';



		$query = "SELECT finalistas.nombre, finalistas.Carrera, reporte_final.total 
		FROM reporte_final INNER JOIN finalistas ON finalistas.id_finalistas = reporte_final.id_finalistas 
		ORDER BY (promedio_f) DESC ";

		$resultado = $conn->query($query);


		$pdf  = new PDF();
		
		$pdf-> AddPage();
		$pdf->SetFillColor(255,255,255);;
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(10,9,'#',1,0,'C',1);
		$pdf->Cell(60,9,'NOMBRE',1,0,'C',1);
		$pdf->Cell(60,9,'CARRERA',1,0,'C',1);
		$pdf->Cell(60,9,'PROMEDIO',1,1,'C',1);

		$pdf->SetFont('Arial','',17);
		$cont= 1;

		while($row = $resultado->fetch_assoc())
		{   
			if($cont == 1){
			$pdf->SetFillColor(255, 255, 0);
			$pdf->SetFont('Arial','B',25);
			$pdf->Cell(10,11,$cont,1,0,'C',1);
			$pdf->Cell(60,11,$row['nombre'],1,0,'C',1);
			$pdf->Cell(60,11,$row['Carrera'],1,0,'C',1);
			$pdf->Cell(60,11,$row['total'],1,1,'C',1);
			}else{
            $pdf->SetFont('Arial','B',18);
			$pdf->SetFillColor(255,255,255);
			$pdf->Cell(10,9,$cont,1,0,'C',1);
			$pdf->Cell(60,9,$row['nombre'],1,0,'C',1);
			$pdf->Cell(60,9,$row['Carrera'],1,0,'C',1);
			$pdf->Cell(60,9,$row['total'],1,1,'C',1);
			}
			$cont++;
		}

		$pdf->Cell(190,9,'REPORTE FINAL',1,1,'C',1);
		

		$pdf->Output();


?>
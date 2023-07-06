  <?php

			
		include ('plantillaFinalistas.php');
		require '../conexion.php';



		$query = "SELECT candidatas.nombre, candidatas.Carrera, reporte.promedio_F 
		FROM reporte INNER JOIN candidatas 
		ON candidatas.id_candidatas=reporte.id_candidatas 
		ORDER BY (promedio_F) DESC LIMIT 6";

		$resultado = $conn->query($query);


		$pdf  = new PDF();
		
		$pdf-> AddPage();

		$pdf->SetFillColor(255,255,255);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(10,9,'#',1,0,'C',1);
		$pdf->Cell(60,9,'NOMBRE',1,0,'C',1);
		$pdf->Cell(60,9,'CARRERA',1,0,'C',1);
		$pdf->Cell(60,9,'PROMEDIO TOTAL',1,1,'C',1);

		$pdf->SetFont('Arial','B',18);

		$cont=1;

		while($row = $resultado->fetch_assoc())
		{   
			
			
			
			$pdf->Cell(10,9,$cont,1,0,'C',1);
			$pdf->Cell(60,9,$row['nombre'],1,0,'C',1);
			$pdf->Cell(60,9,$row['Carrera'],1,0,'C',1);
			$pdf->Cell(60,9,$row['promedio_F'],1,1,'C',1);
			
			$cont++;
		}

		
		$pdf->Cell(190,9,'FINALISTAS',1,1,'C',1);

		$pdf->Output();






?>
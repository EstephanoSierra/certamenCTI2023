<?php

			
		include ('plantillaVestuarioC.php');
		require '../conexion.php';



		$query = "SELECT candidatas.nombre, candidatas.Carrera, vestuario_casual.promedio From vestuario_casual INNER JOIN candidatas ON candidatas.id_candidatas=vestuario_casual.id_candidatas ORDER BY (promedio) DESC";

		$resultado = $conn->query($query);


		$pdf  = new PDF();
		
		$pdf-> AddPage();

		$pdf->SetFillColor(222,232,232);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(60,6,'NOMBRE',1,0,'C',1);
		$pdf->Cell(60,6,'CARRERA',1,0,'C',1);
		$pdf->Cell(60,6,'PROMEDIO',1,1,'C',1);

		$pdf->SetFont('Arial','',10);

		while($row = $resultado->fetch_assoc())
		{
			$pdf->Cell(60,6,$row['nombre'],1,0,'C',1);
			$pdf->Cell(60,6,$row['Carrera'],1,0,'C',1);
			$pdf->Cell(60,6,$row['promedio'],1,1,'C',1);
		}
		

		$pdf->Output();






?>
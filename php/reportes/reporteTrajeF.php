<?php

			
		include ('plantillaTrajeF.php');
		require '../conexion.php';



		$query = "SELECT candidatas.nombre, candidatas.Carrera, traje_fantasia.promedio 
		From traje_fantasia 
		INNER JOIN candidatas ON candidatas.id_candidatas=traje_fantasia.id_candidatas 
		ORDER BY (promedio) DESC";

		$resultado = $conn->query($query);


		$pdf  = new PDF();
		
		$pdf-> AddPage();

		$pdf->SetFillColor(255,255,255);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(10,11,'#',1,0,'C',1);
		$pdf->Cell(60,11,'NOMBRE',1,0,'C',1);
		$pdf->Cell(60,11,'CARRERA',1,0,'C',1);
		$pdf->Cell(60,11,'PROMEDIO',1,1,'C',1);

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
			$pdf->Cell(60,11,$row['promedio'],1,1,'C',1);
			}else{
            $pdf->SetFont('Arial','B',18);
			$pdf->SetFillColor(255,255,255);
			$pdf->Cell(10,9,$cont,1,0,'C',1);
			$pdf->Cell(60,9,$row['nombre'],1,0,'C',1);
			$pdf->Cell(60,9,$row['Carrera'],1,0,'C',1);
			$pdf->Cell(60,9,$row['promedio'],1,1,'C',1);
			}
			$cont++;
		}

		$pdf->Cell(190,9,'MEJOR TRAJE DE FANTASIA',1,1,'C',1);

		

		$pdf->Output();






?>
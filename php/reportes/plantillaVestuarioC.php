
<?php


	require('fpdf/fpdf.php');



	class PDF extends FPDF
	{

		function Header()
		{
			$this->Image('../../img/logo_colegio2.png', 5, 5, 30);
			$this->setFont('Arial','B',20);
			$this->Cell(30);
			$this->Cell(120,10,'Reporte De Vestuario Casual',0,0,'C');

			$this->Ln(40);

		}

	}





?>